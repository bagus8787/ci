<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Alkokab_model extends CI_Model
{
    private $_table = "alkokab";

    public $KAlkokab;
    public $NAlkokab;

    public function rules()
    {
        return [
            ['field' => 'KAlkokab',
            'label' => 'KAlkokab',
            'rules' => 'required'],

            ['field' => 'NAlkokab',
            'label' => 'NAlkokab',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($KAlkokab)
    {
        return $this->db->get_where($this->_table, ["KAlkokab" => $KAlkokab])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->KAlkokab = $post["KAlkokab"];
        $this->NAlkokab = $post["NAlkokab"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KAlkokab = $post["KAlkokab"];
        $this->NAlkokab = $post["NAlkokab"];
        $this->db->update($this->_table, $this, array('KAlkokab' => $post['KAlkokab']));
    }

    public function delete($KAlkokab)
    {
        return $this->db->delete($this->_table, array("KAlkokab" => $KAlkokab));
    }
}
