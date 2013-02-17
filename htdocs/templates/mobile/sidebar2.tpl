{checkActionsTpl location="tpl_pligg_sidebar_start"}

	{if $pagename eq "published" || $pagename eq "index" || $pagename eq "upcoming" && $pagename neq "groups"}
	<!-- CATEGORIES -->
		{assign var=sidebar_module value="categories"}{include file=$the_template_sidebar_modules."/wrapper.tpl"}
	<!-- START SORT -->
		<div data-role="fieldcontain">
			<label for="select-choice-sort" class="select">{#PLIGG_Visual_Pligg_Queued_Sort#} {#PLIGG_Visual_TopUsers_TH_News#}:</label>
			<select name="select-choice-a" id="select-choice-sort" data-native-menu="false">
				{if $setmeka eq "" || $setmeka eq "recent"}<option selected="selected" value="{$index_url_recent}">{else}<option value="{$index_url_recent}">{/if}{#PLIGG_Visual_Recently_Pop#}</option>
				{if $setmeka eq "today"}<option selected="selected" value="{$index_url_today}">{else}<option value="{$index_url_today}">{/if}{#PLIGG_Visual_Top_Today#}</option>
				{if $setmeka eq "yesterday"}<option selected="selected" value="{$index_url_yesterday}">{else}<option value="{$index_url_yesterday}">{/if}{#PLIGG_Visual_Yesterday#}</option>
				{if $setmeka eq "week"}<option selected="selected" value="{$index_url_week}">{else}<option value="{$index_url_week}">{/if}{#PLIGG_Visual_This_Week#}</option>
				{if $setmeka eq "month"}<option selected="selected" value="{$index_url_month}">{else}<option value="{$index_url_month}">{/if}{#PLIGG_Visual_This_Month#}</option>
				{if $setmeka eq "year"}<option selected="selected" value="{$index_url_year}">{else}<option value="{$index_url_year}">{/if}{#PLIGG_Visual_This_Year#}</option>
				{if $setmeka eq "alltime"}<option selected="selected" value="{$index_url_alltime}">{else}<option value="{$index_url_alltime}">{/if}{#PLIGG_Visual_This_All#}</option>
			</select>
		</div>
	<!-- END SORT -->
	{/if}

	{if $pagename eq "groups"}
	<!-- START GROUP SORT -->
			{checkActionsTpl location="tpl_pligg_group_sort_start"}
			<div data-role="fieldcontain">
				<label for="select-choice-group">{#PLIGG_Visual_Group_Sort#}:</label>	
				<select name="select-choice-1" id="select-choice-group" data-native-menu="false">
				{if $sortby eq "members"}
					<option selected="selected"><{#PLIGG_Visual_Group_Sort_Members#}</option>
				{else} 
					<option value="{$group_url_members}">
						{#PLIGG_Visual_Group_Sort_Members#}
					</option>
				{/if}
				{if $sortby eq "name"}
					<option selected="selected">{#PLIGG_Visual_Group_Sort_Name#}</option> 
				{else}
					<option value="{$group_url_name}">
						{#PLIGG_Visual_Group_Sort_Name#}
					</option>
				{/if}
				{if $sortby eq "newest"}
					<option selected="selected">{#PLIGG_Visual_Group_Sort_Newest#}</option>
				{else}
					<option value="{$group_url_newest}">{#PLIGG_Visual_Group_Sort_Newest#}</option>
				{/if}
				{if $sortby eq "oldest"}
					<option selected="selected">{#PLIGG_Visual_Group_Sort_Oldest#}</option>
				{else}
					<option value="{$group_url_oldest}">{#PLIGG_Visual_Group_Sort_Oldest#}</option>
				{/if}
				{checkActionsTpl location="tpl_pligg_group_sort_end"}
			</select>
		</div>
	<!-- END GROUP SORT -->
	{/if}

	{if $pagename eq "group_story"}
	<!-- START GROUP SORT -->
		<div data-role="fieldcontain">
			<label for="story_tabs">{#PLIGG_Visual_Group_Sort#}:</label>
			<select name="select-choice-1" id="select-choice-story-tabs" data-native-menu="false">
					<option {if $groupview eq "published"} selected="selected"{/if} value="{$groupview_published}">{#PLIGG_Visual_Group_Published#}</option>
					<option {if $groupview eq "upcoming"} selected="selected"{/if} value="{$groupview_upcoming}">{#PLIGG_Visual_Group_Upcoming#}</option>
					<option {if $groupview eq "shared"} selected="selected"{/if} value="{$groupview_sharing}">{#PLIGG_Visual_Group_Shared#}</option>
					<option {if $groupview eq "members"} selected="selected"{/if} value="{$groupview_members}">{#PLIGG_Visual_Group_Member#}</option>
			</select>
		</div>
	<!-- END GROUP SORT -->
	{/if}
	
	{if $pagename eq "cloud"}
		<div class="headline">
			<div class="sectiontitle">{#PLIGG_Visual_Pligg_Queued_Sort#} {#PLIGG_Visual_Tags_Link_Summary#}</div>
		</div>
		<div id="navcontainer">
			<ul id="navlist">
				{section name=i start=0 loop=$count_range_values step=1}
					{if $templatelite.section.i.index eq $current_range}
						<li id="active"><a href="#"><span class="active">{$range_names[i]}</span></a></li>
					{else}	
						<li><a href="{$URL_tagcloud_range, $templatelite.section.i.index}"><span>{$range_names[i]}</span></a></li>
					{/if}
				{/section}
			</ul>   
		</div>
	{/if}

	{if $pagename eq "live" || $pagename eq "live_unpublished" || $pagename eq "live_published" || $pagename eq "live_comments"}
		<div class="headline">
			<div class="sectiontitle">{#PLIGG_Visual_Pligg_Queued_Sort#} {#PLIGG_Visual_Live#}</div>
		</div>
		<div id="navcontainer">
			<ul id="navlist">
				<li {if $pagename eq "live"}id="active"{/if}><a href="{$URL_live}"><span {if $pagename eq "live"}class="active"{/if}>{#PLIGG_Visual_Breadcrumb_All#}</span></a></li>
				<li {if $pagename eq "live_published"}id="active"{/if}><a href="{$URL_published}"><span {if $pagename eq "live_published"}class="active"{/if}>{#PLIGG_Visual_Breadcrumb_Published_Tab#}</span></a></li>
				<li {if $pagename eq "live_unpublished"}id="active"{/if}><a href="{$URL_unpublished}"><span {if $pagename eq "live_unpublished"}class="active"{/if}>{#PLIGG_Visual_Breadcrumb_Unpublished_Tab#}</span></a></li>
				<li {if $pagename eq "live_comments"}id="active"{/if}><a href="{$URL_comments}"><span {if $pagename eq "live_comments"}class="active"{/if}>{#PLIGG_Visual_Breadcrumb_Comments#}</span></a></li>
			</ul>
		</div>	
	{/if}

<!-- LOGIN	
{if $user_authenticated ne true} {assign var=sidebar_module value="login"}{include file=$the_template_sidebar_modules."/wrapper2.tpl"} {/if}
-->
<!-- TOP
{checkActionsTpl location="tpl_pligg_sidebar_stories_u"}
{checkActionsTpl location="tpl_pligg_sidebar_stories"}
{checkActionsTpl location="tpl_pligg_sidebar_comments"}
-->
<!-- TAG
{if $Enable_Tags} {assign var=sidebar_module value="tags"}{include file=$the_template_sidebar_modules."/wrapper.tpl"} {/if}
-->

{checkActionsTpl location="tpl_pligg_sidebar_end"}