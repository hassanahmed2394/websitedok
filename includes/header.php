<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/websitedoknew-v4/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/';
  }

  ?>

<noscript>
<div id="jqcheck"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII=" alt="No Script" /> Javascript is disabled. Please enable it for better working experience.</div>
</noscript>
<div class="site-wrap">
<div class="nav-context ">
<header class="header" id="page_header"> <a href="<?php echo $path;?>" class="Websitedok ">
  <!-- <div class="Websitedok-spacing"></div> --><img src="assets/images/logo.svg" alt="">
  </a>
  <div class="header_browse">
    


    <div class="header_nav--menu header_nav_submenus"><a href="<?php echo $path;?>" class="header_nav_secondary">Home</a></div>
    <div class="header_nav--menu header_nav_submenus"><a href="<?php echo $path;?>work" class="header_nav_secondary">Portfolio</a></div>
    <div class="header_nav--menu header_nav_courses">
      <a href="#" class="header_nav_primary" tabindex="1">Services <i class="icons" icon="down-arrow"></i></a>
      <div class="header_dropdown" style="display:none;">
        <div id="header_tabs" class="container-lg">
          <div class="closebutton" tabindex="3">x</div>
          <ul>
            <li class="header_roles architecture-construction header_tabs_link active" data-tab="WebsiteDesignDevelopment">
            <a href="<?php echo $path;?>custom-website-development">Custom Website Development</a>
            </li>
            <li class="header_roles architecture-construction header_tabs_link" data-tab="eCommerceSolutions">
            <a href="<?php echo $path;?>ecommerce-solutions">E-commerce Solutions</a>
            </li>
            <li class="header_roles architecture-construction header_tabs_link" data-tab="designandprototype">
            <a href="<?php echo $path;?>brand-design-prototype">Brand Design & Prototype</a>
            </li>
            <li class="header_roles architecture-construction header_tabs_link" data-tab="webappdev">
            <a class="webdev" href="<?php echo $path;?>web-app-development">Web App Development</a>
            </li>
            <li class="header_roles architecture-construction header_tabs_link" data-tab="MobileAppDevelopment">
            <a href="<?php echo $path;?>mobile-app-development">Mobile App Development</a>
            </li>
       
             <li class="header_roles architecture-construction header_tabs_link" data-tab="videoanimation">
            <a href="<?php echo $path;?>video-animation">Video Animation</a>
            </li>
          </ul>


          <div id="WebsiteDesignDevelopment" class="header_tabs_content active">
            <div class="header_tabs_content--container">
              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>wordpress-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/custom-website-development/wordpress.png"></div>

                          <div class="item-text">
                          Wordpress Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>front-end-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/custom-website-development/front-end-development.png"></div>

                          <div class="item-text">
                          Front End Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>back-end-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/custom-website-development/back-end-development.png"></div>

                          <div class="item-text">
                          Back End Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>open-source-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/custom-website-development/open-source-development.png"></div>

                          <div class="item-text">
                          Open Source Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>php-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/custom-website-development/php-development.png"></div>

                          <div class="item-text">
                          PHP Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>drupal-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/custom-website-development/drupal-development.png"></div>

                          <div class="item-text">
                          Drupal Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>minimum-viable-products">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/custom-website-development/minimal-viable-product.png"></div>

                          <div class="item-text">
                          Minimal Viable Products
                          </div>

                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>cms-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/custom-website-development/cms-development.png"></div>

                          <div class="item-text">
                          CMS Development
                          </div>

                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div id="eCommerceSolutions" class="header_tabs_content">
            <div class="header_tabs_content--container">
              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>shopify">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/ecommerce-solution/shopify.png"></div>

                          <div class="item-text">
                          Shopify
                          </div>

                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>magento">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/ecommerce-solution/magento.png"></div>

                          <div class="item-text">
                          Magento
                          </div>

                        </div>
                      </a>
                    </div>
                  </li>
                  
                </ul>
              </div>

              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>opencart">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/ecommerce-solution/opencart.png"></div>

                          <div class="item-text">
                          Opencart
                          </div>

                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>woocommerce">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/ecommerce-solution/woocommerce.png"></div>

                          <div class="item-text">
                          Woocommerce
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div id="designandprototype" class="header_tabs_content">
            <div class="header_tabs_content--container">
              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>brand-identity">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/brand-design-prototype/low-fidelity-wireframe.png"></div>

                          <div class="item-text">
                          Brand Identity
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>website-design">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/brand-design-prototype/ui-design.png"></div>

                          <div class="item-text">
                          Website Design
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  
                </ul>
              </div>

              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>ux-ui-design">
                        <div class="item-each">
                          <div class="item-image">
                          <img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/brand-design-prototype/mockup.png">
                          </div>

                          <div class="item-text">
                          UX & UI Design
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>interactive-prototypes">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/brand-design-prototype/sketching.png"></div>

                          <div class="item-text">
                          Interactive prototypes
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>

          <div id="webappdev" class="header_tabs_content">
            <div class="header_tabs_content--container">
              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>custom-software-development">
                        <div class="item-each">
                          <div class="item-image">
                          <img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/web-app-development/custom-software-development.png">
                          </div>

                          <div class="item-text">
                          Custom Software Development
                          </div>

                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>nodejs-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/web-app-development/database-development.png"></div>

                          <div class="item-text">
                          Node js Development
                          </div>

                        </div>
                      </a>
                    </div>
                  </li>
                  
                </ul>
              </div>

              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>web-php-development">
                        <div class="item-each">
                          <div class="item-image">
                          <img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/web-app-development/php-development.png">
                          </div>

                          <div class="item-text">
                          PHP Development
                          </div>

                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>laravel-development">
                        <div class="item-each">
                          <div class="item-image">
                          <img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/web-app-development/laravel-development.png">
                          </div>

                          <div class="item-text">
                          Laravel Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>

          <div id="MobileAppDevelopment" class="header_tabs_content">
            <div class="header_tabs_content--container">
              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>ios-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/mobile-app-development/ios-development.png"></div>

                          <div class="item-text">
                          iOS Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>android-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/mobile-app-development/android-development.png"></div>

                          <div class="item-text">
                          Android Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  
                 
                </ul>
              </div>

              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>game-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/mobile-app-development/game-development.png"></div>

                          <div class="item-text">
                          Game Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>arvr-app-development">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/mobile-app-development/vr-app-development.png"></div>

                          <div class="item-text">
                          VR/VR App Development
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                 
                </ul>
              </div>
            </div>
          </div>
          
          

          <div id="videoanimation" class="header_tabs_content">
            <div class="header_tabs_content--container">
              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>explainer-video-animation">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/video-animation/explainer-video.png"></div>

                          <div class="item-text">
                          Explainer Video Animation
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>animated-title-trailer">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/video-animation/marketing-video.png"></div>

                          <div class="item-text">
                          Animated Title & Trailer
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  
                  
                </ul>
              </div>

              <div class="header_tabs_column paths browse">
                <ul>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>animated-video-ad">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/video-animation/promo-video.png"></div>

                          <div class="item-text">
                          Animated Video Ad
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="item">
                      <a href="<?php echo $path;?>marketing-promo-video-animation">
                        <div class="item-each">
                          <div class="item-image"><img alt="" src="assets/images/px.png" data-lazysrc="assets/images/icons/video-animation/2d-3d-explainer-animation.png"></div>

                          <div class="item-text">
                          Marketing/Promo Video Animation
                          </div>
                        </div>
                      </a>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>

      

        </div>
      </div>
    </div>
    <div class="header_nav--menu header_nav_submenus"><a href="<?php echo $path;?>pricing" class="header_nav_secondary">Pricing</a></div>
    <!-- <div class="header_nav--menu header_nav_submenus"><a href="<?php echo $path;?>approach" class="header_nav_secondary">Approach</a></div> -->
    <div class="header_nav--menu header_nav_submenus"><a href="<?php echo $path;?>company" class="header_nav_secondary">Company</a></div>

    <div class="header_nav--menu sulotionnav header_nav_submenus">
    <a href="javascript::" class="header_nav_primary " tabindex="1">Solutions <i class="icons" icon="down-arrow"></i></a>
    <ul class="sbmenu">
        <li><a href="<?php echo $path;?>solutions">Start Up</a></li>
        <li><a href="<?php echo $path;?>solutions">Mid Size</a></li>
        <li><a href="<?php echo $path;?>solutions">Enterprise</a></li>
    </ul>
    </div>
    <div class="header_nav--menu header_nav_submenus"><a href="<?php echo $path;?>industries" class="header_nav_secondary">Industries</a></div>
    
  
    <div class="header_nav--menu header_nav_submenus"><a href="Javascript:;" class="header_nav_secondary callusnow" style="color: #02b7ff;">Book a call</a></div>
    <div class="header_nav">

          <ul class="mobile-only">
            
            <li><a href="<?php echo $path;?>" class="header_nav_secondary">Home</a></li>
            <li><a href="<?php echo $path;?>work" class="header_nav_secondary">Portfolio</a></li>
            <li class="hasdropdown"><a href="Javascript:;" class="header_nav_secondary">Services</a>
              <ul class="submenu"> 
                <li><a href="<?php echo $path;?>custom-website-development">Custom Website Development</a></li>
                <li><a href="<?php echo $path;?>ecommerce-solutions">E-commerce Solutions</a></li>
                <li><a href="<?php echo $path;?>brand-design-prototype">Brand Design &amp; Prototype</a></li>
                <li><a href="<?php echo $path;?>web-app-development">Web App Development</a></li>
                <li><a href="<?php echo $path;?>mobile-app-development">Mobile App Development</a></li>
                <li><a href="<?php echo $path;?>website-maintenance">Website Maintenance</a></li>
                <li><a href="<?php echo $path;?>video-animation">Video Animation</a></li>
              </ul>
            </li>
            <li><a href="<?php echo $path;?>pricing" class="header_nav_secondary">Pricing</a></li>
            <li><a href="<?php echo $path;?>approach" class="header_nav_secondary">Approach</a></li>
            <li><a href="<?php echo $path;?>company" class="header_nav_secondary">Company</a></li>
            <!-- <li class="hasdropdown1"><a href="Javascript:;" class="header_nav_secondary">Solutions</a>
              <ul class="submenu submenu2"> 
                <li><a href="<?php echo $path;?>solutions">Start Up</a></li>
                  <li><a href="<?php echo $path;?>solutions">Mid Size</a></li>
                  <li><a href="<?php echo $path;?>solutions">Enterprise</a></li>
              </ul>
            </li> -->

 
            
            <li class="mobile-signin"><a class="header_sign_up_link header_nav_secondary" href="<?php echo $path;?>getstarted" data-aa-title="nav-signup-cta">Get started</a></li>
          </ul>

    </div>
  </div>
  <a href="#" class="header_menu">
  <div class="header_menu_line"></div>
  <div class="header_menu_line"></div>
  <div class="header_menu_line"></div>
  </a>
  <div class="header_utilities"> 
  <a href="javascript:;" class="button flat white header_sign_in_link sign_in_link" data-aa-title="nav-log-in"> 
  <img src="assets/images/us-flag.png"> +1 973 870 3610  </a> 
  <a href="<?php echo $path;?>getstarted" class="button header_sign_up_link" data-aa-title="nav-signup-cta">Get started</a> 
  </div>
  
  <a href="<?php echo $path;?>" class="orderpageclose"><i class="fa fa-window-close-o"></i></a>

  <div class="topformcontainer">
    <div class="topformwrap">
      <div class="formheading">
        <h2>Let's Get Started Exclusive Offer </h2>
      </div>
      <div class="formbody">
        <?php
        $bannerform = $_SERVER['HTTP_HOST']; 
        $bannerform = "includes/bannerform.php"; 
        include($bannerform); 
        ?>
      </div>
    </div>
    <div class="topformswitch">
      <div class="switchicon">
        <span class="fa fa-chevron-down"></span>
      </div>
      <h4>Avail <span>50%</span> DISCOUNT</h4>
    </div>
  </div>


</header>
