<?php require_once('/data/home/hmu129119/htdocs/plugins/modifier.capitalize.php'); $this->register_modifier("capitalize", "tpl_modifier_capitalize");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 13:37:03 CST */ ?>

<div style="margin:8px 10px;">
	<h1><?php echo $this->_confs['PLIGG_Visual_Change_Link_Status']; ?>
</h1>
	<hr />
	<div style="margin:0 10px;">
		<h2>Are you sure that you want to change the story status to <?php if ($this->_vars['action'] == "queued"): ?>Upcoming<?php else:  echo $this->_run_modifier($this->_vars['action'], 'capitalize', 'plugin', 1);  endif; ?>?</h2>
		<div class="admin_bottom_button" style="padding:3px 8px;background:url('../templates/admin/images/bgrepeat.png') repeat-x left -134px;"><a href="<?php echo $this->_vars['admin_modify_do_url']; ?>
">Yes</a></div>
		<div class="admin_bottom_button" style="margin-left:12px;margin-bottom:12px;padding:3px 8px;background:url('../templates/admin/images/bgrepeat.png') repeat-x left -250px;"><a href="<?php echo $this->_vars['admin_modify_url']; ?>
">No</a></div>
		<div style="clear:both;"> </div>
	</div>
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
</div>


