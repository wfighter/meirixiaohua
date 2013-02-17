
<ul data-role="listview" >
{$the_story}
</ul>
<br/>
{checkActionsTpl location="tpl_pligg_story_who_voted_start"}
<div data-role="collapsible">
	<h3>{#PLIGG_Visual_Story_WhoVoted#}</h3>
	<div class="whovotedwrapper" id="idwhovotedwrapper">
		<ul data-role="listview" data-inset="true">
			{section name=nr loop=$voter}
				<li>
					<a href = "{$URL_user, $voter[nr].user_login}">{if $UseAvatars neq "0"}<img src="{$voter[nr].Avatar_ImgSrc}" alt="Avatar" class="ui-li-icon">{/if} 
					{$voter[nr].user_login}</a>
				</li>
			{/section}
		</ul>
	</div>
</div>
{checkActionsTpl location="tpl_pligg_story_who_voted_end"}

{if count($related_story) neq 0}
{checkActionsTpl location="tpl_pligg_story_related_start"}
<div id="related">
	<h2>{#PLIGG_Visual_Story_RelatedStory#}</h2>	
	<ol>
		{section name=nr loop=$related_story}
			<li><a href = "{$related_story[nr].url}">{$related_story[nr].link_title}</a><br/></li> 
		{/section}
	</ol>
</div>
{checkActionsTpl location="tpl_pligg_story_related_end"}
{/if}

{checkActionsTpl location="tpl_pligg_story_comments_start"}
<div id="comments">
	<form action="" method="post" id="thisform" target="_self">
		<div data-role="collapsible">
			<h3>{#PLIGG_Visual_Story_Comments#}</h3>
				{checkActionsTpl location="tpl_pligg_story_comments_individual_start"}
					{$the_comments}
				{checkActionsTpl location="tpl_pligg_story_comments_individual_end"}
				
				{if $user_authenticated eq ""}
					{checkActionsTpl location="anonymous_comment_form"}
						<div align="center" class="login_to_comment">
							<a href="{$login_url}">{#PLIGG_Visual_Story_LoginToComment#}</a> {#PLIGG_Visual_Story_Register#} <a href="{$register_url}">{#PLIGG_Visual_Story_RegisterHere#}</a>.
						</div>
				{/if}
		</div>
		{if $user_authenticated neq ""}
			{include file=$the_template."/comment_form.tpl"}			
		{/if}
	</form>
</div>
{checkActionsTpl location="tpl_pligg_story_comments_end"}
