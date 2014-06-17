
$(document).ready(function() {


$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});



var serverPath = "/wb_stage";


$('.redactor').redactor({
	/* imageUpload: '/tagroom_cake/admins/redactor_upload_image',
	//fileUpload: 'redactor/demo/scripts/file_upload.php',
	imageGetJson: '/tagroom_cake/js/json_data/new_data.json',
    focus: true,
    plugins: ['fontfamily'] */
});  
                
$('.btn-danger').click(function(){


	if ($('.map_container').append('<input id="pac-input" class="controls" type="text" placeholder="Search Box">')) {

		setTimeout(function(){

		initialize();


	},1000); 

	}

	
});
$('#close,.close_modal').click(function() {
	$('.google_map_pop').modal('hide');
	$('.bs-example-modal-sm ').modal('hide');
 }); 


$('#use_image').click(function(){
		$('.bs-example-modal-sm ').modal('hide');

		$('#AdSelectedImg').empty();

		var imgArray = [];

		$('.images_append .check_item:checked').each(function(){
				$img_src = $(this).parent().next().find('img').attr('src');
				$data_id = $(this).parent().next().find('img').attr('data-id');
				
				
		var appendImage = "<div class='selected_img'>";
			appendImage += "<i class='fa fa-times-circle-o remove_image' data-id='"+$data_id+"'></i> ";
			appendImage += "<a class='fancybox' data-fancybox-group='gallery-selected' href='"+$img_src+"''><div class='img_prev' style='background:url("+$img_src+");background-size:cover;'></div></a>";
			appendImage += "<div class='select_primary'><input type='radio' checked='true' name='data[Image][primary]' value='"+$data_id+"'> Select As Primary</div>";
			appendImage += "</div>";
				imgArray.push($(this).val());		
			$('.images_thumb_selected').append( appendImage);
		
		}); 

		$('#AdSelectedImg').val(imgArray);	
});	

$('body').on('click','.remove_image',function(){
	$array = $('#AdSelectedImg').val().split(',');
	var image_id = $(this).data('id');

	alert($array);

	/* $(this).parent().remove(function(){

		$array = jQuery.grep($array, function(value) {
		return value != image_id;
		});

		alert($array);

	}); */
});


$('#delete_images').click(function(){

		$(this).addClass('disable');

		var imgArray = [];

		$('.images_append .check_item:checked').each(function(){

				$(this).parent().parent().remove();
				$img_src = $(this).parent().next().find('img').attr('src');
				
				imgArray.push($(this).val());		
			//$('.images_thumb_selected').append( appendImage);
		
		}); 


		$.ajax({
			type: "POST",
			url: ''+serverPath+'/user/images/remove',
			data : { img_id : imgArray },
			success: function(data,values)
			{
					$('#delete_images').removeClass('disable');
				
			}
		});



});	

$('.check_all').click(function () {
$('input:checkbox').prop('checked', this.checked);
});

var image_path = ""+serverPath+"/user/img/uploads/";

var settings = {
	url: ""+serverPath+"/user/images/upload_multiple",
	method: "POST",
	allowedTypes:"jpg,png,gif,doc,pdf,zip",
	fileName: "myfile",
	multiple: true,
	onSuccess:function(files,data,xhr)
	{	

		var imageDetails = [jQuery.parseJSON(data)];

			
		for(var i =0;i <= imageDetails.length-1;i++)
		{
			var item = imageDetails[i];
			console.log(i);
		var html_table = '<div id="'+item.key+'-img" class="fm-per-img col-lg-12">\
							<div class="row">\
								<div class="col-lg-1">\
									<div class="checkbox">\
										<label>\
											<input type="checkbox" class="ace" value="'+item.key+'" name="data[Ad][images][]">\
											<span class="lbl"></span>\
										</label>\
									</div>\
								</div>\
								<div class="col-lg-3">\
									<a class="fancybox" href="'+image_path+item.file+'" data-fancybox-group="gallery" title="'+item.file+'">\
										<img src="'+image_path+item.file+'" class="img-responsive" >\
									</a>\
								</div>\
								<div class="col-lg-6">'+item.file+'</div>\
								<div class="col-lg-2">\
									<button class="btn btn-info btn-sm edit-image" data-id="'+item.key+'">\
										<i class="ace-icon fa fa-pencil icon-only"></i>\
									</button>\
									<button class="btn btn-danger btn-sm delete-image" data-id="'+item.key+'">\
										<i class="ace-icon fa fa-trash-o icon-only"></i>\
									</button>\
								</div>\
							</div>\
						</div>';

		}
			$('.fm-image-wrap').children('.row').children('.col-lg-12').prepend(html_table);
			
			//console.log(data);
	

		
	},
	onError: function(files,status,errMsg)
	{		
		$("#status").html("<font color='red'>Upload is Failed</font>");
	}
}
$("#mulitplefileuploader").uploadFile(settings);


jQuery.validator.setDefaults({
  debug: false,
  success: "valid"
});
$( "#AdNewAdForm" ).validate({
  rules: {
    required: {
      required: true,
    
    },
    
  
  }
});

/*$('#AdDiscountPrice,#AdPromoPrice').keyup(function(){

	if ($(this).val() != '') {
		$('.price_error').remove();
	} else {
		$('#AdPromoPrice').after('<label class="price_error" style="display:block !important">Must Select from Discount or Promo Price</label>');
	}

});*/

$('#AdNewAdForm').submit(function(e){

		$('.price_error').remove();

		if ($('#AdDiscountPrice').val() == '' &&  $('#AdPromoPrice').val() == '') {

			$('#AdPromoPrice').after('<label class="price_error" style="display:block !important">Must Select from Discount or Promo Price</label>');
		
			e.preventDefault();

		}
	
});

$('input[type="number"]').bind('keypress', function (e) {
        return !(e.which != 8 && e.which != 0 &&
                (e.which < 48 || e.which > 57) && e.which != 46);
});

$('.fm-image-wrap').on('click','.delete-image',function(){
	var $id = $(this).data('id');
	$.ajax({
		type: "POST",
		url: ''+serverPath+'/user/images/remove/'+$id,
		success: function()
		{
			$('#'+$id+'-img').slideUp('fast').remove();
		}
	});
});


});
