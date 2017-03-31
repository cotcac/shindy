<script src="<?php echo base_url(); ?>editor/nic/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas(); });
</script>
<div class="container">
<h1>견적을 얻다</h1><!-- get quotation -->
 <?php 
        //noted the .$update_id. Can be empty if insert and can be a number if edit. 
        echo form_open('quotation/insert_validation/'.$update_id, array('role' => 'form')); 
       // If $update_id not empty mean this is the edit form. Create a input text read only or hidden for id
          if(isset($update_id)){?>
<input type="hidden" value="<?php echo $update_id; ?>" name="id" id="id">
   <?php
   }
   ?>
<div class="row">
    <div class="col-md-6">
         <div class="form-group">
    <label>너의 이름</label><!-- your name -->
    <input type="text" required class="form-control" name="name" placeholder="Your name"  value="<?php echo $name ; //  empty(insert) or value(edit) ?>">
  </div>
    </div>
    <div class="col-md-6">  <div class="form-group">
    <label>Email</label>
    <input type="email" required class="form-control" name="email" placeholder="Your email"  value="<?php echo $email;  //  empty(insert) or value(edit)?>">
  </div></div>
</div>
<div class="row">
    <div class="col-md-6">
         <div class="form-group">
    <label>Tel</label><!-- your phone -->
    <input type="text" required class="form-control" name="phone" placeholder="Your Phone Number"  value="<?php echo $name ; //  empty(insert) or value(edit) ?>">
  </div>
    </div>
    <div class="col-md-6"> 
  <div class="form-group">
    <label>저에게 연락주세요:</label><!-- title -->
    <select name="contact" class="form-control" id="contact" required="required">
   
    <option <?php if($contact=='p'){echo 'selected="selected"';} ?> value="p">Phone</option>
    <option <?php if($contact=='e'){echo 'selected="selected"';} ?> value="e">Email</option>
    <option <?php if($contact=='r'){echo 'selected="selected"';} ?> value="e">댓글</option><!-- reply -->
    </select>
 </div>
  </div>
    </div>

<div class="row">
    <div class="col-md-6">
         <div class="form-group">
    <label>표제</label><!-- title -->
    <input type="text" required class="form-control" name="qtitle" placeholder="Title"  value="<?php echo $qtitle;  //  empty(insert) or value(edit)?>">
  </div>
    </div>
    <div class="col-md-6">
         <div class="form-group">
    <label>공개하지 않으려는 경우 설정하십시오(선택 과목)</label><!-- Password -->
    <input type="text" class="form-control" name="pass" placeholder="Password" value="<?php echo $pass;  //  empty(insert) or value(edit)?>">
  </div>
    </div>
</div>
  <div class="form-group">
    <label>함유량</label><!-- content -->
    <textarea class="form-control" name="content" rows="20" id="headline" placeholder="Your message..." ><?php echo htmlentities($content, ENT_QUOTES); ?></textarea>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
 <?php echo form_close(); ?>
  </div>
