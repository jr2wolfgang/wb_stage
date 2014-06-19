<header class="row full-width no-pads">
	<div id="navi-top" class="">
		<ul>
			<li class="pull-left active">Home</li>
			<li class="pull-left">Clothes</li>
			<li class="pull-left">Accessories</li>
			<li class="pull-left">Real State</li>
			<li class="pull-left">Automotive</li>
			<li class="pull-left">Gadgets</li>
		</ul>
		<div class="clearfix"></div>
	</div>
</header>

<?php echo $this->Html->css('view_ads'); ?>
<div id="view-ads" class="row full-width">
	
	<?php 
		echo $this->Element('view-ads-left');
		echo $this->Element('view-ads-main');
		echo $this->Element('view-ads-right');
	?>
	
</div>