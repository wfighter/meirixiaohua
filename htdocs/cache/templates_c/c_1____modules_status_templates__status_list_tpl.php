<?php require_once('/data/home/hmu129119/htdocs/plugins/modifier.sanitize.php'); $this->register_modifier("sanitize", "tpl_modifier_sanitize");  require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 13:11:37 CST */ ?>

<?php $this->config_load(status_lang_conf, null, null); ?>
<div class="status_update">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/status/templates/status_update.css" media="screen">
	<script>
	var my_pligg_base = '<?php echo $this->_vars['my_pligg_base']; ?>
';
	var likes = "<?php echo $this->_confs['PLIGG_Status_Likes']; ?>
";
	var nolikes = "<?php echo $this->_confs['PLIGG_Status_No_Likes']; ?>
";
	</script>
	<script src='<?php echo $this->_vars['my_pligg_base']; ?>
/modules/status/status.js'></script>

	<?php echo tpl_function_checkActionsTpl(array('location' => "status_update_top"), $this);?>
	<?php 
		global $db, $current_user, $URLMethod;
		include_once(mnminclude.'search.php');

		$this->_vars['isgod'] = checklevel('god');
		$this->_vars['isadmin'] = checklevel('admin');

		$settings = get_status_settings();
		$user = new User;
		$user->username = $this->_vars['user_login'] ? $this->_vars['user_login'] : $current_user->user_login;
		if($settings['switch'] && $user->read() && status_is_allowed($user) && $user->extra_field['status_switch'])
		{

		$this->_vars['current_user'] = get_object_vars($current_user);
		$this->_vars['current_username'] = '@'.$current_user->user_login;
		$this->_vars['settings'] = $settings;

		if ($_POST['page']) $page=$_POST['page'];	
		else $page=1;
		$page_size = $settings['results'];

		if ($_POST['ssearch'])
		{
			$search=new Search();
			$search->searchTerm = $db->escape(sanitize($_REQUEST['ssearch']), 3);

			$words = str_replace(array('-','+','/','\\','?','=','$','%','^','&','*','(',')','\'','!','@','|'),'',$search->searchTerm);
			$SearchMethod = SearchMethod; 
			if($SearchMethod == 3){
				$SearchMethod = $search->determine_search_method($words);
			}
			if($SearchMethod == 1){
				$words = str_replace('+','',stripslashes($words));
				if (preg_match_all('/("[^"]+"|[^\s]+)/',$words,$m))
					$words = '+'.join(" +",$m[1]);
				$search_sql = " AND MATCH (update_text) AGAINST ('$words' IN BOOLEAN MODE) ";
			}
			else 
				$search_sql = ' AND '.$search->explode_search('update_text', $words);
		}

		if ($user->extra_field['status_friends'])
		{
			$friends_sql = "(b.friend_from='{$user->id}' ";
			if (!$user->extra_field['status_all_friends'])
				if ($user->extra_field['status_friend_list'])
				$friends_sql .= " AND c.user_login IN ('".str_replace(',',"','",$user->extra_field['status_friend_list'])."')";
			else
				$friends_sql .= " AND 0";
			$friends_sql .= ") OR";
		}
			if (enable_group && $user->extra_field['status_group'])
				$group_sql = " OR !ISNULL(d.member_id) ";
		$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM ".table_prefix."updates a
				LEFT JOIN ".table_prefix."likes ON like_user_id={$current_user->user_id} AND like_update_id=update_id
				LEFT JOIN ".table_friends." b ON a.update_user_id=b.friend_to
				LEFT JOIN ".table_users." c ON a.update_user_id=c.user_id
				LEFT JOIN ".table_group_member." d ON d.member_group_id=a.update_group_id AND member_user_id='{$user->id}'
				WHERE (($friends_sql a.update_user_id='{$user->id}') 
				OR update_level='$user->level'
				$group_sql ".
				($user->extra_field['status_excludes'] ? " AND update_id NOT IN (".$user->extra_field['status_excludes'].")" : "").
				" OR update_level='all') $search_sql
				GROUP BY update_id
				ORDER BY update_time DESC      	
				LIMIT ".($page-1)*$page_size.",$page_size";
		$updates = $db->get_results($sql,ARRAY_A);
		$count   = $db->get_var("SELECT FOUND_ROWS()");
		$this->_vars['updates'] = $updates;
	 ?>

	<?php echo '
	<script>
	function status_next_page(page)
	{
		var form = document.getElementById(\'status_search\');
		form.page.value = page;
		form.submit();
		return false;
	}
	</script>
	'; ?>


	<?php echo $this->_vars['settings']['pre_format']; ?>


	
	<form method='post' id='status_search' !action='<?php print getmyurl('user2', $user->username, 'profile'); ?>'>
	 <input name="page" type="hidden" value="">
	<?php if ($this->_vars['settings']['allowsearch']): ?>
	<?php echo $this->_vars['settings']['pre_search']; ?>

	<?php echo tpl_function_checkActionsTpl(array('location' => "status_search_1"), $this);?>
	<div class="status_search">
		<h4 class="status_search_title"><?php echo $this->_confs['PLIGG_Status_Search_Updates']; ?>
</h4>
		<div class="status_search_form">
			<?php echo tpl_function_checkActionsTpl(array('location' => "status_search_2"), $this);?>
			<input class="status_search_input" name="ssearch" type="text" value="<?php echo $this->_run_modifier($_POST['ssearch'], 'sanitize', 'plugin', 1, 2); ?>
">
			<?php echo tpl_function_checkActionsTpl(array('location' => "status_search_3"), $this);?>
			<input class="status_search_submission" value="<?php echo $this->_confs['PLIGG_Status_Search']; ?>
" type="submit">
		</div>
		<div class="status_clear"> </div>
	</div>
	<?php echo tpl_function_checkActionsTpl(array('location' => "status_search_4"), $this);?>
	<?php echo $this->_vars['settings']['post_search']; ?>

	<?php endif; ?>
	</form>

	

	<div class="status_seperator"> </div>

	
	<?php if ($this->_vars['user_login'] == $this->_vars['current_user']['user_login'] || ( $this->_vars['settings']['inputonother'] == '1' && strstr ( $this->_vars['settings']['profile_level'] , $this->_vars['current_user']['user_level'] ) )): ?>
		<?php echo $this->_vars['settings']['pre_submit']; ?>

		<?php echo $_SESSION['status_error']; ?>

		<div class="status_submit">
		<?php echo tpl_function_checkActionsTpl(array('location' => "status_submit_1"), $this);?>
			<h4 class="status_submit_title"><?php echo $this->_confs['PLIGG_Status_Submit_Updates']; ?>
</h4>
			<div class="status_submit_form">
				<form method='post' action='<?php echo $this->_vars['my_pligg_base']; ?>
/modules/status/status.php'>
				<?php echo tpl_function_checkActionsTpl(array('location' => "status_submit_2"), $this);?>
					<textarea class="status_submit_input" name="status"><?php if ($_SESSION['status_text']) print $_SESSION['status_text']; elseif ($user->id != $current_user->user_id) print '@'.$user->username.' '; ?></textarea> 
				<?php echo tpl_function_checkActionsTpl(array('location' => "status_submit_3"), $this);?>
				<input class="status_submit_submission" value="<?php echo $this->_confs['PLIGG_Status_Submit']; ?>
" type="submit">
				</form>
			</div>
			<div class="status_clear"> </div>
		<?php echo tpl_function_checkActionsTpl(array('location' => "status_submit_4"), $this);?>
		</div>
		
		<div class="status_seperator"> </div>
		<?php echo $this->_vars['settings']['post_submit']; ?>

	<?php endif; ?>
	

	<?php echo tpl_function_checkActionsTpl(array('location' => "status_update_middle"), $this);?>

	<div class="status_friend_updates">
		<div class="status_friend_updates_title">
			<h4><?php if ($_POST['ssearch']):  echo $this->_confs['PLIGG_Status_Search_Results'];  else:  echo $this->_confs['PLIGG_Status_Friend_Updates'];  endif; ?></h4>
		</div>

	<?php if (count((array)$this->_vars['updates'])):  foreach ((array)$this->_vars['updates'] as $this->_vars['update']): ?>
	<div class="status_message_wrapper">
		<a id='<?php echo $this->_vars['update']['update_id']; ?>
'></a>
		<?php if ($this->_vars['update']['update_type'] == 'c'): ?>
		<?php echo $this->_vars['settings']['pre_comment']; ?>

		<?php elseif ($this->_vars['update']['update_type'] == 's'): ?>
		<?php echo $this->_vars['settings']['pre_story']; ?>

		<?php elseif (strstr ( $this->_vars['update']['update_text'] , $this->_vars['current_username'] )): ?>
		<?php echo $this->_vars['settings']['pre_username']; ?>

		<?php endif; ?>
		<div class="status_message_content_wrapper">
			<div class="status_message_tools">
				<?php echo tpl_function_checkActionsTpl(array('location' => "status_tools_1"), $this);?>

				<?php if ($this->_vars['current_user']['user_id'] > 0 && $this->_vars['update']['update_user_id'] != $this->_vars['current_user']['user_id']): ?>
					<a href="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/status/status.php?lid=<?php echo $this->_vars['update']['update_id']; ?>
" onclick='like(<?php echo $this->_vars['update']['update_id']; ?>
); return false'><span id='like<?php echo $this->_vars['update']['update_id']; ?>
' <?php if ($this->_vars['update']['like_user_id']): ?>style='display:none;'<?php endif; ?>><?php echo $this->_confs['PLIGG_Status_Like']; ?>
</span><span id='unlike<?php echo $this->_vars['update']['update_id']; ?>
' <?php if (! $this->_vars['update']['like_user_id']): ?>style='display:none;'<?php endif; ?>><?php echo $this->_confs['PLIGG_Status_Unlike']; ?>
</span></a>
					| 
				<?php endif; ?>

				<a href='#' id='count<?php echo $this->_vars['update']['update_id']; ?>
' onclick='show_likes(<?php echo $this->_vars['update']['update_id']; ?>
); return false;' <?php if ($this->_vars['update']['update_likes'] <= 0): ?>disabled<?php endif; ?>><?php if ($this->_vars['update']['update_likes'] > 0):  echo $this->_vars['update']['update_likes']; ?>
 <?php echo $this->_confs['PLIGG_Status_Likes'];  else:  echo $this->_confs['PLIGG_Status_No_Likes'];  endif; ?></a>
				<div id='likes<?php echo $this->_vars['update']['update_id']; ?>
' style='display: none'></div> | 

				<a href="<?php echo $this->_vars['my_pligg_base'];  
				global $URLMethod, $my_base_url, $my_pligg_base;
				if ($URLMethod==2) print "/status/"; 
				else print "/modules/status/status.php?id=";  echo $this->_vars['update']['update_id']; ?>
"><?php echo $this->_confs['PLIGG_Status_Permalink']; ?>
</a>
				<?php if ($this->_vars['settings']['show_permalinks']):  echo $this->_vars['update']['update_id'];  endif; ?>
				| 
				<?php echo tpl_function_checkActionsTpl(array('location' => "status_tools_2"), $this);?>
				<?php if ($this->_vars['update']['update_user_id'] == $this->_vars['current_user']['user_id'] || $this->_vars['isadmin'] || $this->_vars['isgod']): ?>
					<a href="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/status/status.php?did=<?php echo $this->_vars['update']['update_id']; ?>
"><?php echo $this->_confs['PLIGG_Status_Delete']; ?>
</a>
					<?php $this->assign('slash', '1'); ?>
				<?php endif; ?>
				<?php if ($this->_vars['update']['update_user_id'] != $this->_vars['current_user']['user_id']): ?>
					<?php if ($this->_vars['slash']): ?> | <?php endif; ?>
					<a href="#" onclick="document.getElementById('reply<?php echo $this->_vars['update']['update_id']; ?>
').style.display='block'; return false;"><?php echo $this->_confs['PLIGG_Status_Reply']; ?>
</a> |
					<a href="<?php echo $this->_vars['my_pligg_base']; ?>
/modules/status/status.php?hid=<?php echo $this->_vars['update']['update_id']; ?>
"><?php echo $this->_confs['PLIGG_Status_Hide']; ?>
</a>
				<?php endif; ?>
				<?php echo tpl_function_checkActionsTpl(array('location' => "status_tools_3"), $this);?>
			</div>
			<div class="status_message_stats">
				<div class="status_message_username">
					<?php echo tpl_function_checkActionsTpl(array('location' => "status_user_1"), $this);?>
					<a href="<?php print getmyurl('user2', $this->_vars['update']['user_login'], 'profile'); ?>">
					<img alt="" class="status_message_avatar" src="<?php print get_avatar($settings['avatar'], "", "", "", $this->_vars['update']['user_id']); ?>" />
					<?php echo tpl_function_checkActionsTpl(array('location' => "status_user_2"), $this);?>
					<?php echo $this->_vars['update']['user_login']; ?>

					<?php echo tpl_function_checkActionsTpl(array('location' => "status_user_3"), $this);?>
				</div>
				<div class="status_message_time">
					</a> 
					<?php if ($this->_vars['settings']['clock'] == '12'): ?>
						<?php print date("F j, Y h:i:sa",$this->_vars['update']['update_time']); ?>
					<?php else: ?>
						<?php print date("F j, Y H:i:s",$this->_vars['update']['update_time']); ?>
					<?php endif; ?>
				</div>
				<div class="status_clear"> </div>
			</div>
			<div class="status_message_content">
				<?php echo tpl_function_checkActionsTpl(array('location' => "status_message_1"), $this);?>
				<?php if ($this->_vars['update']['update_type'] == 'm'): ?>
					<?php 
					if ($this->_vars['update']['update_group_id'])
					{
						$group = $db->get_row("SELECT * FROM ".table_groups." WHERE group_id={$this->_vars['update']['update_group_id']}");
						$this->_vars['update']['update_text'] = str_replace( '!'.$group->group_name, "<a href='".getmyurl("group_story_title", $group->group_safename)."'>!{$group->group_name}</a>", $this->_vars['update']['update_text'] );
					}
					if (in_array($this->_vars['update']['update_level'],array('god','admin')))
						$this->_vars['update']['update_text'] = str_replace( '*'.$this->_vars['update']['update_level'], "<span style='color:red;'>*{$this->_vars['update']['update_level']}</span>", $this->_vars['update']['update_text'] );
					elseif ($this->_vars['update']['update_level'])
						$this->_vars['update']['update_text'] = str_replace( '*'.$this->_vars['update']['update_level'], "", $this->_vars['update']['update_text'] );
					print preg_replace(
						array("/@([^\s]+)/e",
							  "/#(\d+)/e"),
						array("'@<a href=\"'.getmyurl('user2', '\\1', 'profile').'\">\\1</a>'",
							  $settings['permalinks'] ? "'<a href=\"'.my_pligg_base.'/modules/status/status.php?id=\\1\">#\\1</a>'" : ""),
						$this->_vars['update']['update_text']);
					 ?>
				<?php else: ?>
					<?php echo $this->_vars['update']['update_text']; ?>

				<?php endif; ?>
				<?php echo tpl_function_checkActionsTpl(array('location' => "status_message_2"), $this);?>
			</div>

			
			<div id="reply<?php echo $this->_vars['update']['update_id']; ?>
" style="display: none;">
				<div class="status_reply">
					<h4><?php echo $this->_confs['PLIGG_Status_Post_Reply']; ?>
</h4>
					<div class="status_reply_form">
						<form method='post' action='<?php echo $this->_vars['my_pligg_base']; ?>
/modules/status/status.php'>
							<input value="<?php echo $this->_vars['update']['update_id']; ?>
" type="hidden" name="id">
							<textarea cols="43" rows="3" class="status_reply_textarea" name="status">@<?php echo $this->_vars['update']['user_login']; ?>
 <?php if ($this->_vars['settings']['permalinks']): ?>#<?php echo $this->_vars['update']['update_id']; ?>
 <?php endif; ?></textarea><br>
							<input value="<?php echo $this->_confs['PLIGG_Status_Submit_Reply']; ?>
" class="status_reply_submit" type="submit">
						</form>
					</div>
				</div>
			</div>
			
		</div>

		<?php if ($this->_vars['update']['update_type'] == 'c'): ?>
			<?php echo $this->_vars['settings']['post_comment']; ?>

		<?php elseif ($this->_vars['update']['update_type'] == 's'): ?>
			<?php echo $this->_vars['settings']['post_story']; ?>

		<?php elseif (strstr ( $this->_vars['update']['update_text'] , $this->_vars['current_username'] )): ?>
			<?php echo $this->_vars['settings']['post_username']; ?>

		<?php endif; ?>
	</div>
	<?php endforeach; else: ?>
	<?php if ($_POST['ssearch']): ?>
	<?php echo $this->_run_modifier($this->_run_modifier($this->_confs['PLIGG_Status_No_Results'], 'sprintf', 'PHP', 1, $_POST['ssearch']), 'strip_tags', 'PHP', 1); ?>

	<?php endif; ?>
	<?php endif; ?>

	</div>

	<?php 
	$output = do_pages($count, $page_size, $page, true);
	$output = preg_replace('/"[^"]+\/(\d+)">([^<]+)</','"#" onclick="return status_next_page(\\1)">\\2<',$output);
	$output = preg_replace('/"?page=(\d+)"[^>]*>([^<]+)</','"#" onclick="return status_next_page(\\1)">\\2<',$output);
	print $output;
	 ?>

	<?php echo $this->_vars['settings']['post_format']; ?>


	<?php 
		}
		unset($_SESSION['status_error']);
		unset($_SESSION['status_text']);
	 ?>
</div> <!-- End status_update class -->
<?php $this->config_load(status_pligg_lang_conf, null, null); ?>

