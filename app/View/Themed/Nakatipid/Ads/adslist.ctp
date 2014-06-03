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