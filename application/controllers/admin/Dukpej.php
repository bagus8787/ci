<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dukpej extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dukpej_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["dukpej"] = $this->dukpej_model->getAll();
        $this->load->view("admin/dukpej/list", $data);
    }

    public function add()
    {
        $dukpej = $this->dukpej_model;
        $validation = $this->form_validation;
        $validation->set_rules($dukpej->rules());

        if ($validation->run()) {
            $dukpej->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/dukpej/new_form");
    }

    public function edit($KDukJab = null)
    {
        if (!isset($KDukJab)) redirect('admin/dukpej');
       
        $dukpej = $this->dukpej_model;
        $validation = $this->form_validation;
        $validation->set_rules($dukpej->rules());

        if ($validation->run()) {
            $dukpej->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/dukpej'));
        }

        $data["dukpej"] = $dukpej->getById($KDukJab);
        if (!$data["dukpej"]) show_404();
        
        $this->load->view("admin/dukpej/edit_form", $data);
    }

    public function delete($KDukJab=null)
    {
        if (!isset($KDukJab)) show_404();
        
        if ($this->dukpej_model->delete($KDukJab)) {
            redirect(site_url('admin/dukpej'));
        }
    }
}
