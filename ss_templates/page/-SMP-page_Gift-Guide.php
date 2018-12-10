<?php
// Start the session
session_start();
?>
<!--old doctype was here-->

<?php
  $domain='sewingmachinesplus.com';
  $host  = $_SERVER['HTTP_HOST'];
  $uri = $_SERVER['PHP_SELF'];
  function domainCheck($host, $uri, $domain){
    $dir_name = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    if($host==$domain){
      $formattedUrl=$domain.$uri;
      Header( "HTTP/1.1 301 Moved Permanently" );
      Header( "Location: http://www.$formattedUrl" );
      exit;
    }
  }
  domainCheck($host, $uri, $domain);
?>
[--DEFINE LINK_TO_PAGE--]
  [--IF PAGE.NumItems 0--]
    [-- IF PAGE.Field1 "no" --]
      <!-- IGNORE PAGE LINK IF IT HAS NO ITEMS AND IS NOT A SUBDIRECTORY -->
    [-- END_IF --]
    [-- IF PAGE.Field1 "yes" --]
      [-- IF VAR.counter "0" --]
        <tr>
      [-- END_IF --]
      [-- VAR.counter INC --]
      <td class="pageLink">
      [--IF PAGE.LinkGraphic--]
        <a href="[--OUTPUT_DIRECTORY_URL--]/[--Page.FileName--]">
          <center>
            <img [-- PAGE.LinkGraphic REMOVE_HTML --] /><br>
            [--PAGE.LinkName--]
          </center>
        </a>
      [--ELSE--]
        <a href="[--OUTPUT_DIRECTORY_URL--]/[--Page.FileName--]">
          <center><b>
            [--PAGE.LinkName--]
          </b></center>
        </a>
      [--END_IF--]
      </td>
      [-- IF VAR.counter "5" --]
        </tr>
        [-- VAR.counter "0" --]
      [-- END_IF --]
    [-- END_IF --]
  [--ELSE--]
    [-- IF VAR.counter "0" --]
      <tr>
    [-- END_IF --]
    [-- VAR.counter INC --]
    <td class="pageLink" cellpadding="5">
    [--IF PAGE.LinkGraphic--]
      <a href="[--OUTPUT_DIRECTORY_URL--]/[--Page.FileName--]">
        <center>
          <img [-- PAGE.LinkGraphic REMOVE_HTML --]><br>
          <b>[--PAGE.LinkName--]</b>
        </center>
      </a>
    [--ELSE--]
      <a href="[--OUTPUT_DIRECTORY_URL--]/[--Page.FileName--]"><center><b>[--PAGE.LinkName--]</b></center></a>
    [--END_IF--]
    </td>
    [-- IF VAR.counter "5" --]
      </tr>
      [-- VAR.counter "0" --]
    [-- END_IF --]
  [--END_IF--]
[--END_DEFINE LINK_TO_PAGE--]
[-- VAR.Secure "no" --]
[-- DEFINE PAGE --]
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <style>
        .async-hide {
          opacity: 0 !important
        }
      </style>
      <script>
        (function (a, s, y, n, c, h, i, d, e) {
          s.className += ' ' + y;
          h.start = 1 * new Date;
          h.end = i = function () {
            s.className = s.className.replace(RegExp(' ?' + y), '')
          };
          (a[n] = a[n] || []).hide = h;
          setTimeout(function () {
            i();
            h.end = null
          }, c);
          h.timeout = c;
        })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
          'GTM-KTCLFC5': true
        });
      </script>
      <script>
        (function (i, s, o, g, r, a, m) {
          i['GoogleAnalyticsObject'] = r;
          i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
          }, i[r].l = 1 * new Date();
          a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
          a.async = 1;
          a.src = g;
          m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-487443-1', 'auto');
        // Optimizely Universal Analytics Integration
        window.optimizely = window.optimizely || [];
        window.optimizely.push("activateUniversalAnalytics");
        ga('require', 'GTM-KTCLFC5');
        ga('send', 'pageview');
      </script>
      <meta charset="ISO-8859-1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      [--IF PAGE.Title --]
        <title>[--PAGE.Title REMOVE_HTML --]</title>
      [--ELSE--]
        <title>[-- PAGE.Name REMOVE_HTML --]</title>
      [--END_IF--]
      [-- IF PAGE.MetaKeywords --]
        <meta name="Keywords" content="[-- PAGE.MetaKeywords --]" />
      [--ELSE--]
        <meta name="Keywords" content="[-- PAGE.Name REMOVE_HTML --]" />
      [--END_IF--]
      [--IF PAGE.MetaDescription --]
        <meta name="Description" content="[-- PAGE.MetaDescription --]" />
      [--ELSE--]
        <meta name="Description" content="[--PAGE.Name REMOVE_HTML --]" />
      [--END_IF--]
      [-- IF PAGE.Field5 --]
        [-- PAGE.Field5 --]
      [--END_IF--]
      <!-- Google Fonts -->
      <link href="//fonts.googleapis.com/css?family=Lato:400,100,300,700,900,900italic,700italic,400italic|Open+Sans" rel="stylesheet" type="text/css">
      <!-- Bootstrap -->
      <link href="/AE/bootstrap/css/bootstrap.css" rel="stylesheet">
      <!--plugins-->
      <link href="/AE/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="/AE/custom-scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet">
      <link href="/AE/css/yamm.css" rel="stylesheet">
      <link href="/AE/css/navigation.css" rel="stylesheet">
      <!--sky form pro css-->
      <link href="/AE/sky-form/css/sky-forms.css" rel="stylesheet">
      <!--custom css file-->
      <link href="/AE/css/fonts.css" rel="stylesheet">
      <link href="/AE/css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="/AE/js/lightbox/css/lightbox.css">
      <link href="/AE/css/moreInfo.styles.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
      <meta name="googlebot" content="index,follow">
      <meta name="robots" content="index,follow">
      <meta name="rating" content="General" />
      <meta property="og:site_name" content="SewingMachinesPlus.com"/>
      <meta property="og:image" content="https://cdn.sewingmachinesplus.com/media/facebook/thread2.gif"/>
      <meta property="og:title" content="[--PAGE.Title--]" />
      <meta property="og:description" content="[-- PAGE.MetaDescription --]" />
      <meta property="og:type" content="website" />
      <meta itemprop="name" content="[--PAGE.Title--]">
      <meta itemprop="description" content="[-- PAGE.MetaDescription --]">
      <meta itemprop="image" content="https://cdn.sewingmachinesplus.com/media/facebook/thread2.gif">
      <meta name="twitter:card" content="photo">
      <meta name="twitter:title" content="[--PAGE.Title--]">
      <meta name="twitter:description" content="[-- PAGE.MetaDescription --]">
      <meta name="twitter:image" content="https://cdn.sewingmachinesplus.com/media/facebook/thread2.gif">
      <!-- Start Google Remarketing Code for Category -->
      <script type="text/javascript">
        var google_tag_params = {
        ecomm_prodid : '',
        ecomm_pagetype : 'category',
        ecomm_totalvalue : ''
        };
      </script>
      <!-- End Google Remarketing Code for Category -->

      <!--AJAX CART Begin-->
      [-- INCLUDE LexiConnAACSimpleHeadDialog PROCESS --]
      <!--AJAX CART End-->
      <!-- Search Engine Codes.  Added August 17 2011.  GC -->
      <meta name="msvalidate.01" content="12AD6C5141FE93FD2FF7B8446A324041" /><!-- Bing -->
      <meta name="google-site-verification" content="8rPIzca1hZ5v9_y9LBo9iPIa1WIHcr07q597xD-EkTg" /><!-- Google -->
      <meta name="y_key" content="7d41bcfbacac9f58" /><!-- Yahoo -->
      <script type="text/javascript" src="//cdn.nextopia.net/v1.5.1/d237f9d9ae7166c0aa227ca5904ff0ee.js" async></script>
      <link type="text/css" rel="stylesheet" href="https://cdn.nextopia.net/v1.5.1/d237f9d9ae7166c0aa227ca5904ff0ee.css">
      <script src="https://cdn.optimizely.com/js/3534250896.js"></script>
      <link href="/AE/css/smp-nav-kyle.css" rel="stylesheet">
      <!-- Hotjar Tracking Code for www.sewingmachinesplus.com -->
      <script>
        (function (h, o, t, j, a, r) {
          h.hj = h.hj || function () {
            (h.hj.q = h.hj.q || []).push(arguments)
          };
          h._hjSettings = {
            hjid: 21822,
            hjsv: 5
          };
          a = o.getElementsByTagName('head')[0];
          r = o.createElement('script');
          r.async = 1;
          r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
          a.appendChild(r);
        })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
      </script>
    </head>
    <body>
      <script>
        var shoppingCartURL="[--SHOPPING_CART_URL--]";
      </script>
      <style>
        .well2, .well {
          box-shadow: 0 0 10px rgba(0,0,0,0.3);
          display:none;
          margin:1em;
          max-height:80%;
          overflow-y:scroll;
          max-width:600px !important;
          padding:19px;
        }
        #geopopup, #callouts-pop{
          transform: scale(0.8);
        }
        .popup_visible #geopopup, #callouts-pop{
          transform: scale(1);
        }
      </style>

    <div class="site-wrap">
      [-- INCLUDE -SMP-svg --]
      <!--header start-->
      <header class="header">
        [-- INCLUDE -SMP-toolbar-kyle --]
        [-- INCLUDE -SMP-header-minicart PROCESS --]
      </header>
      <!--header end-->
      <div class="cmlla" id="cmlla">


        <!--main start-->
        <main role="main">
        <style type="text/css">
          #expertsewingconsultants {
            text-align: center;
            display: none;
          }
          .expert-mobile-remove2 {
            display: block;
            clear: left;
          }
          #expert-number-callout {
            font-size: 30px;
          }
          #expertsewingconsultants-sticky-wrapper {
            position: relative;
          }
          .is-sticky #expertsewingconsultants {
            background-color: white;
            border-bottom: 1px solid gray;
            padding: 5px;
            display: block !important;
          }
          @media(max-width:861px) {
            #expertsewingconsultants .expert-mobile-remove2 {
              font-size: 14px;
            }
            #expert-number-callout {
              font-size: 23px;
            }
          }
          @media(max-width:657px) {
            #expertsewingconsultants .expert-mobile-remove1 {
              display: block;
              clear: left;
              font-size: 20px;
            }
            #expertsewingconsultants .expert-mobile-remove2 {
              display: none;
            }
            #expert-number-callout {
              font-size: 30px;
            }
          }
          @media (min-width:767px) and (max-width:1199px) {
            .is-sticky #expertsewingconsultants {
              margin-top: 0px;
            }
          }
          @media (min-width:768px) and (max-width:1199px) {
            #geolocationshipping {
              margin-top: 10px;
            }
          }
        </style>

        <div id="geolocationshipping" style="text-align:center;font-size:2.5em;">
          <div id="address"></div>
        </div>
        <script src="https://www.sewingmachinesplus.com/AE/jquery-popup/jquery.popupoverlay.js"></script>
        <script>
          var j = jQuery.noConflict();
          j(document).ready(function () {
            // Initialize the plugin
            j('#geopopup, #callouts-pop').popup({
              transition: 'all 0.3s',
              scrolllock: true
            });
          });
          j.get("https://ipinfo.io?token=0423266a427ee0", function (response) {
            if (response.region == "Alabama" || response.region == "Arizona" || response.region == "Arkansas" || response.region ==
              "California" || response.region == "Colorado" || response.region == "Connecticut" || response.region ==
              "Delaware" || response.region == "Florida" || response.region == "Georgia" || response.region == "Idaho" ||
              response.region == "Illinois" || response.region == "Indiana" || response.region == "Iowa" || response.region ==
              "Kansas" || response.region == "Kentucky" || response.region == "Louisiana" || response.region == "Maine" ||
              response.region == "Maryland" || response.region == "Massachusetts" || response.region == "Michigan" ||
              response.region == "Minnesota" || response.region == "Mississippi" || response.region == "Missouri" ||
              response.region == "Montana" || response.region == "Nebraska" || response.region == "Nevada" || response.region ==
              "New Hampshire" || response.region == "New Jersey" || response.region == "New Mexico" || response.region ==
              "New York" || response.region == "North Carolina" || response.region == "North Dakota" || response.region ==
              "Ohio" || response.region == "Oklahoma" || response.region == "Oregon" || response.region == "Pennsylvania" ||
              response.region == "Rhode Island" || response.region == "South Carolina" || response.region == "South Dakota" ||
              response.region == "Tennessee" || response.region == "Texas" || response.region == "Utah" || response.region ==
              "Vermont" || response.region == "Virginia" || response.region == "Washington" || response.region ==
              "West Virginia" || response.region == "Wisconsin" || response.region == "Wyoming") {
              j("#address").html("<span style='color:red;'>Free Shipping</span> to " + response.region +
                " <a href='#geopopup' class='geopopup_open' style='font-size:16px;color:#0000EE  !important; text-decoration:underline !important;'>See details</a><span style='display:block;clear:left;font-size:16px;margin-top:5px;'>On orders over $49. Most orders ship same day and are delivered within 3-7 days.</span>"
              );
            } else {
              j("#address").html(
                "<span style='color:red;'>Free Shipping</span> Over $49 <a href='#geopopup' class='geopopup_open' style='font-size:16px;color:#0000EE  !important; text-decoration:underline !important;'>See details</a><span style='display:block;clear:left;font-size:16px;margin-top:5px;'>Most orders ship same day and are delivered within 3-7 days.</span>"
              );
            }
          }, "jsonp");
        </script>

        <div id="geopopup" class="container well2" style="background-color:#ffffff; max-width:65%;">
          <p style="text-align:center;font-size:2.0em;">FREE Shipping on orders $49 and up.<p>
          <img src="https://www.sewingmachinesplus.com/images/UPS-ship-time-map.gif" style="margin:0 auto 10px;display:block;"/>
          <p>Most orders are processed and shipped same day. Orders placed on Friday after 3pm, Saturday, or Sunday are processed on Monday. Processing and shipping does not take place on weekends or holidays.</p>
          <p>Within the continental United States (the contiguous 48 states), Shipping is FREE to customers on orders over $49. Orders being shipped to Hawaii, Alaska, Canada, APO's, FPO's and DPO's are not eligible for free shipping. Also, the free shipping policy does not apply to large or heavy items that require special shipping methods such as assembled industrial sewing machines and some sewing cabinets.</p>
          <p><a class="btn btn-secondary btn-lg geopopup_close" style="background-color:#e70000 !important;" href="#" role="button">Close</a></p>
        </div>

        <!-- <div id="expertsewingconsultants" class="sticky">
          <span id="expert-number-callout" style="color: red;">Call <a href="tel:800-401-8151">800-401-8151</a> <span class="expert-mobile-remove1" style="color:black;">To Speak With An Expert Sewing Consultant</span></span>
          <span class="expert-mobile-remove2" style="margin-top: 5px;">We'll help you find the perfect product and provide <b>lifetime support</b> for any purchase. <a href="/expert-sewing-consultants.php">E-mail us here</a>.</span>
        </div> -->

          <!--page head start-->
          <div class="page-head">
            <div class="container">
              <div class="row clearfix">
                <div class="col-md-12">
                  <!--<ul class="breadcrumb">
                    <li><a href="[-- MyStoreURL --]">[-- STORE.Home --]</a></li>
                    <li><a href="[-- OUTPUT_DIRECTORY_URL --]/[-- PAGE.FileName --]">[-- PAGE.Name --]</a></li>
                  </ul>-->
                  <div class="page-header" style="padding-bottom:0px;">
                    <!--<h1>[-- PAGE.Field7 --]</h1>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--page head end-->
          <style>
            .fullwidth{
              /* background:url("/AE/images/woodtext1.jpg") repeat;
              background:url(https://cdn.sewingmachinesplus.com/AE/images/xmas-lights.png) repeat-x;
              padding-top:10px; */
              width:100%;
              display:block;
              position:relative;
            }
            .xmas-lights{
              width:100%;
              height:100%;
              display:block;
              position:absolute;
              padding-top:0;
              background:url(https://cdn.sewingmachinesplus.com/AE/images/xmas-lights.png) repeat-x;
              top:0;
              content:"";
              overflow: visible;
            }
            .bokeh{
              padding-top:0;
              background:url(https://cdn.sewingmachinesplus.com/AE/images/bokeh.png) repeat;
              background-attachment: fixed;
            }
            .flakes{
              padding-top:0;
              background:url(https://cdn.sewingmachinesplus.com/AE/images/flakes.png) repeat;
              background-attachment: fixed;
            }
            .flakes2{
              padding-top:0;
              background:url(https://cdn.sewingmachinesplus.com/AE/images/flakes-2.png) repeat;
            }
            .snowglobe{
              background:url(https://cdn.sewingmachinesplus.com/AE/images/snow.png) repeat;
              background-color:#eceef1 !important;
              /* background-color:#bd0904 !important; */
              padding-top:0;
              background-attachment: fixed;
            }
          </style>

          <script>
            // random snowflake background generator - uses a random background after ea refresh
            window.onload = function changeImg() {
              var images = ['https://cdn.sewingmachinesplus.com/AE/images/flakey1.png', 'https://cdn.sewingmachinesplus.com/AE/images/flakey2.png', 'https://cdn.sewingmachinesplus.com/AE/images/flakey3.png', 'https://cdn.sewingmachinesplus.com/AE/images/flakey4.png', 'https://cdn.sewingmachinesplus.com/AE/images/flakey5.png', 'https://cdn.sewingmachinesplus.com/AE/images/flakey6.png', 'https://cdn.sewingmachinesplus.com/AE/images/flakey7.png'];
              var size = images.length;
              var x = Math.floor(size * Math.random());
              var element = document.getElementsByClassName('flakey');
              element[0].style['background'] = 'url(' + images[x] + ') repeat';
            }
          </script>


          <div class="snowglobe">
          <div class="fullwidth">
          <div class="fullwidth bokeh">
          <div class="fullwidth flakes">
          <div class="fullwidth flakey">

            <style>
              .gift-guide-title{/*image wrapper for 100% width elements*/
                /* margin:0 auto;
                width:100%
                text-align:center;
                margin-top:110px; */
                top: 20px;
                margin-bottom: 20px;
                position: relative;
              }
              @media only screen and (max-width:768px) {
                #gift-guide-desktop {
                  display: none;
                }
                #gift-guide-mobile {
                  display: block;
                  /* background: url("https://cdn.sewingmachinesplus.com/AE/images/gift_guide-page-title_sq.jpg") no-repeat; */
                  z-index: 0;
                  content: "";
                  top: 30px;
                }
              }
              @media only screen and (min-width:769px) {
                #gift-guide-desktop {
                  display: block;
                  /* background: url("https://cdn.sewingmachinesplus.com/AE/images/gift_guide-page-title.jpg") no-repeat; */
                  z-index: 0;
                  content: "";
                }
                #gift-guide-mobile {
                  display: none;
                }
              }
            </style>

            <div class="gift-guide-title container">
              <div class="gift-guide-title-desktop">
                <div id="gift-guide-desktop" class="gift-guide-title">
                  <img src="https://cdn.sewingmachinesplus.com/AE/images/gift_guide-page-title.jpg" alt="Holiday Gift Guide 2018" title="Holiday Gift Guide 2018" class="img-responsive">
                  <!-- <div style="background:url('/AE/images/xmas-lights.png') repeat-x; content:'';"><hr style="visibility:hidden;"></div> -->
                </div>
              </div>
              <div class="gift-guide-title-mobile">
                <div id="gift-guide-mobile" class="gift-guide-title">
                  <img src="https://cdn.sewingmachinesplus.com/AE/images/gift_guide-page-title_sq.jpg" alt="Holiday Gift Guide 2018" title="Holiday Gift Guide 2018" class="img-responsive">
                  <!-- <div style="background:url('/AE/images/xmas-lights.png') repeat-x; content:'';"><hr style="visibility:hidden;"></div> -->
                </div>
              </div>
            </div>
            <div class="xmas-lights"> </div>

            <div class="container">
              <div class="row">
                <!--<div id="longarmsale" style="text-align:center;">
                <a href="/2015-king-of-long-arms-sale.php"><img src="//cdn.sewingmachinesplus.com/media/email/2015-king-of-long-arms-sale/long-arm-650x100.jpg"/></a>
                </div>-->
                <!--XMAS SHIPPING BANNER-->
                <!--<div id="xmas-shipping" align="center">
                  <img src="//cdn.sewingmachinesplus.com/media/promotions/2014-holiday/2014-shipping-call-in-special-banner.jpg">
                </div>-->
                <!--END XMAS SHIPPING BANNER-->
                <div id="promo-banner" style="display:none; color:#fff;">
                  <a href="/promotions-clearance.php"><img src="//cdn.sewingmachinesplus.com/media/promotions/2014-october/page-banner.jpg" border="0"></a>
                  <!--<table width="650" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td width="650" height="37" colspan="3"><img style="display: block;" border="0" src="//cdn.sewingmachinesplus.com/media/email/2014-national-sewing-month/2014-national-sewing-month-longbanner_01.jpg" width="650" height="37" alt="" /></td>
                    </tr>
                    <tr valign="bottom">
                      <td width="416" height="32"><img style="display: block;" border="0" src="//cdn.sewingmachinesplus.com/media/email/2014-national-sewing-month/2014-national-sewing-month-longbanner_02.jpg" width="416" height="32" alt="" /></td>
                      <td width="226" height="32" bgcolor="#146db6"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 26px; color: #8dc73f;">SEWMONTH2014</span></td>
                      <td width="9" height="32"><img style="display: block;" border="0" src="//cdn.sewingmachinesplus.com/media/email/2014-national-sewing-month/2014-national-sewing-month-longbanner_04.jpg" width="9" height="32" alt="" /></td>
                    </tr>
                    <tr>
                      <td width="650" height="19" colspan="3"><img style="display: block;" border="0" src="//cdn.sewingmachinesplus.com/media/email/2014-national-sewing-month/2014-national-sewing-month-longbanner_05.jpg" width="650" height="19" alt=""  /></td>
                    </tr>
                    <tr>
                      <td width="650" colspan="3" style="background-color:#3ea2d4; color:#fff;"><p>*Some exclusions may apply. Not applicable to Miele products and some select products. Not to be combined with certain finance specials or other discounts.</p></td>
                    </tr>
                  </table>-->
                </div>
                [-- IF PAGE.Field2 --]
                  <div align="center">[-- PAGE.Field2 --]</div>
                [--END_IF--]
                [-- IF PAGE.Text1 --]
                  <p>[-- PAGE.Text1 --]</p>
                [-- END_IF --]
                [-- IF PAGE.Field4 --]
                  [-- PAGE.Field4 --]
                [--END_IF--]
                [-- IF PAGE.NumLinks 0 --]
                [-- ELSE --]
                  <center><table cellpadding="4">
                    [-- VAR.counter "0" --]
                    [-- LOOP LINKS --]
                      [-- LINK --]
                    [-- END_LOOP LINKS --]
                  </table></center>
                  [-- IF VAR.counter "0" --]
                  [-- ELSE --]
                  [-- END_IF --]
                  [-- IF PAGE.NumProducts 0 --]
                  [-- ELSE --]
                    <br /><hr width="50%" /><br />
                  [-- END_IF --]
                [-- END_IF --]
                [--IF PAGE.NumProducts 0 --]
                  [--ELSE--]
                    <style>
                      .flex-parent-product{display:flex; flex-direction:row; flex-wrap:wrap;justify-content:center;}
                      .margin-flex-product{width:355px; margin:10px; flex:1 3 auto;}
                    </style>
                    <div class="container">
                      <div id="filter-bar" class="col-sm-12 col-md-3 col-lg-3 visible-md visible-lg hidden-sm hidden-xs">
                        <!--insert filters here-->
                      </div>
                      <div id="product-section" class="col-sm-12 col-md-9 col-lg-9 flex-parent-product">
                        [--LOOP PRODUCTS--]
                          <div id="product-list-grid2" class="margin-flex-product product-list-grid3_giftguide" style="padding:1% 0;" align="center">
                            [--PRODUCT--]
                          </div>
                        [--END_LOOP PRODUCTS--]
                      </div>
                    </div>
                  [--END_IF--]
                  [-- IF PAGE.Field8 --]
                  <p>[-- PAGE.Field8 --]</p>
                [-- END_IF --]
                  <script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
                  <script type="text/javascript">
                    window.criteo_q = window.criteo_q || [];
                    var deviceType = /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent) ? "m" : /iPad/.test(
                      navigator.userAgent) ? "t" : "d";
                    var viewList = new Array();
                    ss_jQuery("input[class='viewlist']").each(function (i) {
                      if (i < 3) {
                        viewList[i] = ss_jQuery(this).val();
                      }
                    });

                    window.criteo_q.push({
                      event: "setAccount",
                      account: 19481
                    }, {
                      event: "setSiteType",
                      type: deviceType
                    }, {
                      event: "setHashedEmail",
                      email: [""]
                    }, {
                      event: "viewList",
                      item: [viewList[0], viewList[1], viewList[2]]
                    });
                  </script>

                  <!--4-Tell Recommendations Begin (www.4-tell.com)-->
                  <!--4-Tell Recommendations End-->

                  <!-- BEGIN: Bronto Cart Abandon Code -->
                  <script type="text/javascript">
                    var _bsw = _bsw || [];
                    _bsw.push(['_bswId', 'a8ab4636c5a9a0b661c43f970b573cb86cec5615a882a5fda052dc5277ff5127']);
                    (function() {
                      var bsw = document.createElement('script'); bsw.type = 'text/javascript'; bsw.async = true;
                      bsw.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'js.bronto.com/s/b.min.js';
                      var t = document.getElementsByTagName('script')[0]; t.parentNode.insertBefore(bsw, t);
                    })();
                  </script>

                  <div id="data_4Tell" data-customer="" data-cart=""></div>
                  <script type="text/javascript">
                    function getCookie(cname) {
                      var name = cname + "=";
                      var ca = document.cookie.split(';');
                      for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') c = c.substring(1);
                        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
                      }
                      return "";
                    }
                    var fourTellCookieContents = getCookie("fourtellemail");
                    document.getElementById("data_4Tell").setAttribute("data-customer", fourTellCookieContents);
                  </script>
                  <!--4-Tell Recommendations Begin (www.4-tell.com)-->

                  <!-- END: Bronto Cart Abandon Code -->
                  <script src="https://cdn.bronto.com/bba/bba.js" data-bbaid="55ff0542-adde-4334-99f1-3bed861620e0" async></script>
                  <script bronto-popup-id="0ea2bf54-c520-4caa-adc3-28ceeea06625" src="https://cdn.bronto.com/popup/delivery.js"></script>

                  <!-- Start of LiveChat (www.livechatinc.com) code -->
                  <script type="text/javascript">
                    /*window.__lc = window.__lc || {};
                    window.__lc.license = 8753261;
                    (function() {
                      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
                      lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
                    })();*/
                  </script>
                  <!-- End of LiveChat code -->

                  <script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5665943"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
                  <noscript><img src="//bat.bing.com/action/0?ti=5665943&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
          </div>
            [-- IF PAGE.Text3 --]
              [-- PAGE.Text3 --]
            [-- END_IF --]
            <style>
  .snow{
    background: url("/AE/images/snow-bottom.png") repeat-x;
    display: block;
    position: fixed;
    bottom: 0;
    margin: 0 auto;
    text-align: center;
  }
</style>
<div class="snow">
  <hr style="visibility:hidden;">
</div>
          </main>
          <!--main end-->
          [-- INCLUDE -SMP-mailing-list_Gift-Guide --]
          [-- INCLUDE -SMP-footer_Gift-Guide --]
        </div>
      </div>

    </body>
    [-- INCLUDE -SMP-AE-js-plugins-kyle --]
    <script src="//cdn.sewingmachinesplus.com/AE/js/lightbox/js/lightboxkyle.js"></script>
    <script>
      lightbox.option({
        'showImageNumberLabel': false,
        'alwaysShowNavOnTouchDevices': true,
        'wrapAround': true
      })
    </script>
    <!--4-Tell Recommendations Begin (www.4-tell.com)-->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
      _4TellBoost={}; _4TellBoost.jq=jQuery.noConflict(true);
    </script>
    <script type="text/javascript" async src="//4tcdn.blob.core.windows.net/4tjs3/4TellLoader.js?alias=sewingma"></script>
    <!--4-Tell Recommendations End-->
  </html>
  [-- END_DEFINE PAGE --]