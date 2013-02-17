<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2012-10-25 11:37:28 CST */ ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../templates/admin/css/help.css" media="screen"/>
</head>
<body>
<div id="wrapper">

<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include($this->_vars['tpl_center'].".tpl", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

</div>
</body>
</html>