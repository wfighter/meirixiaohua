<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-01 21:58:25 CST */ ?>

<?php if ($this->_vars['is_group_admin'] == '1'): ?>
	<div id="group_container" style="width:650px;float:left;">
		<div id="group_left" style="width:110px;float:left;">
			<span>
				<img src="<?php echo $this->_vars['imgsrc']; ?>
" alt="group_avatar" />
			</span>
			<br />
				<span class="group_avatar"><img src="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/folder_images.gif" />&nbsp;<a style="text-decoration:none;font-weight:bold;left:4px;top:-3px;" href="javascript://" onclick="var replydisplay=document.getElementById('image_upload-1').style.display ? '' : 'none';document.getElementById('image_upload-1').style.display = replydisplay;"><?php echo $this->_confs['PLIGG_Visual_Group_Avatar_Upload']; ?>
</a>
		</div>
		<div id="group_right" style="width:500px;float:left;position:relative">
		<?php if ($this->_vars['errors']): ?><span class="problem"><?php echo $this->_vars['errors']; ?>
</span><?php endif; ?>
		<form method="POST" enctype="multipart/form-data" name="image_upload_form" action="<?php echo $this->_vars['edit_form_action']; ?>
">
			<?php echo $this->_vars['hidden_token_edit_group']; ?>

			<label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Title']; ?>
:</label><br/>
			<input type="text" name="group_title" id="group_title" value="<?php echo $this->_vars['group_name']; ?>
" /><br/>
			<br/>
			<label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Description']; ?>
:</label><br/>
			<textarea type="text" name="group_description" rows="6" cols="50" id="group_description"><?php echo $this->_vars['group_description']; ?>
</textarea>
			<br/><br/>
			<label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Privacy']; ?>
:</label>
				<select name="group_privacy" onchange="document.getElementById('group_email').style.display=this.selectedIndex==0 ? 'none' : 'block';">
					<option <?php if ($this->_vars['group_privacy'] == 'public'): ?>SELECTED<?php endif; ?> value = "public"><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Public']; ?>
</option>
					<option <?php if ($this->_vars['group_privacy'] == 'private'): ?>SELECTED<?php endif; ?> value = "private"><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Private']; ?>
</option>
					<option <?php if ($this->_vars['group_privacy'] == 'restricted'): ?>SELECTED<?php endif; ?> value = "restricted"><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Restricted']; ?>
</option>
				</select><br /><br/>
			<div id='group_email' <?php if ($this->_vars['group_privacy'] == 'public'): ?>style="display:none;"<?php endif; ?>>
				<input type="checkbox" id="group_notify_email" size="4" name="group_notify_email" value="1" <?php if ($this->_vars['group_notify_email']): ?>checked<?php endif; ?>>			
				<label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_Notify']; ?>
</label>
				<br /><br />
			</div>
			<label><?php echo $this->_confs['PLIGG_Visual_Submit_Group_vote_to_publish']; ?>
:</label><br/><?php echo $this->_confs['PLIGG_Visual_Group_Submit_NoOfVoteInstruction']; ?>
<br/>
			<input type="text" id="group_vote_to_publish" size="4" name="group_vote_to_publish" value="<?php echo $this->_vars['group_vote_to_publish']; ?>
"><br /><br />
			<button type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Group_Edit']; ?>
" name="action" class="submit"><span class="round"><span><?php echo $this->_confs['PLIGG_Visual_Group_Edit']; ?>
</span></span></button><br>
		</form>
		
			<?php if ($this->_vars['is_group_admin'] == '1'): ?>
				<?php if ($this->_vars['Avatar_uploaded'] != ''): ?><br/><span class="success"><img src="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/green_check.gif"/><?php echo $this->_vars['Avatar_uploaded']; ?>
</span><?php endif; ?>	
				<span id = "image_upload-1" style="display:none;">
					<fieldset><legend><?php echo $this->_confs['PLIGG_Visual_Profile_UploadAvatar2']; ?>
:</legend>
						<form method="POST" enctype="multipart/form-data" name="image_upload_form" action="<?php echo $this->_vars['edit_form_action']; ?>
">
							<?php echo $this->_vars['hidden_token_edit_group']; ?>

							<input type="file" name="image_file" size="20">
							<input type="hidden" name="idname" value="<?php echo $this->_vars['group_id']; ?>
"/>
							<input type="hidden" name="avatar" value="uploaded"/>
							<input type="hidden" name="avatarsource" value="useruploaded">
							<button type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Profile_AvatarUpload']; ?>
" name="action" class="submit"><span class="round"><span><?php echo $this->_confs['PLIGG_Visual_Profile_AvatarUpload']; ?>
</span></span></button><br>
						</form> 
					</fieldset>
				</span>
			<?php endif; ?>
			
		</div>
	</div>
<?php else: ?>
	<?php echo $this->_confs['PLIGG_Visual_Group_Admin_Error']; ?>

<?php endif; ?>