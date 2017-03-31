//Answer images
// show loader while uploading photo
function submit_photo1() {
	// display the loading texte
	$('#loading_progress1').html(' Uploading your photo...');
}
 //modal
 $(function(){
      // answer image click
     $(document).on('click','.answer_img',function(e){
           e.preventDefault();
           var id = $(this).attr('data-picture');
           console.log('data-picture '+id);
           $('#id_for_answer').val(id);
           $('#myModalUploadAnswer').modal('show');
           console.log('answer image click');
        //open modal.
    });// end answer image
        // form upload image modal hiden reset the pregress to empty
    $('#myModalUploadAnswer').on('hidden.bs.modal', function () {
     console.log('close');
   $('#loading_progress1').html('');
    });
          // codes works on all bootstrap modal windows in application
 });//end ready
 //FUNCTION REFRESH UPLOAD SHOW ERROR
 function show_popup_upload_error1(error)
 {
     $('#loading_progress1').html(error);
 }
function done_upload_answer_img(name)
{
  //get image name.
  // answer_img id.
  var id=$('#id_for_answer').val();
  $('#img'+id).val(name);
   $('#myModalUploadAnswer').modal('hide');
        // remove modalupload value.
	$('#loading_progress1').html('');
         $('#form_upload_image1')[0].reset();
         // review
         $('#r_img'+id).html('<img src="'+base_url+'img/answer/'+name+'"/>');
}
