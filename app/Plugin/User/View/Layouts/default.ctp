<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>Dashboard - <?php echo $userData['User']['firstname'].', '.$userData['User']['lastname'] ?></title>
		<?php

			echo $this->Html->css('User.style');
			/* validate */
			echo $this->Html->css('User./js/validate/validate');
			

			echo $this->Html->css('User.bootstrap.min');
			echo $this->Html->css('User.font-awesome.min');
			echo $this->Html->css('User.flaticon');
			echo $this->Html->css('User.jquery-ui.custom.min');
			echo $this->Html->css('User.jquery.gritter');
			echo $this->Html->css('User.select2');
			echo $this->Html->css('User.chosen');
			echo $this->Html->css('User.datepicker');
			echo $this->Html->css('User.bootstrap-editable');
			echo $this->Html->css('User.ace.min');
			echo $this->Html->css('User.ace-skins.min');
			echo $this->Html->css('User.ace-rtl.min');
			echo $this->Html->css('User.flaticon');


			echo $this->Html->script('User.global'); 	
			echo $this->Html->script('User.jquery.min');
			echo $this->Html->script('User.ace-extra.min');
			echo $this->Html->script('User.bootstrap.min');

			/* redactor */
			echo $this->Html->css('User./js/redactor/css/redactor');
			echo $this->Html->script(array(
				'User.redactor/redactor/redactor_new',
				'User.redactor/redactor/fontfamily',
				'User.redactor/redactor/fontcolor',
				'User.redactor/redactor/fontsize',
				));

			/* validate */
			echo $this->Html->script('User.validate/jquery.validate');
			echo $this->Html->script('User.validate/additional-methods');

			
			echo $this->fetch('meta');
			echo $this->fetch('css');
			

			echo $this->fetch('script');
		?>

		<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet">
		
	</head>

	<body class="no-skin">
		
		<?php echo $this->element('navbar'); ?>

		<div id="main-container" class="main-container">

			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
		
			<?php echo $this->element('sidebar'); ?>
			
			<div class="main-content">
				<?php echo $this->element('breadcrumbs'); ?>
				<div class="page-content">
					<div class="row">
						<div class="col-xs-12">
							<!-- CONTENT HERE -->
							<?php echo $this->Session->flash(); ?>
							<?php echo $this->fetch('content'); ?>
						</div>
					</div>
				</div>
			</div>

			<?php echo $this->element('footer'); ?>

		</div>

		<?php
			echo $this->Html->script('User.jquery-ui.custom.min');
			echo $this->Html->script('User.jquery.ui.touch-punch.min');
			echo $this->Html->script('User.markdown.min');
			echo $this->Html->script('User.bootstrap-markdown.min');
			echo $this->Html->script('User.jquery.hotkeys.min');
			echo $this->Html->script('User.bootstrap-wysiwyg.min');
			echo $this->Html->script('User.jquery.gritter.min');
			echo $this->Html->script('User.bootbox.min');
			echo $this->Html->script('User.jquery.easypiechart.min');
			echo $this->Html->script('User.bootstrap-datepicker.min');
			echo $this->Html->script('User.select2.min');
			echo $this->Html->script('User.fuelux.spinner.min');
			echo $this->Html->script('User.bootstrap-editable.min');
			echo $this->Html->script('User.ace-editable.min');
			echo $this->Html->script('User.jquery.maskedinput.min');
			echo $this->Html->script('User.jquery.dataTables.min');
			echo $this->Html->script('User.jquery.dataTables.bootstrap');

			// dont remove those script below
			echo $this->Html->script('User.ace-elements.min');
			echo $this->Html->script('User.ace.min');
			echo $this->Html->script('User.global');
		?>

	</body>

</html>
