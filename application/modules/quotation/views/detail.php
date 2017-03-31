<?php
$mypass= $query->pass;
$myurl=$this->uri->segment(4);
if(($mypass!=''||$mypass!=NULL)&&($this->session->userdata('user_role')!='admin'))
{
    if($mypass!=$myurl)
    {
        redirect('site-security/not-allow');
    }
}
?>
<div class="container">
    <h1><?php echo $query->qtitle; ?></h1>
     <?php 
        $ts = $query->date;
        $convertTime = ($this->time_ago->convert_datetime($ts));
        $when = ($this->time_ago->make_ago($convertTime));
    ?>
    <p><span class="glyphicon glyphicon-user"></span><?php echo $query->name; ?> |  <span class="glyphicon glyphicon-time"></span> <?php echo $when; ?> 
     <?php
            if($this->session->userdata('user_role')=='admin'){
                echo ' | ';
                 if( $query->contact=='p')
                     {
                         $contact='Phone';
                     }else if($query->contact=='e'){
                         $contact='Email';
                     
                     }else if($query->contact=='r'){
                         $contact='댓글';//reply
                     }else{
                         $contact='Unknow';
                     }
                ?>
        <span class="glyphicon glyphicon-phone"></span> <?php echo $query->phone;?> |
            <span class="glyphicon glyphicon-envelope"></span>  <?php  echo $query->email; ?> |
            저에게 연락하십시오:   <?php echo $contact;
            }
      ?>
    </p>
    <hr>
     <?php echo $query->content; ?>
       <div class="row">
        <div class="col-md-12">
            <br>
            <?php
              $this->load->module('comment');
              $this->comment->index($query->id);
            ?>
        </div><!-- end 12 -->
    </div><!-- end row -->

</div>