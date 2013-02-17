<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 12:42:45 CST */ ?>

<li><?php if ($this->_vars['Voting_Method'] == 1): ?><span class="sidebar-vote-number"><a href="<?php echo $this->_vars['story_url']; ?>
"><?php echo $this->_vars['link_shakebox_votes']; ?>
</a></span><?php endif; ?>
<span class="sidebar-article"><a href="<?php echo $this->_vars['story_url']; ?>
" class="switchurl"><?php echo $this->_vars['title_short']; ?>
</a></span></li>
