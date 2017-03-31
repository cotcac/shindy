<style>
    .upload_frame{
        display: none;
    }
    .modal-body {
    position: relative;
    overflow-y: auto;
    max-height: 100%;
    padding: 15px;
}
.autoModal.modal .modal-body{
    max-height: 100%;
}
</style>
<script src="<?php echo base_url(); ?>public/include/jquery.Jcrop.min.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>css/jquery.Jcrop.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>public/include/upload_crop_image.js" type="text/javascript"></script>


<script src="<?php echo base_url(); ?>editor/tinymce/tinymce.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>editor/tinymce/tinymce_editor.js" type="text/javascript"></script>
<h1>Add fixing</h1>
<?php 
 //projectd the .$update_id. Can be empty if insert and can be a number if edit. 
 echo form_open('fixing/insert_validation/'); 
// If $update_id not empty mean this is the edit form. Create a input text read only or hidden for id
   if(isset($update_id)){?>
     <input type="hidden" value="<?php echo $update_id; ?>" name="id" id="id">
   <?php
   }
   ?>
 <div class="form-group">
     <label>Thumbnail</label>
     <br>
     <!-- working for thumbnail here -->
     <?php
     if($thumb!=''or $thumb!=NULL)
     {
         $avatar=$thumb;
     }else{
         $avatar='img/avatar/default_profile.jpg';
     }
     ?>
     <a href="" id="photo_container"> <img src="<?php echo base_url().$avatar; ?>" alt="default img"></a>
     
     
     
     
     
     <!-- end working for thumbnail -->
     
     <input type="hidden" class="form-control" name="thumb" id="thumb" value="<?php echo $thumb; ?>" >
  </div>
 <div class="form-group">
    <label>Name</label>
    <input class="form-control" name="name" id="headline" value="<?php echo $name; ?>" >
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea class="form-control mceEditor" name="content" id="headline" ><?php echo htmlentities($content, ENT_QUOTES); ?></textarea>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
 <?php echo form_close(); ?>

  
  <!-- Modal UPLOAD IMAGE -->
<div id="myModalUpload" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Image</h4>
            </div>
            <div class="modal-body">
              
                <?php echo form_open_multipart('image/do_upload_image_avatar', array('id' => 'form_upload_image','role' => 'form','target'=>'upload_frame','onsubmit'=>'submit_photo()')); ?>
                   
 
      <input type="file" name="userfile" id="userfile" size="20" />
   
  

        <br /><br />
  <div id="loading_progress"></div>
    
        <button type="submit" class="btn btn-success"> Upload Image</button>
        <?php  echo form_close(); ?> 
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
 <iframe name="upload_frame" class="upload_frame"></iframe> 
<!-- END MODAL -->
<!-- Modal UPLOAD CROP -->
<div id="myModalCrop" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Crop Image</h4>
            </div>
            <div class="modal-body">
                 <!-- This is the image we're attaching the crop to -->
          <img class="img-responsive" id="cropbox" />
          <form id="form_crop_image">
 
              <input type="hidden" name="img_name" id="img_name" value="">
    
    <input type="hidden" name="x" id="x" value="">
    
    <input type="hidden" name="y" id="y" value="">
    
    <input type="hidden" name="h" id="h" value="">
    
    <input type="hidden" name="w" id="w" value="">
    <br>
    <button type="button" class="btn btn-success" onclick="crop_photo()">Crop This Image</button>
    
     </form>
            </div>
            <div class="modal-footer">
             
            </div>
        </div>

    </div>
</div>
<!-- END MODAL -->
