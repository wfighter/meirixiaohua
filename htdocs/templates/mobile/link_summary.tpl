{$the_template_sidebar_modules}



<li class="no-thump">
   
		
{checkActionsTpl location="tpl_pligg_story_start"}
	<div class="story-title">{checkActionsTpl location="tpl_pligg_story_title_start"}
	<span class="ui-li-count">
					{checkActionsTpl location="tpl_pligg_story_votebox_start"}
						<span class="votenumber">
							<a id="xvotes-{$link_shakebox_index}" href="javascript:{$link_shakebox_javascript_vote}">{$link_shakebox_votes}</a>
						</span>
						<span id="xvote-{$link_shakebox_index}">
							{if $link_shakebox_currentuser_votes eq 0 && $link_shakebox_currentuser_reports eq 0}
								<a href="javascript:{$link_shakebox_javascript_vote}">{#PLIGG_Visual_Vote_For_It#}</a>
							{else}
								{if $link_shakebox_currentuser_reports neq 0}
									<span>{#PLIGG_Visual_Vote_Report#}</span>
								{else}
									{if $pagename eq "user" && $user_logged_in neq $link_submitter}
										<a href="javascript:{$link_shakebox_javascript_unvote}">{#PLIGG_Visual_Unvote_For_It#}</a>
									{else}
										<span>{#PLIGG_Visual_Vote_Cast#}</span>
									{/if}	
								{/if}
							{/if}
						</span>
					{checkActionsTpl location="tpl_pligg_story_votebox_end"}
				</span>
		<h3>		

			{if $use_title_as_link eq true}
				{if $url_short neq "http://" && $url_short neq "://"}
					<a href="{$url}" {if $open_in_new_window eq true} target="_blank"{/if} {if $story_status neq "published"}rel="nofollow"{/if}>{$title_short}</a>
				{else}
					<a href="{$story_url}" {if $open_in_new_window eq true} target="_blank"{/if}>{$title_short}</a>
				{/if}
			 {else}
				{if $pagename eq "story" && $url_short neq "http://" && $url_short neq "://"}
					<a href="{$url}" {if $open_in_new_window eq true} target="_blank"{/if} {if $story_status neq "published"}rel="nofollow"{/if}>{$title_short}</a>
				{else} 
				  <a href="{$story_url}">{$title_short}</a>
				{/if}
			{/if}
		</h3>
			</div>
		
    <!-- not need for MRXH
		<p>
			{if $url_short neq "http://" && $url_short neq "://"}
				<a class="source" href="{$url}" {if $open_in_new_window eq true} target="_blank"{/if}  
					{if $story_status neq "published"}rel="nofollow"{/if}>				
						{$url_short|replace:'http://':''}				
				</a>
			{else}
				{$No_URL_Name}
			{/if}
		</p>
      not need for MRXH -->
    <div class="storycontent">
			<p class="comment-ago">{#PLIGG_Visual_LS_Posted_By#} <a href="{$submitter_profile_url}">{$link_submitter}{if $submitter_rank neq ''} (#{$submitter_rank}){/if}</a>{$link_submit_timeago} {#PLIGG_Visual_Comment_Ago#}</p>
			<!-- strong><a href="{$story_url}">Read more</a>		</strong-->
		
		{checkActionsTpl location="tpl_pligg_story_title_end"}				
	{checkActionsTpl location="tpl_link_summary_pre_story_content"}
	{if $pagename eq "story"}{checkActionsTpl location="tpl_pligg_story_body_start_full"}{else}{checkActionsTpl location="tpl_pligg_story_body_start"}{/if}

	{if $viewtype neq "short"}
      
			<p class="story-news">		
				{if $show_content neq 'FALSE'}
					{$story_content}
				{/if}
		{if $pagename eq "story"}
				{if $Enable_Extra_Field_1 eq 1}{if $link_field1 neq ""}<br/><b>{$Field_1_Title}:</b> {$link_field1}{/if}{/if}
				{if $Enable_Extra_Field_2 eq 1}{if $link_field2 neq ""}<br/><b>{$Field_2_Title}:</b> {$link_field2}{/if}{/if}
				{if $Enable_Extra_Field_3 eq 1}{if $link_field3 neq ""}<br/><b>{$Field_3_Title}:</b> {$link_field3}{/if}{/if}
				{if $Enable_Extra_Field_4 eq 1}{if $link_field4 neq ""}<br/><b>{$Field_4_Title}:</b> {$link_field4}{/if}{/if}
				{if $Enable_Extra_Field_5 eq 1}{if $link_field5 neq ""}<br/><b>{$Field_5_Title}:</b> {$link_field5}{/if}{/if}
				{if $Enable_Extra_Field_6 eq 1}{if $link_field6 neq ""}<br/><b>{$Field_6_Title}:</b> {$link_field6}{/if}{/if}
				{if $Enable_Extra_Field_7 eq 1}{if $link_field7 neq ""}<br/><b>{$Field_7_Title}:</b> {$link_field7}{/if}{/if}
				{if $Enable_Extra_Field_8 eq 1}{if $link_field8 neq ""}<br/><b>{$Field_8_Title}:</b> {$link_field8}{/if}{/if}
				{if $Enable_Extra_Field_9 eq 1}{if $link_field9 neq ""}<br/><b>{$Field_9_Title}:</b> {$link_field9}{/if}{/if}
				{if $Enable_Extra_Field_10 eq 1}{if $link_field10 neq ""}<br/><b>{$Field_10_Title}:</b> {$link_field10}{/if}{/if}
				{if $Enable_Extra_Field_11 eq 1}{if $link_field11 neq ""}<br/><b>{$Field_11_Title}:</b> {$link_field11}{/if}{/if}
				{if $Enable_Extra_Field_12 eq 1}{if $link_field12 neq ""}<br/><b>{$Field_12_Title}:</b> {$link_field12}{/if}{/if}
				{if $Enable_Extra_Field_13 eq 1}{if $link_field13 neq ""}<br/><b>{$Field_13_Title}:</b> {$link_field13}{/if}{/if}
				{if $Enable_Extra_Field_14 eq 1}{if $link_field14 neq ""}<br/><b>{$Field_14_Title}:</b> {$link_field14}{/if}{/if}
				{if $Enable_Extra_Field_15 eq 1}{if $link_field15 neq ""}<br/><b>{$Field_15_Title}:</b> {$link_field15}{/if}{/if} 		  			
		{/if}
      </p>

		{checkActionsTpl location="tpl_pligg_story_body_end"}
	{/if}


	{if $pagename eq "index" ||  $pagename eq "upcoming"}
		{if $Voting_Method eq 2}
				<h4 id="ls_title-{$link_shakebox_index}">
					<ul class='star-rating{$star_class}' id="xvotes-{$link_shakebox_index}">
						<li class="current-rating" style="width: {$link_rating_width}px;" id="xvote-{$link_shakebox_index}"></li>
						<span id="mnmc-{$link_shakebox_index}" {if $link_shakebox_currentuser_votes ne 0}style="display: none;"{/if}>
								<li><a href="javascript:{$link_shakebox_javascript_vote_1star}" class='one-star'>1</a></li>
								<li><a href="javascript:{$link_shakebox_javascript_vote_2star}" class='two-stars'>2</a></li>
								<li><a href="javascript:{$link_shakebox_javascript_vote_3star}" class='three-stars'>3</a></li>
								<li><a href="javascript:{$link_shakebox_javascript_vote_4star}" class='four-stars'>4</a></li>
								<li><a href="javascript:{$link_shakebox_javascript_vote_5star}" class='five-stars'>5</a></li>
						</span>
						<span id="mnmd-{$link_shakebox_index}" {if $link_shakebox_currentuser_votes eq 0}style="display: none;"{/if}>
								<li class='one-star-noh'>1</li>
								<li class='two-stars-noh'>2</li>
								<li class='three-stars-noh'>3</li>
								<li class='four-stars-noh'>4</li>
								<li class='five-stars-noh'>5</li>
						</span>
					</ul>
				</h4>
			{else}
	<span class="ui-li-count">
			{checkActionsTpl location="tpl_pligg_story_votebox_start"}
				<span class="votenumber">
					<a id="xvotes-{$link_shakebox_index}" href="javascript:{$link_shakebox_javascript_vote}">{$link_shakebox_votes}</a>
				</span>
						<span id="xvote-{$link_shakebox_index}">
					{if $link_shakebox_currentuser_votes eq 0 && $link_shakebox_currentuser_reports eq 0}
						<a href="javascript:{$link_shakebox_javascript_vote}">{#PLIGG_Visual_Vote_For_It#}</a>
					{else}
						{if $link_shakebox_currentuser_reports neq 0}
							<span>{#PLIGG_Visual_Vote_Report#}</span>
						{else}
							{if $pagename eq "user" && $user_logged_in neq $link_submitter}
								<a href="javascript:{$link_shakebox_javascript_unvote}">{#PLIGG_Visual_Unvote_For_It#}</a>
							{else}
								<span>{#PLIGG_Visual_Vote_Cast#}</span>
							{/if}	
						{/if}
					{/if}
				</span>
			{checkActionsTpl location="tpl_pligg_story_votebox_end"}
			</span>
		{/if}
		{/if}
    </div>
	
	
	<div class="storyfooter" style="display:none">
		<div class="floatleft subtext">
		{checkActionsTpl location="tpl_pligg_story_tools_start"}
		{if $pagename neq "story" && $pagename neq "submit"} <a href="{$story_url}">{#PLIGG_Visual_Read_More#}...</a>{/if}
	
		{checkActionsTpl location="tpl_pligg_story_tools_end"}
		
		
		</div>
		
		
		<div class="floatright subtext">
			<a href="{$category_url}">{$link_category}</a>
		 </div>
	</div>

	{checkActionsTpl location="tpl_link_summary_end"}

	</li><!-- Listview -->
{checkActionsTpl location="tpl_pligg_story_end"}
