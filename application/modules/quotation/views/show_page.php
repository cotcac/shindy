<div class="container">
    <br>
    <div class="row">
    <div class="col-md-12">
                <h1>수리신청 및 견적문의</h1>
                <hr>
             </div>
        </div>
            <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-3"><img class="img-rounded" src="http://ilive-club.com/img/template/submit_broken.jpg" alt=""/></div>
            <div class="col-md-9">
                 <h1>최소한의 시간에 합리적인 비용을 제시합니다.</h1>
                <p>
                질문이 있으시면 저희에게 연락 주시면 즉시 대응 해 드리겠습니다.
                </p>
                <a href="<?php echo base_url().'quotation/insert';  ?>" class="btn btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> 견적을 얻다</a><!-- get quotation -->
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>표제</th><!-- title -->
                    <th>작가</th><!-- writer -->
                    <th>날짜</th><!-- date -->
                </tr>
            </thead>
            <tbody>
                <?php
                 foreach ($records as $record) {
                     $detail = base_url() . 'quotation/detail/'. $record->id;
                     ?>
                <tr>
                    <?php 
                    if($record->pass!=''||$record->pass!=NULL)
                    {
                        if($this->session->userdata('user_role')!='admin')
                        {
                            ?>
                    <td><i class="fa fa-lock"> </i> <a href="#" data-id="<?php echo $record->id; ?>" class="mylock"><?php echo $record->qtitle; ?>  <i class="fa fa-comment"></i> <?php echo $record->count_comment; ?></a> 
                              
                             <?php
                                 }else{
                            ?>
                    <td><i class="fa fa-unlock"> </i> <a href="<?php echo $detail; ?>"><?php echo $record->qtitle; ?>  <i class="fa fa-comment"></i> <?php echo $record->count_comment; ?></a>
                            <?php
                        }
                        ?>
                 
                        <?php
                    }else{
                        ?>
                         <td> <a href="<?php echo $detail; ?>"><?php echo $record->qtitle; ?>   <i class="fa fa-comment"></i> <?php echo $record->count_comment; ?></a>
                      <?php
                    }
                    ?>
                    </td>
                    <td><?php echo $record->name; ?></td>
                    <td><?php 
                        $ts = $record->date;
                        $convertTime = ($this->time_ago->convert_datetime($ts));
                        $when = ($this->time_ago->make_ago($convertTime));
                        echo $when;
                    ?></td>
                </tr>
        <?php
           }
        ?>               
            </tbody>
        </table>
         <div class="clearfix"></div>
      <?php  echo $this->pagination->create_links(); ?>
</div>
</div> 
<script>
 $(function(){
      $(".mylock").click(function (e) { // Click to only happen on announce links
          e.preventDefault();
            var myBookId = $(this).data('id');
            $(".modal-body #bookId").val( myBookId );
            $('#myModallock').modal('show');
            console.log($(this).data('id'));
        });
    
 });//end ready     
</script>

<!-- Modal UPLOAD IMAGE -->
<div id="myModallock" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Password</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('quotation/lock', array('id' => 'form_lock', 'role' => 'form')); ?>
                <div class="form-group">
                  
                    <input type="hidden" class="form-control" name="bookId" id="bookId" value="">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" required class="form-control" name="password_lock" id="password_lock">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <div id="error_lock"></div>
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- END MODAL -->





