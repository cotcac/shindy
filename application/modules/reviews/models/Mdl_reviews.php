<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_reviews extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_table() {
        $table = "reviews";
        return $table;
    }
     function insert()
    {
        $name=  $this->input->post('con_name');
        $email=  $this->input->post('con_email');

        $comment=  $this->input->post('con_comment');
        $date=date('Y-m-d H:i:s');
        $data=array(
            'name'=>$name,
            'email'=>$email,
 
            'comment'=>$comment,
            'date'=>$date
        );
         $this->db->insert('contact',$data);
           return ($this->db->affected_rows()>0) ? TRUE : FALSE;
        
    }
    function insert_review()
    {
        $name=  $this->input->post('re_name');
        $email=  $this->input->post('re_email');
        $comment=  $this->input->post('re_comment');
        $date=date('Y-m-d H:i:s');
        $data=array(
            'name'=>$name,
            'email'=>$email,
            'reviews'=>$comment,
            'date'=>$date
        );
         $this->db->insert('reviews',$data);
           return ($this->db->affected_rows()>0) ? TRUE : FALSE; 
    }
    function get_reviews($limit,$offset)
    {
        
       $this->db->select('*');
        $this->db->from('reviews');
        $this->db->limit($limit,$offset);
        $this->db->order_by("id", "desc");
        $query=  $this->db->get();// angels is table name
        return $query->result();
    }
    //get num row review
   function get_num_rows()
   {
       $query=$this->db->get('reviews');
       return $query->num_rows();
   }

    function get($order_by) {
        $table = $this->get_table();
        $this->db->order_by($order_by);
        $query = $this->db->get($table);
        return $query;
    }

    function get_with_limit($limit, $offset, $order_by) {
        $table = $this->get_table();
        $this->db->limit($limit, $offset);
        $this->db->order_by($order_by);
        $query = $this->db->get($table);
        return $query;
    }

    function get_where($id) {
        $table = $this->get_table();
        $this->db->where('id', $id);
        $query = $this->db->get($table);
        return $query;
    }

    function get_where_custom($col, $value) {
        $table = $this->get_table();
        $this->db->where($col, $value);
        $query = $this->db->get($table);
        return $query;
    }

    function _insert($data) {
        $table = $this->get_table();
        $this->db->insert($table, $data);
    }

    function _update($id, $data) {
        $table = $this->get_table();
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }

    function _delete($id) {
        $table = $this->get_table();
        $this->db->where('id', $id);
        $this->db->delete($table);
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    function count_where($column, $value) {
        $table = $this->get_table();
        $this->db->where($column, $value);
        $query = $this->db->get($table);
        $num_rows = $query->num_rows();
        return $num_rows;
    }

    function count_all() {
        $table = $this->get_table();
        $query = $this->db->get($table);
        $num_rows = $query->num_rows();
        return $num_rows;
    }

    function get_max() {
        $table = $this->get_table();
        $this->db->select_max('id');
        $query = $this->db->get($table);
        $row = $query->row();
        $id = $row->id;
        return $id;
    }

    function _custom_query($mysql_query) {
        $query = $this->db->query($mysql_query);
        return $query;
    }

}
