<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Eselon_model extends CI_Model
{
    private $_table = "eselon";

    public $KEselon;
    public $NEselon;
    public $Tunjangan;
    public $Bup;

    public function rules()
    {
        return [
            ['field' => 'KEselon',
            'label' => 'KEselon',
            'rules' => 'required'],

            ['field' => 'NEselon',
            'label' => 'NEselon',
            'rules' => 'required'],

            ['field' => 'Tunjangan',
            'label' => 'Tunjangan',
            'rules' => 'required'],

            ['field' => 'Bup',
            'label' => 'Bup',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($KEselon)
    {
        return $this->db->get_where($this->_table, ["KEselon" => $KEselon])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->KEselon      = $post["KEselon"];
        $this->NEselon      = $post["NEselon"];
        $this->Tunjangan    = $post["Tunjangan"];
        $this->Bup          = $post["Bup"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->KEselon      = $post["KEselon"];
        $this->NEselon      = $post["NEselon"];
        $this->Tunjangan    = $post["Tunjangan"];
        $this->Bup          = $post["Bup"];
        $this->db->update($this->_table, $this, array('KEselon' => $post['KEselon']));
    }

    public function delete($KEselon)
    {
        return $this->db->delete($this->_table, array("KEselon" => $KEselon));
    }
}
