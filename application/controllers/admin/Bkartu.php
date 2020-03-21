<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bkartu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("bkartu_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["bkartu"] = $this->bkartu_model->getAll();
        $this->load->view("admin/bkartu/list", $data);
    }

    public function add()
    {
        $bkartu = $this->bkartu_model;
        $validation = $this->form_validation;
        $validation->set_rules($bkartu->rules());

        if ($validation->run()) {
            $bkartu->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/bkartu/new_form");
    }

    public function edit($NIP = null)
    {
        if (!isset($NIP)) redirect('admin/bkartu');
       
        $bkartu = $this->bkartu_model;
        $validation = $this->form_validation;
        $validation->set_rules($bkartu->rules());

        if ($validation->run()) {
            $bkartu->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/bkartu'));
        }

        $data["bkartu"] = $bkartu->getById($NIP);
        if (!$data["bkartu"]) show_404();
        
        $this->load->view("admin/bkartu/edit_form", $data);
    }

    public function delete($NIP=null)
    {
        if (!isset($NIP)) show_404();
        
        if ($this->bkartu_model->delete($NIP)) {
            redirect(site_url('admin/bkartu'));
        }
    }
}
