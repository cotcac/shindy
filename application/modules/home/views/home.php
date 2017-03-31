<div class="container">
  
    <div class="row">
        <div class="col-md-12">
            
            <div id="myCarousel" class="carousel slide my-container-slider" data-ride="carousel">
                <!-- Indicators -->
               <?php   echo Modules::run('banner/show_slider'); ?>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
       
    </div>
</div>
<br>
<div class="container">    

    <div class="row">
        <div class="col-md-4 col-xs-12 thumbnail_cover">
             <div class="classWithPad"><!-- Your content inside here -->
                 <div class="card-header">
                     <p class="lead">  Our Solutions </p>
                 </div>
                 <div class="card-block">
                     
                     <ul class="pull-left">
                         <li><a href=""><?php echo lang('online').' '.  lang('messenger'); ?></a></li>
                         <li><a href=""><?php echo lang('chat').' '.  lang('solution'); ?></a></li>
                         <li><a href=""><?php echo lang('board_game'); ?></a></li>
                         <li><a href=""><?php echo lang('utity'); ?> </a></li>
                        </ul>
                     <img class="pull-right img-responsive" src="<?php echo base_url(); ?>img/structure/solution.png" alt=""/>
                     
                  </div>
             </div>
        </div>
        <div class="col-md-4 col-xs-12 thumbnail_cover">
             <div class="classWithPad"><!-- Your content inside here -->
                 <div class="card-header">
                     <p class="lead">Our Service</p> 
            </div>
                 <div class="card-block">
            <ul class="pull-left">
                <li><a href=""><?php echo lang('prevalent_type'); ?></a></li>
                <li><a href=""><?php echo lang('customized'); ?></a></li>
            </ul>
                     <img class="pull-right" src="<?php echo base_url(); ?>img/structure/service.png" alt=""/>
                     </div>
        </div>
        </div>
        <div class="col-md-4 col-xs-12 thumbnail_cover">
             <div class="classWithPad"><!-- Your content inside here -->
                 <div class="card-header">    
                     <p class="lead">Our Portfolio</p> 
            </div>
                 <div class="card-block">
            <ul class="pull-left">
                <li><a href=""><?php echo lang('portfolio'); ?></a></li>
            </ul>
                     <img class="pull-right" src="<?php echo base_url(); ?>img/structure/portfolio.png" alt=""/>
                     </div>
        </div>
  </div>
  </div>
    

    
    <div class="row text-center">
        <div class="col-md-12">
            <div class="footer">
        <h1> <?php echo lang('home_msg'); ?></h1><br><br>
        
       <button class="btn btn-success"><?php echo lang('more'); ?></button>
       </div>
       </div>

    </div>
    
    <br>
    <br>
    <br>
    
    <div class="row">
        <div class="col-md-4 thumbnail_cover">
            <div class="classWithPad text-center"><!-- Your content inside here -->
            <h1><?php echo lang('hotline'); ?></h1>
            <p>070-000-0000</p>
            <p><?php echo lang('weekday'); ?>10:00~17:00</p>
        </div>
        </div>
        <div class="col-md-4 thumbnail_cover">
            <div class="classWithPad text-center"><!-- Your content inside here -->
            <h1>1:1 <?php echo lang('online_consultation'); ?></h1>
            <p><?php echo lang('leave_msg'); ?></p>
            <a class="btn btn-success" href="#">1:1 <?php echo lang('msg'); ?></a>
        </div>
        </div>
        <div class="col-md-4 thumbnail_cover">
            <div class="classWithPad text-center"><!-- Your content inside here -->
            <h1><?php echo lang('please_note'); ?></h1>
            <p>
               <?php echo lang('note_title'); ?><br>
               <?php echo lang('note_title'); ?><br>
               <?php echo lang('note_title'); ?><br>
               
 
            </p>
        </div>
        </div>
    </div>
    
    
    
    
</div><br>