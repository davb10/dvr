<!doctype html>
<!-- ***************************************************************************
index.tpl.php
Construct html page with php code
David Valenzuela (davb10) 2014-02-13
Ver 2
CHANGELOG v.2:
- wrong comments now fixed. gave error in validation
*************************************************************************** -->
<html lang='<?=$lang?>'>
<head>
<meta charset='utf-8'/>
<title><?=get_title($title)?></title>
<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
<link rel='stylesheet' type='text/css' href='<?=$stylesheet?>'/>
</head>
<body>
  <div id='wrapper'>
    <div id='header'><?=$header?></div>
    <div id='navbar'><?php echo GenerateMenu($menu)?></div>
    <div id='main'><?=$main?></div>
    <div id='footer'><?=$footer?></div>
  </div>
</body>
</html>