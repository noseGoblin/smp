[-- DEFINE PAGE --]
[--IF PAGE.NumProducts 0 --]
  [--ELSE--]
    <div class="container">
      <h2 class="section-heading_gift-guide">
        <span>
          <span class="shopBy-giftguide">Take 10% OFF These</span><br />Top [-- PAGE.Field7 --]
        </span>
        <!-- <div>
          <a href="#">VIEW ALL</a>
        </div> -->
      </h2>
      <div id="filter-bar" class="col-sm-12 col-md-3 col-lg-3 visible-md visible-lg hidden-sm hidden-xs">
        <!--insert filters here-->
      </div>
      <div id="product-section" class="col-sm-12 col-md-9 col-lg-9 flex-parent-product">
        [--LOOP PRODUCTS--]
          <div id="product-list-grid2" class="margin-flex-product product-list-grid3_giftguide" style="padding:1% 0;" align="center">
            [--PRODUCT -SMP-include_Gift-Guide--]
          </div>
        [--END_LOOP PRODUCTS--]
      </div>
    </div>
  [--END_IF--]
[-- END_DEFINE PAGE --]