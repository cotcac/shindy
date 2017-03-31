<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_quotation extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function get_table() {
        $table = "quotation";
        return $table;
    }
     function can_unlock()
    {
        $id = $this->input->post('bookid');
        $pass = $this->input->post('password_lock');
        $this->db->select('id', 'pass');
        $this->db->where('id', $id);
        $this->db->where('pass', $pass);
        $query = $this->db->get('quotation');
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
    function get($order_by) {
        $table = $this->get_table();
        $this->db->order_by($order_by);
        $query = $this->db->get($table);
        return $query;
    }
    function get_with_limit($limit, $offset, $order_by) {
        $this->db->select('*,count(comment.comment_id) AS count_comment');
        $this->db->from('quotation');
         $this->db->join('comment','comment.fk_question_id=quotation.id','left');
        $this->db->group_by("quotation.id");
        $this->db->limit($limit, $offset);
        $this->db->order_by($order_by,'DESC');
        $query = $this->db->get();
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
