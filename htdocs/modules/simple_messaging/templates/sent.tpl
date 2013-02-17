{include file="./modules/simple_messaging/templates/menu.tpl"}
{config_load file=$simple_messaging_lang_conf}

{literal}
<style type="text/css">
table { border-collapse:collapse; }
th {text-align:left;}
td { border-bottom:1px solid #eee;padding:3px 0 4px 0; }
</style>
{/literal}

{* table to display messages *}
<?php if (isMobile == 'true') : ?>
	<form name="bulk_moderate" action="{$my_pligg_base}/module.php?module=simple_messaging&view=sent&action=bulkmod" method="post"> 
		{if $msg_array neq ""}
			<div class="margin-top-twentypixel">
				<ul data-role="listview" data-theme="d" data-divider-theme="a">
					{section name=themessage loop=$msg_array}
						<li data-role="list-divider">{$msg_array[themessage].date}
							<div class="floatright"><input  type="checkbox" name="message[{$msg_array[themessage].id}]" id="message-{$msg_array[themessage].id}" value="delete" data-role="none"/></div>
						</li>
						<li>
							<a href="{$URL_simple_messaging_viewmsg}{$msg_array[themessage].id}">
								<h3>{$msg_array[themessage].sender_name}</h3>
								<p>								
									{$msg_array[themessage].title}
								</p>
							</a>
						</li>
					{/section}
				</ul>
			</div>
		{else}	
			<div class="heading2-inline margin-top-twentypixel">{#PLIGG_MESSAGING_No_Sent_Messages#}</div>
		{/if}
	
		{if $msg_array neq ""}
			<div data-role="fieldcontain">
				<input type="submit" name="submit" value="{#PLIGG_MESSAGING_Delete_Selected#}" class="log2" />
			</div>
		{/if}
	
	</form>
<?php else: ?>
	<form name="bulk_moderate" action="{$my_pligg_base}/module.php?module=simple_messaging&view=sent&action=bulkmod" method="post"> 
	<table class="listing">
		<tr><th style="width:25%">{#PLIGG_MESSAGING_To#}</th><th width="300px">{#PLIGG_MESSAGING_Subject#}</th><th style="width:125px">{#PLIGG_MESSAGING_Sent#}</th><th>{#PLIGG_MESSAGING_Delete#}</th></tr>
		
		{if $msg_array neq ""}
	
		{section name=themessage loop=$msg_array}
			<tr id="msg_row_{$msg_array[themessage].id}">
				<td><a href="{$my_pligg_base}/user.php?login={$msg_array[themessage].sender_name}">{$msg_array[themessage].sender_name}</a></td>
				<td>
					<a href="{$URL_simple_messaging_viewsentmsg}{$msg_array[themessage].id}">
						{$msg_array[themessage].title}
					</a>
				</td>
				<td>{$msg_array[themessage].date}</td>
				<td><input type="checkbox" name="message[{$msg_array[themessage].id}]" id="message-{$msg_array[themessage].id}" value="delete"></td>
			</tr>
		{/section}
		
		{else}
		
		<tr><td colspan="3"><div align="center"><br />{#PLIGG_MESSAGING_No_Sent_Messages#}</div></td></tr>
		
		{/if}
		
	
	</table>
	
		{if $msg_array neq ""}
		<br/>
		<p align="right"><input type="submit" name="submit" value="{#PLIGG_MESSAGING_Delete_Selected#}" class="log2" /></p>
		{/if}
	
	</form>
<?php endif; ?>

{config_load file=simple_messaging_pligg_lang_conf}