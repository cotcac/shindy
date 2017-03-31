
                 <div class="list-question">
                 
                <table class="table">
                    <tbody>
                        <?php
                        foreach ($query->result() as $row) {
                            $detail =base_url().'fixing/project-detail/'.$row->id; 
                            ?>
                            <tr>
                                <td>
                                     <a href="<?php echo base_url().'fixing/project-detail/'.$row->id; ?>"> <img width="50px" src = "<?php echo base_url().$row->thumb; ?>" alt = "<?php echo $row->name; ?>"></a>
                                </td>
                                <td>
                                   
                                    <a href="<?php echo $detail; ?> "><p><strong><?php echo $row->name; ?></strong></p></a>
                                   
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>  
    </div><!--end list question-->
