

<html lang="en-US"
  itemscope 
  itemtype="http://schema.org/WebSite" 
  prefix="og: http://ogp.me/ns#" >
<head>
    
<title>Get the perfect logo design - or any design in over 90 categories!</title>
<meta name="description"  content="Design Dok is a digital design agency specializing in branding, animation, mobile and web design and development." />

     
<?php
$style = $_SERVER['HTTP_HOST']; 
$style = "includes/style.php"; 
include($style); 

$urhere = "homepage";
?>
 

</head>


<body class="home blog">

    <div class="app-content">
        <div class="main">
            
        <?php
        $header = $_SERVER['HTTP_HOST']; 
        $header = "includes/header.php"; 
        include($header); 
        ?>



<section class="services-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h2>Thank You</h2>
                <div class="border"></div>
                <h1 class="top">
                    Website Dok can help visualize even the craziest ideas converting them into elegant designs, awesome experiences and catchy brands.
                </h1>
                <a href="<?php echo $path;?>" class="gotohome">Goto Home</a>
            </div>

        </div>
        </div>
    </div>
</section>


<section class="contacts">
    <div class="container">
        <div class="contacts-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <div class="content">
                            <h2 class="form-name">Let’s design together</h2>
                        </div>
                        <h3 class="title">Services</h3>

                       <?php
$footerform = $_SERVER['HTTP_HOST']; 
$footerform = "includes/footer-form.php"; 
include($footerform); 
?>                         
                    </div>  
                </div>
                <div class="col-lg-6">
                    <div class="social-info-wrap">

                        <div class="social-info">
                            <div class="content">
                                <h2 class="form-name">Contacts</h2>
                            </div>

                           <div class="social-flex-wrap">

                                <div class="hire-wrap">
                                    <h3 class="title">Hire</h3>
                                    <a href="mailto:build@websitedok.com" class="mail">build@websitedok.com</a>
                                </div>
                                <div class="follow-wrap">
                                    <h3 class="title">Follow</h3>
                                    <ul>
                                     <li><a href="https://www.facebook.com/designdok/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="https://www.linkedin.com/company/design-dok"><i class="fa fa-linkedin"></i></a></li>
                                     <li><a href="https://dribbble.com/designdok" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                     <li><a href="https://www.instagram.com/designdok/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                   </ul>
                                </div>
                                <div class="map">
                                  <ul>
                                    <li><a href="tel:+19738703610" class="bluecolr"><img src="assets/images/us-flag.png">  +1 973 870 3610</a></li>
                                      <li><a href="tel:+442033181217" class="bluecolr"><img src="assets/images/uk-flag.png">  +44 203 3181 217</a></li>
                        
                                     <li>One gateway center, Newark, New Jersey, USA <br>    <a href="https://goo.gl/maps/zprHU819QK5tRo176" style="font-weight: bold;">Go to location</a></li>
                                      <li>32 London Bridge St London SE1 9SG UK <br>   <a href="https://goo.gl/maps/Fmaj6hTXacM3vWCPA" style="font-weight: bold;">Go to location</a></li>
                
                                  </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>  
            </div>     
        </div>
    </div>    
</section> 


<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer-top.php"; 
include($footer); 
?>





<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = "includes/footer.php"; 
include($footer); 
?>
    

</body>
</html>
