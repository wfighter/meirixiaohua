<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{#PLIGG_Visual_Language_Direction#}" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	{checkActionsTpl location="tpl_pligg_head_start"}
	{include file="meta.tpl"}
  <!--weibo-->
  <meta property="wb:webmaster" content="b5f2fd33ef7e67d2" />
  <meta property="qc:admins" content="531037277765512101170516375" />
	<link rel="stylesheet" type="text/css" href="{$my_pligg_base}/templates/{$the_template}/css/style.css" media="screen" />
	{if $pagename eq "submit"}<link rel="stylesheet" type="text/css" href="{$my_pligg_base}/templates/{$the_template}/css/wick.css" />{/if}
	<link rel="stylesheet" type="text/css" href="{$my_pligg_base}/templates/{$the_template}/css/dropdown.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="{$my_pligg_base}/templates/{$the_template}/css/dropdown-default.css" media="screen" />
	<!--[if lt IE 7]>
	<script type="text/javascript" src="{$my_pligg_base}/templates/{$the_template}/js/jquery/jquery.js"></script>
	<script type="text/javascript" src="{$my_pligg_base}/templates/{$the_template}/js/jquery/jquery.dropdown.js"></script>
	<![endif]-->

	{if $Voting_Method eq 2}
	<link rel="stylesheet" type="text/css" href="{$my_pligg_base}/templates/{$the_template}/css/star_rating/star.css" media="screen" />
	{/if}

	{checkForCss}
  <LINK href="{$my_pligg_base}/modules/upload/templates/style/artZoom.css" type=text/css rel=stylesheet>
	{checkForJs}		
	<script src="{$my_pligg_base}/templates/{$the_template}/js/ad-shows.js" type="text/javascript"></script>
	 <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=2330752829" type="text/javascript" charset="utf-8"></script>
   <script type="text/javascript"
src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="100333749" data-redirecturi="http://www.meirixiaohua.com" charset="utf-8"></script>
   <script type="text/javascript" src="{$my_pligg_base}/templates/{$the_template}/js/jquery-1.4.4.min.js"></script>
     <script src="{$my_pligg_base}/templates/{$the_template}/js/back_to_top.js" type="text/javascript"></script>
     <!--SCRIPT src="{$my_pligg_base}/modules/upload/templates/js/jquery-1.3.2.min.js" type=text/javascript></SCRIPT-->
     <SCRIPT src="{$my_pligg_base}/modules/upload/templates/js/artZoom.js" type=text/javascript></SCRIPT>
	{if $pagename neq "published" && $pagename neq "upcoming"}
		{if $Spell_Checker eq 1}			
			<script src="{$my_pligg_base}/3rdparty/speller/spellChecker.js" type="text/javascript"></script>
		{/if}
	{/if}	

	{if preg_match('/index.php$/',$templatelite.server.SCRIPT_NAME)}	
		{if $get.category}
			{if $get.page>1}
				<title>{$navbar_where.text2} | {#PLIGG_Page_Title#} {$get.page} | {#PLIGG_Visual_Breadcrumb_Published_Tab#} | {#PLIGG_Visual_Name#}</title>
			{else}
				<title>{$navbar_where.text2} | {#PLIGG_Visual_Breadcrumb_Published_Tab#} | {#PLIGG_Visual_Name#}</title>
			{/if}
		{elseif $get.page>1}
			<title>{#PLIGG_Visual_Breadcrumb_Published_Tab#} | {#PLIGG_Page_Title#} {$get.page} | {#PLIGG_Visual_Name#}</title>
		{else}
			<title>{#PLIGG_Visual_Name#} - {#PLIGG_Visual_RSS_Description#}</title>
		{/if}
	{elseif preg_match('/upcoming.php$/',$templatelite.server.SCRIPT_NAME)}	
		{if $get.category}
			{if $get.page>1}
				<title>{$navbar_where.text2} | {#PLIGG_Page_Title#} {$get.page} | {#PLIGG_Visual_Breadcrumb_Unpublished_Tab#} | {#PLIGG_Visual_Name#}</title>
			{else}
				<title>{$navbar_where.text2} | {#PLIGG_Visual_Breadcrumb_Unpublished_Tab#} | {#PLIGG_Visual_Name#}</title>
			{/if}
		{elseif $get.page>1}
			<title>{#PLIGG_Visual_Breadcrumb_Unpublished_Tab#} | {#PLIGG_Page_Title#} {$get.page} | {#PLIGG_Visual_Name#}</title>
		{else}
			<title>{#PLIGG_Visual_Breadcrumb_Unpublished_Tab#} | {#PLIGG_Visual_Name#}</title>
		{/if}
	{elseif preg_match('/submit.php$/',$templatelite.server.SCRIPT_NAME)}	
		<title>{#PLIGG_Visual_Submit#} | {#PLIGG_Visual_Name#}</title>
	{elseif preg_match('/editlink.php$/',$templatelite.server.SCRIPT_NAME)}	
		<title>{#PLIGG_Visual_EditStory_Header#}: {$submit_url_title} | {#PLIGG_Visual_Name#}</title>
	{elseif preg_match('/advancedsearch.php$/',$templatelite.server.SCRIPT_NAME)}	
		<title>{#PLIGG_Visual_Search_Advanced#} | {#PLIGG_Visual_Name#}</title>
	{elseif preg_match('/search.php$/',$templatelite.server.SCRIPT_NAME)}	
		<title>{#PLIGG_Visual_Search_SearchResults#} '{if $get.search}{$get.search}{else}{$get.date}{/if}' | {#PLIGG_Visual_Name#}</title>
	{elseif preg_match('/groups.php$/',$templatelite.server.SCRIPT_NAME)}	
		{if $get.page>1}
			<title>{#PLIGG_Visual_Groups#} | {#PLIGG_Page_Title#} {$get.page} | {#PLIGG_Visual_Name#}</title>
		{else}
			<title>{#PLIGG_Visual_Groups#} | {#PLIGG_Visual_Name#}</title>
		{/if}
	{elseif preg_match('/editgroup.php$/',$templatelite.server.SCRIPT_NAME)}	
		<title>{$group_name} | {#PLIGG_Visual_Name#}</title>
	{elseif preg_match('/group_story.php$/',$templatelite.server.SCRIPT_NAME)}	
		{if $groupview!='published'}
			{if $groupview eq "upcoming"}
				{assign var='tview' value=#PLIGG_Visual_Group_Upcoming#}
			{elseif $groupview eq "shared"}
				{assign var='tview' value=#PLIGG_Visual_Group_Shared#}
			{elseif $groupview eq "members"}
				{assign var='tview' value=#PLIGG_Visual_Group_Member#}
			{/if}

			{if $get.page>1}
				<title>{$group_name} | {if $get.category}{$navbar_where.text2} | {/if}{$tview} | {#PLIGG_Page_Title#} {$get.page} | {#PLIGG_Visual_Name#}</title>
			{else}
				<title>{$group_name} | {if $get.category}{$navbar_where.text2} | {/if}{$tview} | {#PLIGG_Visual_Name#}</title>
			{/if}
		{elseif $get.page>1}
			<title>{$group_name} | {#PLIGG_Page_Title#} {$get.page} | {#PLIGG_Visual_Name#}</title>
		{else}
			<title>{$group_name} - {$group_description} | {#PLIGG_Visual_Name#}</title>
		{/if}
	{elseif $pagename eq "register_complete"}
		<title>{#PLIGG_Validate_user_email_Title#} | {#PLIGG_Visual_Name#}</title>
	{elseif $pagename eq "404"}
		<title>{#PLIGG_Visual_404_Error#} | {#PLIGG_Visual_Name#}</title>
	{else}	
		<title>{$posttitle} | {$pretitle} {#PLIGG_Visual_Name#}</title>
	{/if}

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="{$my_base_url}{$my_pligg_base}/rss.php"/>
	<link rel="icon" href="{$my_pligg_base}/favicon.ico" type="image/x-icon"/>
	
	{if $pagename eq 'published'}<link rel="canonical" href="{$my_base_url}{$my_pligg_base}/{$navbar_where.text2}/" />{/if}
	{if $pagename eq 'index'}<link rel="canonical" href="{$my_base_url}{$my_pligg_base}/" />{/if}
	{if $pagename eq 'story'}<link rel="canonical" href="{$my_base_url}{$my_pligg_base}{$navbar_where.link2}" />{/if}
	
	{checkActionsTpl location="tpl_pligg_head_end"}
</head>
<body id="top" dir="{#PLIGG_Visual_Language_Direction#}" {$body_args}>
	{checkActionsTpl location="tpl_pligg_body_start"}
	
	{assign var=sidebar_module value="categories"}
	{include file=$the_template_sidebar_modules."/wrapper.tpl"}
	
<!-- START CONTENT -->
	<div id="content">
		{literal}
			<script type="text/javascript" language="JavaScript">
			function checkForm() {
			answer = true;
			if (siw && siw.selectingSomething)
				answer = false;
			return answer;
			}//
			</script>
		{/literal}
		
		{checkActionsTpl location="tpl_pligg_banner_top"}
		
		{include file=$tpl_header.".tpl"}
		
		<center style="margin: -5px 0px 5px 0px;">
			{include file="templates/".$the_template"/_ad_banner_top.tpl"}
		</center>
    
<!-- START LEFT COLUMN -->
	{if $pagename eq "submit"}
		<div id="leftcol-superwide">
	{elseif $pagename neq "story" && $pagename neq "user" && $pagename neq "profile" && $pagename neq "login" && $pagename neq "register" && $pagename neq "edit"}
		<div id="leftcol-wide">
	{else}
		<div id="leftcol-wide">
	{/if}
	
		{include file="templates/".$the_template"/page_title.tpl"}
		
		<div style="float: right; margin: 0px 0px 5px 5px;">
			{include file="templates/".$the_template"/_ad_center_right.tpl"}
		</div>
		
		<div style="float: left; margin: 0px 5px 5px 0px;">
			{include file="templates/".$the_template"/_ad_center_left.tpl"}
		</div>
		
		{if $pagename eq "group_story"}
			<div id="group_navbar"></div>
		{/if}
		
		{checkActionsTpl location="tpl_pligg_content_start"}
			{checkActionsTpl location="tpl_pligg_above_center"}
			{include file=$tpl_center.".tpl"}
			{checkActionsTpl location="tpl_pligg_below_center"}
		{checkActionsTpl location="tpl_pligg_content_end"}
		
		</div>
<!-- END LEFT COLUMN -->
{checkActionsTpl location="tpl_pligg_columns_start"}	
	{*if $pagename neq "story" && $pagename neq "submit" && $pagename neq "user" && $pagename neq "profile" && $pagename neq "login" && $pagename neq "register" && $pagename neq "edit"}
		<div id="midcol">
			{include file=$tpl_second_sidebar.".tpl"}
		</div>
	{/if*}
	
	{if $pagename neq "submit"}
		<div id="rightcol">
			{include file=$tpl_right_sidebar.".tpl"}
			{include file=$tpl_second_sidebar.".tpl"}
      <!--将新故事功能暂时不启用
                <p id="want-to-submit">
                  <a href="/submit.php"><span>讲新故事</span></a>
              </p>
              -->
      <p id="back-top">
        <a href="#top"><span></span></a>
      </p>
		</div>
	{/if}	
	
	<center style="clear: both; padding-top: 10px; margin-bottom: -10px;">
		{include file="templates/".$the_template"/_ad_banner_footer.tpl"}
	</center>

	{checkActionsTpl location="tpl_pligg_banner_bottom"}
	
	{include file=$tpl_footer.".tpl"}
	</div>
<!-- END CONTENT --> 
  <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=1825862" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
	<script src="{$my_pligg_base}/templates/xmlhttp.php" type="text/javascript"></script> {* this line HAS to be towards the END of pligg.tpl *}
	{checkActionsTpl location="tpl_pligg_body_end"}
	
<!-- meirixiaohua.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");

document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0b830d900374b9c3cabf48cc2c7b03e7' type='text/javascript'%3E%3C/script%3E"));

</script>
</body>
</html>
