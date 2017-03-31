<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url(); ?>public/include/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/include/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>public/bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>css/style.css?<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url(); ?>public/include/myjs.js?<?php echo time(); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>public/lazyload/lazysizes.min.js" async="" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>public/flag-icon-css-master/css/flag-icon.min.css" rel="stylesheet" type="text/css"/>
         <link rel="icon" type="images/png" sizes="32x32" href="<?php echo base_url(); ?>favicon-32x32.png">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <meta property="og:url" content="<?php echo base_url(); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:description" content="<?php echo $description; ?>" />
        <meta property="og:image:width" content="640"/> 
        <meta property="og:image:height" content="442"/>
         <meta property="og:image:type" content="image/jpeg" /> 
	<meta property="og:image" content="<?php echo $meta_img; ?>" />
        <script type="text/javascript">
         //set base_url use with ajax
         var base_url = "<?php echo base_url(); ?>";
         </script>
    </head>
    <body>
        <!-- top 1-->
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                   
                      <a href="<?php echo base_url(); ?>"><img class="img-responsive logo" src="<?php echo base_url(); ?>img/structure/shindykorean.png?22"> </a>
                     
                </div>
                <div class="col-xs-6">
                    <div class="my-top-right">
                        <p>  고객센터 | 1:1 문의하기] 페이지로 연결</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top 1-->
 <nav class="navbar navbar-inverse navbar-custom">
            <div class="container">
                <div class="row">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                    </button>
                  
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
				
                <ul class="nav navbar-nav">
                    
                    
                      <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true"><?php echo lang('about_us'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">	
                         <li><a href="<?php echo base_url().'about-us/company-overview'; ?>"> <?php echo lang('company_overview'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('vision'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"><?php echo lang('org_chart'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"><?php echo lang('contact_us'); ?></a></li>
                    </ul>
                  </li>
                      <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true"><?php echo lang('solution'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">	
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('messenger'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('chat'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('board_game'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"><?php echo lang('utity'); ?></a></li>
                    </ul>
                  </li>
                      <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true"><?php echo lang('service'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">	
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('prevalent_type'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('customized'); ?></a></li>
                        
                    </ul>
                  </li>
                  </li>
                      <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true"><?php echo lang('portfolio'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">	
                         <li><a href="<?php echo base_url().'intro'; ?>"><?php echo lang('messenger'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('random').' '.  lang('chat'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('video').' '.  lang('chat'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('board_game'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('utity'); ?></a></li>
                    </ul>
                  </li>
                  </li>
                      <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true"><?php echo lang('service_app'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">	
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('consulting'); ?></a></li>
                       
                    </ul>
                  </li>
                  </li>
                      <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true"><?php echo lang('service_center'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">	
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('advertise'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('praise'); ?></a></li>
                         <li><a href="<?php echo base_url().'intro'; ?>"> <?php echo lang('suggest'); ?></a></li>
                         
                    </ul>
                  </li>
                   
                   
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
</div>
</nav>  
  <!-- header mobile -->
   <div class="container-fluid header_mobile"></div>
 <!-- end header mobile -->
<?php
$this->load->view($module . '/' . $view_file);
?> 

<footer class="container-fluid footer">
    
    <br>
    <div class="container">
    <div class="row">  
         <div class="col-md-12">  
             <h1>개인정보취급방침  |  서비스 이용약관</h1>
             <p>
                 ㈜신디코리아 | 대표이사 : 조경서 |  사업자등록번호 : 254-87-00312   <br>
                 경기도 성남시 분당구 장미로 42, 109호(야탑동, 야탑리더스) | 대표전화 : 070-7117-7895  | 팩스 :  070-7159-3181  | 개인정보관리책임 : 정지용 jjy846@gmail.com<br>
                 ©ShindyKorea. All Rights Reserved.<br>

             </p>
        </div>
    </div>
    <div class="row text-center">
    </div>
    <br>
    <br>
    <br>
    </div>
</footer>
<?php $this->load->view('user/login_form'); ?>
</body>
</html>
