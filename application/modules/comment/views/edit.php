<div class="container">
<h1>Edit comment</h1>
<?php
     echo form_open('comment/edit_validation/', array('id' => 'form_insert_comment1', 'role' => 'form')); 
  ?>
    <!-- change the topic id according to the app-->
    <input type="hidden" name="comment_id" value="<?php echo $query->comment_id;?>">
  <div class="form-group">
   
    <textarea class="form-control my-comment" placeholder="Your comment" rows="4" cols="50" name="comment_content" id="comment_content" ><?php echo $query->comment_content; ?> </textarea>
  </div>
    <div id="myerror"></div>
    
     <div id="load"> <button class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Loading...</button></div>
    
  <button type="submit" class="btn btn-success">Submit</button>
 <?php echo form_close();?>

</div>