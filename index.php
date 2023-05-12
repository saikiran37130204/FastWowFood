<!DOCTYPE html>

<html style="height: 100%">

<head>

	<title>Login Signup</title>

	<meta charset="utf-8">

	<link rel="icon" type="image/x-icon" href="assets/favicon.ico">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- css -->

	<link rel="stylesheet" type="text/css" href="assets/mi_css_global.css">

	<!-- js -->

	<script src="assets/jquery-3.6.0.js"></script>

	<script src="assets/globaljavascript.js"></script>

	<!-- icons -->

	<link rel="stylesheet" type="text/css" href="assets/icons/css/all.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/brands.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/brands.min.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/fontawesome.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/fontawesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/regular.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/regular.min.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/solid.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/solid.min.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/svg-with-js.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/svg-with-js.min.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/v4-font-face.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/v4-font-face.min.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/v4-shims.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/v4-shims.min.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/v5-font-face.css">

	<link rel="stylesheet" type="text/css" href="assets/icons/css/v5-font-face.min.css">


</head>

<body style="background-color: #e0f0e3;">
	
	<div class="container" id="flex_container">
		
		<div class="container" id="login_container">
			
			<div class="container_8">
				
				<p class="form_headers">Login</p>

				<p class="response_headers" id="loginresponse"></p>

				<p class="label_headers">Email Address</p>

				<input type="email" class="input_fields" id="loginaddress">

				<p class="label_headers">Passcode</p>

				<input type="password" class="input_fields" id="loginpasscode">

				<button type="button" class="form_buttons" id="loginbtn"><i class="fa-sharp fa-light fa-right-to-bracket fa-beat-fade"></i>Login</button>

				<p class="normal_headers" id="alternate_headers" onclick=" $('#login_container').hide(); $('#signup_container').show(); ">Or Signup <span style="color: blue;text-decoration-line: underline;">Here</span></p>

			</div>

		</div>


		<div class="container" id="signup_container" style="display: none;">
			
			<div class="container_8">
				
				<p class="form_headers">Signup</p>

				<p class="response_headers" id="signupresponse"></p>

				<p class="label_headers">Full Name</p>

				<input type="email" class="input_fields" id="fullname">

				<p class="label_headers">Email Address</p>

				<input type="email" class="input_fields" id="emailaddress">

				<p class="label_headers">Secure Passcode</p>

				<input type="password" class="input_fields" id="passcode">

				<p class="label_headers">Confirm Passcode</p>

				<input type="password" class="input_fields" id="confirmpasscode">

				<button type="button" class="form_buttons" id="signupbtn"><i class="fa-sharp fa-light fa-user-plus fa-beat-fade"></i>Signup</button>

				<p class="normal_headers" id="alternate_headers" onclick=" $('#signup_container').hide(); $('#login_container').show(); ">Or Login <span style="color: blue;text-decoration-line: underline;">Here</span></p>

			</div>

		</div>

	</div>

	<script>
		
		$(document).ready(function()
		{
			$("#loginbtn").click(function()
			{

				var loginaddress	= $("#loginaddress").val();
				var loginpasscode	= $("#loginpasscode").val();

				$.post("compute/login.php",
				{
					loginaddress:loginaddress,
					loginpasscode:loginpasscode

				}, function(data)
				{

					$("#loginresponse").html(data)
				})

			})

			//

			//

			$("#signupbtn").click(function()
			{

				var fullname		= $("#fullname").val();
				var emailaddress	= $("#emailaddress").val();
				var passcode		= $("#passcode").val();
				var confirmpasscode	= $("#confirmpasscode").val();

				//

				$.post("compute/index.php",
				{
					fullname:fullname,
					emailaddress:emailaddress,
					passcode:passcode,
					confirmpasscode:confirmpasscode

				}, function(data)
				{

					$("#signupresponse").html(data)
				})

			})
		})

	</script>

</body>
</html>