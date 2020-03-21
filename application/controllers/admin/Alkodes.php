<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alkodes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("alkodes_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["alkodes"] = $this->alkodes_model->getAll();
        $this->load->view("admin/alkodes/list", $data);
    }

    public function add()
    {
        $alkodes = $this->alkodes_model;
        $validation = $this->form_validation;
        $validation->set_rules($alkodes->rules());

        if ($validation->run()) {
            $alkodes->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/alkodes/new_form");
    }

    public function edit($KAlkodes = null)
    {
        if (!isset($KAlkodes)) redirect('admin/alkodes');
       
        $alkodes = $this->alkodes_model;
        $validation = $this->form_validation;
        $validation->set_rules($alkodes->rules());

        if ($validation->run()) {
            $alkodes->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/alkodes'));
        }

        $data["alkodes"] = $alkodes->getById($KAlkodes);
        if (!$data["alkodes"]) show_404();
        
        $this->load->view("admin/alkodes/edit_form", $data);
    }

    public function delete($KAlkodes=null)
    {
        if (!isset($KAlkodes)) show_404();
        
        if ($this->alkodes_model->delete($KAlkodes)) {
            redirect(site_url('admin/alkodes'));
        }
    }
}
