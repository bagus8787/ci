<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agama_model extends CI_Model
{
    private $_table = "agama";

    public $KAgama;
    public $NAgama;

    public function rules()
    {
        return [
            ['field' => 'KAgama',
            'label' => 'KAgama',
            'rules' => 'required'],

            ['field' => 'NAgama',
            'label' => 'NAgama',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($KAgama)
    {
        return $this->db->get_where($this->_table, ["KAgama" => $KAgama])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->KAgama = $post["KAgama"];
        $this->NAgama = $post["NAgama"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KAgama = $post["KAgama"];
        $this->NAgama = $post["NAgama"];
        $this->db->update($this->_table, $this, array('KAgama' => $post['KAgama']));
    }

    public function delete($KAgama)
    {
        return $this->db->delete($this->_table, array("KAgama" => $KAgama));
    }
}
