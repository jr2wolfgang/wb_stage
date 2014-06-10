<div class="row">
	<div class="col-xs-12 col-sm-12 col-lg-8">
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

					<span class="label label-light arrowed-in-right">
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

	<div id="simple-statistic-box" class="col-xs-12 col-sm-12 col-lg-4">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<h4 class="blue">
					<span class="middle">
						Statistics
					</span>
				</h4>

				<div class="profile-user-info">
					<div class="profile-info-row">
						<div class="profile-info-name"> <i class="fa fa-eye bigger-130"></i> </div>

						<div class="profile-info-value">
							<span>20 total ADS viewed</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> <i class="fa fa-users bigger-130"></i> </div>

						<div class="profile-info-value">
							<span>5 live visitors</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> <i class="fa fa-envelope bigger-130"></i> </div>

						<div class="profile-info-value">
							<span>3 new message</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> <i class="fa fa-info bigger-130"></i> </div>

						<div class="profile-info-value">
							10 new interested
						</div>
					</div>
				</div>

				<div class="hr hr-8 dotted"></div>

			</div>
		</div>
	</div>
</div>

<div class="row">
    <div class="col-xs-12">
    	<h3 class="header smaller lighter blue">Your ADS</h3>
        <table aria-describedby="sample-table-2_info" id="ads-table" class="table table-striped table-bordered table-hover dataTable">
            <thead>
                <tr role="row">
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Image</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Title</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Price</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Interested</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Total Views</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Live Visitors</th>
                    <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label=""></th>
                </tr>
            </thead>

            <tbody aria-relevant="all" aria-live="polite" role="alert">

                <tr class="even">
                    <td class="sorting_1">
                        
                    </td>
                    <td class="">
                    	
                    </td>
                    <td class="">
                    	
                    </td>
                    <td class="">
                    	
                    </td>
                    <td class="">
                        
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
