<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 11:35:58 CST */ ?>

							<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/manage_mods.gif" align="absmiddle"/> <a href="<?php echo $this->_vars['my_pligg_base']; ?>
/admin/admin_modules.php"><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Module_Management']; ?>
</a><br/>
							<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_header_admin_main_links"), $this);?>
