<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_pegawai_model extends CI_Model
{
    private $_table = "identpeg";

    public $NIP;
    public $Nama;
    public $KAgama;
    public $AlJalan;
    public $KTLahir;
    public $TLahir;
    public $KStatus;
    public $KJPeg;

    public function rules()
    {
        return [
            ['field' => 'NIP',
            'label' => 'NIP',
            'rules' => 'required'],

            ['field' => 'Nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'AlJalan',
            'label' => 'AlJalan',
            'rules' => 'required'],

            ['field' => 'KTLahir',
            'label' => 'KTLahir',
            'rules' => 'required'],

            ['field' => 'TLahir',
            'label' => 'TLahir',
            'rules' => 'required'],

            ['field' => 'KAgama',
            'label' => 'KAgama',
            'rules' => 'required'],

            ['field' => 'KStatus',
            'label' => 'KStatus',
            'rules' => 'required'],

            ['field' => 'KJPeg',
            'label' => 'KJPeg',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($NIP)
    {
        return $this->db->get_where($this->_table, ["NIP" => $NIP])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->NIP      = $post["NIP"];
        $this->Nama     = $post["Nama"];
        $this->AlJalan  = $post["AlJalan"];
        $this->KTLahir  = $post["KTLahir"];
        $this->KAgama   = $post["KAgama"];
        $this->KStatus  = $post["KStatus"];
        $this->KJPeg    = $post["KJPeg"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->NIP      = $post["NIP"];
        $this->Nama     = $post["Nama"];
        $this->AlJalan  = $post["AlJalan"];
        $this->KTLahir  = $post["KTLahir"];
        $this->KAgama   = $post["KAgama"];
        $this->KStatus  = $post["KStatus"];
        $this->KJPeg    = $post["KJPeg"];
        $this->db->update($this->_table, $this, array('NIP' => $post['NIP']));
    }

    public function delete($NIP)
    {
        return $this->db->delete($this->_table, array("NIP" => $NIP));
    }

    function data($number,$offset){
        return $query = $this->db->get('_table',$number,$offset)->result();       
    }
 
    function jumlah_data(){
        return $this->db->get('_table')->num_rows();
    }
}
