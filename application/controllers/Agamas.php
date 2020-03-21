<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agamas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("agama_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["agamas"] = $this->agama_model->getAll();
        $this->load->view("admin/agama/list", $data);
    }

    public function add()
    {
        $agama = $this->agama_model;
        $validation = $this->form_validation;
        $validation->set_rules($agama->rules());

        if ($validation->run()) {
            $agama->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/agama/new_form");
    }

    public function edit($KAgama = null)
    {
        if (!isset($KAgama)) redirect('admin/agamas');
       
        $agama = $this->agama_model;
        $validation = $this->form_validation;
        $validation->set_rules($agama->rules());

        if ($validation->run()) {
            $agama->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["agama"] = $agama->getById($KAgama);
        if (!$data["agama"]) show_404();
        
        $this->load->view("admin/agama/edit_form", $data);
    }

    public function delete($KAgama=null)
    {
        if (!isset($KAgama)) show_404();
        
        if ($this->agama_model->delete($KAgama)) {
            redirect(site_url('admin/agamas'));
        }
    }
}
