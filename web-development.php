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




<div id="content" class="clearfix brws-pg" role="main">
      <div class="not-library-page">
        <div id="browse-top">
          <div class="browse-hero section">
            <div class="block block-content" style="background-image:url('assets/images/software-dev.jpg')">
              <div class="row column-control--super-wide">
                <div class="large-12 columns">
                  <div class="browse-breadcrumbs"> <a href="/browse">Browse</a>&nbsp;&nbsp;&rsaquo;&nbsp; <a href="/browse/software-development">Software development </a>&nbsp;&nbsp;&rsaquo;&nbsp; <span>Web Development</span> </div>
                </div>
                <div class="large-7 columns left-column">
                  <div class="section-image"> <img class="pillar-icon" src="assets/images/px.png" data-lazysrc="assets/images/software-dev.png" /> </div>
                  <div class="section title2">
                    <h1 class="title--ultra">Grow your Web Development <span class="scribble-under pink">skills</span></h1>
                  </div>
                  <div class="section text-4">
                    <div class="section-description">
                      <p>Learn how to develop effective and captivating websites using the latest web development tools and practices. Gain experience developing with HTML, JavaScript, CSS, Python, and more. Our expert authors guide you through development and testing via easy-to-follow web development courses.</p>
                    </div>
                  </div>
                  <a href="https://www.Websitedok.com/buy?sku=IND-M-PLUS-FT" class="button button--small button--pink" title="Subscribe" data-aa-title="browse-hero-cta">Start a FREE 10-day trial</a> </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="brws-pitches-wrapper">
            <div class="brws-pitches clearfix">
              <div class="brws-pitch-wrapper">
                <div class="brws-pitch clearfix"><img src="assets/images/px.png" data-lazysrc="assets/images/timeline-icon.svg" alt=""></span><span>Learn on your own timeline</span></div>
              </div>
              <div class="brws-pitch-wrapper">
                <div class="brws-pitch clearfix"><img src="assets/images/px.png" data-lazysrc="assets/images/master-craft-icon.svg" alt=""></span><span>Master your craft</span></div>
              </div>
              <div class="brws-pitch-wrapper">
                <div class="brws-pitch clearfix"><img src="assets/images/px.png" data-lazysrc="assets/images/emerging-trends-icon.svg" alt=""></span><span>Keep up with emerging trends</span></div>
              </div>
            </div>
          </div>
          <div class="brws-paths-courses-wrapper">
            <div class="brws-paths-courses">
              <div class="courses-top">
                <h2>Level up your Web Development skills</h2>
                <p>Learn the latest from experts with real-world experience.</p>
              </div>
              <h4>Top Web Development paths</h4>
              <div class="content-highlight section">
                <div id="pathContent" class="clearfix tab-content content-highlight-content auto multiple-per-row display-list-view">
                  <div id="path-list-target" class="path-row row clearfix">
                    <div class="path-list-page">
                      <div class="item"> <a href="/paths/react">
                        <div class="item-each">
                          <div class="item-image"> <img alt="React" src="assets/images/px.png" data-lazysrc="https://Websitedok2.imgix.net/paths/images/react-0f6558f88f.png?w=75"> </div>
                          <div class="item-text">
                            <div class="course-item__type">Path</div>
                            <div class="course-item__title">React</div>
                            <ul>
                              <li><span>12</span> Courses</li>
                              <li><span>42</span> Hours</li>
                              <li class="has-skill-iq has-test" title="Skill IQ available"> <svg viewBox="0 0 512 512">
                                <title>Skill IQ available</title>
                                <defs>
                                  <linearGradient x1="23.812%" y1="22.445%" x2="100%" y2="100%" id="icon-datacamp-linearGradient">
                                    <stop stop-color="#F05A28" offset="0%"></stop>
                                    <stop stop-color="#E80A89" offset="100%"></stop>
                                  </linearGradient>
                                </defs>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <g fill-rule="nonzero">
                                    <path d="M512,256 L512,512 L256,512 C114.615104,512 0,397.384896 0,256 C0,114.615104 114.615104,0 256,0 C397.384896,0 512,114.615104 512,256 Z" fill="url(#icon-datacamp-linearGradient)"></path>
                                    <circle fill="#222222" cx="260.736" cy="260.736" r="132.736"></circle>
                                  </g>
                                </g>
                                </svg> <span>Get your Skill IQ</span> </li>
                            </ul>
                          </div>
                        </div>
                        </a> </div>
                      <div class="item"> <a href="/paths/api-development-in-aspnet-core">
                        <div class="item-each">
                          <div class="item-image"> <img alt="API Development in ASP.NET Core" src="assets/images/px.png" data-lazysrc="https://Websitedok2.imgix.net/paths/images/dot-net-e535ca86d0.png?w=75"> </div>
                          <div class="item-text">
                            <div class="course-item__type">Path</div>
                            <div class="course-item__title">API Development in ASP.NET Core</div>
                            <ul>
                              <li><span>5</span> Courses</li>
                              <li><span>16</span> Hours</li>
                            </ul>
                          </div>
                        </div>
                        </a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <h4>Top Web Development courses</h4>
              <div class="content-highlight section">
                <div id="tab-courses" class="clearfix tab-content content-highlight-content auto multiple-per-row display-list-view">
                  <div class="course-list-rows"> <a class="course-item columns" href="/courses/front-end-web-app-html5-javascript-css">
                    <div class="course-item__icon"> <i class="icon-playButton"></i> <img src="assets/images/px.png" data-lazysrc="assets/images/front-end-web-app-html5-javascript-css-v1.jpg?w=150" alt="Front-End Web Development Quick Start With HTML5, CSS, and JavaScript"> </div>
                    <div class="course-item__info">
                      <div class="course-item__type">Course</div>
                      <div class="course-item__title">Front-End Web Development Quick Start With HTML5, CSS, and JavaScript</div>
                      <div class="course-item__details">
                        <div class="course--item__list course-item__author">Shawn Wildermuth</div>
                        <div class="course--item__list course-item__level">Beginner</div>
                        <div class="course--item__list course-item__duration">3h 4m</div>
                      </div>
                    </div>

                    </a> <a class="course-item columns" href="/courses/front-end-web-development-get-started">
                    <div class="course-item__icon"> <i class="icon-playButton"></i> <img src="assets/images/px.png" data-lazysrc="assets/images/front-end-web-development-get-started-v1.jpg?w=150" alt="Front End Web Development: Get Started"> </div>
                    <div class="course-item__info">
                      <div class="course-item__type">Course</div>
                      <div class="course-item__title">Front End Web Development: Get Started</div>
                      <div class="course-item__details">
                        <div class="course--item__list course-item__author">Joe Eames</div>
                        <div class="course--item__list course-item__level">Beginner</div>
                        <div class="course--item__list course-item__duration">3h 47m</div>
                      </div>
                    </div>
                    </a> <a class="course-item columns" href="/courses/web-development-executive-briefing">
                    <div class="course-item__icon"> <i class="icon-playButton"></i> <img src="assets/images/px.png" data-lazysrc="assets/images/web-development-executive-briefing-v2.png?w=150" alt="Web Development: Executive Briefing"> </div>
                    <div class="course-item__info">
                      <div class="course-item__type">Course</div>
                      <div class="course-item__title">Web Development: Executive Briefing</div>
                      <div class="course-item__details">
                        <div class="course--item__list course-item__author">Brice Wilson</div>
                        <div class="course--item__list course-item__level">Beginner</div>
                        <div class="course--item__list course-item__duration">30m</div>
                      </div>
                    </div>
                    </a> <a class="course-item columns" href="/courses/react-js-getting-started">
                    <div class="course-item__icon"> <i class="icon-playButton"></i> <img src="assets/images/px.png" data-lazysrc="assets/images/react-js-getting-started-v2.png?w=150" alt="React: Getting Started"> </div>
                    <div class="course-item__info">
                      <div class="course-item__type">Course</div>
                      <div class="course-item__title">React: Getting Started</div>
                      <div class="course-item__details">
                        <div class="course--item__list course-item__author">Samer Buna</div>
                        <div class="course--item__list course-item__level">Beginner</div>
                        <div class="course--item__list course-item__duration">4h 1m</div>
                      </div>
                    </div>
                    </a> <a class="course-item columns" href="/courses/full-stack-web-development-python-web2py">
                    <div class="course-item__icon"> <i class="icon-playButton"></i> <img src="assets/images/px.png" data-lazysrc="assets/images/audience/software-development.jpg?w=150" alt="Full Stack Web Development with Python (WEB2PY)"> </div>
                    <div class="course-item__info">
                      <div class="course-item__type">Course</div>
                      <div class="course-item__title">Full Stack Web Development with Python (WEB2PY)</div>
                      <div class="course-item__details">
                        <div class="course--item__list course-item__author">Terry Toy</div>
                        <div class="course--item__list course-item__level">Beginner</div>
                        <div class="course--item__list course-item__duration">3h 2m</div>
                      </div>
                    </div>
                    </a> <a class="course-item columns" href="/courses/javascript-development-environment">
                    <div class="course-item__icon"> <i class="icon-playButton"></i> <img src="assets/images/px.png" data-lazysrc="assets/images/javascript-development-environment-v1.jpg?w=150" alt="Building a JavaScript Development Environment"> </div>
                    <div class="course-item__info">
                      <div class="course-item__type">Course</div>
                      <div class="course-item__title">Building a JavaScript Development Environment</div>
                      <div class="course-item__details">
                        <div class="course--item__list course-item__author">Cory House</div>
                        <div class="course--item__list course-item__level">Beginner</div>
                        <div class="course--item__list course-item__duration">5h 19m</div>
                      </div>
                    </div>
                    </a> </div>
                  <a href="/search?categories=course&q=Web%20Development&roles=software-development">
                  <div class="search-results-section__footer columns">
                    <p>View more courses »</p>
                  </div>
                  </a> </div>
              </div>
            </div>
          </div>
          <div class="brws-what-is-wrapper">
            <div class="brws-what-is">
              <h2>The Technology <span class="scribble-under pink">Skills</span> Platform</h2>
              <div class="brws-what-is-points">
                <div class="brws-what-is-point"> <img src="assets/images/px.png" data-lazysrc="assets/images/iq-test-icon.png">
                  <h4>Websitedok IQ</h4>
                  <p>Validate skill levels with assessments that take 5 minutes or less.</p>
                </div>
                <div class="brws-what-is-point"> <img src="assets/images/px.png" data-lazysrc="assets/images/channels-icon.png">
                  <h4>Channels</h4>
                  <p>Curate and share Websitedok content to reach your learning goals faster.</p>
                </div>
                <div class="brws-what-is-point"> <img src="assets/images/px.png" data-lazysrc="assets/images/hands-on-learning-icon.png">
                  <h4>Hands-on learning</h4>
                  <p>Practice and apply knowledge faster in real-world scenarios with projects and interactive courses.</p>
                </div>
                <div class="brws-what-is-point"> <img src="assets/images/px.png" data-lazysrc="assets/images/courses-icon.png">
                  <h4>Thousands of courses</h4>
                  <p>Keep up with the pace of change with expert-led, in-depth courses.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="generic-block section">
            <div id="what-is-Websitedok_" class="hidden"></div>
            <div class="generic-block-wrapper lazy-bg  block block--black block--left   padding-top-hundred-fifty padding-bottom-hundred-fifty what-is-Websitedok    clearfix">
              <div class="main clearfix">
                <div class="content clearfix">
                  <div class="column-control section">
                    <div>
                      <div class="container column-control-container ">
                        <div class="row large       column-control--super-wide">
                          <div class="large-6 columns customPadding" style=" padding-right: 50px;">
                            <div class="video parbase section">
                              <div class="video-component video-show-button black-white-play-btn ">
                                <div>
                                  <div data-vid-comp-id="-p7HKftt8z0" class="video-comp-yt-api-vid"></div>
                                </div>
                              </div>
                            </div>
                            <div class="spacer section">
                              <div class="spacer hide-for-small-only hide-for-medium-only" style="height:0px"></div>
                              <div class="spacer show-for-medium-only" style="height:60px"></div>
                              <div class="spacer show-for-small-only" style="height:60px"></div>
                            </div>
                          </div>
                          <div class="large-6 columns customPadding" style="padding-left: 50px; ">
                            <div class="title2 section">
                              <div data-emptytext="Title">
                                <h2 class="        title--ultra "> WHAT IS Websitedok? </h2>
                              </div>
                            </div>
                            <div class="text-4 text section">
                              <div class="cmp-text">
                                <p>Your career is defined by what you know and how well you know it. </p>
                                <p>With our platform, you can benchmark and prove your knowledge, keep up with emerging trends and build in-demand skills in areas like DevOps, machine learning, cloud, security and infrastructure. </p>
                              </div>
                            </div>
                            <div class="ps-button section">
                              <div data-emptytext="Button">
                                <div> <a href="/learn" target="_self" class="button  button--secondary--white 11  " data-aa-title="learn-more-learn-page"> Learn more </a> </div>
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
          <div class="brws-testimonials-wrapper lazy-bg">
            <div class="brws-testimonials">
              <h2>What our customers are saying</h2>
              <div class="twitter-feed">
                <div class="tl-wrapper">
                  <div> 
                    <script src="/etc/clientlibs/Websitedok/main/js/separates/slick.min.js"></script>
                    <div>
                      <div data-emptytext="Title"> </div>
                    </div>
                    <div class="tl-wrapper-inner">
                      <div class="tl-tweets">
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/mamponching" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/1094960665167507456/3xYfOLDK_bigger.jpg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/mamponching" class="tl-tweet-authorName">Ponch Alfonso</a> <a target="_blank" href="https://twitter.com/mamponching" class="tl-tweet-authorScreenName">@mamponching</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">Loving the quality content at <a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a>!</div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=1110187315119321093">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=1110187315119321093">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=1110187315119321093">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/JaviKroonenburg" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/501671690380640256/JLmWs0X5_bigger.jpeg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/JaviKroonenburg" class="tl-tweet-authorName">Javi Kroonenburg</a> <a target="_blank" href="https://twitter.com/JaviKroonenburg" class="tl-tweet-authorScreenName">@JaviKroonenburg</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">Looks like Websitedok is slowly pushing netflix to the background during my weekends.</div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=1102174237048086529">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=1102174237048086529">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=1102174237048086529">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/zoranmax" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/851156809276694529/jqnDT7CJ_bigger.jpg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/zoranmax" class="tl-tweet-authorName">Zoran Maksimovic</a> <a target="_blank" href="https://twitter.com/zoranmax" class="tl-tweet-authorScreenName">@zoranmax</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">I just renewed my <a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a> subscription
                            cannot live without it :)</div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=1021435522160513024">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=1021435522160513024">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=1021435522160513024">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/al3ksis" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/1088527089928671232/KjJXS9sr_bigger.jpg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/al3ksis" class="tl-tweet-authorName">Aleksis Tulonen</a> <a target="_blank" href="https://twitter.com/al3ksis" class="tl-tweet-authorScreenName">@al3ksis</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">I’ve really liked <a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a> so far on upgrading my technical skills.</div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=966978270808899584">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=966978270808899584">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=966978270808899584">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/mattliebowitz" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/784398810076282880/9oLto_D7_bigger.jpg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/mattliebowitz" class="tl-tweet-authorName">Matt Liebowitz</a> <a target="_blank" href="https://twitter.com/mattliebowitz" class="tl-tweet-authorScreenName">@mattliebowitz</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">Huge fan of <a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a> - use it myself and we use it internally for our Consulting team. Fantastic service. <a target="_blank" href="https://t.co/CBlKPs0m7P">https://t.co/CBlKPs0m7P</a></div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=977201219079950337">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=977201219079950337">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=977201219079950337">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/lanceengland" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/1135280933924462593/1OPEs_C6_bigger.jpg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/lanceengland" class="tl-tweet-authorName">Lance England</a> <a target="_blank" href="https://twitter.com/lanceengland" class="tl-tweet-authorScreenName">@lanceengland</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">Pretty much my biggest no-brainer every year is renewing my <a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a> annual sub.</div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=978373878429966337">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=978373878429966337">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=978373878429966337">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/gregor_suttie" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/1122950456739868672/CtEtlmcd_bigger.jpg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/gregor_suttie" class="tl-tweet-authorName">Gregor Suttie - AzureGreg from Scotland, UK</a> <a target="_blank" href="https://twitter.com/gregor_suttie" class="tl-tweet-authorScreenName">@gregor_suttie</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">Spent my day off learning <a target="_blank" href="https://www.twitter.com/azure">@azure</a> thanks to <a target="_blank" href="https://www.twitter.com/OdeToCode">@OdeToCode</a> and <a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a> ??????</div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=979086508408889344">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=979086508408889344">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=979086508408889344">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/HMendowitz" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/823565207272325122/mZ1bzu61_bigger.jpg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/HMendowitz" class="tl-tweet-authorName">It's Herb!</a> <a target="_blank" href="https://twitter.com/HMendowitz" class="tl-tweet-authorScreenName">@HMendowitz</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">.<a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a> I've used your service to review and learn tech before every interview I've had this month. I'm 6/7 on callbacks so far. Thanks for your great site!</div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=979199493911429120">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=979199493911429120">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=979199493911429120">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/Tidjani_B" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/378800000595808839/aaf32acf962933671254ffee168b60e8_bigger.jpeg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/Tidjani_B" class="tl-tweet-authorName">Tidjani Belmansour</a> <a target="_blank" href="https://twitter.com/Tidjani_B" class="tl-tweet-authorScreenName">@Tidjani_B</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">Every time I watch a <a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a> video, it makes me wonder how valuable the content in there is!
                            Learning with <a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a> should be like a medication: 1 video a day!</div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=955501924597620737">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=955501924597620737">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=955501924597620737">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/ItsFalwell" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/1211643082/theo-kojak_bigger.jpg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/ItsFalwell" class="tl-tweet-authorName">Jeremy Friedel</a> <a target="_blank" href="https://twitter.com/ItsFalwell" class="tl-tweet-authorScreenName">@ItsFalwell</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">First time using Websitedok today after hearing many people rave about it. I now see why. Excellent platform with great presenters.</div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=952623706014208000">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=952623706014208000">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=952623706014208000">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/Siimbuh" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/1067102892342091782/Q5lHhIpx_bigger.jpg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/Siimbuh" class="tl-tweet-authorName">Ernest Coleman</a> <a target="_blank" href="https://twitter.com/Siimbuh" class="tl-tweet-authorScreenName">@Siimbuh</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">I have decided that I will be honing my <a target="_blank" href="https://www.twitter.com/hashtag/networking?src=hash">#networking</a> skills via <a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a> ! Started some of the modules and they are exceptional! <a target="_blank" href="https://www.twitter.com/hashtag/welldone?src=hash">#welldone</a></div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=938794829986844673">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=938794829986844673">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>2 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=938794829986844673">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                        <div class="tl-tweets__tweet">
                          <div class="tl-tweet-author">
                            <div class="tl-tweet-author-content clearfix"> <a target="_blank" href="https://twitter.com/jhill641" class="tl-tweet-authorScreenName"> <img src="assets/images/px.png" data-lazysrc="https://pbs.twimg.com/profile_images/987474718814015490/PIRVSwdI_bigger.jpg"> </a>
                              <div class="tl-tweet-author-user"> <a target="_blank" href="https://twitter.com/jhill641" class="tl-tweet-authorName">Joe Hill</a> <a target="_blank" href="https://twitter.com/jhill641" class="tl-tweet-authorScreenName">@jhill641</a> </div>
                              <a target="_blank" class="tl-download lazy-bg" href="https://twitter.com/download"></a> </div>
                          </div>
                          <div class="tl-tweet-body">New week which means new things to learn on <a target="_blank" href="https://www.twitter.com/Websitedok">@Websitedok</a> so exciting!</div>
                          <ul class="tweet-buttons">
                            <li> <a target="_blank" class="tl-reply" href="https://twitter.com/intent/tweet?in_reply_to=937465306758438913">
                              <div class="tl-icon lazy-bg" title="Reply"></div>
                              </a> </li>
                            <li> <a target="_blank" class="tl-retweet" href="https://twitter.com/intent/retweet?tweet_id=937465306758438913">
                              <div class="tl-icon lazy-bg" title="ReTweet"></div>
                              <span>1 </span> </a> </li>
                            <li> <a target="_blank" class="tl-favorite" href="https://twitter.com/intent/favorite?tweet_id=937465306758438913">
                              <div class="tl-icon lazy-bg" title="Favorite"></div>
                              </a> </li>
                          </ul>
                        </div>
                      </div>
                      <div class="tl-arrows"></div>
                    </div>
                    <div class="tl-wrapper-inner-btm"> </div>
                  </div>
                  <input type="hidden" name="tl-autoplay-option" class="tl-autoplay-option">
                </div>
                <script>
    var $component = jQuery(".twitter-feed");
    var autoplayTweet = $component.find('.tl-autoplay-option').val().toLowerCase() === 'true' ? true : false;
    twitterload();

    function twitterload(){
        var slick = jQuery('.tl-tweets').slick({
            appendArrows  : jQuery('.tl-arrows'),
            slidesToShow  : 3,
            slidesToScroll: 3,
            speed: 300,
            autoplay: autoplayTweet,
            autoplaySpeed: 3000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true
                    }
                },{
                    breakpoint: 860,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true
                    }
                },{
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                }
            ]
        });
    }
</script> 
              </div>
            </div>
          </div>
          <div class="brws-pricing-wrapper">
            <div class="brws-pricing-headline">
              <h2>Join<br class="show-for-small-only">
                the <span id="ts-scribble"><span class="ts-scribble-block"><img src="assets/images/px.png" data-lazysrc="assets/images/scribble-ts-blue.png"></span></span><br>
                revolution</h2>
            </div>
            <div class="pricing-plans section">
              <div class="column-control section pricing-plans-section pricing-plan--fullsize pricing--indPlans">
                <div class="top-clip"></div>
                <div class="container column-control-container ">
                  <div class="row column-control--super-wide">
                    <div class="medium-12 columns">
                      <div class="pricing_plan--box plans_individual ">
                        
                        <div class="pricing_plan--wrapper one-third">
                          <div class="pricing_plan--container pricing_plan--premium">
                            <div class="pricing_plan--item">
                              <div class="pricing_plan--save promo" style="display:none;"><span class="promo-off-price" data-product-price="IND-Y-PREM" data-show-percent="0">$0</span> off - limited time</div>
                              <div class="pricing_plan--inverter">
                                <h2>Premium</h2>
                                <div class="amount_box">
                                  <div class="api-price-styling" data-product-price="IND-Y-PREM">
                                    <div class="api-price-wrapper"> <span class="curr-symbol">$</span><span class="curr-major">449</span><span class="curr-dec-sep">.</span><span class="curr-minor">00</span> </div>
                                  </div>
                                  <sup class="promo-original-price" data-product-price="IND-Y-PREM" style="display:none;"> <span class="curr-symbol">$</span><span class="curr-major">449</span><span class="curr-dec-sep">.</span><span class="curr-minor">00</span> </sup>
                                  <div class="pricing_plan--term">Billed annually</div>
                                </div>
                                <div class="pricing_plan--bottom"> <a href="https://www.Websitedok.com/buy?sku=IND-Y-PREM" class="button button--gradient" data-aa-title="pricingblock-premium-signup">Get started</a>
                                  <div>or start a <a href="https://www.Websitedok.com/buy?sku=IND-Y-PREM-FT" data-aa-title="pricingblock-premium-trial" class="trial">FREE trial</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pricing_plan--list individual-features clearfix">
                            <h5 class="pricing_plan--list_header">Premium plan includes:</h5>
                            <hr class="pricing_plan--list_header_separator" />
                            <ul class="pricing_plan--listAll premium">
                              <li>
                                <div class="list-circle-checkmark"></div>
                                <strong>All personal features</strong> </li>
                              <li>
                                <div class="list-circle-checkmark"></div>
                                Certification practice exams <a href="#" class="tooltip_wrapper">
                                <div class="tooltip_wrapper--circle"><span class="tooltip_wrapper--innerCircle"></span></div>
                                <span class="tooltip_wrapper--desc right-edge">Prepare for professional certifications with industry-leading practice exams.</span> </a> </li>
                              <li>
                                <div class="list-circle-checkmark"></div>
                                Interactive courses <a href="#" class="tooltip_wrapper">
                                <div class="tooltip_wrapper--circle"><span class="tooltip_wrapper--innerCircle"></span></div>
                                <span class="tooltip_wrapper--desc right-edge">Practice as you learn with hands-on coding challenges and guided feedback.</span> </a> </li>
                              <li>
                                <div class="list-circle-checkmark"></div>
                                Projects <a href="#" class="tooltip_wrapper">
                                <div class="tooltip_wrapper--circle"><span class="tooltip_wrapper--innerCircle"></span></div>
                                <span class="tooltip_wrapper--desc right-edge">Practice skills in real-world scenarios using your own developer workspace.</span> </a> </li>
                            </ul>
                          </div>
                        </div>
                        <div class="pricing_plan--wrapper one-third">
                          <div class="pricing_plan--container pricing_plan--premium">
                            <div class="pricing_plan--item">
                              <div class="pricing_plan--save promo" style="display:none;"><span class="promo-off-price" data-product-price="IND-Y-PREM" data-show-percent="0">$0</span> off - limited time</div>
                              <div class="pricing_plan--inverter">
                                <h2>Premium</h2>
                                <div class="amount_box">
                                  <div class="api-price-styling" data-product-price="IND-Y-PREM">
                                    <div class="api-price-wrapper"> <span class="curr-symbol">$</span><span class="curr-major">449</span><span class="curr-dec-sep">.</span><span class="curr-minor">00</span> </div>
                                  </div>
                                  <sup class="promo-original-price" data-product-price="IND-Y-PREM" style="display:none;"> <span class="curr-symbol">$</span><span class="curr-major">449</span><span class="curr-dec-sep">.</span><span class="curr-minor">00</span> </sup>
                                  <div class="pricing_plan--term">Billed annually</div>
                                </div>
                                <div class="pricing_plan--bottom"> <a href="https://www.Websitedok.com/buy?sku=IND-Y-PREM" class="button button--gradient" data-aa-title="pricingblock-premium-signup">Get started</a>
                                  <div>or start a <a href="https://www.Websitedok.com/buy?sku=IND-Y-PREM-FT" data-aa-title="pricingblock-premium-trial" class="trial">FREE trial</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pricing_plan--list individual-features clearfix">
                            <h5 class="pricing_plan--list_header">Premium plan includes:</h5>
                            <hr class="pricing_plan--list_header_separator" />
                            <ul class="pricing_plan--listAll premium">
                              <li>
                                <div class="list-circle-checkmark"></div>
                                <strong>All personal features</strong> </li>
                              <li>
                                <div class="list-circle-checkmark"></div>
                                Certification practice exams <a href="#" class="tooltip_wrapper">
                                <div class="tooltip_wrapper--circle"><span class="tooltip_wrapper--innerCircle"></span></div>
                                <span class="tooltip_wrapper--desc right-edge">Prepare for professional certifications with industry-leading practice exams.</span> </a> </li>
                              <li>
                                <div class="list-circle-checkmark"></div>
                                Interactive courses <a href="#" class="tooltip_wrapper">
                                <div class="tooltip_wrapper--circle"><span class="tooltip_wrapper--innerCircle"></span></div>
                                <span class="tooltip_wrapper--desc right-edge">Practice as you learn with hands-on coding challenges and guided feedback.</span> </a> </li>
                              <li>
                                <div class="list-circle-checkmark"></div>
                                Projects <a href="#" class="tooltip_wrapper">
                                <div class="tooltip_wrapper--circle"><span class="tooltip_wrapper--innerCircle"></span></div>
                                <span class="tooltip_wrapper--desc right-edge">Practice skills in real-world scenarios using your own developer workspace.</span> </a> </li>
                            </ul>
                          </div>
                        </div>
                        <div class="pricing_plan--wrapper one-third">
                          <div class="pricing_plan--container pricing_plan--premium">
                            <div class="pricing_plan--item">
                              <div class="pricing_plan--save promo" style="display:none;"><span class="promo-off-price" data-product-price="IND-Y-PREM" data-show-percent="0">$0</span> off - limited time</div>
                              <div class="pricing_plan--inverter">
                                <h2>Premium</h2>
                                <div class="amount_box">
                                  <div class="api-price-styling" data-product-price="IND-Y-PREM">
                                    <div class="api-price-wrapper"> <span class="curr-symbol">$</span><span class="curr-major">449</span><span class="curr-dec-sep">.</span><span class="curr-minor">00</span> </div>
                                  </div>
                                  <sup class="promo-original-price" data-product-price="IND-Y-PREM" style="display:none;"> <span class="curr-symbol">$</span><span class="curr-major">449</span><span class="curr-dec-sep">.</span><span class="curr-minor">00</span> </sup>
                                  <div class="pricing_plan--term">Billed annually</div>
                                </div>
                                <div class="pricing_plan--bottom"> <a href="https://www.Websitedok.com/buy?sku=IND-Y-PREM" class="button button--gradient" data-aa-title="pricingblock-premium-signup">Get started</a>
                                  <div>or start a <a href="https://www.Websitedok.com/buy?sku=IND-Y-PREM-FT" data-aa-title="pricingblock-premium-trial" class="trial">FREE trial</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pricing_plan--list individual-features clearfix">
                            <h5 class="pricing_plan--list_header">Premium plan includes:</h5>
                            <hr class="pricing_plan--list_header_separator" />
                            <ul class="pricing_plan--listAll premium">
                              <li>
                                <div class="list-circle-checkmark"></div>
                                <strong>All personal features</strong> </li>
                              <li>
                                <div class="list-circle-checkmark"></div>
                                Certification practice exams <a href="#" class="tooltip_wrapper">
                                <div class="tooltip_wrapper--circle"><span class="tooltip_wrapper--innerCircle"></span></div>
                                <span class="tooltip_wrapper--desc right-edge">Prepare for professional certifications with industry-leading practice exams.</span> </a> </li>
                              <li>
                                <div class="list-circle-checkmark"></div>
                                Interactive courses <a href="#" class="tooltip_wrapper">
                                <div class="tooltip_wrapper--circle"><span class="tooltip_wrapper--innerCircle"></span></div>
                                <span class="tooltip_wrapper--desc right-edge">Practice as you learn with hands-on coding challenges and guided feedback.</span> </a> </li>
                              <li>
                                <div class="list-circle-checkmark"></div>
                                Projects <a href="#" class="tooltip_wrapper">
                                <div class="tooltip_wrapper--circle"><span class="tooltip_wrapper--innerCircle"></span></div>
                                <span class="tooltip_wrapper--desc right-edge">Practice skills in real-world scenarios using your own developer workspace.</span> </a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="brws-other-resources-wrapper">
            <div class="brws-other-resources">
              <h2>Other Web Development Resources</h2>
              <div class="brws-other-resources-col">
                <div class="brws-other-resources-authors">
                  <h4>Learn from our expert Web Development authors</h4>
                  <div> <a href="https://www.Websitedok.com/authors/justin-schwarty" class="brws-other-resources-author"> <img src="assets/images/px.png" data-lazysrc="https://Websitedok.imgix.net/author/lg/justin-schwarty-v1.jpg?w=100">
                    <div class="brws-other-resources-author-details">
                      <div class="brws-other-resources-author-name">Justin Schwartzenberger</div>
                    </div>
                    </a> <a href="https://www.Websitedok.com/authors/nina-zakharenko" class="brws-other-resources-author"> <img src="assets/images/px.png" data-lazysrc="https://Websitedok.imgix.net/author/lg/nina-zakharenko-v1.jpg?w=100">
                    <div class="brws-other-resources-author-details">
                      <div class="brws-other-resources-author-name">Nina Zakharenko</div>
                    </div>
                    </a> <a href="https://www.Websitedok.com/authors/robert-boedigheimer" class="brws-other-resources-author"> <img src="assets/images/px.png" data-lazysrc="https://Websitedok.imgix.net/author/lg/e5fe71b5-ea28-4cb2-acfb-99f85f09b6d3.jpg?w=100">
                    <div class="brws-other-resources-author-details">
                      <div class="brws-other-resources-author-name">Robert Boedigheimer</div>
                    </div>
                    </a> </div>
                </div>
                <div class="brws-other-resources-blogs">
                  <h4>Resources and blogs</h4>
                  <div> <a href="https://www.Websitedok.com/blog/software-development/road-web-dev-2019" class="brws-other-resources-blogs-item">
                    <div class="brws-other-resources-blogs-item-title">Web development in 2019</div>
                    <div class="brws-other-resources-blogs-item-link">View now</div>
                    </a> <a href="https://www.Websitedok.com/resource-center/guides/why-and-how-to-implement-lifelong-learning-for-developers" class="brws-other-resources-blogs-item">
                    <div class="brws-other-resources-blogs-item-title">Lifelong learning for developers</div>
                    <div class="brws-other-resources-blogs-item-link">View now</div>
                    </a> <a href="https://www.Websitedok.com/blog/software-development/developers-and-lifelong-learning" class="brws-other-resources-blogs-item">
                    <div class="brws-other-resources-blogs-item-title">Developers and lifelong learning: The challenges and opportunities ...</div>
                    <div class="brws-other-resources-blogs-item-link">View now</div>
                    </a> <a href="https://www.Websitedok.com/resource-center/webinars/aspnet-core-developers/thank-you" class="brws-other-resources-blogs-item">
                    <div class="brws-other-resources-blogs-item-title">Beyond Bower: Strategies for ASP.NET Core developers</div>
                    <div class="brws-other-resources-blogs-item-link">View now</div>
                    </a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="brws-trial-wrapper">
            <div class="brws-trial">
              <h2>Push the <span class="scribble-under black">limits</span> of what you can do</h2>
              <div class="ps-button section">
                <div data-emptytext="Button">
                  <div> <a href="https://www.Websitedok.com/buy?sku=IND-M-PLUS-FT" target="_self" class="button  button--black button--large  " data-aa-title="default-cta"> Start a free 10-day trial </a> </div>
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
