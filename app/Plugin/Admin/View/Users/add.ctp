<div class="page-header">
	<h1>
		Create User
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Basic Account Information
			
		</small>
	</h1>
</div>
<div class="clear"></div>
<?php echo $this->Form->create('User',array('class'=>'form-horizontal ads','role'=>'form','url'=>array('controller' => 'users','action' => 'add'))); ?>


	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Role </label>
		<div class="col-sm-9">
			<?php  echo $this->Form->input('group_id',array('label' => false,'class' => 'required')); ?>
		</div>
	</div>
	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Account Type </label>
		<div class="col-sm-9">
			<?php  echo $this->Form->input('account_type_id',array('label' => false,'class' => 'required')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> First Name </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('firstname',array('label' => false,'class' => 'required')); ?>
		</div>
	</div>


	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Last Name </label>
		<div class="col-sm-9">
			<?php  echo $this->Form->input('lastname',array('label' => false,'class' => 'required')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Birth Date </label>
		<div class="col-sm-9">
			<?php  echo $this->Form->input('birthdate',array('label' => false,'class' => 'required')); ?>
		</div>
	</div>

	<div class="form-group gender">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Gender </label>
		<div class="col-sm-9">
			<?php echo $this->Form->radio('gender',array('M' => 'Male', 'F' => 'Female'),array( 'legend' => false,'class' => 'required')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Username </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('jrr_user',array('label' => false,'class' => 'required')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Password </label>
		<div class="col-sm-9">
			<?php echo $this->Form->input('jrr_password',array('type' => 'password','label' =>false,'class' => 'required')); ?>
		</div>
	</div>

	<div class="form-group">
		<label for="form-field-desc" class="col-sm-3 control-label no-padding-right"> Repeat Password </label>
		<div class="col-sm-9">
			<?php  echo $this->Form->input('default_password',array('type' => 'password','label' =>false,'class' => 'required')); ?>
		</div>
	</div>


	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button type="submit" id="submit" class="btn btn-success">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Submit
			</button>
			&nbsp; &nbsp; &nbsp;
			<button type="reset" class="btn">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>
		</div>
	</div>

<?php echo $this->Form->end(); ?> 


<?php echo $this->Html->script('Admin.add_user');  ?>
