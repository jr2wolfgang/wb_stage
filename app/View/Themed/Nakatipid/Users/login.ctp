<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('jrr_user',array('type' => 'text','label' => 'Username'));
        echo $this->Form->input('jrr_password',array('type' => 'password','label' => 'Password'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>