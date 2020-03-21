<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dukpej_model extends CI_Model
{
    private $_table = "dukpej";

    public $KDukJab;
    public $NDukJab;

    public function rules()
    {
        return [
            ['field' => 'KDukJab',
            'label' => 'KDukJab',
            'rules' => 'required'],

            ['field' => 'NDukJab',
            'label' => 'NDukJab',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($KDukJab)
    {
        return $this->db->get_where($this->_table, ["KDukJab" => $KDukJab])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->KDukJab = $post["KDukJab"];
        $this->NDukJab = $post["NDukJab"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KDukJab = $post["KDukJab"];
        $this->NDukJab = $post["NDukJab"];
        $this->db->update($this->_table, $this, array('KDukJab' => $post['KDukJab']));
    }

    public function delete($KDukJab)
    {
        return $this->db->delete($this->_table, array("KDukJab" => $KDukJab));
    }
}
