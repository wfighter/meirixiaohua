<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-08 13:27:29 CST */ ?>

<?php $this->config_load($this->_vars['simple_messaging_lang_conf'], null, null);  if ($this->_vars['user_authenticated'] == true): ?>
	<?php if (isMobile == 'true') : ?>
		<a href="<?php echo $this->_vars['URL_simple_messaging_inbox']; ?>
" data-role="button"><?php echo $this->_confs['PLIGG_MESSAGING_Inbox']; ?>
 <?php if ($this->_vars['msg_new_count'] > 0): ?>(<?php echo $this->_vars['msg_new_count']; ?>
 <?php echo $this->_confs['PLIGG_MESSAGING_New']; ?>
)<?php endif; ?></a>
	<?php else: ?>
		<div class="links">
			<div class="sectiontitle">
				
				
				<a href="<?php echo $this->_vars['URL_simple_messaging_inbox']; ?>
" class="main">
				<span><?php echo $this->_confs['PLIGG_MESSAGING_Inbox']; ?>
 <?php if ($this->_vars['msg_new_count'] > 0): ?>(<?php echo $this->_vars['msg_new_count']; ?>
 <?php echo $this->_confs['PLIGG_MESSAGING_New']; ?>
)<?php endif; ?> </span>
				</a>
			</div>
		</div>
	<?php endif;  endif;  $this->config_load(simple_messaging_pligg_lang_conf, null, null); ?>