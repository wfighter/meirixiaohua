<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-09 15:53:33 CST */ ?>

<div class="leftwrapper">
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_login_top"), $this);?>

<div data-role="collapsible">
<h3><?php echo $this->_confs['PLIGG_Visual_Login_Login']; ?>
</h3>
<form id="thisform" method="post">
	<div>
	<?php echo $this->_confs['PLIGG_Visual_Login_Have_Account']; ?>

	</div>
	<form action="<?php echo $this->_vars['URL_login']; ?>
" method="post">	
		<div data-role="fieldcontain">
			<label for="username"><strong><?php echo $this->_confs['PLIGG_Visual_Login_Username']; ?>
:</strong><br /></label>		
			<input type="text" name="username" id="username" value="<?php if (isset ( $this->_vars['login_username'] )):  echo $this->_vars['login_username'];  endif; ?>" tabindex="10" />
		</div>
		<div data-role="fieldcontain">
			<label for="password"><strong><?php echo $this->_confs['PLIGG_Visual_Login_Password']; ?>
:</strong></label>				
			<input type="password" name="password" id="password" tabindex="11" />
		</div>
		<input type="hidden" name="processlogin" value="1"/>
		<input type="hidden" name="return" value="<?php echo $this->_vars['get']['return']; ?>
"/>
		<div data-role="fieldcontain">
			<input type="checkbox" name="persistent" id="persistent" tabindex="12" /> <label for="persistent"><?php echo $this->_confs['PLIGG_Visual_Login_Remember']; ?>
</label>
			<input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Login_LoginButton']; ?>
" tabindex="13" />
		</div>
	</form>
</form>
</div>

<div data-role="collapsible">
<h3><?php echo $this->_confs['PLIGG_Visual_Login_ForgottenPassword']; ?>
</h3>
<form action="<?php echo $this->_vars['URL_login']; ?>
" id="thisform2" method="post">
		<?php echo $this->_confs['PLIGG_Visual_Login_EmailChangePass']; ?>

		<div data-role="fieldcontain">
			<label for="email"><strong><?php echo $this->_confs['PLIGG_Visual_Register_Email']; ?>
:</strong></label>			
			<input type="email" id="email" name="email" size="25" tabindex="14" id="forgot-email" value="" />
			<input type="submit" value="Submit" tabindex="15" />
		</div>		
		<input type="hidden" name="processlogin" value="3"/>
		<input type="hidden" name="return" value="<?php echo $this->_vars['get']['return']; ?>
"/>
</form>

</div>

<div data-role="collapsible">
<h3><?php echo $this->_confs['PLIGG_Visual_Login_NewUsers']; ?>
</h3>
	<?php echo $this->_confs['PLIGG_Visual_Login_NewUsersA']; ?>
<a href="<?php echo $this->_vars['register_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Login_NewUsersB']; ?>
</a><?php echo $this->_confs['PLIGG_Visual_Login_NewUsersC']; ?>

</div>

	<?php if ($this->_vars['errorMsg'] != ""): ?>
		<div class="errordiv"><?php echo $this->_vars['errorMsg']; ?>
</div>
	<?php endif; ?> 
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_login_bottom"), $this);?>
</div>