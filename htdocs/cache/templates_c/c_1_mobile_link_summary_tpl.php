<?php require_once('/data/home/hmu129119/htdocs/plugins/modifier.replace.php'); $this->register_modifier("replace", "tpl_modifier_replace");  require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-08 15:35:12 CST */ ?>

<?php echo $this->_vars['the_template_sidebar_modules']; ?>




<li class="no-thump">
   
		
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_start"), $this);?>
	<div class="story-title"><?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_title_start"), $this);?>
	<span class="ui-li-count">
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_votebox_start"), $this);?>
						<span class="votenumber">
							<a id="xvotes-<?php echo $this->_vars['link_shakebox_index']; ?>
" href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote']; ?>
"><?php echo $this->_vars['link_shakebox_votes']; ?>
</a>
						</span>
						<span id="xvote-<?php echo $this->_vars['link_shakebox_index']; ?>
">
							<?php if ($this->_vars['link_shakebox_currentuser_votes'] == 0 && $this->_vars['link_shakebox_currentuser_reports'] == 0): ?>
								<a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Vote_For_It']; ?>
</a>
							<?php else: ?>
								<?php if ($this->_vars['link_shakebox_currentuser_reports'] != 0): ?>
									<span><?php echo $this->_confs['PLIGG_Visual_Vote_Report']; ?>
</span>
								<?php else: ?>
									<?php if ($this->_vars['pagename'] == "user" && $this->_vars['user_logged_in'] != $this->_vars['link_submitter']): ?>
										<a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_unvote']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Unvote_For_It']; ?>
</a>
									<?php else: ?>
										<span><?php echo $this->_confs['PLIGG_Visual_Vote_Cast']; ?>
</span>
									<?php endif; ?>	
								<?php endif; ?>
							<?php endif; ?>
						</span>
					<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_votebox_end"), $this);?>
				</span>
		<h3>		

			<?php if ($this->_vars['use_title_as_link'] == true): ?>
				<?php if ($this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://"): ?>
					<a href="<?php echo $this->_vars['url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?> <?php if ($this->_vars['story_status'] != "published"): ?>rel="nofollow"<?php endif; ?>><?php echo $this->_vars['title_short']; ?>
</a>
				<?php else: ?>
					<a href="<?php echo $this->_vars['story_url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?>><?php echo $this->_vars['title_short']; ?>
</a>
				<?php endif; ?>
			 <?php else: ?>
				<?php if ($this->_vars['pagename'] == "story" && $this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://"): ?>
					<a href="<?php echo $this->_vars['url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?> <?php if ($this->_vars['story_status'] != "published"): ?>rel="nofollow"<?php endif; ?>><?php echo $this->_vars['title_short']; ?>
</a>
				<?php else: ?> 
				  <a href="<?php echo $this->_vars['story_url']; ?>
"><?php echo $this->_vars['title_short']; ?>
</a>
				<?php endif; ?>
			<?php endif; ?>
		</h3>
			</div>
		
    <!-- not need for MRXH
		<p>
			<?php if ($this->_vars['url_short'] != "http://" && $this->_vars['url_short'] != "://"): ?>
				<a class="source" href="<?php echo $this->_vars['url']; ?>
" <?php if ($this->_vars['open_in_new_window'] == true): ?> target="_blank"<?php endif; ?>  
					<?php if ($this->_vars['story_status'] != "published"): ?>rel="nofollow"<?php endif; ?>>				
						<?php echo $this->_run_modifier($this->_vars['url_short'], 'replace', 'plugin', 1, 'http://', ''); ?>
				
				</a>
			<?php else: ?>
				<?php echo $this->_vars['No_URL_Name']; ?>

			<?php endif; ?>
		</p>
      not need for MRXH -->
    <div class="storycontent">
			<p class="comment-ago"><?php echo $this->_confs['PLIGG_Visual_LS_Posted_By']; ?>
 <a href="<?php echo $this->_vars['submitter_profile_url']; ?>
"><?php echo $this->_vars['link_submitter'];  if ($this->_vars['submitter_rank'] != ''): ?> (#<?php echo $this->_vars['submitter_rank']; ?>
)<?php endif; ?></a><?php echo $this->_vars['link_submit_timeago']; ?>
 <?php echo $this->_confs['PLIGG_Visual_Comment_Ago']; ?>
</p>
			<!-- strong><a href="<?php echo $this->_vars['story_url']; ?>
">Read more</a>		</strong-->
		
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_title_end"), $this);?>				
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_link_summary_pre_story_content"), $this);?>
	<?php if ($this->_vars['pagename'] == "story"):  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_body_start_full"), $this); else:  echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_body_start"), $this); endif; ?>

	<?php if ($this->_vars['viewtype'] != "short"): ?>
      
			<p class="story-news">		
				<?php if ($this->_vars['show_content'] != 'FALSE'): ?>
					<?php echo $this->_vars['story_content']; ?>

				<?php endif; ?>
		<?php if ($this->_vars['pagename'] == "story"): ?>
				<?php if ($this->_vars['Enable_Extra_Field_1'] == 1):  if ($this->_vars['link_field1'] != ""): ?><br/><b><?php echo $this->_vars['Field_1_Title']; ?>
:</b> <?php echo $this->_vars['link_field1'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_2'] == 1):  if ($this->_vars['link_field2'] != ""): ?><br/><b><?php echo $this->_vars['Field_2_Title']; ?>
:</b> <?php echo $this->_vars['link_field2'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_3'] == 1):  if ($this->_vars['link_field3'] != ""): ?><br/><b><?php echo $this->_vars['Field_3_Title']; ?>
:</b> <?php echo $this->_vars['link_field3'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_4'] == 1):  if ($this->_vars['link_field4'] != ""): ?><br/><b><?php echo $this->_vars['Field_4_Title']; ?>
:</b> <?php echo $this->_vars['link_field4'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_5'] == 1):  if ($this->_vars['link_field5'] != ""): ?><br/><b><?php echo $this->_vars['Field_5_Title']; ?>
:</b> <?php echo $this->_vars['link_field5'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_6'] == 1):  if ($this->_vars['link_field6'] != ""): ?><br/><b><?php echo $this->_vars['Field_6_Title']; ?>
:</b> <?php echo $this->_vars['link_field6'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_7'] == 1):  if ($this->_vars['link_field7'] != ""): ?><br/><b><?php echo $this->_vars['Field_7_Title']; ?>
:</b> <?php echo $this->_vars['link_field7'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_8'] == 1):  if ($this->_vars['link_field8'] != ""): ?><br/><b><?php echo $this->_vars['Field_8_Title']; ?>
:</b> <?php echo $this->_vars['link_field8'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_9'] == 1):  if ($this->_vars['link_field9'] != ""): ?><br/><b><?php echo $this->_vars['Field_9_Title']; ?>
:</b> <?php echo $this->_vars['link_field9'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_10'] == 1):  if ($this->_vars['link_field10'] != ""): ?><br/><b><?php echo $this->_vars['Field_10_Title']; ?>
:</b> <?php echo $this->_vars['link_field10'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_11'] == 1):  if ($this->_vars['link_field11'] != ""): ?><br/><b><?php echo $this->_vars['Field_11_Title']; ?>
:</b> <?php echo $this->_vars['link_field11'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_12'] == 1):  if ($this->_vars['link_field12'] != ""): ?><br/><b><?php echo $this->_vars['Field_12_Title']; ?>
:</b> <?php echo $this->_vars['link_field12'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_13'] == 1):  if ($this->_vars['link_field13'] != ""): ?><br/><b><?php echo $this->_vars['Field_13_Title']; ?>
:</b> <?php echo $this->_vars['link_field13'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_14'] == 1):  if ($this->_vars['link_field14'] != ""): ?><br/><b><?php echo $this->_vars['Field_14_Title']; ?>
:</b> <?php echo $this->_vars['link_field14'];  endif;  endif; ?>
				<?php if ($this->_vars['Enable_Extra_Field_15'] == 1):  if ($this->_vars['link_field15'] != ""): ?><br/><b><?php echo $this->_vars['Field_15_Title']; ?>
:</b> <?php echo $this->_vars['link_field15'];  endif;  endif; ?> 		  			
		<?php endif; ?>
      </p>

		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_body_end"), $this);?>
	<?php endif; ?>


	<?php if ($this->_vars['pagename'] == "index" || $this->_vars['pagename'] == "upcoming"): ?>
		<?php if ($this->_vars['Voting_Method'] == 2): ?>
				<h4 id="ls_title-<?php echo $this->_vars['link_shakebox_index']; ?>
">
					<ul class='star-rating<?php echo $this->_vars['star_class']; ?>
' id="xvotes-<?php echo $this->_vars['link_shakebox_index']; ?>
">
						<li class="current-rating" style="width: <?php echo $this->_vars['link_rating_width']; ?>
px;" id="xvote-<?php echo $this->_vars['link_shakebox_index']; ?>
"></li>
						<span id="mnmc-<?php echo $this->_vars['link_shakebox_index']; ?>
" <?php if ($this->_vars['link_shakebox_currentuser_votes'] != 0): ?>style="display: none;"<?php endif; ?>>
								<li><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote_1star']; ?>
" class='one-star'>1</a></li>
								<li><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote_2star']; ?>
" class='two-stars'>2</a></li>
								<li><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote_3star']; ?>
" class='three-stars'>3</a></li>
								<li><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote_4star']; ?>
" class='four-stars'>4</a></li>
								<li><a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote_5star']; ?>
" class='five-stars'>5</a></li>
						</span>
						<span id="mnmd-<?php echo $this->_vars['link_shakebox_index']; ?>
" <?php if ($this->_vars['link_shakebox_currentuser_votes'] == 0): ?>style="display: none;"<?php endif; ?>>
								<li class='one-star-noh'>1</li>
								<li class='two-stars-noh'>2</li>
								<li class='three-stars-noh'>3</li>
								<li class='four-stars-noh'>4</li>
								<li class='five-stars-noh'>5</li>
						</span>
					</ul>
				</h4>
			<?php else: ?>
	<span class="ui-li-count">
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_votebox_start"), $this);?>
				<span class="votenumber">
					<a id="xvotes-<?php echo $this->_vars['link_shakebox_index']; ?>
" href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote']; ?>
"><?php echo $this->_vars['link_shakebox_votes']; ?>
</a>
				</span>
						<span id="xvote-<?php echo $this->_vars['link_shakebox_index']; ?>
">
					<?php if ($this->_vars['link_shakebox_currentuser_votes'] == 0 && $this->_vars['link_shakebox_currentuser_reports'] == 0): ?>
						<a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_vote']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Vote_For_It']; ?>
</a>
					<?php else: ?>
						<?php if ($this->_vars['link_shakebox_currentuser_reports'] != 0): ?>
							<span><?php echo $this->_confs['PLIGG_Visual_Vote_Report']; ?>
</span>
						<?php else: ?>
							<?php if ($this->_vars['pagename'] == "user" && $this->_vars['user_logged_in'] != $this->_vars['link_submitter']): ?>
								<a href="javascript:<?php echo $this->_vars['link_shakebox_javascript_unvote']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Unvote_For_It']; ?>
</a>
							<?php else: ?>
								<span><?php echo $this->_confs['PLIGG_Visual_Vote_Cast']; ?>
</span>
							<?php endif; ?>	
						<?php endif; ?>
					<?php endif; ?>
				</span>
			<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_votebox_end"), $this);?>
			</span>
		<?php endif; ?>
		<?php endif; ?>
    </div>
	
	
	<div class="storyfooter" style="display:none">
		<div class="floatleft subtext">
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_tools_start"), $this);?>
		<?php if ($this->_vars['pagename'] != "story" && $this->_vars['pagename'] != "submit"): ?> <a href="<?php echo $this->_vars['story_url']; ?>
"><?php echo $this->_confs['PLIGG_Visual_Read_More']; ?>
...</a><?php endif; ?>
	
		<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_tools_end"), $this);?>
		
		
		</div>
		
		
		<div class="floatright subtext">
			<a href="<?php echo $this->_vars['category_url']; ?>
"><?php echo $this->_vars['link_category']; ?>
</a>
		 </div>
	</div>

	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_link_summary_end"), $this);?>

	</li><!-- Listview -->
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_story_end"), $this);?>
