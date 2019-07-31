<!DOCTYPE html>
<html lang="en">
<head>
<title>Portfolio | Websitedok +1 973 870 3610</title>
<meta name="description" content="Take control of your career. With our technology skills platform, you can see where your skills stand, master the latest technologies and show off your expertise.">
<?php
$srcurl = "includes/";
$basesurl = "assets/";

$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 

$urhere = "homepage";
?>
</head>

<body class="mode-disabled generic-template services_page">
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
    <div class="generic-block section">
      <div id="gtm-hero learn-hero_" class="hidden"></div>
      <div class="generic-block-wrapper lazy-bg  block block--black block--left generic-block--auto  padding-top-hundred-fifty padding-bottom-hundred-fifty gtm-hero learn-hero    clearfix" style="background-image: url('assets/images/gtm-hero-learn-2.jpg');background-position:center;background-size:cover;background-repeat:none;">
        <div class="main clearfix">
          <div class="content clearfix">
            <div class="column-control section">
              <div>
                <div class="container column-control-container ">
                  <div class="row large column-control--super-wide paddingleft70">
                    <div class="large-7 columns ">
                      <div class="title2 section">
                        <div data-emptytext="Title">
                          <h1 class="    desk-font-size-2    title--ultra "> Let your skills do the talking </h1>
                        </div>
                      </div>
                      <div class="text-4 text section">
                        <div class="cmp-text">
                          <p><span class="fs--medium"><span class="tc-white">Take control of your career. With our technology skills platform, you can see where your skills stand, master the latest technologies and show off your expertise.</span></span></p>
                        </div>
                      </div>
                      <div class="ps-button section">
                        <div data-emptytext="Button">
                          <div> <a href="javascript:;" onclick="setButtonURL();" target="_self" class="button   button--large  " data-aa-title="start-a-free-trial"> Let's Get Started </a> </div>
                        </div>
                      </div>
                    </div>
                    <div class="large-5 columns "> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>





    <div class="generic-block section works">
      <div class="generic-block-wrapper lazy-bg  block block--black block--left generic-block--auto  padding-top-hundred-fifty padding-bottom-hundred-fifty     clearfix">
        <div class="main clearfix">
          <div class="content clearfix">
         
 
                        <?php
$portfolio = $_SERVER['HTTP_HOST']; 
$portfolio = $srcurl."portfolio-page.php"; 
include($portfolio); 
?>


    

          </div>
        </div>
      </div>
    </div>


    

<?php
$cta = $_SERVER['HTTP_HOST']; 
$cta = $srcurl."cta.php"; 
include($cta); 
?>


<?php
$bottomform = $_SERVER['HTTP_HOST']; 
$bottomform = $srcurl."bottomform.php"; 
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
