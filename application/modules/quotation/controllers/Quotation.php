<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Quotation extends MX_Controller {
    function __construct() {
        parent::__construct();
    }
    function lock()
    {
         $this->load->model('mdl_quotation');
          $this->load->library('form_validation');
        $this->form_validation->set_rules('bookid', 'ID', 'required|callback_check_lock');
        $this->form_validation->set_rules('password_lock', 'Password', 'required');
        if ($this->form_validation->run($this) == TRUE) {
                $data = base_url().'quotation/detail/'.$this->input->post('bookid').'/'.$this->input->post('password_lock');
                $array = array();
                $array['success'] = true;
                $array['data'] = $data;
                 echo json_encode($array);
        } else {
             $array = array();
                $array['success'] = false;
                $array['data'] = validation_errors();
                 echo json_encode($array);
        }
        
        
    }
     function check_lock(){
         $this->load->model('mdl_quotation');
        if ($this->mdl_quotation->can_unlock()) {
            return TRUE;
        } else {
            $this->form_validation->set_message('check_lock', 'Incorrect password');
            return FALSE;
        }
    }
    function delete()
    {
          $id = $this->input->post('id');
          echo $this->reuse_model_function->_delete('quotation','id',$id);
    }
    function index(){
        $this->load->model('mdl_quotation');
         $this->load->library('pagination');
        $soft='id';
        $config['base_url']= base_url().'quotation/index';
        $config['total_rows']=$this->reuse_model_function->count_all('quotation');
        $config['per_page']=40;
        $config['num_links']=4;
        $page = ($this->uri->segment(3,0));
        $config["cur_page"] = $page;
        $this->pagination->initialize($config);
        
        $data['current']=  $this->uri->segment(1);
        $data['records']=  $this->get_with_limit($config['per_page'],$page,$soft)->result();
        
      // $data['records'] = $this->get('id')->result();
       $data['view_file']='show_page';//view file
       $data['module']='quotation';//module
       $this->load->module('template');
       $this->template->one_col($data);
    }
    function list_quotation()
    {
          $this->load->model('mdl_quotation');
         $this->load->library('pagination');
        $soft='id';
        $config['base_url']= base_url().'quotation/index';
        $config['total_rows']=$this->reuse_model_function->count_all('quotation');
        $config['per_page']=40;
        $config['num_links']=4;
        $page = ($this->uri->segment(3,0));
        $config["cur_page"] = $page;
        $this->pagination->initialize($config);
        
        $data['current']=  $this->uri->segment(1);
        $data['records']=  $this->get_with_limit($config['per_page'],$page,$soft)->result();
        
      // $data['records'] = $this->get('id')->result();
       $data['view_file']='admin_quotation';//view file
       $data['module']='quotation';//module
       $this->load->module('template');
       $this->template->admin($data);
    }
     function show_page()
    {
       $this->load->model('mdl_quotation');
       $data['records1'] = $this->get('id')->result();
       $data['view_file']='show_page';//view file
       $data['module']='page';//module
       $this->load->module('template');
       $this->template->no_header_no_footer($data);
    }
    function list_page() {
        echo Modules::run('site_security/make_sure_is_admin');
        $data['query'] = $this->get('id');
        $data['view_file'] = 'list_page'; //view file
        $data['module'] = 'page'; //module
        $this->load->module('template');
        $this->template->admin($data);
    }
    function insert(){
            $update_id = $this->uri->segment(3); //get the update id from the url
            $submit=  $this->input->post('submit',TRUE);
            if($submit=='submit'){//if submit get data from post
                  $data=  $this->get_data_from_post();
            }else{// Not submit yet. check update id
                if(is_numeric($update_id)){//if update id is real get date from db
                  $data = $this->get_data_from_db($update_id);
                }
            }
         if(!isset($data)){
             $data=  $this->get_data_from_post();
         }   
         $data['update_id']=$update_id;//use this for the hidden fifle
         //get the update id from the post
        $data['query'] = $this->get('id');
        $data['current'] = $this->uri->segment(1);
        $data['view_file'] = 'insert_form'; //view file
        $data['module'] = 'quotation'; //module
        $this->load->module('template');
        $this->template->one_col($data);
    }
    
    function get_data_from_post() {
        $data['name'] = $this->input->post('name', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['pass'] = $this->input->post('pass', TRUE);
        $data['phone'] = $this->input->post('phone', TRUE);
        $data['contact'] = $this->input->post('contact', TRUE);
        $data['qtitle'] = $this->input->post('qtitle', TRUE);
        $data['content'] = $this->input->post('content', TRUE);
        $data['date'] = date('Y-m-d H:i:s');
        return $data;
    }
    function get_data_from_db($update_id){
         $query = $this->get_where($update_id);
         $data['name'] =$query->row()->name;
        $data['qtitle'] = $query->row()->qtitle;
        $data['email'] = $query->row()->email;
        $data['pass'] = $query->row()->pass;
        $data['phone'] = $query->row()->phone;
        $data['contact'] = $query->row()->contact;
        $data['content'] = $query->row()->content;
        if(!isset($data)){
            $data='';
        }
        return $data;
    }
    function insert_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('qtitle', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $update_id = $this->input->post('id', TRUE);
        if ($this->form_validation->run($this) == TRUE) {
            $data = $this->get_data_from_post();
               if (is_numeric($update_id)) {           
                $this->_update($update_id, $data);
            } else {
              $this->_insert($data);
               //insert bell.
               $bell_user_id=56;//admin id
               $this->load->module('bell');
               $this->bell->insert_bell($bell_user_id);//2 = notification id
               //insert notification.
               $this->load->module('notification');
               $this->notification->insert_notification(56,'new quotation',1,'2');//user id, title, main id, module
            }
            redirect('quotation');
        } else {
            echo validation_errors();
        }
    }
  
    function detail(){
        $id=  ($this->uri->segment(3));
       
        //get all from page_url
        $data['query']=  $this->get_where_custom('id', $id)->row();
         $data['current']=  $this->uri->segment(1);
      
        $data['view_file']='detail';//view file
        $data['module']='quotation';//module
        $this->load->module('template');
        $this->template->one_col($data);
    }
    //funcation copy
    function get($order_by) {
        $this->load->model('mdl_quotation');
        $query = $this->mdl_quotation->get($order_by);
        return $query;
    }
    function get_with_limit($limit, $offset, $order_by) {
        if ((!is_numeric($limit)) || (!is_numeric($offset))) {
            die('Non-numeric variable!');
        }
        $this->load->model('mdl_quotation');
        $query = $this->mdl_quotation->get_with_limit($limit, $offset, $order_by);
        return $query;
    }
    function get_where($id) {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }
        $this->load->model('mdl_quotation');
        $query = $this->mdl_quotation->get_where($id);
        return $query;
    }
    function get_where_custom($col, $value) {
        $this->load->model('mdl_quotation');
        $query = $this->mdl_quotation->get_where_custom($col, $value);
        return $query;
    }
    function _insert($data) {
        $this->load->model('mdl_quotation');
        $this->mdl_quotation->_insert($data);
    }
    function _update($id, $data) {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }
        $this->load->model('mdl_quotation');
        $this->mdl_quotation->_update($id, $data);
    }
    function _delete($id) {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }
        $this->load->model('mdl_quotation');
       return $this->mdl_quotation->_delete($id);
    }
    function count_where($column, $value) {
        $this->load->model('mdl_quotation');
        $count = $this->mdl_quotation->count_where($column, $value);
        return $count;
    }
    function get_max() {
        $this->load->model('mdl_quotation');
        $max_id = $this->mdl_quotation->get_max();
        return $max_id;
    }
    function _custom_query($mysql_query) {
        $this->load->model('mdl_quotation');
        $query = $this->mdl_quotation->_custom_query($mysql_query);
        return $query;
    }

}
