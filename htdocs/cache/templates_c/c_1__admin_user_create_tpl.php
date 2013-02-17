<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 11:37:28 CST */ ?>

<div style="padding-left:10px;">
<h2><?php echo $this->_confs['PLIGG_Visual_AdminPanel_New_User']; ?>
</h2>
<form action="" method="post" onsubmit="validate();" onsubmit="self.close ();">
  <div style="padding-left:20px;font-weight:bold;">
	<form action="" method="post" onsubmit="validate();" class="form">
	<?php echo $this->_vars['hidden_token_admin_users_create']; ?>


	  <label for="username"><?php echo $this->_confs['PLIGG_Visual_Register_Username']; ?>
:</label>
	    <div class="div_texbox">
	    <input name="username" type="text" class="textbox" id="username" value="" />
		</div>
		<?php if (isset ( $this->_vars['username_error'] )):  if (count((array)$this->_vars['username_error'])):  foreach ((array)$this->_vars['username_error'] as $this->_vars['error']): ?><br /><div class="error"><?php echo $this->_vars['error']; ?>
</div><br /><?php endforeach; endif; ?><br /><?php endif; ?>	
		<div style="clear:both;"></div>
		<label for="email"><?php echo $this->_confs['PLIGG_Visual_Register_Email']; ?>
:</label>
		<div class="div_texbox">
	    <input name="email" type="text" class="textbox" id="city" value="" />
		</div>
		<?php if (isset ( $this->_vars['email_error'] )):  if (count((array)$this->_vars['email_error'])):  foreach ((array)$this->_vars['email_error'] as $this->_vars['error']): ?><br /><div class="error"><?php echo $this->_vars['error']; ?>
</div><br /><?php endforeach; endif; ?><br /><?php endif; ?>	
		<div style="clear:both;"></div>
		<label><?php echo $this->_confs['PLIGG_Visual_View_User_Level']; ?>
:</label>
		<div class="div_texbox">
		<select name="level">
		<option value="normal">Normal</option>
		<option value="admin">Admin</option>
		<option value="god">God</option>	
		</select>
		</div>
		<div style="clear:both;"></div>
		<label for="password"><?php echo $this->_confs['PLIGG_Visual_Register_Password']; ?>
:</label>
	    <div class="div_texbox">
	    <input name="password" type="text" class="textbox" id="password" value="" />
		</div>
		<?php if (isset ( $this->_vars['password_error'] )):  if (count((array)$this->_vars['password_error'])):  foreach ((array)$this->_vars['password_error'] as $this->_vars['error']): ?><br /><div class="error"><?php echo $this->_vars['error']; ?>
</div><br /><?php endforeach; endif; ?><br /><?php endif; ?>	
		<div style="clear:both;"></div>
		<div class="buton_div">
		<input type="hidden" name="mode" value="newuser">
		<input type="submit" value="Create User" class="log2 buttons buttonright" />
		</div>
		
	</form>
	</div>
</form>
</div>