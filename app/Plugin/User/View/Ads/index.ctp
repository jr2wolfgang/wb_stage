<div class="page-header">
	<h1>
		ADS
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Here is the list of all your ADS
		</small>
	</h1>
</div>

<div class="users index">
	<?php echo $this->Html->link('<i class="ace-icon fa fa-plus align-top bigger-125"></i> Create New ADS',array('controller' => 'ads','action' => 'new_ad'),array('class'=>'btn btn-info create-ad-btn','escape' => FALSE)); ?>
	<div class="row">
	    <div class="col-xs-12">
	        <table aria-describedby="sample-table-2_info" id="ads-table" class="table table-striped table-bordered table-hover dataTable">
	            <thead>
	                <tr role="row">
	                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Image</th>
	                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Title</th>
	                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Price</th>
	                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="sorting">Discount Price</th>
	                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Published</th>
	                    <th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Created</th>
	                   	<th aria-label="" colspan="1" rowspan="1" aria-controls="ads-table" tabindex="0" role="columnheader" class="hidden-480 sorting">Actions</th>
	                </tr>
	            </thead>
				<?php echo $this->element('ads_view'); ?>
	        </table>
	    </div>
	</div>
	
	<!-- <p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div> -->
</div>