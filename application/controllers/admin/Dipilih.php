<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dipilih extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dipilih_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["dipilih"] = $this->dipilih_model->getAll();
        $this->load->view("admin/dipilih/list", $data);
    }

    public function add()
    {
        $dipilih = $this->dipilih_model;
        $validation = $this->form_validation;
        $validation->set_rules($dipilih->rules());

        if ($validation->run()) {
            $dipilih->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/dipilih/new_form");
    }

    public function edit($NIP = null)
    {
        if (!isset($NIP)) redirect('admin/dipilih');
       
        $dipilih = $this->dipilih_model;
        $validation = $this->form_validation;
        $validation->set_rules($dipilih->rules());

        if ($validation->run()) {
            $dipilih->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/dipilih'));
        }

        $data["dipilih"] = $dipilih->getById($NIP);
        if (!$data["dipilih"]) show_404();
        
        $this->load->view("admin/dipilih/edit_form", $data);
    }

    public function delete($NIP=null)
    {
        if (!isset($NIP)) show_404();
        
        if ($this->dipilih_model->delete($NIP)) {
            redirect(site_url('admin/dipilih'));
        }
    }
}
