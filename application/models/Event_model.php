<?php
class Event_model extends CI_Model
{

    public function add_data($data)
    {
        $this->db->insert('bookings', $data);
        $id = $this->db->insert_id();
        $result = $this->db->get_where('bookings', array('id' => $id));
        return $result->row_array();
    }

    public function update_qr($id,$data){
        $this->db->where('id',$id);
        $this->db->update('bookings',$data);
        return true;
    }

    public function view_bookings(){
        $query=$this->db->get('bookings');
        return $query->result_array();
    }

    public function fetch_qr($id){
        $this->db->where('id',$id);
        $query = $this->db->get('bookings');
        return $query->result();
    }

}