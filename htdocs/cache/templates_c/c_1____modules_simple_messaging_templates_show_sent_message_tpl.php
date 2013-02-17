<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-31 15:47:41 CST */ ?>

<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("./modules/simple_messaging/templates/menu.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<?php $this->config_load($this->_vars['simple_messaging_lang_conf'], null, null); ?>

<?php echo '
	<style type="text/css">
		table td { background:none }
		a img {border:0;}
		.label {color:#999999;font-weight:bold;}
	</style>
'; ?>


<p>
	<table style="border:none;" cellspacing="5">
		<tr>
			<td align="right" class="label"><?php echo $this->_confs['PLIGG_MESSAGING_From']; ?>
:</td><td> <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php?login=<?php echo $this->_vars['msg_array']['sender_name']; ?>
"><?php echo $this->_vars['msg_array']['sender_name']; ?>
</a></td>
		</tr>
		<tr>
			<td align="right" class="label"><?php echo $this->_confs['PLIGG_MESSAGING_Sent']; ?>
:</td><td><?php echo $this->_vars['msg_array']['date']; ?>
</td>
		</tr>
		<tr>
			<td align="right" class="label"><?php echo $this->_confs['PLIGG_MESSAGING_Subject']; ?>
:</td><td> <?php echo $this->_vars['msg_array']['title']; ?>
</td>
		</tr>		
		<tr>
			<td align="right" VALIGN="top" class="label"><?php echo $this->_confs['PLIGG_MESSAGING_Message']; ?>
:</td><td><?php echo $this->_vars['msg_array']['body']; ?>
</td>
		</tr>
	</table>
	
	<br />
	<hr />
	<br />
	<div align="center">
		<a href="<?php echo $this->_vars['URL_simple_messaging_inbox']; ?>
"><img src="<?php echo $this->_vars['simple_messaging_path']; ?>
images/cross.png" align="absmiddle" /></a> <a href="<?php echo $this->_vars['URL_simple_messaging_inbox']; ?>
"><?php echo $this->_confs['PLIGG_MESSAGING_Close']; ?>
</a>
	</div>
</p>
<?php $this->config_load(simple_messaging_pligg_lang_conf, null, null); ?>
