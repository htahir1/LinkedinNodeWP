<title>Upload Profile Picture | LinkedIn</title>
<link rel="shortcut icon" href="images/favicon.ico" />
</head>

<body id="join">
	<div class="top-menu">
		<div class="wrapper">
			<a class="logo-black">LinkedIn</a>
		</div>
	</div>
	<div class="wrapper">
		<div id="body-area" class="lessmargin">
			<div class="main-body-white signup">
				<div class="progress-container">
					<h1 class="mainh1">Upload your profile picture</h1>
					<p class="progress">
						<span class="summary">Step <strong>3</strong> of <strong>8</strong></span>
						<span class="progress-meter" title="37.5% Complete">
						<span class="has-progress" style="width:37.5%"></span>
						</span>
					</p>			
				</div>
				<div id="content">
				 
					<div class="register-container">
						<div class="import-abook-contacts">
							<div id="module-id2" class="leo-module mod-action abook-import">
								<div class="header">
									<h3></h3>
								</div>
								<div class="content">
									<p class="introduction"> Upload your picture for your profile using the form below. </p>
									<form id="address-book-import-form" class="standard-form sided noborder" method="POST" action="<?php echo base_url('index.php/signup/signup/processpp');?>" enctype="multipart/form-data">
										<fieldset class="authenticate">
											<ul>
												<li class="email-address">
													<label id="label-abook-imprt-email" for="email-nWMIForm">Your picture:</label>
													<div class="fieldgroup">
														<div class="form-row">
															<span class="system-error">
																<span id="email-nWMIForm-error" class="error"></span>
															</span>
															<input type="file" name="image" accept="image/*" />
															<!--<input id="email-nWMIForm"  type="file"  name="image"  accept="image/*" />
															--><span id="wmi_progress"></span>
															<span id="zeppelin-loading" role="presentation"></span>
														</div>
													</div>
												</li>
											</ul>
											
											<p class="add-connections">
												<span>
													<input id="resolve-btn" class="btn-primary" type="submit" value="Upload" name="" style="width: auto;" />
												</span>
											</p>
											<!-- <p class="note"> We will not store your password or email anyone without your permission. </p> -->
										</fieldset>
									</form>
								</div>						
							</div>
							<p class="skip">
								<a id="skipButton" href="javascript:void(0)"> Skip this step </a>»
							</p>								
							
						</div>
					</div>
					
				</div>
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

</html>
