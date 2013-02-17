<div class="leftwrapper">
{checkActionsTpl location="tpl_login_top"}

<div data-role="collapsible">
<h3>{#PLIGG_Visual_Login_Login#}</h3>
<form id="thisform" method="post">
	<div>
	{#PLIGG_Visual_Login_Have_Account#}
	</div>
	<form action="{$URL_login}" method="post">	
		<div data-role="fieldcontain">
			<label for="username"><strong>{#PLIGG_Visual_Login_Username#}:</strong><br /></label>		
			<input type="text" name="username" id="username" value="{if isset($login_username)}{$login_username}{/if}" tabindex="10" />
		</div>
		<div data-role="fieldcontain">
			<label for="password"><strong>{#PLIGG_Visual_Login_Password#}:</strong></label>				
			<input type="password" name="password" id="password" tabindex="11" />
		</div>
		<input type="hidden" name="processlogin" value="1"/>
		<input type="hidden" name="return" value="{$get.return}"/>
		<div data-role="fieldcontain">
			<input type="checkbox" name="persistent" id="persistent" tabindex="12" /> <label for="persistent">{#PLIGG_Visual_Login_Remember#}</label>
			<input type="submit" value="{#PLIGG_Visual_Login_LoginButton#}" tabindex="13" />
		</div>
	</form>
</form>
</div>

<div data-role="collapsible">
<h3>{#PLIGG_Visual_Login_ForgottenPassword#}</h3>
<form action="{$URL_login}" id="thisform2" method="post">
		{#PLIGG_Visual_Login_EmailChangePass#}
		<div data-role="fieldcontain">
			<label for="email"><strong>{#PLIGG_Visual_Register_Email#}:</strong></label>			
			<input type="email" id="email" name="email" size="25" tabindex="14" id="forgot-email" value="" />
			<input type="submit" value="Submit" tabindex="15" />
		</div>		
		<input type="hidden" name="processlogin" value="3"/>
		<input type="hidden" name="return" value="{$get.return}"/>
</form>

</div>

<div data-role="collapsible">
<h3>{#PLIGG_Visual_Login_NewUsers#}</h3>
	{#PLIGG_Visual_Login_NewUsersA#}<a href="{$register_url}">{#PLIGG_Visual_Login_NewUsersB#}</a>{#PLIGG_Visual_Login_NewUsersC#}
</div>

	{if $errorMsg ne ""}
		<div class="errordiv">{$errorMsg}</div>
	{/if} 
{checkActionsTpl location="tpl_login_bottom"}
</div>