
<title>Build Your Profile | LinkedIn</title>
<link rel="shortcut icon" href="images/favicon.ico" />
<script type="text/javascript">

function func1(){
document.write("helloworld");
var s=document.getElementsByName(status-chooser);
var ee=document.getElementById("changerr");
if(s=="employed"){

ee.innerHtml='<li class="password-field">
									<label for="jobtitle-coldRegistrationForm">* Job Title:</label>
									<div class="fieldgroup">
										<span id="jobtitle-coldRegistrationForm-error" class="error"></span>
										<input id="jobtitle-coldRegistrationForm" type="text" value="" name="JobTitle" required/>
									</div>
									<p class="note"><label class="labelradio" style="font-size: 11px;"  for="self-employed"><input style="margin-right: 5px;" id="self-employed" type="checkbox" value="I am self-employed" />I am self-employed</label></p>
								</li>
								<li class="password-field">
									<label for="company-coldRegistrationForm">* Company:</label>
									<div class="fieldgroup">
										<span id="company-coldRegistrationForm-error" class="error"></span>
										<input id="company-coldRegistrationForm" type="text" value="" name="company" />
									</div>
								</li>';





}
else if (s=="Job_Seeker"){
ee.innerHtml='<li class="password-field">
									<label for="jobtitle-coldRegistrationForm">* Most recent job title:</label>
									<div class="fieldgroup">
										<span id="jobtitle-coldRegistrationForm-error" class="error"></span>
										<input id="jobtitle-coldRegistrationForm" type="text" value="" name="JobTitle" required/>
									</div>
									<p class="note"><label class="labelradio" style="font-size: 11px;"  for="self-employed"><input style="margin-right: 5px;" id="self-employed" type="checkbox" value="I am self-employed" />I am self-employed</label></p>
								</li>
								<li class="password-field">
									<label for="jobtitle-coldRegistrationForm">* Most recent company:</label>
									<div class="fieldgroup">
										<span id="jobtitle-coldRegistrationForm-error" class="error"></span>
										<input id="jobtitle-coldRegistrationForm" type="text" value="" name="JobTitle" required/>
									</div>
								
								</li>
								<li class="password-field">
									<label for="company-coldRegistrationForm">* Company:</label>
									<div class="fieldgroup">
										<span id="company-coldRegistrationForm-error" class="error"></span>
										<input id="company-coldRegistrationForm" type="text" value="" name="company" />
									</div>
								</li>';


}
else if(s=="Student"){




}


}




</script>


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
					<h1 class="mainh1"><strong>FirstName</strong>, let's start creating your professional profile</h1>			
				</div>
				<div id="content">
				 
					<div class="register-container">
						<form id="yui-gen2" class="standard-form sided extrainput" action="<?php echo base_url('index.php/signup/signup/imagePage');?>">
							<ul>
								<li class="name">
									<label for="country-coldRegistrationForm">* Country:</label>
									<div class="fieldgroup">
										<span id="country-coldRegistrationForm-error" class="error"></span>
										<select class="country-select" id="country-coldRegistrationForm" name="countryCode">
											<option value="us">United States</option>
											<option value="af">Afghanistan</option>
											<option value="ax">Aland Islands</option>
											<option value="al">Albania</option>
											<option value="dz">Algeria</option>
											<option value="as">American Samoa</option>
											<option value="ad">Andorra</option>
											<option value="ao">Angola</option>
											<option value="ai">Anguilla</option>
											<option value="aq">Antarctica</option>
											<option value="ag">Antigua and Barbuda</option>
											<option value="ar">Argentina</option>
											<option value="am">Armenia</option>
											<option value="aw">Aruba</option>
											<option value="au">Australia</option>
											<option value="at">Austria</option>
											<option value="az">Azerbaijan</option>
											<option value="bs">Bahamas</option>
											<option value="bh">Bahrain</option>
											<option value="bd">Bangladesh</option>
											<option value="bb">Barbados</option>
											<option value="by">Belarus</option>
											<option value="be">Belgium</option>
											<option value="bz">Belize</option>
											<option value="bj">Benin</option>
											<option value="bm">Bermuda</option>
											<option value="bt">Bhutan</option>
											<option value="bo">Bolivia</option>
											<option value="ba">Bosnia and Herzegovina</option>
											<option value="bw">Botswana</option>
											<option value="br">Brazil</option>
											<option value="io">British Indian Ocean Territory</option>
											<option value="bn">Brunei Darussalam</option>
											<option value="bg">Bulgaria</option>
											<option value="bf">Burkina Faso</option>
											<option value="bi">Burundi</option>
											<option value="kh">Cambodia</option>
											<option value="cm">Cameroon</option>
											<option value="ca">Canada</option>
											<option value="cv">Cape Verde</option>
											<option value="cb">Caribbean Nations</option>
											<option value="ky">Cayman Islands</option>
											<option value="cf">Central African Republic</option>
											<option value="td">Chad</option>
											<option value="cl">Chile</option>
											<option value="cn">China</option>
											<option value="cx">Christmas Island</option>
											<option value="cc">Cocos (Keeling) Islands</option>
											<option value="co">Colombia</option>
											<option value="km">Comoros</option>
											<option value="cg">Congo</option>
											<option value="ck">Cook Islands</option>
											<option value="cr">Costa Rica</option>
											<option value="ci">Cote D'Ivoire (Ivory Coast)</option>
											<option value="hr">Croatia</option>
											<option value="cu">Cuba</option>
											<option value="cy">Cyprus</option>
											<option value="cz">Czech Republic</option>
											<option value="cd">Democratic Republic of the Congo</option>
											<option value="dk">Denmark</option>
											<option value="dj">Djibouti</option>
											<option value="dm">Dominica</option>
											<option value="do">Dominican Republic</option>
											<option value="tp">East Timor</option>
											<option value="ec">Ecuador</option>
											<option value="eg">Egypt</option>
											<option value="sv">El Salvador</option>
											<option value="gq">Equatorial Guinea</option>
											<option value="er">Eritrea</option>
											<option value="ee">Estonia</option>
											<option value="et">Ethiopia</option>
											<option value="fk">Falkland Islands (Malvinas)</option>
											<option value="fo">Faroe Islands</option>
											<option value="fm">Federated States of Micronesia</option>
											<option value="fj">Fiji</option>
											<option value="fi">Finland</option>
											<option value="fr">France</option>
											<option value="gf">French Guiana</option>
											<option value="pf">French Polynesia</option>
											<option value="tf">French Southern Territories</option>
											<option value="ga">Gabon</option>
											<option value="gm">Gambia</option>
											<option value="ge">Georgia</option>
											<option value="de">Germany</option>
											<option value="gh">Ghana</option>
											<option value="gi">Gibraltar</option>
											<option value="gr">Greece</option>
											<option value="gl">Greenland</option>
											<option value="gd">Grenada</option>
											<option value="gp">Guadeloupe</option>
											<option value="gu">Guam</option>
											<option value="gt">Guatemala</option>
											<option value="gg">Guernsey</option>
											<option value="gn">Guinea</option>
											<option value="gw">Guinea-Bissau</option>
											<option value="gy">Guyana</option>
											<option value="ht">Haiti</option>
											<option value="hn">Honduras</option>
											<option value="hk">Hong Kong</option>
											<option value="hu">Hungary</option>
											<option value="is">Iceland</option>
											<option value="in">India</option>
											<option value="id">Indonesia</option>
											<option value="ir">Iran</option>
											<option value="iq">Iraq</option>
											<option value="ie">Ireland</option>
											<option value="my">Malaysia</option>
											<option selected="" value="pk">Pakistan</option>
											<option value="ru">Russian Federation</option>
											<option value="sg">Singapore</option>
											<option value="sk">Slovak Republic</option>
											<option value="si">Slovenia</option>
											<option value="sb">Solomon Islands</option>
											<option value="so">Somalia</option>
											<option value="za">South Africa</option>
											<option value="es">Spain</option>
											<option value="lk">Sri Lanka</option>
											<option value="sd">Sudan</option>
											<option value="sr">Suriname</option>
											<option value="ch">Switzerland</option>
											<option value="sy">Syria</option>
											<option value="tw">Taiwan</option>
											<option value="th">Thailand</option>
											<option value="ua">Ukraine</option>
											<option value="ae">United Arab Emirates</option>
											<option value="gb">United Kingdom</option>
											<option value="uy">Uruguay</option>
											<option value="uz">Uzbekistan</option>
											<option value="vu">Vanuatu</option>
											<option value="va">Vatican City State (Holy See)</option>
											<option value="ve">Venezuela</option>
											<option value="oo">Other</option>
										</select>
									</div>
								</li>
								<li class="name">
									<label for="postalcode-coldRegistrationForm">Postal Code:</label>
									<div class="fieldgroup">
										<span id="postalcode-coldRegistrationForm-error" class="error"></span>
										<input id="postalcode-coldRegistrationForm" type="text" maxlength="40" value="" name="postalCode" required/>
									</div>
								</li>
								<li>
									<label for="currentjob-coldRegistrationForm">I am currently:</label>
									<div class="fieldgroup">
										<span id="currentjob-coldRegistrationForm-error" class="error"></span>
										<label class="labelradio" for="employed-btn"><input onchange="func1();" type="radio" id="employed-btn" value="employed" name="status-chooser" checked="checked" defaultchecked="true" />Employed</label>
										<label class="labelradio" for="looking-btn"><input onchange="func1();" type="radio" id="looking-btn" value="Job_Seeker" name="status-chooser" />Job Seeker</label>
										<label class="labelradio" for="student-btn"><input onchange="func1();" type="radio" id="student-btn" value="Student" name="status-chooser" />Student</label>										
									</div>
								</li>
								<div id="changerr">
								<li class="password-field">
									<label for="jobtitle-coldRegistrationForm">* Job Title:</label>
									<div class="fieldgroup">
										<span id="jobtitle-coldRegistrationForm-error" class="error"></span>
										<input id="jobtitle-coldRegistrationForm" type="text" value="" name="JobTitle" required/>
									</div>
									<p class="note"><label class="labelradio" style="font-size: 11px;"  for="self-employed"><input style="margin-right: 5px;" id="self-employed" type="checkbox" value="I am self-employed" />I am self-employed</label></p>
								</li>
								<li class="password-field">
									<label for="company-coldRegistrationForm">* Company:</label>
									<div class="fieldgroup">
										<span id="company-coldRegistrationForm-error" class="error"></span>
										<input id="company-coldRegistrationForm" type="text" value="" name="company" />
									</div>
								</li>
							</div>
							</ul>
							<p class="actions">
								<a href="<?php echo base_url('index.php/signup/signup/process3');?>"><button id="btn-submit" class="btn-tertiary" >
									<div>Create my profile</div>
								</button></a>							
							</p>
							<p style="font-size:11px; margin-top: 30px;">
								* Indicates required field.
							</p>
						</form>
					</div>
					
					<div id="motivation" class="motivation">
						<div class="profile-features">
						<h3>A LinkedIn profile helps you...</h3>
						<ul>
							<li class="first">Showcase your skills and experience</li>
							<li>Be found for new opportunities</li>
							<li>Stay in touch with colleagues and friends</li>
						</ul>
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
