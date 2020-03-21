<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{
    var $table_pegawai = "viewpegawai";
    
    var $column_order = array(
    null,'nipbaru','NIP','Nama','GlDepan','GlBlk','KTLahir','TLahir','KJKel','KAgama','KStatus','KJPeg','KDuduk','KSKawin' ,'Suku','KGolDar','AlJalan','AlRT','AlRW','AlTelp','AlKoProp','AlKoKab','AlKoKec','AlKoDes','KPos','KAParpol','NPAP_G' ,'NKarpeg','NAskes','NTaspen','NKaris_su','NPWP','Nopen','File_Bmp','Aktif','JJiwa'); //set column field database for datatable orderable

    var $column_search = array('nipbaru','NIP','Nama','GlDepan','GlBlk','KTLahir','TLahir','KJKel','KAgama','KStatus','KJPeg','KDuduk','KSKawin' ,'Suku','KGolDar','AlJalan','AlRT','AlRW','AlTelp','AlKoProp','AlKoKab','AlKoKec','AlKoDes','KPos','KAParpol','NPAP_G' ,'NKarpeg','NAskes','NTaspen','NKaris_su','NPWP','Nopen','File_Bmp','Aktif','JJiwa'); //set column field database for datatable searchable 
    var $order = array('NIP' => 'asc'); // default order 

    public $nipbaru;
    public $NIP;
    public $Nama;
    public $GlDepan;
    public $GlBlk;
    public $KTLahir;
    public $TLahir; 
    public $KJKel; 
    public $KAgama; 
    public $KStatus; 
    public $KJPeg; 
    public $KDuduk; 
    public $KSKawin; 
    public $Suku; 
    public $KGolDar; 
    public $AlJalan; 
    public $AlRT;
    public $AlRW; 
    public $AlTelp; 
    public $AlKoProp; 
    public $AlKoKab; 
    public $AlKoKec; 
    public $AlKoDes; 
    public $KPos; 
    public $KAParpol; 
    public $NPAP_G; 
    public $NKarpeg; 
    public $NAskes; 
    public $NTaspen; 
    public $NKaris_su; 
    public $NPWP; 
    public $Nopen; 
    public $File_Bmp;
    public $Aktif; 
    public $JJiwa;

    public function rules()
    {
        return [
            ['field' => 'nipbaru',
            'label' => 'nipbaru',
            'rules' => 'required'],

            ['field' => 'NIP',
            'label' => 'NIP',
            'rules' => 'required'],

            ['field' => 'Nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'GlDepan',
            'label' => 'GlDepan',
            'rules' => 'required'],

            ['field' => 'GlBlk',
            'label' => 'GlBlk',
            'rules' => 'required'],

            ['field' => 'KTLahir',
            'label' => 'KTLahir',
            'rules' => 'required'],

            ['field' => 'TLahir',
            'label' => 'TLahir',
            'rules' => 'required'],

            ['field' => 'KJKel',
            'label' => 'KJKel',
            'rules' => 'required'],

            ['field' => 'KAgama',
            'label' => 'KAgama',
            'rules' => 'required'],

            ['field' => 'KStatus',
            'label' => 'KStatus',
            'rules' => 'required'],

            ['field' => 'KJPeg',
            'label' => 'KJPeg',
            'rules' => 'required'],

            ['field' => 'KDuduk',
            'label' => 'KDuduk',
            'rules' => 'required'],

            ['field' => 'KSKawin',
            'label' => 'KSKawin',
            'rules' => 'required'],

            ['field' => 'Suku',
            'label' => 'Suku',
            'rules' => 'required'],

            ['field' => 'KGolDar',
            'label' => 'KGolDar',
            'rules' => 'required'],

            ['field' => 'AlJalan',
            'label' => 'AlJalan',
            'rules' => 'required'],

            ['field' => 'AlRT',
            'label' => 'AlRT',
            'rules' => 'required'],

            ['field' => 'AlRW',
            'label' => 'AlRW',
            'rules' => 'required'],

            ['field' => 'AlTelp',
            'label' => 'AlTelp',
            'rules' => 'required'],

            ['field' => 'AlKoProp',
            'label' => 'AlKoProp',
            'rules' => 'required'],

            ['field' => 'AlKoKab',
            'label' => 'AlKoKab',
            'rules' => 'required'],

            ['field' => 'AlKoKec',
            'label' => 'AlKoKec',
            'rules' => 'required'],

            ['field' => 'AlKoDes',
            'label' => 'AlKoDes',
            'rules' => 'required'],

            ['field' => 'KPos',
            'label' => 'KPos',
            'rules' => 'required'],

            ['field' => 'KAParpol',
            'label' => 'KAParpol',
            'rules' => 'required'],

             ['field' => 'NPAP_G',
            'label' => 'NPAP_G',
            'rules' => 'required'],

            ['field' => 'NKarpeg',
            'label' => 'NKarpeg',
            'rules' => 'required'],

            ['field' => 'NAskes',
            'label' => 'NAskes',
            'rules' => 'required'],

            ['field' => 'NTaspen',
            'label' => 'NTaspen',
            'rules' => 'required'],

            ['field' => 'NKaris_su',
            'label' => 'NKaris_su',
            'rules' => 'required'],

            ['field' => 'NPWP',
            'label' => 'NPWP',
            'rules' => 'required'],

            ['field' => 'Nopen',
            'label' => 'Nopen',
            'rules' => 'required'],

            ['field' => 'File_Bmp',
            'label' => 'File_Bmp',
            'rules' => 'required'],

            ['field' => 'Aktif',
            'label' => 'Aktif',
            'rules' => 'required'],

            ['field' => 'JJiwa',
            'label' => 'JJiwa',
            'rules' => 'required']
        ];
    }

    private function _get_datatables_query()
    {
         
        $this->db->from($this->table_pegawai);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table_pegawai);
        return $this->db->count_all_results();
    }

    public function getAll()
    {
        return $this->db->get($this->table_pegawai)->result();
    }
     
    public function getById($NIP)
    {
        return $this->db->get_where($this->table_pegawai, ["NIP" => $NIP])->row();
    }

    public function save()
    {
        $post = $this->input->post();

        $this->nipbaru  = $post["nipbaru"];
        $this->NIP      = $post["NIP"];
        $this->Nama     = $post["Nama"];
        $this->GlDepan  = $post["GlDepan"];
        $this->GlBlk    = $post["GlBlk"];
        $this->KTLahir  = $post["KTLahir"];
        $this->TLahir   = $post["TLahir"];
        $this->KJKel    = $post["KJKel"];
        $this->KAgama   = $post["KAgama"];
        $this->KStatus  = $post["KStatus"];
        $this->KJPeg    = $post["KJPeg"];
        $this->KDuduk   = $post["KDuduk"];
        $this->KSKawin  = $post["KSKawin"];
        $this->Suku     = $post["Suku"];
        $this->KGolDar  = $post["KGolDar"];
        $this->AlJalan  = $post["AlJalan"];
        $this->AlRT     = $post["AlRT"];
        $this->AlRW     = $post["AlRW"];
        $this->AlTelp   = $post["AlTelp"];
        $this->AlKoProp = $post["AlKoProp"];
        $this->AlKoKab  = $post["AlKoKab"];
        $this->AlKoKec  = $post["AlKoKec"];
        $this->AlKoDes  = $post["AlKoDes"];
        $this->KPos     = $post["KPos"];
        $this->KAParpol = $post["KAParpol"];
        $this->NPAP_G   = $post["NPAP_G"];
        $this->NKarpeg  = $post["NKarpeg"];
        $this->NAskes   = $post["NAskes"];
        $this->NTaspen  = $post["NTaspen"];
        $this->NKaris_su = $post["NKaris_su"];
        $this->NPWP     = $post["NPWP"];
        $this->Nopen    = $post["Nopen"];
        $this->File_Bmp = $post["File_Bmp"];
        $this->Aktif    = $post["Aktif"];
        $this->JJiwa    = $post["JJiwa"];

        $this->db->insert($this->table_pegawai, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        $this->nipbaru  = $post["nipbaru"];
        $this->NIP      = $post["NIP"];
        $this->Nama     = $post["Nama"];
        $this->GlDepan  = $post["GlDepan"];
        $this->GlBlk    = $post["GlBlk"];
        $this->KTLahir  = $post["KTLahir"];
        $this->TLahir   = $post["TLahir"];
        $this->KJKel    = $post["KJKel"];
        $this->KAgama   = $post["KAgama"];
        $this->KStatus  = $post["KStatus"];
        $this->KJPeg    = $post["KJPeg"];
        $this->KDuduk   = $post["KDuduk"];
        $this->KSKawin  = $post["KSKawin"];
        $this->Suku     = $post["Suku"];
        $this->KGolDar  = $post["KGolDar"];
        $this->AlJalan  = $post["AlJalan"];
        $this->AlRT     = $post["AlRT"];
        $this->AlRW     = $post["AlRW"];
        $this->AlTelp   = $post["AlTelp"];
        $this->AlKoProp = $post["AlKoProp"];
        $this->AlKoKab  = $post["AlKoKab"];
        $this->AlKoKec  = $post["AlKoKec"];
        $this->AlKoDes  = $post["AlKoDes"];
        $this->KPos     = $post["KPos"];
        $this->KAParpol = $post["KAParpol"];
        $this->NPAP_G   = $post["NPAP_G"];
        $this->NKarpeg  = $post["NKarpeg"];
        $this->NAskes   = $post["NAskes"];
        $this->NTaspen  = $post["NTaspen"];
        $this->NKaris_su = $post["NKaris_su"];
        $this->NPWP     = $post["NPWP"];
        $this->Nopen    = $post["Nopen"];
        $this->File_Bmp = $post["File_Bmp"];
        $this->Aktif    = $post["Aktif"];
        $this->JJiwa    = $post["JJiwa"];
        $this->db->update($this->table_pegawai, $this, array('NIP' => $post['NIP']));
    }

    public function delete($NIP)
    {
        return $this->db->delete($this->table_pegawai, array("NIP" => $NIP));
    }

}
