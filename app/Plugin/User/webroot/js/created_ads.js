
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

$('#AdNewAdForm').submit(function(e){

		$('.price_error').remove();

		if ($('#AdDiscountPrice').val() == '' &&  $('#AdPromoPrice').val() == '') {

			$('#AdPromoPrice').after('<label class="price_error" style="display:block !important">Must Select from Discount or Promo Price</label>');
		
			e.preventDefault();

		}
	
});

$('.btn[type="reset"]').click(function(){
	$('.redactor_redactor').html('');
});

$('input[type="number"]').bind('keypress', function (e) {
        return !(e.which != 8 && e.which != 0 &&
                (e.which < 48 || e.which > 57) && e.which != 46);
});

$('.percent-limit').bind('keypress', function (e) {
        return !(e.which != 8 && e.which != 0 &&
                (e.which < 48 || e.which > 57) && e.which != 46  && e.which != 36);
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




$('.use_image').click(function(){

	$('.bs-example-modal-sm').modal('hide');
	
	
		$('#AdSelectedImg').empty();

		var imgArray = [];
		var appendImage = "";
		$('.fm-image-wrap .ace:checked').each(function(){
		
		$img_src = $(this).parents('.fm-per-img').find('.img-responsive').attr('src');
		$data_id = $(this).attr('value');
				
			appendImage += "<div class='selected_img'>";
			appendImage += "<i class='fa fa-times remove_image' data-id='"+$data_id+"'></i> ";
			appendImage += "<a class='fancybox' data-fancybox-group='gallery-selected' href='"+$img_src+"''><div class='img_prev' style='background:url("+$img_src+");background-size:cover;background-position:top center;'></div></a>";
			appendImage += '<div class="radio">\
								<label>\
									<input type="radio" class="ace" checked="true" data-img="'+$img_src+'" name="data[PrimaryImage]" value="'+$data_id+'">\
									<span class="lbl"> Set as Primary </span>\
								</label>\
							</div>';
			appendImage += "</div>";
			imgArray.push($(this).val());
			
		});
		$('.images_thumb_selected').html('<div class="clearfix"></div>');
		$('.images_thumb_selected').prepend(appendImage);
		$('.images_thumb_selected').hide().removeClass('hide').slideDown('fast');
		$('.error[for="AdSelectedImg"]').hide();
		if ($('#AdSelectedImg').val() != '') {
				$('#AdSelectedImg').val( $('#AdSelectedImg').val() +','+imgArray);	

		} else {
			$('#AdSelectedImg').val(imgArray);	
		}
		
});

$('body').on('click','.remove_image',function(){
	$ImgArray = $('#AdSelectedImg').val().split(',');
	$image_id = $(this).attr('data-id');
	 $(this).parent().fadeOut(function(){
		$newImgArray = jQuery.grep($ImgArray, function(value) {
			return value != $image_id;
		});
		$('#AdSelectedImg').val($newImgArray);
	}).remove();
	 if($('.images_thumb_selected').html() == '<div class="clearfix"></div>') {
	 	$('.images_thumb_selected').slideUp('fast');
	 }
});

$('#is-discounted').click(function(){
	if($(this).is(':checked')) {
		$('.select-disc-type').removeClass('hide');
		$('#form-field-discount').removeClass('hide').attr('required',true);
		$('.error[for="form-field-discount"]').hide();
	} else {
		$('.select-disc-type').addClass('hide');
		$('#form-field-discount').addClass('hide').removeAttr('required',true);
		$('#form-field-promo').addClass('hide').removeAttr('required',true);
		$('.error[for="form-field-discount"]').hide();
	}
});

$('.select-disc-type').on('change', function() {
	if($(this).val() == 0) {
		$('#form-field-discount').removeClass('hide').attr('required',true);
		$('#form-field-promo').addClass('hide').removeAttr('required',true);
		$('#form-field-promo').next().hide();
	} else {
		$('#form-field-promo').removeClass('hide').attr('required',true);
		$('#form-field-discount').addClass('hide').removeAttr('required',true);
		$('#form-field-discount').next().hide();
	}
});

$('input.percent-limit').on('focusout', function() {
    var val = $(this).val();
    var $this = $(this);
    val = val.replace('$', '');
});

$('#preview-ads').click(function(){
	var $img = $('.selected_img .radio label .ace:checked').data('img');
	$('.img-container img').attr('src',$img);
	$('.per-ads-title a').text($('#form-field-name').val())
});

});
