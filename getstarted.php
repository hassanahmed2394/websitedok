<!DOCTYPE html>
<html lang="en">
<head>
<title>Websitedok |  +1 973 870 3610 </title>
<meta name="description" content="">
<?php
$srcurl = "includes/";
$basesurl = "assets/";

$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 

$urhere = "homepage";
?>
</head>

<body class="mode-disabled generic-template orderpage">
<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>
<div class="header_padding"></div>
<div style="display:none;" id="b2c-top-promo"> </div>
<div id="site-promo" style="display:none;">
  <div id="site-promo-content"></div>
  <div class="promo-close-button">&times;</div>
</div>
<div id="content" role="main">
  <div class="contain">

  

<?php
$bottomform = $_SERVER['HTTP_HOST']; 
$bottomform = $srcurl."getstarted.php"; 
include($bottomform); 
?>


  </div>
</div>

<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>

</body>
</html>
