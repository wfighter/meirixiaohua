<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-01 16:47:39 CST */ ?>

<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_submit_start"), $this);?>
<h3><a name="discuss"><?php echo $this->_confs['PLIGG_Visual_Comment_Send']; ?>
</a></h3>	
<label><?php echo $this->_confs['PLIGG_Visual_Comment_NoHTML']; ?>
</label><br />
<textarea name="<?php echo $_SESSION['commentname']; ?>
" id="comment_content" class="comment-form" rows="6" cols="80"/><?php if (isset ( $this->_vars['TheComment'] )):  echo $this->_vars['TheComment'];  endif; ?></textarea><br />
<?php if ($this->_vars['Spell_Checker'] == 1): ?><input type="button" name="spelling" value="<?php echo $this->_confs['PLIGG_Visual_Check_Spelling']; ?>
" class="log2" onClick="openSpellChecker('comment_content');"/><?php endif;  if (isset ( $this->_vars['register_step_1_extra'] )): ?>
	<br />
	<?php echo $this->_vars['register_step_1_extra']; ?>

<?php endif; ?>
<input type="hidden" name="process" value="newcomment" />
<input type="hidden" name="randkey" value="<?php echo $this->_vars['randkey']; ?>
" />
<input type="hidden" name="link_id" value="<?php echo $this->_vars['link_id']; ?>
" />
<input type="hidden" name="user_id" value="<?php echo $this->_vars['user_id']; ?>
" />
<input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Visual_Comment_Submit']; ?>
" class="log2" />
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_comments_submit_end"), $this);?>
<br />
