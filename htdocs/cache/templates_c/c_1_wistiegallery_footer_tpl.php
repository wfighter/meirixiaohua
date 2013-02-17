<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 16:20:00 CST */ ?>

<br clear="all" />
<!-- START FOOTER -->
                <div id="footer">
                        <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_footer_start"), $this);?>
                <span class="subtext">Copyright 2009 <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
 | Pligg <a href="http://www.pligg.com/">Content Management System</a> | <a href="<?php echo $this->_vars['URL_advancedsearch']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Search_Advanced']; ?>
</a> | <a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/rssfeeds.php"><?php echo $this->_confs['PLIGG_Visual_RSS_Feeds']; ?>
</a> | <a href="http://da.scanep.com">Gallery by DA</a> <?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_footer_end"), $this);?></span>
        </div>
<!-- END FOOTER -->