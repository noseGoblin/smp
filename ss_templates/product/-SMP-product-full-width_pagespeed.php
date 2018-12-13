[-- DEFINE SUBPRODUCT --]
[-- IF PRODUCT.DisplayPrice --]
  <div class="media" align="center">
    <div class="media-left">
<!--
      <a href="[-- PRODUCT.MoreInfoURL --]" style="text-decoration:none;" target="_blank">
        <picture>
          <source srcset="https://cdn.sewingmachinesplus.com/media/[-- IMAGE Product.MoreInformationGraphic --].webp" type="image/webp" class="img-responsive">
          <source srcset="https://cdn.sewingmachinesplus.com/media/[-- IMAGE Product.MoreInformationGraphic --].jpg" type="image/jpeg" class="img-responsive">
          <img data-src="https://cdn.sewingmachinesplus.com/media/[-- IMAGE Product.MoreInformationGraphic --].jpg" alt="[-- PRODUCT.Name --]" title="[-- PRODUCT.Name --]" class="img-responsive">
        </picture>
      </a>
-->
      <a href="[-- PRODUCT.MoreInfoURL --]" style="text-decoration:none;" target="_blank"><img data-src="//cdn.sewingmachinesplus.com/media/[-- IMAGE Product.MoreInformationGraphic --]" class="lazy img-responsive" style="min-height:10px; max-height:180px;"/></a>
    </div>
    <div class="media-center">
      <div class="title"><a href="[-- PRODUCT.MoreInfoURL --]" target="_blank">[-- PRODUCT.Name --]</a></div>
      <div class="price">
        [-- IF PRODUCT.SaleOn--]
          <del>[--PRODUCT.Price--]</del> [--PRODUCT.SaleAmount--]
        [--ELSE--]
          [-- IF PRODUCT.DisplayPrice --]
            [--PRODUCT.Price--]
          [-- END_IF --]
        [--END_IF--]
      </div>
      <div class="new-win-info">(Clicking this product will display information in a new window.)</div>
    </div>
    <div class="media-right">
      [-- IF PRODUCT.SaleOn--]
        <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
          <input type="hidden" name="storeid" value="[--Store.id--]">
          <input type="hidden" name="dbname" value="products">
          <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
          <input type="hidden" name="function" value="add">
          <div class="add-buttons">
            <label for="btn_att_cart" class="btn-att-cart">
              <span class="hide">Add to Bag</span>
              <!--<input id="btn_att_cart" data-original-title="Add to Bag" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="Add to Bag"  />-->
              <input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="Add To My Bag" data-original-title="" title="" style="background-color: rgb(40, 177, 29);">
            </label>
          </div>
          <!--<input class="addtocart_button" src="//cdn.sewingmachinesplus.com/images/addtocart.gif" name="Add to Bag" type="image" width="53" height="85" />-->
          [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
        </form>
      [--ELSE--]
        [-- IF PRODUCT.DisplayPrice --]
          <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
            <input type="hidden" name="storeid" value="[--Store.id--]">
            <input type="hidden" name="dbname" value="products">
            <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
            <input type="hidden" name="function" value="add">
            <div class="add-buttons">
              <label for="btn_att_cart" class="btn-att-cart">
                <span class="hide">Add to Bag</span>
                <!--<input id="btn_att_cart" data-original-title="Add to Bag" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="Add to Bag"  />-->
                <input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="Add To My Bag" data-original-title="" title="" style="background-color: rgb(40, 177, 29);">
              </label>
            </div>
            <!--<input class="addtocart_button" src="//cdn.sewingmachinesplus.com/images/addtocart.gif" name="Add to Bag" type="image" width="53" height="85" />-->
            [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
          </form>
        [-- END_IF --]
      [--END_IF--]
    </div>
  </div>
[-- ELSE --]
  <span style="display: none;"></span>
[-- END_IF --]
[-- END_DEFINE SUBPRODUCT --]




[-- VAR.Secure "no" --]
[-- DEFINE PRODUCT --]
  <input type="hidden" class="viewlist" value="[-- PRODUCT.Field13 --]" />
  <input type="hidden" class="googleProdCat" value="[-- Product.GoogleProductType --]"/>
  <style>
    .brand-text{
      color:#989898;
      font-size:12pt;
      text-transform:uppercase;
      font-weight:bold;
      margin-bottom:1%;
      clear:both;
      line-height: 1em;
      min-height: 2em;
      max-height: 2em;
    }
    .productLinkName{
      width:85%;
      font-family:Lato;
      font-weight:bold;
      line-height:1em;
      min-height:4em;
      max-height:4em;
      overflow:hidden;
    }
    .productPricesInfo{
      line-height:1em;
      min-height:3em;
      max-height:3em;
    }
    .productLinkPrice{
      color:#ec010b;
    }
    .productmsrp{
      color:#313131;
    }
    /*  Bootstrap Clearfix */
    /*  Tablet  */
    @media (min-width:767px){
      /* Column clear fix */
      .col-lg-1:nth-child(12n+1),
      .col-lg-2:nth-child(6n+1),
      .col-lg-3:nth-child(4n+1),
      .col-lg-4:nth-child(3n+1),
      .col-lg-6:nth-child(2n+1),
      .col-md-1:nth-child(12n+1),
      .col-md-2:nth-child(6n+1),
      .col-md-3:nth-child(4n+1),
      .col-md-4:nth-child(3n+1),
      .col-md-6:nth-child(2n+1){
        clear: none;
      }
      .col-sm-1:nth-child(12n+1),
      .col-sm-2:nth-child(6n+1),
      .col-sm-3:nth-child(4n+1),
      .col-sm-4:nth-child(3n+1),
      .col-sm-6:nth-child(2n+1){
        clear: left;
      }
    }
    /*  Medium Desktop  */
    @media (min-width:992px){
      /* Column clear fix */
      .col-lg-1:nth-child(12n+1),
      .col-lg-2:nth-child(6n+1),
      .col-lg-3:nth-child(4n+1),
      .col-lg-4:nth-child(3n+1),
      .col-lg-6:nth-child(2n+1),
      .col-sm-1:nth-child(12n+1),
      .col-sm-2:nth-child(6n+1),
      .col-sm-3:nth-child(4n+1),
      .col-sm-4:nth-child(3n+1),
      .col-sm-6:nth-child(2n+1){
        clear: none;
      }
      .col-md-1:nth-child(12n+1),
      .col-md-2:nth-child(6n+1),
      .col-md-3:nth-child(4n+1),
      .col-md-4:nth-child(3n+1),
      .col-md-6:nth-child(2n+1){
        clear: left;
      }
    }
    /*  Large Desktop  */
    @media (min-width:1200px){
      /* Column clear fix */
      .col-md-1:nth-child(12n+1),
      .col-md-2:nth-child(6n+1),
      .col-md-3:nth-child(4n+1),
      .col-md-4:nth-child(3n+1),
      .col-md-6:nth-child(2n+1),
      .col-sm-1:nth-child(12n+1),
      .col-sm-2:nth-child(6n+1),
      .col-sm-3:nth-child(4n+1),
      .col-sm-4:nth-child(3n+1),
      .col-sm-6:nth-child(2n+1){
        clear: none;
      }
      .col-lg-1:nth-child(12n+1),
      .col-lg-2:nth-child(6n+1),
      .col-lg-3:nth-child(4n+1),
      .col-lg-4:nth-child(3n+1),
      .col-lg-6:nth-child(2n+1){
        clear: left;
      }
    }
  </style>
  <!--BEGIN OVERLAY IMAGE CHRISTIAN 9/17/2013-->
  [--IF PRODUCT.DisplayMoreInformationPage--]
    [--IF PRODUCT.Field14--]
      <a href="[--PRODUCT.MoreInfoURL--]" style="color:#000000; text-decoration:none;">
        <div style="margin:5px 0; min-height:130px; max-height:130px; overflow:hidden; background-image: url(/media/[-- IMAGE PRODUCT.Graphic --]); background-size:130px 130px; background-position: center; background-repeat: no-repeat;">
          <img data-src="//cdn.sewingmachinesplus.com/media/overlay/[-- PRODUCT.Field14 --]" class="lazy productLinkImg" width="130" height="130"/>
          <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
        </div>
        <div class="brand-text" align="center">[--PRODUCT.Brand--]</div>
        <div class="productLinkName">[-- PRODUCT.Name --]</div>
      </a>
    [--ELSE--]
      <a href="[--PRODUCT.MoreInfoURL--]" style="color:#000000; text-decoration:none;">
        <div style="margin:5px 0; min-height:130px; max-height:130px; overflow:hidden;">
          <!-- <img src="//cdn.sewingmachinesplus.com/media/[-- IMAGE PRODUCT.Graphic --]" class="productLinkImg" width="130" height="130" /> -->
          <picture>
            <source srcset="https://cdn.sewingmachinesplus.com/media/[-- IMAGE PRODUCT.Graphic --]webp" type="image/webp" class="productLinkImg" width="130" height="130">
            <source srcset="https://cdn.sewingmachinesplus.com/media/[-- IMAGE PRODUCT.Graphic --]jpg" type="image/jpeg" class="productLinkImg" width="130" height="130">
            <img data-src="https://cdn.sewingmachinesplus.com/media/[-- IMAGE PRODUCT.Graphic --]jpg" alt="[-- PRODUCT.Name --]" title="[-- PRODUCT.Name --]" class="lazy productLinkImg" width="130" height="130">
          </picture>
          <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
        </div>
        <div class="brand-text" align="center">[--PRODUCT.Brand--]</div>
        <div class="productLinkName">[-- PRODUCT.Name --]</div>
      </a>
    [--END_IF--]
  [--ELSE--]
    <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #000000; text-decoration: none;">
      <div style="margin:5px 0; min-height:130px; max-height:130px; overflow:hidden;">
        <!-- <img src="//cdn.sewingmachinesplus.com/media/[-- IMAGE PRODUCT.Graphic --]" class="productLinkImg" width="130px" height="130px" /> -->
        <picture>
          <source srcset="https://cdn.sewingmachinesplus.com/media/[-- IMAGE PRODUCT.Graphic --]webp" type="image/webp" class="productLinkImg" width="130" height="130">
          <source srcset="https://cdn.sewingmachinesplus.com/media/[-- IMAGE PRODUCT.Graphic --]jpg" type="image/jpeg" class="productLinkImg" width="130" height="130">
          <img data-src="https://cdn.sewingmachinesplus.com/media/[-- IMAGE PRODUCT.Graphic --]jpg" alt="[-- PRODUCT.Name --]" title="[-- PRODUCT.Name --]" class="lazy productLinkImg" width="130" height="130">
        </picture>
        <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap"></div>
      </div>
      <div class="brand-text" align="center">[--PRODUCT.Brand--]</div>
      <div class="productLinkName">[-- PRODUCT.Name --]</div>
    </a>
  [--END_IF--]
  <!--END OVERLAY IMAGE CHRISTIAN 9/17/2013-->
  [--IF PRODUCT.Field48--]
  <script>
    j(function(){
      var freeShip = "[--PRODUCT.Field10--]"
      var flagVal = "[--PRODUCT.Field48--]";
      var flagsUp = "";
      if (flagVal.indexOf("top")!==-1){
        flagsUp+=("<picture><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/top-rated.webp' type='image/webp' class='product-flag'><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/top-rated.jpg' type='image/jpeg' class='product-flag'><img data-src='//cdn.sewingmachinesplus.com/media/images/flags/top-rated.jpg' alt='[-- PRODUCT.Name --]' title='[-- PRODUCT.Name --]' class='lazy product-flag'></picture><br>")
      }
      if (flagVal.indexOf("new")!==-1){
        flagsUp+="<picture><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/new-product.webp' type='image/webp' class='product-flag'><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/new-product.jpg' type='image/jpeg' class='product-flag'><img data-src='//cdn.sewingmachinesplus.com/media/images/flags/new-product.jpg' alt='[-- PRODUCT.Name --]' title='[-- PRODUCT.Name --]' class='lazy product-flag'></picture><br>"
      }
      if (flagVal.indexOf("best")!==-1){
        flagsUp+="<picture><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/best-seller.webp' type='image/webp' class='product-flag'><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/best-seller.jpg' type='image/jpeg' class='product-flag'><img data-src='//cdn.sewingmachinesplus.com/media/images/flags/best-seller.jpg' alt='[-- PRODUCT.Name --]' title='[-- PRODUCT.Name --]' class='lazy product-flag'></picture><br>"
      }
      if (flagVal.indexOf("staff")!==-1){
        flagsUp+="<picture><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/staff-pick.webp' type='image/webp' class='product-flag'><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/staff-pick.jpg' type='image/jpeg' class='product-flag'><img data-src='//cdn.sewingmachinesplus.com/media/images/flags/staff-pick.jpg' alt='[-- PRODUCT.Name --]' title='[-- PRODUCT.Name --]' class='lazy product-flag'></picture><br>"
      }
      if (freeShip.indexOf("free")!==-1){
        flagsUp+="<picture><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/free-delivery.webp' type='image/webp' class='product-flag'><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/free-delivery.jpg' type='image/jpeg' class='product-flag'><img data-src='//cdn.sewingmachinesplus.com/media/images/flags/free-delivery.jpg' alt='[-- PRODUCT.Name --]' title='[-- PRODUCT.Name --]' class='lazy product-flag'></picture><br>"
      }
      j('#flag-[--PRODUCT.sku--]').append(flagsUp);
    });
  </script>
  [--ELSE--]
  [--IF Product.Field10 "free"--]
    <script>
      j('#flag-[--PRODUCT.sku--]').append("<picture><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/free-delivery.webp' type='image/webp' class='product-flag'><source srcset='//cdn.sewingmachinesplus.com/media/images/flags/free-delivery.jpg' type='image/jpeg' class='product-flag'><img data-src='//cdn.sewingmachinesplus.com/media/images/flags/free-delivery.jpg' alt='[-- PRODUCT.Name --]' title='[-- PRODUCT.Name --]' class='lazy product-flag'></picture>");
    </script>
  [-- END_IF --]
  [--END_IF--]
  <!--<br clear="all" />-->
  <div class="productPricesInfo">
    [-- IF PRODUCT.DisplayPrice --]
      [--IF PRODUCT.SaleOn--]
        <strike class="productmsrp productmsrp2" style="font-weight:bold;">[-- PRODUCT.Price --]</strike><br>
        <span class="productLinkPrice productLinkPrice2" style="font-weight:bold;">[-- PRODUCT.SaleAmount --]</span>
      [--ELSE--]
        <span class="productLinkPrice productLinkPrice2" style="font-weight:bold;">[-- PRODUCT.Price --]</span>
      [--END_IF--]
    [--ELSE--]
      [-- IF PRODUCT.Field24 "yes" --]
        <span class="callforbest">Call for best pricing!</span>
      [-- ELSE --]
        <span class="callfordeets">Call for details</span>
      [-- END_IF --]
    [--END_IF--]<br />
    [--IF Product.Field10 "free3day"--]
      <span style="color: #7f5eb3; font-size:10pt;"><strong>Free 3-Day Delivery</strong></span>
    [-- END_IF --]
    
    [--IF Product.de "nov"--]
      <!-- <img src="//cdn.sewingmachinesplus.com/media/promotions/pre-black-friday-sale.webp"> -->
      <picture>
        <source srcset="https://cdn.sewingmachinesplus.com/media/promotions/pre-black-friday-sale.webp" type="image/webp" class="productLinkImg">
        <source srcset="https://cdn.sewingmachinesplus.com/media/promotions/pre-black-friday-sale.jpg" type="image/jpeg" class="productLinkImg">
        <img data-src="https://cdn.sewingmachinesplus.com/media/promotions/pre-black-friday-sale.jpg" alt="" title="" class="lazy productLinkImg">
      </picture>
    [-- END_IF --]
    [--IF Product.Field10 "cyber"--]
      <!-- <img src="//cdn.sewingmachinesplus.com/media/promotions/cyber-week-sale.webp"> -->
      <picture>
        <source srcset="https://cdn.sewingmachinesplus.com/media/promotions/cyber-week-sale.webp" type="image/webp" class="productLinkImg">
        <source srcset="https://cdn.sewingmachinesplus.com/media/promotions/cyber-week-sale.jpg" type="image/jpeg" class="productLinkImg">
        <img data-src="https://cdn.sewingmachinesplus.com/media/promotions/cyber-week-sale.jpg" alt="" title="" class="lazy productLinkImg">
      </picture>
    [-- END_IF --]
    [--IF Product.Field10 "nextday"--]
      <span style="color: #30bd3a;"><strong>Free Next Day Air!</strong></span>
    [-- END_IF --]
  </div>
  [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
[-- END_DEFINE PRODUCT --]







[-- DEFINE MORE_INFO_PAGE --]
  <?php
    // Start the session
    session_start();
  ?>
  <!DOCTYPE html>
  <!-- test -->
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
  <!-- test product -->
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
    
    [--IF PRODUCT.Field23--]
      [--PRODUCT.Field23--]
    [--END_IF--]
    <script src="//cdn.sewingmachinesplus.com/includes/smp.min.js" type="text/javascript"></script>
    <style>
      .ui-dialog-titlebar{
        background-color:#ec010b !important;
      }
      #ui-dialog-title-cart_message{
        color:#fff;
      }
    </style>
    [-- INCLUDE LexiConnAACSimpleHeadDialog PROCESS --]<!--AJAX CART-->
    <!-- Start Google Remarketing for Products -->
    <script type="text/javascript">
      var google_tag_params = {
        ecomm_prodid: '[-- PRODUCT.Field13 --]',
        ecomm_pagetype: 'product',
        [-- IF PRODUCT.SaleOn --]
          ecomm_totalvalue: '[-- PRODUCT.SaleAmount --]',
        [-- ELSE --]
          ecomm_totalvalue: '[-- PRODUCT.Price --]',
        [-- END_IF --]
      };
    </script>
    <!-- End Google Remarketing for Products -->
    <script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
    <script type="text/javascript">
      window.criteo_q = window.criteo_q || [];
      var deviceType = /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent) ? "m" : /iPad/.test(navigator.userAgent) ? "t" : "d";
      window.criteo_q.push(
      { event: "setAccount", account: 19481},
      { event: "setSiteType", type: deviceType},
      { event: "setHashedEmail", email: [""]},
      { event: "viewItem", item: "[-- PRODUCT.Field13 --]"});
    </script>
    [--IF PRODUCT.Field22--]
      <title>[--PRODUCT.Field22 REMOVE_HTML--]</title>
    [--ELSE--]
      [--IF PRODUCT.MoreInformationTitle --]
        <title>[--PRODUCT.MoreInformationTitle REMOVE_HTML --]</title>
      [--ELSE--]
        <title>[-- PRODUCT.Name REMOVE_HTML --]</title>
      [--END_IF--]
    [--END_IF--]
    [--IF PRODUCT.MoreInformationMetaKeywords --]
      <meta name="Keywords" content="[-- PRODUCT.MoreInformationMetaKeywords --]" />
    [--ELSE--]
      <meta name="Keywords" content="[--Product.Name REMOVE_HTML --]" />
    [--END_IF--]
    [--IF PRODUCT.MoreInformationMetaDescription --]
      <meta name="Description" content="[-- PRODUCT.MoreInformationMetaDescription --]" />
    [--ELSE--]
      <meta name="Description" content="[--Product.Name REMOVE_HTML --]" />
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
    <link href="/AE/css/style.css?v=1.2" rel="stylesheet">
    <!-- MoreInfo product description custom css -->
    <link href="/AE/css/moreInfo.styles.css" rel="stylesheet">
    <link rel="stylesheet" href="/AE/js/owl/newkyleowl/assets/owl.carousel.css">
    <link rel="stylesheet" href="/AE/js/owl/newkyleowl/assets/owl.theme.default.css"/>
    <link rel="stylesheet" href="/AE/js/lightbox/css/lightbox.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <STYLE type="text/css">
      .thumbnailoverflow {
        border: 1px solid #CAC8C8;
        height: 80px;
        margin: 5px;
        width: 80px;
        overflow: hidden;
        float: left;
      }
      .thumbnails {
        height: 80px;
      }
      .single-product .single-product-slider {
        padding-bottom: 0px;
      }
    </STYLE>
    <style>
      .well {
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        display:none;
        margin:1em;
        max-height:80%;
        overflow-y:scroll;
        max-width:65%;
      }
      #packages #craftsy-pop #local-pop #financing-pop, #callouts-pop, #lowest-price-pop{
        transform: scale(0.8);
      }
      .popup_visible #packages #craftsy-pop #local-pop #financing-pop{
        transform: scale(1);
      }
      /*craftsy pop styles*/
      #longarmsale {
        display:none;
      }
      #genevent h1 {
        font-size: 26px !important;
        color: #1f698b !important;
        font-weight: normal !important;
        font-family: Georgia, "Times New Roman", Times, serif !important;
        line-height: 27px !important;
      }
      #genevent h3 {
        font-family: Georgia, "Times New Roman", Times, serif !important;
        font-size: 18px !important;
        color: #a91930 !important;
        font-weight: normal !important;
      }
    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <?php
      $field5img2 = explode("|", "[-- PRODUCT.Field5 --]");
    ?>
    <meta property="og:site_name" content="SewingMachinesPlus.com"/>
    <meta property="og:image" content="<?php echo "//cdn.sewingmachinesplus.com/media/$field5img2[0]" ?>"/>
    <meta property="og:title" content="[-- PRODUCT.Name --]" />
    <meta property="og:url" content="[-- PRODUCT.MoreInfoURL --]" />
    <meta property="og:description" content="[-- PRODUCT.MoreInformationMetaDescription --]" />
    <meta property="og:type" content="website" />
    <meta itemprop="name" content="[-- PRODUCT.Name --]">
    <meta itemprop="description" content="[-- PRODUCT.MoreInformationMetaDescription --]">
    <meta itemprop="image" content="<?php echo "//cdn.sewingmachinesplus.com/media/$field5img2[0]" ?>">
    <meta name="twitter:card" content="photo">
    <meta name="twitter:title" content="[-- PRODUCT.Name --]">
    <meta name="twitter:url" content="[-- PRODUCT.MoreInfoURL --]">
    <meta name="twitter:description" content="[-- PRODUCT.MoreInformationMetaDescription --]">
    <meta name="twitter:image" content="<?php echo "//cdn.sewingmachinesplus.com/media/$field5img2[0]" ?>">
    <script type="text/javascript" src="//cdn.nextopia.net/v1.5.1/d237f9d9ae7166c0aa227ca5904ff0ee.js" async></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.nextopia.net/v1.5.1/d237f9d9ae7166c0aa227ca5904ff0ee.css">
    <style>
      .share-buttons .share-main-tab{
        z-index:99999 !important;
      }
    </style>
    <script>
      function popEssentials(url) {
        syncpop=window.open(url,'name','height=600, width=690, top=120, left=650, toolbar=no, menubar=no, location=no, scrollbars=yes');
        if (window.focus) {
          syncpop.focus()
        }
        return false;
      }
    </script>
    <script src="https://cdn.optimizely.com/js/3534250896.js"></script>
    <link href="/AE/css/smp-nav-kyle.css" rel="stylesheet">
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
    <?php
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.stoneedge.net/ShopSite/ShopSite.ashx",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "inv_status=available&serialnum=0000000123&item_total=1&p1sku=[--PRODUCT.SKU--]",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
        "postman-token: e316e55e-6426-a2da-bb4a-c91978bb74e0"
      ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if (preg_match_all('/\s*([^=]+)=(\S+)\s*/', $response, $matches)) {
       $output = array_combine ( $matches[1], $matches[2] );
    }
    ?>
  </head>
  <body>
<script>
  var shoppingCartURL="[--SHOPPING_CART_URL--]";
  var liveskuqoh = "<?php echo $output['p1quantity']; ?>";
  console.log(liveskuqoh);
</script>
    <div id="brontoBrowseRec" brontoProdId="[--PRODUCT.SKU--]"></div>
    <div class="site-wrap">
      [-- INCLUDE -SMP-svg --]
      <!--header start-->
      <header class="header">
        

          [-- INCLUDE -SMP-toolbar-kyle_pagespeed --]

        [-- INCLUDE -SMP-header-minicart_pagespeed PROCESS --]
      </header>
      <!--header end-->
      <div class="cmlla" id="cmlla">
        <!--main start-->
        <main role="main">
          <!-- BEGIN ADD TO CART FORM -->
          <form id="form[-- PRODUCT.RecordNumber --]" action="[-- SHOPPING_CART_URL BASE --]/order.cgi" method="post">
            <!--sticky add to cart-->
              <div class="always-there-cart">
                <div class="col-lg-9 col-md-9 col-sm-9">
                  <div class="col-lg-2 col-md-2 col-sm-2" id="sticky-product-image">[--PRODUCT.Graphic--]</div>
                  <div class="col-lg-8 col-md-8 col-sm-8" style="font-weight:bold; font-size:18px; color:#fff;">
                    <div class="col-lg-12 col-md-12 col-sm-12 product-name-wrap">
                      [--PRODUCT.Name--]
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="read-more-link" onclick="readmore()">Read More</div>
                      <div class="read-less-link" onclick="readless()">Read Less</div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 pricing-sticky-bar" style="margin-top:5px;" >
                      [--IF PRODUCT.DisplayPrice--]
                        [--IF PRODUCT.SaleOn--]
                        <script>var shipthreshold="[-- PRODUCT.SaleAmount --]";</script>
                          <strike style="font-weight:normal; color:#a0a0a0;">[--PRODUCT.Price--]</strike>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ff3434;">[--PRODUCT.SaleAmount--]</span>
                        [--ELSE--]
                        <script>var shipthreshold="[-- PRODUCT.Price --]";</script>
                          <span style="color:#ff3434;">[--PRODUCT.Price--]</span>
                        [--END_IF--]
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="shipmessage" style="font-size:16px; color:#000; font-weight:normal; display:inline-block;"></span>&nbsp;&nbsp;<span id="qoh5" class="qoh-alert" style="color:#ff3434; text-transform:none; font-weight:bold; font-size:16px;"></span>
                      [--END_IF--]
                      <script>
                        shipthreshold=shipthreshold.replace(/[^0-9.]/g, "");
                        shipthreshold=parseInt(shipthreshold);
                        freightField="[--PRODUCT.Field4--]";
                        if(freightField=="freight"){
                          var freightShip=1;
                        }else{
                          var freightShip=0;
                        }

                        if(shipthreshold>=49&&freightShip==0){
                          $('.shipmessage').append('Free Shipping');
                        }
                      </script>
                      
                    </div>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <div id="product_just_stars" class="small" style="float:right;"></div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  [--IF PRODUCT.Field29 "yes"--]
                    <span class="callfordeets" style="font-size:18px;">Call (800) 401-8151 for details</span>
                  [--ELSE--]
                    [--IF PRODUCT.DisplayPrice--]
                      <div>
                        <label for="btn_att_cart" class="btn-att-cart-sticky" style="position: relative; display: block; height: 50px; cursor: pointer;">
                          <span class="hide" style="color: transparent; font-size: 1px; left: -99999px; position: absolute;">Add to Bag</span>
                          <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="" style="color: #ffffff; font-size: 1.25em; font-weight: 400; height: 50px;" />-->
                          <input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="Add To My Bag" data-original-title="" title="" style="background-color: rgb(40, 177, 29);">
                          <div style="font-size:14px; margin:2px auto; color:#fff; font-weight:normal; text-decoration:underline; text-align:center;"><a href="#financing-pop" class="financing-pop_open" style="color:#0000ee !important; text-decoration:underline !important;font-style:italic;" onclick="ga('send', 'event', 'FApopup', 'FAclick', 'Finance Application');">0% Financing Available - Apply Here!</a></div>
                        </label>
                      </div>
                    [--ELSE--]
                        <span class="callfordeets" style="font-size:18px;">Call (800) 401-8151 for details</span>
                    [--END_IF--]
                  [--END_IF--]
                </div>
              </div>
            <style>
              .always-there-cart{
                display:none;
              }
              .always-there-cart .sa_jump_to_reviews{
                color:#0000ee;
                font-size:14px;
              }
              .sticky-cart-btn{
                display:block;
                background-color:#fff;
                position:fixed;
                z-index:9999999999;
                width:100%;
                padding:10px;
                top:0px;
                box-shadow: 0px 1px 13px #7b7b7b;
              }
              .product-name-wrap{
                height:20px;
                line-height:20px;
                color:#000;
                overflow:hidden;
              }
              .read-more-link, .read-less-link{
                display:none;
                color:#5a9bff;
                text-decoration:underline;
                font-size:14px;
                cursor: pointer;
              }
              .read-more-link:hover, .read-less-link:hover{
                display:none;
                color:#de5454;
                text-decoration:underline;
                font-size:14px;
                cursor: pointer;
              }
              div#sticky-product-image img{
                max-width:50px;
                max-height:50px;
                float:right;
              }
              /*.btn-att-cart-sticky:before{
                content:'';
                background: url(/AE/images/addtocart.webp) no-repeat center center;
                background-size: 142px 21px;
                height: 21px;
                left: 0;
                position: absolute;
                top: 15px;
                width: 100%;
                text-align: center;
              }*/
              /*@media (max-width:768px) {
              .pricing-sticky-bar{
              text-align:center;
              padding:5px;
              }
              }*/
            </style>
            <script>
              $('#sticky-product-image img').addClass("img-responsive");
              var $document = $(document),
              $element2 = $('.always-there-cart'),
              className2 = 'sticky-cart-btn';

              $document.scroll(function() {
                var nameDivOverflow = $('.product-name-wrap').prop('scrollHeight');
                var nameDivH = $('.product-name-wrap').prop('clientHeight');
                var overflowDif = nameDivOverflow-nameDivH;
                var resW = window.innerWidth;
                if(resW>=1024){
                  $element2.toggleClass(className2, $document.scrollTop() >= 690);
                }else{
                  if ($element2.hasClass(className2)){
                    $element2.toggleClass(className2);
                  }
                }
                if(overflowDif > 5){
                  $('.read-more-link').css('display','block');
                }
              });

              function readmore(){
                $('.product-name-wrap').css({'height':'100%','overflow':'visible'});
                $('.read-more-link').css('display','none');
                $('.read-less-link').css('display','block');    
              }
              function readless(){
                $('.product-name-wrap').css({'height':'19px','overflow':'hidden'});
                $('.read-more-link').css('display','block');
                $('.read-less-link').css('display','none');     
              }
            </script>
            <!--end sticky add to cart-->
            <style type="text/css">
              #expertsewingconsultants {
                text-align:center;
                display:none;
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
                display:block !important;
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
              @media (min-width:768px) and (max-width:1199px) {
                #geolocationshipping {margin-top:10px;}
              }
            </style>

            [--IF PRODUCT.Field3 "local"--]
            [--ELSE--]
              [--IF PRODUCT.Field3 "industrial"--]
              [--ELSE--]
                [--IF PRODUCT.Field3 "consew"--]
                [--ELSE--]
                  [--IF PRODUCT.Field3 "sup"--]
                  [--ELSE--]
                    [--IF PRODUCT.Field3 "fashdelay"--]
                    [--ELSE--]
                      <div id="geolocationshipping" style="text-align:center;font-size:2.5em;">
                        <div id="address"></div>
                      </div>
                      <script>
                        $.get("https://ipinfo.io?token=0423266a427ee0", function (response) {
                        if(response.region == "Alabama" || response.region == "Arizona" || response.region == "Arkansas" || response.region == "California" || response.region == "Colorado" || response.region == "Connecticut" || response.region == "Delaware" || response.region == "Florida" || response.region == "Georgia" || response.region == "Idaho" || response.region == "Illinois" || response.region == "Indiana" || response.region == "Iowa" || response.region == "Kansas" || response.region == "Kentucky" || response.region == "Louisiana" || response.region == "Maine" || response.region == "Maryland" || response.region == "Massachusetts" || response.region == "Michigan" || response.region == "Minnesota" || response.region == "Mississippi" || response.region == "Missouri" || response.region == "Montana" || response.region == "Nebraska" || response.region == "Nevada" || response.region == "New Hampshire" || response.region == "New Jersey" || response.region == "New Mexico" || response.region == "New York" || response.region == "North Carolina" || response.region == "North Dakota" || response.region == "Ohio" || response.region == "Oklahoma" || response.region == "Oregon" || response.region == "Pennsylvania" || response.region == "Rhode Island" || response.region == "South Carolina" || response.region == "South Dakota" || response.region == "Tennessee" || response.region == "Texas" || response.region == "Utah" || response.region == "Vermont" || response.region == "Virginia" || response.region == "Washington" || response.region == "West Virginia" || response.region == "Wisconsin" || response.region == "Wyoming") {
                            $("#address").html("<span style='color:red;'>Free Shipping</span> to " + response.region + " <a href='#geopopup' class='geopopup_open' style='font-size:16px;color:#0000EE  !important; text-decoration:underline !important;'>See details</a><span style='display:block;clear:left;font-size:16px;margin-top:5px;'>On orders over $49. Most orders ship same day and are delivered within 3-7 days.</span>");
                          } else {
                            $("#address").html("<span style='color:red;'>Free Shipping</span> Over $49 <a href='#geopopup' class='geopopup_open' style='font-size:16px;color:#0000EE  !important; text-decoration:underline !important;'>See details</a><span style='display:block;clear:left;font-size:16px;margin-top:5px;'>Most orders ship same day and are delivered within 3-7 days.</span>");
                          }
                        }, "jsonp");
                      </script>
                    [--END_IF--]
                  [--END_IF--]
                [--END_IF--]
              [--END_IF--]
            [--END_IF--]

            <script src="//cdn.sewingmachinesplus.com/AE/jquery-popup/jquery.popupoverlay.min.js"></script>
            <script>
              $.get("https://ipinfo.io?token=0423266a427ee0", function (response) {
              if(response.region == "Alabama" || response.region == "Arizona" || response.region == "Arkansas" || response.region == "California" || response.region == "Colorado" || response.region == "Connecticut" || response.region == "Delaware" || response.region == "Florida" || response.region == "Georgia" || response.region == "Idaho" || response.region == "Illinois" || response.region == "Indiana" || response.region == "Iowa" || response.region == "Kansas" || response.region == "Kentucky" || response.region == "Louisiana" || response.region == "Maine" || response.region == "Maryland" || response.region == "Massachusetts" || response.region == "Michigan" || response.region == "Minnesota" || response.region == "Mississippi" || response.region == "Missouri" || response.region == "Montana" || response.region == "Nebraska" || response.region == "Nevada" || response.region == "New Hampshire" || response.region == "New Jersey" || response.region == "New Mexico" || response.region == "New York" || response.region == "North Carolina" || response.region == "North Dakota" || response.region == "Ohio" || response.region == "Oklahoma" || response.region == "Oregon" || response.region == "Pennsylvania" || response.region == "Rhode Island" || response.region == "South Carolina" || response.region == "South Dakota" || response.region == "Tennessee" || response.region == "Texas" || response.region == "Utah" || response.region == "Vermont" || response.region == "Virginia" || response.region == "Washington" || response.region == "West Virginia" || response.region == "Wisconsin" || response.region == "Wyoming") {
                  $("#address").html("<span style='color:red;'>Free Shipping</span> to " + response.region + " <a href='#geopopup' class='geopopup_open' style='font-size:16px;color:#0000EE  !important; text-decoration:underline !important;'>See details</a><span style='display:block;clear:left;font-size:16px;margin-top:5px;'>On orders over $49. Most orders ship same day and are delivered within 3-7 days.</span>");
                } else {
                  $("#address").html("<span style='color:red;'>Free Shipping</span> Over $49 <a href='#geopopup' class='geopopup_open' style='font-size:16px;color:#0000EE  !important; text-decoration:underline !important;'>See details</a><span style='display:block;clear:left;font-size:16px;margin-top:5px;'>Most orders ship same day and are delivered within 3-7 days.</span>");
                }
              }, "jsonp");
            </script>
            <style>
              .well2 {
                box-shadow: 0 0 10px rgba(0,0,0,0.3);
                display:none;
                margin:1em;
                max-height:80%;
                overflow-y:scroll;
                max-width:600px !important;
                padding:19px;
              }
              #geopopup{
                transform: scale(0.8);
              }
              .popup_visible #geopopup{
                transform: scale(1);
              }
            </style>
            <div id="geopopup" class="container well2" style="background-color:#ffffff; max-width:65%;">
              <p style="text-align:center;font-size:2.0em;">FREE Shipping on orders $49 and up.<p>
              <img class="lazy" src="//cdn.sewingmachinesplus.com/images/UPS-ship-time-map.gif" data-srcset="//cdn.sewingmachinesplus.com/images/UPS-ship-time-map.gif" data-src="//cdn.sewingmachinesplus.com/images/UPS-ship-time-map.gif" style="margin:0 auto 10px;display:block;"/>
              <p>Most orders are processed and shipped same day. Orders placed on Friday after 3pm, Saturday, or Sunday are processed on Monday. Processing and shipping does not take place on weekends or holidays.</p>
              <p>Within the continental United States (the contiguous 48 states), Shipping is FREE to customers on orders over $49. Orders being shipped to Hawaii, Alaska, Canada, APO's, FPO's and DPO's are not eligible for free shipping. Also, the free shipping policy does not apply to large or heavy items that require special shipping methods such as assembled industrial sewing machines and some sewing cabinets.</p>
              <p><a class="btn btn-secondary btn-lg geopopup_close" style="background-color:#e70000 !important;" href="#" role="button">Close</a></p>
            </div>
            <!-- <div id="expertsewingconsultants" class="sticky">
            <span id="expert-number-callout" style="color: red;">Call <a href="tel:800-401-8151">800-401-8151</a> <span class="expert-mobile-remove1" style="color:black;">To Speak With An Expert Sewing Consultant</span></span>
            <span class="expert-mobile-remove2" style="margin-top: 5px;">We'll help you find the perfect product and provide <b>lifetime support</b> for any purchase. <a href="/expert-sewing-consultants.php">E-mail us here</a>.</span>
            </div> -->
            <!--page head start-->
            <div class="page-head" style="margin-top:15px;"></div>
            <!--page head end-->
            <div class="space-20"></div>
            <div class="container">
              <div class="row single-product">
                <a name="accessanchor"></a>
                <script type="text/javascript">
                  $(document).ready(function () {
                    if(window.location.href.indexOf("js-accessories") > -1) {
                      contentDisplay('acc');
                    }
                    $('[href="#collapseOne"]').click();
                    /*accordions rollovers*/
                    $('.accordion-group').mouseover(function(){
                      var openAcc=$(this).find('.accordion-toggle').attr('aria-expanded');
                      if(openAcc!="true"){
                        $(this).css('background-color','#cdcdcd');
                        $(this).find("a").css("color","#565656");
                      }
                    });
                    $('.accordion-group').mouseout(function(){
                      $(this).css('background-color','#ffffff');
                      $(this).find("a").css("color","#898989");
                    });
                    $('.accordion-group').click(function(){
                      $(this).css('background-color','#ffffff');
                      $(this).find("a").css("color","#898989");
                    });
                  });
                  $(document).ready(function () {
                    if(window.location.href.indexOf("js-video") > -1) {
                      contentDisplay('videos');
                    }
                  });
                </script>
                [-- IF PRODUCT.Field47--]
                  <div class="col-md-12">
                    <!-- <img data-src="[--PRODUCT.Field47--]" data-srcset="[--PRODUCT.Field47--]" class="lazy img-responsive"> -->
                    <picture>
                      <source srcset="[--PRODUCT.Field47--].webp" type="image/webp" class="img-responsive">
                      <source srcset="[--PRODUCT.Field47--].jpg" type="image/jpeg" class="img-responsive">
                      <img data-src="[--PRODUCT.Field47--].jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy img-responsive">
                    </picture>
                  </div>
                [--END_IF--]
                <div class="col-md-6">
                  <div id="product-single" class="single-product-slider">
                    <div class="item">
                      <!-- MEDIUM-SIZED PRODUCT IMAGE GOES HERE -->
                      [-- IF PRODUCT.Field5 --]
                        <?php
                          [-- IF PRODUCT.Field11 --]
                            $field11 = true;
                            $img_title = explode('|', '[-- PRODUCT.Field11 JS_ENCODE --]');
                          [-- ELSE --]
                            $field11 = false;
                            $img_title = '[-- PRODUCT.Name --]';
                          [-- END_IF --]
                          $field5img = explode("|", "[-- PRODUCT.Field5 --]");
                          for($n=0; $n<count($field5img); $n++){
                            $medImgLarge = "/media/" . $field5img[$n];
                            $image = $field5img[$n];
                            $image2 = $image . "jpg";
                            $medImgLarge = "/media/" . $field5img[0];
                            if($field11){
                              $ititle = $img_title[$n];
                            } else{
                              $ititle = $img_title;
                            }
                            if($n==0){
                              echo "<a onclick='startLightbox(); return false;' href='//cdn.sewingmachinesplus.com/media/".$image2."' data-title='".$ititle."' ><picture><source srcset='https://cdn.sewingmachinesplus.com/".$medImgLarge."webp' type='image/webp' class='mediumImage img-responsive' style='max-height:400px;'><source srcset='https://cdn.sewingmachinesplus.com/".$medImgLarge."jpg' type='image/jpeg' class='mediumImage img-responsive' style='max-height:400px;'><img data-src='https://cdn.sewingmachinesplus.com/".$medImgLarge."jpg' alt='[-- PRODUCT.Name --]' title='[-- PRODUCT.Name --]' class='lazy mediumImage img-responsive' style='max-height:400px;'></picture></a>";
                            }
                          };
                        ?>
                      [-- ELSE --]
                        [-- IF PRODUCT.MoreInformationGraphic --]
                          <img [-- PRODUCT.MoreInformationGraphic REMOVE_HTML--] border="0">
                        [--ELSE--]
                          <img src="[-- VAR.MyImages --]/images/more_comingsoon.gif" hspace="0" vspace="0">
                        [-- END_IF --]
                      [-- END_IF --]
                      <!--360 img-->
                      [-- IF PRODUCT.Field19 "yes"--]
                        <div align="center">
                          <a href="" onclick="javascript:void window.open('//cdn.sewingmachinesplus.com/media/products360/[--PRODUCT.SKU--]/[--PRODUCT.SKU--].html','1413931890203','width=800,height=800,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
                          <!-- <img src="//cdn.sewingmachinesplus.com/media/products360/button.webp" border="0"> -->

                          <picture>
                            <source srcset="https://cdn.sewingmachinesplus.com/media/products360/button.webp" type="image/webp" class="image-360">
                            <source srcset="https://cdn.sewingmachinesplus.com/media/products360/button.jpg" type="image/jpeg" class="image-360">
                            <img data-src="https://cdn.sewingmachinesplus.com/media/products360/button.jpg" alt="" title="" class="lazy image-360">
                          </picture>
                          </a>
                        </div>
                      [--ELSE--]
                      [--END_IF--]
                      <!-- IMAGES BLOCK -->
                      <center>
                        [-- IF PRODUCT.Field5 --]
                          <div class="owl-theme">
                            <div class="owl-controls">
                               <div id="newowldots" class="owl-dots"></div>
                            </div>
                          </div>
                          <div class="owl-carousel">
                            <?
                              $field5img = explode("|", "[-- PRODUCT.Field5 --]");
                              foreach ($field5img as &$image) {
                                $medImg = $image;
                                $image2 = $image . "jpg";
                                $medImg = substr_replace($medImg, '/resized/', strrpos($medImg, '/'), 1);
                                $pos = strrpos($medImg, '.');
                                $medImg = substr_replace($medImg, '_size3.', $pos, 1);
                                echo "<div class='thumbnailoverflow'>";
                                echo "<a data-lightbox='thumbnailslightbox' href='//cdn.sewingmachinesplus.com/media/".$image2."'><picture><source srcset='https://cdn.sewingmachinesplus.com/media/".$medImg."webp' type='image/webp' class='thumbnails'><source srcset='https://cdn.sewingmachinesplus.com/media/".$medImg."jpg' type='image/jpeg' class='thumbnails'><img data-src='https://cdn.sewingmachinesplus.com/media/".$medImg."jpg' alt='[-- PRODUCT.Name --]' title='[-- PRODUCT.Name --]' class='lazy thumbnails'></picture></a>";
                                echo "</div>";
                              };
                            ?>
                        [-- ELSE --]
                          (More images coming later.)
                        [-- END_IF --]
                        <!-- END ZOOM + POPUP -->
                      </center>
                      </div>
                    </div>
                    [--IF PRODUCT.Field17--]
                      <div class="social-buttons" align="center">
                        <a href="#videosLink" id="videos-anchor-btn">
                          <!-- <img src="//cdn.sewingmachinesplus.com/media/images/view-videos.webp"> -->
                          <picture>
                            <source srcset="https://cdn.sewingmachinesplus.com/media/images/view-videos.webp" type="image/webp" class="view-videos">
                            <source srcset="https://cdn.sewingmachinesplus.com/media/images/view-videos.jpg" type="image/jpeg" class="view-videos">
                            <img data-src="https://cdn.sewingmachinesplus.com/media/images/view-videos.jpg" alt="Click to view videos" title="Click to view videos" class="lazy view-videos">
                          </picture>
                        </a>
                      </div>
                      <script>
                        $('#videos-anchor-btn').click(function(event){
                          event.preventDefault();
                          $('html, body').animate({
                          scrollTop: $('#videosLink').offset().top}, 500);
                          if($('#videosLinktoggle').hasClass('collapsed')){
                            $('#videosLink .accordion-heading a').click();
                          }
                        });
                      </script>
                    [--END_IF--]
                    <div class="space-20"></div>
                    <!-- BEGIN AddShoppers -->
                    <script type="text/javascript">
                      var js = document.createElement('script'); js.type = 'text/javascript'; js.async = true;
                      js.id = 'AddShoppers';
                      js.src = ('https:' == document.location.protocol ? 'https://shop.pe/widget/' : 'http://cdn.shop.pe/widget/') + 'widget_async.js#5602d9f8a3876472ed906a10';
                      document.getElementsByTagName("head")[0].appendChild(js);
                    </script>
                    <style>
                      /*socmed btns*/
                      .share-buttons .social-icon.facebook, .share-buttons .social-icon.pinterest, .share-buttons .social-icon.twitter, .share-buttons .social-icon.email, .share-buttons .social-icon.addshoppers{
                        background-color:#ccc;
                      }
                      .share-buttons .social-icon.facebook:hover{
                        background-color:#4663bd;
                      }
                      .share-buttons .social-icon.pinterest:hover{
                        background-color:#e03e46;
                      }
                      .share-buttons .social-icon.twitter:hover{
                        background-color:#77c4fa;
                      }
                      .share-buttons .social-icon.email:hover{
                        background-color:#acd373;
                      }
                      .share-buttons .social-icon.addshoppers:hover{
                        background-color:#fd7f54;
                      }
                    </style>
                    <div class="social-buttons">
                      <div style="margin-left:30px;margin-top:5px;"><div class="share-buttons share-buttons-panel" data-style="big" data-counter="false" data-oauth="true" data-hover="false" data-promo-callout="none" data-buttons="facebook,pinterest,twitter,email"></div>
                    </div>
                  </div>
                    <!-- END AddShoppers -->
                  <div class="space-20"></div>
                  [-- IF PRODUCT.Field51 --]
                <div style="text-align:center;" class="modelCompare-outter"><a href="#modelCompare-table" id="MCScroll" style="font-size:18px;color:#0000EE !important; text-decoration:underline !important;font-weight:bold;">Compare with similar models</a></div>
          <script>
          $('#MCScroll').click(function(event){
            event.preventDefault();
            $('html, body').animate({
            scrollTop: $('#modelCompare-table').offset().top - 150}, 500);
          });
          </script>
          [-- END_IF --]
                  <div class="product-banner">
                    <!--<a href="#craftsy-pop" class="craftsy-pop_open"><img src="//cdn.sewingmachinesplus.com/AE/images/product-details-banner.webp" class="lazy img-responsive" alt="" /></a>-->
                  </div>
                </div>
                <div class="col-md-6 col-md-push-6-item-details">
                  <!--XMAS SHIPPING BANNER-->

                  <!--END XMAS SHIPPING BANNER-->
                  <!--CUSTOM DYNAMIC BANNER FOR PROMOTIONS CZ 9/11/2014-->
                  <div id="data_4Tell" data-products="[--PRODUCT.SKU--]" data-customer="" data-cart=""></div>
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
                    
                    <div class="product-detail-desc">
                      <h4 class="brand">
                        [-- Product.Brand --] <br> SKU: [--Product.SKU--]
                      </h4>
                      <!-- PRODUCT TITLE GOES HERE -->
                      <h3 class="title">
                        [-- IF PRODUCT.MoreInformationTitle --]
                          [-- PRODUCT.MoreInformationTitle --]
                        [-- ELSE --]
                          [-- PRODUCT.Name REMOVE_HTML --]
                        [-- END_IF --]
                        <span id="qoh5" class="qoh-alert" style="color:#ec010a; text-transform:none; font-weight:bold; font-size:16px;"></span>
                      </h3>
                      [--IF PRODUCT.Field39--]
                        <span id="sales-text-field">[--PRODUCT.Field39--]</span>
                      [--END_IF--]
                      <!--
                      <span class="sku">SKU #
                      [-- IF PRODUCT.DobaItemID --]
                      [-- PRODUCT.DobaItemID --]
                      [-- ELSE --]
                      [-- PRODUCT.SKU --]
                      [-- END_IF --]
                      </span>
                      //-->
                      <!-- REVIEW STARS -->
                      <style type="text/css">
                        #product_just_stars {
                          text-align:right;
                        }
                        .sa_jump_to_reviews {
                          font-size:18px;
                          color:#7e5db3;
                          font-weight:bold;
                        }
                        .ind_cnt {
                          text-align:right;
                          width:auto !important;
                          padding-right:22px;
                        }
                        .sa_logo {
                          margin-top:-40px !important;
                        }
                        #sa_sort {
                          position:relative;
                          top:3px;
                        }
                        @media (max-width:555px) {
                          .sa_logo {
                            margin-top:0px !important;
                          }
                        }
                        @media (max-width:376px) {
                          .sa_logo {
                            margin-top:25px !important;
                          }
                        }
                        .pr_link {
                          background-color:purple;
                          font-size:16px;
                        }
                        .merchantheader {
                          font-weight:bold;
                        }
                        div.new-condition p.shipping:before{
                          content: "\46";
                          font-family: 'icomoon';
                          display: inline-block;
                          float: left;
                          color: #7e5db2;
                          margin-right: 10px;
                          font-size: 30px;
                        }
                      </style>
                      <script type="text/javascript">
                        var sa_product = '[-- PRODUCT.SKU --]'; function saLoadScript(src) {
                          var js = window.document.createElement("script");
                          js.src = src; js.type = "text/javascript";
                          document.getElementsByTagName("head")[0].appendChild(js); 
                        }
                        saLoadScript('//www.shopperapproved.com/product/21959/'+sa_product+'.js');
                      </script>
                      <div id="product_just_stars" class="big"></div>
                      <!-- END REVIEW STARS -->
                      <!-- new social media buttons -->
                      <!--<div style="margin-left:30px;margin-top:5px;">
                      <div class="share-buttons share-buttons-panel" data-style="big" data-counter="false" data-oauth="true" data-hover="false" data-promo-callout="left" data-buttons="facebook,pinterest,twitter,email"></div>
                      </div>-->
                      <!-- end new social media buttons -->
                      <!--BEGIN PRICING INFO-->
                      [--IF PRODUCT.DisplayPrice--]
                        <?php $price=0; $saleprice="[--PRODUCT.SaleAmount--]";?>
                        <div class="price-top price">
                          <div>
                            [--IF PRODUCT.SaleOn--]
                              <span class="list-price">List Price: <del>[-- PRODUCT.Price --]</del></span>
                              <span class="sale-price">Sale Price: <span>[-- PRODUCT.SaleAmount --]</span></span>
                              <?php $price="[--PRODUCT.SaleAmount--]" ; ?>
                            [--ELSE--]
                              [--IF PRODUCT.Field6--]
                              [--ELSE--]
                                <style>.product-detail-desc .price div:first-child{border:none!important;}</style>
                              [--END_IF--]
                              <span class="sale-price">Price: <span>[-- PRODUCT.Price --]</span></span>
                              <?php $price="[--PRODUCT.Price--]" ; ?>
                            [--END_IF--]
                          </div>
                          <div>
                            <!--financing info display and math-->
                            [--IF PRODUCT.Field6--]
                              <?php
                                $months="[--PRODUCT.Field6--]";
                            
                                $price=ltrim($price, "$");
                                $price=str_replace(",", "", $price);
                                $price=number_format($price/$months, 2);
                            
                                echo ("<span class='sale-price'>Or <span id='financingprice'>$".$price."<span>/mo 0% Interest!</span></span></span>");
                              ?>
                            [--END_IF--]
                            <!--savings display-->
                            <?php
                              $listprice = "[-- PRODUCT.Price --]";
                              $listprice = ltrim($listprice, "$");
                              $listprice = str_replace(",", "", $listprice);

                              $saleprice = ltrim($saleprice, "$");
                              $saleprice = str_replace(",", "", $saleprice);

                              $saving = $listprice - $saleprice;

                              $percentage = ($saving / $listprice)*100;
                              $percentage = number_format($percentage);

                              if($percentage<100){
                                echo ("<span class='savings'>You Save <span>$".$saving." [".$percentage."%]</span></span>");
                              }else{

                              }
                            ?>
                            <!--BEGIN FINANCING POPUP-->
                            [--IF PRODUCT.Field6--]
                              <br><a href="#financing-pop" class="financing-pop_open" style="color:#0000EE !important; text-decoration:underline !important;font-style:italic;" onclick="ga('send', 'event', 'FApopup', 'FAclick', 'Finance Application');">Get Approved For Financing</a>
                            [--END_IF--]
                          </div>
                        </div>
                        [--IF PRODUCT.Field3 "store"--]
                          <script>
                            ss_jQuery(document).ready(function(){
                              if(liveskuqoh<=9&&liveskuqoh>0){
                                ss_jQuery('span.qoh-alert').append('Only '+liveskuqoh+' left in stock - order soon!');
                                ss_jQuery('div.qoh-alert').append('Only '+liveskuqoh+' left in stock - order soon!');
                              }else if(liveskuqoh>9){
                                ss_jQuery('span.qoh-alert').append('In stock and ready to ship!');
                                ss_jQuery('div.qoh-alert').append('Only '+liveskuqoh+' left in stock - order soon!');
                              }
                            })
                          </script>
                        [--END_IF--]
                        <!--END PRICING INFO -->
                        [-- IF PRODUCT.DisplayPrice --]
                          [--IF PRODUCT.Field29 "yes"--]
                          [--ELSE--]
                            <input type=hidden name="storeid" value="[--Store.id--]">
                            <input type=hidden name="dbname" value="products">
                            <input type="hidden" name="itemnum" value="[-- PRODUCT.RecordNumber --]">
                            <input type=hidden name="function" value="add">
                            <!--quantity drop down-->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              [-- IF product.DisplayOrderQuantity? --]
                                <span class="pr_qty">
                                  [--STORE.Qty--]:&nbsp;
                                  <select name="[--PRODUCT.RECORDNUMBER--]:qnty" id="quantity-selector">
                                    <?php
                                      $maxqty=$output['p1quantity'];
                                      $minqty=1;
                                      $i=1;
                                      if($maxqty==0){
                                        do{
                                          echo('<option value="'.$i.'">'.$i.'</option> ');
                                          $i++;
                                        }while ($i<=5);
                                      }else{
                                        if($maxqty>30){
                                          do{
                                            echo('<option value="'.$i.'">'.$i.'</option> ');
                                            $i++;
                                          }while ($i<=30);
                                        }else{
                                          do{
                                            echo('<option value="'.$i.'">'.$i.'</option> ');
                                            $i++;
                                          }while ($i<=$maxqty);
                                        }
                                      }
                                    ?>
                                  </select>
                                </span>

                                <style>
                                  .wantby{display:inline;}
                                  /*.xmas-delivery{display:inline-block; background-color:#7e5db2; text-align:center; color:#fff; padding:4px 9px; margin:3px 0;}*/
                                </style>
                                <script>
                                  var weekDate = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                                  var monthDate = ["January","February","March","April","May","June","July","August","September","October","November","December"];
                                  Date.prototype.addDays = function(days) {
                                    var dat = new Date(this.valueOf());
                                    dat.setDate(dat.getDate() + days);
                                    return dat;
                                  }
                                  var dat = new Date();
                                  var eta = dat.addDays(3);
                                  var dotw = weekDate[eta.getDay()];
                                  var moty = monthDate[eta.getMonth()];
                                  var dotm = eta.getDate();
                                  var stock = liveskuqoh;
                                  var avail = "[--PRODUCT.Field3--]";
                                  if(dotw == "Sunday") {
                                    var eta = eta.addDays(1);
                                    var dotw = weekDate[eta.getDay()];
                                    var moty = monthDate[eta.getMonth()];
                                    var dotm = eta.getDate();
                                    //alert("Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.");
                                    if(stock>0&&avail=='store'){
                                      $('span.pr_qty').parent().append("<span id=\"wantby-top\" class=\"wantby\">  <span style=\"font-weight:bold;\">Want it "+dotw+", "+moty+" "+dotm+"?</span> Choose <span style=\"font-weight:bold; text-decoration:underline;\">1-3 Day Delivery</span> at checkout.</span>");
                                      //$('.shipping a:first').html("<span id=\"wantby-btm\" class=\"wantby\">Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.</span><br>");
                                      //$('span.pr_qty').parent().append("<span id=\"wantby-top\" class=\"xmas-delivery\">Choose <span style=\"font-weight:bold;\">Next Day Delivery</span> during checkout to receive before Christmas.</span>");
                                    }
                                  }else{
                                    //alert("Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.");
                                    if(stock>0&&avail=='store'){
                                      $('span.pr_qty').parent().append("<span id=\"wantby-top\" class=\"wantby\">  <span style=\"font-weight:bold;\">Want it "+dotw+", "+moty+" "+dotm+"?</span> Choose <span style=\"font-weight:bold; text-decoration:underline;\">1-3 Day Delivery</span> at checkout.</span>");
                                      //$('.shipping a:first').html("<span id=\"wantby-btm\" class=\"wantby\">Want it "+dotw+", "+moty+" "+dotm+"? Choose 1-3 Day Delivery at checkout.</span><br>");
                                      //$('span.pr_qty').parent().append("<span id=\"wantby-top\" class=\"xmas-delivery\">Choose <span style=\"font-weight:bold;\">Next Day Delivery</span> during checkout to receive before Christmas.</span>");
                                    }
                                  }
                                </script>

                              [--END_IF--]
                            </div>
                            <div class="add-buttons">
                              <label for="btn_att_cart" class="btn-att-cart">
                                <span class="hide">Add to Bag</span>
                                <!--<input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value=""  />-->
                                <input id="btn_att_cart" data-toggle="tooltip" data-placement="top" class="addtocart_button btn btn-skin btn-lg btn-block" name="Add to Bag" type="submit" value="Add To My Bag" data-original-title="" title="" style="background-color: rgb(40, 177, 29);">
                              </label>
                              [-- IF Product.Field34 --]
                                <br/>
                                [-- PRODUCT.Field34 --]
                              [-- END_IF --]
                            </div>
                            [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
                            <!--Start Social Media Buttons-->
                            <!--End Social Media Buttons-->
                            [-- IF PRODUCT.DisplayOrderingOptions --]<!--pull down original-->
                              <div id="pull-down-menus">
                                [-- PRODUCT.OptionText --]
                                <div class="steps clearfix">
                                  [--Order_Option_Menu Column--]
                                </div>
                              </div>
                            [-- END_IF --]
                          <!--close form-->
                          <!--Wishlist -->
                          <!--<a href="/wishlist/listmanage.php/add/i_[-- PRODUCT.SKU --]" title="Add To Your Wish List"><img border="0" alt="Add To Your Wish List" src="//cdn.sewingmachinesplus.com/media/images/add-to-wishlist-green.webp" class="lazy wishlist_button"></a>-->
                        [--END_IF--]
                      [-- END_IF --]
                      <script type="text/javascript">
                        <!--
                        var var1 = 'test.php';
                        //-->
                      </script>
                      <!--<a href="#" onClick="window.open('/cgi-sewdemo2/sb/tellfriend.cgi?storeid=*1a55e44c50fd5a9e18c062cfd94a5c&str=[-- PRODUCT.Name --]&from=[-- PRODUCT.MoreInfoURL --]','tellfriend','width=560,height=560,resizable=yes,scrollbars=yes, status=yes');return false;">
                      <img src="//cdn.sewingmachinesplus.com/images/send-to-friend2.webp" width="120" class="lazy" style="border: 0px; float: right;" />
                      </a>-->
                    <!--</div>end product-detail-desc original extra div-->

                    <!-- PRODUCT CONDITION, AVAILABILITY, ETC -->
                    [--IF Product.Field3--]
                      <p class="shipping">
                        [--IF Product.Field3 "sameday"--]
                          <a href="/customer-service.php#processing-shipping">Item ships same day if ordered before 1pm PST</a>
                        [-- END_IF --]
                        [--IF Product.Field3 "soon"--]
                          Coming Soon!
                        [-- END_IF --]
                        [--IF Product.Field3 "ds"--]
                          <a href="/customer-service.php#processing-shipping">Item ships from another facility. Expedited shipping is not available.</a>
                        [-- END_IF --]
                        [--IF Product.Field3 "store"--]
                          <a href="/customer-service.php#processing-shipping">Item ships from our location. Ground shipments usually arrive within 3-7 days.</a>
                        [-- END_IF --]
                        [--IF Product.Field3 "industrial"--]
                          <a href="/customer-service.php#processing-shipping">Items ship from other warehouse locations. Items usually leave the warehouse within 2-3 business days.</a>
                        [-- END_IF --]
                        [--IF Product.Field3 "consew"--]
                          <a href="/customer-service.php#processing-shipping" target="_blank">Items ship from other warehouse locations. Items usually leave the warehouse within 7-10 business days.</a>
                        [-- END_IF --]
                        [--IF Product.Field3 "sup"--]
                          <a href="/customer-service.php#processing-shipping">Item ships from manufacturer. Expect 5-7 days for delivery.</a>
                        [-- END_IF --]
                        [--IF Product.Field3 "ups"--]
                          <a href="/customer-service.php#processing-shipping">Item ships from manufacturer via UPS only.</a>
                        [-- END_IF --]
                        [--IF Product.Field3 "usa"--]
                          <a href="/customer-service.php#processing-shipping">Item ships from our location. Ground shipments usually arrive within 3-7 days.<br ><em style="color: #666; font-size:10px;">Only to destinations in the USA.</em></a>
                        [-- END_IF --]
                        [--IF Product.Field3 "lizzie"--]
                          <a href="/customer-service.php#processing-shipping">Item ships from our location. Ground shipments usually ship within 3-5 days.</a>
                        [-- END_IF --]
                        [--IF Product.Field3 "grace"--]
                          <a href="/customer-service.php#processing-shipping">Will ship within 5 business days</a>
                        [-- END_IF --]
                        [--IF Product.Field3 "grace2"--]
                          <a href="/customer-service.php#processing-shipping">Item ships from our location. Ground shipments usually arrive within 3-7 days. Grace frames will ship within 5 business days.</a>
                        [-- END_IF --]
                        [--IF Product.Field3 "out"--]
                          OUT OF STOCK
                        [-- END_IF --]
                        [--IF Product.Field3 "dl"--]
                          A link to download this file will appear on the "thank you" page after ordering. An e-mail will also be sent.
                        [-- END_IF --]
                        [--IF Product.Field3 "local"--]
                          This item can only be purchased locally at our retail locations.<br/>
                          <div id="local-popup" align="center">
                            <a href="#local-pop" class="local-pop_open">
                              <h4>Call 800-401-8151 for details or<br>Visit our stores in San Marcos and San Diego, CA<span style="color:#ec010b; font-size:.8em;"><br>
                              (click for more information)</span>.</h4>
                            </a>
                            <!-- Local pop up content -->
                            <!-- Local pop up content -->
                            <div id="local-pop" class="container well" style="background-color:#ffffff; max-width:85%;">
                              <div style="width:100% !important;" class="container">
                                <h3 style="text-align:center;">Visit our San Marcos or San Diego Location to learn more and purchase this product!</h3>
                                <span id="moreInfo"><div class="cbox mid greybox bord2">
                                <div class="cTxt full" style="padding:5px;">
                                  <div class="cbox mid">
                                    <h3 style="padding-bottom:20px;">For more information about each location, including a map and driving directions, click for your favorite location:</h3>

                                    <div class="dcol2c" style="padding-bottom:0;">
                                      <h3><a href="/sanmarcos.php">San Marcos, CA</a></h3>
                                    </div>
                                    <div class="dcol2c" style="padding-bottom:0;">
                                      <h3><a href="/missionbay.php">San Diego, CA</a></h3>
                                    </div>
                                  </div>
                                </div>
                              </div></span>
                                <div style="margin:2% 0;" class="col-lg-12 col-md-12 col-sm-12" align="center">
    
                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                    <a href="/sanmarcos.php">
                                      <picture>
                                        <source srcset="https://cdn.sewingmachinesplus.com/images/contact-us/san-marcos.webp" type="image/webp">
                                        <source srcset="https://cdn.sewingmachinesplus.com/images/contact-us/san-marcos.jpg" type="image/jpeg">
                                        <img data-src="https://cdn.sewingmachinesplus.com/images/contact-us/san-marcos.jpg" alt="San Marcos, CA location" title="San Marcos, CA location" class="lazy">
                                      </picture>
                                      <!-- <img src="//cdn.sewingmachinesplus.com/images/contact-us/san-marcos.webp" alt="San Marcos, CA location" title="San Marcos, CA location" /> -->
                                    </a>
                                    <h4><i>Call Local:</i></h4>
                                    <h3 style="margin:10px 0 20px 0; font-size:36px;"><b><a href="tel:760-739-8222">760-739-8222</a></b></h3>
                                    <h4><i>Store Hours:</i></h4>
                                    <p><b>Monday-Friday:</b> 9:30 am - 6:00 pm PST</p>
                                    <p><b>Saturday:</b> 10:00 am - 5:00 pm PST</p>
                                    <h4 style="padding-top:20px;">Showroom Location:</h4>
                                    <h3 style="line-height:1.5;"><b><a href="https://www.google.com/maps/place/SewingMachinesPlus.com/@33.1340837,-117.1270943,17z/data=!3m1!4b1!4m5!3m4!1s0x80dbf4d66ba9209f:0x131b63c2d168f2ac!8m2!3d33.1340837!4d-117.1249056" target="_blank" title="Click for Directions">713 Center Drive<br />
                                    San Marcos, CA 92069</a></b></h3>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                    <a href="/missionbay.php">
                                      <picture>
                                        <source srcset="https://cdn.sewingmachinesplus.com/images/contact-us/san-diego.webp" type="image/webp">
                                        <source srcset="https://cdn.sewingmachinesplus.com/images/contact-us/san-diego.jpg" type="image/jpeg">
                                        <img data-src="https://cdn.sewingmachinesplus.com/images/contact-us/san-diego.jpg" alt="San Diego, CA location - NOW OPEN!!!" title="San Diego, CA location - NOW OPEN!!!" class="lazy">
                                      </picture>
                                      <!-- <img src="//cdn.sewingmachinesplus.com/images/contact-us/san-diego.webp" alt="San Diego, CA location - NOW OPEN!!!" title="San Diego, CA location - NOW OPEN!!!" /> -->
                                    </a>
                                    <h4><i>Call Local: <span class="greentxt"><i>NOW OPEN!</i></span></i></h4>
                                    <h3 style="margin:10px 0 20px 0; font-size:36px;"><b><a href="tel:858-225-2739">858-225-2739</a></b></h3>
                                    <h4><i>Store Hours:</i></h4>
                                    <p><b>Monday-Friday:</b> 9:30 am - 6:00 pm PST</p>
                                    <p><b>Saturday:</b> 10:00 am - 5:00 pm PST</p>
                                    <h4 style="padding-top:20px;">Showroom Location:</h4>
                                    <h3 style="line-height:1.5;"><b><a href="https://www.google.com/maps/place/SewingMachinesPlus.com/@32.8048479,-117.2208364,17z/data=!4m13!1m7!3m6!1s0x80dc00356eb5db3f:0x146b8282c0af74ac!2s4606+Mission+Bay+Dr,+San+Diego,+CA+92109!3b1!8m2!3d32.804777!4d-117.218672!3m4!1s0x80dc00356ec00001:0x95a1a19a9ac604d8!8m2!3d32.8048434!4d-117.2186477" target="_blank" title="Click for Directions">4606 Mission Bay Drive<br />
                                    San Diego, CA 92109</a></b></h3>
                                  </div>
                                </div>
                                <p><a class="btn btn-secondary btn-lg local-pop_close" style="background-color:#e70000 !important;" href="#" role="button">Close</a></p>
                              </div>
                            </div>
                          </div>
                          <div class="clear">&nbsp;</div>
                          <div class="space-20"></div>
                        [-- END_IF --]
                        [--IF Product.Field3 "custom"--]
                          This item is custom made and will ship within approximately 10 business days of being ordered.
                        [-- END_IF --]
                        [--IF Product.Field3 "fashdelay"--]
                          This item is custom made and will ship in approximately 3 to 4 weeks.
                        [-- END_IF --]
                        [--IF Product.Field3 "dec"--]
                          <a href="/customer-service.php#processing-shipping">This product will not be available to ship, until after Dec.24th</a>
                        [-- END_IF --]
                      [-- END_IF --]
                      [--IF Product.Field4--]
                        [--IF Product.Field4 "free"--]
                          <a href="/customer-service.php#processing-shipping">Free Shipping to the Continental USA!</a>
                        [-- END_IF --]
                        [--IF Product.Field4 "freedropship"--]
                          <a href="/customer-service.php#processing-shipping">Free Shipping!</a>
                        [-- END_IF --]
                        [--IF Product.Field4 "3day"--]
                          <a href="/customer-service.php#processing-shipping">Free upgrade to 3 business day shipping when you choose ground to the continental USA!</a>
                        [-- END_IF --]
                        [--IF Product.Field4 "2day"--]
                          <a href="/customer-service.php#processing-shipping">Free upgrade to 2 business day shipping when you choose ground to the continental USA!</a>
                        [-- END_IF --]
                        [--IF Product.Field4 "holiday09"--]
                          <a href="/customer-service.php#processing-shipping">Happy Holidays Free Shipping to the Continental USA! Use code: holiday09</a>
                        [-- END_IF --]
                        [--IF Product.Field4 "freight"--]
                          <a href="/customer-service.php#freight"><b>Freight shipping charges will apply on this item.</b></a>
                        [-- END_IF --]
                      </p>
                      [-- END_IF --]
                      [--IF Product.Field2--]
                        <p class="condition"><span class="n-link">Condition:</span>
                          [--IF Product.Field2 "new"--]
                            Brand New
                          [-- END_IF --]
                          [--IF Product.Field2 "sm"--]
                            Show Model
                          [-- END_IF --]
                          [--IF Product.Field2 "fm"--]
                            Floor Model
                          [-- END_IF --]
                          [--IF Product.Field2 "fs"--]
                            Factory Serviced
                          [-- END_IF --]
                          [--IF Product.Field2 "refurb"--]
                            Refurbished
                          [-- END_IF --]
                          [--IF Product.Field2 "dl"--]
                            File Download (No physical item will be sent)
                          [-- END_IF --]
                        </p>
                      [-- END_IF --]
                      </form>
                      <!-- BEGIN PRICE COMPARISON LINK -->
                      <form method="POST" action="price-comparison.php">
                        <input type="hidden" name="product" value="[-- PRODUCT.Name --]" />
                        <input type="hidden" name="SKU" value="[-- PRODUCT.SKU --]" />
                        <input type="hidden" name="productURL" value="[-- PRODUCT.MoreInfoURL --]" />
                        <input type="hidden" name="image" value='[-- IMAGE PRODUCT.Graphic --]' />
                        <input type="hidden" name="ourPrice" value="[-- IF PRODUCT.SaleAmount --][-- PRODUCT.SaleAmount --][-- ELSE --][-- PRODUCT.Price --][-- END_IF --]" />

                        <p class="item-less">
                          <label for="saw_item_for_less" class="btn-item-less">
                            <span class="hide">Saw this item for less? Yes!</span>
                            <input id="saw_item_for_less" name="submit" type="submit" value="" />
                          </label>
                        </p>
                      </form>
                      <!-- END PRICE COMPARISON LINK -->
                    [--ELSE--]
                      [--IF Product.Field3 "local"--]
                        <p class="shipping">This item can only be purchased locally at our retail locations.</p>
                        <div id="local-popup" align="center">
                          <a href="#local-pop" class="local-pop_open">
                            <h4>Call 800-401-8151 for details or<br>Visit our stores in San Marcos and San Diego, CA<span style="color:#ec010b; font-size:.8em;"><br>
                            (click for more information)</span>.</h4>
                          </a>
                          <!-- Local pop up content -->
                          <!-- Local pop up content -->
                          <div id="local-pop" class="container well" style="background-color:#ffffff; max-width:85%;">
                            <div style="width:100% !important;" class="container">
                              <h3 style="text-align:center;">Visit our San Marcos or San Diego Location to learn more and purchase this product!</h3>
                              <span id="moreInfo"><div class="cbox mid greybox bord2">
                              <div class="cTxt full" style="padding:5px;">
                                <div class="cbox mid">
                                  <h3 style="padding-bottom:20px;">For more information about each location, including a map and driving directions, click for your favorite location:</h3>

                                  <div class="dcol2c" style="padding-bottom:0;">
                                    <h3><a href="/sanmarcos.php">San Marcos, CA</a></h3>
                                  </div>
                                  <div class="dcol2c" style="padding-bottom:0;">
                                    <h3><a href="/missionbay.php">San Diego, CA</a></h3>
                                  </div>
                                </div>
                              </div>
                            </div></span>
                              <div style="margin:2% 0;" class="col-lg-12 col-md-12 col-sm-12" align="center">
  
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                  <a href="/sanmarcos.php">
                                    <picture>
                                      <source srcset="https://cdn.sewingmachinesplus.com/images/contact-us/san-marcos.webp" type="image/webp">
                                      <source srcset="https://cdn.sewingmachinesplus.com/images/contact-us/san-marcos.jpg" type="image/jpeg">
                                      <img data-src="https://cdn.sewingmachinesplus.com/images/contact-us/san-marcos.jpg" alt="San Marcos, CA location" title="San Marcos, CA location" class="lazy">
                                    </picture>
                                    <!-- <img src="//cdn.sewingmachinesplus.com/images/contact-us/san-marcos.webp" alt="San Marcos, CA location" title="San Marcos, CA location" /> -->
                                  </a>
                                  <h4><i>Call Local:</i></h4>
                                  <h3 style="margin:10px 0 20px 0; font-size:36px;"><b><a href="tel:760-739-8222">760-739-8222</a></b></h3>
                                  <h4><i>Store Hours:</i></h4>
                                  <p><b>Monday-Friday:</b> 9:30 am - 6:00 pm PST</p>
                                  <p><b>Saturday:</b> 10:00 am - 5:00 pm PST</p>
                                  <h4 style="padding-top:20px;">Showroom Location:</h4>
                                  <h3 style="line-height:1.5;"><b><a href="https://www.google.com/maps/place/SewingMachinesPlus.com/@33.1340837,-117.1270943,17z/data=!3m1!4b1!4m5!3m4!1s0x80dbf4d66ba9209f:0x131b63c2d168f2ac!8m2!3d33.1340837!4d-117.1249056" target="_blank" title="Click for Directions">713 Center Drive<br />
                                  San Marcos, CA 92069</a></b></h3>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                  <a href="/missionbay.php">
                                    <picture>
                                      <source srcset="https://cdn.sewingmachinesplus.com/images/contact-us/san-diego.webp" type="image/webp">
                                      <source srcset="https://cdn.sewingmachinesplus.com/images/contact-us/san-diego.jpg" type="image/jpeg">
                                      <img data-src="https://cdn.sewingmachinesplus.com/images/contact-us/san-diego.jpg" alt="San Diego, CA location - NOW OPEN!!!" title="San Diego, CA location - NOW OPEN!!!" class="lazy">
                                    </picture>
                                    <!-- <img src="//cdn.sewingmachinesplus.com/images/contact-us/san-diego.webp" alt="San Diego, CA location - NOW OPEN!!!" title="San Diego, CA location - NOW OPEN!!!" /> -->
                                  </a>
                                  <h4><i>Call Local: <span class="greentxt"><i>NOW OPEN!</i></span></i></h4>
                                  <h3 style="margin:10px 0 20px 0; font-size:36px;"><b><a href="tel:858-225-2739">858-225-2739</a></b></h3>
                                  <h4><i>Store Hours:</i></h4>
                                  <p><b>Monday-Friday:</b> 9:30 am - 6:00 pm PST</p>
                                  <p><b>Saturday:</b> 10:00 am - 5:00 pm PST</p>
                                  <h4 style="padding-top:20px;">Showroom Location:</h4>
                                  <h3 style="line-height:1.5;"><b><a href="https://www.google.com/maps/place/SewingMachinesPlus.com/@32.8048479,-117.2208364,17z/data=!4m13!1m7!3m6!1s0x80dc00356eb5db3f:0x146b8282c0af74ac!2s4606+Mission+Bay+Dr,+San+Diego,+CA+92109!3b1!8m2!3d32.804777!4d-117.218672!3m4!1s0x80dc00356ec00001:0x95a1a19a9ac604d8!8m2!3d32.8048434!4d-117.2186477" target="_blank" title="Click for Directions">4606 Mission Bay Drive<br />
                                  San Diego, CA 92109</a></b></h3>
                                </div>
                              </div>
                              <p><a class="btn btn-secondary btn-lg local-pop_close" style="background-color:#e70000 !important;" href="#" role="button">Close</a></p>
                            </div>
                          </div>
                        </div>
                        <div class="clear">&nbsp;</div>
                        <div class="space-20"></div>
                      [-- END_IF --]
                      [--IF Product.Field3 "out"--]
                        <p class="shipping">Call <a href="tel:800-401-8151">800-401-8151</a> For Details</p>
                      [-- END_IF --]
                      <!--BEGIN DISCONTINUED PRODUCT LINK - CHRISTIAN 05/27/2014-->
                      [--IF Product.Field1--]
                        [-- IF Product.Field1 "disclink" --]
                          <p id="disclink"></p>
                          <script type="text/javascript">
                            var name="[-- Product.Name --]";
                            name=name.toLowerCase();

                            if(name.indexOf("singer") > -1){
                              document.getElementById('disclink').innerHTML='<a href="/singer-sewing-machines.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                            }else{
                              if(name.indexOf("lizzie") > -1){
                              document.getElementById('disclink').innerHTML='<a href="/long-arm-quilting-machines.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                              }else{
                                if(name.indexOf("long arm") > -1){
                                  document.getElementById('disclink').innerHTML='<a href="/long-arm-quilting-machines.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                }else{
                                  if(name.indexOf("reliable") > -1){
                                    document.getElementById('disclink').innerHTML='<a href="/reliable-brands.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                  }else{
                                    if(name.indexOf("brother") > -1){
                                      document.getElementById('disclink').innerHTML='<a href="/brother-sewing-machines.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                    }else{
                                      if(name.indexOf("janome")>-1){
                                        if(name.indexOf("9500")>-1 || name.indexOf("9700")>-1){
                                          document.getElementById('disclink').innerHTML='<a href="/janome-mc11000se.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                        }else{
                                          document.getElementById('disclink').innerHTML='<a href="/janome-sewing-machines.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                        }
                                      }else{
                                        if(name.indexOf("juki")>-1){
                                          document.getElementById('disclink').innerHTML='<a href="/juki-sewing-machines.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                        }else{
                                          if(name.indexOf("miele")>-1){
                                            document.getElementById('disclink').innerHTML='<a href="/miele.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                          }else{
                                            if(name.indexOf("consew")>-1){
                                              document.getElementById('disclink').innerHTML='<a href="/consew-industrial-machines.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                            }else{
                                              if(name.indexOf("handi")>-1){
                                                document.getElementById('disclink').innerHTML='<a href="/quilt-brand-hq.php.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                              }else{
                                                if(name.indexOf("arrow")>-1){
                                                  document.getElementById('disclink').innerHTML='<a href="/arrow-sewing-cabinets.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                                }else{
                                                  if(name.indexOf("kangaroo")>-1){
                                                    document.getElementById('disclink').innerHTML='<a href="/kangaroo-kabinets.php"><picture><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.webp" type="image/webp"><source srcset="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" type="image/jpeg"><img data-src="https://cdn.sewingmachinesplus.com/media/images/disclink.jpg" alt="[-- Product.Name --]" title="[-- Product.Name --]" class="lazy"></picture></a>';
                                                  }else{
                                                    document.getElementById('disclink').innerHTML='<p><b>This product has been discontinued and is no longer available</b></p>';
                                                  }
                                                }
                                              }
                                            }
                                          }
                                        }
                                      }
                                    }
                                  }
                                }
                              }
                            }
                          </script>
                        [-- ELSE --]
                          [-- IF Product.Field1 "discontinued" --]
                            <p><b>This product has been discontinued and is no longer available</b></p>
                          [-- ELSE  --]
                            [-- IF Product.Field1 "out" --]
                              <p><b>Product is temporarily out of stock. Taking orders now. Item will ship when it arrives at our wherehouse.</b></p>
                            [-- ELSE --]
                              <!-- <b>[--Product.Field1--]</b> -->
                            [-- END_IF --]
                          [--END_IF--]
                        [-- END_IF --]
                      [-- END_IF --]<!--END DISCONTINUED PRODUCT LINK - CHRISTIAN 05/27/2014-->
                    [-- END_IF --]
                    [-- IF PRODUCT.DisplayPrice --]
                      [--IF Product.Field6 "6"--]
                        <p class="n-link-icon"><span>Financing:</span>
                          <span style="color:#313131;">
                            <?php
                              $price = 0;
                            ?>
                            [--IF PRODUCT.SaleOn--]
                              <?php $price = "[-- PRODUCT.SaleAmount --]"; ?>
                            [--ELSE--]
                              <?php $price = "[-- PRODUCT.Price --]"; ?>
                            [--END_IF--]
                            <?php
                              $price = ltrim($price, "$");
                              $price = str_replace(",", "", $price);
                              $price = number_format($price / 6, 2);
                              echo ("Available @ $".$price."/month for 6 months, 0% interest");
                            ?>
                          </span>
                        </p>
                      [-- END_IF --]
                      [--IF Product.Field6 "12"--]
                        <p class="n-link-icon"><span>Financing:</span>
                          <span style="color:#313131;">
                            <?php
                              $price = 0;
                            ?>
                            [--IF PRODUCT.SaleOn--]
                              <?php $price = "[-- PRODUCT.SaleAmount --]"; ?>
                            [--ELSE--]
                              <?php $price = "[-- PRODUCT.Price --]"; ?>
                            [--END_IF--]
                            <?php
                              $price = ltrim($price, "$");
                              $price = str_replace(",", "", $price);
                              $price = number_format($price / 12, 2);
                              echo ("Available @ $".$price."/month for 12 months, 0% interest");
                            ?>
                          </span>
                        </p>
                      [-- END_IF --]
                      [--IF Product.Field6 "18"--]
                        <p class="n-link-icon"><span>Financing:</span>
                          <span style="color:#313131;">
                            <?php
                              $price = 0;
                            ?>
                            [--IF PRODUCT.SaleOn--]
                              <?php $price = "[-- PRODUCT.SaleAmount --]"; ?>
                            [--ELSE--]
                              <?php $price = "[-- PRODUCT.Price --]"; ?>
                            [--END_IF--]
                            <?php
                              $price = ltrim($price, "$");
                              $price = str_replace(",", "", $price);
                              $price = number_format($price / 18, 2);
                              echo ("Available @ $".$price."/month for 18 months, 0% interest");
                            ?>
                          </span>
                        </p>
                      [-- END_IF --]
                      [--IF Product.Field6 "24"--]
                        <p class="n-link-icon"><span>Financing:</span>
                          <span style="color:#313131;">
                            <?php
                              $price = 0;
                            ?>
                            [--IF PRODUCT.SaleOn--]
                              <?php $price = "[-- PRODUCT.SaleAmount --]"; ?>
                            [--ELSE--]
                              <?php $price = "[-- PRODUCT.Price --]"; ?>
                            [--END_IF--]
                            <?php
                              $price = ltrim($price, "$");
                              $price = str_replace(",", "", $price);
                              $price = number_format($price / 24, 2);
                              echo ("Available @ $".$price."/month for 24 months, 0% interest");
                            ?>
                          </span>
                        </p>
                      [-- END_IF --]
                      [--IF Product.Field6 "36"--]
                        <p class="n-link-icon"><span>Financing:</span>
                          <span style="color:#313131;">
                            <?php
                              $price = 0;
                            ?>
                            [--IF PRODUCT.SaleOn--]
                              <?php $price = "[-- PRODUCT.SaleAmount --]"; ?>
                            [--ELSE--]
                              <?php $price = "[-- PRODUCT.Price --]"; ?>
                            [--END_IF--]
                            <?php
                              $price = ltrim($price, "$");
                              $price = str_replace(",", "", $price);
                              $price = round($price / 36, 2);
                              echo ("$".$price."/month for 36 months, 0% interest");
                            ?>
                          </span>
                        </p>
                      [-- END_IF --]
                      [--IF Product.Field6 "48"--]
                        <p class="n-link-icon"><span>Financing:</span>
                          <span style="color:#313131;">
                            <?php
                              $price = 0;
                            ?>
                            [--IF PRODUCT.SaleOn--]
                              <?php $price = "[-- PRODUCT.SaleAmount --]"; ?>
                            [--ELSE--]
                              <?php $price = "[-- PRODUCT.Price --]"; ?>
                            [--END_IF--]
                            <?php
                              $price = ltrim($price, "$");
                              $price = str_replace(",", "", $price);
                              $price = number_format($price / 48, 2);
                              echo ("Available @ $".$price."/month for 48 months, 0% interest");
                            ?>
                          </span>
                        </p>
                      [-- END_IF --]
                      [--IF Product.Field6 "60"--]
                        <p class="n-link-icon"><span>Financing:</span>
                          <span style="color:#313131;">
                            <?php
                              $price = 0;
                            ?>
                            [--IF PRODUCT.SaleOn--]
                              <?php $price = "[-- PRODUCT.SaleAmount --]"; ?>
                            [--ELSE--]
                              <?php $price = "[-- PRODUCT.Price --]"; ?>
                            [--END_IF--]
                            <?php
                              $price = ltrim($price, "$");
                              $price = str_replace(",", "", $price);
                              $price = number_format($price / 60, 2);
                              echo ("Available @ $".$price."/month for 60 months, 0% interest");
                            ?>
                          </span>
                        </p>
                      [-- END_IF --]
                    [-- END_IF --]
                    [--IF Product.Field7--]
                      <p class="n-link-icon"><span>Returns:</span>
                        [--IF Product.Field7 "no"--]
                          <a href="/customer-service.php#returns">No returns are accepted on this item.</a>
                        [-- END_IF --]
                        [--IF Product.Field7 "15"--]
                          <a href="/customer-service.php#returns">Returns are subject to a 15% restocking fee.</a>
                        [-- END_IF --]
                        [--IF Product.Field7 "20"--]
                          <a href="/customer-service.php#returns">Returns are subject to a 20% restocking fee.</a>
                        [-- END_IF --]
                        [--IF Product.Field7 "open"--]
                          <a href="/customer-service.php#returns">No returns are allowed if item is opened.</a>
                        [-- END_IF --]
                      </p>
                    [-- END_IF --]
                  </div>
                  

                  <div class="space-60"></div>
                </div><!--sidebar col-->
              </div>
              <div class="container accordion-container">
                <div class="space-60"></div>
                [-- IF PRODUCT.Field3 "local" --]
                  <div id="tout2_pdp_4Tell" ></div>
                [-- ELSE --]
                  <div id="tout1_pdp_4Tell" ></div>
                [-- END_IF --]
                <div class="col-md-12">
                  <div class="accordion" id="accordion">
                    <!-- TABBED BLOCKS GO HERE: MORE INFO, IMAGES, & ADD-ON ACCESSORIES -->
                    <!-- BEGIN TABS -->
                    <div class="accordion-group" id="infoLink">
                      <div class="accordion-heading">
                        <a class="accordion-area accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                          Product Information
                        </a>
                      </div>
                      <div id="collapseOne" class="accordion-body collapse">
                        <div class="accordion-inner">
                          <span id="moreInfo" [-- IF PRODUCT.NumSubProducts 0 --] style="display: block;" [--END_IF--]>
                            <!-- MORE INFO BLOCK -->
                            <style type="text/css">
                              @media (max-width: 500px) {
                                #b2ssaledesktop {
                                  display:none;
                                }
                                #b2ssalemobile {
                                  display:block !important;
                                }
                              }
                            </style>
                        <!--     <div id="b2ssaledesktop" style="text-align:center;margin-bottom:20px;"><a href="https://www.sewingmachinesplus.com/index.php"><img style="width:100%;" src="https://cdn.sewingmachinesplus.com/media/banners/2017-holidays/sale-end-banners_02.webp" class="lazy" /></a></div>
                            <div id="b2ssalemobile" style="text-align:center;margin-bottom:20px;display:none;"><a href="https://www.sewingmachinesplus.com/index.php"><img style="width:100%;" src="https://cdn.sewingmachinesplus.com/media/banners/2017-holidays/sale-end-banners_09.webp" class="lazy" /></a></div>  -->
                            [-- IF PRODUCT.Field50 "bernette" --]
                              <?php include('manufacturerwarranties/bernette.html'); ?>
                            [-- ELSE_IF PRODUCT.Field50 "bernina"--]
                              <?php include('manufacturerwarranties/bernina.html'); ?>
                            [-- ELSE_IF PRODUCT.Field50 "brother"--]
                              <?php include('manufacturerwarranties/brother.html'); ?>
                            [-- ELSE_IF PRODUCT.Field50 "eversewn"--]
                              <?php include('manufacturerwarranties/eversewn.html'); ?>
                            [-- ELSE_IF PRODUCT.Field50 "handiquilter"--]
                              <?php include('manufacturerwarranties/handiquilter.html'); ?>
                            [-- ELSE_IF PRODUCT.Field50 "janome"--]
                              <?php include('manufacturerwarranties/janome.html'); ?>
                            [-- ELSE_IF PRODUCT.Field50 "juki"--]
                              <?php include('manufacturerwarranties/juki.html'); ?>
                            [-- ELSE_IF PRODUCT.Field50 "necchi"--]
                              <?php include('manufacturerwarranties/necchi.html'); ?>
                            [-- ELSE_IF PRODUCT.Field50 "reliable"--]
                              <?php include('manufacturerwarranties/reliable.html'); ?>
                            [-- ELSE_IF PRODUCT.Field50 "singer"--]
                              <?php include('manufacturerwarranties/singer.html'); ?>
                            [-- END_IF --]
                            [-- PRODUCT.MoreInformationText --]
                            <br />
                            [--IF PRODUCT.Field18 "longarm"--]
                              <hr />
                              <div class="cbox">
                                <div class="fcol">
                                  <!-- <img src="//cdn.sewingmachinesplus.com/media/smp-guarantee/3year-warranty.webp" class="2col" /> -->
                                  <picture>
                                    <source srcset="https://cdn.sewingmachinesplus.com/media/smp-guarantee/3year-warranty.webp" type="image/webp">
                                    <source srcset="https://cdn.sewingmachinesplus.com/media/smp-guarantee/3year-warranty.jpg" type="image/jpeg">
                                    <img data-src="https://cdn.sewingmachinesplus.com/media/smp-guarantee/3year-warranty.jpg" alt="Long Arm 3 Year Warranty Included" title="Long Arm 3 Year Warranty Included" class="lazy 2col">
                                  </picture>
                                </div>
                                <div class="cTxt2">
                                  <!-- <img src="//cdn.sewingmachinesplus.com/media/smp-guarantee/5year-warranty-banner.webp" class="smp650" style="flex: 0 0 100%;width:100%;" /> -->
                                  <picture>
                                    <source srcset="https://cdn.sewingmachinesplus.com/media/smp-guarantee/5year-warranty-banner.webp" type="image/webp">
                                    <source srcset="https://cdn.sewingmachinesplus.com/media/smp-guarantee/5year-warranty-banner.jpg" type="image/jpeg">
                                    <img data-src="https://cdn.sewingmachinesplus.com/media/smp-guarantee/5year-warranty-banner.jpg" alt="Long Arm 5 Year Warranty Included" title="Long Arm 5 Year Warranty Included" class="lazy 2col">
                                  </picture>
                                  <h2 class="smp21">Long Arm 3 Year Warranty Included <i>FREE</i></h2>
                                  <ul>
                                    <li>3 years FREE Parts &amp; Labor</li>
                                    <li>During the FIRST year we will have your machine picked up, repaired or replaced and deliver it back at NO CHARGE (Just save your box)</li>
                                    <li>We have 4 experienced mechanics to support you if any problem arises</li>
                                  </ul>
                                  <hr style="margin-bottom:0;" />
                                  <blockquote cite="http://" style="margin-bottom:0;" style="padding:20px 40px 20px 40px;">
                                    <!-- <img src="//cdn.sewingmachinesplus.com/media/smp-guarantee/ron80.webp" style="float:left !important;border-bottom:1px solid #d6d6d6;" class="lazy" /> -->
                                    <picture>
                                      <source srcset="https://cdn.sewingmachinesplus.com/media/smp-guarantee/ron80.webp" type="image/webp">
                                      <source srcset="https://cdn.sewingmachinesplus.com/media/smp-guarantee/ron80.jpg" type="image/jpeg">
                                      <img data-src="https://cdn.sewingmachinesplus.com/media/smp-guarantee/ron80.jpg" alt="" title="" style="float:left !important;border-bottom:1px solid #d6d6d6;" class="lazy">
                                    </picture>
                                    <p style="font-style:italic; text-align:center; padding:15px 30px;line-height:1.5;">I Ron Martin, owner, have 40 years in the sewing machine business & I give my personal assurance.</p>
                                    <hr />
                                    <span class="quote-name">Ron Martin</span>
                                    <span>Co-Founder / President</span>
                                  </blockquote>
                                  <hr style="margin-top:0;" />
                                </div>
                              </div>
                            [--END_IF--]

                            <!-- MODEL COMPARE CODE START -->
                            [-- IF PRODUCT.Field51 --]
                              <style type="text/css">
                                .modelCompare-outter table, .modelCompare-outter table td, .modelCompare-outter table th {
                                  border-collapse:collapse;
                                }
                                .modelCompare-outter table {
                                  border: 1px solid #ccc;
                                  border: 0;
                                }
                                .modelCompare-outter table tr {
                                  border: 1px solid #ddd; 
                                  padding: 5px;
                                }
                                .modelCompare-outter table tr.darkBG {
                                  background-color: #f8f8f8 !important;
                                }
                                .modelCompare-outter table tr.lightBG td:nth-child(2) {
                                  background-color: #ffffe0 !important;
                                }
                                .modelCompare-outter table tr.darkBG td:nth-child(2) {
                                  background-color: #fafac4 !important;
                                }
                                .modelCompare-outter table tr:first-child {
                                  border-bottom:none;
                                }
                                .modelCompare-outter table tr:nth-child(2) {
                                  border-top:none;
                                }
                                .modelCompare-outter table td {
                                  text-align: center;
                                  vertical-align: middle;
                                }
                                #moreInfo .modelCompare-outter table tr td:first-child {
                                  text-align: left;
                                  padding-left:10px;
                                }
                                .modelCompareText {
                                  font-size:12px;
                                }
                                #moreInfo .modelCompare-outter #modelCompare-table {
                                  width: 1135px !important;
                                }
                                #moreInfo .modelCompare-outter #modelCompare-table a {
                                  color: black !important;
                                }
                                .modelCompare-outter .group-stars .ind_cnt {
                                  padding-right: 0px;
                                  font-size:11px;
                                }
                                #dwnButton {
                                  margin:0px !important;
                                  padding-top:5px !important;
                                  padding-bottom:5px !important;
                                }
                                .mctt {
                                  cursor: help;
                                }
                                .mcc {
                                  color:green;
                                }
                                @media screen and (max-width: 1399px) {
                                  #moreInfo .modelCompare-outter #modelCompare-table {
                                    width:810px !important;
                                  }
                                  #moreInfo .modelCompare-outter #modelCompare-table td {
                                    width: 162px !important;
                                  }
                                }
                                @media screen and (max-width: 1024px) {
                                  #moreInfo .modelCompare-outter #modelCompare-table {
                                    width: 768px !important;
                                  }
                                  #moreInfo .modelCompare-outter #modelCompare-table td {
                                    width: 153px !important;
                                  }
                                  .modelCompare-outter {
                                  overflow-x: scroll;
                                  }
                                }
                              </style>

                              <br/>

                              <link rel="stylesheet" type="text/css" href="//cdn.sewingmachinesplus.com/AE/tooltipster-master/dist/css/tooltipster.bundle.min.css"/>
                              <link rel="stylesheet" type="text/css" href="//cdn.sewingmachinesplus.com/AE/tooltipster-master/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-punk.min.css"/>
                              <link type="text/javascript" src="//cdn.sewingmachinesplus.com/AE/tooltipster-master/dist/js/tooltipster.bundle.min.js"/>

                              <script>
                              (function($) {
                                $(document).ready(function() {
                                    $('.mctt').tooltipster({
                                      theme: 'tooltipster-punk',
                                      maxWidth: 310
                                    });
                                });
                              })(jQuery); 
                              </script>
                              <?php
                                require_once("/home/sewingmachinesplus/shopsite_api_new/includes/api_include.php");
                                $mcProductSkus = explode(",","[-- PRODUCT.Field52 --]");
                                $mcp1 = new Product();
                                $mcp1Product = $mcp1->getProductRecord("ss_sku", $mcProductSkus[0]);
                                $mcp2 = new Product();
                                $mcp2Product = $mcp2->getProductRecord("ss_sku", $mcProductSkus[1]);
                                $mcp3 = new Product();
                                $mcp3Product = $mcp3->getProductRecord("ss_sku", $mcProductSkus[2]);
                                $mcp4 = new Product();
                                $mcp4Product = $mcp4->getProductRecord("ss_sku", $mcProductSkus[3]);
                              ?>
                              [-- IF PRODUCT.Field51 "sewing" --]
                                <?php
                                  $mcProducts1Specs = explode(",",$mcp1Product['ss_productfield53']);
                                  $mcProducts2Specs = explode(",",$mcp2Product['ss_productfield53']);
                                  $mcProducts3Specs = explode(",",$mcp3Product['ss_productfield53']);
                                  $mcProducts4Specs = explode(",",$mcp4Product['ss_productfield53']);
                                ?>
                                [-- INCLUDE -SMP-Model-Compare-Sewing_pagespeed --]
                              [-- END_IF --]
                              [-- IF PRODUCT.Field51 "embroidery" --]
                                <?php
                                  $mcProducts1Specs = explode(",",$mcp1Product['ss_productfield54']);
                                  $mcProducts2Specs = explode(",",$mcp2Product['ss_productfield54']);
                                  $mcProducts3Specs = explode(",",$mcp3Product['ss_productfield54']);
                                  $mcProducts4Specs = explode(",",$mcp4Product['ss_productfield54']);
                                ?>
                                [-- INCLUDE -SMP-Model-Compare-Embroidery --]
                              [-- END_IF --]
                              [-- IF PRODUCT.Field51 "serger" --]
                                <?php
                                  $mcProducts1Specs = explode(",",$mcp1Product['ss_productfield55']);
                                  $mcProducts2Specs = explode(",",$mcp2Product['ss_productfield55']);
                                  $mcProducts3Specs = explode(",",$mcp3Product['ss_productfield55']);
                                  $mcProducts4Specs = explode(",",$mcp4Product['ss_productfield55']);
                                ?>
                                [-- INCLUDE -SMP-Model-Compare-Serger --]
                              [-- END_IF --]
                              [-- IF PRODUCT.Field51 "quilting" --]
                                <?php
                                  $mcProducts1Specs = explode(",",$mcp1Product['ss_productfield56']);
                                  $mcProducts2Specs = explode(",",$mcp2Product['ss_productfield56']);
                                  $mcProducts3Specs = explode(",",$mcp3Product['ss_productfield56']);
                                  $mcProducts4Specs = explode(",",$mcp4Product['ss_productfield56']);
                                ?>
                                [-- INCLUDE -SMP-Model-Compare-Quilting --]
                              [-- END_IF --]
                            [-- END_IF --]
                            <!-- MODEL COMPARE CODE END -->
                            
                            [-- IF PRODUCT.DisplayPrice --]
                            [-- ELSE --]
                              <span style="display: none;"></span>
                            [-- END_IF --]
                            <div style="clear: both;"></div>
                            <!--SUBPRODUCTS REMOVED HERE CZ 1-31-14-->
                            <div class="clear"></div>  <!-- Added June 1 2011 GC -->
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-group" id="warrantyLink" [--IF PRODUCT.Field18 "longarm"--] style="display: none;" [-- ELSE_IF  PRODUCT.Field18 --] [--ELSE--] style="display: none;" [-- END_IF --] >
                      <div class="accordion-heading">
                        <a class="accordion-area accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseFour">
                          Warranty
                        </a>
                      </div>
                      <div id="collapseFour" class="accordion-body collapse">
                        <div class="accordion-inner">
                          <span id="warranty">
                            <!-- WARRANTY BLOCK -->
                            [--IF PRODUCT.Field18 "yes"--]
                              <div>
                                <script>
                                  $('#warranty').ready(function(){
                                    var i = $('select').length-1;
                                    if(i<0){
                                      i=0;
                                    }
                                    var optionName= "[--Product.Field13--]:finopt:"+i;
                                    var optionCountName = "[--Product.Field13--]:finoptnum";
                                    var optCount = $('select').length;
                                    $('#warrantySelection').attr("name", optionName);
                                    $('#optionCount').attr("name", optionCountName);
                                    $('#optionCount').val(optCount);
                                    [--IF PRODUCT.SaleAmount--]
                                      var price="[--PRODUCT.SaleAmount--]";
                                      var priceVal = parseFloat(price.replace(/[^0-9-.]/g, '')).toFixed(2);
                                      var warrantyPrice= priceVal*.1;
                                    [--ELSE--]
                                      var price="[--PRODUCT.Price--]";
                                      var priceVal = parseFloat(price.replace(/[^0-9-.]/g, '')).toFixed(2);
                                      var warrantyPrice= [--PRODUCT.Price--]*.1;
                                    [--END_IF--]
                                    var optionValue="Add SewingMachinesPlus Platinum Warranty (+$"+warrantyPrice+");+"+warrantyPrice;
                                    var optionContent="Add SewingMachinesPlus Platinum Warranty (+$"+warrantyPrice+")";
                                    $('#buyWarranty').val(optionValue);
                                    $('#buyWarranty').text(optionContent);
                                  });
                                </script>
                                <div id="moreInfo">
                                  <!-- <img src="https://cdn.sewingmachinesplus.com/platinum-protection.webp" style="float:right !important; max-width:200px;"/> -->
                                  <picture>
                                    <source srcset="https://cdn.sewingmachinesplus.com/platinum-protection.webp" type="image/webp">
                                    <source srcset="https://cdn.sewingmachinesplus.com/platinum-protection.jpg" type="image/jpeg">
                                    <img data-src="https://cdn.sewingmachinesplus.com/platinum-protection.jpg" alt="3 Year Platinum Protection Warranty" title="3 Year Platinum Protection Warranty" style="float:right !important; max-width:200px;" class="lazy">
                                  </picture>
                                  <h2 class="smp23">3 Year Platinum Protection Warranty</h2>
                                  <h3>Add on a 3 Year Platinum Protection Warranty to your new machine For 100% Peace Of Mind!</h3>
                                  <p>SewingMachinesPlus.com is proud to offer its Platinum Protection Plan, for sewing, embroidery, longarm quilting and overlock machines sold in the U.S.A.</p>
                                  <p style="color:#ec010b;">Remember to save your original box for quick and easy shipping.</p>
                                  <ul style="line-height:1.5;">
                                    <li>NO REPAIR BILLS</li>
                                    <li>COVERED PARTS AND LABOR</li>
                                    <li>1 YEAR FREE SHIPPING</li>
                                    <li>NO DEDUCTIBLE</li>
                                    <li>COVERS NORMAL USAGE</li>
                                    <li>TRANSFERABLE</li>
                                    <li>PEACE OF MIND</li>
                                  </ul>
                                  <p>Your purchase is not complete until you add the security of a SewingMachinesPlus.com Platinum Protection Plan. You depend on your sewing machine to work hard for you. When a problem arises and repair is required, you need your machine fixed as fast as possible. But then you are faced with a costly repair bill. Are you and your budget prepared? Especially when you have no way of knowing when or how often the machine may need service?</p>
                                  <p>Now you can relax. With our SewingMachinesPlus.com Platinum Protection Plan, out-of-pocket expenses are completely eliminated for your sewing machine repairs. The plan guarantees to pay all covered parts &amp; labor beyond the original warranty.</p>
                                  <hr class="smp">
                                  <h2 class="smp24">Peace of mind protection you can count on</h2>
                                  <p style="text-align:center;"><i>Don't put it off! Protect your investment and your pocketbook with affordable coverage.</i></p>
                                  <hr class="smp">
                                  <h4>Warranty Summary</h4>
                                  <ul>
                                    <li>This warranty covers parts and labor for 3 years</li>
                                    <li>Used under normal home sewing conditions</li>
                                    <li>Consumable items not covered (needles, bobbins, bobbin cases, springs and belts)</li>
                                    <li>The warranty does not cover improper use, abuse, commercial or industrial use of machines</li>
                                    <li>The warranty does not cover flood, fire or other acts of nature</li>
                                  </ul>
                                  <p style="text-align:center; padding-top:10px;">Call SewingMachinesPlus.com if you have any questions and get the best Platinum Protection Warranty available to protect your sewing machine!</p>
                                  <h3 style="text-align:center; font-size:x-large; line-height:1.5; font-weight:bold;">Call <span style="color:#ec010b;">(800) 401-8151 </span><span style="font-size:smaller; font-weight:normal;">and add our</span> 3 Year Platinum Protection Warranty <span style="font-size:smaller; font-weight:normal;">to your machine today!</span></h3>
                                </div>
                              </div>
                            [--END_IF--]
                            <div class="clear"></div>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-group" id="accLink" [-- IF PRODUCT.NumSubProducts 0 --] style="display: none;" [-- END_IF --]>
                      <div class="accordion-heading">
                        <a class="accordion-area accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion5" href="#collapseFive">
                          Accessories
                        </a>
                      </div>
                      <div id="collapseFive" class="accordion-body collapse">
                        <div class="accordion-inner">
                          <span id="acc">
                            <div class="accessories-widget">
                              <h3><span>Need more supplies? Find them below!</span> Just add them to your bag below.</h3>
                              [--LOOP SUBPRODUCTS --]
                                [--SUBPRODUCTS--]
                              [--END_LOOP SUBPRODUCTS--]
                            </div>
                            [-- IF PRODUCT.DisplayPrice --]
                              [-- IF PRODUCT.SubProduct --]
                                <!--  <input class="addtocart_button" src="//cdn.sewingmachinesplus.com/images/addtocart2.webp" name="Add to Bag" type="image" style="float: right; margin-right: 10px;" />
                                /images/addtocart.gif-->
                              [-- ELSE --]
                                <span style="display: none;"></span>
                              [-- END_IF --]
                            [-- END_IF --]
                            <div class="clear"></div>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-group" id="videosLink" [-- IF  PRODUCT.Field17 --] [--ELSE--] style="display: none;" [-- END_IF --]>
                      <div class="accordion-heading">
                        <a id="videosLinktoggle" class="accordion-area accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree">
                          Videos
                        </a>
                      </div>
                      <div id="collapseThree" class="accordion-body collapse">
                        <div class="accordion-inner">
                          <span id="videos">
                            <!-- VIDEOS BLOCK -->
                            <div style="text-align: center;">
                              <h3>Get introduced to this product:<br />[-- PRODUCT.Name --]!</h3>
                              <p>View these videos to get a better idea of what you'll purchase!</p>
                            </div>
                            <div style="text-align: center;">[-- PRODUCT.Field17 --]</div>
                            <div class="clear"></div>
                          </span>
                        </div>
                      </div>
                    </div>
                    <!-- END TABS -->
                    <!-- END BLOCK -->
                    [-- INCLUDE LexiConnAACSimpleBody_Dialog PROCESS --]<!--AJAX CART-->
                    <!-- END ADD TO CART FORM -->
                  </div>
                </div>
                [-- IF PRODUCT.Field3 "local" --]
                  <div id="tout1_pdp_4Tell" ></div>
                [-- ELSE --]
                  <div id="tout2_pdp_4Tell" ></div>
                [-- END_IF --]
                <script type="text/javascript">
                  var sa_products_count = 7;
                  var sa_date_format = 'F j, Y';
                  var sa_product = '[-- PRODUCT.SKU --]';
                  function saLoadScript(src) {
                    var js = window.document.createElement("script");
                    js.src = src; js.type = "text/javascript";
                    document.getElementsByTagName("head")[0].appendChild(js);
                  }
                  saLoadScript('//www.shopperapproved.com/product/21959/'+sa_product+'.js');
                </script>
                <div id="review_header"></div>
                <div id="product_page"></div>
                <div id="review_image">
                  <a href="https://www.shopperapproved.com/reviews/SewingMachinesPlus.com/" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; var certheight=screen.availHeight-90; window.open(this.href,'shopperapproved','location='+nonwin+',scrollbars=yes,width=620,height='+certheight+',menubar=no,toolbar=no'); return false;" target="_blank" rel="nofollow"></a>
                </div>
                <div class="clear">&nbsp;</div>
                <div class="col-md-6 col-md-push-6"></div>
                [--IF PRODUCT.DisplayPrice--]
                  <div class="col-md-6 col-md-pull-6">
                [-- ELSE --]
                  </div>
                  <div class="clear">&nbsp;</div>
                  <div class="col-md-6">
                [-- END_IF --]
              </div>
            </div>
          </div>
        </main><!--main end-->
      </div>
      [-- INCLUDE -SMP-mailing-list_pagespeed --]
      [-- INCLUDE -SMP-footer_pagespeed --]
    </div>
    <!--POPUPS JQUERY-->
    <script>
      $(function(){
        var essentialsExist = $('div.steps').text().toLowerCase();
        if (essentialsExist.indexOf('essentials package') > - 1) {
          $('select:contains("Essentials")').after('<div style="position:relative; width:100%; text-align:right;"><a class="packages_open" href="#packages">View Essentials Packages</a></div>');
        };
      });
    </script>

  <!-- Packages pop up content -->
  <div id="packages" class="container well" style="background-color:#ffffff; max-width:65%;">
    <div class="col-lg-12 col-sm-12" style="background-color:#323333; color:#ffffff; font-family:Arial, Helvetica; padding:10px; text-align:center;">
      <p>SIMPLY CHOOSE YOUR MACHINE THEN ADD YOUR ESSENTIALS PACKAGE VIA DROP DOWN MENU, THEN ADD TO CART. IT'S THAT EASY!</p>
    </div>
    <!--sewing essentials-->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/title-02.webp" class="img-responsive" style="margin:0 auto;"> -->
        <picture>
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-02.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-02.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
          <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-02.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
        </picture>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/sewing-02.webp" class="img-responsive" style="margin:0 auto;"> -->
        <picture>
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/sewing-02.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/sewing-02.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
          <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/sewing-02.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
        </picture>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/sewing-01.webp" class="img-responsive" style="margin:0 auto;"> -->
        <picture>
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/sewing-01.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/sewing-01.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
          <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/sewing-01.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
        </picture>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <p>Buy any sewing machine and add the Sewing Essentials Package for only $99!</p>
        <ul>
          <li>Nifty Notions Clear Storage Case ($29)</li>
          <li>Madeira Aerofil 18 Spool Thread Kit ($24)</li>
          <li>Dritz Self Threading Hand Needles ($3)</li>
          <li>Softgrip Dressmaker Scissors($30)</li>
          <li>Bobbin Saver Ring ($7)</li>
          <li>Grabbit Magnetic Pincushion w/ 50 pins ($11)</li>
          <li>Clover Seam Ripper ($4)</li>
          <li>5pk Schmetz Needles Size 75/11 ($3)</li>
          <li>5pk Schmetz Needles Size 90/14 ($4)</li>
          <li>OLFA 18"x24" Rotary Mat RM-SG ($29)</li>
          <li>Olfa Heavy Rotary Cutter 45mm RTY-2G ($20)</li>
        </ul>
      </div>
    </div>
    <hr>
    <!--quilting essentials-->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/title-03.webp" class="img-responsive" style="margin:0 auto;"> -->
        <picture>
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-03.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-03.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
          <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-03.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
        </picture>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/quilting-02.webp" class="img-responsive" style="margin:0 auto;"> -->
        <picture>
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/quilting-02.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/quilting-02.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
          <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/quilting-02.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
        </picture>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/quilting-01.webp" class="img-responsive" style="margin:0 auto;"> -->
        <picture>
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/quilting-01.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
          <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/quilting-01.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
          <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/quilting-01.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
        </picture>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <p>Buy any quilting machine and add the Quilting Essentials Package for only $119!</p>
          <ul>
            <li>Quilter's Academy Freshman Book ($28)</li>
            <li>Patch Abilities P52 Wave It! Pattern ($9)</li>
            <li>Frixion Asst. Eraseable Gel Pen 3pk ($16)</li>
            <li>Olfa Heavy Duty 45mm Rotary Cutter ($23)</li>
            <li>Quilt Pounce and Stencil Combo ($33)</li>
            <li>Creative Grids Ruler 6 1/4" x 24 1/4" ($26)</li>
            <li>Schmetz Universal Needles 90/14 5pk ($4)</li>
            <li>Quilting Needle Variety 75/11-90/14 5pk ($6)</li>
            <li>OLFA 18" x 24" Self Healing Mat ($32)</li>
          </ul>
        </div>
      </div>
      <hr>
      <!--embroidery essentials-->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/title-04.webp" class="img-responsive" style="margin:0 auto;"> -->
          <picture>
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-04.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-04.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
            <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-04.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
          </picture>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/emb-02.webp" class="img-responsive" style="margin:0 auto;"> -->
          <picture>
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/emb-02.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/emb-02.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
            <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/emb-02.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
          </picture>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/emb-01.webp" class="img-responsive" style="margin:0 auto;"> -->
          <picture>
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/emb-01.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/emb-01.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
            <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/emb-01.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
          </picture>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p>Buy any embroidery machine and add the Embroidery Essentials Package for only $129!</p>
          <ul>
            <li>Birds Nest Tool ($40)</li>
            <li>Curved Sharp Point Mini Scissors ($7)</li>
            <li>Madeira Rayon Embroidery Thread Kit ($25)</li>
            <li>Contemporary mbroidered Fashions ($33)</li>
            <li>Madeira Stabilizer Trio ($30)</li>
            <li>80/12 Chrome Microtex Needles 5pk ($6)</li>
            <li>90/14 Chrome Microtex Needles 5pk ($6)</li>
            <li>Klasse Metallic Needles Size 80/12 ($5)</li>
            <li>Klasse Metallic Needles Size 90/14 ($5)</li>
            <li>Anita Goodesign American Landmarks($35)</li>
          </ul>
        </div>
      </div>
      <hr>
      <!--longarm essentials-->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/title-05.webp" class="img-responsive" style="margin:0 auto;"> -->
          <picture>
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-05.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-05.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
            <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/title-05.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
          </picture>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/longarm-02.webp" class="img-responsive" style="margin:0 auto;"> -->
          <picture>
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/longarm-02.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/longarm-02.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
            <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/longarm-02.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
          </picture>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <!-- <img src="//cdn.sewingmachinesplus.com/media/popups/essentials/longarm-01.webp" class="img-responsive" style="margin:0 auto;"> -->
          <picture>
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/longarm-01.webp" type="image/webp" class="img-responsive" style="margin:0 auto;">
            <source srcset="https://cdn.sewingmachinesplus.com/media/popups/essentials/longarm-01.jpg" type="image/jpeg" class="img-responsive" style="margin:0 auto;">
            <img data-src="https://cdn.sewingmachinesplus.com/media/popups/essentials/longarm-01.jpg" alt="" title="" class="lazy img-responsive" style="margin:0 auto;">
          </picture>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p>Buy any Longarm Machine and add the Longarm Essentials Package for only $279!</p>
          <ul>
            <li>Colonial Longarm Centering Tape Measuring 14' Foot Wide ($25)</li>
            <li>Handy Helpers 4in. Magnetic Pin Bowl with Pins ($15)</li>
            <li>Quilt Stencil My Favorite Leaves ($5)</li>
            <li>Cheryl Ann 54" X 54" Design Wall ($107)</li>
            <li>Handi Quilter Handi-Sized Half Circles Templates ($45)</li>
            <li>Quilt Pounce Iron Off Powder W/ qlt Pad-clear button ($18)</li>
            <li>Quilting Machine Tool Set ($74)</li>
            <li>Stencil 2" Heart Loop Border ($5)</li>
            <li>Borders Made Easy Pantograph 26' of 3" border pattern ($17)</li>
            <li>Stipples Made Easy Pantograph 9.5"x26' Small Stipple ($19)</li>
            <li>EncorePlus 2in x 6in Long Arm Mini Ruler ($20)</li>
            <li>EncorePlus Multi-Purpose Tool ($30)</li>
          </ul>
        </div>
      </div>
      <p><a class="btn btn-secondary btn-lg packages_close" style="background-color:#e70000 !important;" href="#" role="button">Close</a></p>
    </div>
    <!-- Financing pop up content -->
    <div id="financing-pop" class="container well" style="background-color:#ffffff; max-width:400px;padding-right:0px;padding-left:0px;">
      <div style="width:100% !important; text-align:center;" class="container">
        <!-- <img src="//cdn.sewingmachinesplus.com/media/financing-popup/secure-application.webp" style="float: left;margin-bottom: 5px;"/> -->
        <picture>
          <source srcset="https://cdn.sewingmachinesplus.com/media/financing-popup/secure-application.webp" type="image/webp" style="float: left;margin-bottom: 5px;">
          <source srcset="https://cdn.sewingmachinesplus.com/media/financing-popup/secure-application.jpg" type="image/jpeg" style="float: left;margin-bottom: 5px;">
          <img data-src="https://cdn.sewingmachinesplus.com/media/financing-popup/secure-application.jpg" alt="" title="" style="float: left;margin-bottom: 5px;" class="lazy">
        </picture>
        <p style="text-align:right;"><a class="btn btn-secondary btn-lg financing-pop_close" style="background-color:#e70000 !important;" href="#" role="button">Close</a></p>
        <div id="FAstart">
          <img data-src="//cdn.sewingmachinesplus.com/media/financing-popup/logo.png" data-srcset="//cdn.sewingmachinesplus.com/media/financing-popup/logo.png" class="lazy" />
          <p style="color:#333; font-size:2em;">Start Your Application</p>
          <p>In a few short steps you could own the machine of your dreams with low monthly payments and 0% financing. Completing the application will tell you how much credit Synchrony Financial will extend to you. You are not charged until you place an order with SewingMachinesPlus.com.</p>
          <form>
            <label for="FAfullname">Full name</label>
            <input style="margin-bottom:10px;" type="text" id="FAfullname"/><br/>
            <label for="FAemail">Email</label>
            <input style="margin-bottom:10px;"type="text" id="FAemail"/><br/>
            <label for="FAphone">Phone</label>
            <input style="margin-bottom:10px;"type="text" id="FAphone"/>
          </form>
          <p id="FAformerrors">Please fill out the required fields</p>
          <p><a onclick="FAvalidateForm(); return false;" class="btn btn-secondary btn-lg" href="#" target="_blank" role="button">Continue <span class="icon-arrowlink"></span></a></p>
        </div>
        <div id="FAthankyou" style="display:none;clear:both;">
          <p style="color:#333; font-size:2em;">Your Almost There</p>
          <p>Once your application is completed please write down your application/reference number, you will need to enter this number into the account number field during checkout on our website. Add the items you wish to purchase into your shopping cart and submit your order. An expert sewing consultant will contact you after you place your order to confirm the purchase and complete the financing.</p>
          <!-- <p>Synchrony Financial has a history of strong financial performance, long-standing partnerships, and operational excellence, all in service of helping put the things that matter most within reach. Whether you need a new sewing machine or sewing furniture or supplies, why wait? Apply now, and you could be shopping for those items the same day!</p> -->
          <!-- <img src="//cdn.sewingmachinesplus.com/media/financing-popup/logo-responsive-mysynchrony.webp"/> -->
          <picture>
            <source srcset="https://cdn.sewingmachinesplus.com/media/financing-popup/logo-responsive-mysynchrony.webp" type="image/webp">
            <source srcset="https://cdn.sewingmachinesplus.com/media/financing-popup/logo-responsive-mysynchrony.jpg" type="image/jpeg">
            <img data-src="https://cdn.sewingmachinesplus.com/media/financing-popup/logo-responsive-mysynchrony.jpg" alt="" title="" class="lazy" >
          </picture>
          <p><a class="btn btn-secondary btn-lg" href="https://etail.mysynchrony.com/eapply/eapply.action?uniqueId=D2895D9FF3CADB4EF670CD22E0CF1A52D5A064E2C1629DFE&client=Sewing%20Machines%20Plus" target="_blank" role="button">Apply Online <span class="icon-arrowlink"></span></a></p>
          <img id="FAemailSend" src="" width="0" height="0" border="0" alt="" style="height:0px;"/>
        </div>
        <style type="text/css">
          #FAformerrors {
            color:red;
            font-weight:bold;
            display:none;
          }
          #FAstart a, #FAthankyou a {
            width:100%;
          }
          #FAstart img, #FAthankyou img {
            width:100%;
            margin-bottom:10px;
          }
          #FAstart label {
            width:70px;
            text-align:right;
          }
          @media (max-width: 400px) {
            #FAstart label {
              display:block;
              width:100%;
              text-align:center;
            }
          }
        </style>
        <script>
          function FAvalidateForm(){
            var x = document.getElementById("FAemail").value;
            var fay = document.getElementById("FAfullname").value;
            var faz = document.getElementById("FAphone").value;
            var atpos=x.indexOf("@");
            var dotpos=x.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length || fay=="" || faz=="") {
              document.getElementById("FAformerrors").style.display="block";
              return false;
            } else {
              document.getElementById("FAemailSend").src='https://app.bronto.com/public/?q=direct_add&fn=Public_DirectAddForm&id=avzsfstznvdkdkabikpbbgcqhpwfbid&email='+x+'&field1=fullname,set,'+fay+'&field2=cellphone,set,'+faz+'&field3=financeproduct,set,[-- PRODUCT.Name --]&list1=0bbe03ec00000000000000000000000a9768';
              //hide form and display a thank you for registering
              document.getElementById("FAstart").style.display="none";
              document.getElementById("FAthankyou").style.display="block";
              ga('send', 'event', 'FAbutton', 'FAclick', 'Finance Application');
              return false;
            }
          }
        </script>
      </div>
    </div>
    </div>
    <script>
      // Initialize the plugin
      $('#packages, #craftsy-pop, #local-pop, #financing-pop, #geopopup, #lowest-price-pop, #callouts-pop').popup({
        transition: 'all 0.3s',
        scrolllock: true
      });
    </script>
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
    <script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5665943"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5665943&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>
  </body>
  [-- INCLUDE -SMP-AE-js-plugins-kyle_pagespeed --]
  <script src="//cdn.sewingmachinesplus.com/AE/js/lightbox/js/lightboxkyle.min.js"></script>
  <script src="//cdn.sewingmachinesplus.com/AE/js/owl/owl.carousel.min.js"></script>
  <script>
    function startLightbox(){
      $("a[data-lightbox='thumbnailslightbox']:first").click();
    }
    $('.owl-carousel').owlCarousel({
      margin:10,
      nav:true,
      dotsContainer: '#newowldots',
      responsive:{
        0:{
          items:2
        },
        333:{
          items:3
        },
        426:{
          items:4
        },
        525:{
          items:5
        },
        615:{
          items:6
        },
        992:{
          items:3
        },
        1024:{
          items:4
        },
        1399:{
          items:6
        }
      }
    })
  </script>
  <script>
    lightbox.option({
      'showImageNumberLabel': false,
      'alwaysShowNavOnTouchDevices': true,
      'wrapAround': true
    })
  </script>
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
  <!--4-Tell Recommendations Begin (www.4-tell.com)-->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript">
    _4TellBoost={}; _4TellBoost.jq=jQuery.noConflict(true);
  </script>
  <script type="text/javascript" async src="//4tcdn.blob.core.windows.net/4tjs3/4TellLoader.js?alias=sewingma"></script>
  <!--4-Tell Recommendations End-->
  <!--google analytics was here-->
  </html>
[-- END_DEFINE MORE_INFO_PAGE --]