<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dikfung_model extends CI_Model
{
    private $_table = "dikfung";

    public $KDikFung;
    public $NDikFung;

    public function rules()
    {
        return [
            ['field' => 'KDikFung',
            'label' => 'KDikFung',
            'rules' => 'required'],

            ['field' => 'NDikFung',
            'label' => 'NDikFung',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($KDikFung)
    {
        return $this->db->get_where($this->_table, ["KDikFung" => $KDikFung])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->KDikFung = $post["KDikFung"];
        $this->NDikFung = $post["NDikFung"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KDikFung = $post["KDikFung"];
        $this->NDikFung = $post["NDikFung"];
        $this->db->update($this->_table, $this, array('KDikFung' => $post['KDikFung']));
    }

    public function delete($KDikFung)
    {
        return $this->db->delete($this->_table, array("KDikFung" => $KDikFung));
    }
}
