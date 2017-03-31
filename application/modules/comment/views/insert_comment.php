
                     <div class="comment_content">
                              <p><strong><?php echo $row->user_name; ?></strong><span class="text-muted small"> <?php  echo $this->time_ago->convert_time_ago($row->comment_date);   ?></span>
                   <a href="<?php echo base_url().'comment/edit/'.$row->comment_id; ?>"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a>
                         <a href="#" onclick="doConfirm('<?php echo $row->comment_id; ?>')"><button class="btn btn-danger btn-xs pull-right"><span class="glyphicon glyphicon-trash"></span></button></a>
          
                    </p>
                    <?php echo $row->comment_content; ?>
                    
                        </div>
                   <hr>
                 
           