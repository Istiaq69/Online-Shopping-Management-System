<?php
$contents=$this->cart->contents(); //returns all data from session
//echo '<pre>';
//print_r($contents);
//exit();
?>

<!-- CONTENT -->
<div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="account.html">Account</a> » Shopping Cart</div>
      <h2 class="heading-title"><span>Shopping Cart</span></h2>
     <!-- CONTENT --> <div id="content">
        <div class="cart-info">
          <table>
            <thead>
              <tr>
                <td class="remove">Remove</td>
                <td class="image">Image</td>
                <td class="name">Product Name</td>
                <!--<td class="model">Model</td>-->
                <td class="quantity">Quantity</td>
                <td class="price">Unit Price</td>
                <td class="total">Total</td>
              </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($contents as $v_contents)
                {
                ?>
              <tr>
                  <td class="remove"><a id="delete" href="<?php echo base_url();?>Cart/delete_cart/<?php echo $v_contents['rowid']?>">Remove</a></td>
                <td class="image"><a href="product.html"><img src="<?php echo base_url().$v_contents['options']['image']?>" height="100" width="100" alt="Spicylicious store" /></a></td>
                <td class="name"><a href="product.html"></a> <span class="stock"><?php echo $v_contents['name']?></span>
                    <!--<div><b></b></div>-->
                </td>
                <!--<td class="model">Product 14</td>-->
                <td class="quantity">
                    <form method="post" action="<?php echo base_url();?>Cart/update_cart">
                        <input type="number" size="3" value="<?php echo $v_contents['qty'] ?>" name="qty"/>
                        <input type="hidden" size="3" value="<?php echo $v_contents['rowid'] ?>" name="rowid"/>
                        <button type="submit"  name="btn" id="push" title="Cart Update" ><i class="icon-credit-card">Update</i></button>
                    </form>
                </td>
                <td class="price"><?php echo $v_contents['price']?></td>
                <td class="total"><?php echo $v_contents['subtotal']?></td>
              </tr>
              <?php 
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="toggle_holder">
            <form method="post" action="<?php echo base_url();?>Cart/apply_coupon">
                <div class="cart-heading">Apply Discount Code</div>
                <div id="coupon" class="cart-content">Enter your coupon here:&nbsp;
                    <input type="text" value="" name="coupon_code"/>
                    &nbsp;<button type="submit"><span>Apply Coupon</span></button></div>
            </form>
          </div> 
        <div class="cart-total">
          <table>
            <tbody>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>Total:</b></td>
                <td class="right numbers">
                    <?php 
                        $total=$this->cart->total(); 
                        echo 'BDT '.$total;
                    ?>
                </td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>VAT 15%:</b></td>
                <td class="right numbers">
                    <?php 
                        //$vat= ($this->cart->total()*15)/100 ;
                        $vat=($total*15)/100;
                        echo 'BDT '.$vat ;
                    ?>
                </td>
              </tr>
              <tr>
               <?php
                $discount=$this->session->userdata('discount');
                if($discount)
                {
              ?>
                <td colspan="5"></td>
                <td class="right"><b>Coupon Discount:</b></td>
                <td class="right numbers">
                    <?php 
                        echo $discount ;
                    ?>
                </td>
              </tr>
              <?php 
                }
              ?>
              <tr>
                <td colspan="5"></td>
                <td class="right numbers_total"><b>Grand Total:</b></td>
                <td class="right numbers_total">
                   <?php
//                    if($discount){
//                        $grandtotal= $total + $vat - $discount;
//                        echo 'BDT- ' .$grandtotal;
//                    }
//                    else{
//                         $grandtotal= $total+$vat;
//                         echo 'BDT- '.$grandtotal;
//                    }
//                   ?>
                  <?php
                    if($discount){
                        //$sdata = array();
                        $sdata['grandtotal'] = $total + $vat - $discount;
                        $this->session->set_userdata($sdata);
                        echo 'BDT- ' . $sdata['grandtotal'];
                    }
                    else{
                         $sdata['grandtotal']= $total+$vat;
                         $this->session->set_userdata($sdata);
                         echo 'BDT- '.$sdata['grandtotal'];
                    }
                  ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="buttons">
          <!--<div class="left"><a class="button" onclick="#"><span>Update</span></a></div>-->
           <?php 
                $customer_id=$this->session->userdata('customer_id');
                $shipping_id=$this->session->userdata('shipping_id');
                if($customer_id != NULL && $shipping_id == NULL)
                {
           ?> 
            <div class="right"><a class="button" href="<?php echo base_url();?>Checkout/shipping"><span>Checkout</span></a></div>
            <?php
                }
                else if($customer_id != NULL && $shipping_id != NULL)
                {
           ?> 
            <div class="right"><a class="button" href="<?php echo base_url();?>Checkout/payment"><span>Checkout</span></a></div>
            <?php
                }
                else{
            ?>
          <div class="right"><a class="button" href="<?php echo base_url();?>Checkout/customer_registration"><span>Checkout</span></a></div>
          <?php 
                }
          ?>
          <div class="center"><a class="button" href="#"><span>Continue Shopping</span></a></div>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF CONTENT --> 