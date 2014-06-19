<?php ?>
<script>

$('.redactor').redactor({
		imageUpload: '<?php echo Configure::read('folder_name'); ?>user/ads/redactor_upload_image',
		//fileUpload: 'redactor/demo/scripts/file_upload.php',
		imageGetJson: '<?php echo Configure::read('folder_name'); ?>user/js/json_data/new_data.json',				
		plugins: ['fontfamily','fontcolor','fontsize'],
		focus: true,
	}); 

</script>