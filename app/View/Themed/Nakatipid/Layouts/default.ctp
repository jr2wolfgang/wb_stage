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
        echo $this->Html->css('normalize');
        echo $this->Html->css('foundation.min');
        echo $this->Html->css('flaticon');
        echo $this->Html->css('style');

        // SCRIPTS
        echo $this->Html->script('vendor/jquery');
        echo $this->Html->script('vendor/modernizr');
        
    	echo $this->fetch('meta');
    	echo $this->fetch('css');
    	echo $this->fetch('script');
    ?>
</head>

<body>
    <!-- body content here -->

    <div id="main-wrapper">

        <div class="row">
            <div id="header-container" class="large-12 column">
                <div id="logo-container" class="row">
                    <div class="large-6 large-centered small-centered medium-centered column">
                        <?php echo $this->Html->image('logo.png'); ?>
                    </div>
                </div>
                <div id="searchbar-container" class="row">
                    <div id="search-field" class="left">
                        <input type="text" id="mainsearch-field" placeholder="Type in your keyword ..">
                    </div>
                    <div id="location-dropdown" class="left">
                        <div class="dropdown icon-right">
                            <div class="selected-dropdown">Quezon City</div>
                            <i class="flaticon-arrow133"></i>
                            <ul class="list">
                                <li class="selected">Quezon City</li>
                            </ul>
                        </div>
                    </div>
                    <div id="search-button" class="left solo-icon btn">
                        <i class="flaticon-magnifying40"></i>
                    </div>
                </div>
            </div>
        </div>

        <div id="access-section">
            <div class="access-forms row">
                <div class="row">
                    <div class="large-6 columns">
                        <div class="row">
                            <div class="large-9 columns">
                                <div class="access-title">
                                    Register at mag post!
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns">
                                <input type="text" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns">
                                <input type="text" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns">
                                <input type="text" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns">
                                <div id="register-btn" class="btn right icon-left">
                                    <i class="flaticon-user7"></i>
                                    <span>Register</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-6 columns">
                        <div class="row">
                            <div class="large-10 columns right">
                                <div class="access-title">
                                    Mag Login
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns right">
                                <input type="text" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns right">
                                <input type="text" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns right">
                                <div id="login-btn" class="btn right icon-left">
                                    <i class="flaticon-lock39"></i>
                                    <span>Login</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="register-container" class="small-12 large-6 columns">
                
            </div>
            <div id="signin-container" class="small-12 large-6 columns">
                <div class="or-circle left">
                    OR
                </div>
            </div>
        </div>

        <div class="row full-width" id="ads-list">
            
        </div>

    </div>

    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>

    <?php
        echo $this->Html->script('foundation.min');
    ?>
    <script type="text/javascript">
        $(document).foundation();
    </script>
    
</body>

</html>
