<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class fixing extends MX_Controller {
    function __construct() {
        parent::__construct();
    }
    function delete()
    {
          $id = $this->input->post('id');
          echo $this->reuse_model_function->_delete('fixing','id',$id);
    }
    function current()
    {
         
        $data['current']=  $this->uri->segment(1);
        $data['query']=  $this->get_with_limit(6,0,'id');
        $data['view_file'] = 'current'; //view file
        $data['module']='fixing'; //module
        $this->load->module('template');
        $this->template->no_header_no_footer($data);
    }
    function current_right()
    {
         
        $data['current']=  $this->uri->segment(1);
        $data['query']=  $this->get_with_limit(10,0,'id');
        $data['view_file'] = 'current_right'; //view file
        $data['module']='fixing'; //module
        $this->load->module('template');
        $this->template->no_header_no_footer($data);
    }
    function index()
    {
        $this->load->library('pagination');
        $soft='id';
        $config['base_url']= base_url().'fixing/index';
        $config['total_rows']=$this->reuse_model_function->count_all('fixing');
        $config['per_page']=9;
        $config['num_links']=4;
        $page = ($this->uri->segment(3,0));
        $config["cur_page"] = $page;
        $this->pagination->initialize($config);
        
        $data['current']=  $this->uri->segment(1);
        $data['query']=  $this->get_with_limit($config['per_page'],$page,$soft);
        $data['view_file'] = 'fix_index'; //view file
        $data['module']='fixing'; //module
        $this->load->module('template');
        $this->template->one_col($data);
    }
    function list_project()
    {
       

        $this->load->library('pagination');
        $soft='id';
        $config['base_url']= base_url().'fixing/list-project';
        $config['total_rows']=$this->reuse_model_function->count_all('fixing');
        $config['per_page']=20;
        $config['num_links']=4;
        $page = ($this->uri->segment(3,0));
        $config["cur_page"] = $page;
        $this->pagination->initialize($config);
        
        $data['current']=  $this->uri->segment(1);
        $data['query']=  $this->get_with_limit($config['per_page'],$page,$soft);
        $data['view_file'] = 'list_project'; //view file
        $data['module']='fixing'; //module
        $this->load->module('template');
        $this->template->admin($data);
    }
    function project_detail()
    {
        $id= $this->uri->segment(3);
        $data['current']=  $this->uri->segment(1);
        $data['query']=  $this->get_where($id)->row();
        $data['view_file'] = 'project_detail'; //view file
        $data['module']='fixing'; //module
        $this->load->module('template');
        $this->template->one_col($data);
    }
     function get_data_from_post() {
        $data['thumb'] = $this->input->post('thumb', TRUE);
        $data['name'] = $this->input->post('name', TRUE);
        $data['content'] = $this->input->post('content', TRUE);
        $data['date']=date('Y-m-d H:i:s');
        return $data;
    }
    function get_data_from_db($update_id){
         $query = $this->get_where($update_id);
         $data['thumb'] =$query->row()->thumb;
         $data['name'] =$query->row()->name;
         $data['content'] =$query->row()->content;
        if(!isset($data)){
            $data='';
        }
        return $data;
    }
    function insert_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $update_id = $this->input->post('id', TRUE);
        if ($this->form_validation->run($this) == TRUE) {
            $data = $this->get_data_from_post();
               if (is_numeric($update_id)) {
                $this->_update($update_id, $data);
            } else {
              $this->_insert($data);
            }
            redirect('fixing/list_project');
        } else {
            echo validation_errors();
        }
    }
    function add_project()
    {
         $update_id = $this->uri->segment(3); //get the update id from the url
          //get the update id from the post
        if (!isset($update_id)) {
            $update_id = $this->input->post('id', TRUE);
        }
        if (is_numeric($update_id)) {
            $data = $this->get_data_from_db($update_id);
            $data['update_id'] = $update_id;
        } else {
            $data = $this->get_data_from_post();
        }
        $data['update_id']=$update_id;//use this for the hidden fifle
        //get the update id from the post
        $data['view_file'] = 'add_project'; //view file
        $data['module']='fixing'; //module
        $this->load->module('template');
        $this->template->admin($data);
    }
    function get($order_by) {
        $this->load->model('mdl_fixing');
        $query = $this->mdl_fixing->get($order_by);
        return $query;
    }
    function get_with_limit($limit, $offset, $order_by) {
        if ((!is_numeric($limit)) || (!is_numeric($offset))) {
            die('Non-numeric variable!');
        }
        $this->load->model('mdl_fixing');
        $query = $this->mdl_fixing->get_with_limit($limit, $offset, $order_by);
        return $query;
    }
    function get_where($id) {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }
        $this->load->model('mdl_fixing');
        $query = $this->mdl_fixing->get_where($id);
        return $query;
    }
    function get_where_custom($col, $value) {
        $this->load->model('mdl_fixing');
        $query = $this->mdl_fixing->get_where_custom($col, $value);
        return $query;
    }
    function _insert($data) {
        $this->load->model('mdl_fixing');
        $this->mdl_fixing->_insert($data);
    }
    function _update($id, $data) {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }
        $this->load->model('mdl_fixing');
        $this->mdl_fixing->_update($id, $data);
    }
    function _delete($id) {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }
        $this->load->model('mdl_fixing');
        return  $this->mdl_fixing->_delete($id); 
    }
    function count_where($column, $value) {
        $this->load->model('mdl_fixing');
        $count = $this->mdl_fixing->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_fixing');
        $max_id = $this->mdl_fixing->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('mdl_fixing');
        $query = $this->mdl_fixing->_custom_query($mysql_query);
        return $query;
    }

}
