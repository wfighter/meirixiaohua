{include file="./modules/simple_messaging/templates/menu.tpl"}

{config_load file=$simple_messaging_lang_conf}

{literal}
	<style type="text/css">
		table td { background:none }
		a img {border:0;}
		.label {color:#999999;font-weight:bold;}
	</style>
{/literal}

<?php if (isMobile == 'true') : ?>
	<div class="margin-top-twentypixel">
		<label>{#PLIGG_MESSAGING_From#}:</label> <a href="{$my_pligg_base}/user.php?login={$msg_array.sender_name}">{$msg_array.sender_name}</a><br/>
		<label>{#PLIGG_MESSAGING_Sent#}:</label>{$msg_array.date}<br/>
		<label>{#PLIGG_MESSAGING_Subject#}:</label> {$msg_array.title}<br/>
		<label>{#PLIGG_MESSAGING_Message#}:</label>{$msg_array.body}
	</div>
	
	<div class="margin-top-twentypixel">
		<ul data-role="listview" data-inset="true">
			<li><a href="{$URL_simple_messaging_reply}{$msg_id}"><img src="{$simple_messaging_path}images/reply.png"  class="ui-li-icon">{#PLIGG_MESSAGING_Reply#}</a> </li>
			<li><a href="{$URL_simple_messaging_delmsg}{$msg_id}"><img src="{$simple_messaging_path}images/delete.png"  class="ui-li-icon">{#PLIGG_MESSAGING_Delete#}</a></li>
			<li><a href="{$URL_simple_messaging_inbox}"><img src="{$simple_messaging_path}images/cross.png"  class="ui-li-icon">{#PLIGG_MESSAGING_Close#}</a></li>
		</ul>
	</div>
<?php else: ?>
	<p>
		<table style="border:none;" cellspacing="5">
			<tr>
				<td align="right" class="label">{#PLIGG_MESSAGING_From#}:</td><td> <a href="{$my_pligg_base}/user.php?login={$msg_array.sender_name}">{$msg_array.sender_name}</a></td>
			</tr>
			<tr>
				<td align="right" class="label">{#PLIGG_MESSAGING_Sent#}:</td><td>{$msg_array.date}</td>
			</tr>
			<tr>
				<td align="right" class="label">{#PLIGG_MESSAGING_Subject#}:</td><td> {$msg_array.title}</td>
			</tr>		
			<tr>
				<td align="right" VALIGN="top" class="label">{#PLIGG_MESSAGING_Message#}:</td><td>{$msg_array.body}</td>
			</tr>
		</table>
		
		<br />
		<hr />
		<br />
		<div align="center">
			<a href="{$URL_simple_messaging_reply}{$msg_id}"><img src="{$simple_messaging_path}images/reply.png" align="absmiddle" /></a> <a href="{$URL_simple_messaging_reply}{$msg_id}">{#PLIGG_MESSAGING_Reply#}</a> | 
			<a href="{$URL_simple_messaging_delmsg}{$msg_id}"><img src="{$simple_messaging_path}images/delete.png" align="absmiddle" /></a> <a href="{$URL_simple_messaging_delmsg}{$msg_id}">{#PLIGG_MESSAGING_Delete#}</a> | 
			<a href="{$URL_simple_messaging_inbox}"><img src="{$simple_messaging_path}images/cross.png" align="absmiddle" /></a> <a href="{$URL_simple_messaging_inbox}">{#PLIGG_MESSAGING_Close#}</a>
		</div>
	</p>
<?php endif; ?>

{config_load file=simple_messaging_pligg_lang_conf}
