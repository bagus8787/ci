<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alkab extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("alkab_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["alkab"] = $this->alkab_model->getAll();
        $this->load->view("admin/alkab/list", $data);
    }

    public function add()
    {
        $alkab = $this->alkab_model;
        $validation = $this->form_validation;
        $validation->set_rules($alkab->rules());

        if ($validation->run()) {
            $alkab->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/alkab/new_form");
    }

    public function edit($KAlkokab = null)
    {
        if (!isset($KAlkokab)) redirect('admin/alkab');
       
        $alkab = $this->alkab_model;
        $validation = $this->form_validation;
        $validation->set_rules($alkab->rules());

        if ($validation->run()) {
            $alkab->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/alkab'));
        }

        $data["alkab"] = $alkab->getById($KAlkokab);
        if (!$data["alkab"]) show_404();
        
        $this->load->view("admin/alkab/edit_form", $data);
    }

    public function delete($KAlkokab=null)
    {
        if (!isset($KAlkokab)) show_404();
        
        if ($this->alkab_model->delete($KAlkokab)) {
            redirect(site_url('admin/alkab'));
        }
    }
}
