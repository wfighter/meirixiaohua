<?php require_once('/data/home/hmu129119/htdocs/plugins/function.checkForJs.php'); $this->register_function("checkForJs", "tpl_function_checkForJs");  require_once('/data/home/hmu129119/htdocs/plugins/function.checkForCss.php'); $this->register_function("checkForCss", "tpl_function_checkForCss");  require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-27 20:32:34 CST */ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="<?php echo $this->_confs['PLIGG_Visual_Language_Direction']; ?>
" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_head_start"), $this);?>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("meta.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <!--weibo-->
  <meta property="wb:webmaster" content="b5f2fd33ef7e67d2" />
  <meta property="qc:admins" content="531037277765512101170516375" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/style.css" media="screen" />
	<?php if ($this->_vars['pagename'] == "submit"): ?><link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/wick.css" /><?php endif; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/dropdown.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/dropdown-default.css" media="screen" />
	<!--[if lt IE 7]>
	<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/jquery/jquery.dropdown.js"></script>
	<![endif]-->

	<?php if ($this->_vars['Voting_Method'] == 2): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/css/star_rating/star.css" media="screen" />
	<?php endif; ?>

	<?php echo tpl_function_checkForCss(array(), $this);?>
  <LINK href="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/upload/templates/style/artZoom.css" type=text/css rel=stylesheet>
	<?php echo tpl_function_checkForJs(array(), $this);?>		
	<script src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/ad-shows.js" type="text/javascript"></script>
	 <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=2330752829" type="text/javascript" charset="utf-8"></script>
   <script type="text/javascript"
src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="100333749" data-redirecturi="http://www.meirixiaohua.com" charset="utf-8"></script>
   <script type="text/javascript" src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/jquery-1.4.4.min.js"></script>
     <script src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/back_to_top.js" type="text/javascript"></script>
     <!--SCRIPT src="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/upload/templates/js/jquery-1.3.2.min.js" type=text/javascript></SCRIPT-->
     <SCRIPT src="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/upload/templates/js/artZoom.js" type=text/javascript></SCRIPT>
	<?php if ($this->_vars['pagename'] != "published" && $this->_vars['pagename'] != "upcoming"): ?>
		<?php if ($this->_vars['Spell_Checker'] == 1): ?>			
			<script src="<?php echo $this->_vars['my_pligg_base']; ?>
/3rdparty/speller/spellChecker.js" type="text/javascript"></script>
		<?php endif; ?>
	<?php endif; ?>	

	<?php if (preg_match ( '/index.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>	
		<?php if ($this->_vars['get']['category']): ?>
			<?php if ($this->_vars['get']['page'] > 1): ?>
				<title><?php echo $this->_vars['navbar_where']['text2']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Published_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
			<?php else: ?>
				<title><?php echo $this->_vars['navbar_where']['text2']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Published_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
			<?php endif; ?>
		<?php elseif ($this->_vars['get']['page'] > 1): ?>
			<title><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Published_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php else: ?>
			<title><?php echo $this->_confs['PLIGG_Visual_Name']; ?>
 - <?php echo $this->_confs['PLIGG_Visual_RSS_Description']; ?>
</title>
		<?php endif; ?>
	<?php elseif (preg_match ( '/upcoming.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>	
		<?php if ($this->_vars['get']['category']): ?>
			<?php if ($this->_vars['get']['page'] > 1): ?>
				<title><?php echo $this->_vars['navbar_where']['text2']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
			<?php else: ?>
				<title><?php echo $this->_vars['navbar_where']['text2']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
			<?php endif; ?>
		<?php elseif ($this->_vars['get']['page'] > 1): ?>
			<title><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php else: ?>
			<title><?php echo $this->_confs['PLIGG_Visual_Breadcrumb_Unpublished_Tab']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php endif; ?>
	<?php elseif (preg_match ( '/submit.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>	
		<title><?php echo $this->_confs['PLIGG_Visual_Submit']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php elseif (preg_match ( '/editlink.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>	
		<title><?php echo $this->_confs['PLIGG_Visual_EditStory_Header']; ?>
: <?php echo $this->_vars['submit_url_title']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php elseif (preg_match ( '/advancedsearch.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>	
		<title><?php echo $this->_confs['PLIGG_Visual_Search_Advanced']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php elseif (preg_match ( '/search.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>	
		<title><?php echo $this->_confs['PLIGG_Visual_Search_SearchResults']; ?>
 '<?php if ($this->_vars['get']['search']):  echo $this->_vars['get']['search'];  else:  echo $this->_vars['get']['date'];  endif; ?>' | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php elseif (preg_match ( '/groups.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>	
		<?php if ($this->_vars['get']['page'] > 1): ?>
			<title><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php else: ?>
			<title><?php echo $this->_confs['PLIGG_Visual_Groups']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php endif; ?>
	<?php elseif (preg_match ( '/editgroup.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>	
		<title><?php echo $this->_vars['group_name']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php elseif (preg_match ( '/group_story.php$/' , $_SERVER['SCRIPT_NAME'] )): ?>	
		<?php if ($this->_vars['groupview'] != 'published'): ?>
			<?php if ($this->_vars['groupview'] == "upcoming"): ?>
				<?php $this->assign('tview', $this->_confs['PLIGG_Visual_Group_Upcoming']); ?>
			<?php elseif ($this->_vars['groupview'] == "shared"): ?>
				<?php $this->assign('tview', $this->_confs['PLIGG_Visual_Group_Shared']); ?>
			<?php elseif ($this->_vars['groupview'] == "members"): ?>
				<?php $this->assign('tview', $this->_confs['PLIGG_Visual_Group_Member']); ?>
			<?php endif; ?>

			<?php if ($this->_vars['get']['page'] > 1): ?>
				<title><?php echo $this->_vars['group_name']; ?>
 | <?php if ($this->_vars['get']['category']):  echo $this->_vars['navbar_where']['text2']; ?>
 | <?php endif;  echo $this->_vars['tview']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
			<?php else: ?>
				<title><?php echo $this->_vars['group_name']; ?>
 | <?php if ($this->_vars['get']['category']):  echo $this->_vars['navbar_where']['text2']; ?>
 | <?php endif;  echo $this->_vars['tview']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
			<?php endif; ?>
		<?php elseif ($this->_vars['get']['page'] > 1): ?>
			<title><?php echo $this->_vars['group_name']; ?>
 | <?php echo $this->_confs['PLIGG_Page_Title']; ?>
 <?php echo $this->_vars['get']['page']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php else: ?>
			<title><?php echo $this->_vars['group_name']; ?>
 - <?php echo $this->_vars['group_description']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
		<?php endif; ?>
	<?php elseif ($this->_vars['pagename'] == "register_complete"): ?>
		<title><?php echo $this->_confs['PLIGG_Validate_user_email_Title']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php elseif ($this->_vars['pagename'] == "404"): ?>
		<title><?php echo $this->_confs['PLIGG_Visual_404_Error']; ?>
 | <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php else: ?>	
		<title><?php echo $this->_vars['posttitle']; ?>
 | <?php echo $this->_vars['pretitle']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Name']; ?>
</title>
	<?php endif; ?>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/rss.php"/>
	<link rel="icon" href="<?php echo $this->_vars['my_pligg_base']; ?>
/favicon.ico" type="image/x-icon"/>
	
	<?php if ($this->_vars['pagename'] == 'published'): ?><link rel="canonical" href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/<?php echo $this->_vars['navbar_where']['text2']; ?>
/" /><?php endif; ?>
	<?php if ($this->_vars['pagename'] == 'index'): ?><link rel="canonical" href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/" /><?php endif; ?>
	<?php if ($this->_vars['pagename'] == 'story'): ?><link rel="canonical" href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base'];  echo $this->_vars['navbar_where']['link2']; ?>
" /><?php endif; ?>
	
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_head_end"), $this);?>
</head>
<body id="top" dir="<?php echo $this->_confs['PLIGG_Visual_Language_Direction']; ?>
" <?php echo $this->_vars['body_args']; ?>
>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_body_start"), $this);?>
	
	<?php $this->assign('sidebar_module', "categories"); ?>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template_sidebar_modules']."/wrapper.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	
<!-- START CONTENT -->
	<div id="content">
		<?php echo '
			<script type="text/javascript" language="JavaScript">
			function checkForm() {
			answer = true;
			if (siw && siw.selectingSomething)
				answer = false;
			return answer;
			}//
			</script>
		'; ?>

		
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_banner_top"), $this);?>
		
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_header'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		
		<center style="margin: -5px 0px 5px 0px;">
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("templates/".$this->_vars['the_template']."/_ad_banner_top.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		</center>
    
<!-- START LEFT COLUMN -->
	<?php if ($this->_vars['pagename'] == "submit"): ?>
		<div id="leftcol-superwide">
	<?php elseif ($this->_vars['pagename'] != "story" && $this->_vars['pagename'] != "user" && $this->_vars['pagename'] != "profile" && $this->_vars['pagename'] != "login" && $this->_vars['pagename'] != "register" && $this->_vars['pagename'] != "edit"): ?>
		<div id="leftcol-wide">
	<?php else: ?>
		<div id="leftcol-wide">
	<?php endif; ?>
	
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("templates/".$this->_vars['the_template']."/page_title.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		
		<div style="float: right; margin: 0px 0px 5px 5px;">
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("templates/".$this->_vars['the_template']."/_ad_center_right.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		</div>
		
		<div style="float: left; margin: 0px 5px 5px 0px;">
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("templates/".$this->_vars['the_template']."/_ad_center_left.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		</div>
		
		<?php if ($this->_vars['pagename'] == "group_story"): ?>
			<div id="group_navbar"></div>
		<?php endif; ?>
		
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_content_start"), $this);?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_above_center"), $this);?>
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_center'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_below_center"), $this);?>
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_content_end"), $this);?>
		
		</div>
<!-- END LEFT COLUMN -->
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_columns_start"), $this);?>	
	
	
	<?php if ($this->_vars['pagename'] != "submit"): ?>
		<div id="rightcol">
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_right_sidebar'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
			<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_second_sidebar'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
      <!--将新故事功能暂时不启用
                <p id="want-to-submit">
                  <a href="/submit.php"><span>讲新故事</span></a>
              </p>
              -->
      <p id="back-top">
        <a href="#top"><span></span></a>
      </p>
		</div>
	<?php endif; ?>	
	
	<center style="clear: both; padding-top: 10px; margin-bottom: -10px;">
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("templates/".$this->_vars['the_template']."/_ad_banner_footer.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</center>

	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_banner_bottom"), $this);?>
	
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_footer'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</div>
<!-- END CONTENT --> 
  <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=1825862" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
	<script src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/xmlhttp.php" type="text/javascript"></script> 
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_body_end"), $this);?>
	
<!-- meirixiaohua.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");

document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0b830d900374b9c3cabf48cc2c7b03e7' type='text/javascript'%3E%3C/script%3E"));

</script>
</body>
</html>
