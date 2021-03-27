<!DOCTYPE html>
<html lang="en">
<head>
	<title>Suppliers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
</head>
<body>

 <div id="supplier-signup">
	<div class="container-contact100">
	  <div class="wrap-contact100">
		<!--<form class="contact100-form validate-form" action="insert-suppliers.php" method="POST">-->
		<form class="contact100-form validate-form" action="/email-add-service/send-email-supplier.php" method="POST">
			<span class="contact100-form-title">
            	Sign up as a supplier
            </span>

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
            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            		<label class="label-input100" for="email">Email Address</label>
            		<input id="email" class="input100" type="text" name="email" placeholder="Enter your email...">
            		<span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Contact number is required">
                    <label class="label-input100" for="email">Contact Number</label>
                    <input id="email" class="input100" type="text" name="phone" placeholder="Enter your contact number...">
                    <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100">
                    <div class="label-input100">Services / Products</div>
                        <div>
                             <select class="js-select2" name="service">
                                 <option>Please choose</option>
                                     <option value="Software Development">Software Development</option>
                                     <option value="Interior Design">Interior Design</option>
                                     <option value="Property Development">Property Development</option>
                                     <option value="Business Coaching">Business Coaching</option>
                             </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                       <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Service Description">
                    <label class="label-input100" for="description">Brief Description</label>
                    <textarea id="description" class="input100" name="description" placeholder="Type your description here..."></textarea>
                    <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100">
                    <div class="label-input100">Industry</div>
                            <div>
                                 <select class="js-select2" name="industry">
                                    <option >Please choose</option>
                                       <option value="Information Technology">Information Technology</option>
                                       <option value="Engineering">Engineering</option>
                                       <option value="Accounting">Accounting</option>
                                       <option value="Internal Auditing">Internal Auditing</option>
                                 </select>
                            <div class="dropDownSelect2"></div>
                    </div>
                       <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100">
                    <div class="label-input100">Legal Structure</div>
                        <div>
                             <select class="js-select2" name="legal">
                                  <option>Please choose</option>
                                      <option value="Sole Proprietor">Sole Proprietor</option>
                                      <option value="Trust">Trust</option>
                                      <option value="Private Company">Private Company</option>
                                      <option value="Close Corporation">Close Corporation</option>
                             </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                       <span class="focus-input100"></span>
            </div>
            <div class="wrap-checkbox100 validate-input" data-validate = "Agree to terms">
                    <div class="col-sm-6">
                          <label class="label-input100" for="terms">Agree to terms</label>
                    </div>
                    <div class="col-sm-6">
                          <input type="checkbox" id="terms" class="input100" value="1" name="terms" onclick="terms_change(this)" />
                    </div>
                          <span class="focus-input100"></span>
            </div>
            <div class="wrap-checkbox100 validate-input" data-validate = "BBBEE">
                    <div class="col-sm-6">
                          <label class="label-input100" for="bbbee">BBBEE</label>
                    </div>
                    <div class="col-sm-6">
                          <input type="checkbox" id="bbbee" class="input100" value="1" name="bbbee" onclick="terms_change(this)" />
                    </div>
                          <span class="focus-input100"></span>
            </div>
            <div class="wrap-checkbox100 validate-input" data-validate = "Commission">
                    <div class="col-sm-6">
                          <label class="label-input100" for="commission">Commission</label>
                    </div>
                    <div class="col-sm-6">
                          <input type="checkbox" id="commission" class="input100" value="1" name="commission" onclick="terms_change(this)" />
                    </div>
                          <span class="focus-input100"></span>
            </div>
            <div class="wrap-checkbox100 validate-input" data-validate = "Subscription">
                    <div class="col-sm-6">
                           <label class="label-input100" for="subscription">Subscription</label>
                    </div>
                    <div class="col-sm-6">
                           <input type="checkbox" id="subscription" class="input100" value="1" name="subscription" onclick="terms_change(this)" />
                    </div>
                          <span class="focus-input100"></span>
            </div>
            <!--<div class="wrap-checkbox100 validate-input" data-validate = "Rules">-->
            <div data-validate = "Rules">
                    <a href="">View rules & constitution</a>
                    <span class="focus-input100"></span>
            </div>
            <div class="container-contact100-form-btn">
                        <!--<input type="hidden" Name="membership" Value="$_SESSION['membership']" >-->
                        <button form="individualPaymentForm" class="contact100-form-btn">
                            Member Payment
                        </button>
            </div>
            <div class="container-contact100-form-btn">
            	    <button class="contact100-form-btn">
            			Submit
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


			<div class="contact100-more flex-col-c-m" style="background-image: url('img/bg-01.jpg');">
			</div>
		</div>
	</div>
</div>

<!--===============================================================================================-->
	<!--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
<!--===============================================================================================-->
	<script>

        function terms_change(checkbox){
            //If it is checked.
            if(checkbox.checked){
                //alert('Checkbox has been ticked!');
            }
            //If it has been unchecked.
            else{
                //alert('Checkbox has been unticked!');
            }
        }

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

