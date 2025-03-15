<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>AMEYA-DESIGNS</title>
	<?php include_once('includes/links.php') ?>
</head>
<body>

<?php include_once("includes/header.php") ?>

		<!-- Breadcrumb Section -->
        <section class="breadcrumb-section bg-image product-bg">
           
            <div class="container breadcrumb-container">
                <div class="breadcrumb-area">
                    <h1>Checkout</h1>
                </div>
                <div class="breadcrumb">
                    <a href="#">Home</a><p>&nbsp-&nbsp</p>
                    <span class="current">Checkout</span>

                </div>
            </div>
           
        </section>
        <!--End Breadcrumb Section -->

       

        <!-- Checkout Section -->

        <section class="checkout-section">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
        				<form action="#" class="checkout-form">
                            <div class="row">

                                <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                                	<div class="billing-form mb-10" >
                                		<h3 class="checkout-title">Billing Address</h3>
                                		<div class="row">

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">First Name*</label>
                                                <input type="text" placeholder="First Name" class="check-input">
                                            </div>
                                             <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Last Name*</label>
                                                <input type="text" placeholder="Last Name" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Email Address*</label>
                                                <input type="email" placeholder="Email Address" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Phone no*</label>
                                                <input type="text" placeholder="Phone number" class="check-input">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label class="check-label">Company Name</label>
                                                <input type="text" placeholder="Company Name" class="check-input">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label class="check-label">Address*</label>
                                                <input type="text" placeholder="Address line 1" class="check-input">
                                                <input type="text" placeholder="Address line 2" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Country*</label>
                                                <select class="nice-select">
                                                    <option>Bangladesh</option>
                                                    <option>China</option>
                                                    <option>country</option>
                                                    <option>India</option>
                                                    <option>Japan</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Town/City*</label>
                                                <input type="text" placeholder="Town/City" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">State*</label>
                                                <input type="text" placeholder="State" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Zip Code*</label>
                                                <input type="text" placeholder="Zip Code" class="check-input">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <div class="check-box">
                                                    <input type="checkbox" id="create_account" class="check-input">
                                                    <label for="create_account">Create an Acount?</label>
                                                </div>
                                                <div class="check-box">
                                                    <input type="checkbox" id="shiping_address" data-shipping>
                                                    <label for="shiping_address">Ship to Different Address</label>
                                                </div>
                                            </div>

                                            
                                        </div>
                                		
                                	</div>

                                	 <!-- Shipping Address -->
                                    <div id="shipping-form">
                                        <h4 class="checkout-title">Shipping Address</h4>

                                        <div class="row">

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">First Name*</label>
                                                <input type="text" placeholder="First Name" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Last Name*</label>
                                                <input type="text" placeholder="Last Name" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Email Address*</label>
                                                <input type="email" placeholder="Email Address" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Phone no*</label>
                                                <input type="text" placeholder="Phone number"class="check-input">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label class="check-label">Company Name</label>
                                                <input type="text" placeholder="Company Name"class="check-input">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label class="check-label">Address*</label>
                                                <input type="text" placeholder="Address line 1" class="check-input">
                                                <input type="text" placeholder="Address line 2" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Country*</label>
                                                <select class="nice-select">
                                                    <option>Bangladesh</option>
                                                    <option>China</option>
                                                    <option>country</option>
                                                    <option>India</option>
                                                    <option>Japan</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Town/City*</label>
                                                <input type="text" placeholder="Town/City" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">State*</label>
                                                <input type="text" placeholder="State" class="check-input">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label class="check-label">Zip Code*</label>
                                                <input type="text" placeholder="Zip Code" class="check-input">
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                                	<div class="cart-form mb-10" >
                                		<h3 class="checkout-title">Cart Total</h3>
                                		<div class="checkout-cart-total">

                                            <h4>Product <span>Total</span></h4>

                                            <ul class="mb-50">
                                                <li>Poly Silk Churidar<span>Rs.699.00</span></li>
                                                <li>Bridal Lehenga Set <span>Rs.1699.00</span></li>
                                                
                                            </ul>

                                            <p>Sub Total <span>Rs.2398.00</span></p>
                                            <p>Shipping Fee <span>0</span></p>

                                            <h4>Grand Total <span>Rs.2398.00</span></h4>

                                        </div>
                                	</div>

                                    <div class="cart-form mt-50" >
                                        <h3 class="checkout-title">Payment Method</h3>
                                        <div class="checkout-payment-method">

                                            <div class="check-box">
                                                <input type="checkbox" id="payment_check" name="payment-method" value="check" class="check-input">
                                                <label for="payment_check">Check Payment</label>
                                               
                                            </div>

                                            <div class="check-box">
                                                <input type="checkbox" id="payment_bank" name="payment-method" value="bank" class="check-input">
                                                <label for="payment_bank">Direct Bank Transfer</label>
                                               
                                            </div>

                                            <div class="check-box">
                                                <input type="checkbox" id="payment_cash" name="payment-method" value="cash" class="check-input">
                                                <label for="payment_cash">Cash on Delivery</label>
                                               
                                            </div>

                                            <div class="check-box">
                                                <input type="checkbox" id="payment_paypal" name="payment-method" value="paypal" class="check-input">
                                                <label for="payment_paypal">Paypal</label>
                                                
                                            </div>

                                            

                                        </div>
                                        <button class="place-order btn btn-lg ">Place Order</button>
                                    </div>

                                </div>


                            </div>
                        </form>
        				
        			</div>
        			
        		</div>
        		
        	</div>
        	
        </section>

        
        <!--End Checkout Section -->
    <?php include_once('includes/footer.php') ?>

	<?php include_once('includes/scripts.php') ?>
</body>
</html>