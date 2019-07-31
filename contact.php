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

  	<div class="generic-block-wrapper lazy-bg  block block--black block--left   padding-top-hundred-fifty padding-bottom-zero     clearfix">
            <div class="main clearfix">
              <div class="content clearfix">
                <div class="column-control section">
                  <div>
                    <div class="container column-control-container ">
                      <div class="row large       column-control--super-wide paddingleft70">
                        <div class="large-8 columns ">
                          <div class="title2 section">
                            <div data-emptytext="Title">
                              <h1 class="     title--left    "> <span class="">Contact</span><br> Websitedok </h1>
                            </div>
                          </div>
                        </div>
                        <div class="large-4 columns "> </div>
                      </div>
                    </div>
                  </div>
                </div>
           

              </div>
            </div>
          </div>

<?php
$bottomform = $_SERVER['HTTP_HOST']; 
$bottomform = $srcurl."bottomform.php"; 
include($bottomform); 
?>


                <div class="generic-block section">
                  <div class="generic-block-wrapper lazy-bg parallax block block--dark-gray-2 block--left generic-block--auto  padding-top-hundred-fifty padding-bottom-hundred-fifty     clearfix">
                    <div class="main clearfix">
                      <div class="content clearfix">
                        <div class="column-control section">
                          <div>
                            <div class="container column-control-container ">
                              <div class="row large       column-control--super-wide">
                                <div class="large-8 columns ">
                                  <div class="spacer section">
                                    <div class="spacer  " style="height:60px"></div>
                                  </div>
                                  <div class="title2 section">
                                    <div data-emptytext="Title">
                                      <h2 class="     title--left   title--ultra "> Customer support </h2>
                                    </div>
                                  </div>
                                </div>
                                <div class="large-4 columns ">
                                  <div class="text-4 text section">
                                    <div class="cmp-text">
                                      <p style="text-align: center;"> +1 973 870 3610  </p>
                                    </div>
                                  </div>
                                  <div class="ps-button section">
                                    <div data-emptytext="Button" class="psbutton--center">
                                      <div> <a href="javascript:;" target="_blank" class="button   10  " data-aa-title="default-cta"> Email support </a> </div>
                                    </div>
                                  </div>
                                  <div class="spacer section">
                                    <div class="spacer  " style="height:25px"></div>
                                  </div>
                                  <div class="text-4 text section">
                                    <div class="cmp-text">
                                      <p style="text-align: center;">Find answers now. <a title="Search our help center" href="https://help.pluralsight.com/help" target="_blank">Search our help center</a>.</p>
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
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>

</body>
</html>
