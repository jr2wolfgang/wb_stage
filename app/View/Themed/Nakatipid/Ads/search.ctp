<header class="row full-width no-pads">
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
</header>

<div class="search-logo">
    <?php echo $this->Html->image('logo_orange.png',array('id'=>'search-logo','url'=>array('controller' => 'ads', 'action' => 'index'))); ?>
</div>

<section class="row full-width no-pads wrapper-ads"> 
    <div id="search-left" class="large-2 columns">
        <div class="block">
            <form action="<?php echo $this->html->url('search', true); ?>" method="get">
                <input placeholder="search" name="q" />
                <input type="submit" value="search" />
            </form>
        </div>
        <div class="block">
            <div>Google Ads</div>
        </div>
        <div class="block">
            <div>Most Viewed</div>
        </div>
        <div class="block">
            <div>Most Valiable Shop</div>
        </div>        
    </div>
    <div id="search-right" class="large-10 columns">
        <table id="search-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Price</th>
                    <th>Date Posted</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($ads as $ad): ?>                    
                    <tr>
                        <td>
                            <?php echo $this->Html->image('/user/img/uploads/'. $ad['PrimaryImage']['name'],
                            array('url' => array('controller' => 'ads', 'action' => 'view','slug' => $ad['Ad']['slug']))); ?>
                        </td>
                        <td><?php echo $ad['Ad']['name']; ?></td>
                        <td>
                            GreenBit
                        </td>
                        <td>
                             <?php if( $ad['Ad']['selling_price'] != 0): ?>
                                <?php
                                    $class = "class='before-price'";
                                    $selling_price = 'NOW PHP ' . $ad['Ad']['selling_price'];
                                ?>
                             <?php else: ?>
                                <?php
                                    $class = "";
                                    $selling_price = "";
                                ?>
                             <?php endif;?>
                             <span <?php echo $class; ?>>PHP <?php echo $ad['Ad']['before_price']; ?></span>
                             <br />
                             <span style="color:red;"><?php echo $selling_price; ?></span>                                                     
                        </td>
                        <td>
                            <?php echo $this->Time->timeAgoInWords($ad['Ad']['created']); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfooter>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Price</th>
                    <th>Date Posted</th>
                    <th>View</th>
                </tr>
            </tfooter>
        </table>
        <div id="search-pagination">
            Page: 
            <?php echo $this->Paginator->prev(' <'); ?>
            <?php echo $this->Paginator->numbers(array('modulus' => 4)); ?>
            <?php echo $this->Paginator->next(' >'); ?>
        </div>
    </div>
</section>

<style type="text/css">
    #main-wrapper { padding-bottom: 0px; }
    .before-price { text-decoration: line-through; }

    .search-logo { border-bottom: 1px solid; padding: 10px; }
    .block { text-align: center; padding: 20px; }
    .block div { background: rgba(0,0,0,0.8); color: #fff; width: 100%; height: 100px; margin: 10px; display: block; vertical-align: middle; }

    #search-right { border-left: 1px solid; }
    #search-pagination { text-align: left; }
    #search-logo { width: 10%; }
    #search-table { width: 100%; }
    #search-table a { display: block; height: 150px; overflow: hidden; width: 150px; }
</style>