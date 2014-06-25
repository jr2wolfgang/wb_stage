<div class="page-header">
	<h1>
		<?php echo $ads['Ad']['name']; ?>
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Ads posted by : <?php echo $this->Html->link($ads['User']['firstname'].' ,'.$ads['User']['lastname'],array('controller' => 'users','view')); ?>
		</small>
	</h1>
</div>
<section>
	<h4></h4>

	<div class="col-xs-12 col-sm-3 center">
		<span class="ads-picture">
			 <div class="img-container">
				<a class="fancybox" href="<?php echo Configure::read('folder_name').$ads['PrimaryImage']['path'].$ads['PrimaryImage']['name']; ?>" data-fancybox-group="gallery" title="<?php echo $ads['PrimaryImage']['name']; ?>">
				<?php echo $this->Html->image('/user/img/uploads/'. $ads['PrimaryImage']['name']); ?>
				</a>
                </div>	

          <div class="small_thumb">
            	<?php foreach($ads['Image'] as $key => $list) : ?>
            		<?php if($list['is_primary'] != '1') : ?>
            		<a class="fancybox" href="<?php echo Configure::read('folder_name').$list["path"].$list["name"]; ?>" data-fancybox-group="gallery" title="<?php echo $list['name']; ?>">
            		<div class="other_pics">
            		 <?php echo $this->Html->image('/user/img/uploads/'. $list['name']); ?>
            		</div>
					</a>
				<?php endif; ?>

            	<?php endforeach; ?>	
            	
            </div> 
		</span>
	</div>
	<div class="col-xs-12 col-sm-9">
		<div class="profile-user-info profile-user-info-striped">

			<div class="profile-info-row"> 
					<div class="profile-info-name"> Ads Name </div>

					<div class="profile-info-value">
						<span style="display: inline; font-style:italic;"> <?php echo $ads['Ad']['name']; ?></span>
					</div>
				</div>

				

			<div class="profile-info-row"> 
					<div class="profile-info-name"> Selling Price </div>

					<div class="profile-info-value">
						<span style="display: inline; font-style:italic;"> ₱ <?php echo $ads['Ad']['selling_price']; ?></span>
					</div>
				</div>
			<div class="profile-info-row"> 
					<div class="profile-info-name"> Before Price</div>

					<div class="profile-info-value">
						<span style="display: inline; font-style:italic;"> ₱ <?php echo $ads['Ad']['before_price']; ?></span>
					</div>
			</div>
			<div class="profile-info-row"> 
				<div class="profile-info-name"> Discount Price </div>

				<div class="profile-info-value">
					<span style="display: inline; font-style:italic;"> ₱ <?php echo $ads['Ad']['discount_price']; ?></span>
				</div>
			</div>
			<div class="profile-info-row"> 
					<div class="profile-info-name"> Promo Price </div>

					<div class="profile-info-value">
						<span style="display: inline; font-style:italic;"> ₱ <?php echo $ads['Ad']['orig_price']; ?></span>
					</div>
				</div>

			<div class="profile-info-row description"> 
					<div class="profile-info-name"> Description </div>

					<div class="profile-info-value description">
						<span style="display: inline; font-style:italic;"> 
							<?php echo $ads['Ad']['description']; ?>
						</span>

						
						</div>
					</div>
			
					
			<div class="profile-info-row"> 
					<div class="profile-info-name"> Location </div>

					<div class="profile-info-value">
						<span style="display: inline; font-style:italic;"> 
						 <div class="address" style="display:inline-block;">
                                    <?php echo $ads['Address']['street']; ?>, 
                                    <?php echo $ads['Address']['town']; ?>, 
                                    <?php echo $ads['Address']['province']; ?>
                                </div>
						</span>

						<div class="map_image">
						<?php
						$long = $ads['Map']['longhitude'];
						$lat = $ads['Map']['latitude'];


						echo '<img src="http://maps.google.com/maps/api/staticmap?center='.$lat.','.$long.'&zoom=13&markers='.$lat.','.$long.'&size=300x300&sensor=false&key=ABQIAAAA6-Rq-t8XwsqXeXws3DleLBSI_7XewNJfovQwsmZjGMbTG7rp6BQaj3bwm-gy7nGQPyWKPTd3zPtcVA">';
						?>
						</div>
					</div>
				</div>

			<div class="profile-info-row"> 
						<div class="profile-info-name"> &nbsp </div>

						<button type="submit" data-id="<?php echo $ads['Ad']['id']; ?>" id="submit" class="btn btn-success">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Approved
						</button>
						&nbsp; &nbsp; &nbsp;
						<button type="reset" data-id="<?php echo $ads['Ad']['id']; ?>"  class="btn reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Reject
						</button>
					</div>
			
	</div>
</section>
<?php echo $this->Html->script('User.fancybox/source/jquery.fancybox');  ?>
<?php echo $this->Html->css('User./js/fancybox/source/jquery.fancybox');  ?>

<?php echo $this->Html->script('Admin.jquery-impromptu'); ?>

<script type="text/javascript">
	$(function(){

		$('.fancybox').fancybox();


		 $('.btn.btn-success').click(function(){
		 
		 $id = $(this).data('id');

	        $.prompt("Approved This Ad? ", {
	        	title: "Confirmation",
	        	buttons: { "Continue": true, "No, Let me review again": false },
	        	submit: function(e,v,m,f){
        			window.location.href = '<?php echo Configure::read("folder_name"); ?>/admin/ads/review/'+$id+'/approved'
        		}
	        });
	      });


		   $('.btn.reset').click(function(e){
	    	
	    	$id = $(this).data('id');

	        $.prompt("Reject Ads ? ", {
	        	title: "Confirmation",
	        	buttons: { "Continue": true, "No, Let me review again": false },
	        	submit: function(e,v,m,f){
        			window.location.href = '<?php echo Configure::read("folder_name"); ?>/admin/ads/review/'+$id+'/reject'
        		}
	        });

	        e.preventDefault();
	    });


	});
</script>