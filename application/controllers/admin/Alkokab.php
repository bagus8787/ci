<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alkokab extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("alkokab_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["alkokab"] = $this->alkokab_model->getAll();
        $this->load->view("admin/alkokab/list", $data);
    }

    public function add()
    {
        $alkokab = $this->alkokab_model;
        $validation = $this->form_validation;
        $validation->set_rules($alkokab->rules());

        if ($validation->run()) {
            $alkokab->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/alkokab/new_form");
    }

    public function edit($KAlkokab = null)
    {
        if (!isset($KAlkokab)) redirect('admin/alkokab');
       
        $alkokab = $this->alkokab_model;
        $validation = $this->form_validation;
        $validation->set_rules($alkokab->rules());

        if ($validation->run()) {
            $alkokab->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/alkokab'));
        }

        $data["alkokab"] = $alkokab->getById($KAlkokab);
        if (!$data["alkokab"]) show_404();
        
        $this->load->view("admin/alkokab/edit_form", $data);
    }

    public function delete($KAlkokab=null)
    {
        if (!isset($KAlkokab)) show_404();
        
        if ($this->alkokab_model->delete($KAlkokab)) {
            redirect(site_url('admin/alkokab'));
        }
    }
}
