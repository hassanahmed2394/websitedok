<!DOCTYPE html>
<html lang="en">
<head>
<title>Pricing | Websitedok +1 973 870 3610 </title>
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
    <?php
$packages = $_SERVER['HTTP_HOST']; 
$packages = $srcurl."packages.php"; 
include($packages); 
?>
    <div class="generic-block section">
      <div class="generic-block-wrapper lazy-bg parallax block block--true-black block--left generic-block--cigar  padding-top-zero padding-bottom-zero     clearfix">
        <div class="main clearfix">
          <div class="content clearfix">
            <div class="generic-block section">
              <div id="frequently-asked_" class="hidden"></div>
              <div class="generic-block-wrapper lazy-bg parallax block block--black block--left   padding-top-hundred padding-bottom-hundred frequently-asked    clearfix">
                <div class="main clearfix">
                  <div class="content clearfix">
                    <div class="column-control section">
                      <div>
                        <div class="container column-control-container ">
                          <div class="row large       column-control--super-wide">
                            <div class="large-5 columns ">
                              <div class="title section">
                                <div data-emptytext="Title">
                                  <h6 class="title--gray     title--left  title--heavier  "> KNOW WHAT YOU’RE GETTING </h6>
                                </div>
                              </div>
                              <div class="title section">
                                <div data-emptytext="Title">
                                  <h2 class="     title--left    "> A few <strong>frequently asked questions</strong> </h2>
                                </div>
                              </div>
                            </div>
                            <div class="large-7 columns ">
                              <div class="accordion section">
                                <div class="accordion-title">Why is having a website or an online presence important for your business?<i class="icons" icon="down-arrow"></i></div>
                                <div class="accordion-content" style="display:none;">
                                  <div class="text-3 text section">
                                    <div class="cmp-text">
                                      <p><span class="fs--fourteen">When you have a business, you need a website. It’s important because it’s your connection to the world—the way that anyone in the world can have access and have that moment of exchange and communication with what you’re doing.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion section">
                                <div class="accordion-title">How much does a website cost?<i class="icons" icon="down-arrow"></i></div>
                                <div class="accordion-content" style="display:none;">
                                  <div class="text-3 text section">
                                    <div class="cmp-text">
                                      <p><span class="fs--fourteen">The cost of a website can vary depending on various factors, just like the cost of a house may vary. Business sites and range depend on your unique needs.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion section">
                                <div class="accordion-title">What kind of businesses do you work with?<i class="icons" icon="down-arrow"></i></div>
                                <div class="accordion-content" style="display:none;">
                                  <div class="text-3 text section">
                                    <div class="cmp-text">
                                      <p><span class="fs--fourteen">We work with a broad range of company types [small start-ups, large corporations, nonprofits, B2B, B2C and more] across many business industries [technology, food, apparel, health + beauty, camps, travel, finance, arts, fair trade, and more.</span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion section">
                                <div class="accordion-title">How long does it take to build a website?<i class="icons" icon="down-arrow"></i></div>
                                <div class="accordion-content" style="display:none;">
                                  <div class="text-3 text section">
                                    <div class="cmp-text">
                                      <p><span class="fs--fourteen">Our standard websites take approximately 120 days to create. Our E-commerce (online store) websites take approximately 160 days to create. This time will vary from project to project.</span></p>
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
            </div>
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
