<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url(); ?>public/include/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/include/admin.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>css/style_admin.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>css/simple-sidebar.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="images/png" sizes="32x32" href="<?php echo base_url(); ?>favicon-32x32.png">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="keywords" content="<?php echo $keyword; ?>">
        <script type="text/javascript">
         //set base_url use with ajax
         var base_url = "<?php echo base_url(); ?>";
         </script>
         <style>
             .navbar-nav>li>a{
                 padding-left: 30px;
             }
             body { padding-top: 50px; }
         </style>
    </head>
    <body>
        <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a style="padding: 10px;" class="navbar-brand" id="menu-toggle" href="#"><span class="glyphicon glyphicon-resize-horizontal"></span></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <li <?php
                        if ($current == 0) {
                            echo "class='active'";
                        }
                        ?>><a href="<?php echo base_url(); ?>dashboard/"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('user_name'); ?></a></li>
                    <li <?php
                    if ($current == 0) {
                        echo "class='active'";
                    }
                    ?>><a href="<?php echo base_url(); ?>user/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<div class="container-fluid">
  <div class="row">
     <!-- Sidebar -->
        <div id="sidebar-wrapper">
   <ul class="sidebar-nav">
      <li <?php if($current=='comments'){echo 'class="active"';} ?>><a href="<?php echo base_url() ?>"><span class="glyphicon glyphicon-home"></span> <?php echo lang('home'); ?></a></li>
      <li><a href='<?php echo base_url(); ?>notification/list-notification'> <span class="glyphicon glyphicon-bell"></span><?php echo Modules::run('bell/count_bell');?> </a></li>                 
      <li <?php if($current=='user'){echo 'class="active"';} ?>><a href="<?php echo base_url() ?>fixing/list-project"><span class="glyphicon glyphicon-wrench"></span> Fixing </a></li>
      <li <?php if($current=='user'){echo 'class="active"';} ?>><a href="<?php echo base_url() ?>quotation/list-quotation"><span class="glyphicon glyphicon-usd"></span> Quotation </a></li>
      <li <?php if($current=='comment'){echo 'class="active"';} ?>><a href="<?php echo base_url() ?>reviews/list_reviews"><span class="glyphicon glyphicon-comment"></span> Reviews</a></li>
      <li <?php if($current=='shop_info'){echo 'class="active"';} ?>><a href="<?php echo base_url() ?>shop_info/index"><span class="glyphicon glyphicon-bell"></span> <?php echo lang('shop_info'); ?></a></li>
      <li <?php if($current=='banner'){echo 'class="active"';} ?>><a href="<?php echo base_url() ?>banner/list-banner"><span class="glyphicon glyphicon-picture"></span> <?php echo lang('banner'); ?></a></li>
      <li <?php if($current=='project'){echo 'class="active"';} ?>><a href="<?php echo base_url() ?>project/list-project"><span class="glyphicon glyphicon-asterisk"></span> Tutorials</a></li>
      <li <?php if($current=='project'){echo 'class="active"';} ?>><a href="<?php echo base_url() ?>page/list-page"><span class="glyphicon glyphicon-pencil"></span> Page</a></li>
      </li>
   </ul>
       </div>
        <!-- /#sidebar-wrapper -->
    <div class="col-md-12">
      <!-- your page content -->
        <?php
            $this->load->view($module . '/' . $view_file);
        ?>
    </div>
  </div>
</div>
    <footer class="container-fluid text-center">
        <p></p>
    </footer>
         <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    </div>
    </body>
</html>
