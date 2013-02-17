<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-12 21:45:38 CST */ ?>

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


<?php if (isMobile == 'true') : ?>
	<div class="margin-top-twentypixel">
		<label><?php echo $this->_confs['PLIGG_MESSAGING_From']; ?>
:</label> <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php?login=<?php echo $this->_vars['msg_array']['sender_name']; ?>
"><?php echo $this->_vars['msg_array']['sender_name']; ?>
</a><br/>
		<label><?php echo $this->_confs['PLIGG_MESSAGING_Sent']; ?>
:</label><?php echo $this->_vars['msg_array']['date']; ?>
<br/>
		<label><?php echo $this->_confs['PLIGG_MESSAGING_Subject']; ?>
:</label> <?php echo $this->_vars['msg_array']['title']; ?>
<br/>
		<label><?php echo $this->_confs['PLIGG_MESSAGING_Message']; ?>
:</label><?php echo $this->_vars['msg_array']['body']; ?>

	</div>
	
	<div class="margin-top-twentypixel">
		<ul data-role="listview" data-inset="true">
			<li><a href="<?php echo $this->_vars['URL_simple_messaging_reply'];  echo $this->_vars['msg_id']; ?>
"><img src="<?php echo $this->_vars['simple_messaging_path']; ?>
images/reply.png"  class="ui-li-icon"><?php echo $this->_confs['PLIGG_MESSAGING_Reply']; ?>
</a> </li>
			<li><a href="<?php echo $this->_vars['URL_simple_messaging_delmsg'];  echo $this->_vars['msg_id']; ?>
"><img src="<?php echo $this->_vars['simple_messaging_path']; ?>
images/delete.png"  class="ui-li-icon"><?php echo $this->_confs['PLIGG_MESSAGING_Delete']; ?>
</a></li>
			<li><a href="<?php echo $this->_vars['URL_simple_messaging_inbox']; ?>
"><img src="<?php echo $this->_vars['simple_messaging_path']; ?>
images/cross.png"  class="ui-li-icon"><?php echo $this->_confs['PLIGG_MESSAGING_Close']; ?>
</a></li>
		</ul>
	</div>
<?php else: ?>
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
			<a href="<?php echo $this->_vars['URL_simple_messaging_reply'];  echo $this->_vars['msg_id']; ?>
"><img src="<?php echo $this->_vars['simple_messaging_path']; ?>
images/reply.png" align="absmiddle" /></a> <a href="<?php echo $this->_vars['URL_simple_messaging_reply'];  echo $this->_vars['msg_id']; ?>
"><?php echo $this->_confs['PLIGG_MESSAGING_Reply']; ?>
</a> | 
			<a href="<?php echo $this->_vars['URL_simple_messaging_delmsg'];  echo $this->_vars['msg_id']; ?>
"><img src="<?php echo $this->_vars['simple_messaging_path']; ?>
images/delete.png" align="absmiddle" /></a> <a href="<?php echo $this->_vars['URL_simple_messaging_delmsg'];  echo $this->_vars['msg_id']; ?>
"><?php echo $this->_confs['PLIGG_MESSAGING_Delete']; ?>
</a> | 
			<a href="<?php echo $this->_vars['URL_simple_messaging_inbox']; ?>
"><img src="<?php echo $this->_vars['simple_messaging_path']; ?>
images/cross.png" align="absmiddle" /></a> <a href="<?php echo $this->_vars['URL_simple_messaging_inbox']; ?>
"><?php echo $this->_confs['PLIGG_MESSAGING_Close']; ?>
</a>
		</div>
	</p>
<?php endif; ?>

<?php $this->config_load(simple_messaging_pligg_lang_conf, null, null); ?>
