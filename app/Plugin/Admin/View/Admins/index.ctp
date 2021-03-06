<div class="row">

<div class="page-header">
						<h1>
							Dashboard
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
								overview &amp; stats
							</small>
						</h1>
					</div>

	<div class="alert alert-block alert-success">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>

				<i class="ace-icon fa fa-check green"></i>

				Welcome to
				<strong class="green"> Admin </strong>,
				
				There is 100 <?php echo $this->Html->link('new ads',array('controller' => 'ads','action' => 'index'));?> uploaded
									
			</div>


<div class="row">
								<div clas s="space-6"></div>

								<div class="col-sm-7 infobox-container">
									<div class="infobox infobox-green">
										<div class="infobox-icon">
											<i class="ace-icon fa fa-comments"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number">32</span>
											<div class="infobox-content">comments + 2 reviews</div>
										</div>

										<div class="stat stat-success">8%</div>
									</div>

									<div class="infobox infobox-blue">
										<div class="infobox-icon">
											<i class="ace-icon fa fa-twitter"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number">11</span>
											<div class="infobox-content">new followers</div>
										</div>

										<div class="badge badge-success">
											+32%
											<i class="ace-icon fa fa-arrow-up"></i>
										</div>
									</div>

									<div class="infobox infobox-pink">
										<div class="infobox-icon">
											<i class="ace-icon fa fa-shopping-cart"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number">8</span>
											<div class="infobox-content">new orders</div>
										</div>
										<div class="stat stat-important">4%</div>
									</div>

									<div class="infobox infobox-red">
										<div class="infobox-icon">
											<i class="ace-icon fa fa-flask"></i>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number">7</span>
											<div class="infobox-content">experiments</div>
										</div>
									</div>

									<div class="infobox infobox-orange2">
										<div class="infobox-chart">
											<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"><canvas width="44" height="33" style="display: inline-block; vertical-align: top; width: 44px; height: 33px;"></canvas></span>
										</div>

										<div class="infobox-data">
											<span class="infobox-data-number">6,251</span>
											<div class="infobox-content">pageviews</div>
										</div>

										<div class="badge badge-success">
											7.2%
											<i class="ace-icon fa fa-arrow-up"></i>
										</div>
									</div>

									<div class="infobox infobox-blue2">
										<div class="infobox-progress">
											<div class="easy-pie-chart percentage" data-percent="42" data-size="46" style="height: 46px; width: 46px; line-height: 45px;">
												<span class="percent">42</span>%
											<canvas height="46" width="46"></canvas></div>
										</div>

										<div class="infobox-data">
											<span class="infobox-text">traffic used</span>

											<div class="infobox-content">
												<span class="bigger-110">~</span>
												58GB remaining
											</div>
										</div>
									</div>

									<div class="space-6"></div>

									<div class="infobox infobox-green infobox-small infobox-dark">
										<div class="infobox-progress">
											<div class="easy-pie-chart percentage" data-percent="61" data-size="39" style="height: 39px; width: 39px; line-height: 38px;">
												<span class="percent">61</span>%
											<canvas height="39" width="39"></canvas></div>
										</div>

										<div class="infobox-data">
											<div class="infobox-content">Task</div>
											<div class="infobox-content">Completion</div>
										</div>
									</div>

									<div class="infobox infobox-blue infobox-small infobox-dark">
										<div class="infobox-chart">
											<span class="sparkline" data-values="3,4,2,3,4,4,2,2"><canvas width="39" height="19" style="display: inline-block; vertical-align: top; width: 39px; height: 19px;"></canvas></span>
										</div>

										<div class="infobox-data">
											<div class="infobox-content">Earnings</div>
											<div class="infobox-content">$32,000</div>
										</div>
									</div>

									<div class="infobox infobox-grey infobox-small infobox-dark">
										<div class="infobox-icon">
											<i class="ace-icon fa fa-download"></i>
										</div>

										<div class="infobox-data">
											<div class="infobox-content">Downloads</div>
											<div class="infobox-content">1,205</div>
										</div>
									</div>
								</div>

								<div class="vspace-12-sm"></div>

								<div class="col-sm-5">
									<div class="widget-box">
										<div class="widget-header widget-header-flat widget-header-small">
											<h5 class="widget-title">
												<i class="ace-icon fa fa-signal"></i>
												Traffic Sources
											</h5>

											<div class="widget-toolbar no-border">
												<div class="inline dropdown-hover">
													<button class="btn btn-minier btn-primary">
														This Week
														<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
													</button>

													<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
														<li class="active">
															<a href="#" class="blue">
																<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
																This Week
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																Last Week
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																This Month
															</a>
														</li>

														<li>
															<a href="#">
																<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
																Last Month
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="widget-body">
											<div class="widget-main">
												<div id="piechart-placeholder" style="width: 90%; min-height: 150px; padding: 0px; position: relative;"><canvas class="flot-base" width="384" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 384px; height: 150px;"></canvas><canvas class="flot-overlay" width="384" height="150" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 384px; height: 150px;"></canvas><div class="legend"><div style="position: absolute; width: 93px; height: 110px; top: 15px; right: -30px; opacity: 0.85; background-color: rgb(255, 255, 255);"> </div><table style="position:absolute;top:15px;right:-30px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #68BC31;overflow:hidden"></div></div></td><td class="legendLabel">social networks</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #2091CF;overflow:hidden"></div></div></td><td class="legendLabel">search engines</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #AF4E96;overflow:hidden"></div></div></td><td class="legendLabel">ad campaigns</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #DA5430;overflow:hidden"></div></div></td><td class="legendLabel">direct traffic</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #FEE074;overflow:hidden"></div></div></td><td class="legendLabel">other</td></tr></tbody></table></div></div>

												<div class="hr hr8 hr-double"></div>

												<div class="clearfix">
													<div class="grid3">
														<span class="grey">
															<i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
															&nbsp; likes
														</span>
														<h4 class="bigger pull-right">1,255</h4>
													</div>

													<div class="grid3">
														<span class="grey">
															<i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
															&nbsp; tweets
														</span>
														<h4 class="bigger pull-right">941</h4>
													</div>

													<div class="grid3">
														<span class="grey">
															<i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
															&nbsp; pins
														</span>
														<h4 class="bigger pull-right">1,050</h4>
													</div>
												</div>
											</div><!-- /.widget-main -->
										</div><!-- /.widget-body -->
									</div><!-- /.widget-box -->
								</div><!-- /.col -->
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
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">First Name</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Last Name</th>
                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Email</th>
                     <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Group</th>
                     <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Action</th>
                  
                   
                </tr>
            </thead>
			<?php echo $this->element('user_table'); ?>
        </table>
    </div>
</div>