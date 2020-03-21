<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bkartu_model extends CI_Model
{
    private $_table = "bkartu";

    public $NIP;
    public $KARTU;

    public function rules()
    {
        return [
            ['field' => 'NIP',
            'label' => 'NIP',
            'rules' => 'required'],

            ['field' => 'KARTU',
            'label' => 'KARTU',
            'rules' => 'required']
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
        $this->NIP = $post["NIP"];
        $this->KARTU = $post["KARTU"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->NIP = $post["NIP"];
        $this->KARTU = $post["KARTU"];
        $this->db->update($this->_table, $this, array('NIP' => $post['NIP']));
    }

    public function delete($NIP)
    {
        return $this->db->delete($this->_table, array("NIP" => $NIP));
    }
}
