<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>New Service</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="add-service/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
</head>
<!--========== PARALLAX ==========-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="add-service/images/1920x1080/24.jpg">
         <div class="parallax-content container">
                <h1 class="carousel-title">Add Service</h1>
                <!--<p>Lorem ipsum dolor amet consectetur adipiscing dolore magna aliqua <br/> enim minim estudiat veniam siad venumus dolore</p>-->
         </div>
     </div>
<!--========== PARALLAX ==========-->
<body>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="/email-add-service/send-email.php" method="POST">

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<label class="label-input100" for="name">Name</label>
					<input id="name" class="input100" type="text" name="name" placeholder="Enter your name...">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Surname is required">
                    <label class="label-input100" for="surname">Surname</label>
                    <input id="surname" class="input100" type="text" name="surname" placeholder="Enter your surname...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Profession is required">
                    <label class="label-input100" for="profession">Profession</label>
                    <input id="profession" class="input100" type="text" name="profession" placeholder="Enter your profession...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Company is required">
                    <label class="label-input100" for="company">Company</label>
                    <input id="company" class="input100" type="text" name="company" placeholder="Enter your company...">
                    <span class="focus-input100"></span>
                </div>

                <!--<div class="wrap-input100 validate-input">
                    <label class="label-input100" for="register">Register on BBGI Supplier Database?</label>
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="register">Yes</label>
                <input id="register" class="input100" type="radio" name="register" placeholder="Register on BBGI Supplier Database...">

                <label class="label-input100" for="register">No</label>
                <input id="register" class="input100" type="radio" name="register" placeholder="Register on BBGI Supplier Database...">-->

                <!--<div class="wrap-input100 validate-input" data-validate = "Subscription">
                    <div class="col-sm-4">
                        <label class="label-input100" for="subscription">Register on BBGI Supplier Database?</label>
                    </div>
                    <div class="col-sm-4">
                        <input id="subscription" class="input100" type="checkbox" name="subscription" placeholder="Subscription...">
                    </div>
                    <span class="focus-input100"></span>
                </div>-->

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label class="label-input100" for="email">Email Address</label>
					<input id="email" class="input100" type="email" name="email" placeholder="Enter your email...">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate = "Contact number is required">
                    <label class="label-input100" for="email">Contact Number</label>
                    <input id="email" class="input100" type="text" name="phone" placeholder="Enter your contact number...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Services / Products</div>
                    <input id="service_product" class="input100" type="text" name="service_product" placeholder="Enter service or product...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Service Description">
                    <label class="label-input100" for="description">Brief Description</label>
                    <textarea id="description" class="input100" name="description" placeholder="Type your description here..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Industry</div>
                    <input id="industry" class="input100" type="text" name="industry" placeholder="Enter industry...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <div class="label-input100">Legal Structure</div>
                    <input id="legal" class="input100" type="text" name="legal" placeholder="Enter legal structure...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-checkbox100 validate-input" data-validate = "Agree to terms">
                    <div class="col-sm-6">
                        <label class="label-input100" for="terms">Agree to terms</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="terms" class="input100" type="checkbox" name="terms" checked="checked" value="0" placeholder="Terms and conditions...">
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-checkbox100 validate-input" data-validate = "BBBEE">
                    <div class="col-sm-6">
                        <label class="label-input100" for="bbbee">BBBEE</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="bbbee" class="input100" type="checkbox" name="bbbee" checked="checked" value="0" placeholder="BBBEE...">
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-checkbox100 validate-input" data-validate = "Commission">
                    <div class="col-sm-6">
                        <label class="label-input100" for="commission">Commission</label>
                    </div>
                    <div class="col-sm-6">
                        <input id="commission" class="input100" type="checkbox" name="commission" checked="checked" value="1" placeholder="Commission...">
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-checkbox100 validate-input" data-validate = "Subscription">
                    <div class="col-sm-6">
                        <label class="label-input100" for="subscription">Subscription</label>
                    </div>
                    <div class="col-sm-6">
                        <!--<input id="subscription" class="input100" type="checkbox" name="subscription" checked="checked" value="1" placeholder="Subscription...">-->
                        <input id="subscription" class="input100" type="checkbox" name="subscription" placeholder="Subscription...">
                    </div>
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-checkbox100 validate-input" data-validate = "Rules">
                    <a href="">View rules & constitution</a>
                    <span class="focus-input100"></span>
                </div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Submit
					</button>
					<button class="contact100-form-btn">
                    	Cancel
                    </button>
				</div>

				<div class="contact100-form-social flex-c-m">
					<a href="#" class="contact100-form-social-item flex-c-m bg1 m-r-5">
						<i class="fa fa-facebook-f" aria-hidden="true"></i>
					</a>

					<a href="#" class="contact100-form-social-item flex-c-m bg2 m-r-5">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>

					<a href="#" class="contact100-form-social-item flex-c-m bg3">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</a>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<!--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
<!--===============================================================================================-->
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>

<!--===============================================================================================-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>

