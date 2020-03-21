<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master_pekerjaan_model extends CI_Model
{
    private $_table = "master_pekerjaan";

    public $id_teknisi;
    public $nama_teknisi;
    public $kategori_pekerjaan;
    public $status;
    public $ket_stock;
    public $unit;
    public $kategori_alat;
    public $ket;

    public function rules()
    {
        return [
            ['field' => 'id_teknisi',
            'label' => 'id_teknisi',
            'rules' => 'required'],

            ['field' => 'nama_teknisi',
            'label' => 'nama_teknisi',
            'rules' => 'required'],

            ['field' => 'kategori_pekerjaan',
            'label' => 'kategori_pekerjaan',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'status',
            'rules' => 'required'],

            ['field' => 'ket_stock',
            'label' => 'ket_stock',
            'rules' => 'required'],

            ['field' => 'unit',
            'label' => 'unit',
            'rules' => 'required'],

            ['field' => 'kategori_alat',
            'label' => 'kategori_alat',
            'rules' => 'required'],

            ['field' => 'ket',
            'label' => 'ket',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_teknisi)
    {
        return $this->db->get_where($this->_table, ["id_teknisi" => $id_teknisi])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_teknisi = $post["id_teknisi"];
        // $this->NAgama = $post["NAgama"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_teknisi = $post["id_teknisi"];
        // $this->NAgama = $post["NAgama"];
        $this->db->update($this->_table, $this, array('id_teknisi' => $post['id_teknisi']));
    }

    public function delete($id_teknisi)
    {
        return $this->db->delete($this->_table, array("id_teknisi" => $id_teknisi));
    }
}
