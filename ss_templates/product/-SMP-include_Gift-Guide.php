[-- DEFINE PRODUCT --]
  <input type="hidden" class="viewlist" value="[-- PRODUCT.Field13 --]" />
  <input type="hidden" class="googleProdCat" value="[-- Product.GoogleProductType --]"/>
  <style>
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

    <!--BEGIN _size2 IMAGE jacob 10/19/2018 -->
    [--IF PRODUCT.DisplayMoreInformationPage--]
      [--IF PRODUCT.Field14--]
      <?php if(strpos($_SERVER['REQUEST_URI'], 'gift-guide-2018.php') !== false):?>
        <a href="[--PRODUCT.MoreInfoURL--]" style="color:#fff; text-decoration:none;">
          <div style="margin:5px; min-height:250px; max-height:250px; background-image:url(/media/[-- IMAGE Product.MoreInformationGraphic --]); background-position:center; background-repeat:no-repeat;">
            <img src="//cdn.sewingmachinesplus.com/media/overlay/[-- PRODUCT.Field14 --]" class="productLinkImg productLinkImg_giftguide" />
            <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap product-flag_gift-guide"></div>
          </div>
          <div class="brand-text" align="center">[--PRODUCT.Brand--]</div>
          <div class="productLinkName">[-- PRODUCT.Name --]</div>
        </a>
      <?php else: ?>
        <a href="[--PRODUCT.MoreInfoURL--]" style="color:#fff; text-decoration:none;">
          <div style="margin:5px; min-height:130px; max-height:130px; background-image:url(/media/[-- IMAGE PRODUCT.Graphic --]); background-position:center; background-repeat:no-repeat;">
            <img src="//cdn.sewingmachinesplus.com/media/overlay/[-- PRODUCT.Field14 --]" class="productLinkImg productLinkImg_giftguide" width="130" height="130"/>
            <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap product-flag_gift-guide"></div>
          </div>
          <div class="brand-text" align="center">[--PRODUCT.Brand--]</div>
          <div class="productLinkName">[-- PRODUCT.Name --]</div>
        </a>
      <?php endif; ?>
      [--ELSE--]
      <?php if(strpos($_SERVER['REQUEST_URI'], 'gift-guide-2018.php') !== false):?>
        <a href="[--PRODUCT.MoreInfoURL--]" style="color:#fff; text-decoration:none;">
          <div style="margin:5px; min-height:250px; max-height:250px;">
            <img src="//cdn.sewingmachinesplus.com/media/[-- IMAGE Product.MoreInformationGraphic --]" class="productLinkImg productLinkImg_giftguide" />
            <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap product-flag_gift-guide"></div>
          </div>
          <div class="brand-text" align="center">[--PRODUCT.Brand--]</div>
          <div class="productLinkName">[-- PRODUCT.Name --]</div>
        </a>
      <?php else: ?>
        <a href="[--PRODUCT.MoreInfoURL--]" style="color:#fff; text-decoration:none;">
          <div style="margin:5px; min-height:130px; max-height:130px;">
            <img src="//cdn.sewingmachinesplus.com/media/[-- IMAGE PRODUCT.Graphic --]" class="productLinkImg productLinkImg_giftguide" width="130" height="130" />
            <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap product-flag_gift-guide"></div>
          </div>
          <div class="brand-text" align="center">[--PRODUCT.Brand--]</div>
          <div class="productLinkName">[-- PRODUCT.Name --]</div>
        </a>
      <?php endif; ?>
      [--END_IF--]
    [--ELSE--]
      <?php if(strpos($_SERVER['REQUEST_URI'], 'gift-guide-2018.php') !== false):?>
      <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #fff; text-decoration: none;">
        <div style="margin:5px; min-height:250px; max-height:250px;">
          <img src="//cdn.sewingmachinesplus.com/media/[-- IMAGE Product.MoreInformationGraphic --]" class="productLinkImg productLinkImg_giftguide" />
          <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap product-flag_gift-guide"></div>
        </div>
        <div class="brand-text" align="center">[--PRODUCT.Brand--]</div>
        <div class="productLinkName">[-- PRODUCT.Name --]</div>
      </a>
      <?php else: ?>
      <a href="[-- PRODUCT.MoreInfoURL --]" style="color: #fff; text-decoration: none;">
        <div style="margin:5px; min-height:130px; max-height:130px;">
          <img src="//cdn.sewingmachinesplus.com/media/[-- IMAGE PRODUCT.Graphic --]" class="productLinkImg productLinkImg_giftguide" width="130px" height="130px" />
          <div id="flag-[--PRODUCT.sku--]" class="product-flag-wrap product-flag_gift-guide"></div>
        </div>
        <div class="brand-text" align="center">[--PRODUCT.Brand--]</div>
        <div class="productLinkName">[-- PRODUCT.Name --]</div>
      </a>
      <?php endif; ?>
    [--END_IF--]
    <!--END _size2 IMAGE jacob 10/19/2018 -->

  [--IF PRODUCT.Field48--]
    <script>
      j(function(){
        var freeShip = "[--PRODUCT.Field10--]"
        var flagVal = "[--PRODUCT.Field48--]";
        var flagsUp = "";
        if (flagVal.indexOf("top")!==-1){
          flagsUp+="<img src='//cdn.sewingmachinesplus.com/media/images/flags/top-rated.png' class='product-flag'><br>"
        }
        if (flagVal.indexOf("new")!==-1){
          flagsUp+="<img src='//cdn.sewingmachinesplus.com/media/images/flags/new-product.png' class='product-flag'><br>"
        }
        if (flagVal.indexOf("best")!==-1){
          flagsUp+="<img src='//cdn.sewingmachinesplus.com/media/images/flags/best-seller.png' class='product-flag'><br>"
        }
        if (flagVal.indexOf("staff")!==-1){
          flagsUp+="<img src='//cdn.sewingmachinesplus.com/media/images/flags/staff-pick.png' class='product-flag'><br>"
        }
        if (freeShip.indexOf("free")!==-1){
          flagsUp+="<img src='//cdn.sewingmachinesplus.com/media/images/flags/free-delivery.png' class='product-flag'><br>"
        }
        j('#flag-[--PRODUCT.sku--]').append(flagsUp);
      });
    </script>
  [--ELSE--]
    [--IF Product.Field10 "free"--]
      <script>
        j('#flag-[--PRODUCT.sku--]').append("<img src='//cdn.sewingmachinesplus.com/media/images/flags/free-delivery.png' class='product-flag'>");
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
        <span class="callfordeets_giftguide">Call for details</span>
      [-- END_IF --]
    [--END_IF--]<br />
    [--IF Product.Field10 "free3day"--]
      <span style="color: #7f5eb3; font-size:10pt;"><strong>Free 3-Day Delivery</strong></span>
    [-- END_IF --]

    [--IF Product.de "nov"--]
      <img src="//cdn.sewingmachinesplus.com/media/promotions/pre-black-friday-sale.jpg">
    [-- END_IF --]
    [--IF Product.Field10 "cyber"--]
      <img src="//cdn.sewingmachinesplus.com/media/promotions/cyber-week-sale.jpg">
    [-- END_IF --]
    [--IF Product.Field10 "nextday"--]
      <span style="color: #30bd3a;"><strong>Free Next Day Air!</strong></span>
    [-- END_IF --]
  </div>
  [-- INCLUDE LexiConnAACSimpleProduct PROCESS --]<!--AJAX CART-->
[-- END_DEFINE PRODUCT --]