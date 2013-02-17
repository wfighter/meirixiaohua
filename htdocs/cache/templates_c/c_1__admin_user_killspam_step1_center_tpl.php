<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 13:26:56 CST */ ?>

<h1><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/user_killspam.gif" align="absmiddle" /> <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_User_Killspam']; ?>
</h1>
<table style="border:none">
	<tr><td><?php echo $this->_confs['PLIGG_Visual_View_Killspam_Step1']; ?>
</td></tr>
	<tr><td><a href = "<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php?mode=yeskillspam&user=<?php echo $this->_vars['user']; ?>
&id=<?php echo $this->_vars['id'];  echo $this->_vars['uri_token_admin_users_killspam']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Ban_Link_Yes']; ?>
</a>&nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;<a href="javascript:history.back()"><?php echo $this->_confs['PLIGG_Visual_Ban_Link_No']; ?>
</a></tr></td>
</table>