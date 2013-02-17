<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-28 21:34:49 CST */ ?>

<?php $this->config_load(status_lang_conf, null, null); ?>

<fieldset><legend> <?php echo $this->_confs['PLIGG_Status']; ?>
</legend>
<p><?php echo $this->_confs['PLIGG_Status_Instructions']; ?>
</p>

	<form action="" method="POST" id="thisform">
		<table border="0" cellspacing="8">
		<tr>
		<td width="250" colspan="2"><h2><?php echo $this->_confs['PLIGG_Status_General']; ?>
: </h2></td>
		</tr>

		<tr>
		<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Switch']; ?>
"><?php echo $this->_confs['PLIGG_Status_Switch']; ?>
</a>:</label></td><td>
			<select name="status_switch">
			<option value='1' <?php if ($this->_vars['settings']['switch'] > 0): ?>selected<?php endif; ?>>On</option>
			<option value='0' <?php if ($this->_vars['settings']['switch'] == 0): ?>selected<?php endif; ?>>Off</option>
			<option value='-1' <?php if ($this->_vars['settings']['switch'] < 0): ?>selected<?php endif; ?>>Suspend</option>
			</select>
		</td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Allow_Search']; ?>
"><?php echo $this->_confs['PLIGG_Status_Allow_Search']; ?>
</a>:</label></td>
			<td><input type="checkbox" name="status_allowsearch" id="status_allowsearch" value="1" <?php if ($this->_vars['settings']['allowsearch']): ?>checked<?php endif; ?>/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Email_Update']; ?>
"><?php echo $this->_confs['PLIGG_Status_Email_Update']; ?>
</a>:</label></td>
			<td><input type="checkbox" name="status_email" id="status_email" value="1" <?php if ($this->_vars['settings']['email']): ?>checked<?php endif; ?>/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Permalinks']; ?>
"><?php echo $this->_confs['PLIGG_Status_Permalinks']; ?>
</a></label></td>
			<td><input type="checkbox" name="status_permalinks" id="status_permalinks" value="1" <?php if ($this->_vars['settings']['permalinks']): ?>checked<?php endif; ?>/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Input_On_Other']; ?>
"><?php echo $this->_confs['PLIGG_Status_Input_On_Other']; ?>
</a></label></td>
			<td><input type="checkbox" name="status_inputonother" id="status_inputonother" value="1" <?php if ($this->_vars['settings']['inputonother']): ?>checked<?php endif; ?>/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Show_Permalinks']; ?>
"><?php echo $this->_confs['PLIGG_Status_Show_Permalinks']; ?>
</a></label></td>
			<td><input type="checkbox" name="status_show_permalinks" id="status_show_permalinks" value="1" <?php if ($this->_vars['settings']['show_permalinks']): ?>checked<?php endif; ?>/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Results']; ?>
"><?php echo $this->_confs['PLIGG_Status_Results']; ?>
</a>:</label></td>
			<td><input type="text" name="status_results" id="status_results" size="3" value="<?php echo $this->_vars['settings']['results']; ?>
" style="width: 50px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Max_Char']; ?>
"><?php echo $this->_confs['PLIGG_Status_Max_Char']; ?>
</a>:</label></td>
			<td><input type="text" name="status_max_chars" id="status_max_chars" size="3" value="<?php echo $this->_vars['settings']['max_chars']; ?>
" style="width: 50px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Avatar_Size']; ?>
"><?php echo $this->_confs['PLIGG_Status_Avatar_Size']; ?>
</a>:</label></td>
			<td>
				<input type="radio" name="status_avatar" value="small" <?php if ($this->_vars['settings']['avatar'] == 'small'): ?>checked<?php endif; ?>/> <?php echo $this->_confs['PLIGG_Status_Avatar_Small']; ?>
<br>
				<input type="radio" name="status_avatar" value="large" <?php if ($this->_vars['settings']['avatar'] == 'large'): ?>checked<?php endif; ?>/> <?php echo $this->_confs['PLIGG_Status_Avatar_Large']; ?>

			</td>
		</tr>
		<tr>
		<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Clock_Format']; ?>
"><?php echo $this->_confs['PLIGG_Status_Clock_Format']; ?>
</a>:</label></td><td>
			<select name="status_clock">
			<option value='24' <?php if ($this->_vars['settings']['clock'] == '24'): ?>selected<?php endif; ?>>24 hour</option>
			<option value='12' <?php if ($this->_vars['settings']['clock'] == '12'): ?>selected<?php endif; ?>>12 hour</option>
			</select>
		</td>
		</tr>
		<tr><td width="250"></td><td><input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Status_Submit']; ?>
" class="log2" style="font-weight:bold;padding:2px 15px 2px 15px"/></td></tr>
		
		<td width="250" colspan="2"><br /><h2><?php echo $this->_confs['PLIGG_Status_Style']; ?>
: </h2></td>
		<tr>
		<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Place']; ?>
"><?php echo $this->_confs['PLIGG_Status_Place']; ?>
</a>:</label></td><td>
			<select name="status_place">
				<option><?php echo $this->_confs['PLIGG_Status_Nowhere']; ?>
</option>
			<?php if (count((array)$this->_vars['status_places'])):  foreach ((array)$this->_vars['status_places'] as $this->_vars['place']): ?>
				<option <?php if ($this->_vars['settings']['place'] == $this->_vars['place']): ?>selected<?php endif; ?>><?php echo $this->_vars['place']; ?>
</option>
			<?php endforeach; endif; ?>
			</select>
		</td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Pre_Format']; ?>
"><?php echo $this->_confs['PLIGG_Status_Pre_Format']; ?>
</a>:</label></td>
			<td><input type="text" name="status_pre_format" id="status_pre_format" size="66" value="<?php echo $this->_vars['settings']['pre_format']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Post_Format']; ?>
"><?php echo $this->_confs['PLIGG_Status_Post_Format']; ?>
</a>:</label></td>
			<td><input type="text" name="status_post_format" id="status_post_format" size="66" value="<?php echo $this->_vars['settings']['post_format']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Pre_Comment']; ?>
"><?php echo $this->_confs['PLIGG_Status_Pre_Comment']; ?>
</a>:</label></td>
			<td><input type="text" name="status_pre_comment" id="status_pre_comment" size="66" value="<?php echo $this->_vars['settings']['pre_comment']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Post_Comment']; ?>
"><?php echo $this->_confs['PLIGG_Status_Post_Comment']; ?>
</a>:</label></td>
			<td><input type="text" name="status_post_comment" id="status_post_comment" size="66" value="<?php echo $this->_vars['settings']['post_comment']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Pre_Story']; ?>
"><?php echo $this->_confs['PLIGG_Status_Pre_Story']; ?>
</a>:</label></td>
			<td><input type="text" name="status_pre_story" id="status_pre_story" size="66" value="<?php echo $this->_vars['settings']['pre_story']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Post_Story']; ?>
"><?php echo $this->_confs['PLIGG_Status_Post_Story']; ?>
</a>:</label></td>
			<td><input type="text" name="status_post_story" id="status_post_story" size="66" value="<?php echo $this->_vars['settings']['post_story']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Pre_Username']; ?>
"><?php echo $this->_confs['PLIGG_Status_Pre_Username']; ?>
</a>:</label></td>
			<td><input type="text" name="status_pre_username" id="status_pre_username" size="66" value="<?php echo $this->_vars['settings']['pre_username']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Post_Username']; ?>
"><?php echo $this->_confs['PLIGG_Status_Post_Username']; ?>
</a>:</label></td>
			<td><input type="text" name="status_post_username" id="status_post_username" size="66" value="<?php echo $this->_vars['settings']['post_username']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Pre_Search']; ?>
"><?php echo $this->_confs['PLIGG_Status_Pre_Search']; ?>
</a>:</label></td>
			<td><input type="text" name="status_pre_search" id="status_pre_search" size="66" value="<?php echo $this->_vars['settings']['pre_search']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Post_Search']; ?>
"><?php echo $this->_confs['PLIGG_Status_Post_Search']; ?>
</a>:</label></td>
			<td><input type="text" name="status_post_search" id="status_post_search" size="66" value="<?php echo $this->_vars['settings']['post_search']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Pre_Submit']; ?>
"><?php echo $this->_confs['PLIGG_Status_Pre_Submit']; ?>
</a>:</label></td>
			<td><input type="text" name="status_pre_submit" id="status_pre_submit" size="66" value="<?php echo $this->_vars['settings']['pre_submit']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Post_Submit']; ?>
"><?php echo $this->_confs['PLIGG_Status_Post_Submit']; ?>
</a>:</label></td>
			<td><input type="text" name="status_post_submit" id="status_post_submit" size="66" value="<?php echo $this->_vars['settings']['post_submit']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr><td width="250"></td><td><input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Status_Submit']; ?>
" class="log2" style="font-weight:bold;padding:2px 15px 2px 15px"/></td></tr>

		<tr>
		<td width="250" colspan="2"><br /><h2><?php echo $this->_confs['PLIGG_Status_Access']; ?>
: </h2></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Levels']; ?>
"><?php echo $this->_confs['PLIGG_Status_Levels']; ?>
</a>:</label></td>
			<td>
			<input type="checkbox" name="status_level[]" id="status_level1" value="god" <?php if (strstr ( $this->_vars['settings']['level'] , 'god' )): ?>checked<?php endif; ?>/> god<br>
			<input type="checkbox" name="status_level[]" id="status_level2" value="admin" <?php if (strstr ( $this->_vars['settings']['level'] , 'admin' )): ?>checked<?php endif; ?>/> admin<br>
			<input type="checkbox" name="status_level[]" id="status_level3" value="normal" <?php if (strstr ( $this->_vars['settings']['level'] , 'normal' )): ?>checked<?php endif; ?>/> normal<br>
			</td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Profile_Levels']; ?>
"><?php echo $this->_confs['PLIGG_Status_Profile_Levels']; ?>
</a>:</label></td>
			<td>
			<input type="checkbox" name="status_profile_level[]" id="status_level1" value="god" <?php if (strstr ( $this->_vars['settings']['profile_level'] , 'god' )): ?>checked<?php endif; ?>/> god<br>
			<input type="checkbox" name="status_profile_level[]" id="status_level2" value="admin" <?php if (strstr ( $this->_vars['settings']['profile_level'] , 'admin' )): ?>checked<?php endif; ?>/> admin<br>
			<input type="checkbox" name="status_profile_level[]" id="status_level3" value="normal" <?php if (strstr ( $this->_vars['settings']['profile_level'] , 'normal' )): ?>checked<?php endif; ?>/> normal<br>
			</td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Groups']; ?>
"><?php echo $this->_confs['PLIGG_Status_Groups']; ?>
</a>:<br /><i><?php echo $this->_confs['PLIGG_Status_Groups_Note']; ?>
</i></label></td>
			<td><input type="text" name="status_groups" id="status_groups" size="66" value="<?php echo $this->_vars['settings']['groups']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_Users']; ?>
"><?php echo $this->_confs['PLIGG_Status_Users']; ?>
</a>:<br /><i><?php echo $this->_confs['PLIGG_Status_Users_Note']; ?>
</i></label></td>
			<td><input type="text" name="status_users" id="status_users" size="66" value="<?php echo $this->_vars['settings']['users']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr><td width="250"></td><td><input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Status_Submit']; ?>
" class="log2" style="font-weight:bold;padding:2px 15px 2px 15px"/></td></tr>
		<tr>
		<td width="250" colspan="2"><br /><h2><?php echo $this->_confs['PLIGG_Status_Default']; ?>
: </h2></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_User_Switch']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Switch']; ?>
</a>:</label></td>
			<td><input type="checkbox" name="status_user_switch" id="status_user_switch" value="1" <?php if ($this->_vars['settings']['user_switch']): ?>checked<?php endif; ?>/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_User_Friends']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Friends']; ?>
</a>:</label></td>
			<td><input type="checkbox" name="status_user_friends" id="status_user_friends" value="1" <?php if ($this->_vars['settings']['user_friends']): ?>checked<?php endif; ?>/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_User_Story']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Story']; ?>
</a>:</label></td>
			<td><input type="checkbox" name="status_user_story" id="status_user_story" value="1" <?php if ($this->_vars['settings']['user_story']): ?>checked<?php endif; ?>/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_User_Comment']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Comment']; ?>
</a>:</label></td>
			<td><input type="checkbox" name="status_user_comment" id="status_user_comment" value="1" <?php if ($this->_vars['settings']['user_comment']): ?>checked<?php endif; ?>/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_User_Group']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Group']; ?>
</a>:</label></td>
			<td><input type="checkbox" name="status_user_group" id="status_user_group" value="1" <?php if ($this->_vars['settings']['user_group']): ?>checked<?php endif; ?>/></td>
		</tr>
		<tr>
			<td width="250" style="text-align:right"><label><a href="#<?php echo $this->_confs['PLIGG_Status_User_Email']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Email']; ?>
</a>:</label></td>
			<td><input type="checkbox" name="status_user_email" id="status_user_email" value="1" <?php if ($this->_vars['settings']['user_email']): ?>checked<?php endif; ?>/></td>
		</tr>

		<tr><td width="250"></td><td><input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Status_Submit']; ?>
" class="log2" style="font-weight:bold;padding:2px 15px 2px 15px"/><br /><br /></td></tr>

		</table>
	</form>
<?php echo '
<style>
p {margin:10px 0;}
p a {color:#094F89;cursor:pointer;}
</style>
'; ?>

<hr />
<h2><?php echo $this->_confs['Pligg_Status_Use']; ?>
</h2>
<p><?php echo $this->_confs['Pligg_Status_Use_Overview']; ?>
</p>
<h3><?php echo $this->_confs['Pligg_Status_Use_User']; ?>
</h3>
<p><?php echo $this->_confs['Pligg_Status_Use_User_Definition']; ?>
</p>
<h3><?php echo $this->_confs['Pligg_Status_Use_Admin']; ?>
</h3>
<p><?php echo $this->_confs['Pligg_Status_Use_Admin_Definition']; ?>
</p>
<h3><?php echo $this->_confs['Pligg_Status_Use_Groups']; ?>
</h3>
<p><?php echo $this->_confs['Pligg_Status_Use_Groups_Definition']; ?>
</p>

<hr />
<h2><?php echo $this->_confs['PLIGG_Status_Field_Definitions']; ?>
</h2>
<p><?php echo $this->_confs['PLIGG_Status_Field_Definitions_Desc']; ?>
</p>
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Switch']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Switch']; ?>
"><?php echo $this->_confs['PLIGG_Status_Switch']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Switch_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Email_Update']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Email_Update']; ?>
"><?php echo $this->_confs['PLIGG_Status_Email_Update']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Email_Update_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Place']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Place']; ?>
"><?php echo $this->_confs['PLIGG_Status_Place']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Place_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Permalinks']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Permalinks']; ?>
"><?php echo $this->_confs['PLIGG_Status_Permalinks']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Permalinks_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Input_On_Other']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Input_On_Other']; ?>
"><?php echo $this->_confs['PLIGG_Status_Input_On_Other']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Input_On_Other_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Show_Permalinks']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Show_Permalinks']; ?>
"><?php echo $this->_confs['PLIGG_Status_Show_Permalinks']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Show_Permalinks_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Results']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Results']; ?>
"><?php echo $this->_confs['PLIGG_Status_Results']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Results_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Avatar_Size']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Avatar_Size']; ?>
"><?php echo $this->_confs['PLIGG_Status_Avatar_Size']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Avatar_Size_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Clock_Format']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Clock_Format']; ?>
"><?php echo $this->_confs['PLIGG_Status_Clock_Format']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Clock_Format_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Place']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Place']; ?>
"><?php echo $this->_confs['PLIGG_Status_Place']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Place_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Pre_Format']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Pre_Format']; ?>
"><?php echo $this->_confs['PLIGG_Status_Pre_Format']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Pre_Format_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Post_Format']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Post_Format']; ?>
"><?php echo $this->_confs['PLIGG_Status_Post_Format']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Post_Format_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Pre_Comment']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Pre_Comment']; ?>
"><?php echo $this->_confs['PLIGG_Status_Pre_Comment']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Pre_Comment_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Post_Comment']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Post_Comment']; ?>
"><?php echo $this->_confs['PLIGG_Status_Post_Comment']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Post_Comment_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Pre_Story']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Pre_Story']; ?>
"><?php echo $this->_confs['PLIGG_Status_Pre_Story']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Pre_Story_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Post_Story']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Post_Story']; ?>
"><?php echo $this->_confs['PLIGG_Status_Post_Story']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Post_Story_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Pre_Username']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Pre_Username']; ?>
"><?php echo $this->_confs['PLIGG_Status_Pre_Username']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Pre_Username_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Post_Username']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Post_Username']; ?>
"><?php echo $this->_confs['PLIGG_Status_Post_Username']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Post_Username_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Levels']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Levels']; ?>
"><?php echo $this->_confs['PLIGG_Status_Levels']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Levels_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Profile_Levels']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Profile_Levels']; ?>
"><?php echo $this->_confs['PLIGG_Status_Profile_Levels']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Profile_Levels_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Groups']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Groups']; ?>
"><?php echo $this->_confs['PLIGG_Status_Groups']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Groups_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_Users']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_Users']; ?>
"><?php echo $this->_confs['PLIGG_Status_Users']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_Users_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_User_Switch']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_User_Switch']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Switch']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_User_Switch_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_User_Friends']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_User_Friends']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Friends']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_User_Friends_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_User_Story']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_User_Story']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Story']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_User_Story_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_User_Comment']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_User_Comment']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Comment']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_User_Comment_Definition']; ?>
</p>
<hr />
<p><strong><a name="<?php echo $this->_confs['PLIGG_Status_User_Email']; ?>
" href="#<?php echo $this->_confs['PLIGG_Status_User_Email']; ?>
"><?php echo $this->_confs['PLIGG_Status_User_Email']; ?>
</a></strong>: <?php echo $this->_confs['PLIGG_Status_User_Email_Definition']; ?>
</p>
<hr />

</fieldset>


<?php $this->config_load(status_pligg_lang_conf, null, null); ?>
