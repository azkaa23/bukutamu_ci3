<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function insert_entry(){
        $data = [
            'name' => $this->input->post('name'),
            'email'=> $this->input->post('email'),
            'message'=>$this->input->post('message'),
        ];
        return $this->db->insert('guests',$data);
    }

    public function get_entries($from = null, $to = null){
        if ($from) $this->db->where('created_at >=', $from . ' 00:00:00');
        if ($to)   $this->db->where('created_at <=', $to . ' 23:59:59');
        $this->db->order_by('created_at','DESC');
        return $this->db->get('guests')->result_array();
    }
}
