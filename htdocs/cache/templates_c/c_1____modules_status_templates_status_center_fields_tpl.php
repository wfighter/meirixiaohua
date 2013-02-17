<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-29 16:21:25 CST */ ?>

<?php $this->config_load(status_lang_conf, null, null); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/status/templates/status_update.css" media="screen">
<?php echo '
<script>
function checkall()
{
    var checks  = document.getElementsByTagName(\'INPUT\');
    for (var i=0; i<checks.length; i++)
     	if (checks[i].type=="checkbox" && checks[i].id==\'status_friend_list\')
	    checks[i].checked = true;
}
</script>
'; ?>

<?php 
	include(mnminclude.'friend.php');
	global $db, $main_smarty, $current_user;
	$friend = new Friend;
	$this->_vars['friends'] = $friend->get_friend_list($current_user->user_id);
	$settings = get_status_settings();
	$this->_vars['settings'] = $settings;
 ?>
<div class="user_profile_status_settings">
	<h2 style="status_update_title"><?php echo $this->_confs['PLIGG_Status_Settings']; ?>
</h2>
	<div class="status_label"><label class="checked">
		<input type="checkbox" name="status_switch" id="status_switch" class="checkbox" value="1" <?php if ($this->_vars['status_switch']): ?>checked="yes"<?php endif; ?>/>
		<?php echo $this->_confs['PLIGG_Status_User_Switch']; ?>

	</label></div>
	<div class="status_label"><label class="checked">
		<input type="checkbox" name="status_friends" id="status_friends" class="checkbox" value="1" <?php if ($this->_vars['status_friends']): ?>checked="yes"<?php endif; ?>/>
		<?php echo $this->_confs['PLIGG_Status_User_Friends']; ?>

	</label></div>
	<div class="status_label"><label class="checked">
		<input type="checkbox" onclick="if (this.checked) checkall()" name="status_all_friends" id="status_all_friends" class="checkbox" value="1" <?php if ($this->_vars['status_all_friends']): ?>checked="yes"<?php endif; ?>/>
		<?php echo $this->_confs['PLIGG_Status_User_List_Friends']; ?>

	</label></div>
	<?php if ($this->_vars['friends']): ?>
		<div class="friends_status_list">
			<?php if (count((array)$this->_vars['friends'])):  foreach ((array)$this->_vars['friends'] as $this->_vars['myfriend']): ?>
				<div class="status_label"><label class="checked">
					
					
						<input type="checkbox" onclick="if (!this.checked) document.getElementById('status_all_friends').checked=false" id="status_friend_list" class="checkbox" name="status_friend_list[]" value="<?php echo $this->_vars['myfriend']['user_login']; ?>
" <?php if (in_array ( $this->_vars['myfriend']['user_login'] , $this->_vars['status_friend_list'] )): ?>checked="yes"<?php endif; ?>/> <?php echo $this->_vars['myfriend']['user_login']; ?>

					
				</label></div>
			<?php endforeach; endif; ?>
		</div>
	<?php endif; ?>
	<div class="status_label"><label class="checked">
		<input type="checkbox" name="status_story" id="status_story" class="checkbox" value="1" <?php if ($this->_vars['status_story']): ?>checked="yes"<?php endif; ?>/>
		<?php echo $this->_confs['PLIGG_Status_User_Story']; ?>

	</label></div>
	<div class="status_label"><label class="checked">
		<input type="checkbox" name="status_comment" id="status_comment" class="checkbox" value="1" <?php if ($this->_vars['status_comment']): ?>checked="yes"<?php endif; ?>/>
		<?php echo $this->_confs['PLIGG_Status_User_Comment']; ?>

	</label></div>
	<div class="status_label"><label class="checked">
		<input type="checkbox" name="status_group" id="status_group" class="checkbox" value="1" <?php if ($this->_vars['status_group']): ?>checked="yes"<?php endif; ?>/>
		<?php echo $this->_confs['PLIGG_Status_User_Group']; ?>

	</label></div>
	<?php if ($this->_vars['settings']['email']): ?>
	<div class="status_label"><label class="checked">
		<input type="checkbox" name="status_email" id="status_email" class="checkbox" value="1" <?php if ($this->_vars['status_email']): ?>checked="yes"<?php endif; ?>/>
		<?php echo $this->_confs['PLIGG_Status_User_Email']; ?>

	</label></div>
	<?php endif; ?>
</div>
<?php $this->config_load(status_pligg_lang_conf, null, null); ?>