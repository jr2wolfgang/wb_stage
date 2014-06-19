<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nakatipid.ph</title>

    <?php


        // STYLES
        echo $this->Html->css(array('normalize',
                'foundation.min',
                'font-awesome.min',
                'flaticon',
                'animate',
                'style',
                'responsive',
                'perfect-scrollbar',
                'jquery.jscrollpane'
            ));


        // SCRIPTS
        echo $this->Html->script('vendor/jquery');
        echo $this->Html->script('vendor/modernizr');
        echo $this->Html->script('perfect-scrollbar');
        echo $this->Html->script('jquery.jscrollpane');
        echo $this->Html->script('jquery.mousewheel');
        echo $this->Html->script('mwheelIntent');
        
    	echo $this->fetch('meta');
    	echo $this->fetch('css');
    	echo $this->fetch('script');
    ?>
</head>

<body>

    <div id="main-wrapper">

        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>

    </div>

    

    <?php
        echo $this->Html->script('foundation.min');
        echo $this->Html->script('jquery.infinitescroll.min');
        echo $this->Html->script('custom');
    ?>
    <script type="text/javascript">
        $(document).foundation();
    </script>
    
</body>

</html>
