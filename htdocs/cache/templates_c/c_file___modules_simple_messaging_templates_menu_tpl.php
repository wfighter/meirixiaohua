<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-08 14:00:42 CST */ ?>

<?php $this->config_load($this->_vars['simple_messaging_lang_conf'], null, null); ?>

<?php echo '
<style type="text/css">
.menuwrapper {
margin:0;padding:0;
}
ul#tabnav {
text-align: left;
margin: 10px 0 2px 0;
font-size: 11px;
border-bottom: 1px solid #ccc; 
list-style-type: none;
padding: 3px 10px 1px 10px;
}

ul#tabnav li { 
display: inline;margin:0 5px 0 0;
}

#tab1 li.tab1, #tab2 li.tab2, #tab3 li.tab3, #tab4 li.tab4, #tab5 li.tab5{ 
border-bottom: 1px solid #fff;
background-color: #fff;
}

#tab1 li.tab1 a, #tab2 li.tab2 a, #tab3 li.tab3 a, #tab4 li.tab4 a, #tab5 li.tab5 a { 
background-color: #fff; 
color: #000; 
position: relative;
top: 1px;
padding-top: 4px; 
}

ul#tabnav li a {
padding: 3px 4px;
border: 1px solid #ccc;
background-color: #EDEDED;
color: #666;
margin-right: 0px;
text-decoration: none;
}
ul#tabnav li a img{
border:0;
}
ul#tabnav a:hover { 
background: #fff; 
}
</style>
'; ?>


<?php if (isMobile == 'true') : ?>
<div class="menuwrapper">
	<ul data-role="listview">
		<li class="tab1" <?php if ($this->_vars['modulepage'] == "simple_messaging_inbox" || $this->_vars['modulepage'] == "viewmsg"): ?>data-theme="a"<?php endif; ?>>
			<a href="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=simple_messaging&view=inbox" >
				<img src="<?php echo $this->_vars['simple_messaging_img_path']; ?>
email.png" class="ui-li-icon">
				<?php echo $this->_confs['PLIGG_MESSAGING_Inbox']; ?>

			</a>
		</li>

		<li class="tab2" <?php if ($this->_vars['modulepage'] == "simple_messaging_sent" || $this->_vars['modulepage'] == "viewsentmsg"): ?>data-theme="a"<?php endif; ?>>
			<a href="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=simple_messaging&view=sent">
				<img src="<?php echo $this->_vars['simple_messaging_img_path']; ?>
reply.png" class="ui-li-icon">
				<?php echo $this->_confs['PLIGG_MESSAGING_Sent_Messages']; ?>

			</a>
		</li>

		<?php if ($this->_vars['Allow_Friends'] != "0"): ?>	 
			<li class="tab3">
				<a href="<?php echo $this->_vars['user_url_friends']; ?>
">
					<img src="<?php echo $this->_vars['simple_messaging_img_path']; ?>
friends.png" class="ui-li-icon">
					<?php echo $this->_confs['PLIGG_MESSAGING_Users_Im_Following']; ?>

				</a>
			</li>

			<li class="tab4">
				<a href="<?php echo $this->_vars['user_url_friends2']; ?>
">
					<img src="<?php echo $this->_vars['simple_messaging_img_path']; ?>
friends2.png" class="ui-li-icon">
					<?php echo $this->_confs['PLIGG_MESSAGING_Users_Following_me']; ?>

				</a>
			</li>
			
			
		<?php endif; ?>
	</ul>
</div>
<?php else: ?>
<div class="menuwrapper">
	<ul id="tabnav">
		<li class="tab1" >
			<a href="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=simple_messaging&view=inbox" <?php if ($this->_vars['modulepage'] == "simple_messaging_inbox" || $this->_vars['modulepage'] == "viewmsg"): ?>style="background:#fff;border-bottom:1px solid #fff;"<?php endif; ?>>
				<img src="<?php echo $this->_vars['simple_messaging_img_path']; ?>
email.png" alt="" align="absmiddle"/>
				<?php echo $this->_confs['PLIGG_MESSAGING_Inbox']; ?>

			</a>
		</li>

		<li class="tab2">
			<a href="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=simple_messaging&view=sent" <?php if ($this->_vars['modulepage'] == "simple_messaging_sent" || $this->_vars['modulepage'] == "viewsentmsg"): ?>style="background:#fff;border-bottom:1px solid #fff;"<?php endif; ?>>
				<img src="<?php echo $this->_vars['simple_messaging_img_path']; ?>
reply.png" alt="" align="absmiddle"/>
				<?php echo $this->_confs['PLIGG_MESSAGING_Sent_Messages']; ?>

			</a>
		</li>

		<?php if ($this->_vars['Allow_Friends'] != "0"): ?>	 
			<li class="tab3">
				<a href="<?php echo $this->_vars['user_url_friends']; ?>
">
					<img src="<?php echo $this->_vars['simple_messaging_img_path']; ?>
friends.png" alt="" align="absmiddle"/>
					<?php echo $this->_confs['PLIGG_MESSAGING_Users_Im_Following']; ?>

				</a>
			</li>

			<li class="tab4">
				<a href="<?php echo $this->_vars['user_url_friends2']; ?>
">
					<img src="<?php echo $this->_vars['simple_messaging_img_path']; ?>
friends2.png" alt="" align="absmiddle"/>
					<?php echo $this->_confs['PLIGG_MESSAGING_Users_Following_me']; ?>

				</a>
			</li>
			
			
		<?php endif; ?>
	</ul>
</div>
<?php endif; ?>

<?php if ($this->_vars['user_authenticated'] == true): ?> 
	<div id="search_users" style="display:none">
		<h2><?php echo $this->_confs['PLIGG_MESSAGING_Search_Users']; ?>
</h2>
		<form action="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php" method="get">
		<input type="hidden" name="view" value="search">
		<input type="text" name="keyword">
		<input type="submit" value="<?php echo $this->_confs['PLIGG_MESSAGING_Search_Users']; ?>
" class="log2">
		</form>
	</div>
<?php endif; ?>

<?php $this->config_load(simple_messaging_pligg_lang_conf, null, null); ?>