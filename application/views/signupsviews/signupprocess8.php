<title>Connect | LinkedIn</title>
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
					<h1 class="mainh1">Connect with people you know on LinkedIn</h1>
					<p class="progress">
						<span class="summary">Step <strong>2</strong> of <strong>8</strong></span>
						<span class="progress-meter" title="25% Complete">
						<span class="has-progress" style="width:25%"></span>
						</span>
					</p>			
				</div>
				<h2 style="font-weight: normal; font-size: 13px; margin: 0; margin-bottom: 1em;">We found 3 people you know on LinkedIn. Select the people you'd like to connect to.</h2>
				<form>
					<div class="connection-header">
						<p class="selectall">
							<input id="select-all-pymk" type="checkbox" checked="" value="all" />
							<label for="select-all-pymk">Select All</label>
						</p>
						<p class="number-selected">
							3 Selected
						</p>
					</div>
					<div class="connection-body">
						<div class="connection-grid">
							<div class="row">
								<div class="person">
									<input id="1-aBookContactGroup-aBookConnectForm" type="checkbox" checked="" value="1" name="aBookContactGroup" />
									<img width="50" height="50" alt="Person" src="http://s.c.lnkd.licdn.com/scds/common/u/images/themes/katy/ghosts/person/ghost_person_60x60_v1.png" />
									<div class="connection-details">
										<h3>
											Full Name
										</h3>
										<p class="title">Job of the person</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>	
				<a 	href="<?php echo base_url('index.php/signup/signup/process6');?>"><button>Add Connection(s)</button></a>
				or <a 	href="<?php echo base_url('index.php/signup/signup/process6');?>">Skip this step</a>			
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
