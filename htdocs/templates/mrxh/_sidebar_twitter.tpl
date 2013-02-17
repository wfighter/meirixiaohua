{php}
	$this->assign('twitter_id', 'pligg_templates');
{/php}

<div class="headline">
	<div class="sectiontitle">
		<span style="float: right; margin: -8px -15px 0px 0px;"><img src="{$my_pligg_base}/templates/{$the_template}/images/twitter.png" alt="" /></span>
		<a href="http://twitter.com/{$twitter_id}">Follow {$twitter_id}
	</a>
	</div>
</div>

<div class="boxcontent">
	<div id="twitter_update_list">
	</div>
	
	<li style="font-weight: bold; list-style: none; ">
		Follow <a href="http://twitter.com/{$twitter_id}">@{$twitter_id}</a> on Twitter
	</li>
	
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js">
	</script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/{$twitter_id}.json?callback=twitterCallback2&count=5">
	</script>
</div>

{literal}
	<style>
		#twitter_update_list { font-size: 12px; }
		#twitter_update_list li { xxbackground: #f8f8f8; padding: 5px 5px 10px 5px; margin-bottom: 0px;
			border-bottom: 1px solid #909090; list-style: none; }
		
		#twitter_update_list a { color: #c0c0c0; font-size: 11px; }
		
		#twitter_update_list span {  }
		#twitter_update_list span a { font-size: 14px; color: #ace573; }
		#twitter_update_list span a:hover {  }
	</style>
{/literal}