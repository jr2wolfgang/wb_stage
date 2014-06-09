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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

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
                'register',
                'jquery-impromptu',
                'responsive'
            ));
   

        // SCRIPTS
        echo $this->Html->script('vendor/jquery');
        echo $this->Html->script('vendor/modernizr');
        echo $this->Html->script('jquery-impromptu');
        
    	echo $this->fetch('meta');
    	echo $this->fetch('css');
    	echo $this->fetch('script');
    ?>
</head>

<body>
    <!-- body content here -->

    <div id="main-wrapper" class="login">
        <div class="row full-width no-pads">
            <div class="" id="navi-top">
                <div class="logo-top">
                    <?php echo $this->Html->image('logo_orange_white.png'); ?>
                </div>
            </div>
        </div>

        <div id="inner-wrapper" class="row">
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>



  

    <?php
        echo $this->Html->script('foundation.min');
    ?>
    <script type="text/javascript">
        $(document).foundation();
    </script>
    
</body>

</html>
