<?php require_once('/data/home/hmu129119/htdocs/plugins/modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format");  require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-08 13:32:25 CST */ ?>

<!-- START FOOTER -->
<div id="footer" data-role="footer">
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_footer_start"), $this);?>
	<span class="subtext"> Copyright &copy; <?php echo $this->_run_modifier(time(), 'date_format', 'plugin', 1, "%Y"); ?>
 <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</span>
</div>
<!-- END FOOTER --> 
