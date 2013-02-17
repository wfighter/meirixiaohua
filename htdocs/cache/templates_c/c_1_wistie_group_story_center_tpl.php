<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 22:25:27 CST */ ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_group_start"), $this); $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/group_summary.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_group_end"), $this);?>

<br clear="all"/>
<br clear="all"/>

<?php if ($this->_vars['groupview'] == "published"): ?>
	<div id="group_published">
		<h1><?php echo $this->_confs['PLIGG_Visual_Group_Published']; ?>
</h1>
		<?php echo $this->_vars['group_display']; ?>

		<?php echo $this->_vars['group_story_pagination']; ?>

	</div>
<?php elseif ($this->_vars['groupview'] == "upcoming"): ?>
	<div id="group_upcoming">
		<h1><?php echo $this->_confs['PLIGG_Visual_Group_Upcoming']; ?>
</h1>
		<?php echo $this->_vars['group_display']; ?>

		<?php echo $this->_vars['group_story_pagination']; ?>

	</div>
<?php elseif ($this->_vars['groupview'] == "shared"): ?>
	<div id="group_shared">
		<h1><?php echo $this->_confs['PLIGG_Visual_Group_Shared']; ?>
</h1>
		<?php echo $this->_vars['group_shared_display']; ?>

		<?php echo $this->_vars['group_story_pagination']; ?>

	</div>
<?php elseif ($this->_vars['groupview'] == "members"): ?>
	<div id="who_are_members">
		<h1><?php echo $this->_confs['PLIGG_Visual_Group_Member']; ?>
</h1>
		<div class="whovotedwrapper" id="idwhovotedwrapper">
			<?php echo $this->_vars['member_display']; ?>

		</div>
	</div>	
<?php endif; ?>
