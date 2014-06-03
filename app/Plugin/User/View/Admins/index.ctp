Welcome : <?php echo $userData['User']['firstname'].', '.$userData['User']['lastname'] ; ?>
<br/>
<?php echo $this->Html->link('Logout',array('controller' => 'users','action' => 'logout','plugin' => false)); ?>