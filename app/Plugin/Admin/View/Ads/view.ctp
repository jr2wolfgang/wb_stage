<section>
	<h4></h4>

	<div class="col-xs-12 col-sm-3 center">
		<span class="ads-picture">
			 <div class="img-container">
                            <?php echo $this->Html->image('/user/img/uploads/'. $ads['PrimaryImage']['name'],
                            array('url' => array('controller' => 'ads', 'action' => 'view','slug' => $ads['Ad']['slug']))); ?>
                        </div>	

           <!--<div class="small_thumb">
            	<?php foreach($ads['Image'] as $key => $list) : ?>

            		<div class="other_pics">
            		 <?php echo $this->Html->image('/user/img/uploads/'. $list['name'],
                            array('url' => array('controller' => 'ads', 'action' => 'view','slug' => $ads['Ad']['slug']))); ?>
            		</div>
            	<?php endforeach; ?>	
            	
            </div> -->
		</span>
	</div>
	<div class="col-xs-12 col-sm-9">
		<div class="profile-user-info profile-user-info-striped">
			<?php echo $this->Form->create('User',array('controller' => 'ads','action' => 'setting')); ?>
				<div class="profile-info-row"> 
					<div class="profile-info-name"> Ads </div>
						<button id="submit" class="btn btn-warning" style="padding:5px; margin:5px;">Update Profile</button>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</section>
