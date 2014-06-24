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
    
    <div class="row full-width top-header-container">
        <div class="large-6 columns">
            <div id="logo-columns" class="row">
                <?php echo $this->Html->image('logo_orange.png'); ?>
            </div>
            <div class="slogan-title">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit
            </div>
            <div class="slogan-content">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
            </div>
        </div>
        <div class="large-6 columns">
            <div id="searchbar-container">
                <div class="large-12 small-12 colums right">
                    <div id="search-field" class="large-10 small-10 no-pad-both columns">
                        <input type="text" id="mainsearch-field" placeholder="Clothes, Shoes, Gadgets, Phones etc..">
                    </div>
                    <div id="search-button" class="large-2 small-2 no-pad-both columns solo-icon btn">
                        <i class="flaticon-search54"></i>
                    </div>
                </div>
            </div>
            <div id="signin-container" class="small-12 large-12 columns">
                <?php echo $this->Form->create('User',array('controller' => 'users','action' => 'login')); ?>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="access-title">
                            Mag Login
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="large-6 columns">
                        <?php echo $this->Form->input('email',array('type' => 'text','label' => false,
                         'placeholder' =>'Email Address')); ?>
                    </div>
                    <div class="large-6 columns">
                        <?php echo $this->Form->input('jrr_password',array('type' => 'password','label' => false,
                         'placeholder' =>'Password')); ?>
                    </div>
                    <div class="large-4 columns">
                         <button type="submit" id="login-btn" class="btn right icon-left">
                          <i class="flaticon-lock39"></i> 
                           <span>Login</span>
                        </button>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>  
            </div>
            <div id="register-container" class="small-12 large-12 columns">
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
                    
                       <div class="img-container">
                            <?php echo $this->Html->image('/user/img/uploads/'. $data['PrimaryImage']['name'],
                            array('url' => array('controller' => 'ads', 'action' => 'view','slug' => $data['Ad']['slug']))); ?>
                        </div>
                 
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
                            <div class="address-icon" style="display:inline-block; width:5%; vertical-align:top;">
                                <i class="flaticon-map5"></i>
                            </div>
                            <?php if(!empty($data['Address']['street'])): ?>

                                <div class="address" style="display:inline-block; width:80%;">
                                    <?php echo $data['Address']['street']; ?>, 
                                    <?php echo $data['Address']['town']; ?>, 
                                    <?php echo $data['Address']['province']; ?>
                                </div>

                            <?php endif; ?>
                        </span>
                        <span><i class="flaticon-small44"></i> 500 views</span>
                    </div>
                    <div class="per-ads-price-box">
                        <?php $class = '';?>
                        <div class="per-ads-price <?php echo ($data['Ad']['selling_price'] != 0) ? 'per-ads-before-price' : '' ?>">PHP <?php echo $data['Ad']['before_price']; ?></div>
                        <?php if ($data['Ad']['selling_price'] != 0): ?>
                             <div class="per-ads-price per-discount-price">
                                 &nbsp; NOW! PHP <?php echo $data['Ad']['selling_price']; ?>
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