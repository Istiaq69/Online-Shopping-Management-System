<!DOCTYPE html>
<html>
    <head>
        <title>Website Payment Standard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript">
            function payment_submit(){
              //  var actionName="https://www.paypal.com/cgi-bin/webscr";  //real-time account
                var actionName="https://www.sandbox.paypal.com/cgi-bin/webscr";  //test account
                
                document.forms.frmOrderAutoSubmit.action(actionName);
                document.forms.frmOrderAutoSubmit.submit();
            }
        </script>
    </head>
    <body onload="payment_submit()" >
        <form style="padding: 0px; margin: 0px;" name="frmOrderAutoSubmit" method="post">
            <input type="hidden" name="upload" value="1">
            <input type="hidden" name="cmd" value="_xclick">
            <input type="hidden" name="business" value="istiaq.tushar10@gmail.com">
            
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="item_name" value="">
            <input type="hidden" name="amount" value="3">
            <!-- Enable override of buyers's address stored with PayPal . -->
            <input type="hidden" name="rm" value="2">
            <input type="hidden" name="address_override" value="0">
            
             <input type="hidden" name="address1" value="">
             <input type="hidden" name="address2" value="">
             <input type="hidden" name="city" value="">
             <input type="hidden" name="state" value="">
             <input type="hidden" name="zip" value="">     

<!--                 <input type="hidden" name="country" value="US">
                 <input type="image" name="submit"
                        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                        alt="PayPal - The safer, easier way to pay online">-->
        </form>
    </body>
</html>

