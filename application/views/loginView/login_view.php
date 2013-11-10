<div class="container-fluid">
	<!-- <div id="login_form">
		<form action="<?php echo base_url();?>index.php/login/login/process" method="post" name="process" class="form-horizontal">
			<h2>User Login</h2>
			<br />
			<?php if(! is_null($msg)) echo $msg;?>			
			<div class="control-group">
		    <label class="control-label" for="inputEmail">Email</label>
			    <div class="controls">
					<input type="text" name='username' id='username' size="25" placeholder="Email"/><br />
				</div>
	  		</div>
			<div class="control-group">
			    <label class="control-label" for="inputPassword">Password</label>
			    <div class="controls">
					<input type="password" name="password" id='password' size="25" placeholder="Password"/><br />							
				</div>
			</div>
			<div class="control-group">
		    <div class="controls">
		      <button type="submit" class="btn">Sign in</button>
		    </div>
		  </div>			
		</form>
	</div> -->
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="login-form">
					<h2>Login</h2>
					<?php if(! is_null($msg)) echo $msg;?>
					<form action="<?php echo base_url();?>index.php/login/login/process" method="post" name="process">
						<fieldset>
							<div class="clearfix">
								<input type="text" name='username' id='username' placeholder="Username">
							</div>
							<div class="clearfix">
								<input type="password" name="password" id='password' placeholder="Password">
							</div>
							<button class="btn btn-primary" type="submit">Sign in</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
