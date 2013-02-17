<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-12-09 16:02:52 CST */ ?>

<div id="ad1containert" style="position:relative;overflow:hidden;width:250px;height:120px;clear:none;border:solid 1px #ccc;">
<!--a><img src="http://www.meirixiaohualocal.com/pligg/images/mrxh-ad-1.gif" /></img></a-->
</div>
<!--script src="<?php echo $this->_vars['my_pligg_base']; ?>
/templates/<?php echo $this->_vars['the_template']; ?>
/js/adcontainer-1.js" type="text/javascript"></script-->
<script>
var path = "<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
";
<?php echo '

 var p = $(\'#ad1containert\');
var pics1 = [{url: path+\'/images/mrxh-ad-1.gif\',link:path+\'/story.php?title=%E6%89%8B%E6%9C%BA%E8%AE%BF%E9%97%AE%E6%AF%8F%E6%97%A5%E7%AC%91%E8%AF%9D\',time:6000},
{url:path+\'/images/mrxh-ad-1.jpg\',link:path+\'/story.php?title=%E6%89%8B%E6%9C%BA%E8%AE%BF%E9%97%AE%E6%AF%8F%E6%97%A5%E7%AC%91%E8%AF%9D\',time:4000},
{url:path+\'/images/mrxh-ad-2.jpg\',link:path+\'/?category=author=ss\',time:6000},
{url:path+\'/images/mrxh-ad-3.jpg\',link:path+\'/?category=author=gg\',time:6000},
{url:path+\'/images/mrxh-ad-4.jpg\',link:path+\'/register.php\',time:5000}];

initPicPlayer(pics1,p.css(\'width\').split(\'px\')[0],p.css(\'height\').split(\'px\')[0]);

</script>
'; ?>
