<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Acpns_model extends CI_Model
{
    var $_table = "acpns";

    var $column_order = array(
    null, 'NIP','NtBAKN','TNtBAKN','KPej','SKCPNS','TSKCPNS','TMTCPNS','KGolRu','NSTTPP','TSTTPP','TMTLGas','STMT'); //set column field database for datatable orderable
    var $column_search = array('NIP','NtBAKN','TNtBAKN','KPej','SKCPNS','TSKCPNS','TMTCPNS','KGolRu','NSTTPP','TSTTPP','TMTLGas','STMT'); //set column field database for datatable searchable 
    var $order = array('NIP' => 'asc'); // default order 

    public $NIP;
    public $NtBAKN;
    public $TNtBAKN;
    public $KPej;
    public $SKCPNS;
    public $TSKCPNS;
    public $TMTCPNS;
    public $KGolRu;
    public $NSTTPP;
    public $TSTTPP;
    public $TMTLGas;
    public $STMT;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
         
        $this->db->from($this->_table);
 
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
        $this->db->from($this->_table);
        return $this->db->count_all_results();
    }
 

    public function rules()
    {
        return [
            ['field' => 'NIP',
            'label' => 'NIP',
            'rules' => 'required'],

            ['field' => 'NtBAKN',
            'label' => 'NtBAKN',
            'rules' => 'required'],

            ['field' => 'TNtBAKN',
            'label' => 'TNtBAKN',
            'rules' => 'required'],

            ['field' => 'KPej',
            'label' => 'KPej',
            'rules' => 'required'],

             ['field' => 'SKCPNS',
            'label' => 'SKCPNS',
            'rules' => 'required'],

            ['field' => 'TSKCPNS',
            'label' => 'TSKCPNS',
            'rules' => 'required'],

            ['field' => 'TMTCPNS',
            'label' => 'TMTCPNS',
            'rules' => 'required'],

            ['field' => 'KGolRu',
            'label' => 'KGolRu',
            'rules' => 'required'],

            ['field' => 'NSTTPP',
            'label' => 'NSTTPP',
            'rules' => 'required'],

            ['field' => 'TSTTPP',
            'label' => 'TSTTPP',
            'rules' => 'required'],

             ['field' => 'TMTLGas',
            'label' => 'TMTLGas',
            'rules' => 'required'],

            ['field' => 'STMT',
            'label' => 'STMT',
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
        $this->NIP      = $post["NIP"];
        $this->NtBAKN   = $post["NtBAKN"];
        $this->TNtBAKN  = $post["TNtBAKN"];
        $this->KPej     = $post["KPej"];
        $this->SKCPNS   = $post["SKCPNS"];
        $this->TSKCPNS  = $post["TSKCPNS"];
        $this->TMTCPNS  = $post["TMTCPNS"];
        $this->KGolRu   = $post["KGolRu"];
        $this->NSTTPP   = $post["NSTTPP"];
        $this->TSTTPP   = $post["TSTTPP"];
        $this->TMTLGas  = $post["TMTLGas"];
        $this->STMT     = $post["STMT"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->NIP      = $post["NIP"];
        $this->NtBAKN   = $post["NtBAKN"];
        $this->TNtBAKN  = $post["TNtBAKN"];
        $this->KPej     = $post["KPej"];
        $this->SKCPNS   = $post["SKCPNS"];
        $this->TSKCPNS  = $post["TSKCPNS"];
        $this->TMTCPNS  = $post["TMTCPNS"];
        $this->KGolRu   = $post["KGolRu"];
        $this->NSTTPP   = $post["NSTTPP"];
        $this->TSTTPP   = $post["TSTTPP"];
        $this->TMTLGas  = $post["TMTLGas"];
        $this->STMT     = $post["STMT"];
        $this->db->update($this->_table, $this, array('NIP' => $post['NIP']));
    }

    public function delete($NIP)
    {
        return $this->db->delete($this->_table, array("NIP" => $NIP));
    }

     function data($number,$offset){
        return $query = $this->db->get('acpns',$number,$offset)->result();       
    }
 
    function jumlah_data(){
        return $this->db->get('acpns')->num_rows();
    }
}
