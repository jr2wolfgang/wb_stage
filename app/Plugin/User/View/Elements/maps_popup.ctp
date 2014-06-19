<div class="modal fade google_map_pop" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content transparent-modal">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="widget-box">
					<div class="widget-header">
						<h4 class="widget-title">Map</h4>

						<div class="widget-toolbar">
							<a class="close_modal" href="#">
								<i class="ace-icon fa fa-times"></i>
							</a>
						</div>
					</div>
					<div class="widget-body">
						<div class="widget-body-inner" style="display: block;">
							<div class="map_container" style="display:block" >
								<?php echo $this->Html->script('User.map'); ?>
								<input id="pac-input" class="controls" type="text" placeholder="Search Box">
								<div id="map-canvas" style="width:100%; height:400px;"></div>
								<?php echo $this->Form->hidden('Map.model',array('value' => 'Ad','type' => 'text')); ?>
								<?php echo $this->Form->hidden('Map.latitude',array('id' => 'lat','type' => 'text')); ?>
								<?php echo $this->Form->hidden('Map.longhitude',array('id' => 'lng','type' => 'text')); ?>
								<button id="close" class="btn btn-success btn-block save-map-btn" onclick="return false">Save Location for this ADS</button>
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

