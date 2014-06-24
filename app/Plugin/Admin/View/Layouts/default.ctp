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
		<title>Dashboard - <?php echo $userData['User']['firstname'] .' '.  $userData['User']['lastname']?></title>
		<script src="js/ace-extra.min.js"></script>
				<script src="js/jquery.min.js"></script>
		<?php

			echo $this->Html->css('User.bootstrap.min');
			echo $this->Html->css('User.font-awesome.min');
			echo $this->Html->css('User.flaticon');
			echo $this->Html->css('User.ace.min');
			echo $this->Html->css('User.style');

			echo $this->Html->script('User.ace-extra.min');
			echo $this->Html->script('User.jquery.min');


			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
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
						<?php echo $this->Session->flash(); ?>
							<?php echo $this->fetch('content'); ?>
						</div>
					</div>
				</div>
			</div>

			<?php echo $this->element('footer'); ?>

		</div>

		<?php
			echo $this->Html->script('User.bootstrap.min');
			echo $this->Html->script('User.ace-elements.min');
			echo $this->Html->script('User.ace.min');
		?>

	</body>

</html>
