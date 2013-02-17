{checkActionsTpl location="tpl_pligg_story_comments_single_start"}
<li>    
	<h3>
		{#PLIGG_Visual_Comment_WrittenBy#} {if $is_anonymous}{#PLIGG_Visual_Comment_Manage_Unregistered#}{/if}<a href="{$user_view_url}">{$user_username}{if $user_rank neq ''} (#{$user_rank}){/if}</a>
	</h3>
	<p style="font-style:italic">{$comment_age} {#PLIGG_Visual_Comment_Ago#}<p>
	{if $comment_votes lt 0}
		<span id = "show_hide_comment_content-{$comment_id}"> <a href = "javascript://"  onclick="var replydisplay=document.getElementById('comment_content-{$comment_id}').style.display ? '' : 'none'; document.getElementById('comment_content-{$comment_id}').style.display = replydisplay;">{#PLIGG_Visual_Comment_Show_Hide#}</a></span>
	{/if}
    
    {if $isadmin}
		<a href="{$my_base_url}{$my_pligg_base}/admin/admin_users.php?mode=view&user={$user_userlogin}">{#PLIGG_Visual_Comment_Manage_User#}-{$user_userlogin}</a>
   	{/if}	
						 
	<p>
		{if $comment_votes gte 0} 
			{$comment_content}
		{else}
			<span id = "comment_content-{$comment_id}" style="display:none">{$comment_content}</span>
		{/if}
	</p>				
			
	{if $Enable_Comment_Voting eq 1}
		{if $comment_user_vote_count eq 0 && $current_userid neq $comment_author}
			<div class="ui-li-rate">
				<a href="javascript:{$link_shakebox_javascript_voten}" data-role="button" data-mini="true" data-icon="arrow-u" data-iconpos="notext"></a>
				<a id="cvote-{$comment_id}" style='text-decoration: none;' class="ui-rate">{$comment_votes}</a> 
				<a href="javascript:{$link_shakebox_javascript_votey}"data-role="button" data-mini="true" data-icon="arrow-d" data-iconpos="notext"></a>
			</div>
		{/if}
	{/if}
			
	<div>
		{if $comment_parent eq 0 && $current_userid neq 0} 
			<a data-role="button" data-inline="true" data-mini="true" href = "javascript://" onClick="var replydisplay=document.getElementById('reply-{$comment_id}').style.display ? '' : 'none'; document.getElementById('reply-{$comment_id}').style.display = replydisplay;">{#PLIGG_Visual_Comment_Reply#}</a>
		{/if}
		
		{if $hide_comment_edit neq 'yes'}
			{if $isadmin eq 1}
				<a data-role="button"  data-inline="true" data-mini="true" href="{$edit_comment_url}">{#PLIGG_Visual_Comment_Edit#}</a> | <a href="{$delete_comment_url}">{#PLIGG_Visual_Comment_Delete#}</a>
			{else}	  
				{if $user_username eq 'you'}
					<a data-role="button" data-inline="true" data-mini="true" href="{$edit_comment_url}">{#PLIGG_Visual_Comment_Edit#}</a> 
				{/if}
			{/if}
		{/if} 
	</div>
		
	{if $comment_parent eq 0 && $current_userid neq 0} 
	{* display comment form if replying to a comment *}
		<div id="reply-{$comment_id}" style="display:none;margin-top:10px;"> 
			<fieldset><legend>{#PLIGG_Visual_Comment_Send#}</legend>
				<label for="reply_comment_content-{$comment_id}">{#PLIGG_Visual_Comment_NoHTML#}</label>
				<textarea name="reply_comment_content[{$comment_id}]" id="reply_comment_content-{$comment_id}" rows="6" cols="95"/>{$TheComment}</textarea>
				{if $Spell_Checker eq 1}<input type="button" name="spelling" value="{#PLIGG_Visual_Check_Spelling#}" onClick="openSpellChecker('reply_comment_content-{$comment_id}');"/>{/if}
				<input type="submit" name="submit[{$comment_id}]" value="{#PLIGG_Visual_Comment_Submit#}" />
			</fieldset>
		</div>
	{/if}	

</li>
{checkActionsTpl location="tpl_pligg_story_comments_single_end"}
