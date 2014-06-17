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

<section class="row full-width no-pads wrapper-ads">
	<div class="large-3 columns">1</div>
	<div class="large-6 columns">
		<div class="large-1 columns">&nbsp;</div>
		<div class="large-10 columns no-pads">
			<section class="container-image row">
				<div class="large-9 columns no-pads">
					<div class="img-wrapper">
						 <?php echo $this->Html->image('/user/img/uploads/'. $ad['PrimaryImage']['name']); ?>
					</div>
				</div>
				<div class="gallery-images large-3 columns">
					<ul>
						<?php foreach ($ad['Image'] as $image): ?>
							<li>
								<?php echo $this->Html->image('/user/img/uploads/'. $image['name']); ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</section>
			<section class="ads-title row">
				<div class="large-7 columns no-pads">
					<?php echo $ad['Ad']['name']; ?>
				</div>
				<div class="large-5 columns">
				 	<?php $class = '';?>
				 	 <?php if ($ad['Ad']['discount_price'] != 0): ?>
                         <div class="per-ads-price per-discount-price">
                             &nbsp; PHP <?php echo $ad['Ad']['discount_price']; ?>
                             <?php $class = 'per-ads-before-price'; ?>
                         </div>
                    <?php endif;?>
                    <div class="per-ads-price <?php echo $class; ?>">PHP <?php echo $ad['Ad']['orig_price']; ?></div>
                   
                    <div class="clearfix"></div>
				</div>
			</section>
			<section class="ads-attributes row">
				&nbsp;
			</section>
			<section class="ads-description row">
				<?php echo $ad['Ad']['description']; ?>
			</section>
		</div>
		<div class="large-1 columns">&nbsp;</div>
	</div>
	<div class="large-3 columns right-ads">
		<section class="button-action">
			<div class="interested">Im Interested button</div>
			<div class="send-message">Send Message button</div>
			<div class="number-button">Number button</div>
		</section>
		<section class="ad-user">
			<div>Seller Information</div>
			<div class="row">
				<div class="large-5 columns">
					<div class="avatar-wrapper">
						<img src="<?php echo $ad['User']['avatar']; ?>" />
					</div>
				</div>
				<div class="large-7 columns">
					<p><?php echo $ad['User']['firstname'] ?>&nbsp;<?php echo $ad['User']['lastname'] ?></p>
				</div>
			</div>
		</section>
	</div>
</section>


<style type="text/css">
	.wrapper-ads { margin-top: 20px; }

	.avatar-wrapper { width: 128px; height: 128px; overflow: hidden; }
	.ad-user > div:first-child { padding: 15px 0; }

	.img-wrapper { width: 100%; height: 300px; overflow: hidden; padding: 15px; }
	.img-wrapper > img { width: 100%; height: auto; }

	.gallery-images { height: 100%; background: rgba(0,0,0,0.4); }
	.gallery-images ul { margin: 0; }
	.gallery-images li { width: 100%; height: 70px; overflow: hidden; margin: 10px 0; }
	.gallery-images li > img { width: 100%; height: auto; }

	.container-image { background: rgba(0,0,0,0.7); height: 320px; }

	.ads-title { padding: 10px 0; }

	.ads-attributes,
	.ads-description,
	.right-ads { background: rgba(0,0,0,0.7); margin-bottom: 10px !important;  color: #fff; padding: 15px; }

	.ads-title .per-ads-price,
	.ads-title .per-discount-price { float: right; font-size: 15px; }
	.ads-title .per-discount-price { font-size: 30px; }
	.ads-title .per-ads-before-price { font-size: 10px; padding: 15px 0 0; }

</style>