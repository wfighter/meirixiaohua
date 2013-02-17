{if $is_group_admin eq '1'}
	<div id="group_container">
		<div class="ui-grid-a">
			<div class="ui-block-a">
				<img src="{$imgsrc}" alt="group_avatar" />
			</div>
			<div class="ui-block-b">
				<img src="{$my_base_url}{$my_pligg_base}/templates/{$the_template}/images/folder_images.gif" />&nbsp;<a style="text-decoration:none;font-weight:bold;left:4px;top:-3px;" href="javascript://" onclick="var replydisplay=document.getElementById('image_upload-1').style.display ? '' : 'none';document.getElementById('image_upload-1').style.display = replydisplay;">{#PLIGG_Visual_Group_Avatar_Upload#}</a>
			</div>
		</div>
		
		{if $is_group_admin eq '1'}
				{if $Avatar_uploaded neq ''}<br/><span class="success"><img src="{$my_base_url}{$my_pligg_base}/templates/{$the_template}/images/green_check.gif"/>{$Avatar_uploaded}</span>{/if}	
				<span id = "image_upload-1" style="display:none;">
					<fieldset><legend>{#PLIGG_Visual_Profile_UploadAvatar2#}:</legend>
						<form method="POST" enctype="multipart/form-data" name="image_upload_form" action="{$edit_form_action}">
							{$hidden_token_edit_group}
							<input type="file" name="image_file" size="20">
							<input type="hidden" name="idname" value="{$group_id}"/>
							<input type="hidden" name="avatar" value="uploaded"/>
							<input type="hidden" name="avatarsource" value="useruploaded">
							<button type="submit" value="{#PLIGG_Visual_Profile_AvatarUpload#}" name="action" class="submit"><span class="round"><span>{#PLIGG_Visual_Profile_AvatarUpload#}</span></span></button><br>
						</form> 
					</fieldset>
				</span>
			{/if}
			
		<div id="group_right">
		{if $errors}<span class="problem">{$errors}</span>{/if}
		
		<form method="POST" enctype="multipart/form-data" name="image_upload_form" action="{$edit_form_action}">
			{$hidden_token_edit_group}
			<div data-role="fieldcontain">
				<label for="group_title">{#PLIGG_Visual_Submit_Group_Title#}:</label>
				<input type="text" name="group_title" id="group_title" value="{$group_name}" />
			</div>
			
			<div data-role="fieldcontain">
				<label for="group_description">{#PLIGG_Visual_Submit_Group_Description#}:</label>
				<textarea type="text" name="group_description" rows="6" cols="50" id="group_description">{$group_description}</textarea>
			</div>
			
			<div data-role="fieldcontain">
				<label for="group_privacy">{#PLIGG_Visual_Submit_Group_Privacy#}:</label>
					<select data-native-menu="false" id="group_privacy" name="group_privacy" onchange="document.getElementById('group_email').style.display=this.selectedIndex==0 ? 'none' : 'block';">
						<option {if $group_privacy eq 'public'}SELECTED{/if} value = "public">{#PLIGG_Visual_Submit_Group_Public#}</option>
						<option {if $group_privacy eq 'private'}SELECTED{/if} value = "private">{#PLIGG_Visual_Submit_Group_Private#}</option>
						<option {if $group_privacy eq 'restricted'}SELECTED{/if} value = "restricted">{#PLIGG_Visual_Submit_Group_Restricted#}</option>
					</select>
			</div>	
				
			<div data-role="fieldcontain" id='group_email' {if $group_privacy eq 'public'}style="display:none;"{/if}>
				<input type="checkbox" id="group_notify_email" name="group_notify_email" value="1" {if $group_notify_email}checked{/if}>			
				<label for="group_notify_email">{#PLIGG_Visual_Submit_Group_Notify#}</label>
			</div>
			
			<div data-role="fieldcontain">
				<label for="group_vote_to_publish">{#PLIGG_Visual_Submit_Group_vote_to_publish#}:</label>{#PLIGG_Visual_Group_Submit_NoOfVoteInstruction#}
				<input type="tel" id="group_vote_to_publish" name="group_vote_to_publish" value="{$group_vote_to_publish}">
			</div>
			
			<button type="submit" value="{#PLIGG_Visual_Group_Edit#}" name="action" class="submit"><span class="round"><span>{#PLIGG_Visual_Group_Edit#}</span></span></button><br>
		</form>
		
			
			
		</div>
	</div>
{else}
	{#PLIGG_Visual_Group_Admin_Error#}
{/if}