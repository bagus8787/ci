<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dikfung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("dikfung_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["dikfung"] = $this->dikfung_model->getAll();
        $this->load->view("admin/dikfung/list", $data);
    }

    public function add()
    {
        $dikfung = $this->dikfung_model;
        $validation = $this->form_validation;
        $validation->set_rules($dikfung->rules());

        if ($validation->run()) {
            $dikfung->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/dikfung/new_form");
    }

    public function edit($KDikFung = null)
    {
        if (!isset($KDikFung)) redirect('admin/dikfung');
       
        $dikfung = $this->dikfung_model;
        $validation = $this->form_validation;
        $validation->set_rules($dikfung->rules());

        if ($validation->run()) {
            $dikfung->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/dikfung'));
        }

        $data["dikfung"] = $dikfung->getById($KDikFung);
        if (!$data["dikfung"]) show_404();
        
        $this->load->view("admin/dikfung/edit_form", $data);
    }

    public function delete($KDikFung=null)
    {
        if (!isset($KDikFung)) show_404();
        
        if ($this->dikfung_model->delete($KDikFung)) {
            redirect(site_url('admin/dikfung'));
        }
    }
}
