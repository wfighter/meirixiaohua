{checkActionsTpl location="tpl_pligg_story_comments_submit_start"}
<div>
	<h3>{#PLIGG_Visual_Comment_Send#}</h3>	
	
	{if isset($register_step_1_extra)}
		{$register_step_1_extra}
	{/if}
	
	<div data-role="fieldcontain">
		<label for="comment_content">{#PLIGG_Visual_Comment_NoHTML#}</label>
		<textarea name="comment_content" id="comment_content" class="comment-form" rows="6" cols="95"/>{if isset($TheComment)}{$TheComment}{/if}</textarea>
	</div>

	{if $Spell_Checker eq 1}<input type="button" name="spelling" value="{#PLIGG_Visual_Check_Spelling#}" class="log2" onClick="openSpellChecker('comment_content');"/>{/if}

	<input type="hidden" name="process" value="newcomment" />
	<input type="hidden" name="randkey" value="{$randkey}" />
	<input type="hidden" name="link_id" value="{$link_id}" />
	<input type="hidden" name="user_id" value="{$user_id}" />
	<input type="submit" name="submit" value="{#PLIGG_Visual_Comment_Submit#}" class="log2" />
</div>
{checkActionsTpl location="tpl_pligg_story_comments_submit_end"}

