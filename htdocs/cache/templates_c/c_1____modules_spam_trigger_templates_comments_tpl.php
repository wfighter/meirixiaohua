<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-12-08 17:36:07 CST */ ?>

<?php $this->config_load(spam_trigger_lang_conf, null, null); ?>

<?php if ($_SESSION['spam_trigger_comment_error'] == 'moderated'): ?>
	<div class="spam_trigger_moderated spam_trigger">
		<?php echo $this->_confs['PLIGG_Spam_Trigger_Comment_Moderated']; ?>

	</div>
<?php elseif ($_SESSION['spam_trigger_comment_error'] == 'deleted'): ?>
	<div class="spam_trigger_moderated spam_trigger">
		<?php echo $this->_confs['PLIGG_Spam_Trigger_Comment_Deleted']; ?>

	</div>
<?php endif; ?>

<?php $this->config_load(spam_trigger_pligg_lang_conf, null, null); ?>


<?php unset($_SESSION['spam_trigger_comment_error']); ?>
