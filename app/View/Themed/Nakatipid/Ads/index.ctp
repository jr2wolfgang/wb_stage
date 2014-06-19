    <div class="row full-width no-pads">
    	<div id="navi-top" class="">
    		<ul>
    			<li class="pull-left active">Home</li>
    			<li class="pull-left">Clothes</li>
    			<li class="pull-left">Accessories</li>
    			<li class="pull-left">Real State</li>
    			<li class="pull-left">Automotive</li>
    			<li class="pull-left">Gadgets</li>
    		</ul>
    		<div class="clearfix"></div>
    	</div>
    </div>
    <div class="row">
        <div id="header-container" class="large-12 column">
            <div id="logo-container" class="row">
                <div class="large-6 large-centered small-centered medium-centered column">
                    <?php echo $this->Html->image('logo_orange.png'); ?>
                </div>
            </div>
            <div id="searchbar-container" class="row">
                <div class="large-12 small-12 colums">
                    <form method="get" action="<?php echo $this->html->url('search', true); ?>" id="search-form">
                        <div id="search-field" class="large-9 small-7 no-pad-both columns">
                            <input type="text" id="mainsearch-field" placeholder="Type in your keyword .." name="q" />
                        </div>
                        <div id="location-dropdown" class="large-2 small-3 no-pad-both columns">
                            <div class="dropdown icon-right">
                                <div class="selected-dropdown">Green Bit</div>
                                <i class="flaticon-arrow133"></i>
                                <div class="clearfix"></div>
                                <ul class="list dropdown-fade">
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
                            <i class="flaticon-search54" type="submit"></i>
                        </div>
                    </form>
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
	
	<div class="row">
		<div id="search-filter" class="large-9 small-11 large-centered small-centered columns">
			<div class="filter-option pull-left has-dropdown">
				<span class="pull-left">Condition</span>
				<div class="flaticon-arrow208 pull-left"></div>
				<div class="clearfix"></div>
                <div class="filter-option-drp dropdown-fade">
                    <ul>
                        <li>Used</li>
                        <li>Brand News</li>
                    </ul>
                </div>
			</div>
			<div class="filter-option pull-left has-dropdown">
				<span class="pull-left">Location</span>
				<div class="flaticon-arrow208 pull-left"></div>
				<div class="clearfix"></div>
                <div class="filter-option-drp dropdown-fade">
                    <ul>
                        <li>Luzon</li>
                        <li>Visayaz</li>
                        <li>Mindanao</li>
                    </ul>
                </div>
			</div>
			<div class="filter-option pull-left has-dropdown">
				<span class="pull-left">Price range</span>
				<div class="flaticon-arrow208 pull-left"></div>
				<div class="clearfix"></div>
                <div class="filter-option-drp dropdown-fade">
                    <ul>
                        <li>PHP 100 to PHP 200</li>
                        <li>PHP 300 to PHP 400</li>
                        <li>PHP 500 to PHP 600</li>
                    </ul>
                </div>
			</div>
			<div class="filter-option pull-left has-dropdown">
				<span class="pull-left">Date Posted</span>
				<div class="flaticon-arrow208 pull-left"></div>
				<div class="clearfix"></div>
                <div class="filter-option-drp dropdown-fade">
                    <ul>
                        <li>Today</li>
                        <li>Yesterday</li>
                        <li>Last Week</li>
                        <li>Last Month</li>
                    </ul>
                </div>
			</div>
			<div class="filter-option-btn  pull-left">
				Filter
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

    <div class="row full-width" id="ads-list">
    <?php
        foreach ($ads as $data): ?>

            <div class="per-ads-list">
                <div class="per-ads-img">                            
                    <?php if (time() - strtotime($data['Ad']['created']) < 60*60*24): ?>
                        <div class="per-ads-new-label ads-has-label animated">New</div>
                    <?php endif; ?>
                    
                    <a href="ads/view/<?php echo $data['Ad']['id']; ?>/">
                        <div class="img-container">
                            <?php echo $this->Html->image('/user/img/uploads/'. $data['PrimaryImage']['name'],
                            array('url' => array('controller' => 'ads', 'action' => 'view','slug' => $data['Ad']['slug']))); ?>
                        </div>
                    </a>
                </div>
                <div class="per-ads-desc">
                    <div class="per-ads-title">
                       
                        <?php echo $this->Html->link($data['Ad']['name'],array(
                                'controller' => 'ads',
                                'action' => 'view',
                                'slug' => $data['Ad']['slug'],
                                
                        )); ?>

                    </div>
                    <div class="per-ads-info">
                        <span>
                            <i class="flaticon-clock61"></i>
                            <?php echo $this->Time->timeAgoInWords($data['Ad']['created']); ?>
                        </span>
                        <span>
                            <i class="flaticon-map5"></i>
                            <?php if(!empty($data['Address']['street'])): ?>

                                <?php echo $data['Address']['street']; ?>, 
                                <?php echo $data['Address']['town']; ?>, <br/>
                                <?php echo $data['Address']['province']; ?>,
                                <?php echo $data['Address']['hometown']; ?>

                            <?php endif; ?>
                        </span>
                        <span><i class="flaticon-small44"></i> 500 views</span>
                    </div>
                    <div class="per-ads-price-box">
                        <?php $class = '';?>
                        <div class="per-ads-price <?php echo ($data['Ad']['selling_price'] != 0) ? 'per-ads-before-price' : '' ?>">PHP <?php echo $data['Ad']['before_price']; ?></div>
                        <?php if ($data['Ad']['selling_price'] != 0): ?>
                             <div class="per-ads-price per-discount-price">
                                 &nbsp; NOW PHP <?php echo $data['Ad']['selling_price']; ?>
                             </div>
                        <?php endif;?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>                        
        <?php endforeach; ?>
    </div>

    <div class="navigation">
        <?php echo $this->Paginator->prev(' <'); ?>
        <?php echo $this->Paginator->next(' >'); ?>
    </div>

    <div id="lazy-loader-container" class="fullWidth">
        <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>