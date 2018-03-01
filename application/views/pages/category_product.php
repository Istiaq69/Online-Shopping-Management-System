     <div class="box">
                            <h2 class="heading-title"><span style="color: limegreen">Welcome to Gadget World</span></h2>
                            <div class="box-content">
                                <p><h5><b style="color: tomato">Gadget World is an online based Computer gadgets retail store. All types of imported brand new Computer gadgets are available here. Save your money and time with the best quality dealing store!!
                                    Our main vision is to develop an advanced IT gadgets retail store with exhibition concept to provide the best service, endorsed by competent human resources and professional business partners and supported by excellent services having full range facilities to only extend consumer satisfaction.</b></h5></p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="banner">
                                <div><a href="#"><img src="<?php echo base_url();?>asset/site/image/acer.jpg" alt="acer store" width="893" height="270" /></a></div>
<!--                                <div><a href="#"><img src="<?php echo base_url();?>asset/site/image/banner2.jpg" alt="Spicylicious store" /></a></div>-->
                            </div>
                        </div><br><br><br><br><br><br><br><br>
                        <div class="box">
                            <h2 class="heading-title"><span>Latest Products</span></h2>
                            <div class="box-content">
                                <div class="box-product fixed">
                                  <?php
                                        foreach ($published_product_by_category as $v_product)
                                        {
                                    ?>  
                                    <div class="prod_hold">
                                        <a class="wrap_link" href="<?php echo base_url();?>Welcome/product_details/<?php echo $v_product->product_id ;?>"> <span class="image"><img src="<?php echo base_url().$v_product->product_image?>" width="150" height="150" alt="Spicylicious store" /></span> </a>
                                        <div class="pricetag_small"> <span class="old_price">BDT <?php echo $v_product->product_price?></span> <span class="new_price">BDT <?php echo $v_product->new_product_price ?></span> </div>
                                        <div class="info">
                                            <h3><?php echo $v_product->product_name?></h3>
                                            <p><?php echo $v_product->product_short_description?></p>
                                            <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a></div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
