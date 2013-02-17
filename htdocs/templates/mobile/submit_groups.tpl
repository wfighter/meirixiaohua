<!-- START SUBMIT_GROUPS.TPL -->
{if $enable_group eq "true" && $group_allow eq 1}
<div class="headline">
	{if $error}
		<div class="error">{$error}</div>
	{/if}
	<form action="{$URL_submit_groups}" method="post" name="thisform" id="thisform" enctype="multipart/form-data">
		{$hidden_token_submit_group}
		<div data-role="fieldcontain">
			<label for="group_title">{#PLIGG_Visual_Submit_Group_Title#}:</label>{#PLIGG_Visual_Group_Submit_TitleInstruction#}
			<input type="text" id="group_title" name="group_title" value="{$templatelite.post.group_title}" maxlength="60" />
		</div>
		<div data-role="fieldcontain">
			<label for="group_description">{#PLIGG_Visual_Submit_Group_Description#}:</label>{#PLIGG_Visual_Group_Submit_DescriptionInstruction#}
			<textarea name="group_description" rows="10" cols="60" maxlength="600" id="group_description" >{$templatelite.post.group_description}</textarea>
		</div>
		
		<div data-role="fieldcontain">
			<label for="group_privacy">{#PLIGG_Visual_Submit_Group_Privacy#}:</label>
			<select name="group_privacy" id="group_privacy" data-native-menu="false" onchange="document.getElementById('group_email').style.display=this.selectedIndex==0 ? 'none' : 'block';">
				<option value = "public" {if $templatelite.post.group_privacy=='public'}selected{/if}>{#PLIGG_Visual_Submit_Group_Public#}</option>
				<option value = "private" {if $templatelite.post.group_privacy=='private'}selected{/if}>{#PLIGG_Visual_Submit_Group_Private#}</option>
				<option value = "restricted" {if $templatelite.post.group_privacy=='restricted'}selected{/if}>{#PLIGG_Visual_Submit_Group_Restricted#}</option>
			</select>
		</div>
		
		<div data-role="collapsible">
			<h3>Privacy Instruction</h3>
			{#PLIGG_Visual_Group_Submit_PrivacyInstruction#}
		</div>	
			
		<div data-role="fieldcontain" id='group_email' {if $templatelite.post.group_privacy=='public' || $templatelite.post.group_privacy==''}style="display:none;"{/if}>
			<input type="checkbox" id="group_notify_email" name="group_notify_email" value="1" {if $templatelite.post.group_notify_email}checked{/if}> 
			<label for="group_notify_email">{#PLIGG_Visual_Submit_Group_Notify#}</label>
		</div>
			
		<div data-role="fieldcontain">
			<label for="group_mailer">{#PLIGG_Visual_Submit_Group_Mail_Friends#}:</label>
			{#PLIGG_Visual_Group_Submit_Mail_Friends_Desc#}
			<textarea type="text" id="group_mailer" rows="4" cols="60" name="group_mailer" >{$templatelite.post.group_mailer}</textarea>
		</div>
		
		<div data-role="fieldcontain">
			<label for="group_vote_to_publish">{#PLIGG_Visual_Submit_Group_vote_to_publish#}:</label>{#PLIGG_Visual_Group_Submit_NoOfVoteInstruction#}
			<input type="tel" id="group_vote_to_publish" name="group_vote_to_publish" value="{$templatelite.post.group_vote_to_publish}">
		</div>
		
		<input type="submit" value="{#PLIGG_Visual_Submit_Group_create#}" class="submit" />
	</form>
</div>

{else}
	{#PLIGG_Visual_Group_Disabled#}
{/if}
<!-- END SUBMIT_GROUPS.TPL -->