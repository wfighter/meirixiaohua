<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-08 13:55:37 CST */ ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_single_start"), $this);?>
<li>    
	<h3>
		<?php echo $this->_confs['PLIGG_Visual_Comment_WrittenBy']; ?>
 <?php if ($this->_vars['is_anonymous']):  echo $this->_confs['PLIGG_Visual_Comment_Manage_Unregistered'];  endif; ?><a href="<?php echo $this->_vars['user_view_url']; ?>
"><?php echo $this->_vars['user_username'];  if ($this->_vars['user_rank'] != ''): ?> (#<?php echo $this->_vars['user_rank']; ?>
)<?php endif; ?></a>
	</h3>
	<p style="font-style:italic"><?php echo $this->_vars['comment_age']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Comment_Ago']; ?>
<p>
	<?php if ($this->_vars['comment_votes'] < 0): ?>
		<span id = "show_hide_comment_content-<?php echo $this->_vars['comment_id']; ?>
"> <a href = "javascript://"  onclick="var replydisplay=document.getElementById('comment_content-<?php echo $this->_vars['comment_id']; ?>
').style.display ? '' : 'none'; document.getElementById('comment_content-<?php echo $this->_vars['comment_id']; ?>
').style.display = replydisplay;"><?php echo $this->_confs['PLIGG_Visual_Comment_Show_Hide']; ?>
</a></span>
	<?php endif; ?>
    
    <?php if ($this->_vars['isadmin']): ?>
		<a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php?mode=view&user=<?php echo $this->_vars['user_userlogin']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Comment_Manage_User']; ?>
-<?php echo $this->_vars['user_userlogin']; ?>
</a>
   	<?php endif; ?>	
						 
	<p>
		<?php if ($this->_vars['comment_votes'] >= 0): ?> 
			<?php echo $this->_vars['comment_content']; ?>

		<?php else: ?>
			<span id = "comment_content-<?php echo $this->_vars['comment_id']; ?>
" style="display:none"><?php echo $this->_vars['comment_content']; ?>
</span>
		<?php endif; ?>
	</p>				
			
	<?php if ($this->_vars['Enable_Comment_Voting'] == 1): ?>
		<?php if ($this->_vars['comment_user_vote_count'] == 0 && $this->_vars['current_userid'] != $this->_vars['comment_author']): ?>
			<div class="ui-li-rate">
				<a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_voten']; ?>
" data-role="button" data-mini="true" data-icon="arrow-u" data-iconpos="notext"></a>
				<a id="cvote-<?php echo $this->_vars['comment_id']; ?>
" style='text-decoration: none;' class="ui-rate"><?php echo $this->_vars['comment_votes']; ?>
</a> 
				<a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_votey']; ?>
"data-role="button" data-mini="true" data-icon="arrow-d" data-iconpos="notext"></a>
			</div>
		<?php endif; ?>
	<?php endif; ?>
			
	<div>
		<?php if ($this->_vars['comment_parent'] == 0 && $this->_vars['current_userid'] != 0): ?> 
			<a data-role="button" data-inline="true" data-mini="true" href = "javascript://" onClick="var replydisplay=document.getElementById('reply-<?php echo $this->_vars['comment_id']; ?>
').style.display ? '' : 'none'; document.getElementById('reply-<?php echo $this->_vars['comment_id']; ?>
').style.display = replydisplay;"><?php echo $this->_confs['PLIGG_Visual_Comment_Reply']; ?>
</a>
		<?php endif; ?>
		
		<?php if ($this->_vars['hide_comment_edit'] != 'yes'): ?>
			<?php if ($this->_vars['isadmin'] == 1): ?>
				<a data-role="button"  data-inline="true" data-mini="true" href="<?php echo $this->_vars['edit_comment_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Comment_Edit']; ?>
</a> | <a href="<?php echo $this->_vars['delete_comment_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Comment_Delete']; ?>
</a>
			<?php else: ?>	  
				<?php if ($this->_vars['user_username'] == 'you'): ?>
					<a data-role="button" data-inline="true" data-mini="true" href="<?php echo $this->_vars['edit_comment_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Comment_Edit']; ?>
</a> 
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?> 
	</div>
		
	<?php if ($this->_vars['comment_parent'] == 0 && $this->_vars['current_userid'] != 0): ?> 
	
		<div id="reply-<?php echo $this->_vars['comment_id']; ?>
" style="display:none;margin-top:10px;"> 
			<fieldset><legend><?php echo $this->_confs['PLIGG_Visual_Comment_Send']; ?>
</legend>
				<label for="reply_comment_content-<?php echo $this->_vars['comment_id']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Comment_NoHTML']; ?>
</label>
				<textarea name="reply_comment_content[<?php echo $this->_vars['comment_id']; ?>
]" id="reply_comment_content-<?php echo $this->_vars['comment_id']; ?>
" rows="6" cols="95"/><?php echo $this->_vars['TheComment']; ?>
</textarea>
				<?php if ($this->_vars['Spell_Checker'] == 1): ?><input type="button" name="spelling" value="<?php echo $this->_confs['PLIGG_Visual_Check_Spelling']; ?>
" onClick="openSpellChecker('reply_comment_content-<?php echo $this->_vars['comment_id']; ?>
');"/><?php endif; ?>
				<input type="submit" name="submit[<?php echo $this->_vars['comment_id']; ?>
]" value="<?php echo $this->_confs['PLIGG_Visual_Comment_Submit']; ?>
" />
			</fieldset>
		</div>
	<?php endif; ?>	

</li>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_single_end"), $this);?>
