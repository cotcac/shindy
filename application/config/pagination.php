<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 /* This Application Must Be Used With BootStrap 3 *  */
$config['uri_segment'] = 4;  // add this line to override the default
     $config['use_page_numbers'] = FALSE;
       $config['full_tag_open'] = "<div class='text-center'><ul class='pagination text-center'>";
        $config['full_tag_close'] ="</ul></div>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";