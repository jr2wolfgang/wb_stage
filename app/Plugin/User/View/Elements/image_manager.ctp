<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content transparent-modal">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="widget-box">
					<div class="widget-header">
						<h4 class="widget-title">File Manager</h4>

						<div class="widget-toolbar">
							<a class="close_modal" href="#">
								<i class="ace-icon fa fa-times"></i>
							</a>
						</div>
					</div>
					<div class="widget-body">
						
						<div class="widget-body-inner" style="display: block;">
							<div class="widget-main">
								<div id="mulitplefileuploader" class="btn btn-warning"><i class='ace-icon fa fa-folder'></i>Choose File</div>
								<div class="clearfix"></div>
								<div class="row add-selected-image-btn">
									<div class="col-lg-12 text-left">
										<button class="btn btn-lg btn-success use_image">
											<i class="ace-icon fa fa-check"></i>
											Add Selected Image(s)
										</button>
									</div>
								</div>
								<div class="fm-image-wrap">
									<div class="row">
										<div class="col-lg-12">

											<?php
											if (!empty($images['Image'])) : 
												foreach ($images['Image'] as $key => $value) :
											?>
											<div id="<?php echo $value['id']; ?>-img" class="fm-per-img col-lg-12">
												<div class="row">
													<div class="col-lg-1">
														<div class="checkbox">
															<label>
																<input type="checkbox" class="ace" value="<?php echo $value['id']; ?>" name="data[Ad][images][]">
																<span class="lbl"></span>
															</label>
														</div>
													</div>
													<div class="col-lg-3">
														<a class="fancybox" href="<?php echo Configure::read('folder_name').$value["path"].$value["name"]; ?>" data-fancybox-group="gallery" title="<?php echo $value['name']; ?>">
															<?php echo $this->Html->image('/'.$value['path'].$value['name'],array('class' => 'img-responsive')); ?>
														</a>
													</div>
													<div class="col-lg-6"><?php echo $value['name']?></div>
													<div class="col-lg-2">
														<button class="btn btn-info btn-sm edit-image" data-id="<?php echo $value['id']; ?>">
															<i class="ace-icon fa fa-pencil icon-only"></i>
														</button>
														<button class="btn btn-danger btn-sm delete-image" data-id="<?php echo $value['id']; ?>">
															<i class="ace-icon fa fa-trash-o icon-only"></i>
														</button>
													</div>
												</div>
											</div>
											<?php
												endforeach;
											endif;
											?>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>
</div>
