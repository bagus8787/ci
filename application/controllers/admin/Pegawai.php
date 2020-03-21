<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pegawai_model" , "pegawai");
        $this->load->library('form_validation');
        $this->load->helper(array('url'));
    }

    public function index()
    {
    	$this->load->helper('url');
        $this->load->view("admin/pegawai/list");
    }

    public function ajax_list()
    {
        $list = $this->pegawai->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $pegawai) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $pegawai->nipbaru;
            $row[] = $pegawai->NIP;
            $row[] = $pegawai->Nama;
            $row[] = $pegawai->GlDepan;
            $row[] = $pegawai->GlBlk;
            $row[] = $pegawai->KTLahir;
            $row[] = $pegawai->TLahir;
            $row[] = $pegawai->KJKel;
            $row[] = $pegawai->KAgama;
            $row[] = $pegawai->KStatus;
            $row[] = $pegawai->KJPeg;
            $row[] = $pegawai->KDuduk;
            $row[] = $pegawai->KSKawin;
            $row[] = $pegawai->Suku;
            $row[] = $pegawai->KGolDar;
            $row[] = $pegawai->AlJalan;
            $row[] = $pegawai->AlRT;
            $row[] = $pegawai->AlRW;
            $row[] = $pegawai->AlTelp;
            $row[] = $pegawai->AlKoProp;
            $row[] = $pegawai->AlKoKab;
            $row[] = $pegawai->AlKoKec;
            $row[] = $pegawai->AlKoDes;
            $row[] = $pegawai->KPos;
            $row[] = $pegawai->KAParpol;
            $row[] = $pegawai->NPAP_G;
            $row[] = $pegawai->NKarpeg;
            $row[] = $pegawai->NAskes;
            $row[] = $pegawai->NTaspen;
            $row[] = $pegawai->NKaris_su;
            $row[] = $pegawai->NPWP;
            $row[] = $pegawai->Nopen;
            $row[] = $pegawai->File_Bmp;
            $row[] = $pegawai->Aktif;
            $row[] = $pegawai->JJiwa;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->pegawai->count_all(),
                        "recordsFiltered" => $this->pegawai->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


    public function add()
    {
        $pegawai = $this->pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if ($validation->run()) {
            $pegawai->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/pegawai/new_form");
    }

    public function edit($NIP = null)
    {
        if (!isset($NIP)) redirect('admin/pegawai');
       
        $pegawai = $this->pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if ($validation->run()) {
            $pegawai->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/pegawai'));
        }

        $data["pegawai"] = $pegawai->getById($NIP);
        if (!$data["pegawai"]) show_404();
        
        $this->load->view("admin/pegawai/edit_form", $data);
    }

    public function delete($NIP=null)
    {
        if (!isset($NIP)) show_404();
        
        if ($this->pegawai_model->delete($NIP)) {
            redirect(site_url('admin/pegawai'));
        }
    }
}
