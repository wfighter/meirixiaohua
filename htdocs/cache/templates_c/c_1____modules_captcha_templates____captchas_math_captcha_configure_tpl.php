<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 12:21:52 CST */ ?>

<br />
<h2>Math Captcha Settings</h2>
<br />

	<?php if (isset ( $this->_vars['msg'] )): ?>
		<br />
		<p>
			<b><?php echo $this->_vars['msg']; ?>
</b>
		<p>
		<br />
	<?php endif; ?>

<form>
	<input type="hidden" name="module" value="captcha">
	<input type="hidden" name="captcha" value="math">
	<input type="hidden" name="action" value="configure">
	Random number #1 should be between <input type="text" name="q_1_low" size="3" value="<?php echo $this->_vars['q_1_low']; ?>
"> and <input type="text" name="q_1_high" size="3" value="<?php echo $this->_vars['q_1_high']; ?>
"><br />
	Random number #2 should be between <input type="text" name="q_2_low" size="3" value="<?php echo $this->_vars['q_2_low']; ?>
"> and <input type="text" name="q_2_high" size="3" value="<?php echo $this->_vars['q_2_high']; ?>
"><br />
	<input type="submit" value="Submit Settings">
</form>
<br />
<a href="<?php echo $this->_vars['URL_captcha']; ?>
">Return to the Captcha Settings Page</a>