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
          <a href="[--OUTPUT_DIRECTORY_URL--]/[--Page.FileName--]"><center><b>[--PAGE.LinkName--]</b></center></a>
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
    <td class="pageLink">
    [--IF PAGE.LinkGraphic--]
      <a href="[--OUTPUT_DIRECTORY_URL--]/[--Page.FileName--]">
        <center>
          <img [-- PAGE.LinkGraphic REMOVE_HTML --]><br><b>[--PAGE.LinkName--]</b>
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
      <style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-KTCLFC5':true});</script>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

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
      <link href="/AE/bootstrap/css/_pagespeed/bootstrap.css" rel="stylesheet">
      <!--plugins-->
      <link href="/AE/bower_components/font-awesome/css/_pagespeed/font-awesome.min.css" rel="stylesheet">
      <link href="/AE/custom-scrollbar/_pagespeed/jquery.mCustomScrollbar.css" rel="stylesheet">
      <link href="/AE/css/_pagespeed/yamm.css" rel="stylesheet">
      <link href="/AE/css/_pagespeed/navigation.css" rel="stylesheet">
      <!--sky form pro css-->
      <link href="/AE/sky-form/css/_pagespeed/sky-forms.css" rel="stylesheet">
      <!--custom css file-->
      <link href="/AE/css/_pagespeed/fonts.css" rel="stylesheet">
      <link href="/AE/css/_pagespeed/style.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <meta name="googlebot" content="index,follow">
      <meta name="robots" content="index,follow">
      <meta name="rating" content="General" />
      <meta property="og:site_name" content="SewingMachinesPlus.com"/>
      <meta property="og:image" content="https://www.sewingmachinesplus.com/media/facebook/thread2.gif"/>
      <meta property="og:title" content="[--PAGE.Title--]" />
      <meta property="og:description" content="[-- PAGE.MetaDescription --]" />
      <meta property="og:type" content="website" />
      <meta itemprop="name" content="[--PAGE.Title--]">
      <meta itemprop="description" content="[-- PAGE.MetaDescription --]">
      <meta itemprop="image" content="https://www.sewingmachinesplus.com/media/facebook/thread2.gif">
      <meta name="twitter:card" content="photo">
      <meta name="twitter:title" content="[--PAGE.Title--]">
      <meta name="twitter:description" content="[-- PAGE.MetaDescription --]">
      <meta name="twitter:image" content="https://www.sewingmachinesplus.com/media/facebook/thread2.gif">
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
      <link href="/AE/css/_pagespeed/smp-nav-kyle.css" rel="stylesheet">
<!-- Hotjar Tracking Code for www.sewingmachinesplus.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:21822,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
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
            
            padding:19px;
          }  
          #geopopup, #callouts-pop{
            transform: scale(0.8);
          }
          .popup_visible #geopopup, #callouts-pop{
            transform: scale(1);
          }
          .well2{
            max-width:600px!important;
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
          text-align:center;
          padding: 15px 0 0 0;
        }
        .expert-mobile-remove2 {
          display:block;
          clear:left;
        }
        #expert-number-callout {
          font-size: 30px;
        }
        #expertsewingconsultants-sticky-wrapper {
          position:relative;
        }
        .is-sticky #expertsewingconsultants {
          background-color:white;
          border-bottom:1px solid gray;
          padding:5px;

        }
        @media(max-width:861px){
          #expertsewingconsultants .expert-mobile-remove2 {
            font-size:14px;
          }
          #expert-number-callout {
            font-size:23px;
          }
        }
        @media(max-width:657px){
          #expertsewingconsultants .expert-mobile-remove1 {
            display:block;
            clear:left;
            font-size:20px;
          }
          #expertsewingconsultants .expert-mobile-remove2 {
            display:none;
          }
          #expert-number-callout {
            font-size:30px;
          }
        }
        @media (min-width:767px) and (max-width:1199px) {
          .is-sticky #expertsewingconsultants {margin-top:0px;}
        }

        </style>

        <div id="expertsewingconsultants">
          <span id="expert-number-callout" style="color: red;">Call <a href="tel:800-401-8151">800-401-8151</a> <span class="expert-mobile-remove1" style="color:black;">To Speak With An Expert Sewing Consultant</span></span>
          <span class="expert-mobile-remove2" style="margin-top: 5px;">We'll help you find the perfect product and provide <b>lifetime support</b> for any purchase. <a href="/expert-sewing-consultants.php">E-mail us here</a>.</span>
        </div>


            [-- IF PAGE.Text1 --]
                [-- PAGE.Text1 --]
            [-- END_IF --]
            [-- IF PAGE.Text2 --]
                [-- PAGE.Text2 --]
            [-- END_IF --]
            [-- IF PAGE.Text2 --]
                [-- PAGE.Text3 --]
            [-- END_IF --]
            [-- IF PAGE.Field1 --]
              <div align="center">[-- PAGE.Field1 --]</div>
            [--END_IF--]
            [-- IF PAGE.NumLinks 0 --]
            [-- ELSE --]
              <table cellpadding="4">
              [-- VAR.counter "0" --]
              [-- LOOP LINKS --]
                [-- LINK --]
              [-- END_LOOP LINKS --]
              </table>
              [-- IF VAR.counter "0" --]
              [-- ELSE --]
              [-- END_IF --]
              [-- IF PAGE.NumProducts 0 --]
              [-- ELSE --]
              <br /><hr width="50%" /><br />
              [-- END_IF --]
            [-- END_IF --]
            [-- IF PAGE.NumProducts 0 --]
            [-- ELSE --]
            <!--<div class="space-20"></div>-->
              <!--new arrivals-->
              <section class="new-arrivals">
                <div class="container">
                  <h2 class="section-heading">
                    <span>
                      <span>Shop by</span><br />Top Products
                    </span>
                    <!--<div>
                      <a href="#">VIEW ALL</a>
                    </div>-->
                  </h2>
                  <!--owl carousel-->
                  <div class="row">
                    <div class="col-md-12 top-products">
                      [--LOOP PRODUCTS--]
                      <div class="item">
                        <div class="item_holder">
                          [-- PRODUCT -SMP-homepage-top-products--]
                        </div>
                      </div>
                      [--END_LOOP PRODUCTS--]
                    </div>
                  </div>
                  <!--owl end-->
                </div>
              </section>
              <!--end new arrivals-->
            [--END_IF--]

           <script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
<script type="text/javascript">
window.criteo_q = window.criteo_q || [];
var deviceType = /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent) ? "m" : /iPad/.test(navigator.userAgent) ? "t" : "d";
var viewList = new Array();
ss_jQuery("input[class='viewlist']").each(function(i){
if(i < 3){
viewList[i] = ss_jQuery(this).val();
}
});

window.criteo_q.push(
{ event: "setAccount", account: 19481},
{ event: "setSiteType", type: deviceType},
{ event: "setHashedEmail", email: [""]},
{ event: "viewList", item: [viewList[0], viewList[1], viewList[2]] });
</script>
            

          </main>
          <!--main end-->
          [-- INCLUDE -SMP-mailing-list --]
          [-- INCLUDE -SMP-footer --]
        </div>
      </div>
      <div id="data_4Tell" data-customer="" data-cart=""></div>
<script type="text/javascript">
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}
var fourTellCookieContents = getCookie("fourtellemail");
document.getElementById("data_4Tell").setAttribute("data-customer", fourTellCookieContents);
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
<!--4-Tell Recommendations Begin (www.4-tell.com)-->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
_4TellBoost={}; _4TellBoost.jq=jQuery.noConflict(true);
</script>
<script type="text/javascript" async src="//4tcdn.blob.core.windows.net/4tjs3/4TellLoader.js?alias=sewingma"></script>


<!--4-Tell Recommendations End-->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5665943"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5665943&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>

<!-- <script type="text/javascript">
  function downloadJSAtOnload() {
    var element = document.createElement("script");
    element.src = "defer.js";
    document.body.appendChild(element);
  }
  if (window.addEventListener)
    window.addEventListener("load", downloadJSAtOnload, false);
  else if (window.attachEvent)
    window.attachEvent("onload", downloadJSAtOnload);
  else window.onload = downloadJSAtOnload;
</script> -->

    </body>
    [-- INCLUDE -SMP-js-plugins_pagespeed --]
    <script src="/AE/masterslider/_pagespeed/masterslider.min.js"></script><script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@8.17.0/dist/lazyload.min.js"></script>

    </html>
  [-- END_DEFINE PAGE --]