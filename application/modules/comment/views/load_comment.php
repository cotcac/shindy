  <?php
                  foreach ($query as $row) {
                ?>
                      
                        <div class="comment_content">
                            <p><strong><?php echo $row->user_name; ?></strong> <span class="text-muted small"> <?php  echo $this->time_ago->convert_time_ago($row->comment_date);  ?></span>
                        <?php
                        if(($user_id==$row->fk_user_id)or($user_id==$owner)and($owner!=1))//same commentor, same owner but owner not guess(guess cant be owner)
                        {
                            ?>
                                <a href="<?php echo base_url().'comment/edit/'.$row->comment_id; ?>"><button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a>
                         <a href="#" onclick="doConfirm('<?php echo $row->comment_id; ?>')"><button class="btn btn-danger btn-xs pull-right"><span class="glyphicon glyphicon-trash"></span></button></a>
                        <?php
                        }
                        ?>
                    </p>
                    <?php echo $row->comment_content; ?>
                    <br>
                    
                    <br>
                   
                    </div>
                    <hr>
                    <?php
                    }
