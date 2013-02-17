<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-12-19 15:47:34 CST */ ?>

<div data-role="fieldcontain">
<label for="answer"><b>请给出下列问题的答案:</b> What is <?php echo $this->_vars['number1']; ?>
 + <?php echo $this->_vars['number2']; ?>
 =</label>			
 <input type="text" id="answer" name="answer" />
<?php if (isset ( $this->_vars['register_captcha_error'] )): ?><br /><div class="error"><?php echo $this->_vars['register_captcha_error']; ?>
</div><?php endif; ?>
</div>
