<section>
	<h4>My Profile</h4>

	<div class="col-xs-12 col-sm-3 center">
		<span class="profile-picture">
			<img width="294" height="294" style="display: block;" id="avatar-img" class="editable img-responsive editable-click editable-empty" src="<?php echo $this->request->data['User']['avatar']; ?>" />
			<input id="avatar" type="file"/>
		</span>
	</div>
	<div class="col-xs-12 col-sm-9">
		<div class="profile-user-info profile-user-info-striped">
			<?php echo $this->Form->create('User',array('controller' => 'profile','action' => 'profile')); ?>
				<div class="profile-info-row">
					<div class="profile-info-name"> Username </div>

					<div class="profile-info-value">
						<span style="display: inline;" class="editable editable-click" id="username">chixser4ever</span>
						<span style="display: inline; font-style:italic;"> Usernames cannot be changed.</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Firstname </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('firstname',array( 'label' => false )); ?>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Lastname </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('lastname',array( 'label' => false )); ?>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Birthdate </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('birthdate',array( 'label' => false )); ?>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Gender </div>

					<div class="profile-info-value">
						<?php echo $this->Form->radio('gender',array('M' => 'Male', 'F' => 'Female'),array( 'legend' => false )); ?>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Email </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('email',array( 'label' => false )); ?>
					</div>
				</div>
				<div class="profile-info-row">
					<div class="profile-info-name"> New Password </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('jrr_password',array( 'type' => 'password','label' => false )); ?>
					</div>

				</div>
				<div class="profile-info-row">
					<div class="profile-info-name"> Repeat New Password </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('rpt_password',array( 'type' => 'password', 'label' => false )); ?>
					</div>
				</div>
				    
				<div class="profile-info-name"><b> Address </b></div>
				

				<div class="profile-info-row">
					<div class="profile-info-name"> Street </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('Addresses.street',array( 'type' => 'text', 'label' => false )); ?>
					</div>
				</div>
				<div class="profile-info-row">
					<div class="profile-info-name"> Town </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('Addresses.town',array( 'type' => 'text', 'label' => false )); ?>
					</div>
				</div>
				<div class="profile-info-row">
					<div class="profile-info-name"> Province </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('Addresses.province',array( 'type' => 'text', 'label' => false )); ?>
					</div>
				</div>
				<div class="profile-info-row">
					<div class="profile-info-name"> Zip Code </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('Addresses.zipcode',array( 'type' => 'text', 'label' => false )); ?>
					</div>
				</div>
				<div class="profile-info-row">
					<div class="profile-info-name"> Home Town </div>

					<div class="profile-info-value">
						<?php echo $this->Form->input('Addresses.hometown',array( 'type' => 'text', 'label' => false )); ?>
					</div>
				</div>
				<?php echo $this->Form->input('avatar', array('type' => 'hidden')); ?>

				<button id="submit" style="float:right;padding:5px; margin:5px;">Update Profile</button>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</section>

<?php echo $this->Html->script('User.avatars-io-js/dist/avatars.io.js'); ?>
<script>
	var client = new AvatarsIO('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJwcml2YXRlX3Rva2VuIjoiYjhiMTcwMmJlNWY3OWUyMjMzMDE2ZDkxYmRmNmZmZWE0Mzc0MWIzNjkyNWI0ZmRmYzQ5MmUxMGM4NDIxNGQ4NCJ9.A3HY5K2K8gHLQGx5MU1SjIyPFrPTrTIGEKXcNtDmyBI');
	$(function(){
	    var uploader = client.create('#avatar'); // selector for input[type="file"] field, here #avatar, for example
	    uploader.setAllowedExtensions(['png', 'jpg']); // optional, defaults to png, gif, jpg, jpeg
	    uploader.on('complete', function(url){
	        $('#avatar-img').attr('src',url + '/?size=large');
	        $('#UserAvatar').val(url + '/?size=large');
	    });
	});
</script>
