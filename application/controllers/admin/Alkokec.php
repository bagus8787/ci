<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alkokec extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("alkokec_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["alkokec"] = $this->alkokec_model->getAll();
        $this->load->view("admin/alkokec/list", $data);
    }

    public function add()
    {
        $alkokec = $this->alkokec_model;
        $validation = $this->form_validation;
        $validation->set_rules($alkokec->rules());

        if ($validation->run()) {
            $alkokec->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/alkokec/new_form");
    }

    public function edit($NIP = null)
    {
        if (!isset($NIP)) redirect('admin/alkokec');
       
        $alkokec = $this->alkokec_model;
        $validation = $this->form_validation;
        $validation->set_rules($alkokec->rules());

        if ($validation->run()) {
            $alkokec->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/alkokec'));
        }

        $data["alkokec"] = $alkokec->getById($NIP);
        if (!$data["alkokec"]) show_404();
        
        $this->load->view("admin/alkokec/edit_form", $data);
    }

    public function delete($NIP=null)
    {
        if (!isset($NIP)) show_404();
        
        if ($this->alkokec_model->delete($NIP)) {
            redirect(site_url('admin/alkokec'));
        }
    }
}
