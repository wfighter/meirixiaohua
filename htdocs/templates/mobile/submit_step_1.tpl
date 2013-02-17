<div class="heading-inline">{#PLIGG_Visual_Submit1_Header#}</div>
			{checkActionsTpl location="tpl_pligg_submit_step1_start"}
			<p>{#PLIGG_Visual_Submit1_Instruct#}:</p>
		<div data-role="collapsible">
			<h3>Guidelines</h3>
			<ul data-role="listview" data-inset="true">
				{if #PLIGG_Visual_Submit1_Instruct_1A# ne ''}<li>{#PLIGG_Visual_Submit1_Instruct_1A#}: {#PLIGG_Visual_Submit1_Instruct_1B#}</li>{/if}
				{if #PLIGG_Visual_Submit1_Instruct_2A# ne ''}<li>{#PLIGG_Visual_Submit1_Instruct_2A#}: {#PLIGG_Visual_Submit1_Instruct_2B#}</li>{/if}
				{if #PLIGG_Visual_Submit1_Instruct_3A# ne ''}<li>{#PLIGG_Visual_Submit1_Instruct_3A#}: {#PLIGG_Visual_Submit1_Instruct_3B#}</li>{/if}
				{if #PLIGG_Visual_Submit1_Instruct_4A# ne ''}<li>{#PLIGG_Visual_Submit1_Instruct_4A#}: {#PLIGG_Visual_Submit1_Instruct_4B#}</li>{/if}
				{if #PLIGG_Visual_Submit1_Instruct_5A# ne ''}<li>{#PLIGG_Visual_Submit1_Instruct_5A#}: {#PLIGG_Visual_Submit1_Instruct_5B#}</li>{/if}
				{if #PLIGG_Visual_Submit1_Instruct_6A# ne ''}<li>{#PLIGG_Visual_Submit1_Instruct_6A#}: {#PLIGG_Visual_Submit1_Instruct_6B#}</li>{/if}
				{if #PLIGG_Visual_Submit1_Instruct_7A# ne ''}<li>{#PLIGG_Visual_Submit1_Instruct_7A#}: {#PLIGG_Visual_Submit1_Instruct_7B#}</li>{/if}
			</ul>
		</div>
			
			{checkActionsTpl location="tpl_pligg_submit_step1_middle"}
			
			<div class="heading-inline">{#PLIGG_Visual_Submit1_NewsSource#}</div>
			<form action="{$URL_submit}" method="post" id="thisform" data-ajax="false">
				<label for="url">{#PLIGG_Visual_Submit1_NewsURL#}:</label>
				<input type="text" name="url" id="url" value="http://" size="55" />
				
				{checkActionsTpl location="tpl_pligg_submit_step1_end"}
				
				<input type="hidden" name="phase" value=1>
				<input type="hidden" name="randkey" value="{$submit_rand}">
				<input type="hidden" name="id" value="c_1">
				<button id="submit-step-1" type="submit">{#PLIGG_Visual_Submit1_Continue#}</submit>
				<!-- input type="submit" value="{#PLIGG_Visual_Submit1_Continue#}" class="submit-s" /-->
			</form>
			{if $Submit_Require_A_URL neq 1}{#PLIGG_Visual_Submit_Editorial#}{/if}
