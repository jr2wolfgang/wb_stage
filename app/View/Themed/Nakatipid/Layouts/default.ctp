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
                        <?php echo $this->Html->image('logo_orange.png'); ?>
                    </div>
                </div>
                <div id="searchbar-container" class="row">
                    <div id="search-field" class="left">
                        <input type="text" id="mainsearch-field" placeholder="Type in your keyword ..">
                    </div>
                    <div id="location-dropdown" class="left">
                        <div class="dropdown icon-right">
                            <div class="selected-dropdown">Green Bit</div>
                            <i class="flaticon-arrow133"></i>
                            <ul class="list">
                                <li class="selected">East Blue</li>
                                <li class="">Grand Line</li>
                                <li class="">Red Line</li>
                                <li class="">New World</li>
                                <li class="">Alabasta</li>
                                <li class="">Enies Lobby</li>
                                <li class="">Marineford</li>
                                <li class="">Dressrosa</li>
                                <li class="">Arlong Park</li>
                            </ul>
                        </div>
                    </div>
                    <div id="search-button" class="left solo-icon btn">
                        <i class="flaticon-magnifying40"></i>
                    </div>
                </div>
            </div>
        </div>
    <?php echo $this->Form->create('User',array('controller' => 'users','action' => 'register')); ?>
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
                                <?php echo $this->Form->input('email',array('label' => false,'placeholder' => 'Email Address'));?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns">
                                <?php echo $this->Form->input('jrr_password',array('type' => 'password','label' => false,'placeholder' => 'Password'));?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns">
                                <?php echo $this->Form->input('rxt',array('type' => 'password','label' => false,'placeholder' => 'Confirm Password'));?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns">
                                     
                               <button type="submit" id="register-btn" class="btn right icon-left">
                                  <i class="flaticon-user7"></i> <span>Register</span>
                                </button>
                    
                         <?php echo $this->Form->end(); ?>
                            </div>
                        </div>
                    </div>
                <?php echo $this->Form->end(); ?>  
                    <?php echo $this->Form->create('User',array('controller' => 'users','action' => 'login')); ?>
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
                                <?php echo $this->Form->input('email',array('type' => 'text','label' => false,
                                 'placeholder' =>'Email Address')); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns right">
                                <?php echo $this->Form->input('jrr_password',array('type' => 'password','label' => false,
                                 'placeholder' =>'Password')); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-10 columns right">
                               

                                 <button type="submit" id="login-btn" class="btn right icon-left">
                                  <i class="flaticon-lock39"></i> 
                                   <span>Login</span>
                                </button>
                            </div>
                             <?php echo $this->Form->end(); ?>  
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
            <div class="large-11 large-centered small-centered small-12  columns">
                <?php
                    for ($i=0; $i < 20; $i++) { 
                        ?>
                            <div class="per-ads-list new-ads left">
                                <div class="per-ads-img">
                                    <div class="per-ads-new-label">New</div>
                                    <?php echo $this->Html->image('sample-product.jpg'); ?>
                                </div>
                                <div class="per-ads-desc">
                                    <div class="per-ads-title">
                                        Slim Fit Low Hugger Pants
                                    </div>
                                    <div class="per-ads-exerpt">
                                        Lorem ipsum supsup domoit
                                    </div>
                                    <div class="per-ads-info">
                                        <span><i class="flaticon-clock61"></i> 5 days ago.</span>
                                        <span><i class="flaticon-map58"></i> Dressrossa, New World</span>
                                    </div>
                                    <div class="per-ads-price-box">
                                        <div class="per-ads-price">PHP 500.00</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="per-ads-list discount-ads left">
                                <div class="per-ads-img">
                                    <div class="per-ads-discount-label">-50%</div>
                                    <?php echo $this->Html->image('sample-product.jpg'); ?>
                                </div>
                                <div class="per-ads-desc">
                                    <div class="per-ads-title">
                                        Slim Fit Low Hugger Pants
                                    </div>
                                    <div class="per-ads-exerpt">
                                        Lorem ipsum supsup domoit
                                    </div>
                                    <div class="per-ads-info">
                                        <span><i class="flaticon-clock61"></i> 5 days ago.</span>
                                        <span><i class="flaticon-map58"></i> Dressrossa, New World</span>
                                    </div>
                                    <div class="per-ads-price-box">
                                        <div class="per-ads-price per-discount-price">NOW PHP 500.00</div>
                                        <div class="per-ads-old-price">PHP 500.00</div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>    
                        <?php
                    }
                ?>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>

    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>

    <?php
        echo $this->Html->script('foundation.min');
        echo $this->Html->script('custom');
    ?>
    <script type="text/javascript">
        $(document).foundation();
    </script>
    
</body>

</html>
