<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reviews extends MX_Controller {
    function __construct() {
        parent::__construct();
    }
    function delete_review()
    {
          $id = $this->input->post('id');
          echo $this->reuse_model_function->_delete('reviews','id',$id);
    }
    function list_reviews()
    {
    
         $this->load->model('mdl_reviews');
        $this->load->library('pagination');
         $config['base_url']=  base_url().'reviews/list-reviews';
       $config['total_rows']=$this->mdl_reviews->get_num_rows();//get num row for review
       $config['per_page']=20;
       $config['num_links']=4;
        $this->pagination->initialize($config);
        $data['records'] = $this->mdl_reviews->get_reviews($config['per_page'],$this->uri->segment(3));
       // $data['imgs'] = $this->mdl_reviews->get_angel_img(4);
        $data['current']= 'reviews';
       $data['title']='Clients reviews';
       $data['view_file']='admin_reviews';//view file
       $data['module']='reviews';//module
       $this->load->module('template');
       $this->template->admin($data);
    }
    function index()
    {
        $this->load->model('mdl_reviews');
        $this->load->library('pagination');
         $config['base_url']=  base_url().'reviews/index';
       $config['total_rows']=$this->mdl_reviews->get_num_rows();//get num row for review
       $config['per_page']=4;
        $page = ($this->uri->segment(3,0));
         $config["cur_page"] = $page;
       $config['num_links']=4;
        $this->pagination->initialize($config);
        $data['records'] = $this->mdl_reviews->get_reviews($config['per_page'],$page);
       // $data['imgs'] = $this->mdl_reviews->get_angel_img(4);
        $data['current']= $this->uri->segment(1);
       $data['title']='Clients reviews';
       $data['view_file']='list_reviews';//view file
       $data['module']='reviews';//module
       $this->load->module('template');
       $this->template->one_col($data);
    }
     function review_validation() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('re_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('re_email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('re_comment', 'Review', 'required|trim');
        if ($this->form_validation->run() == TRUE) {
            //insert to the database
            $this->load->model('mdl_reviews');
            if ($this->mdl_reviews->insert_review() == true) {
                echo 'Thank you! Data has been updated';
                //insert bell.
                $bell_user_id=56;//admin id
                $this->load->module('bell');
               $this->bell->insert_bell($bell_user_id);//2 = notification id
               //insert notification.
               $this->load->module('notification');
               $this->notification->insert_notification(56,'new review',1,'1');//user id, title, main id, module
            } else {
                echo 'Not update!';
            }
        } else {
            echo validation_errors();
        }
    }
    function get($order_by) {
        $this->load->model('mdl_perfectcontroller');
        $query = $this->mdl_perfectcontroller->get($order_by);
        return $query;
    }
    function get_with_limit($limit, $offset, $order_by) {
        if ((!is_numeric($limit)) || (!is_numeric($offset))) {
            die('Non-numeric variable!');
        }
        $this->load->model('mdl_perfectcontroller');
        $query = $this->mdl_perfectcontroller->get_with_limit($limit, $offset, $order_by);
        return $query;
    }
    function get_where($id) {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }

        $this->load->model('mdl_perfectcontroller');
        $query = $this->mdl_perfectcontroller->get_where($id);
        return $query;
    }

    function get_where_custom($col, $value) {
        $this->load->model('mdl_perfectcontroller');
        $query = $this->mdl_perfectcontroller->get_where_custom($col, $value);
        return $query;
    }

    function _insert($data) {
        $this->load->model('mdl_perfectcontroller');
        $this->mdl_perfectcontroller->_insert($data);
    }

    function _update($id, $data) {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }

        $this->load->model('mdl_perfectcontroller');
        $this->mdl_perfectcontroller->_update($id, $data);
    }

    function _delete($id) {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }

        $this->load->model('mdl_perfectcontroller');
        return  $this->mdl_perfectcontroller->_delete($id);
        
    }

    function count_where($column, $value) {
        $this->load->model('mdl_perfectcontroller');
        $count = $this->mdl_perfectcontroller->count_where($column, $value);
        return $count;
    }

    function get_max() {
        $this->load->model('mdl_perfectcontroller');
        $max_id = $this->mdl_perfectcontroller->get_max();
        return $max_id;
    }

    function _custom_query($mysql_query) {
        $this->load->model('mdl_perfectcontroller');
        $query = $this->mdl_perfectcontroller->_custom_query($mysql_query);
        return $query;
    }

}
