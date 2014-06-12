
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
                
$('#add_map').click(function(){


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
	$array = $('#AdSelectedImg').val().split('1');
	var image_id = $(this).data('id');
	$(this).parent().remove(function(){

		$array = jQuery.grep($array, function(value) {
		return value != image_id;
		});

		//alert($array);

	});
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

			console.log(imageDetails)
		for(var i =0;i <= imageDetails.length-1;i++)
		{
			var item = imageDetails[i];
				
	var html_table = '<tr><td><input type="checkbox" class="check_item" name="data[Ad][images][]" value="'+item.key+'"></td>';
		html_table +='<td class="image_cont"><a class="fancybox" data-fancybox-group="gallery" href="'+image_path+item.file+'"><img src="'+image_path+item.file+'" width="100" ></a></td>';
		html_table +='<td >'+item.file+'</td>';
		html_table += '<td>'+item.extension+'</td></tr>';

			$('.main_tr').append(html_table);
		}
			
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

$('#AdDiscountPrice,#AdPromoPrice').keyup(function(){

	if ($(this).val() != '') {
		$('.price_error').remove();
	} else {
		$('#AdPromoPrice').after('<label class="price_error" style="display:block !important">Must Select from Discount or Promo Price</label>');
		
	}


})
$('#AdNewAdForm').submit(function(e){

		$('.price_error').remove();

		if ($('#AdDiscountPrice').val() == '' &&  $('#AdPromoPrice').val() == '') {

			$('#AdPromoPrice').after('<label class="price_error" style="display:block !important">Must Select from Discount or Promo Price</label>');
		
			e.preventDefault();

		}
	
});




});
