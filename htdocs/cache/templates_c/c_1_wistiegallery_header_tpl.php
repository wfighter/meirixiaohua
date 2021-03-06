<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  require_once('/data/home/hmu129119/htdocs/plugins/modifier.sanitize.php'); $this->register_modifier("sanitize", "tpl_modifier_sanitize");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 16:20:00 CST */ ?>

<!-- START HEADER.TPL -->
<div id="login">
        <?php if ($this->_vars['user_authenticated'] == true):  echo $this->_confs['PLIGG_Visual_Welcome_Back']; ?>
 <span style="text-transform:capitalize"><a href="<?php echo $this->_vars['URL_userNoVar']; ?>
"><?php echo $this->_vars['user_logged_in']; ?>
</a></span> | <a href="<?php echo $this->_vars['URL_logout']; ?>
"> <?php echo $this->_confs['PLIGG_Visual_Logout']; ?>
</a><?php endif; ?>

        <?php if ($this->_vars['user_authenticated'] != true): ?><a href='<?php echo $this->_vars['URL_register']; ?>
'><?php echo $this->_confs['PLIGG_Visual_Register']; ?>
</a> | <a href='<?php echo $this->_vars['URL_login']; ?>
'><?php echo $this->_confs['PLIGG_Visual_Login_Title']; ?>
</a><?php endif; ?>
</div>

<div id="logo"><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</a></div>

<!-- START SEARCH -->
<div class="search">
        <?php if (isset ( $_GET['search'] )): ?>
                <?php $this->assign('searchboxtext', $this->_run_modifier($_GET['search'], 'sanitize', 'plugin', 1, 2)); ?>
        <?php else: ?>
                <?php $this->assign('searchboxtext', $this->_confs['PLIGG_Visual_Search_SearchDefaultText']); ?>
        <?php endif; ?>

        <form action="<?php echo $this->_vars['my_pligg_base']; ?>
/search.php" method="get" name="thisform-search" id="thisform-search"
                <?php 
                global $URLMethod, $my_base_url, $my_pligg_base;
                if ($URLMethod==2) print "onsubmit='document.location.href=\"{$my_base_url}{$my_pligg_base}/search/\"+this.search.value; return false;'";
                 ?>
                >

                <input type="text" size="20" class="searchfield" name="search" id="searchsite" value="<?php echo $this->_vars['searchboxtext']; ?>
" onfocus="if(this.value == '<?php echo $this->_vars['searchboxtext']; ?>
') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo $this->_vars['searchboxtext']; ?>
';}"/>
                <input type="submit" value="<?php echo $this->_confs['PLIGG_Visual_Search_Go']; ?>
" class="searchbutton" />
        </form>
</div>
<div class="clear"></div>
<!-- END SEARCH -->

<!-- START NAVBAR -->
<ul id="nav">
        <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_navbar_start"), $this);?>
        <li <?php if ($this->_vars['pagename'] == "published" || $this->_vars['pagename'] == "index"): ?>class="current"<?php endif; ?>><a href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['URL_base']; ?>
'><?php echo $this->_confs['PLIGG_Visual_Published_News']; ?>
</a></li>
        <li <?php if ($this->_vars['pagename'] == "upcoming"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_upcoming']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Pligg_Queued']; ?>
</a></li>
        <li <?php if ($this->_vars['pagename'] == "submit"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_submit']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Submit_A_New_Story']; ?>
</a></li>
        <?php if ($this->_vars['enable_group'] == "true"): ?>
                <li <?php if ($this->_vars['pagename'] == "groups" || $this->_vars['pagename'] == "submit_groups" || $this->_vars['pagename'] == "group_story"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_groups']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
</span></a></li>
        <?php endif; ?>
        <?php if ($this->_vars['user_authenticated'] == true): ?><li <?php if ($this->_vars['pagename'] == "user"): ?>class="current"<?php endif; ?>><a href="<?php echo $this->_vars['URL_userNoVar']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Profile']; ?>
</span></a></li><?php endif; ?>
        <?php if (isset ( $this->_vars['isgod'] ) && $this->_vars['isgod'] == 1): ?><li><a href="<?php echo $this->_vars['URL_admin']; ?>
"><span><?php echo $this->_confs['PLIGG_Visual_Header_AdminPanel']; ?>
</span></a></li><?php endif; ?>
        <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_navbar_end"), $this);?>
</ul>
<?php $this->assign('sidebar_module', "categories");  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template_sidebar_modules']."/wrapper.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<!-- END NAVBAR -->

<!-- START RSS -->
<div class="rsslink">
        <?php if ($this->_vars['URL_rss_page']): ?>
        <a href="<?php echo $this->_vars['URL_rss_page']; ?>
" target="_blank">
                RSS &nbsp;<img src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/images/rss.gif" align="top" border="0" alt="RSS" />
        </a>
        <?php endif; ?>
</div>
<!-- END RSS -->



<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_breadcrumb_end"), $this);?>
<!-- END HEADER.TPL -->