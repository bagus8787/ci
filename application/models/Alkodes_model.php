<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Alkodes_model extends CI_Model
{
    private $_table = "alkodes";

    public $KAlkodes;
    public $NAlkodes;

    public function rules()
    {
        return [
            ['field' => 'KAlkodes',
            'label' => 'KAlkodes',
            'rules' => 'required'],

            ['field' => 'NAlkodes',
            'label' => 'NAlkodes',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($KAlkodes)
    {
        return $this->db->get_where($this->_table, ["KAlkodes" => $KAlkodes])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->KAlkodes = $post["KAlkodes"];
        $this->NAlkodes = $post["NAlkodes"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KAlkodes = $post["KAlkodes"];
        $this->NAlkodes = $post["NAlkodes"];
        $this->db->update($this->_table, $this, array('KAlkodes' => $post['KAlkodes']));
    }

    public function delete($KAlkodes)
    {
        return $this->db->delete($this->_table, array("KAlkodes" => $KAlkodes));
    }
}
