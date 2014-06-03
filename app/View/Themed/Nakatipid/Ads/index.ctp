    <div class="row">
        <div id="header-container" class="large-12 column">
            <div id="logo-container" class="row">
                <div class="large-6 large-centered small-centered medium-centered column">
                    <?php echo $this->Html->image('logo_orange.png'); ?>
                </div>
            </div>
            <div id="searchbar-container" class="row">
                <div class="large-12 small-12 colums">
                    <div id="search-field" class="large-9 small-7 no-pad-both columns">
                        <input type="text" id="mainsearch-field" placeholder="Type in your keyword ..">
                    </div>
                    <div id="location-dropdown" class="large-2 small-3 no-pad-both columns">
                        <div class="dropdown icon-right">
                            <div class="selected-dropdown">Green Bit</div>
                            <i class="flaticon-arrow133"></i>
                            <div class="clearfix"></div>
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
                    <div id="search-button" class="large-1 small-2 no-pad-both columns solo-icon btn">
                        <i class="flaticon-magnifying40"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="access-section" class="dekstop-view">

        <div class="access-forms row dekstop-view">
            <div class="row">
                <div class="large-6 columns">
                    <?php echo $this->Form->create('User',array('controller' => 'users','action' => 'register')); ?>
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
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
                <div class="large-6 columns">
                    <?php echo $this->Form->create('User',array('controller' => 'users','action' => 'login')); ?>
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
                    </div>
                    <?php echo $this->Form->end(); ?>  
                </div>
            </div>
        </div>
        <div id="register-container" class="dekstop-view small-12 large-6 columns">
            
        </div>
        <div id="signin-container" class="dekstop-view small-12 large-6 columns">
            <div class="or-circle left">
                OR
            </div>
        </div>
    </div>

    <div class="mobile-access-container mobile-view">
        
        <div class="row mobile-view register-container-mobile">
            <div class="large-12 columns">
                <?php echo $this->Form->create('User',array('controller' => 'users','action' => 'register')); ?>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="access-title">
                            Register at mag post!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <?php echo $this->Form->input('email',array('label' => false,'placeholder' => 'Email Address'));?>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <?php echo $this->Form->input('jrr_password',array('type' => 'password','label' => false,'placeholder' => 'Password'));?>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <?php echo $this->Form->input('rxt',array('type' => 'password','label' => false,'placeholder' => 'Confirm Password'));?>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                       <button type="submit" id="register-btn" class="btn right icon-left">
                          <i class="flaticon-user7"></i> <span>Register</span>
                        </button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="row mobile-view signin-container-mobile">
            <div class="large-12 columns">
                <?php echo $this->Form->create('User',array('controller' => 'users','action' => 'login')); ?>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="access-title">
                            Mag Login
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <?php echo $this->Form->input('email',array('type' => 'text','label' => false,
                         'placeholder' =>'Email Address')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <?php echo $this->Form->input('jrr_password',array('type' => 'password','label' => false,
                         'placeholder' =>'Password')); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                         <button type="submit" id="login-btn" class="btn right icon-left">
                          <i class="flaticon-lock39"></i> 
                           <span>Login</span>
                        </button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>

    <div class="row full-width" id="ads-list">
            <?php
                for ($i=0; $i < 20; $i++) { 
                    ?>
                        <div class="per-ads-list new-ads ">
                            <div class="per-ads-img">
                                <div class="per-ads-new-label ads-has-label animated">New</div>
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
                        <div class="per-ads-list discount-ads">
                            <div class="per-ads-img">
                                <div class="per-ads-discount-label ads-has-label animated">-50%</div>
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
    </div>
    <div id="lazy-loader-container" class="fullWidth">
        <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>