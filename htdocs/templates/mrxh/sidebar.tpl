﻿{if $pagename eq "story"}<br />{/if}

{if $pagename neq "submit"}
	{checkActionsTpl location="tpl_pligg_sidebar2_start"}
		{if $pagename eq "user"}
			<div class="headline">
				<div class="actiontitle"><a href="{$user_url_personal_data}">{$user_login} 的{#PLIGG_Visual_Profile#}</a></div>
			</div>

			<div id="navcontainer">
				<ul id="navlist">
					{checkActionsTpl location="tpl_pligg_profile_sort_start"}
					<li><a href="{$user_url_personal_data}" class="navbut{$nav_pd}"><span>{#PLIGG_Visual_User_PersonalData#}</span></a></li>
					{if $user_login eq $user_logged_in}
					<li><a href="{$user_url_setting}" class="navbut{$nav_set}"><span>{#PLIGG_Visual_User_Setting#}</span></a></li>
					{/if}
					<li><a href="{$user_url_news_sent}" class="navbut{$nav_ns}"><span>{#PLIGG_Visual_User_NewsSent#}</span></a></li>
					<li><a href="{$user_url_news_published}" class="navbut{$nav_np}"><span>{#PLIGG_Visual_User_NewsPublished#}</span></a></li>
					<li><a href="{$user_url_news_unpublished}" class="navbut{$nav_nu}"><span>{#PLIGG_Visual_User_NewsUnPublished#}</span></a></li>
					<li><a href="{$user_url_commented}" class="navbut{$nav_c}"><span>{#PLIGG_Visual_User_NewsCommented#}</span></a></li>
					<li><a href="{$user_url_news_voted}" class="navbut{$nav_nv}"><span>{#PLIGG_Visual_User_NewsVoted#}</span></a></li>
					<li><a href="{$user_url_saved}" class="navbut{$nav_s}"><span>{#PLIGG_Visual_User_NewsSaved#}</span></a></li>
					{checkActionsTpl location="tpl_pligg_profile_sort_end"}
				</ul>
			</div>
		{/if}
                 {checkActionsTpl location="tpl_pligg_sidebar_middle"}
	<!-- START ABOUT -->
		{*assign var=sidebar_module value="about_box"}
		{include file=$the_template_sidebar_modules."/wrapper.tpl"*}
	<!-- END ABOUT -->

	{checkActionsTpl location="tpl_pligg_sidebar2_end"}
	<br />
{/if}