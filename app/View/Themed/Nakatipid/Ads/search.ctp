
<?php echo $this->Html->script('/footable/js/footable.js'); ?>
<?php echo $this->Html->css('/footable/css/footable.core.css'); ?>
<?php echo $this->Html->css('/footable/css/footable.standalone.css'); ?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


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
                    <th data-hide="phone,tablet">Name</th>
                    <th data-hide="phone,tablet">Address</th>
                    <th>Price</th>
                    <th>Date Posted</th>
                    <th data-hide="phone,tablet">View</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($ads as $ad): ?>                    
                    <tr data-url="<?php echo $this->html->url(array('controller' => 'ads', 'action' => 'view','slug' => $ad['Ad']['slug']), true); ?>">
                        <td>
                            <?php echo $this->Html->image('/user/img/uploads/'. $ad['PrimaryImage']['name'],
                            array('url' => array('controller' => 'ads', 'action' => 'view','slug' => $ad['Ad']['slug']))); ?>
                        </td>
                        <td><?php echo $ad['Ad']['name']; ?></td>
                        <td>

                            <?php if(!empty($ad['Address']['street'])): ?>

                                <?php echo $ad['Address']['street']; ?>, 
                                <?php echo $ad['Address']['town']; ?>, <br/>
                                <?php echo $ad['Address']['province']; ?>,
                                <?php echo $ad['Address']['hometown']; ?>
    
                            <?php endif; ?>

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
                        <td>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        
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
    .block { text-align: center; padding: 10px 20px;}
    .block div { background: rgba(0,0,0,0.8); color: #fff; width: 100%; height: 100px; margin: 10px; display: block; vertical-align: middle; }

    #search-right { border-left: 1px solid; }
    #search-pagination { text-align: left; }
    #search-logo { width: 10%; }
    #search-table { width: 100%; border-radius: 0 !important; -wekit-border-radius: 0 !important; -moz-border-radius: 0 !important; }
    #search-table td, #search-table tr, #search-table th { border: none !important; }
    #search-table a { display: block; height: 150px; overflow: hidden; width: 150px; }
    #search-table > tbody > tr:hover { background: #d4d6d6; cursor: pointer; }

    @media only screen and (max-width : 640px) {
        .search-logo { text-align: center; }
        #search-logo { width: 50%; }
    }

</style>

<script type="text/javascript">
    $(document).ready(function($){

        if ($(window).width() > 1024){
            $('#search-table > tbody > tr').click(function(){
                window.location.href = $(this).attr('data-url');
            });
        }

        $('#search-table').footable({
            breakpoints: {
                phone: 480,
                tablet: 1024
            }
        });

    
        $( "input[name='q']" ).autocomplete({
              source: "<?php echo $this->html->url('ajax_search', true); ?>",
              minLength: 1
        });
        
    });
</script>