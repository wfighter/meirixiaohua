<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 11:35:58 CST */ ?>

<form method="get">
	<input type="hidden" name="widget" value="pligg_products">
	<p>
		<?php echo $this->_confs['PLIGG_Products_Widget_Select_Show']; ?>
		
		<select name="products" value="pligg_products">
			<option value="1" <?php if ($this->_vars['product_count'] == "1"): ?>selected="selected"<?php endif; ?>>1</option>
			<option value="2" <?php if ($this->_vars['product_count'] == "2"): ?>selected="selected"<?php endif; ?>>2</option>
			<option value="3" <?php if ($this->_vars['product_count'] == "3"): ?>selected="selected"<?php endif; ?>>3</option>
			<option value="4" <?php if ($this->_vars['product_count'] == "4"): ?>selected="selected"<?php endif; ?>>4</option>
		</select>
		<?php echo $this->_confs['PLIGG_Products_Widget_Select_Items']; ?>

		
		
		
	</p>
	<br />
	<p>
		<input type = "submit" value="<?php echo $this->_confs['PLIGG_Products_Widget_Save']; ?>
">
	</p>
</form>
