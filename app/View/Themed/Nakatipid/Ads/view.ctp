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
<section class="row">

	<div class="row dekstop-view view-container">
		<section class="row">
            <div class="large-5 columns">
            	<div class="ads-picture">
            		<?php echo $this->Html->image('/user/img/uploads/'. $this->data['Image'][0]['name']); ?>
            	</div>
            	<ul class="gallery-ads">
	            	<?php foreach ($this->data['Image'] as $image): ?>
	        			<li>
	        				<?php echo $this->Html->image('/user/img/uploads/'. $image['name']); ?>
	        			</li>	        			
	            	<?php endforeach; ?>
            	</ul>
            </div>
             <div class="large-7 columns">
             	<div class="ads-title">
             		<h2><?php echo $this->data['Ad']['name'];?></h2>             		
             	</div>
             	 <div class="per-ads-price-box">
                    <?php $line = '';?>
                    <?php if ($this->data['Ad']['discount_price'] != 0): ?>
                         <div class="per-ads-price per-discount-price">
                             NOW PHP <?php echo $this->data['Ad']['discount_price']; ?>  &nbsp; 
                             <?php $line = 'style="text-decoration: line-through;"'; ?>
                         </div>
                    <?php endif;?>
                    <div class="per-ads-price" <?php echo $line; ?>>PHP <?php echo $this->data['Ad']['orig_price']; ?></div>
                    <div class="clearfix"></div>
                 </div>

                 <div class="ads-user">
                 	<div class="col-xs-12 col-sm-9">
						<h4 class="blue">
							<span class="middle">
								<?php echo $this->data['User']['firstname']; ?>							
								<?php echo $this->data['User']['lastname']; ?>
							</span>

							<span class="label label-light arrowed-in-right">
								<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
								offline
							</span>
						</h4>

						<div class="large-3 columns">
							<?php 
								echo $this->Html->image($this->request->data['User']['avatar'],array('alt'=>'Avatar','class'=>'img-responsive editable-empty','id'=>'avatar2'));
							?>
						</div>
						<div class="large-9 columns">
								<div class="profile-user-info">
									<div class="profile-info-row">
										<div class="profile-info-name"> Username </div>

										<div class="profile-info-value">
											<span></span>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> Email </div>

										<div class="profile-info-value">
											<span><?php echo $this->data['User']['email']; ?></span>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> Gender </div>

										<div class="profile-info-value">
											<span><?php echo $this->data['User']['gender']; ?></span>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> Location </div>

										<div class="profile-info-value">
											<i class="fa fa-map-marker light-orange bigger-110"></i>
											<span>None</span>
											<span>None</span>
										</div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name"> Last Online </div>

										<div class="profile-info-value">
											<span>3 hours ago</span>
										</div>
									</div>
								</div>

								<div class="hr hr-8 dotted"></div>

								<div class="profile-user-info">
									<div class="profile-info-row">
										<div class="profile-info-name"> Social Media </div>
									</div>

									<div class="profile-info-row">
										<div class="profile-info-name">
											<i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
										</div>

										<div class="profile-info-value">
											<a href="#">Add me on Facebook</a>
										</div>

										<div class="profile-info-name">
											<i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
										</div>

										<div class="profile-info-value">
											<a href="#">Follow me on Twitter</a>
										</div>

									</div>
								</div>
							</div>
					</div>
                 </div>                
            </div>
        </section>
        <section class="row">
        	 <div class="ads-description large-12 columns">
                    <p><?php echo $this->data['Ad']['description']; ?></p>
             </div>
        </section>
	</div>

</section>

