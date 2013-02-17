{if $pagename eq "story"}<br />{/if}

{if $pagename neq "submit"}
	{checkActionsTpl location="tpl_pligg_sidebar2_start"}
		{if $pagename eq "user"}
			<div data-role="collapsible">
				<h3>{#PLIGG_Visual_Profile#}</h3>		
					<ul data-role="listview" data-inset="true" >
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
	
	
	<!-- END ABOUT -->

	<!-- START LINKS -->
	<!-- END LINKS -->

	{checkActionsTpl location="tpl_pligg_sidebar2_end"}
	<br />
{/if}