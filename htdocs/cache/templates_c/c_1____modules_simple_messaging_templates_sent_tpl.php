<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-11-09 14:40:38 CST */ ?>

<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("./modules/simple_messaging/templates/menu.tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
  $this->config_load($this->_vars['simple_messaging_lang_conf'], null, null); ?>

<?php echo '
<style type="text/css">
table { border-collapse:collapse; }
th {text-align:left;}
td { border-bottom:1px solid #eee;padding:3px 0 4px 0; }
</style>
'; ?>



<?php if (isMobile == 'true') : ?>
	<form name="bulk_moderate" action="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=simple_messaging&view=sent&action=bulkmod" method="post"> 
		<?php if ($this->_vars['msg_array'] != ""): ?>
			<div class="margin-top-twentypixel">
				<ul data-role="listview" data-theme="d" data-divider-theme="a">
					<?php if (isset($this->_sections['themessage'])) unset($this->_sections['themessage']);
$this->_sections['themessage']['name'] = 'themessage';
$this->_sections['themessage']['loop'] = is_array($this->_vars['msg_array']) ? count($this->_vars['msg_array']) : max(0, (int)$this->_vars['msg_array']);
$this->_sections['themessage']['show'] = true;
$this->_sections['themessage']['max'] = $this->_sections['themessage']['loop'];
$this->_sections['themessage']['step'] = 1;
$this->_sections['themessage']['start'] = $this->_sections['themessage']['step'] > 0 ? 0 : $this->_sections['themessage']['loop']-1;
if ($this->_sections['themessage']['show']) {
	$this->_sections['themessage']['total'] = $this->_sections['themessage']['loop'];
	if ($this->_sections['themessage']['total'] == 0)
		$this->_sections['themessage']['show'] = false;
} else
	$this->_sections['themessage']['total'] = 0;
if ($this->_sections['themessage']['show']):

		for ($this->_sections['themessage']['index'] = $this->_sections['themessage']['start'], $this->_sections['themessage']['iteration'] = 1;
			 $this->_sections['themessage']['iteration'] <= $this->_sections['themessage']['total'];
			 $this->_sections['themessage']['index'] += $this->_sections['themessage']['step'], $this->_sections['themessage']['iteration']++):
$this->_sections['themessage']['rownum'] = $this->_sections['themessage']['iteration'];
$this->_sections['themessage']['index_prev'] = $this->_sections['themessage']['index'] - $this->_sections['themessage']['step'];
$this->_sections['themessage']['index_next'] = $this->_sections['themessage']['index'] + $this->_sections['themessage']['step'];
$this->_sections['themessage']['first']	  = ($this->_sections['themessage']['iteration'] == 1);
$this->_sections['themessage']['last']	   = ($this->_sections['themessage']['iteration'] == $this->_sections['themessage']['total']);
?>
						<li data-role="list-divider"><?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['date']; ?>

							<div class="floatright"><input  type="checkbox" name="message[<?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['id']; ?>
]" id="message-<?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['id']; ?>
" value="delete" data-role="none"/></div>
						</li>
						<li>
							<a href="<?php echo $this->_vars['URL_simple_messaging_viewmsg'];  echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['id']; ?>
">
								<h3><?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['sender_name']; ?>
</h3>
								<p>								
									<?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['title']; ?>

								</p>
							</a>
						</li>
					<?php endfor; endif; ?>
				</ul>
			</div>
		<?php else: ?>	
			<div class="heading2-inline margin-top-twentypixel"><?php echo $this->_confs['PLIGG_MESSAGING_No_Sent_Messages']; ?>
</div>
		<?php endif; ?>
	
		<?php if ($this->_vars['msg_array'] != ""): ?>
			<div data-role="fieldcontain">
				<input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_MESSAGING_Delete_Selected']; ?>
" class="log2" />
			</div>
		<?php endif; ?>
	
	</form>
<?php else: ?>
	<form name="bulk_moderate" action="<?php echo $this->_vars['my_pligg_base']; ?>
/module.php?module=simple_messaging&view=sent&action=bulkmod" method="post"> 
	<table class="listing">
		<tr><th style="width:25%"><?php echo $this->_confs['PLIGG_MESSAGING_To']; ?>
</th><th width="300px"><?php echo $this->_confs['PLIGG_MESSAGING_Subject']; ?>
</th><th style="width:125px"><?php echo $this->_confs['PLIGG_MESSAGING_Sent']; ?>
</th><th><?php echo $this->_confs['PLIGG_MESSAGING_Delete']; ?>
</th></tr>
		
		<?php if ($this->_vars['msg_array'] != ""): ?>
	
		<?php if (isset($this->_sections['themessage'])) unset($this->_sections['themessage']);
$this->_sections['themessage']['name'] = 'themessage';
$this->_sections['themessage']['loop'] = is_array($this->_vars['msg_array']) ? count($this->_vars['msg_array']) : max(0, (int)$this->_vars['msg_array']);
$this->_sections['themessage']['show'] = true;
$this->_sections['themessage']['max'] = $this->_sections['themessage']['loop'];
$this->_sections['themessage']['step'] = 1;
$this->_sections['themessage']['start'] = $this->_sections['themessage']['step'] > 0 ? 0 : $this->_sections['themessage']['loop']-1;
if ($this->_sections['themessage']['show']) {
	$this->_sections['themessage']['total'] = $this->_sections['themessage']['loop'];
	if ($this->_sections['themessage']['total'] == 0)
		$this->_sections['themessage']['show'] = false;
} else
	$this->_sections['themessage']['total'] = 0;
if ($this->_sections['themessage']['show']):

		for ($this->_sections['themessage']['index'] = $this->_sections['themessage']['start'], $this->_sections['themessage']['iteration'] = 1;
			 $this->_sections['themessage']['iteration'] <= $this->_sections['themessage']['total'];
			 $this->_sections['themessage']['index'] += $this->_sections['themessage']['step'], $this->_sections['themessage']['iteration']++):
$this->_sections['themessage']['rownum'] = $this->_sections['themessage']['iteration'];
$this->_sections['themessage']['index_prev'] = $this->_sections['themessage']['index'] - $this->_sections['themessage']['step'];
$this->_sections['themessage']['index_next'] = $this->_sections['themessage']['index'] + $this->_sections['themessage']['step'];
$this->_sections['themessage']['first']	  = ($this->_sections['themessage']['iteration'] == 1);
$this->_sections['themessage']['last']	   = ($this->_sections['themessage']['iteration'] == $this->_sections['themessage']['total']);
?>
			<tr id="msg_row_<?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['id']; ?>
">
				<td><a href="<?php echo $this->_vars['my_pligg_base']; ?>
/user.php?login=<?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['sender_name']; ?>
"><?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['sender_name']; ?>
</a></td>
				<td>
					<a href="<?php echo $this->_vars['URL_simple_messaging_viewsentmsg'];  echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['id']; ?>
">
						<?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['title']; ?>

					</a>
				</td>
				<td><?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['date']; ?>
</td>
				<td><input type="checkbox" name="message[<?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['id']; ?>
]" id="message-<?php echo $this->_vars['msg_array'][$this->_sections['themessage']['index']]['id']; ?>
" value="delete"></td>
			</tr>
		<?php endfor; endif; ?>
		
		<?php else: ?>
		
		<tr><td colspan="3"><div align="center"><br /><?php echo $this->_confs['PLIGG_MESSAGING_No_Sent_Messages']; ?>
</div></td></tr>
		
		<?php endif; ?>
		
	
	</table>
	
		<?php if ($this->_vars['msg_array'] != ""): ?>
		<br/>
		<p align="right"><input type="submit" name="submit" value="<?php echo $this->_confs['PLIGG_MESSAGING_Delete_Selected']; ?>
" class="log2" /></p>
		<?php endif; ?>
	
	</form>
<?php endif; ?>

<?php $this->config_load(simple_messaging_pligg_lang_conf, null, null); ?>