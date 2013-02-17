<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-28 21:33:52 CST */ ?>

<?php $this->config_load(karma_lang_conf, null, null); ?>

<?php if ($this->_vars['error']): ?>
	<div style="padding:10px;margin:10px 0;border:1px solid #d0d0ce;background:#fffeeb;font-weight:bold;">
		<font color=red><?php echo $this->_vars['error']; ?>
</font>
	</div>
<?php elseif ($_POST['submit']): ?>
	<div style="padding:10px;margin:10px 0;border:1px solid #d0d0ce;background:#fffeeb;font-weight:bold;">
		<font color=green><?php echo $this->_confs['PLIGG_Karma_Saved']; ?>
</font>
	</div>
<?php endif; ?>

<fieldset><legend><?php echo $this->_confs['PLIGG_Karma']; ?>
</legend>
<p><?php echo $this->_confs['PLIGG_Karma_Instructions']; ?>
</p>
<br />
	<form action="" method="POST" id="thisform">
		<table border="0" cellspacing="8">
		<tr>
		<td width="50"><label><?php echo $this->_confs['PLIGG_Karma_Story_Published']; ?>
: </label></td><td><input type="text" name="karma_story_publish" size="66" value="<?php echo $this->_vars['settings']['story_publish']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
		<td width="50"><label><?php echo $this->_confs['PLIGG_Karma_Story_Submit']; ?>
: </label></td><td><input type="text" name="karma_submit_story" size="66" value="<?php echo $this->_vars['settings']['submit_story']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
		<td width="50"><label><?php echo $this->_confs['PLIGG_Karma_Comment_Submit']; ?>
: </label></td><td><input type="text" name="karma_submit_comment" size="66" value="<?php echo $this->_vars['settings']['submit_comment']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
		<td width="50"><label><?php echo $this->_confs['PLIGG_Karma_Story_Discard']; ?>
: </label></td><td><input type="text" name="karma_story_discard" size="66" value="<?php echo $this->_vars['settings']['story_discard']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
		<td width="50"><label><?php echo $this->_confs['PLIGG_Karma_Comment_Delete']; ?>
: </label></td><td><input type="text" name="karma_comment_delete" size="66" value="<?php echo $this->_vars['settings']['comment_delete']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
		<td width="50"><label><?php echo $this->_confs['PLIGG_Karma_Story_Spam']; ?>
: </label></td><td><input type="text" name="karma_story_spam" size="66" value="<?php echo $this->_vars['settings']['story_spam']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
		<td width="50"><label><?php echo $this->_confs['PLIGG_Karma_Story_Vote']; ?>
: </label></td><td><input type="text" name="karma_story_vote" size="66" value="<?php echo $this->_vars['settings']['story_vote']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
		<td width="50"><label><?php echo $this->_confs['PLIGG_Karma_Story_Vote_Remove']; ?>
: </label></td><td><input type="text" name="karma_story_vote_remove" size="66" value="<?php echo $this->_vars['settings']['story_vote_remove']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
		<td width="50"><label><?php echo $this->_confs['PLIGG_Karma_Comment_Vote']; ?>
: </label></td><td><input type="text" name="karma_comment_vote" size="66" value="<?php echo $this->_vars['settings']['comment_vote']; ?>
" style="width: 420px;"/></td>
		</tr>
		<tr>
		<td width="50"><label><?php echo $this->_confs['PLIGG_Karma_Add_User']; ?>
: </label></td><td><?php echo $this->_confs['PLIGG_Karma_Username']; ?>
: <input type="text" name="karma_username" size="22" style="width: 140px;"/>
		<?php echo $this->_confs['PLIGG_Karma_Value']; ?>
: <input type="text" name="karma_value" size="11" style="width: 45px;"/><br>
		</td>
		</tr>

		<tr><td width="250"></td><td><Br /><input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Karma_Submit']; ?>
" class="log2" style="font-weight:bold;padding:2px 15px 2px 15px"/><br /><br /></td></tr>

		</table>
	</form>



</fieldset>

<?php $this->config_load(karma_pligg_lang_conf, null, null); ?>