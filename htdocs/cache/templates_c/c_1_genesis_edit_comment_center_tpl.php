<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-31 18:32:18 CST */ ?>

<?php echo $this->_vars['the_story']; ?>


<br/>
<h2><?php echo $this->_confs['PLIGG_Visual_Story_Comments']; ?>
</h2>

<form action="" method="POST" id="thisform">		
	<?php echo $this->_vars['the_comment']; ?>

	<?php echo $this->_vars['comment_form']; ?>

	<input type="hidden" name="process" value="newcomment" />
	<input type="hidden" name="randkey" value="<?php echo $this->_vars['randkey']; ?>
" />
	<input type="hidden" name="link_id" value="<?php echo $this->_vars['link_id']; ?>
" />
	<input type="hidden" name="user_id" value="<?php echo $this->_vars['user_id']; ?>
" />
</form>

<?php echo $this->_vars['removed_link']; ?>

