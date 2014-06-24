	<div class="ads_preview">
		<div class="per-ads-list">
                <div class="per-ads-img">                            
                    <?php if (time() - strtotime('2014-06-18 20:02:07.000000') < 60*60*24): ?>
                        <div class="per-ads-new-label ads-has-label animated">New</div>
                    <?php endif; ?>
                    
                    <a href="ads/view/slugs/">
                        <div class="img-container">
                            <?php 
                            $ImgSrc = !empty($data['PrimaryImage']['id']) ? '/'.$data['PrimaryImage']['path'].$data['PrimaryImage']['name'] : '/user/img/default_product_image.png';
                             echo $this->Html->image($ImgSrc); ?>
                        </div>
                    </a>
                </div>
                <div class="per-ads-desc">
                    <div class="per-ads-title">
                       <?php 
                       $Title = !empty($data['Ad']['name']) ? $data['Ad']['name'] : 'Ads name';
                       echo $this->Html->link($Title,'#'); 
                       ?>

                    </div>
                    <div class="per-ads-info">
                        <span>
                            <i class="flaticon-clock61"></i>
                           <?php 
                           if (!empty($data['Ad']['created'])) :
                                echo $this->Time->timeAgoInWords($data['Ad']['created']);
                            else : 
                                echo 'A Second Ago';
                            endif;    
                            ?>
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
                            <?php else : ?>
                                 <div class="address" style="display:inline-block; width:80%;">
                                    
                                </div>
                            <?php endif; ?>

                            
                        </span>
                        <span><i class="flaticon-small44"></i> 500 views</span>
                    </div>
                  


               <div class="per-ads-price-box">
                        <?php $class = '';?>
                        <?php if (!empty($data['Ad']['before_price'])) : ?>
                        <div class="per-ads-price per-ads-before-price">PHP <span class="before_price"><?php echo $data['Ad']['before_price']; ?></span></div>
                    <?php else : ?>
                         <div class="per-ads-price per-ads-before-price">PHP <span class="before_price">0</span></div>
                    <?php endif; ?>
                     <?php if (!empty($data['Ad']['selling_price'])) : ?>
                        <div class="per-ads-price per-discount-price">
                                 &nbsp; NOW! PHP <span class="discounted_price"><?php echo $data['Ad']['selling_price']; ?></span>
                             </div>
                     <?php else : ?>
                        <div class="per-ads-price per-discount-price">
                                 &nbsp; NOW! PHP <span class="discounted_price">0</span>
                             </div>     
                        <?php endif;?>
                        <div class="clearfix"></div>
                    </div>
            </div>      		
	</div>