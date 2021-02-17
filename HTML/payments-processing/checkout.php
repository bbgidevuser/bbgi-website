<?php?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="subject">Checkout Check<br>Checkout </br> Check</div>

        <div class="checkout">
            <div class="order">
                <h2>Checkout Demo</h2>
                <h5>Order #000001</h5>
                <ul class="order-list">
                    <li><h4>Product 1</h4><h5>R1100</h5></li>
                    <li><h4>Product 2</h4><h5>R280</h5></li>
                    <li><h4>Product 3</h4><h5>R200</h5></li>
                </ul>
                <h5>Shipping</h5><h4>R90.00</h4>
                <h5 class="total">Total</h5><h1>R1670.00</h1>


                <form action="https://sandbox.payfast.co.za​/eng/process" method="post">
                    <input type="hidden" name="merchant_id" value="10000100">
                    <input type="hidden" name="merchant_key" value="46f0cd694581a">
                    <input type="hidden" name="return_url" value="https://www.example.com/success">
                    <input type="hidden" name="cancel_url" value="https://www.example.com/cancel">
                    <input type="hidden" name="notify_url" value="https://www.example.com/notify">

                    <input type="hidden" name="amount" value="1670.00">
                    <input type="hidden" name="item_name" value="#000001">
                    <input type="submit" class="button-cta" value="Process Payment">
                </form>

            </div>
        </div>
    </body>
</html>

