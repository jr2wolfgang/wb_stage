<?php


$metaDesc = 'Entertainment, social news stories, product discovery and creative inspiration.';
$cakeDescription = __d('cake_dev',$metaDesc);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php //echo $this->Html->css(array('style','foundation.min.css','foundation/css/foundation.css')); ?>


<link rel="stylesheet" href="http://www.trendolizer.com/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />  
    <!-- Bootstrap -->
  <link href="http://www.trendolizer.com/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://www.trendolizer.com/extra.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://www.trendolizer.com/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">


<title>
	
	 <?php echo $cakeDescription ?>
</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->

</head>
<body>
 
<!-- If you'd like some sort of menu to 
show up on all of your views, include it here -->
<div id="header">

</div>
<div class="container">
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
   
    <?php echo $this->Html->link('Tagroom',array('controller' => 'tagroomdemoposts','action' => 'index'),array('class' => 'brand'));?>
    <ul class="nav">
    <li><?php echo $this->Html->link('Tagroom',array('controller' => 'tagroomdemoposts','action' => 'index'));?></li>
    <li class="divider-vertical"></li>
    
    <li class="divider-vertical"></li>
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="http://trendolizer.com/us.png"><img src="http://trendolizer.com/gb.png"> Other topics 
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    <li>
    
    </ul>
    <li class="divider-vertical"></li>
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <img src="http://trendolizer.com/nl.png"><img src="http://trendolizer.com/be.png"> Andere onderwerpen
      <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
   
	<li><a href="http://nederlandsemedia.trendolizer.com/"> Nederlandse Media</a></li>
	<li><a href="http://vlaamsemedia.trendolizer.com/"> Vlaamse Media</a></li>
	<li><a href="http://vlaanderenkiest.trendolizer.com/"> Vlaanderen Kiest</a></li>
	</ul>
	</li>
	</ul>
    
    <form class="navbar-search pull-right"  action="http://www.trendolizer.com/cgi-bin/mt/mt-search.cgi" method="get">
    <input type="text" class="search-query" placeholder="Search trends..." name="search" style="width:130px">
    <input type="hidden" value="16" name="IncludeBlogs">
    </form>
  </div>
</div> <!-- navbar -->

 <?php echo $this->Session->flash(); ?>
<!-- Here's where I want my views to be displayed -->
<?php echo $this->fetch('content'); ?>
 </div>
<!-- Add a footer to each displayed page -->
<div id="footer">
	
</div>
 
</body>
</html>