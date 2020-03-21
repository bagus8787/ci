<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dukpns extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dukpns_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["dukpns"] = $this->dukpns_model->getAll();
        $this->load->view("admin/dukpns/list", $data);
    }

    public function add()
    {
        $dukpns = $this->dukpns_model;
        $validation = $this->form_validation;
        $validation->set_rules($dukpns->rules());

        if ($validation->run()) {
            $dukpns->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/dukpns/new_form");
    }

    public function edit($KDuduk = null)
    {
        if (!isset($KDuduk)) redirect('admin/dukpns');
       
        $dukpns = $this->dukpns_model;
        $validation = $this->form_validation;
        $validation->set_rules($dukpns->rules());

        if ($validation->run()) {
            $dukpns->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/dukpns'));
        }

        $data["dukpns"] = $dukpns->getById($KDuduk);
        if (!$data["dukpns"]) show_404();
        
        $this->load->view("admin/dukpns/edit_form", $data);
    }

    public function delete($KDuduk=null)
    {
        if (!isset($KDuduk)) show_404();
        
        if ($this->dukpns_model->delete($KDuduk)) {
            redirect(site_url('admin/dukpns'));
        }
    }
}
