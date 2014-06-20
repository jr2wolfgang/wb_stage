<div class="small-12 large-6 columns">
	<div class="three-col">
		<div id="searchbar-container">
		    <div class="large-12 small-12 colums">
		        <div id="search-field" class="large-9 small-7 no-pad-both columns">
		            <input type="text" id="mainsearch-field" placeholder="Type in your keyword ..">
		        </div>
		        <div id="location-dropdown" class="large-2 small-3 no-pad-both columns">
		            <div class="dropdown icon-right">
		                <div class="selected-dropdown">Green Bit</div>
		                <i class="flaticon-arrow133"></i>
		                <div class="clearfix"></div>
		                <ul class="list dropdown-fade">
		                    <li class="selected">East Blue</li>
		                    <li class="">Grand Line</li>
		                    <li class="">Red Line</li>
		                    <li class="">New World</li>
		                    <li class="">Alabasta</li>
		                    <li class="">Enies Lobby</li>
		                    <li class="">Marineford</li>
		                    <li class="">Dressrosa</li>
		                    <li class="">Arlong Park</li>
		                </ul>
		            </div>
		        </div>
		        <div id="search-button" class="large-1 small-2 no-pad-both columns solo-icon btn">
		            <i class="flaticon-search54"></i>
		        </div>
		    </div>
		</div>
		<div class="clearfix"></div>
		<div class="img-ads-wrap">
			<div class="img-wrap-main large-9 columns no-pads">
				<?php foreach ($ad['Image'] as $image): ?>
						<?php echo $this->Html->image('/user/img/uploads/'. $image['name']); ?>
				<?php break; endforeach; ?>
			</div>
			<div class="img-ads-thumb large-3 columns">
				<div class="thumb-holder">
					<?php foreach ($ad['Image'] as $image): ?>
						<div class="per-thumb">
							<?php echo $this->Html->image('/user/img/uploads/'. $image['name']); ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="title-price-box">
			<div class="main-ads-title pull-left">
				<?php echo $ad['Ad']['name']; ?>
			</div>
			<div class="main-ads-price pull-right">

				<?php $class = '';?>
				<div class="per-ads-price <?php echo ($ad['Ad']['selling_price'] != 0) ? 'per-ads-before-price' : '' ?>">PHP <?php echo $ad['Ad']['before_price']; ?></div>
				<?php if ($ad['Ad']['selling_price'] != 0): ?>
				     <div class="per-ads-price per-discount-price">
				         &nbsp; NOW! PHP <?php echo $ad['Ad']['selling_price']; ?>
				     </div>
				<?php endif;?>

	            <div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="ads-att-box">
			
		</div>

		<div class="ads-desc-box">
			<div class="ads-desc-box-inner">
				<?php echo $ad['Ad']['description']; ?>
			</div>
		</div>

		<div class="ads-map-box">
			
		</div>

	</div>
</div>
