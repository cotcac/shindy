<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url(); ?>public/include/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
 <style>
  /*START NAVBAR*/        
/*to make navbar align with the rest of the page.*/
.navbar-collapse{
    padding-left: 0px;
    padding-right: 0px;
}
.navbar-nav{
	margin-left:20px;
}
/*align logo*/
.mylogo{
	padding-top:10px;
}
/* Remove the navbar's default rounded borders and increase the bottom margin */
.navbar {
  margin-bottom: 50px;
  border-radius: 0;
}
.navbar-inverse {
  background-color: #359acb;
  border: #359acb;
}
.navbar-inverse .navbar-nav > li > a {
  color: white;
  font-weight: bold;
 
}
.navbar-inverse .navbar-nav > li > a:hover {
  color: black;
}
.navbar .nav .active > a {  
    color: #ffffff;  
    background-color: #004160;
}

.phone_brand{
    display: none;
}
@media (max-width: 767px)
{
    .mylogo{
        display:none;
    }
    .phone_brand{
    display: block;
   }
}
/*END NAV BAR*/
 </style>
        
    </head>
    <body>
 <nav class="navbar navbar-inverse navbar-custom">
            <div class="container">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand phone_brand" href="<?php echo base_url(); ?>"><img class="img-responsive" src="<?php echo base_url(); ?>img/template/logo1.png?2"> </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
				<a class="pull-left mylogo" href="<?php echo base_url(); ?>"> <img class="img-responsive" src="<?php echo base_url(); ?>img/template/logo1.png?2"></a>
                <ul class="nav navbar-nav">
                    
                     <li <?php if($current=='intro'){ echo 'class="active"';} ?>><a href="<?php echo base_url().'intro'; ?>"> item</a></li>
                     <li <?php if($current=='furfix'){ echo 'class="active"';} ?>><a href="<?php echo base_url().'furfix'; ?>"> item</a></li>
                     <li <?php if($current=='quotation'){ echo 'class="active"';} ?>><a href="<?php echo base_url().'quotation'; ?>"> item</a></li>
                     <li <?php if($current=='reviews'){ echo 'class="active"';} ?>><a href="<?php echo base_url().'reviews'; ?>"> item</a></li>
                     <li <?php if($current=='fixing'){ echo 'class="active"';} ?>><a href="<?php echo base_url().'fixing'; ?>"> item</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <?php
                    if ($this->session->userdata('logged_in') == TRUE) {
                       ?>
                    <li><a href="#" title="Notification" data-html="true" data-toggle="popover" data-placement="bottom" data-content=" <a href='<?php echo base_url(); ?>notification/list-notification'>See All</a>"><span class="glyphicon glyphicon-bell"></span> <?php echo Modules::run('bell/count_bell');?></a></li>                   
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true"><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('user_name'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">	
                        <?php
                          if($this->session->userdata('user_role')=='admin'){
                            ?>
                        <li><a href="<?php echo base_url() ?>quotation/list-quotation"><span class="glyphicon glyphicon-dashboard"></span> Control</a></li>
                        <?php
                        }                
                        ?>
                            <li><a href="<?php echo base_url(); ?>user/my-account/"><span class="glyphicon glyphicon-user"></span> My accout </a></li>
                            <li><a href="#" class="user_logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </li>
                    <?php
                } else {
                     echo Modules::run('user/check_cookie');// fire function cookie
                    ?>
                       <li> <a href="" class="call-modal-login" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> <?php echo lang('login'); ?></a></li>
                    <?php
                }
                ?>                                                   
</ul>
</div>
</div>
</nav>  

