<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eselon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("eselon_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["eselon"] = $this->eselon_model->getAll();
        $this->load->view("admin/eselon/list", $data);
    }

    public function add()
    {
        $eselon = $this->eselon_model;
        $validation = $this->form_validation;
        $validation->set_rules($eselon->rules());

        if ($validation->run()) {
            $eselon->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/eselon/new_form");
    }

    public function edit($KEselon = null)
    {
        if (!isset($KEselon)) redirect('admin/eselon');
       
        $eselon = $this->eselon_model;
        $validation = $this->form_validation;
        $validation->set_rules($eselon->rules());

        if ($validation->run()) {
            $eselon->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/eselon'));
        }

        $data["eselon"] = $eselon->getById($KEselon);
        if (!$data["eselon"]) show_404();
        
        $this->load->view("admin/eselon/edit_form", $data);
    }

    public function delete($KEselon=null)
    {
        if (!isset($KEselon)) show_404();
        
        if ($this->eselon_model->delete($KEselon)) {
            redirect(site_url('admin/eselon'));
        }
    }
}
