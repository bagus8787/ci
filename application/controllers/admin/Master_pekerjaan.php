<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_pekerjaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("master_pekerjaan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["master_pekerjaan"] = $this->master_pekerjaan_model->getAll();
        $this->load->view("admin/master_pekerjaan/list", $data);
    }

    public function add()
    {
        $master_pekerjaan = $this->master_pekerjaan_model;
        $validation = $this->form_validation;
        $validation->set_rules($master_pekerjaan->rules());

        if ($validation->run()) {
            $master_pekerjaan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/master_pekerjaan/new_form");
    }

    public function edit($id_teknisi = null)
    {
        if (!isset($id_teknisi)) redirect('admin/master_pekerjaan');
       
        $master_pekerjaan = $this->master_pekerjaan_model;
        $validation = $this->form_validation;
        $validation->set_rules($master_pekerjaan->rules());

        if ($validation->run()) {
            $master_pekerjaan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["master_pekerjaan"] = $master_pekerjaan->getById($id_teknisi);
        if (!$data["master_pekerjaan"]) show_404();
        
        $this->load->view("admin/master_pekerjaan/edit_form", $data);
    }

    public function delete($id_teknisi = null)
    {
        if (!isset($id_teknisi)) show_404();
        
        if ($this->master_pekerjaan_model->delete($id_teknisi)) {
            redirect(site_url('admin/master_pekerjaan'));
        }
    }
}
