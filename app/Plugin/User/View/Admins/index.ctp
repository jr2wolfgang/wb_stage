<div class="row">
	<div class="col-xs-8">
		<div class="row">
			<div class="col-xs-12 col-sm-3 center">
				<span class="profile-picture">
					<?php 
						echo $this->Html->image($this->request->data['User']['avatar'],array('alt'=>'Avatar','class'=>'img-responsive editable-empty','id'=>'avatar2'));
					?>
				</span>

				<div class="space space-4"></div>
				
				<a class="btn btn-sm btn-block btn-success" href="#">
					<i class="ace-icon fa fa-heart bigger-110"></i>
					<span class="bigger-110">Create ADS</span>
				</a>

				<a class="btn btn-sm btn-block btn-primary" href="#">
					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
					<span class="bigger-110">Edit Profile</span>
				</a>

			</div><!-- /.col -->

			<div class="col-xs-12 col-sm-9">
				<h4 class="blue">
					<span class="middle">
						<?php
							echo $this->request->data['User']['firstname']. ' '.$this->request->data['User']['lastname'];
						?>
					</span>

					<span class="label label-purple arrowed-in-right">
						<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
						offline
					</span>
				</h4>

				<div class="profile-user-info">
					<div class="profile-info-row">
						<div class="profile-info-name"> Username </div>

						<div class="profile-info-value">
							<span><?php echo $this->request->data['User']['jrr_user']; ?></span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Email </div>

						<div class="profile-info-value">
							<span><?php echo $this->request->data['User']['email']; ?></span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Gender </div>

						<div class="profile-info-value">
							<span><?php echo $this->request->data['User']['gender']; ?></span>
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
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name">
							<i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
						</div>

						<div class="profile-info-value">
							<a href="#">Follow me on Twitter</a>
						</div>
					</div>
				</div>
			</div><!-- /.col -->
		</div>
	</div>

	<div class="col-xs-4">
		<span>.col-xs-4</span>
	</div>
</div>