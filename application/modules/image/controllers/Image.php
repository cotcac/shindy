<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends MX_Controller {
    function __construct() {
        parent::__construct();
    }
    // THIS WILL TAKE CARE ALL OF IMAGE FUNCTION.
    function do_upload_image() {
        $this->load->helper('form');
        $config['upload_path'] = './img/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
       // $config['max_size'] = 500;
        //$config['max_width'] = 1024;
       // $config['max_height'] = 768;
        $config['min_width'] = 720;
        $config['min_height'] = 540;
        $config['encrypt_name'] = TRUE;//change name
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) {
           // resplace single quote with space.
            $error =str_replace("'", "", $this->upload->display_errors());
            //call function show_popup_uplod_error
              echo '<script type="text/javascript">window.top.window.show_popup_upload_error("'. $error . '");</script>';
        } else {
            $img_name = $this->upload->data('file_name');
            // call the show_popup_crop function in JavaScript to display the crop popup
            echo '<script type="text/javascript">window.top.window.show_popup_crop("'. $img_name . '");</script>';
        }
    }
    function do_upload_image_avatar() {
        $this->load->helper('form');
        $config['upload_path'] = './img/avatar/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 500;
        $config['max_width'] = 1024;
        $config['min_width'] = 400;
       $config['max_height'] = 1000;
        $config['min_height'] = 400;
        $config['encrypt_name'] = TRUE;//change name
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) {
           // resplace single quote with space.
            $error =str_replace("'", "", $this->upload->display_errors());
            //call function show_popup_uplod_error
              echo '<script type="text/javascript">window.top.window.show_popup_upload_error("'. $error . '");</script>';
        } else {
            $img_name = $this->upload->data('file_name');
            // call the show_popup_crop function in JavaScript to display the crop popup
            echo '<script type="text/javascript">window.top.window.show_popup_crop("'. $img_name.'");</script>';
        }
    }
    function do_upload_image_answer() {
        $this->load->helper('form');
        $config['upload_path'] = './img/answer/';
        $config['allowed_types'] = 'gif|jpg|png';
       // $config['max_size'] = 500;
       // $config['max_width'] = 1024;
      //  $config['max_height'] = 768;
        $config['encrypt_name'] = TRUE;//change name.
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile1')) {
           // resplace single quote with space.
            $error =str_replace("'", "", $this->upload->display_errors());
            //call function show_popup_uplod_error
              echo '<script type="text/javascript">window.top.window.show_popup_upload_error1("'. $error . '");</script>';
        } else {
            $img_name = $this->upload->data('file_name');
            // call the show_popup_crop function in JavaScript to display the crop popup
            echo '<script type="text/javascript">window.top.window.done_upload_answer_img("'. $img_name . '");</script>';
        }
    }
    function create_thumb($src) {
        $config['image_library'] = 'gd2';
        $config['source_image'] = $src;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 400;
        $config['height'] = 400;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }
    function docrop() {
         $img_name = $this->input->post('img_name');
        // Target siz
        $targ_w = $this->input->post('w');
        $targ_h = $this->input->post('h');
        // quality
        $jpeg_quality = 90;
        // photo path
        //$src = 'C:/xampp/htdocs/hmvc_poll/img/upload/'. $img_name;
        $src = './img/avatar/' . $img_name;
        // create new jpeg image based on the target sizes
        $img_r = imagecreatefromjpeg($src);
        $dst_r = ImageCreateTrueColor($targ_w, $targ_h);
        // crop photo
        imagecopyresampled($dst_r, $img_r, 0, 0, $this->input->post('x'), $this->input->post('y'), $targ_w, $targ_h, $targ_w, $targ_h);
        // create the physical photo
        imagejpeg($dst_r, $src, $jpeg_quality);
        
           $response = array();//big array
          $response['success'] = true;
          $response['image'] ='<img src="'.base_url().'img/avatar/'. $img_name.'?'.time().'">';
          $response['img_name'] ='img/avatar/'.$img_name;
          echo json_encode($response);
       // echo '<img src="' . base_url() . 'img/upload/' . $img_name . '?' . time() . '">';
    }
    function docrop_avatar() {
        $img_name = $this->input->post('img_name');
        // Target siz
        $targ_w = $this->input->post('w');
        $targ_h = $this->input->post('h');
        // quality
        $jpeg_quality = 90;
        // photo path
        //$src = 'C:/xampp/htdocs/hmvc_poll/img/upload/'. $img_name;
        $src = './img/avatar/' . $img_name;
        // create new jpeg image based on the target sizes
        $img_r = imagecreatefromjpeg($src);
        $dst_r = ImageCreateTrueColor($targ_w, $targ_h);
        // crop photo
        imagecopyresampled($dst_r, $img_r, 0, 0, $this->input->post('x'), $this->input->post('y'), $targ_w, $targ_h, $targ_w, $targ_h);
        // create the physical photo
        imagejpeg($dst_r, $src, $jpeg_quality);
        // update user avatar
        $this->update_user_avatar($this->session->user_id, 'img/avatar/'.$img_name.'?'.time());
           $response = array();//big array
          $response['success'] = true;
          $response['image'] ='<img src="'.base_url().'img/avatar/'. $img_name.'?'.time().'">';
          $response['img_name'] ='img/avatar/'.$img_name;
          echo json_encode($response);
       // echo '<img src="' . base_url() . 'img/upload/' . $img_name . '?' . time() . '">';
    }
    function update_user_avatar($user_id,$avatar)
    {
        $this->load->model('user/mdl_user');
        $this->mdl_user->update_avatar($user_id,$avatar);
    }
}
