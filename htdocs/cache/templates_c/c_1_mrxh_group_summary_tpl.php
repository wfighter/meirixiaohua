<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-01 14:59:48 CST */ ?>

<div class="group_container">
	<div class="group_left">
		<div class="group_avatar">
			<img src="<?php echo $this->_vars['imgsrc']; ?>
" alt="<?php echo $this->_vars['group_name']; ?>
 Avatar"
				class="group_avatar_img" />
		</div>
	</div>
	<div class="group_right">
		<div class="group_title">
			<?php if ($this->_vars['pagename'] == 'group_story'): ?>
				<?php echo $this->_vars['group_name']; ?>

			<?php else: ?>
				<a href="<?php echo $this->_vars['group_story_url']; ?>
"><?php echo $this->_vars['group_name']; ?>
</a>
			<?php endif; ?>
		</div>
		<?php if ($this->_vars['pagename'] == 'group_story'):  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_group_list_start"), $this); endif; ?>
		<div class="group_created_by">
			<span class="group_created_by_label"><?php echo $this->_confs['PLIGG_Visual_Group_Created_By']; ?>
</span> <a
				href="<?php echo $this->_vars['submitter_profile_url']; ?>
"><?php echo $this->_vars['group_submitter']; ?>
</a>
		</div>
		<div class="group_created_on">
			<span class="group_created_on_label"><?php echo $this->_confs['PLIGG_Visual_Group_Created_On']; ?>
</span>
			<?php echo $this->_vars['group_date']; ?>

		</div>
		<div class="group_description"><?php echo $this->_vars['group_description']; ?>
</div>
		<?php echo $this->_confs['PLIGG_Visual_Group_Member']; ?>
 : <?php echo $this->_vars['group_members']; ?>

		<?php if ($this->_vars['pagename'] == 'group_story'): ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_group_list_end"), $this);?>
			<?php if ($this->_vars['user_logged_in'] != $this->_vars['group_submitter']): ?>
				<?php if ($this->_vars['user_logged_in'] != ""): ?>
				<br clear="all" />
				<span class="group_details">
					<?php if ($this->_vars['is_group_member'] == 0): ?>
						<?php if ($this->_vars['join_group_url'] != '' || $this->_vars['join_group_privacy_url'] != ''): ?>
							<?php if ($this->_vars['group_privacy'] == 'public'): ?>
							<span class="group_join"><img src="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/join.gif" /><a href="<?php echo $this->_vars['join_group_url']; ?>
" >&nbsp;<?php echo $this->_confs['PLIGG_Visual_Group_Join']; ?>
</a></span>
							<?php else: ?>
							<span class="group_join"><img src="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/join.gif" /><a href="<?php echo $this->_vars['join_group_privacy_url']; ?>
" >&nbsp;<?php echo $this->_confs['PLIGG_Visual_Group_Join']; ?>
</a></span>
							<?php endif; ?>
						<?php endif; ?>
					<?php else: ?>
						<?php if ($this->_vars['is_member_active'] == 'active'): ?>
						<span class="group_unjoin"><img src="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/unjoin.gif" /><a href="<?php echo $this->_vars['unjoin_group_url']; ?>
" >&nbsp;<?php echo $this->_confs['PLIGG_Visual_Group_Unjoin']; ?>
</a></span>
						<?php endif; ?>
						<?php if ($this->_vars['is_member_active'] == 'inactive'): ?>
						<span class="group_withdraw_request"><img src="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/unjoin.gif" /><a href="<?php echo $this->_vars['join_group_withdraw']; ?>
" >&nbsp;<?php echo $this->_confs['PLIGG_Visual_Group_Withdraw_Request']; ?>
</a></span>
						<?php endif; ?>	
					<?php endif; ?>
				</span>	
				<?php endif; ?>
			<?php endif; ?>
			<?php if ($this->_vars['is_group_admin'] == '1'): ?>
			&nbsp;&nbsp;&nbsp;<span class="group_edit" style="color:#774525;"><img src="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/edit.gif" /><a style="text-decoration:none;font-weight:bold;left:4px;top:-3px;" href=<?php echo $this->_vars['group_edit_url']; ?>
> <?php echo $this->_confs['PLIGG_Visual_Group_Text_edit']; ?>
</a></span>
			&nbsp;&nbsp;&nbsp;<span class="group_delete" style="color:#774525;"><img src="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/delete.gif" /><a style="text-decoration:none;font-weight:bold;left:4px;top:-3px;" onclick="return confirm('<?php echo $this->_confs['PLIGG_Visual_Group_Delete_Confirm']; ?>
')" href=<?php echo $this->_vars['group_delete_url']; ?>
> <?php echo $this->_confs['PLIGG_Visual_Group_Text_Delete']; ?>
</a></span>

			&nbsp;&nbsp;&nbsp;
			<span class="group_avatar"><img src="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/folder_images.gif" />&nbsp;<a href="javascript://" onclick="var replydisplay=document.getElementById('image_upload-1').style.display ? '' : 'none';document.getElementById('image_upload-1').style.display = replydisplay;"><?php echo $this->_confs['PLIGG_Visual_Group_Avatar_Upload']; ?>
</a>
			<?php if ($this->_vars['Avatar_uploaded'] != ''): ?><br/><span style="color:#269900;font-weight:bold;"><img src="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/green_check.gif"/><?php echo $this->_vars['Avatar_uploaded']; ?>
</span><?php endif; ?>	
			<span id = "image_upload-1" style="display:none;">
				<fieldset><legend><?php echo $this->_confs['PLIGG_Visual_Profile_UploadAvatar2']; ?>
:</legend>
					<form method="POST" enctype="multipart/form-data" name="image_upload_form" action="<?php echo $this->_vars['form_action']; ?>
">
						<?php echo $this->_vars['hidden_token_edit_group']; ?>

						<input type="file" name="image_file" size="20">
						<input type="hidden" name="idname" value="<?php echo $this->_vars['group_id']; ?>
"/>
						<input type="hidden" name="avatar" value="uploaded"/>
						<input type="hidden" name="avatarsource" value="useruploaded">
						<button type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Profile_AvatarUpload']; ?>
" name="action" class="submit"><?php echo $this->_confs['PLIGG_Visual_Profile_AvatarUpload']; ?>
</button><br />
					</form> 
				</fieldset>
			</span>
			<?php endif; ?>
		<?php elseif ($this->_vars['group_status'] == 'disable'): ?>
		<div class='group_approve'>
			<button onclick='document.location="?approve=<?php echo $this->_vars['group_id']; ?>
"'
				class='button group_approve_button'>Approve</button>
		</div>
		<?php endif; ?>
	</div>
</div>