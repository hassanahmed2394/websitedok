<!doctype html>
<html lang="en">
<head>
<title>Home Page</title>
<meta name="keywords" content="">
<meta name="description" content="">



<?php
$srcurl = "includes/";
$basesurl = "assets/";
?>




<?php
$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 

$urhere = "homepage";
?>



</head>
<body class="hompg">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>




<div class="slider-wrapper">
  <section class="">
    <div class="item">
      <div class="home-banner d-flex" style="background-image:url(<?php echo $basesurl;?>images/banners/homebanner.jpg)">
        <div class="container align-self-center">
          <div class="row">
            <div class=" col-lg-5">
              <div class="home-banner-content">
                <h1>At Reseller Pro Hub, Digital Agency.</h1>
                <p class="subtitle">We merge imagination and technology to help brands grow in an age of digital transformation.</p>
                <a href="<?php echo $path;?>join-reseller-program" class="btn-theme">Join Reseller Program </a>
              </div>
            </div>
            <div class="col-lg-4 offset-lg-2">
              <div class="banner-form">
                <h3>Join the Reseller Prohub partners community.</h3>
                <?php
                $bannerform = $_SERVER['HTTP_HOST']; 
                $bannerform = $srcurl."bannerform.php"; 
                include($bannerform); 
                ?>
              </div>
            </div>
        </div>
      </div>
    </div>
    
  </section>
  <!-- <div class="slider-progress">
    <div class="progress"></div>
  </div> -->
</div>



<section class="strugglesec withimages">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="paright">
          <h2>Our visionary clients partner with us.</h2>
          <p>Because of our deep understanding of the essential role of visual identity and digital in business.</p>
        </div>
      </div>      


      <div class="col-lg-8">
        <ul>
          <li><a href="<?php echo $path;?>logo-design">Creative Logo Design</a></li>
          <li><a href="<?php echo $path;?>website-design-development">Website Design &amp; Development</a></li>
          <!-- <li><a href="<?php echo $path;?>brand-reputation-management">Brand Reputation Management</a></li> -->
          <li><a href="<?php echo $path;?>mobile-app-development">Mobile App Development</a></li>
          <li><a href="<?php echo $path;?>video-animation-services">Video Animation Services</a></li>
          <li><a href="<?php echo $path;?>search-engine-optimization">Search Engine Optimization</a></li>

        </ul>
        <div class="">
          <a href="<?php echo $path;?>get-a-quote" class="btn-secondary">Let’s Get Started </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="satisfactionfold">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="textwrap">
          <h2>Reseller Pro Hub Provides Its Agency Partners The Ability To White Label Their Digital Marketing Services. </h2>
          <p>Since opening our doors, Reseller Pro Hub has strived to deliver effective and affordable digital marketing solutions. With our 90% customer retention and a growth rate averaging 280%, we help you achieve your goals.</p>
          <ul class="satisfylist">
            <li>
              <div class="figg">
                <img src="<?php echo $basesurl;?>images/community.svg" alt="">
              </div>
              <h3>High Profit Margins</h3>
              <p>We have a very low reasonable price. RPH White labelled program gives you the ultimate opportunity to achieve high profit margins and quadruple your growth substantially in the market.</p>
            </li>
            <li>
              <div class="figg">
                <img src="<?php echo $basesurl;?>images/support.svg" alt="">
              </div>
              <h3>Customer Support</h3>
              <p>Your agency will get the 24/7 customer support on your projects with a dedicated account manager who will be available on e-mail, chat or phone call regularly.</p>
            </li>
            <li>
              <div class="figg">
                <img src="<?php echo $basesurl;?>images/sales.svg" alt="">
              </div>
              <h3>Project delivery</h3>
              <p>We assure you timely execution of client’s project and assist you in technical support whenever it is required from agency partners.</p>
            </li>
            <li>
              <div class="figg">
                <img src="<?php echo $basesurl;?>images/directory.svg" alt="">
              </div>
              <h3>Marketing Collaterals </h3>
              <p>All of our Agency Partners get complete range of marketing documents, flyers, brochures and training manuals that helps them to easily influence customers.</p>
            </li>
            
          </ul>
        </div>
      </div>
      <div class="col-lg-5">
        <figure>
          <img src="<?php echo $basesurl;?>images/ultimate-resource.png">
        </figure>
      </div>
    </div>
  </div>
</section>





<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>




</body>
</html>