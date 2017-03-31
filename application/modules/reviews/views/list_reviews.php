<br>
<div class="container">    
       
    <div class="row">
        <div class="col-md-8">
            <h1>게시판</h1>
            <!-- complain form-->
            <h1>리뷰를 작성</h1><!-- write a review -->
            <div id="re_load" style="display: none;"> <button class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Loading...</button></div>
            <div class="text-success" id="re_message"></div>
<?php //echo form_open('contact_validation');  ?>
            <form role="form" id="form_reviews" method="post" action="reviews/review_validation">
                <div class="form-group">
                    <textarea placeholder="함유량" class="form-control" rows="5" required="required" name="re_comment" id="re_comment"></textarea><!-- content -->
                </div>
                  <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="re_name" id="re_name" required="required" placeholder="너의 이름"><!-- your name -->
                </div>
                    </div>
                     <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control" name="re_email" id="re_email" required="required" placeholder="Email">
                </div>
             </div>
</div>
    <button type="submit" class="btn btn-success">Submit</button>
<?php echo form_close(); ?>
                <!-- end complain form-->
                 
            <h1>리뷰</h1><!-- write your review -->
            <?php
            foreach ($records as $record) {
                ?>
                <div class="well">
                    <p><strong><?php echo $record->name; ?></strong></p>
                    <?php echo nl2br($record->reviews); ?>
                    <p class="text-right"><?php
                        $ts = $record->date;
                        $convertTime = ($this->time_ago->convert_datetime($ts));
                        $when = ($this->time_ago->make_ago($convertTime));
                        echo $when;
                        ?></p>
                </div>
                        <?php
                    }
                    ?>
             <div class="text-center">  <?php  echo $this->pagination->create_links(); ?></div>
        </div>
        <div class="col-md-4">
            
        </div>
</div>
</div>
<script>
    $(document).ready(function () {
        $('#form_reviews').submit(function (event) {
            event.preventDefault();
            $.ajax({
                url: base_url + 'reviews/review_validation',
                type: 'POST',
                data: {
                    re_name: $('#re_name').val(),
                    re_email: $('#re_email').val(),
                    re_comment: $('#re_comment').val()
                },
                beforeSend: function () {
                    $('#re_load').show();
                },
                complete: function ( ) {
                    $('#re_load').hide();
                   // alert('Thank you!');
                },
                error: function () {
                    $('#re_message').html('This is not work!');
                },
                success: function (data)
                {
                  location.reload();
                }
            });// end ajax
        });//end form complain
    });// end ready
</script>