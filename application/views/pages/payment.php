<div id="content_holder" class="fixed">
    <div class="inner">
        <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="cart.html">Cart</a> » <a href="cart.html">Shipping</a> » Payment </div>
        <h2 class="heading-title"><span>Payment</span></h2>
        <div>
            <p><h4>Please select the preferred payment method to use on this method</h4></p>

            <form action="<?php echo base_url(); ?>Checkout/confirm_order" method="post">
                <table class="form">
                    <tbody>
                        <tr>
                            <td style="width: 1px;"><input type="radio" id="tod" value="cash_on_delivery" name="payment_method" checked="checked"></td>
                            <td><label for="tod">Cash On Delivery</label></td>
                        </tr>
                        <tr>
                            <td style="width: 1px;"><input type="radio" id="cod" value="paypal" name="payment_method"></td>
                            <td><label for="cod">Paypal</label></td>
                        </tr>
                    </tbody>
                </table>

                <!--<b>Add Comments About Your Order</b>
                <textarea style="width: 98%" rows="8" cols="20" name="comments"></textarea>-->
                <br/><br/>
                <div class="buttons">
                    <div class="right"><h6>I have read and agree to the <a href="http://www.condition.com" class="fancybox"><b>Terms &amp; Conditions</b></a></h6>
                        <input type="checkbox" value="1" name="agree" />
                        <button type="submit" name="update" id="push" title="continue"><i class="icon-credit-card"></i>Confirm Order</button>
                    </div>
            </form>
        </div>
    </div>
</div>

