<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Acpns extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("acpns_model","acpns");
        $this->load->library('form_validation');
        $this->load->helper(array('url'));

    }

     public function index()
    {
        $this->load->helper('url');
        $this->load->view('admin/acpns/list');
    }

    public function ajax_list()
    {
        $list = $this->acpns->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $acpns) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $acpns->NIP;
            $row[] = $acpns->NtBAKN;
            $row[] = $acpns->TNtBAKN;
            $row[] = $acpns->KPej;
            $row[] = $acpns->SKCPNS;
            $row[] = $acpns->TSKCPNS;
            $row[] = $acpns->TMTCPNS;
            $row[] = $acpns->KGolRu;
            $row[] = $acpns->NSTTPP;
            $row[] = $acpns->TSTTPP;
            $row[] = $acpns->TMTLGas;
            $row[] = $acpns->NtBAKN;
            $row[] = $acpns->STMT;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->acpns->count_all(),
                        "recordsFiltered" => $this->acpns->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function add()
    {
        $acpns = $this->acpns_model;
        $validation = $this->form_validation;
        $validation->set_rules($acpns->rules());

        if ($validation->run()) {
            $acpns->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/acpns/new_form");
    }

    public function edit($NIP = null)
    {
        if (!isset($NIP)) redirect('admin/acpns');
       
        $acpns = $this->acpns_model;
        $validation = $this->form_validation;
        $validation->set_rules($acpns->rules());

        if ($validation->run()) {
            $acpns->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["acpns"] = $acpns->getById($NIP);
        if (!$data["acpns"]) show_404();
        
        $this->load->view("admin/acpns/edit_form", $data);
    }

    public function delete($NIP = null)
    {
        if (!isset($NIP)) show_404();
        
        if ($this->acpns_model->delete($NIP)) {
            redirect(site_url('admin/acpns'));
        }
    }
}
