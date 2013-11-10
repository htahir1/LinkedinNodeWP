

<body id="innermain">
	<div class="top">
	
		<div class="wrapper">
			<a class="logo">LinkedIn</a>
			<ul class="top-navigation">
			<li><a href="#">What is LinkedIn?</a></li>
			<li><a href="screen-4.php">Join Today</a></li>
			<li><a href="screen-5.php">Sign In</a></li>
			</ul>
		</div>
	</div>
	<div class="wrapper">
		<div id="body-area">
			<div id="page-title">
				<h1>Sign in to LinkedIn</h1>
			</div>
			<div class="signin">
				<form id="login" method="POST" action="<?php echo base_url();?>index.php/login/login/process">
					<ul>
						<li>
							<label for="session_key-login">Email address:</label>
							<div class="fieldgroup">
								<input id="session_key-login" type="text" data-ime-mode-disabled="" tabindex="1" value="" name="lEmail" />
							</div>
						</li>
						<li>
							<label for="session_password-login">Password:</label>
							<div class="fieldgroup">
								<input id="session_password-login" type="password" tabindex="2" value="" name="lPassword" />
								<a class="nav-link password-reminder-link" tracking="signin_fpwd" href="<?php echo base_url('forgotpassword.php/ForgetPassword/loadview');?>">Forgot password?</a>
								<?php if(! is_null($msg)) echo $msg;?>
							</div>
						</li>
						<li class="button">
							<input id="btn-primary" class="btn-primary" type="submit"  tabindex="3" value="Sign In" name="signin" />
							<span>
								or <a class="nav-link" tracking="signin_join" href="/reg/join">Join LinkedIn</a>
							</span>
						</li>
					</ul>
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
