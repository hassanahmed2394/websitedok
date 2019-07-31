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
        <div class="generic-block section">
          <div class="generic-block-wrapper lazy-bg  block block--black block--left generic-block--auto  padding-top-hundred-fifty padding-bottom-hundred-fifty     clearfix" style="background-image: url('assets/images/image-res.img.b0971c22-6ac5-4f38-8669-30605e80f076.jpg');">
            <div class="main clearfix">
              <div class="content clearfix">
                <div class="column-control section">
                  <div>
                    <div class="container column-control-container ">
                      <div class="row large       column-control--super-wide">
                        <div class="large-12 columns customPadding" style="padding-left: 100px; padding-right: 100px;">
                          <div class="reference parbase section">
                            <div style="display:inline;" class="cq-dd-paragraph">
                              <div class="main parsys">
                                <div class="free-form-component section">
                                
                                  <div class="proserve_hero--content">
                                    <div class="proserve_hero--tag"><span><strong>Pro</strong>Serv</span></div>
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
                <div class="column-control section">
                  <div>
                    <div class="container column-control-container ">
                      <div class="row large       column-control--super-wide">
                        <div class="large-8 columns customPadding" style="padding-left: 40px; ">
                          <div class="title2 section">
                            <div data-emptytext="Title">
                              <h1 class="  mobile-font-size-3 tablet-font-size-2 desk-font-size-2    title--ultra "> MAKE THE MOST OF OUR PLATFORM. ACCELERATE RESULTS. </h1>
                            </div>
                          </div>
                          <div class="text-4 text section">
                            <div class="cmp-text">
                              <p><span class="fs--medium">Customize your team’s learning experience and drive your most important initiatives forward with our professional services.</span></p>
                            </div>
                          </div>
                          <div class="ps-button section">
                            <div data-emptytext="Button">
                              <div> <a href="#contact-sales" target="_blank" class="button   button--large fancybox " data-aa-title="contact-sales"> Contact us </a> </div>
                            </div>
                          </div>
                        </div>
                        <div class="large-4 columns customPadding" style=" padding-right: 40px;"> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="generic-block section">
          <div class="generic-block-wrapper lazy-bg  block block--true-black block--left   padding-top-zero padding-bottom-zero     clearfix">
            <div class="main clearfix">
              <div class="content clearfix">
                <div class="column-control section">
                  <div>
                    <div class="container column-control-container ">
                      <div class="row large       column-control--super-wide">
                        <div class="large-12 columns ">
                          <div class="tabs section">
                            <div class="tabs--list">
                              <ul class="tabs--parent">
                                <li class="tab--item " data-tab="onboarding-service">Onboarding<span class="tabs--line"></span></li>
                                <li class="tab--item " data-tab="technical-services">Technical Services<span class="tabs--line"></span></li>
                                <li class="tab--item " data-tab="skills-strategy-service">Skills Strategy<span class="tabs--line"></span></li>
                                <li class="tab--item " data-tab="skills-brief">Skills Brief<span class="tabs--line"></span></li>
                              </ul>
                              <div class="tabs--content">
                                <div class="clearfix">
                                  <div class="generic-block section">
                                    <div id="technical-services_" class="hidden"></div>
                                    <div class="generic-block-wrapper lazy-bg  block block--transparent block--left   padding-top-hundred padding-bottom-hundred technical-services    clearfix">
                                      <div class="main clearfix">
                                        <div class="content clearfix">
                                          <div class="column-control section">
                                            <div>
                                              <div class="container column-control-container ">
                                                <div class="row large       column-control--wide">
                                                  <div class="large-12 columns ">
                                                    <div class="title section">
                                                      <div data-emptytext="Title">
                                                        <h4 class="title--white    font-size-6 title--center"> Bring Websitedok into your ecosystem with Technical Services led by certified project managers and implementation specialists. </h4>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:60px"></div>
                                                    </div>
                                                    <div class="accordion section">
                                                      <div class="accordion-title">ProServ Integration<i class="icons" icon="down-arrow"></i></div>
                                                      <div class="accordion-content" style="display:none;">
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="column-control section">
                                                          <div>
                                                            <div class="container column-control-container ">
                                                              <div class="row large       column-control--narrow">
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Description </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="text-3 text section">
                                                                    <div class="cmp-text">
                                                                      <p>Make skill development an integral part of your technology ecosystem with a fully customized experience integrated into your own tools and systems.</p>
                                                                      <ul>
                                                                        <li>See user data, course usage and course completions with APIs</li>
                                                                        <li>Combined with SSO, APIs allow you to seamlessly provision and deprovision user licenses</li>
                                                                        <li>Data exports give you the flexibility to create your own recurring reports and analysis.</li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Resources </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="link-list-ribbon section">
                                                                    <div class="llr-wrapper "> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                      <div class="llr-title-wrapper ">
                                                                        <div class="llr-title">Ecosystem Integration Capabilities with Websitedok </div>
                                                                        <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                                                                      </div>
                                                                      <div class="llr-link-text">Learn more</div>
                                                                      </a> </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="text-3 text section">
                                                          <div class="cmp-text">
                                                            <p style="text-align: center;"><b>Want to learn more? <br />
                                                              </b><span class="tc-gray">Schedule an introduction to our team today</span></p>
                                                          </div>
                                                        </div>
                                                        <div class="ps-button section">
                                                          <div data-emptytext="Button" class="psbutton--center">
                                                            <div> <a href="JavaScript:;" target="_blank" class="button   12 fancybox " data-aa-title="contact-sales"> Contact us </a> </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:20px"></div>
                                                    </div>
                                                    <div class="accordion section">
                                                      <div class="accordion-title">Enterprise Integration<i class="icons" icon="down-arrow"></i></div>
                                                      <div class="accordion-content" style="display:none;">
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="column-control section">
                                                          <div>
                                                            <div class="container column-control-container ">
                                                              <div class="row large       column-control--narrow">
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Description </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="text-2 section">
                                                                    <p>Access user management and usage APIs, data exports and auto-SSO to fully customize your Websitedok experience.<br />
                                                                    </p>
                                                                  </div>
                                                                </div>
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Resources </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="link-list-ribbon section">
                                                                    <div class="llr-wrapper "> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                      <div class="llr-title-wrapper ">
                                                                        <div class="llr-title">API reporting with Websitedok </div>
                                                                        <div class="llr-subtile">OVERVIEW</div>
                                                                      </div>
                                                                      <div class="llr-link-text">Learn more</div>
                                                                      </a> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                      <div class="llr-title-wrapper ">
                                                                        <div class="llr-title">Websitedok reports API</div>
                                                                        <div class="llr-subtile">API IN-DEPTH</div>
                                                                      </div>
                                                                      <div class="llr-link-text">Learn more</div>
                                                                      </a> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                      <div class="llr-title-wrapper ">
                                                                        <div class="llr-title">Ecosystem integration capabilities with Websitedok</div>
                                                                        <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                                                                      </div>
                                                                      <div class="llr-link-text">Learn more</div>
                                                                      </a> </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="text-3 text section">
                                                          <div class="cmp-text">
                                                            <p style="text-align: center;"><b>Want to learn more? <br />
                                                              </b><span class="tc-gray">Schedule an introduction to our team today</span></p>
                                                          </div>
                                                        </div>
                                                        <div class="ps-button section">
                                                          <div data-emptytext="Button" class="psbutton--center">
                                                            <div> <a href="#contact-sales" target="_blank" class="button   12 fancybox " data-aa-title="contact-sales"> Contact us </a> </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:20px"></div>
                                                    </div>
                                                    <div class="accordion section">
                                                      <div class="accordion-title">LMS (Learning Management System)<i class="icons" icon="down-arrow"></i></div>
                                                      <div class="accordion-content" style="display:none;">
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="column-control section">
                                                          <div>
                                                            <div class="container column-control-container ">
                                                              <div class="row large       column-control--narrow">
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Description </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="text-2 section">
                                                                    <p>Combine data export with single sign-on to provide learners with a unified experience, integrating Websitedok into any of the major learning management systems.</p>
                                                                    <ul style="list-style-position: inside;">
                                                                      <li>Get a recurring data export to send Websitedok course details to your LMS and enable single sign-on</li>
                                                                      <li>We use LTI 1.0, SAML 2.0 SSO, IdP or SP deep linking for embedded, course-specific links and/or catalog-specific links</li>
                                                                      <li>Find Websitedok pre-loaded in the top IdP app catalogs: <a href="https://www.onelogin.com/connector/pluralsight" target="_blank">OneLogin</a>, <a href="https://azuremarketplace.microsoft.com/en-us/marketplace/apps?search=Websitedok" target="_blank">Azure</a>, <a href="https://www.okta.com/resources/find-your-apps/?keywords=pluralsight" target="_blank">Okta</a></li>
                                                                    </ul>
                                                                  </div>
                                                                </div>
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Resources </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="link-list-ribbon section">
                                                                    <div class="llr-wrapper "> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                      <div class="llr-title-wrapper ">
                                                                        <div class="llr-title">Using LTI with Websitedok</div>
                                                                        <div class="llr-subtile">TECHNICAL GUIDE</div>
                                                                      </div>
                                                                      <div class="llr-link-text">Learn more</div>
                                                                      </a> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                      <div class="llr-title-wrapper ">
                                                                        <div class="llr-title">Websitedok LMS integrations</div>
                                                                        <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                                                                      </div>
                                                                      <div class="llr-link-text">Learn more</div>
                                                                      </a> </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="text-3 text section">
                                                          <div class="cmp-text">
                                                            <p style="text-align: center;"><b>Want to learn more? <br />
                                                              </b><span class="tc-gray">Schedule an introduction to our team today</span></p>
                                                          </div>
                                                        </div>
                                                        <div class="ps-button section">
                                                          <div data-emptytext="Button" class="psbutton--center">
                                                            <div> <a href="#contact-sales" target="_blank" class="button   12 fancybox " data-aa-title="contact-sales"> Contact us </a> </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:20px"></div>
                                                    </div>
                                                    <div class="accordion section">
                                                      <div class="accordion-title">SSO (Single Sign-On)<i class="icons" icon="down-arrow"></i></div>
                                                      <div class="accordion-content" style="display:none;">
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="column-control section">
                                                          <div>
                                                            <div class="container column-control-container ">
                                                              <div class="row large       column-control--narrow">
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Description </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="text-2 section">
                                                                    <p>Keep your team focused on learning—not on remembering multiple logins—and ease your mind with the highest level of security and privacy for your organization.</p>
                                                                    <ul style="list-style-position: inside;">
                                                                      <li>Give learners a single username and password to access Websitedok</li>
                                                                      <li>Provision licenses automatically, without having to manually email credentials to each user</li>
                                                                    </ul>
                                                                  </div>
                                                                </div>
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Resources </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="link-list-ribbon section">
                                                                    <div class="llr-wrapper "> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                      <div class="llr-title-wrapper ">
                                                                        <div class="llr-title">Why use SSO with Websitedok</div>
                                                                        <div class="llr-subtile">TECHNICAL GUIDE</div>
                                                                      </div>
                                                                      <div class="llr-link-text">Learn more</div>
                                                                      </a> </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="ps-button section">
                                                          <div data-emptytext="Button" class="psbutton--center">
                                                            <div> <a href="#contact-sales" target="_blank" class="button   12 fancybox " data-aa-title="contact-sales"> Contact us </a> </div>
                                                          </div>
                                                        </div>
                                                        <div class="text-3 text section">
                                                          <div class="cmp-text">
                                                            <p style="text-align: center;"><b>Want to learn more? <br />
                                                              </b><span class="tc-gray">Schedule an introduction to our team today</span></p>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
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
                                  <div class="generic-block section">
                                    <div id="skills-strategy-service_" class="hidden"></div>
                                    <div class="generic-block-wrapper lazy-bg  block block--true-black block--left   padding-top-hundred padding-bottom-hundred skills-strategy-service    clearfix">
                                      <div class="main clearfix">
                                        <div class="content clearfix">
                                          <div class="column-control section">
                                            <div>
                                              <div class="container column-control-container ">
                                                <div class="row        ">
                                                  <div class="medium-12 columns ">
                                                    <div class="title section">
                                                      <div data-emptytext="Title">
                                                        <h4 class="title--white    font-size-6 title--center    "> Proactively drive results with help from our skills strategy experts. We will identify the skills you need and align Websitedok features and content to your organization. </h4>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:60px"></div>
                                                    </div>
                                                    <div class="column-control section">
                                                      <div>
                                                        <div class="container column-control-container ">
                                                          <div class="row large       column-control--narrow">
                                                            <div class="large-6 columns ">
                                                              <div class="title section">
                                                                <div data-emptytext="Title">
                                                                  <h6 class="title--white    font-size-8   title--bold  "> Description </h6>
                                                                </div>
                                                              </div>
                                                              <div class="text-2 section">
                                                                <p>Chances are, the talent you need already exists on your team—it’s just a matter of developing the right skills. If you’ve identified where you need to go but don’t know which skills or roles you need to get there, our skills strategy will guide the way. Our experts map out the systems, tools and topics your team needs to learn across all experience levels. Through ongoing face-to-face and phone consultations, we help you deliver innovation faster by identifying and closing skills gaps.</p>
                                                              </div>
                                                            </div>
                                                            <div class="large-6 columns ">
                                                              <div class="link-list-ribbon section">
                                                                <div class="llr-wrapper llr-full-width"> <a href="JavaScript:;" class="llr-item llr-bg-semi-black ">
                                                                  <div class="llr-title-wrapper ">
                                                                    <div class="llr-title">Skills Strategy Plan</div>
                                                                    <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                                                                  </div>
                                                                  <div class="llr-link-text">Learn more</div>
                                                                  </a> </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:40px"></div>
                                                    </div>
                                                    <div class="text-3 text section">
                                                      <div class="cmp-text">
                                                        <p style="text-align: center;"><b>Want to learn more? <br />
                                                          </b><span class="tc-gray">Schedule an introduction to our team today</span></p>
                                                      </div>
                                                    </div>
                                                    <div class="ps-button section">
                                                      <div data-emptytext="Button" class="psbutton--center">
                                                        <div> <a href="#contact-sales" target="_blank" class="button   12 fancybox " data-aa-title="contact-sales"> Contact us </a> </div>
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
                                  <div class="generic-block section">
                                    <div id="onboarding-service_" class="hidden"></div>
                                    <div class="generic-block-wrapper lazy-bg  block block--true-black block--left   padding-top-hundred padding-bottom-hundred onboarding-service    clearfix">
                                      <div class="main clearfix">
                                        <div class="content clearfix">
                                          <div class="column-control section">
                                            <div>
                                              <div class="container column-control-container ">
                                                <div class="row        ">
                                                  <div class="medium-12 columns ">
                                                    <div class="title section">
                                                      <div data-emptytext="Title">
                                                        <h4 class="title--white    font-size-6 title--center    "> Get started on the right foot. Our onboarding team will help integrate our platform into your ecosystem, guide your skill development strategy and help you put that strategy into action. </h4>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:60px"></div>
                                                    </div>
                                                    <div class="column-control section">
                                                      <div>
                                                        <div class="container column-control-container ">
                                                          <div class="row large       column-control--narrow">
                                                            <div class="large-6 columns ">
                                                              <div class="title section">
                                                                <div data-emptytext="Title">
                                                                  <h6 class="title--white    font-size-8   title--bold  "> Description </h6>
                                                                </div>
                                                              </div>
                                                              <div class="text-3 text section">
                                                                <div class="cmp-text">
                                                                  <p>Through consultations, technical services, enablement sessions and adoption campaigns, You’ll see immediate adoption and progress toward your business objectives from day one.</p>
                                                                  <p>You get access to a dedicated onboarding consultant, enterprise support engineer and skills strategy expert to:</p>
                                                                  <ul>
                                                                    <li>
                                                                      <p>Design and implement a custom skills strategy aligned to your business goals, technologist roles and technology stack</p>
                                                                    </li>
                                                                    <li>
                                                                      <p>Set up your account to successfully scale Websitedok across your technology teams with project management and integration services</p>
                                                                    </li>
                                                                    <li>
                                                                      <p>Accelerate the execution of your skills strategy with a full launch plan including enablement sessions for stakeholders running your skill development program and adoption campaigns for your technologists.</p>
                                                                    </li>
                                                                  </ul>
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div class="large-6 columns ">
                                                              <div class="title section">
                                                                <div data-emptytext="Title">
                                                                  <h6 class="title--white    font-size-8   title--bold  "> Resources </h6>
                                                                </div>
                                                              </div>
                                                              <div class="link-list-ribbon section">
                                                                <div class="llr-wrapper "> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                  <div class="llr-title-wrapper ">
                                                                    <div class="llr-title">Websitedok ProServ Onboarding</div>
                                                                    <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                                                                  </div>
                                                                  <div class="llr-link-text">Learn more</div>
                                                                  </a> </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:40px"></div>
                                                    </div>
                                                    <div class="text-3 text section">
                                                      <div class="cmp-text">
                                                        <p style="text-align: center;"><b>Want to learn more? <br />
                                                          </b><span class="tc-gray">Schedule an introduction to our team today</span></p>
                                                      </div>
                                                    </div>
                                                    <div class="ps-button section">
                                                      <div data-emptytext="Button" class="psbutton--center">
                                                        <div> <a href="#contact-sales" target="_blank" class="button   12 fancybox " data-aa-title="contact-sales"> Contact us </a> </div>
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
                                  <div class="generic-block section">
                                    <div id="skills-brief_" class="hidden"></div>
                                    <div class="generic-block-wrapper lazy-bg  block block--true-black block--left   padding-top-hundred padding-bottom-hundred skills-brief    clearfix">
                                      <div class="main clearfix">
                                        <div class="content clearfix">
                                          <div class="column-control section">
                                            <div>
                                              <div class="container column-control-container ">
                                                <div class="row        ">
                                                  <div class="medium-12 columns ">
                                                    <div class="title section">
                                                      <div data-emptytext="Title">
                                                        <h4 class="title--white    font-size-6 title--center    "> Innovation doesn’t come from acquiring a single skill. Explore strategies that enable innovation at scale and close skills gaps along the entire spectrum, from foundational to strategic. </h4>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:60px"></div>
                                                    </div>
                                                    <div class="accordion section">
                                                      <div class="accordion-title">Software Development<i class="icons" icon="down-arrow"></i></div>
                                                      <div class="accordion-content" style="display:none;">
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="column-control section">
                                                          <div>
                                                            <div class="container column-control-container ">
                                                              <div class="row large       column-control--narrow">
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Description </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="text-2 section">
                                                                    <p>Gain a deep understanding of how to build, deploy, secure and scale everything from web apps to mobile apps using C#, Java, Angular, JavaScript and more. And stay up to speed on the ever-changing landscape of emerging software development tools and techniques.</p>
                                                                  </div>
                                                                </div>
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Resources </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="link-list-ribbon section">
                                                                    <div class="llr-wrapper "> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                      <div class="llr-title-wrapper ">
                                                                        <div class="llr-title">Front End Development</div>
                                                                        <div class="llr-subtile">SKILLS BRIEF</div>
                                                                      </div>
                                                                      <div class="llr-link-text">Learn more</div>
                                                                      </a> </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="text-3 text section">
                                                          <div class="cmp-text">
                                                            <p style="text-align: center;"><b>Want to learn more? <br />
                                                              </b><span class="tc-gray">Schedule an introduction to our team today</span></p>
                                                          </div>
                                                        </div>
                                                        <div class="ps-button section">
                                                          <div data-emptytext="Button" class="psbutton--center">
                                                            <div> <a href="#contact-sales" target="_blank" class="button   12 fancybox " data-aa-title="contact-sales"> Contact us </a> </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:20px"></div>
                                                    </div>
                                                    <div class="accordion section">
                                                      <div class="accordion-title">Information and Cyber Security<i class="icons" icon="down-arrow"></i></div>
                                                      <div class="accordion-content" style="display:none;">
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="column-control section">
                                                          <div>
                                                            <div class="container column-control-container ">
                                                              <div class="row large       column-control--narrow">
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Description </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="text-2 section">
                                                                    <p>Keep your company and data secure by staying current on cyber and data security trends and best practices. Better identify, prevent, and respond to security threats by building a security-centric culture across your organization. </p>
                                                                  </div>
                                                                </div>
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Resources </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="link-list-ribbon section">
                                                                    <div class="llr-wrapper "> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                      <div class="llr-title-wrapper ">
                                                                        <div class="llr-title"> Security</div>
                                                                        <div class="llr-subtile">SKILLS BRIEF</div>
                                                                      </div>
                                                                      <div class="llr-link-text">Learn more</div>
                                                                      </a> </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="text-3 text section">
                                                          <div class="cmp-text">
                                                            <p style="text-align: center;"><b>Want to learn more? <br />
                                                              </b><span class="tc-gray">Schedule an introduction to our team today</span></p>
                                                          </div>
                                                        </div>
                                                        <div class="ps-button section">
                                                          <div data-emptytext="Button" class="psbutton--center">
                                                            <div> <a href="#contact-sales" target="_blank" class="button   12 fancybox " data-aa-title="contact-sales"> Contact us </a> </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="spacer section">
                                                      <div class="spacer  " style="height:20px"></div>
                                                    </div>
                                                    <div class="accordion section">
                                                      <div class="accordion-title">Business Professional <i class="icons" icon="down-arrow"></i></div>
                                                      <div class="accordion-content" style="display:none;">
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="column-control section">
                                                          <div>
                                                            <div class="container column-control-container ">
                                                              <div class="row large       column-control--narrow">
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Description </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="text-2 section">
                                                                    <p>Understand the skills you need to navigate a successful career. Improve your project management, leadership and communication skills and become more productive.</p>
                                                                  </div>
                                                                </div>
                                                                <div class="large-6 columns ">
                                                                  <div class="title section">
                                                                    <div data-emptytext="Title">
                                                                      <h6 class="title--white    font-size-8   title--bold  "> Resources </h6>
                                                                    </div>
                                                                  </div>
                                                                  <div class="link-list-ribbon section">
                                                                    <div class="llr-wrapper "> <a href="JavaScript:;" class="llr-item semi-black ">
                                                                      <div class="llr-title-wrapper ">
                                                                        <div class="llr-title">Project and Product Strategy</div>
                                                                        <div class="llr-subtile">SKILLS BRIEF</div>
                                                                      </div>
                                                                      <div class="llr-link-text">Learn more</div>
                                                                      </a> </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
                                                        </div>
                                                        <div class="text-3 text section">
                                                          <div class="cmp-text">
                                                            <p style="text-align: center;"><b>Want to learn more? <br />
                                                              </b><span class="tc-gray">Schedule an introduction to our team today</span></p>
                                                          </div>
                                                        </div>
                                                        <div class="ps-button section">
                                                          <div data-emptytext="Button" class="psbutton--center">
                                                            <div> <a href="#contact-sales" target="_blank" class="button   12 fancybox " data-aa-title="contact-sales"> Contact us </a> </div>
                                                          </div>
                                                        </div>
                                                        <div class="spacer section">
                                                          <div class="spacer  " style="height:40px"></div>
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="generic-block section">
          <div id="quote_" class="hidden"></div>
          <div class="generic-block-wrapper lazy-bg parallax block block--custom-color block--left generic-block--auto  padding-top-fifty padding-bottom-fifty quote    clearfix" style="background: rgba(76,186,114,1);">
            <div class="main clearfix">
              <div class="content clearfix">
                <div class="column-control section">
                  <div>
                    <div class="container column-control-container ">
                      <div class="row large  add-flex     column-control--wide">
                        <div class="large-4 columns ">
                          <div class="generic-block section">
                            <div class="generic-block-wrapper lazy-bg  block block--transparent block--left generic-block--auto generic-block--vertical-center padding-top-zero padding-bottom-zero     clearfix">
                              <div class="main clearfix">
                                <div class="content clearfix">
                                  <div class="column-control section">
                                    <div>
                                      <div class="container column-control-container ">
                                        <div class="row        ">
                                          <div class="medium-12 columns ">
                                            <div class="image section"> <img src="assets/images/px.png" data-lazysrc="assets/images/cerner-white.png" class="image--center " /> </div>
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
                        <div class="large-8 columns ">
                          <div class="generic-block section">
                            <div class="generic-block-wrapper lazy-bg  block block--transparent block--left generic-block--auto generic-block--vertical-center padding-top-zero padding-bottom-zero     clearfix">
                              <div class="main clearfix">
                                <div class="content clearfix">
                                  <div class="column-control section">
                                    <div>
                                      <div class="container column-control-container ">
                                        <div class="row        ">
                                          <div class="medium-12 columns ">
                                            <div class="text-4 text section">
                                              <div class="cmp-text">
                                                <p><span class="fs--normal"><span class="tc-white"><span class="remove-bottom-margin">“After learning about our programs, the professional services team proposed workable course solutions to help us reach our business goals. For two of our on-boarding programs, we’ve cut back on 160 hours of ILT time - and over 350 hours of facilitation time.”</span></span></span></p>
                                                <p><span class="fs--normal"><span class="tc-white"><b>-- Ben Cady, on leveraging our Technology Strategy Plan</b></span></span></p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="placeholder clearfix" style="visibility:hidden">
                                  <div class="column-control section">
                                    <div>
                                      <div class="container column-control-container ">
                                        <div class="row        ">
                                          <div class="medium-12 columns ">
                                            <div class="text-4 text section">
                                              <div class="cmp-text">
                                                <p><span class="fs--normal"><span class="tc-white"><span class="remove-bottom-margin">“After learning about our programs, the professional services team proposed workable course solutions to help us reach our business goals. For two of our on-boarding programs, we’ve cut back on 160 hours of ILT time - and over 350 hours of facilitation time.”</span></span></span></p>
                                                <p><span class="fs--normal"><span class="tc-white"><b>-- Ben Cady, on leveraging our Technology Strategy Plan</b></span></span></p>
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
            </div>
          </div>
        </div>
        <div class="generic-block section">
          <div class="generic-block-wrapper lazy-bg parallax block block--dark-gray-2 block--left   padding-top-hundred padding-bottom-zero     clearfix">
            <div class="main clearfix">
              <div class="content clearfix">
                <div class="column-control section">
                  <div>
                    <div class="container column-control-container ">
                      <div class="row        ">
                        <div class="medium-12 columns ">
                          <div class="title section">
                            <div data-emptytext="Title">
                              <h2 class="title--white    font-size-4 title--center  title--light  "> Popular Resources </h2>
                            </div>
                          </div>
                          <div class="spacer section">
                            <div class="spacer  " style="height:60px"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column-control section">
                  <div>
                    <div class="container column-control-container ">
                      <div class="row large       column-control--super-wide">
                        <div class="large-12 columns ">
                          <div class="link-list-ribbon section">
                            <div class="llr-wrapper llr-auto-columns"> <a href="JavaScript::" class="llr-item llr-bg-semi-black ">
                              <div class="llr-title-wrapper ">
                                <div class="llr-title">Extracting Data from Websitedok API</div>
                                <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                              </div>
                              <div class="llr-link-text">Learn more</div>
                              </a> <a href="JavaScript::" class="llr-item llr-bg-semi-black ">
                              <div class="llr-title-wrapper ">
                                <div class="llr-title">Websitedok to SuccessFactors Integration</div>
                                <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                              </div>
                              <div class="llr-link-text">Learn more</div>
                              </a> <a href="JavaScript::" class="llr-item llr-bg-semi-black ">
                              <div class="llr-title-wrapper ">
                                <div class="llr-title">Websitedok to Cornerstone OnDemand Integration</div>
                                <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                              </div>
                              <div class="llr-link-text">Learn more</div>
                              </a> <a href="JavaScript::" class="llr-item llr-bg-semi-black ">
                              <div class="llr-title-wrapper ">
                                <div class="llr-title">Websitedok to Absorb Integration</div>
                                <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                              </div>
                              <div class="llr-link-text">Learn more</div>
                              </a> <a href="JavaScript::" class="llr-item llr-bg-semi-black ">
                              <div class="llr-title-wrapper ">
                                <div class="llr-title">Ecosystem Integration Capabilities with Websitedok</div>
                                <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                              </div>
                              <div class="llr-link-text">Learn more</div>
                              </a> <a href="JavaScript:;" class="llr-item llr-bg-semi-black ">
                              <div class="llr-title-wrapper ">
                                <div class="llr-title">Websitedok to Pathgather Integration</div>
                                <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                              </div>
                              <div class="llr-link-text">Learn more</div>
                              </a> <a href="JavaScript:;" class="llr-item llr-bg-semi-black ">
                              <div class="llr-title-wrapper ">
                                <div class="llr-title">Websitedok to Degreed Integration</div>
                                <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                              </div>
                              <div class="llr-link-text">Learn more</div>
                              </a> <a href="JavaScript:;" class="llr-item llr-bg-semi-black ">
                              <div class="llr-title-wrapper ">
                                <div class="llr-title">Websitedok LMS integrations</div>
                                <div class="llr-subtile">TECHNICAL WHITEPAPER</div>
                              </div>
                              <div class="llr-link-text">Learn more</div>
                              </a> </div>
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
    
        <div class="generic-block section">
          <div class="generic-block-wrapper lazy-bg parallax block block--dark-gray-2 block--center generic-block--auto  padding-top-fifty padding-bottom-fifty     clearfix">
            <div class="main clearfix">
              <div class="content clearfix">
                <div class="column-control section">
                  <div>
                    <div class="container column-control-container ">
                      <div class="row        ">
                        <div class="medium-12 columns "> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-2 section">
                  <p style="text-align: center;">Subject to the Websitedok Professional Services <a href="JavaScript:;">Terms and Conditions</a><br />
                  </p>
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
