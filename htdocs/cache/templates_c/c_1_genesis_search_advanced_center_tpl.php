<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-31 15:11:46 CST */ ?>

<div class="pagewrap">
<fieldset>
<script>
<?php echo '
function SEO2submit(form)
{
    var datastr = \'\';
    var fields  = form.getElementsByTagName(\'INPUT\');
    for (var i=0; i<fields.length; i++)
     	if (fields[i].type=="text")
	    if (fields[i].name=="search")
	    	datastr += (fields[i].value ? encodeURIComponent(fields[i].value) : \'-\') + \'/\';
	    else
	    	datastr += fields[i].name + \'/\' + encodeURIComponent(fields[i].value) + \'/\';
     	else if (fields[i].type=="radio" && fields[i].checked)
	    datastr += fields[i].name + \'/\' + encodeURIComponent(fields[i].value) + \'/\';
    fields  = form.getElementsByTagName(\'SELECT\');
    for (var i=0; i<fields.length; i++)
     	    for (var j=0; j<fields[i].length; j++)
		if (fields[i][j].selected)
	    	    datastr += fields[i].name + \'/\' + encodeURIComponent(fields[i][j].value) + \'/\';

	document.location.href=form.action+datastr+\'adv/1\';
}
'; ?>

</script>
<form method="get" action="<?php echo $this->_vars['URL_search']; ?>
" 
<?php 
global $URLMethod;
if ($URLMethod==2) print "onsubmit='SEO2submit(this); return false;'";
 ?>
>
<div style="float:left;width:260px;padding-right:20px;text-align:right;">
<br />
<label><?php echo $this->_confs['PLIGG_Visual_Search_Keywords']; ?>
:</label><br />
<small><?php echo $this->_confs['PLIGG_Visual_Search_Keywords_Instructions']; ?>
</small><br />
<input name="search" type="text" size="40"/>
<br />

<label><?php echo $this->_confs['PLIGG_Visual_Search_Story']; ?>
:</label><br />
	<select name="slink">
		<option value="3" selected="selected"><?php echo $this->_confs['PLIGG_Visual_Search_Story_Title_and_Description']; ?>
</option>
		<option value="1"><?php echo $this->_confs['PLIGG_Visual_Search_Story_Title']; ?>
</option>
		<option value="2"><?php echo $this->_confs['PLIGG_Visual_Search_Story_Description']; ?>
</option>												
	</select>

<br /><br />
	
<label><?php echo $this->_confs['PLIGG_Visual_Search_Category']; ?>
:</label><br />
	<select name="scategory" >
		<?php echo $this->_vars['category_option']; ?>

	</select>

</div>
<div style="float:left;width:210px;text-align:right;">
<br />
	<label><?php echo $this->_confs['PLIGG_Visual_Search_Comments']; ?>
:</label>
		<input type="radio" name="scomments" value="1" checked="checked" /> <?php echo $this->_confs['PLIGG_Visual_Search_Advanced_Yes']; ?>
 &nbsp;&nbsp;<input type="radio" name="scomments" value="0" /> <?php echo $this->_confs['PLIGG_Visual_Search_Advanced_No']; ?>

	<br />
	<label><?php echo $this->_confs['PLIGG_Visual_Search_Tags']; ?>
:</label>
		<input type="radio" name="stags" value="1" checked="checked" /> <?php echo $this->_confs['PLIGG_Visual_Search_Advanced_Yes']; ?>
 &nbsp;&nbsp;<input type="radio" name="stags" value="0" /> <?php echo $this->_confs['PLIGG_Visual_Search_Advanced_No']; ?>

	<br />

	<label><?php echo $this->_confs['PLIGG_Visual_Search_User']; ?>
:</label>
		<input type="radio" name="suser" value="1" /> <?php echo $this->_confs['PLIGG_Visual_Search_Advanced_Yes']; ?>
 &nbsp;&nbsp;<input type="radio" name="suser" value="0" checked="checked" /> <?php echo $this->_confs['PLIGG_Visual_Search_Advanced_No']; ?>

	
<br /><br />
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['the_template']."/date_picker.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<label><?php echo $this->_confs['PLIGG_Visual_Advanced_Search_Date']; ?>
</label>
<input name="date" type="text" size="10">
<input type=button value="<?php echo $this->_confs['PLIGG_Visual_Advanced_Search_Select']; ?>
" onclick="displayDatePicker('date', false, 'ymd', '-');">

<?php 
if (enable_group=='true') {
 ?>
<br /><br />
<label><?php echo $this->_confs['PLIGG_Visual_Search_Group']; ?>
:</label>
	<select name="sgroup">
		<option value="3" selected="selected"><?php echo $this->_confs['PLIGG_Visual_Search_Group_Named_and_Description']; ?>
</option>
		<option value="1"><?php echo $this->_confs['PLIGG_Visual_Search_Group_Name']; ?>
</option>
		<option value="2"><?php echo $this->_confs['PLIGG_Visual_Search_Group_Description']; ?>
</option>												
	</select>
<?php 	
}
 ?>

<br /><br />
<label><?php echo $this->_confs['PLIGG_Visual_Search_Status']; ?>
:</label>
<select name="status">
	<option value="all" selected="selected"><?php echo $this->_confs['PLIGG_Visual_Search_Status_All']; ?>
</option>
	<option value="published"><?php echo $this->_confs['PLIGG_Visual_Search_Status_Published']; ?>
</option>
	<option value="queued"><?php echo $this->_confs['PLIGG_Visual_Search_Status_Upcoming']; ?>
</option>												
</select>

</div><br style="clear:both;" /><br />
<input name="adv" type="hidden" value="1" />		
<input name="advancesearch" value="&nbsp;Search&nbsp; " type="submit" class="log2" />


</form>
</fieldset>
</div>