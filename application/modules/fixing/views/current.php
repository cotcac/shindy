
<h1>현재 프로젝트</h1> 
<!--curent project -->
 <div class="row">
     <?php
      foreach ($query->result() as $row) 
        {
            ?>
 <div class = "col-xs-12 col-sm-4 col-md-4 thumbnail_cover text-center">
            <div class = "thumbnail">
                <a href="<?php echo base_url().'fixing/project-detail/'.$row->id; ?>"> <img src = "<?php echo base_url().$row->thumb; ?>" alt = "<?php echo $row->name; ?>"></a>
            </div>
            <div class = "caption">
                 <a href="<?php echo base_url().'fixing/project-detail/'.$row->id; ?>"><p class="lead"><?php echo $row->name; ?></p></a>

            </div>
   </div>
        <?php
           }
        ?> 
    
    </div>

   
