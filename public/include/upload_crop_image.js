//crop avatar

// show loader while uploading photo
function submit_photo() {
	// display the loading texte
	$('#loading_progress').html(' Uploading your photo...');
}
 //modal
 $(function(){
         //modal crop avatar image submit button on top
    $('#mysubmit_crop_avatar').click(function(){
       console.log('crop submit'); 
        $('#form_crop_image').find('[type="button"]').trigger('click');
    });
// Click to only happen on announce links
    $("#photo_container").click(function (e) { 
          e.preventDefault();
            $('#myModalUpload').modal('show');
        });
        // form upload image modal hiden reset the pregress to empty
    $('#myModalUpload').on('hidden.bs.modal', function () {
     console.log('close');
   $('#loading_progress').html('');
    });
          // codes works on all bootstrap modal windows in application
 });//end ready
 //FUNCTION REFRESH UPLOAD SHOW ERROR
 function show_popup_upload_error(error)
 {
     $('#loading_progress').html(error);
     $('#form_upload_image')[0].reset();
 }
 // show_popup_crop : show the crop popup
function show_popup_crop(name,width,height) {
        // change the photo source
	$('#img_name').val(name);
	$('#cropbox').attr('src',base_url+'img/avatar/'+name);
       // destroy the Jcrop object to create a new one
	try {
		jcrop_api.destroy();
	} catch (e) {
            // object not defined
	}
         //JCROP
           $('#cropbox').Jcrop({
           onSelect: updateCoords,
           bgColor: 'black',
           bgOpacity:.4,
           maxSize:[1000,1000],
           minSize:[400,400],
           setSelect: [0, 160, 160, 0],// you have set proper proper x and y coordinates here
           aspectRatio: 1 / 1,
           //allowResize: !!this.checked// not allow rezie
           allowResize: true //  allow rezie
        },function(){
        jcrop_api = this;
    });//end JCROP
	// show the crop popup
	$('#myModalUpload').modal('hide');
        // remove modalupload value.
	$('#loading_progress').html('');
         $('#form_upload_image')[0].reset();
	$('#myModalCrop').modal('show');
}   
// crop_photo : 
function crop_photo() {
	var x = $('#x').val();
	var y = $('#y').val();
	var w = $('#w').val();
	var h = $('#h').val();
	var img_name = $('#img_name').val();
	// hide thecrop  popup
	$('#myModalCrop').modal('hide');
	// display the loading texte
	$('#photo_container').html(' Processing...');
	// crop photo with a php file using ajax call
	$.ajax({
        url: base_url+'image/docrop',
        type: 'POST',
        data: {x:x, y:y, w:w, h:h, img_name:img_name},
        beforeSend: function () {
              $('#load').show();
            },
            complete: function () {
              $('#load').hide();
        },
        error: function () {
                  $('#test').html('This is not work!');
            },
        success:function(data){
            //reset form crop iumage
             $('#form_crop_image')[0].reset();
                // display the croped photo
                $('#photo_container').html(data);
                console.log('cop finish');
                //AFTER CROP CALL AJAX FUNCTION UPLOAD NEW IMAGE TO DB.
               var jsonData = JSON.parse(data);
                   if (jsonData.success === true) {
                       $('#photo_container').html(jsonData.image);//replace image.
                       $('#thumb').val(jsonData.img_name);
                     
                    }  else  {
                       $('#myerror1').html(jsonData.data);
                    } 
                console.log(data);
		}
	});
}
// updateCoords : updates hidden input values after every crop selection
function updateCoords(c) {
	$('#x').val(c.x);
	$('#y').val(c.y);
	$('#w').val(c.w);
	$('#h').val(c.h);
}