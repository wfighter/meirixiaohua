  {checkActionsTpl location="tpl_pligg_register_start"}
<div class="leftwrapper">

<div class="register-left">
<form action="{$URL_register}" method="post" id="thisform">
	<div class="heading-inline">{#PLIGG_Visual_Register#}</div>
	<div data-role="fieldcontain">
		<label class="ui-input-text" for="reg_username"><strong>{#PLIGG_Visual_Register_Username#}:</strong></label>			
		<input type="text" name="reg_username" id="reg_username" value="{if isset($reg_username)}{$reg_username}{/if}" tabindex="10" maxlength="32"/>
	</div>
	{if isset($form_username_error)}{ foreach value=error from=$form_username_error }<div class="error">{$error}</div><br />{ /foreach }
	{else}<span id="reg_usernamecheckitvalue">&nbsp;</span>
	{/if}
	
	<div data-role="fieldcontain">
			<label for="reg_email"><strong>{#PLIGG_Visual_Register_Email#}:</strong>{#PLIGG_Visual_Register_Lowercase#}</label>			
			<input type="email" id="reg_email" name="reg_email" value="{if isset($reg_email)}{$reg_email}{/if}" tabindex="12"/>
	</div>
	{if isset($form_email_error)}{ foreach value=error from=$form_email_error }<br /><div class="error">{$error}</div><br />{ /foreach }
	{else}<span id="reg_emailcheckitvalue">&nbsp;</span>
	{/if}	
	
	<div data-role="fieldcontain">
		<label for="reg_password"><strong>{#PLIGG_Visual_Register_Password#}:</strong>{#PLIGG_Visual_Register_FiveChar#}</label>			
		<input type="password" id="reg_password" name="reg_password" value="{if isset($reg_password)}{$reg_password}{/if}" tabindex="14"/>
		{if isset($form_password_error)}{ foreach value=error from=$form_password_error }<br /><div class="error 1">{$error}</div><br />{ /foreach }{/if}	
	</div>
	
	<div data-role="fieldcontain">
		<label for="reg_verify"><strong>{#PLIGG_Visual_Register_Verify_Password#}:</strong></label>	
		<input type="password" id="reg_verify" name="reg_password2" value="{if isset($reg_password2)}{$reg_password2}{/if}" tabindex="15"/>
	</div>

	{if isset($register_step_1_extra)}
		{$register_step_1_extra}
	{/if}
	
	<input type="submit" name="submit" value="{#PLIGG_Visual_Register_Create_User#}" tabindex="16" />
	<input type="hidden" name="regfrom" value="full"/>
</form>
</div>

<div data-role="collapsible">
	<h3>{#PLIGG_Visual_Register_Description_Title#}</h3>
	{#PLIGG_Visual_Register_Description_Paragraph#}
	<ul>
		{#PLIGG_Visual_Register_Description_Points#}
	</ul>
</div>

</div>
    {checkActionsTpl location="tpl_pligg_register_end"}