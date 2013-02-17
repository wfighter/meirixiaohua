<?php if (isMobile == 'true') : ?>
	{if isset($register_captcha_error)}<div class="error">{$register_captcha_error}</div>{/if}
	<div data-role="fieldcontain">
		<label for="security_code">{#PLIGG_Visual_Register_Enter_Number#}</label>				
		<img src="{$captcha_path}captchas/WhiteHat/CaptchaSecurityImages.php" />
		<input type="text" name="security_code" id="security_code"/>
		<input type="hidden" name="token" value="{$token_registration_captcha}"/>
	</div>
<?php else: ?>
	{if isset($register_captcha_error)}<br /><div class="error">{$register_captcha_error}</div><br />{/if}
	{#PLIGG_Visual_Register_Enter_Number#}<br />				
	<img src="{$captcha_path}captchas/WhiteHat/CaptchaSecurityImages.php" /><br /><br/>
	<input type="text" size="20" name="security_code" /><br /><br />
	<input type="hidden" name="token" value="{$token_registration_captcha}"/>
<?php endif; ?>