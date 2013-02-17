<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-30 21:23:39 CST */ ?>

<h1><img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/admin/images/page.gif" align="absmiddle" /> <?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Edit']; ?>
</h1>

<p style="width:99%;margin:0 0 10px 0;padding:5px 8px;border:1px solid #bbb;background:#eee;font-size:14px;"><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/page.php?page=<?php echo $this->_vars['page_url']; ?>
" target="_blank">Visit <?php echo $this->_vars['page_title']; ?>
 Page</a></p>

<form action="" method="POST" id="thisform">
	<label><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Submit_Title']; ?>
: </label><input type="text" name="page_title" id="page_title" size="66" value="<?php echo $this->_vars['page_title']; ?>
"/>
	<br />
	<label><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Submit_URL']; ?>
: </label><input type="text" name="page_url" id="page_url" size="66" value="<?php echo $this->_vars['page_url']; ?>
"/>
	<br />
	<label><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Submit_Keywords']; ?>
 : </label><input type="text" name="page_keywords" id="page_keywords" size="66" value="<?php echo $this->_vars['page_keywords']; ?>
"/>
	<br />
	<label><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Submit_Description']; ?>
 : </label><input type="text" name="page_description" id="page_description" size="66" value="<?php echo $this->_vars['page_description']; ?>
"/>
	<br />
	<label><?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_HTML']; ?>
</label>
	<br />
	<textarea id="textarea-1" name="page_content" class="page_content" rows="30" style="width:100%"><?php echo $this->_run_modifier($this->_vars['page_content'], 'htmlspecialchars', 'PHP', 1); ?>
</textarea>
	<div class="submitbuttonfloat">
	<br />
		<input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_Visual_AdminPanel_Page_Submit']; ?>
" class="log2" />
	</div>
	<input type="hidden" name="process" value="edit_page" />
	<input type="hidden" name="randkey" value="<?php echo $this->_vars['randkey']; ?>
" />
	<input type="hidden" name="link_id" value="<?php echo $this->_vars['link_id']; ?>
" />
</form>
