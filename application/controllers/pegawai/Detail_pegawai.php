<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("detail_pegawai_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["detail_pegawai"] = $this->detail_pegawai_model->getAll();
        $this->load->view("pegawai/detail_pegawai", $data);
    }

    public function add()
    {
        $detail_pegawai = $this->detail_pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($detail_pegawai->rules());

        if ($validation->run()) {
            $detail_pegawai->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("pegawai/detail_pegawai");
    }

    public function edit($NIP = null)
    {
        if (!isset($NIP)) redirect('pegawai/detail_pegawai');
       
        $detail_pegawai = $this->detail_pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($detail_pegawai->rules());

        if ($validation->run()) {
            $detail_pegawai->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["detail_pegawai"] = $detail_pegawai->getById($NIP);
        if (!$data["detail_pegawai"]) show_404();
        
        $this->load->view("pegawai/detail_pegawai", $data);
    }

    public function delete($NIP=null)
    {
        if (!isset($NIP)) show_404();
        
        if ($this->detail_pegawai_model->delete($NIP)) {
            redirect(site_url('pegawai/detail_pegawai'));
        }
    }
}
