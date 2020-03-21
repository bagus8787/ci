<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dikstr extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dikstr_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["dikstr"] = $this->dikstr_model->getAll();
        $this->load->view("admin/dikstr/list", $data);
    }

    public function add()
    {
        $dikstr = $this->dikstr_model;
        $validation = $this->form_validation;
        $validation->set_rules($dikstr->rules());

        if ($validation->run()) {
            $dikstr->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/dikstr/new_form");
    }

    public function edit($KDikStr = null)
    {
        if (!isset($KDikStr)) redirect('admin/dikstr');
       
        $dikstr = $this->dikstr_model;
        $validation = $this->form_validation;
        $validation->set_rules($dikstr->rules());

        if ($validation->run()) {
            $dikstr->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/dikstr'));
        }

        $data["dikstr"] = $dikstr->getById($KDikStr);
        if (!$data["dikstr"]) show_404();
        
        $this->load->view("admin/dikstr/edit_form", $data);
    }

    public function delete($KDikStr=null)
    {
        if (!isset($KDikStr)) show_404();
        
        if ($this->dikstr_model->delete($KDikStr)) {
            redirect(site_url('admin/dikstr'));
        }
    }
}
