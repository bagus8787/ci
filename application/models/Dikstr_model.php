<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dikstr_model extends CI_Model
{
    private $_table = "dikstr";

    public $KDikStr;
    public $NDikStr;

    public function rules()
    {
        return [
            ['field' => 'KDikStr',
            'label' => 'KDikStr',
            'rules' => 'required'],

            ['field' => 'NDikStr',
            'label' => 'NDikStr',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($KDikStr)
    {
        return $this->db->get_where($this->_table, ["KDikStr" => $KDikStr])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->KDikStr = $post["KDikStr"];
        $this->NDikStr = $post["NDikStr"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KDikStr = $post["KDikStr"];
        $this->NDikStr = $post["NDikStr"];
        $this->db->update($this->_table, $this, array('KDikStr' => $post['KDikStr']));
    }

    public function delete($KDikStr)
    {
        return $this->db->delete($this->_table, array("KDikStr" => $KDikStr));
    }
}
