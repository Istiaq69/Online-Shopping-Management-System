<!-- CONTENT -->
<div id="content_holder" class="fixed">
    <div class="inner">
        <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="cart.html">Cart</a> » Checkout </div>
        <h2 class="heading-title"><span>Checkout</span></h2>
        <div id="content"> 

            <div id="accordion" class="checkout">
                <h2><a href="#">Checkout Details</a></h2>
                <div>
                    <form action="<?php echo base_url();?>Checkout/save_customer" method="post">
                    <table class="form">
                        <tbody>
                            <tr>
                                <td><span class="required">*</span>First Name:</td>
                                <td><input type="text" class="large-field" value="" name="first_name"/></td>
                            </tr>
                            <tr>
                                <td><span class="required">*</span> Last Name:</td>
                                <td><input type="text" class="large-field" value="" name="last_name"/></td>
                            </tr>
                            <tr>
                                <td><span class="required">*</span> Email Address:</td>
                                <td><input type="email" class="large-field" value="" name="email_address"/></td>
                            </tr>
                            <tr>
                                <td><span class="required">*</span> Password:</td>
                                <td><input type="password" class="large-field" value="" name="password"/></td>
                            </tr>
                            <tr>
                                <td>Company:</td>
                                <td><input type="text" class="large-field" value="" name="company"/></td>
                            </tr>
                            <tr>
                                <td><span class="required">*</span> Mobile Number:</td>
                                <td><input type="text" class="large-field" value="" name="mobile_number"/></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><input type="text" class="large-field" value="" name="address"/></td>
                            </tr>
                            <tr>
                                <td><span class="required">*</span> City:</td>
                                <td><input type="text" class="large-field" value="" name="city"/></td>
                            </tr>
                            <tr>
                                <td><span class="required">*</span> Country:</td>
                                <td><select class="large-field" name="country">
                                        <option value=""> --- Please Select --- </option>
                                        <script type="text/javascript">
                                            printCountryOptions();
                                        </script>
                                </select></td>
                            </tr>
                            <tr>
                                <td><span class="required">*</span> Post Code:</td>
                                <td><input type="text" class="large-field" value="" name="zip_code"/></td>
                            </tr>
                            <tr>
                                <td><span class="required">*</span> </td>
                                <td><input type="submit" class="large-field" value="Register Customer" name="btn"/></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>