<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 13:12:10 CST */ ?>

<a id="c<?php echo $this->_vars['comment_id']; ?>
"></a>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_single_start"), $this);?>
<div class="comment-wrap" <?php if ($this->_vars['comment_status'] != "published"): ?>style="background-color: #FFFBE4;border:1px solid #DFDFDF;"<?php endif; ?>>
	<div class="comment-left"> 	
		<?php if ($this->_vars['UseAvatars'] != "0"): ?><a href="<?php echo $this->_vars['user_view_url']; ?>
"><img src="<?php echo $this->_vars['Avatar_ImgSrc']; ?>
" align="absmiddle"/></a><br /><?php endif; ?>      
		<div class="subtext">
			<?php if ($this->_vars['is_anonymous']): ?><strong><?php echo $this->_confs['PLIGG_Visual_Comment_Manage_Unregistered']; ?>
</strong><?php endif; ?> <span style="text-transform:capitalize"><a href="<?php echo $this->_vars['user_view_url']; ?>
"><?php echo $this->_vars['user_username']; ?>
</a><!-- <?php if ($this->_vars['user_rank'] != ''): ?> (#<?php echo $this->_vars['user_rank']; ?>
)<?php endif; ?> --></span>
			
			<br /><?php echo $this->_vars['comment_age']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Comment_Ago']; ?>
 
			
			<?php if ($this->_vars['comment_votes'] < 0): ?>
				<br /><span id = "show_hide_comment_content-<?php echo $this->_vars['comment_id']; ?>
"> <a href = "javascript://"  onclick="var replydisplay=document.getElementById('comment_content-<?php echo $this->_vars['comment_id']; ?>
').style.display ? '' : 'none'; document.getElementById('comment_content-<?php echo $this->_vars['comment_id']; ?>
').style.display = replydisplay;"><?php echo $this->_confs['PLIGG_Visual_Comment_Show_Hide']; ?>
</a></span>
			<?php endif; ?>
			
			<?php if ($this->_vars['Enable_Comment_Voting'] == 1): ?>
				<?php if ($this->_vars['comment_user_vote_count'] == 0 && $this->_vars['current_userid'] != $this->_vars['comment_author']): ?>
					<br /><span id="ratebuttons-<?php echo $this->_vars['comment_id']; ?>
">	  
						<a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_voten']; ?>
" style='text-decoration:none;'>- </a> 
						<a id="cvote-<?php echo $this->_vars['comment_id']; ?>
" style='text-decoration: none;'><?php echo $this->_vars['comment_votes']; ?>
</a> 
						<a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_votey']; ?>
" style='text-decoration:none;'> +</a> 
					</span>
				<?php endif; ?>
			<?php endif; ?>
			
			<?php if ($this->_vars['comment_parent'] == 0 && $this->_vars['current_userid'] != 0): ?> 
				<br /><a href = "javascript://" onClick="var replydisplay=document.getElementById('reply-<?php echo $this->_vars['comment_id']; ?>
').style.display ? '' : 'none'; document.getElementById('reply-<?php echo $this->_vars['comment_id']; ?>
').style.display = replydisplay;"><?php echo $this->_confs['PLIGG_Visual_Comment_Reply']; ?>
</a>
			<?php endif; ?>

		</div>
	</div>

	<div class="comment-right" id="wholecomment<?php echo $this->_vars['comment_id']; ?>
"> 
		<?php if ($this->_vars['comment_votes'] >= 0): ?> 
			<span id="comment_content-<?php echo $this->_vars['comment_id']; ?>
"><?php echo $this->_vars['comment_content']; ?>
</span> 
		<?php else: ?>
			<span id = "comment_content-<?php echo $this->_vars['comment_id']; ?>
" style="display:none"><?php echo $this->_vars['comment_content']; ?>
</span>
		<?php endif; ?>
	</div>	  

	<?php if ($this->_vars['hide_comment_edit'] != 'yes'): ?>
		<div class="comment-hover">
			<div class="subtext commenttools">			
				<?php if ($this->_vars['isadmin'] == 1): ?>
					<a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/admin/admin_users.php?mode=view&user=<?php echo $this->_vars['user_userlogin']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Comment_Manage_User']; ?>
 <?php echo $this->_vars['user_userlogin']; ?>
</a>
					| 
					<a href="<?php echo $this->_vars['edit_comment_url']; ?>
" style="color:#d98500;"><?php echo $this->_confs['PLIGG_Visual_Comment_Edit']; ?>
</a> | <a href="<?php echo $this->_vars['delete_comment_url']; ?>
" style="color:#bc0b0b;"><?php echo $this->_confs['PLIGG_Visual_Comment_Delete']; ?>
</a>
				<?php else: ?>	  
					<?php if ($this->_vars['user_username'] == 'you'): ?>
						| <a href="<?php echo $this->_vars['edit_comment_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Comment_Edit']; ?>
</a> 
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?> 
		<br clear="all" />
	<?php if ($this->_vars['comment_parent'] == 0 && $this->_vars['current_userid'] != 0): ?> 
	
		<div id="reply-<?php echo $this->_vars['comment_id']; ?>
" style="display:none;" align="left"> 
			<fieldset><legend><?php echo $this->_confs['PLIGG_Visual_Comment_Send']; ?>
</legend>
				<label><?php echo $this->_confs['PLIGG_Visual_Comment_NoHTML']; ?>
</label>
				<textarea name="reply_comment_content[<?php echo $this->_vars['comment_id']; ?>
]" id="reply_comment_content-<?php echo $this->_vars['comment_id']; ?>
" rows="3" cols="55"/><?php echo $this->_vars['TheComment']; ?>
</textarea><br/>
				<?php if ($this->_vars['Spell_Checker'] == 1): ?><input type="button" name="spelling" value="<?php echo $this->_confs['PLIGG_Visual_Check_Spelling']; ?>
" onClick="openSpellChecker('reply_comment_content-<?php echo $this->_vars['comment_id']; ?>
');" class="log2"/><?php endif; ?>
				<input type="submit" name="submit[<?php echo $this->_vars['comment_id']; ?>
]" value="<?php echo $this->_confs['PLIGG_Visual_Comment_Submit']; ?>
" class="log2" />
			</fieldset>
		</div>
	<?php endif; ?>	
	  	
</div>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_single_end"), $this);?>
<br clear="all" />
