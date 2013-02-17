<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-31 15:46:27 CST */ ?>

﻿<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("./modules/simple_messaging/templates/menu.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<?php $this->config_load($this->_vars['simple_messaging_lang_conf'], null, null); ?>
<h3><?php echo $this->_confs['PLIGG_MESSAGING_SendAMessageTo']; ?>
<a href="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php?login=<?php echo $this->_vars['msgToName']; ?>
"><?php echo $this->_vars['msgToName']; ?>
</a></h3>
<form method="get" action="module.php">
	<input type = "hidden" name="module" value="simple_messaging">
	<input type = "hidden" name="return" value="<?php echo $this->_vars['return']; ?>
">
	<input type = "hidden" name="view" value="send">

	<label><strong><?php echo $this->_confs['PLIGG_MESSAGING_Subject']; ?>
:</strong></label><br />
	<label><input id="msg_subject" name="msg_subject" type="text" value="<?php echo $this->_vars['msg_subject']; ?>
" size="50" class="f-name" tabindex="1" required="yes"></label><br />
	<br />
	<label><strong><?php echo $this->_confs['PLIGG_MESSAGING_Message']; ?>
:</strong></label><br />
	<label><textarea id="msg_body" name="msg_body" tabindex="2" rows="10" cols="50" requied="yes" /></textarea></label><br />
	<br />

	<input type = "submit" value="<?php echo $this->_confs['PLIGG_MESSAGING_Send']; ?>
" tabindex="3">
	<input type = "hidden" name="msg_to" id="msg_to" value="<?php echo $this->_vars['msgToName']; ?>
">
</form>

<?php $this->config_load(simple_messaging_pligg_lang_conf, null, null); ?>