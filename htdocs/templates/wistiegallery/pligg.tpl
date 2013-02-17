<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="{#PLIGG_Visual_Language_Direction#}" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        {checkActionsTpl location="tpl_pligg_head_start"}
        {include file="meta.tpl"}

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
        {checkForJs}

        {if $pagename neq "published" && $pagename neq "upcoming"}
                {if $Spell_Checker eq 1}
                        <script src="{$my_pligg_base}/3rdparty/speller/spellChecker.js" type="text/javascript"></script>
                {/if}
        {/if}

        {if preg_match('/index.php$/',$templatelite.server.SCRIPT_NAME)}
                {if $templatelite.get.category}
                        {if $templatelite.get.page>1}
                                <title>{$navbar_where.text2} | {#PLIGG_Page_Title#} {$templatelite.get.page} | {#PLIGG_Visual_Breadcrumb_Published_Tab#} | {#PLIGG_Visual_Name#}</title>
                        {else}
                                <title>{$navbar_where.text2} | {#PLIGG_Visual_Breadcrumb_Published_Tab#} | {#PLIGG_Visual_Name#}</title>
                        {/if}
                {elseif $templatelite.get.page>1}
                        <title>{#PLIGG_Visual_Breadcrumb_Published_Tab#} | {#PLIGG_Page_Title#} {$templatelite.get.page} | {#PLIGG_Visual_Name#}</title>
                {else}
                        <title>{#PLIGG_Visual_Name#} - {#PLIGG_Visual_RSS_Description#}</title>
                {/if}
        {elseif preg_match('/upcoming.php$/',$templatelite.server.SCRIPT_NAME)}
                {if $templatelite.get.category}
                        {if $templatelite.get.page>1}
                                <title>{$navbar_where.text2} | {#PLIGG_Page_Title#} {$templatelite.get.page} | {#PLIGG_Visual_Breadcrumb_Unpublished_Tab#} | {#PLIGG_Visual_Name#}</title>
                        {else}
                                <title>{$navbar_where.text2} | {#PLIGG_Visual_Breadcrumb_Unpublished_Tab#} | {#PLIGG_Visual_Name#}</title>
                        {/if}
                {elseif $templatelite.get.page>1}
                        <title>{#PLIGG_Visual_Breadcrumb_Unpublished_Tab#} | {#PLIGG_Page_Title#} {$templatelite.get.page} | {#PLIGG_Visual_Name#}</title>
                {else}
                        <title>{#PLIGG_Visual_Breadcrumb_Unpublished_Tab#} | {#PLIGG_Visual_Name#}</title>
                {/if}
        {elseif preg_match('/submit.php$/',$templatelite.server.SCRIPT_NAME)}
                <title>{#PLIGG_Visual_Submit#} | {#PLIGG_Visual_Name#}</title>
        {elseif preg_match('/search.php$/',$templatelite.server.SCRIPT_NAME)}
                <title>{#PLIGG_Visual_Search_SearchResults#} '{$templatelite.get.search}' | {#PLIGG_Visual_Name#}</title>
        {elseif preg_match('/groups.php$/',$templatelite.server.SCRIPT_NAME)}
                {if $templatelite.get.page>1}
                        <title>{#PLIGG_Visual_Groups#} | {#PLIGG_Page_Title#} {$templatelite.get.page} | {#PLIGG_Visual_Name#}</title>
                {else}
                        <title>{#PLIGG_Visual_Groups#} | {#PLIGG_Visual_Name#}</title>
                {/if}
        {elseif preg_match('/group_story.php$/',$templatelite.server.SCRIPT_NAME)}
                {if $groupview!='published'}
                        {if $groupview eq "upcoming"}
                                {assign var='tview' value=#PLIGG_Visual_Group_Upcoming#}
                        {elseif $groupview eq "shared"}
                                {assign var='tview' value=#PLIGG_Visual_Group_Shared#}
                        {elseif $groupview eq "members"}
                                {assign var='tview' value=#PLIGG_Visual_Group_Member#}
                        {/if}

                        {if $templatelite.get.page>1}
                                <title>{$group_name} | {if $templatelite.get.category}{$navbar_where.text2} | {/if}{$tview} | {#PLIGG_Page_Title#} {$templatelite.get.page} | {#PLIGG_Visual_Name#}</title>
                        {else}
                                <title>{$group_name} | {if $templatelite.get.category}{$navbar_where.text2} | {/if}{$tview} | {#PLIGG_Visual_Name#}</title>
                        {/if}
                {elseif $templatelite.get.page>1}
                        <title>{$group_name} | {#PLIGG_Page_Title#} {$templatelite.get.page} | {#PLIGG_Visual_Name#}</title>
                {else}
                        <title>{$group_name} - {$group_description} | {#PLIGG_Visual_Name#}</title>
                {/if}
        {else}
                <title>{$posttitle} | {$pretitle} {#PLIGG_Visual_Name#}</title>
        {/if}


        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="{$my_base_url}{$my_pligg_base}/rss.php"/>
        <link rel="icon" href="{$my_pligg_base}/favicon.ico" type="image/x-icon"/>

        {checkActionsTpl location="tpl_pligg_head_end"}
</head>
<body dir="{#PLIGG_Visual_Language_Direction#}" {$body_args}>
        {checkActionsTpl location="tpl_pligg_body_start"}

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

<!-- START LEFT COLUMN -->








        {if $pagename neq "story" && $pagename neq "user" && $pagename neq "profile" && $pagename neq "login" && $pagename neq "register"  && $pagename neq "submit"}
                <div id="leftcol">
        {else}
                <div id="leftcol-wide">
        {/if}

        <!-- TAG Cloud -->
{if $Enable_Tags} {assign var=sidebar_module value="tagstop"}{include file=$the_template_sidebar_modules."/wrapper.tpl"} {/if}
<!-- /TAG Cloud -->


<!-- START BREADCRUMBS -->
{if $pagename eq "submit_groups"}<h1>{#PLIGG_Visual_Submit_A_New_Group#}</h1>{/if}
{if $pagename eq "groups"}<h1>{#PLIGG_Visual_Groups#}</h1>{/if}
{if $pagename eq "group_story" }<h1>{$group_name}</h1>{/if}
{if $pagename eq "login"}<h1>{#PLIGG_Visual_Login#}</h1>{/if}
{if $pagename eq "register"}<h1>{#PLIGG_Visual_Register#}</h1>{/if}
{if $pagename eq "editlink"}<h1>{#PLIGG_Visual_EditStory_Header#}: {$submit_url_title}</h1>{/if}
{if $pagename eq "rssfeeds"}<h1>{#PLIGG_Visual_RSS_Feeds#}</h1>{/if}
{if $pagename eq "topusers"}<h1>{#PLIGG_Visual_TopUsers_Statistics#}</h1>{/if}
{if $pagename eq "cloud"}<h1>{#PLIGG_Visual_Tags_Tags#}</h1>{/if}
{if $pagename eq "live" || $pagename eq "live_unpublished" || $pagename eq "live_published" || $pagename eq "live_comments"}<h1>{#PLIGG_Visual_Live#}</h1>{/if}
{if $pagename eq "advancedsearch"}<h1>{#PLIGG_Visual_Search_Advanced#}</h1>{/if}
{if $pagename eq "profile"}<h1>{#PLIGG_Visual_Profile_ModifyProfile#}</h1>{/if}
{if $pagename eq "user"}<h1><span style="text-transform:capitalize">{$page_header}</span> <a href="{$user_rss, $view_href}" target="_blank"><img src="{$my_pligg_base}/templates/{$the_template}/images/rss.gif" style="margin-left:6px;border:0;"></a></h1>{/if}

{if $pagename eq "published" || $pagename eq "index"}<h1>{#PLIGG_Visual_Published_News#}{/if}
{if $pagename eq "upcoming"}<h1>{#PLIGG_Visual_Pligg_Queued#}{/if}
{if isset($templatelite.get.search)}<h1>{#PLIGG_Visual_Search_SearchResults#} {$templatelite.get.search|sanitize:2|stripslashes}{/if}
{if isset($templatelite.get.q)}<h1>{#PLIGG_Visual_Search_SearchResults#} {$templatelite.get.q|sanitize:2|stripslashes}{/if}
{if $pagename eq "index" || $pagename eq "published" || $pagename eq "upcoming" || isset($templatelite.get.search) || isset($templatelite.get.q)}
        {if isset($navbar_where.link2) && $navbar_where.link2 neq ""} &#187; <a href="{$navbar_where.link2}">{$navbar_where.text2}</a>{elseif isset($navbar_where.text2) && $navbar_where.text2 neq ""} &#187; {$navbar_where.text2}{/if}
        {if isset($navbar_where.link3) && $navbar_where.link3 neq ""} &#187; <a href="{$navbar_where.link3}">{$navbar_where.text3}</a>{elseif isset($navbar_where.text3) && $navbar_where.text3 neq ""} &#187; {$navbar_where.text3}{/if}
        {if isset($navbar_where.link4) && $navbar_where.link4 neq ""} &#187; <a href="{$navbar_where.link4}">{$navbar_where.text4}</a>{elseif isset($navbar_where.text4) && $navbar_where.text4 neq ""} &#187; {$navbar_where.text4}{/if}
        </h1>
{/if}
<!-- END BREADCRUMBS -->




                {if $pagename eq "group_story"}
                        <div id="group_navbar"></div>
                {/if}

                {checkActionsTpl location="tpl_pligg_content_start"}
                        {checkActionsTpl location="tpl_pligg_above_center"}
                        {include file=$tpl_center.".tpl"}
                        {checkActionsTpl location="tpl_pligg_below_center"}
                {checkActionsTpl location="tpl_pligg_content_end"}

                </div>
<!-- START MIDDLE COLUMN/Sidebar -->
				{if $pagename neq "submit"}
                <div id="midcol">
                        {include file=$tpl_second_sidebar.".tpl"}
                </div>
				{/if}
<!-- END MIDDLE COLUMN/Sidebar -->

        {checkActionsTpl location="tpl_pligg_banner_bottom"}

        {include file=$tpl_footer.".tpl"}
        </div>
<!-- END CONTENT -->
        <script src="{$my_pligg_base}/templates/xmlhttp.php" type="text/javascript"></script> {* this line HAS to be towards the END of pligg.tpl *}
        {checkActionsTpl location="tpl_pligg_body_end"}


<!-- meirixiaohua.com Baidu tongji analytics -->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0b830d900374b9c3cabf48cc2c7b03e7' type='text/javascript'%3E%3C/script%3E"));
</script>


</body>
</html>