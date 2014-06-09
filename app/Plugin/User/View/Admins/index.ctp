<div class="">
	<div class="user-profile row" id="user-profile-1">
		<div class="col-xs-12 col-sm-3 center">
			<div>
				<span class="profile-picture">
					<?php echo $this->Html->image($this->request->data['User']['avatar'],array('alt'=>'Avatar','class'=>'img-responsive editable-empty','id'=>'avatar','style'=>'display: block; width:200px;')); ?>
				</span>

				<div class="space-4"></div>

				<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
					<div class="inline position-relative">
						<a data-toggle="dropdown" class="user-title-label dropdown-toggle" href="#">
							<i class="ace-icon fa fa-circle light-green"></i>
							&nbsp;
							<span class="white">
								<?php
									echo $this->request->data['User']['firstname'] . ' ';
									echo $this->request->data['User']['lastname'];
								?>
							</span>
						</a>

						<div class="edit_profile clearfix">
								<ul>
									<li><a href="#">View</a></li>
									<li><?php echo $this->Html->link('Edit',array('controller' => 'users','action' => 'edit')) ?></li>
								</ul>

						</div>

						<ul class="dropdown-menu dropdown-caret dropdown-lighter align-left">
							<li class="dropdown-header"> Change Status </li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-circle green"></i>
									&nbsp;
									<span class="green">Available</span>
								</a>
							</li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-circle red"></i>
									&nbsp;
									<span class="red">Busy</span>
								</a>
							</li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-circle grey"></i>
									&nbsp;
									<span class="grey">Invisible</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="space-6"></div>

			<div class="profile-contact-info">
				<div class="profile-contact-links align-left">

					<?php echo $this->Html->link('<i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
						Edit Profile',array('controller' => 'users','action' => 'edit'),
						array('class' => 'btn btn-link','escape' => false)) ?>

					<a class="btn btn-link" href="#">
						<i class="ace-icon fa fa-plus-circle bigger-120 green"></i>
						Add as a friend
					</a>

					<a class="btn btn-link" href="#">
						<i class="ace-icon fa fa-envelope bigger-120 pink"></i>
						Send a message
					</a>

					<a class="btn btn-link" href="#">
						<i class="ace-icon fa fa-globe bigger-125 blue"></i>
						www.alexdoe.com
					</a>
				</div>

				<div class="space-6"></div>

				<div class="profile-social-links align-center">
					<a data-original-title="Visit my Facebook" title="" class="tooltip-info" href="#">
						<i class="middle ace-icon fa fa-facebook-square fa-2x blue"></i>
					</a>

					<a data-original-title="Visit my Twitter" title="" class="tooltip-info" href="#">
						<i class="middle ace-icon fa fa-twitter-square fa-2x light-blue"></i>
					</a>

					<a data-original-title="Visit my Pinterest" title="" class="tooltip-error" href="#">
						<i class="middle ace-icon fa fa-pinterest-square fa-2x red"></i>
					</a>
				</div>
			</div>

			<div class="hr hr12 dotted"></div>

			<div class="clearfix">
				<div class="grid2">
					<span class="bigger-175 blue">25</span>

					<br>
					Followers
				</div>

				<div class="grid2">
					<span class="bigger-175 blue">12</span>

					<br>
					Following
				</div>
			</div>

			<div class="hr hr16 dotted"></div>
		</div>

		<div class="col-xs-12 col-sm-9">

			<div class="space-12"></div>
			<div class="profile-user-info profile-user-info-striped">
				<div class="profile-info-row">
					<div class="profile-info-name"> Username </div>

					<div class="profile-info-value">
						<span id="username" class="editable editable-click" style="display: inline;">
							<?php echo ($this->request->data['User']['jrr_user'] != '') ? $this->request->data['User']['jrr_user']: 'Username here'; ?>
						</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Firstname </div>

					<div class="profile-info-value">
						<span id="firstname" class="editable editable-click" style="display: inline;">
							<?php echo ($this->request->data['User']['firstname'] != '') ? $this->request->data['User']['firstname']: 'First name here'; ?>
						</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Lastname </div>

					<div class="profile-info-value">
						<span id="lastname" class="editable editable-click" style="display: inline;">
							<?php echo ($this->request->data['User']['lastname'] != '') ? $this->request->data['User']['lastname']: 'Last name here'; ?>
						</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Birthdate </div>

					<div class="profile-info-value">
						<span id="birthdate" class="editable editable-click" style="display: inline;">
							<?php echo $this->request->data['User']['birthdate']; ?>
						</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name"> Gender </div>

					<div class="profile-info-value">
						<span id="gender" class="editable editable-click" style="display: inline;">
							<?php echo ($this->request->data['User']['gender'] != '') ? $this->request->data['User']['gender']: 'Male'; ?>
						</span>
					</div>
				</div>

				<div class="profile-info-row">
					<div class="profile-info-name">Email</div>

					<div class="profile-info-value">
						<span id="email" class="editable editable-click" style="display: inline;">
							<?php echo $this->request->data['User']['email']; ?>
						</span>
					</div>
				</div>
			</div>

			<div class="space-20"></div>

			<div class="widget-box transparent">
				<div class="widget-header widget-header-small">
					<h4 class="widget-title blue smaller">
						<i class="ace-icon fa fa-rss orange"></i>
						Recent Ads
					</h4>

					<div class="widget-toolbar action-buttons">
						<a data-action="reload" href="#">
							<i class="ace-icon fa fa-refresh blue"></i>
						</a>
						&nbsp;
						<a class="pink" href="#">
							<i class="ace-icon fa fa-trash-o"></i>
						</a>
					</div>
				</div>

				<div class="widget-body">
					<div class="widget-main padding-8">
						<div class="profile-feed ace-scroll scroll-active" id="profile-feed-1" style="position: relative;"><div class="scroll-track" style="display: block; height: 200px;"><div class="scroll-bar" style="height: 62px; top: 137px;"></div></div><div class="scroll-content" style="max-height: 200px;">
							<?php foreach ($this->request->data['Ad'] as $ads): ?>
								<div class="profile-activity clearfix">
									<div>
										<?php echo $this->Html->image('User.irvin.png',array('alt'=>'Daniel Patilya','class'=>'pull-left')); ?>
										<a href="#" class="user"> <?php echo $ads['name']; ?> </a>
										<?php echo $ads['description']; ?>
										<div class="time">
											<i class="ace-icon fa fa-clock-o bigger-110"></i>
											an hour ago
										</div>
									</div>

									<div class="tools action-buttons">
										<a class="blue" href="#">
											<i class="ace-icon fa fa-pencil bigger-125"></i>
										</a>

										<a class="red" href="#">
											<i class="ace-icon fa fa-times bigger-125"></i>
										</a>
									</div>
								</div>
							<?php endforeach; ?>
						</div></div>
					</div>
				</div>
			</div>

			<div class="hr hr2 hr-double"></div>

			<div class="space-6"></div>

			<div class="center">
				<button class="btn btn-sm btn-primary btn-white btn-round" type="button">
					<i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
					<span class="bigger-110">View more activities</span>

					<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
				</button>
			</div>
		</div>
	</div>
</div>