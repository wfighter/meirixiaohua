<ul data-role="listview" >
	{$the_story}
</ul>

<h2>{#PLIGG_Visual_Story_Comments#}</h2>

<form action="" method="POST" id="thisform">		
<ul data-role="listview" >
	{$the_comment}
</ul>
	{$comment_form}
	<input type="hidden" name="process" value="newcomment" />
	<input type="hidden" name="randkey" value="{$randkey}" />
	<input type="hidden" name="link_id" value="{$link_id}" />
	<input type="hidden" name="user_id" value="{$user_id}" />
</form>

{$removed_link}
