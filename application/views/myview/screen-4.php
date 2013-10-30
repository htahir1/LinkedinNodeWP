
<title>Browse Members by Country | LinkedIn</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body id="join">
	<div class="top-menu">
		<div class="wrapper">
			<a href="default_page.html" class="logo-black">LinkedIn</a>
			<div class="top-menu-right-link">Already on LinkedIn? <a href="<?php echo base_url('index.php/login/login/doLogin');?>">Sign in</a></div>
		</div>
	</div>
	<div class="wrapper">
		<div id="body-area" class="lessmargin">
			<div class="main-body-white">
				<div class="introduction">
					<h1> To join LinkedIn, sign up below...it's free! </h1>
				</div>
				<div id="content">
					<div class="register-container">
						<form id="yui-gen2" class="standard-form sided" action="<?php echo base_url('index.php/signup/signup/signuping');?>"  onsubmit="return validateForm()" method="post">
							<ul>
								<li class="name">
									<label for="firstName-coldRegistrationForm">First Name:</label>
									<div class="fieldgroup">
										<span id="firstName-coldRegistrationForm-error" class="error"></span>
										<input id="firstName-coldRegistrationForm" type="text" maxlength="20" value="" name="firstName" />
									</div>
								</li>
								<li class="name">
									<label for="lastName-coldRegistrationForm">Last Name:</label>
									<div class="fieldgroup">
										<span id="lastName-coldRegistrationForm-error" class="error"></span>
										<input id="lastName-coldRegistrationForm" type="text" maxlength="40" value="" name="lastName" />
									</div>
								</li>
								<li>
									<label for="email-coldRegistrationForm">Email:</label>
									<div class="fieldgroup">
										<span id="email-coldRegistrationForm-error" class="error"></span>
										<input id="email-coldRegistrationForm" type="email" data-ime-mode-disabled="" maxlength="128" value="" name="email" />
									</div>
								</li>
								<li class="password-field">
									<label for="password-coldRegistrationForm">New Password:</label>
									<div class="fieldgroup">
										<span id="password-coldRegistrationForm-error" class="error"></span>
										<input id="password-coldRegistrationForm" type="password" value="" name="password" />
									</div>
									<p class="note">6 or more characters</p>
								</li>
							</ul>
							<p class="actions">
								<button id="btn-submit" class="btn-tertiary" type="submit">
									<div>Join LinkedIn</div>
								</button>							
							</p>
							<p id="register-custom-nav" class="key">
								Already on LinkedIn? <a href="https://www.linkedin.com/uas/login">Sign in</a>
							</p>
						</form>
					</div>
					<div id="extra">
						<div class="sign-in-with">
							<p class="handwritten">Save time by using your Facebook account to sign up for LinkedIn.</p>
							<p><a href="default_page.html" class="fb_button"><span class="fb_button_text">Sign up with Facebook</span></a></p>
						</div>
					</div>
				</div>
				<p id="agreement">
				 * By joining LinkedIn, you agree to LinkedIn's <a href="default_page.html" target="_blank">User Agreement</a>, <a href="default_page.html" target="_blank">Privacy Policy</a> and <a href="default_page.html" target="_blank">Cookie Policy</a>
				</p>			
			</div>
		
		</div> <!-- END: BODY-AREA -->	
	</div> <!-- END: WRAPPER -->	
		
	<div class="footer noborder">
		<div class="wrapper">
		<div id="legal">
			<p id="copyright">LinkedIn Corporation &copy; 2013</p>
			<p id="terms-of-use">Commercial use of this site without express authorization is prohibited.  </p>
		</div>
		</div>
	</div> <!-- END: FOOTER -->
</body>
<script type="text/javascript">

function validateForm()
{
var theemail=document.forms["yui-gen2"]["email-coldRegistrationForm"].value;
var thepass=document.forms["yui-gen2"]["password-coldRegistrationForm"].value; 
var thefname=document.forms["yui-gen2"]["firstName-coldRegistrationForm"].value;
var thelname=document.forms["yui-gen2"]["lastName-coldRegistrationForm"].value;
var fnameerror = document.getElementById('firstName-coldRegistrationForm-error')
var lnameerror = document.getElementById('lastName-coldRegistrationForm-error')
var passworderror = document.getElementById('password-coldRegistrationForm-error')
var emailerror = document.getElementById('email-coldRegistrationForm-error')



	if(thefname == "" || thefname == null)
	{
		fnameerror.innerHTML = 'First name cannot be empty'
		return false;
	}
	else
		fnameerror.innerHTML = ''
	if(thelname == "" || thelname == null)
	{
		lnameerror.innerHTML = 'Last name cannot be empty'
		return false;
	}
	else
		lnameerror.innerHTML = ''
	if(theemail == "" || theemail == null || theemail.length <= 3)
	{
		emailerror.innerHTML = 'The text you provided is too short.'
		return false;
	}
	else
		emailerror.innerHTML = ''
	if(thepass.length < 6 || thepass == null || thepass == '')
	{
		passworderror.innerHTML = 'The password you provided must have at least 6 characters.'
		return false;

	}	
	else
		passworderror.innerHTML = ''
}

</script>
</html>
