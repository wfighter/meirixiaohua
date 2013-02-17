<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-08 13:32:25 CST */ ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_sidebar_start"), $this);?>

	<?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index" || $this->_vars['pagename'] == "upcoming" && $this->_vars['pagename'] != "groups"): ?>
	<!-- CATEGORIES -->
		<?php $this->assign('sidebar_module', "categories");  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template_sidebar_modules']."/wrapper.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	<!-- START SORT -->
		<div data-role="fieldcontain">
			<label for="select-choice-sort" class="select"><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued_Sort']; ?>
 <?php echo $this->_confs['PLIGG_Visual_TopUsers_TH_News']; ?>
:</label>
			<select name="select-choice-a" id="select-choice-sort" data-native-menu="false">
				<?php if ($this->_vars['setmeka'] == "" || $this->_vars['setmeka'] == "recent"): ?><option selected="selected" value="<?php echo $this->_vars['index_url_recent']; ?>
"><?php else: ?><option value="<?php echo $this->_vars['index_url_recent']; ?>
"><?php endif;  echo $this->_confs['PLIGG_Visual_Recently_Pop']; ?>
</option>
				<?php if ($this->_vars['setmeka'] == "today"): ?><option selected="selected" value="<?php echo $this->_vars['index_url_today']; ?>
"><?php else: ?><option value="<?php echo $this->_vars['index_url_today']; ?>
"><?php endif;  echo $this->_confs['PLIGG_Visual_Top_Today']; ?>
</option>
				<?php if ($this->_vars['setmeka'] == "yesterday"): ?><option selected="selected" value="<?php echo $this->_vars['index_url_yesterday']; ?>
"><?php else: ?><option value="<?php echo $this->_vars['index_url_yesterday']; ?>
"><?php endif;  echo $this->_confs['PLIGG_Visual_Yesterday']; ?>
</option>
				<?php if ($this->_vars['setmeka'] == "week"): ?><option selected="selected" value="<?php echo $this->_vars['index_url_week']; ?>
"><?php else: ?><option value="<?php echo $this->_vars['index_url_week']; ?>
"><?php endif;  echo $this->_confs['PLIGG_Visual_This_Week']; ?>
</option>
				<?php if ($this->_vars['setmeka'] == "month"): ?><option selected="selected" value="<?php echo $this->_vars['index_url_month']; ?>
"><?php else: ?><option value="<?php echo $this->_vars['index_url_month']; ?>
"><?php endif;  echo $this->_confs['PLIGG_Visual_This_Month']; ?>
</option>
				<?php if ($this->_vars['setmeka'] == "year"): ?><option selected="selected" value="<?php echo $this->_vars['index_url_year']; ?>
"><?php else: ?><option value="<?php echo $this->_vars['index_url_year']; ?>
"><?php endif;  echo $this->_confs['PLIGG_Visual_This_Year']; ?>
</option>
				<?php if ($this->_vars['setmeka'] == "alltime"): ?><option selected="selected" value="<?php echo $this->_vars['index_url_alltime']; ?>
"><?php else: ?><option value="<?php echo $this->_vars['index_url_alltime']; ?>
"><?php endif;  echo $this->_confs['PLIGG_Visual_This_All']; ?>
</option>
			</select>
		</div>
	<!-- END SORT -->
	<?php endif; ?>

	<?php if ($this->_vars['pagename'] == "groups"): ?>
	<!-- START GROUP SORT -->
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_group_sort_start"), $this);?>
			<div data-role="fieldcontain">
				<label for="select-choice-group"><?php echo $this->_confs['PLIGG_Visual_Group_Sort']; ?>
:</label>	
				<select name="select-choice-1" id="select-choice-group" data-native-menu="false">
				<?php if ($this->_vars['sortby'] == "members"): ?>
					<option selected="selected"><<?php echo $this->_confs['PLIGG_Visual_Group_Sort_Members']; ?>
</option>
				<?php else: ?> 
					<option value="<?php echo $this->_vars['group_url_members']; ?>
">
						<?php echo $this->_confs['PLIGG_Visual_Group_Sort_Members']; ?>

					</option>
				<?php endif; ?>
				<?php if ($this->_vars['sortby'] == "name"): ?>
					<option selected="selected"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Name']; ?>
</option> 
				<?php else: ?>
					<option value="<?php echo $this->_vars['group_url_name']; ?>
">
						<?php echo $this->_confs['PLIGG_Visual_Group_Sort_Name']; ?>

					</option>
				<?php endif; ?>
				<?php if ($this->_vars['sortby'] == "newest"): ?>
					<option selected="selected"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Newest']; ?>
</option>
				<?php else: ?>
					<option value="<?php echo $this->_vars['group_url_newest']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Newest']; ?>
</option>
				<?php endif; ?>
				<?php if ($this->_vars['sortby'] == "oldest"): ?>
					<option selected="selected"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Oldest']; ?>
</option>
				<?php else: ?>
					<option value="<?php echo $this->_vars['group_url_oldest']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Group_Sort_Oldest']; ?>
</option>
				<?php endif; ?>
				<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_group_sort_end"), $this);?>
			</select>
		</div>
	<!-- END GROUP SORT -->
	<?php endif; ?>

	<?php if ($this->_vars['pagename'] == "group_story"): ?>
	<!-- START GROUP SORT -->
		<div data-role="fieldcontain">
			<label for="story_tabs"><?php echo $this->_confs['PLIGG_Visual_Group_Sort']; ?>
:</label>
			<select name="select-choice-1" id="select-choice-story-tabs" data-native-menu="false">
					<option <?php if ($this->_vars['groupview'] == "published"): ?> selected="selected"<?php endif; ?> value="<?php echo $this->_vars['groupview_published']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Group_Published']; ?>
</option>
					<option <?php if ($this->_vars['groupview'] == "upcoming"): ?> selected="selected"<?php endif; ?> value="<?php echo $this->_vars['groupview_upcoming']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Group_Upcoming']; ?>
</option>
					<option <?php if ($this->_vars['groupview'] == "shared"): ?> selected="selected"<?php endif; ?> value="<?php echo $this->_vars['groupview_sharing']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Group_Shared']; ?>
</option>
					<option <?php if ($this->_vars['groupview'] == "members"): ?> selected="selected"<?php endif; ?> value="<?php echo $this->_vars['groupview_members']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Group_Member']; ?>
</option>
			</select>
		</div>
	<!-- END GROUP SORT -->
	<?php endif; ?>
	
	<?php if ($this->_vars['pagename'] == "cloud"): ?>
		<div class="headline">
			<div class="sectiontitle"><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued_Sort']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Tags_Link_Summary']; ?>
</div>
		</div>
		<div id="navcontainer">
			<ul id="navlist">
				<?php if (isset($this->_sections['i'])) unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)0;
$this->_sections['i']['loop'] = is_array($this->_vars['count_range_values']) ? count($this->_vars['count_range_values']) : max(0, (int)$this->_vars['count_range_values']);
$this->_sections['i']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
if ($this->_sections['i']['start'] < 0)
	$this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
	$this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
	$this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
	if ($this->_sections['i']['total'] == 0)
		$this->_sections['i']['show'] = false;
} else
	$this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

		for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
			 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
			 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']	  = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']	   = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
					<?php if ($this->_sections['i']['index'] == $this->_vars['current_range']): ?>
						<li id="active"><a href="#"><span class="active"><?php echo $this->_vars['range_names'][$this->_sections['i']['index']]; ?>
</span></a></li>
					<?php else: ?>	
						<li><a href="<?php echo $this->_vars['URL_tagcloud_range'].$this->_sections['i']['index']; ?>
"><span><?php echo $this->_vars['range_names'][$this->_sections['i']['index']]; ?>
</span></a></li>
					<?php endif; ?>
				<?php endfor; endif; ?>
			</ul>   
		</div>
	<?php endif; ?>

	<?php if ($this->_vars['pagename'] == "live" || $this->_vars['pagename'] == "live_unpublished" || $this->_vars['pagename'] == "live_published" || $this->_vars['pagename'] == "live_comments"): ?>
		<div class="headline">
			<div class="sectiontitle"><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued_Sort']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Live']; ?>
</div>
		</div>
		<div id="navcontainer">
			<ul id="navlist">
				<li <?php if ($this->_vars['pagename'] == "live"): ?>id="active"<?php endif; ?>><a href="<?php echo $this->_vars['URL_live']; ?>
"><span <?php if ($this->_vars['pagename'] == "live"): ?>class="active"<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_All']; ?>
</span></a></li>
				<li <?php if ($this->_vars['pagename'] == "live_published"): ?>id="active"<?php endif; ?>><a href="<?php echo $this->_vars['URL_published']; ?>
"><span <?php if ($this->_vars['pagename'] == "live_published"): ?>class="active"<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Published_Tab']; ?>
</span></a></li>
				<li <?php if ($this->_vars['pagename'] == "live_unpublished"): ?>id="active"<?php endif; ?>><a href="<?php echo $this->_vars['URL_unpublished']; ?>
"><span <?php if ($this->_vars['pagename'] == "live_unpublished"): ?>class="active"<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished_Tab']; ?>
</span></a></li>
				<li <?php if ($this->_vars['pagename'] == "live_comments"): ?>id="active"<?php endif; ?>><a href="<?php echo $this->_vars['URL_comments']; ?>
"><span <?php if ($this->_vars['pagename'] == "live_comments"): ?>class="active"<?php endif; ?>><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Comments']; ?>
</span></a></li>
			</ul>
		</div>	
	<?php endif; ?>

<!-- LOGIN	
<?php if ($this->_vars['user_authenticated'] != true): ?> <?php $this->assign('sidebar_module', "login");  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template_sidebar_modules']."/wrapper2.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> <?php endif; ?>
-->
<!-- TOP
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_sidebar_stories_u"), $this); echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_sidebar_stories"), $this); echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_sidebar_comments"), $this);?>
-->
<!-- TAG
<?php if ($this->_vars['Enable_Tags']): ?> <?php $this->assign('sidebar_module', "tags");  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template_sidebar_modules']."/wrapper.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> <?php endif; ?>
-->

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_sidebar_end"), $this);?>