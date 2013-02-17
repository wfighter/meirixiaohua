<div data-role="fieldcontain">
	{checkActionsTpl location="tpl_widget_categories_start"}
	
	<label for="select-choice-category" class="select">Select a category:</label>
	<select name="select-choice-category" id="select-choice-category" data-native-menu="false">
		{section name=thecat loop=$cat_array}
			<option value = "{if $pagename eq "upcoming" || $groupview eq "upcoming"}{$URL_queuedcategory, $cat_array[thecat].safename}{else}{$URL_maincategory, $cat_array[thecat].safename}{/if}{php}
				global $URLMethod;
				if ($URLMethod==2) print "/";
				{/php}"

				{if $request_category eq $cat_array[thecat].safename}selected="selected"{/if}>
				{if $cat_array[thecat].spacercount lt $submit_lastspacer}{$cat_array[thecat].spacerdiff|repeat_count:''}{/if}
				{if $cat_array[thecat].spacercount gt $submit_lastspacer}{/if}
				{$cat_array[thecat].spacercount|repeat_count:'&nbsp;&nbsp;&nbsp;'}
				{$cat_array[thecat].name}
				&nbsp;&nbsp;&nbsp;
				{assign var=submit_lastspacer value=$cat_array[thecat].spacercount}
			</option>
		{/section}				
	</select>
	{checkActionsTpl location="tpl_widget_categories_end"}
</div>