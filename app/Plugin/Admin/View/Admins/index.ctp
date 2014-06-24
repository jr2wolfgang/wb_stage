<div class="row">
	
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
    	<h3 class="header smaller lighter blue">Recent ADS</h3>
        <table aria-describedby="sample-table-2_info" id="ads-table" class="table table-striped table-bordered table-hover dataTable">
            <thead>
                <tr role="row">
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Image</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Title</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Price</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Interested</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Total Views</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Live Visitors</th>
                     <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Actions</th>
                   
                </tr>
            </thead>
			<?php echo $this->element('ads_table'); ?>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-xs-12">
    	<h3 class="header smaller lighter blue">Recent User</h3>
        <table aria-describedby="sample-table-2_info" id="ads-table" class="table table-striped table-bordered table-hover dataTable">
            <thead>
                <tr role="row">
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Name</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Email</th>
                     <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Action</th>
                  
                   
                </tr>
            </thead>
			<?php echo $this->element('user_table'); ?>
        </table>
    </div>
</div>