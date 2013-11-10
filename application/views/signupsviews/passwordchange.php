

<title>Password Change | LinkedIn</title>
<link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body id="innermain" class="nobg">
	<div class="top">
	
		<div class="wrapper">
			<a class="logo">LinkedIn</a>
			<ul class="top-navigation">
			<li><a href="#">What is LinkedIn?</a></li>
			<li><a href="#">Join Today</a></li>
			<li><a href="#">Sign In</a></li>
			</ul>
		</div>
	</div>
	<div class="wrapper">
		<div id="body-area">
			<div class="request-password-reset">
				<form id="login" action="<?php echo base_url('index.php/forgotpass/forgotpass/doforget');?>" method="POST">
					<h1>Changing your password is simple</h1>
					<p><label for="email-requestPasswordReset">Please enter your email address to get instructions.</label></p>
					<div class="fieldgroup">
						<p><input id="email-requestPasswordReset" type="email" data-ime-mode-disabled="" autocapitalization="off" autocorrect="off" value="" name="email" /></p>
					</div>
					<p class="actions"><input id="request" class="btn-primary" type="submit" value="Continue" name="request" /></p>
				</form>
			</div>
		</div> <!-- END: BODY-AREA -->	
	</div> <!-- END: WRAPPER -->	
		
	<div class="footer">
		<ul class="footer-links">
			<li><img src="images/logo-footer.png" alt="Footer Logo" /><span style="font-size: 12px; left: 2px; line-height: 0; position: relative; top: -4px;">&copy; 2013</span></li>
			<li><a href="#">User Agreement </a></li>
			<li><a href="#">Privacy Policy </a></li>
			<li><a href="#">Community Guidelines </a></li>
			<li><a href="#">Cookie Policy </a></li>
			<li><a href="#">Copyright Policy </a></li>
		</ul>
	</div> <!-- END: FOOTER -->
</body>

</html>
