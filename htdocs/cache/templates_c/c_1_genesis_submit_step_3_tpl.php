<?php require_once('/data/home/hmu129119/htdocs/plugins/modifier.escape.php'); $this->register_modifier("escape", "tpl_modifier_escape");  require_once('/data/home/hmu129119/htdocs/plugins/function.checkActionsTpl.php'); $this->register_function("checkActionsTpl", "tpl_function_checkActionsTpl");  /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-28 13:59:32 CST */ ?>

<h1><?php echo $this->_confs['PLIGG_Visual_Submit3_Header']; ?>
</h1>

<div id="leftcol-superwide"><div id="submit"><div id="submit_content">
<h2><?php echo $this->_confs['PLIGG_Visual_Submit3_Details']; ?>
</h2><br />
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step3_start"), $this);?>
	
	<?php echo '
	<SCRIPT>
		// Variable toggles exit confirmation on and foff.
		var gPageIsOkToExit = false;

		function submitEdgeStory()
		{
			// Set a variable so that our "before unload" exit handler knows not to verify
			// the page exit operation.
			gPageIsOkToExit = true;

			// Do the submission.
			// var frm = document.getElementById("thisform");
			frms = document.getElementsByName("ATISUBMIT");
			
			if (frms)
			{
				if (frms[0])
					frms[0].submit();
			}
		}

		window.onbeforeunload = function (event) 
		{
			// See if this is a safe exit.
			if (gPageIsOkToExit)
				return;

			if (!event && window.event) 
	          		event = window.event;
	          		
	   		event.returnValue = "You have not hit the Submit Button to submit your story yet.";
		}
	</SCRIPT>
	'; ?>



	<?php 
		Global $db, $main_smarty, $dblang, $the_template, $linkres, $current_user;

		$linkres=new Link;
		$linkres->id=$link_id = $_POST['id'];
		if (!is_numeric($link_id)) die();
		$linkres->read(FALSE);
		$linkres->print_summary();
		
		$main_smarty->assign('tags', $linkres->tags);
		if (!empty($linkres->tags)) {
			$tags_words = str_replace(",", ", ", $linkres->tags);
			$tags_url = urlencode($linkres->tags);
			$main_smarty->assign('tags_words', $tags_words);
			$main_smarty->assign('tags_url', $tags_url);
		}

		$main_smarty->assign('submit_url', $url);
		$main_smarty->assign('submit_url_title', $linkres->url_title);
		$main_smarty->assign('submit_id', $linkres->id);
		$main_smarty->assign('submit_type', $linkres->type());
		$main_smarty->assign('submit_title', $link_title);
		$main_smarty->assign('submit_content', $link_content);
		$main_smarty->assign('submit_trackback', $trackback);
	 ?>

	<form action="<?php echo $this->_vars['URL_submit']; ?>
" method="post" id="thisform" name="ATISUBMIT" >
		<input type="hidden" name="phase" value="3" />
		<input type="hidden" name="randkey" value="<?php echo $_POST['randkey']; ?>
" />
		<input type="hidden" name="id" value="<?php echo $this->_vars['submit_id']; ?>
" />
		<input type="hidden" name="trackback" value="<?php echo $this->_run_modifier($_POST['trackback'], 'escape', 'plugin', 1, "html"); ?>
" />
		
		<br style="clear: both;" /><hr />
		<center>
		<input type="button" onclick="gPageIsOkToExit = true; document.location.href='<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
/submit.php?id='+this.form.id.value+'&trackback='+this.form.trackback.value;" value="<?php echo $this->_confs['PLIGG_Visual_Submit3_Modify']; ?>
" class="log2">&nbsp;&nbsp;
		<input type="button" onclick="submitEdgeStory();" value="<?php echo $this->_confs['PLIGG_Visual_Submit3_SubmitStory']; ?>
" class="submit" />
		</center>
	<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_pligg_submit_step3_end"), $this);?> 
	</form>
<?php echo tpl_function_checkActionsTpl(array('location' => "tpl_submit_step_3_end"), $this);?>

</div></div>