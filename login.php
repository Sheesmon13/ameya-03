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
                    <h1>Login/Register</h1>
                </div>
                <div class="breadcrumb">
                    <a href="#">Home</a><p>&nbsp-&nbsp</p>
                    <span class="current">Login/Register</span>

                </div>
            </div>
           
        </section>
        <!--End Breadcrumb Section -->

      

        <section class="login-section"> 
        	<div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 col-12 mx-auto ">
                    <div class="login-register">
                        <div class="login-register-tab nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>login</h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4>register</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <input type="text" name="user-name" placeholder="Username" />
                                            <input type="password" name="user-password" placeholder="Password" />
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" />
                                                    <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <button type="submit"><span>Login</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <input type="text" name="user-name" placeholder="Username" />
                                            <input type="password" name="user-password" placeholder="Password" />
                                            <input name="user-email" placeholder="Email" type="email" />
                                            <div class="button-box">
                                                <button type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        	
        </section>


        <!-- Login Section -->

       
        <!--End Login Section -->
       <?php include_once('includes/footer.php') ?>

	<?php include_once('includes/scripts.php') ?>
</body>
</html>