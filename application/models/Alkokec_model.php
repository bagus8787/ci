<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Alkokec_model extends CI_Model
{
    private $_table = "alkokec";

    public $KAlkokec;
    public $NAlkokec;

    public function rules()
    {
        return [
            ['field' => 'KAlkokec',
            'label' => 'KAlkokec',
            'rules' => 'required'],

            ['field' => 'NAlkokec',
            'label' => 'NAlkokec',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($KAlkokec)
    {
        return $this->db->get_where($this->_table, ["KAlkokec" => $KAlkokec])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->KAlkokec = $post["KAlkokec"];
        $this->NAlkokec = $post["NAlkokec"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KAlkokec = $post["KAlkokec"];
        $this->NAlkokec = $post["NAlkokec"];
        $this->db->update($this->_table, $this, array('KAlkokec' => $post['KAlkokec']));
    }

    public function delete($KAlkokec)
    {
        return $this->db->delete($this->_table, array("KAlkokec" => $KAlkokec));
    }
}
