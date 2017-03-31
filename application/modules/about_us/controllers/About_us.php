<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends MX_Controller {

    function __construct() {
        parent::__construct();
    }
    function index()
    {
      
        
        $data['current'] = 'fixing';
        $data['view_file'] = 'list_fixing'; //view file
        $data['module'] = 'fixing'; //module
        $this->load->module('template');
        $this->template->one_col($data);
    }
    function company_overview()
    {
           $data['current']= 'index';
       
       $data['view_file']='company_overview';//view file
       $data['module']='about_us';//module
        $this->load->module('template');
        $this->template->one_col($data);
    }

  

}
