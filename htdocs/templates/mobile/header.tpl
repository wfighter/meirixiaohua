<!-- START HEADER.TPL -->
<div class="mpligg-header" data-role="header">
<div id="logo">
<a href="{$my_base_url}{$my_pligg_base}" >{#PLIGG_Visual_Name#}</a>
</div>

<div class="ui-btn-right-mp">
	{if $user_authenticated eq true}<a class="header-button" href="{$URL_userNoVar}">{$user_logged_in}</a> <a class="header-button" href="{$URL_logout}" data-role="button"  data-inline="true" data-mini="true"> {#PLIGG_Visual_Logout#}</a>{/if}
	
	{if $user_authenticated neq true}
		<a class="header-button" href='{$URL_register}'  data-role="button" data-inline="true" data-mini="true">{#PLIGG_Visual_Register#}</a> <a class="header-button" href='{$URL_login}'  data-role="button" data-inline="true" data-mini="true">{#PLIGG_Visual_Login_Title#}</a>
    {/if}
	{checkActionsTpl location="tpl_pligg_login_link"}
</div>

</div> <!-- data-role="header" -->

<script type="text/javascript">
{if !isset($searchboxtext)}
	{assign var=searchboxtext value=#PLIGG_Visual_Search_SearchDefaultText#}			
{/if}
var some_search='{$searchboxtext}';
</script>

<!-- START NAVBAR -->
<div data-role="navbar">
<ul id="nav">
	{checkActionsTpl location="tpl_pligg_navbar_start"}
	<li><a href='{$my_base_url}{$URL_base}' {if $pagename eq "published" || $pagename eq "index"}class="ui-btn-active"{/if}>{#PLIGG_Visual_Published_News#}</a></li>
	<li><a href="{$URL_upcoming}" {if $pagename eq "upcoming"}class="ui-btn-active"{/if}>{#PLIGG_Visual_Pligg_Queued#}</a></li>
	<li><a href="{$URL_submit}" {if $pagename eq "submit"}class="ui-btn-active"{/if}>{#PLIGG_Visual_Submit_A_New_Story#}</a></li>
	{if $enable_group eq "true"}	
		<li><a href="{$URL_groups}" {if $pagename eq "groups" || $pagename eq "submit_groups" || $pagename eq "group_story"}class="ui-btn-active"{/if}><span>{#PLIGG_Visual_Groups#}</span></a></li>
	{/if}	
	{if $user_authenticated eq true}<li><a href="{$URL_userNoVar}" {if $pagename eq "user"}class="ui-btn-active"{/if}><span>{#PLIGG_Visual_Profile#}</span></a></li>{/if}
	<!-- {if isset($isgod) && $isgod eq 1}<li><a href="{$URL_admin}"><span>{#PLIGG_Visual_Header_AdminPanel#}</span></a></li>{/if} -->
	{checkActionsTpl location="tpl_pligg_navbar_end"}
</ul>
</div>

<!-- CATEGORIES 
{assign var=sidebar_module value="categories"}{include file=$the_template_sidebar_modules."/wrapper.tpl"}
-->

<!-- END NAVBAR -->

<!-- START SEARCH -->
{if $pagename eq "index"}
<div class="heading3-inline">
	<form action="{$my_pligg_base}/search.php" method="get" name="thisform-search" id="thisform-search" {if $urlmethod==2}onsubmit='document.location.href="{$my_base_url}{$my_pligg_base}/search/"+this.search.value.replace(/\//g,"|").replace(/\?/g,"%3F"); return false;'{/if}>
		<input type="search" name="search" id="searchsite" value="{$searchboxtext}" onfocus="if(this.value == some_search) {ldelim}this.value = '';{rdelim}" onblur="if (this.value == '') {ldelim}this.value = some_search;{rdelim}"/>
	</form>
</div>
{/if}
<!-- END SEARCH -->

<!-- START RSS -->
<!--
<div class="rsslink">
	{if $URL_rss_page}
	<a href="{$URL_rss_page}" target="_blank">
		RSS &nbsp;<img src="{$my_pligg_base}/templates/{$the_template}/images/rss.gif" align="top" border="0" alt="RSS" />
	</a>
	{/if}
</div>
-->
<!-- END RSS -->

<!-- START BREADCRUMBS -->
{if $pagename eq "submit_groups"}<div class="heading2-inline">{#PLIGG_Visual_Submit_A_New_Group#}</div>{/if}
{if $pagename eq "groups"}<div class="heading2-inline">{#PLIGG_Visual_Groups#}</div>{/if}
{if $pagename eq "group_story" }<div class="heading2-inline">{$group_name}</div>{/if}
<!-- {if $pagename eq "login"}<h2>{#PLIGG_Visual_Login#}</h2>{/if} 
{if $pagename eq "register"}<h1>{#PLIGG_Visual_Register#}</h1>{/if} -->
{if $pagename eq "editlink"}<h1>{#PLIGG_Visual_EditStory_Header#}: {$submit_url_title}</h1>{/if}
{if $pagename eq "rssfeeds"}<h1>{#PLIGG_Visual_RSS_Feeds#}</h1>{/if}
{if $pagename eq "topusers"}<h1>{#PLIGG_Visual_TopUsers_Statistics#}</h1>{/if}
{if $pagename eq "cloud"}<h1>{#PLIGG_Visual_Tags_Tags#}</h1>{/if}
{if $pagename eq "live" || $pagename eq "live_unpublished" || $pagename eq "live_published" || $pagename eq "live_comments"}<h1>{#PLIGG_Visual_Live#}</h1>{/if}
{if $pagename eq "advancedsearch"}<h1>{#PLIGG_Visual_Search_Advanced#}</h1>{/if}
{if $pagename eq "profile"}<h1>{#PLIGG_Visual_Profile_ModifyProfile#}</h1>{/if}
{if $pagename eq "user"}<div class="heading2-inline"><a href="{$user_url_personal_data}"><span style="text-transform:capitalize">{$page_header}</span></a> <a href="{$user_rss, $view_href}" target="_blank"><img src="{$my_pligg_base}/templates/{$the_template}/images/rss.gif" style="margin-left:6px;border:0;"></a></div>{/if}

<!-- TITLE
{if $pagename eq "published" || $pagename eq "index"}<h2>{#PLIGG_Visual_Published_News#}{/if}
{if $pagename eq "upcoming"}<h1>{#PLIGG_Visual_Pligg_Queued#}{/if}
{if $pagename eq "noresults"}<h1>{$posttitle}
{elseif isset($get.search)}<h1>{#PLIGG_Visual_Search_SearchResults#} {if $get.search}{$get.search}{else}{$get.date}{/if}{/if}
{if isset($get.q)}<h1>{#PLIGG_Visual_Search_SearchResults#} {$get.q}{/if} 
{if $pagename eq "index" || $pagename eq "published" || $pagename eq "upcoming" || isset($get.search) || isset($get.q)}
	{if isset($navbar_where.link2) && $navbar_where.link2 neq ""} &#187; <a href="{$navbar_where.link2}">{$navbar_where.text2}</a>{elseif isset($navbar_where.text2) && $navbar_where.text2 neq ""} &#187; {$navbar_where.text2}{/if}
	{if isset($navbar_where.link3) && $navbar_where.link3 neq ""} &#187; <a href="{$navbar_where.link3}">{$navbar_where.text3}</a>{elseif isset($navbar_where.text3) && $navbar_where.text3 neq ""} &#187; {$navbar_where.text3}{/if}
	{if isset($navbar_where.link4) && $navbar_where.link4 neq ""} &#187; <a href="{$navbar_where.link4}">{$navbar_where.text4}</a>{elseif isset($navbar_where.text4) && $navbar_where.text4 neq ""} &#187; {$navbar_where.text4}{/if}
	</h2>
{/if}
-->
<!--
{php}
$today = getdate();
$d = $today[weekday];
$m = $today[month];
$md = $today[mday];
echo "$d $md $m"; 
{/php}
-->

{if $posttitle neq "" && $pagename eq "page"}<h2>{$posttitle}</h2>{/if}
<!-- END BREADCRUMBS -->

{checkActionsTpl location="tpl_pligg_breadcrumb_end"}
<!-- END HEADER.TPL -->