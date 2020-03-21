<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dukpns_model extends CI_Model
{
    private $_table = "dukpns";

    public $KDuduk;
    public $NDuduk;

    public function rules()
    {
        return [
            ['field' => 'KDuduk',
            'label' => 'KDuduk',
            'rules' => 'required'],

            ['field' => 'NDuduk',
            'label' => 'NDuduk',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($KDuduk)
    {
        return $this->db->get_where($this->_table, ["KDuduk" => $KDuduk])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->KDuduk = $post["KDuduk"];
        $this->NDuduk = $post["NDuduk"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KDuduk = $post["KDuduk"];
        $this->NDuduk = $post["NDuduk"];
        $this->db->update($this->_table, $this, array('KDuduk' => $post['KDuduk']));
    }

    public function delete($KDuduk)
    {
        return $this->db->delete($this->_table, array("KDuduk" => $KDuduk));
    }
}
