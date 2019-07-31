<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page | Brandname</title>
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

<body class="mode-disabled generic-template">
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

      <div class="generic-block-wrapper lazy-bg  block block--true-black block--left padding-top-sixty padding-bottom-zero block_pricing clearfix">
            <div class="main clearfix">
              <div class="content clearfix">
                <div class="column-control section">
                  <div>
                    <div class="container column-control-container ">
                      <div class="row large padding-bottom-fifty column-control--super-wide">
                        <div class="large-12 columns">
                          <div class="free-form-component section">
                            <div class="title2" style="text-align: center;">
                              <h1>Congratulations!</h1>
                              <p>You've Signed up, For Further Assistance:.</p>
                              <a href="javascript:;" target="_self" class="button  button--black button--large" data-aa-title="home-hero-free-trial" data-legacy-link="javascript:;" onclick="asetButtonURL();"> Start Live Chat </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
         
                
                
                
              </div>
            </div>
          </div>


  </div>
</div>

<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>

</body>
</html>
