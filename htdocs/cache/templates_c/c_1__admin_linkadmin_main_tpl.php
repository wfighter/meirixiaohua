<?php require_once('/data/home/hmu129119/htdocs/plugins/modifier.capitalize.php'); $this->register_modifier("capitalize", "tpl_modifier_capitalize");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 13:36:53 CST */ ?>

<div style="margin:8px 10px;">
	<h1><?php echo $this->_confs['PLIGG_Visual_Change_Link_Status']; ?>
</h1>
	<hr />
	<ul style="list-style-type:none;margin:4px 0;padding:4px 8px;">
		<li><a href="<?php echo $this->_vars['admin_queued_url']; ?>
">Set as Upcoming</a> &ndash; <?php echo $this->_confs['PLIGG_Visual_Change_Link_Queued']; ?>
</li>
		<li><a href="<?php echo $this->_vars['admin_published_url']; ?>
">Set as Published</a> &ndash; <?php echo $this->_confs['PLIGG_Visual_Change_Link_Published']; ?>
</li>
		<li><a href="<?php echo $this->_vars['admin_discard_url']; ?>
">Discard the Story</a> &ndash; <?php echo $this->_confs['PLIGG_Visual_Change_Link_Discard']; ?>
</li>
	</ul>
	<hr />
	<p><strong><?php echo $this->_confs['PLIGG_Visual_Change_Link_Title']; ?>
:</strong> <?php echo $this->_vars['link_title']; ?>
 </p>
	<br />
	<p><strong><?php echo $this->_confs['PLIGG_Visual_Change_Link_URL']; ?>
:</strong> <a href="<?php echo $this->_vars['link_url']; ?>
" target="_blank"><?php echo $this->_vars['link_url']; ?>
</a> &ndash; <a href = "<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/manage_banned_domains.php?id=<?php echo $this->_vars['link_id']; ?>
&add=<?php echo $this->_vars['banned_domain_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Ban_This_URL']; ?>
</a></p>
	<br />
	<p><strong><?php echo $this->_confs['PLIGG_Visual_Change_Link_Content']; ?>
:</strong> <?php echo $this->_vars['link_content']; ?>
</p>
	<br />
	<p><strong><?php echo $this->_confs['PLIGG_Visual_Change_Link_Status2']; ?>
:</strong> <?php if ($this->_vars['link_status'] == "queued"): ?>Upcoming<?php else:  echo $this->_run_modifier($this->_vars['link_status'], 'capitalize', 'plugin', 1);  endif; ?></p>
	<br />
	<p><strong><?php echo $this->_confs['PLIGG_Visual_Change_Link_Submitted_By']; ?>
:</strong> <a href="../user.php?login=<?php echo $this->_vars['user_login']; ?>
"><?php echo $this->_vars['user_login']; ?>
</a> &ndash; <a href ="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php?mode=view&user=<?php echo $this->_vars['user_login']; ?>
"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_User_Manage']; ?>
</a></p>
</div>
<br style="clear:both;" />