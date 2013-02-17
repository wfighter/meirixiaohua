<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-12-18 12:12:22 CST */ ?>

  <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_register_start"), $this);?>
<div class="leftwrapper">

<div class="register-left">
<form action="<?php echo $this->_vars['URL_register']; ?>
" method="post" id="thisform">
	<div class="heading-inline"><?php echo $this->_confs['PLIGG_Visual_Register']; ?>
</div>
	<div data-role="fieldcontain">
		<label class="ui-input-text" for="reg_username"><strong><?php echo $this->_confs['PLIGG_Visual_Register_Username']; ?>
:</strong></label>			
		<input type="text" name="reg_username" id="reg_username" value="<?php if (isset ( $this->_vars['reg_username'] )):  echo $this->_vars['reg_username'];  endif; ?>" tabindex="10" maxlength="32"/>
	</div>
	<?php if (isset ( $this->_vars['form_username_error'] )):  if (count((array)$this->_vars['form_username_error'])):  foreach ((array)$this->_vars['form_username_error'] as $this->_vars['error']): ?><div class="error"><?php echo $this->_vars['error']; ?>
</div><br /><?php endforeach; endif; ?>
	<?php else: ?><span id="reg_usernamecheckitvalue">&nbsp;</span>
	<?php endif; ?>
	
	<div data-role="fieldcontain">
			<label for="reg_email"><strong><?php echo $this->_confs['PLIGG_Visual_Register_Email']; ?>
:</strong><?php echo $this->_confs['PLIGG_Visual_Register_Lowercase']; ?>
</label>			
			<input type="email" id="reg_email" name="reg_email" value="<?php if (isset ( $this->_vars['reg_email'] )):  echo $this->_vars['reg_email'];  endif; ?>" tabindex="12"/>
	</div>
	<?php if (isset ( $this->_vars['form_email_error'] )):  if (count((array)$this->_vars['form_email_error'])):  foreach ((array)$this->_vars['form_email_error'] as $this->_vars['error']): ?><br /><div class="error"><?php echo $this->_vars['error']; ?>
</div><br /><?php endforeach; endif; ?>
	<?php else: ?><span id="reg_emailcheckitvalue">&nbsp;</span>
	<?php endif; ?>	
	
	<div data-role="fieldcontain">
		<label for="reg_password"><strong><?php echo $this->_confs['PLIGG_Visual_Register_Password']; ?>
:</strong><?php echo $this->_confs['PLIGG_Visual_Register_FiveChar']; ?>
</label>			
		<input type="password" id="reg_password" name="reg_password" value="<?php if (isset ( $this->_vars['reg_password'] )):  echo $this->_vars['reg_password'];  endif; ?>" tabindex="14"/>
		<?php if (isset ( $this->_vars['form_password_error'] )):  if (count((array)$this->_vars['form_password_error'])):  foreach ((array)$this->_vars['form_password_error'] as $this->_vars['error']): ?><br /><div class="error 1"><?php echo $this->_vars['error']; ?>
</div><br /><?php endforeach; endif;  endif; ?>	
	</div>
	
	<div data-role="fieldcontain">
		<label for="reg_verify"><strong><?php echo $this->_confs['PLIGG_Visual_Register_Verify_Password']; ?>
:</strong></label>	
		<input type="password" id="reg_verify" name="reg_password2" value="<?php if (isset ( $this->_vars['reg_password2'] )):  echo $this->_vars['reg_password2'];  endif; ?>" tabindex="15"/>
	</div>

	<?php if (isset ( $this->_vars['register_step_1_extra'] )): ?>
		<?php echo $this->_vars['register_step_1_extra']; ?>

	<?php endif; ?>
	
	<input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Visual_Register_Create_User']; ?>
" tabindex="16" />
	<input type="hidden" name="regfrom" value="full"/>
</form>
</div>

<div data-role="collapsible">
	<h3><?php echo $this->_confs['PLIGG_Visual_Register_Description_Title']; ?>
</h3>
	<?php echo $this->_confs['PLIGG_Visual_Register_Description_Paragraph']; ?>

	<ul>
		<?php echo $this->_confs['PLIGG_Visual_Register_Description_Points']; ?>

	</ul>
</div>

</div>
    <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_register_end"), $this);?>