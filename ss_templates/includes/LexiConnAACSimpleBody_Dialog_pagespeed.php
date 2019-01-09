<!-- BEGIN MODULE BODY -->
<!--[if lt IE 9]>
     <script src="[-- OUTPUT_DIRECTORY_URL --]/media/en-US/javascript/jquery/jquery.js?v=1.2" type="text/javascript"></script>
     <script type="text/javascript">
         var ss_jQuery = jQuery.noConflict(true);

     </script>
<![endif]-->

<div id="cart_message" title="Item(s) Added to Cart" style="display: none; z-index: 99999;">
    <div id="cart_message_body" style="position: relative; height: 140px; overflow: hidden;">
  <div id="cart_message_prod_img" style="position: absolute; left: 10px; top: 0; height: 200px; width: 100px; overflow: hidden;">
    <img id="cart_message_img" src="" width="100" />
        </div>
        <div style="position: absolute; left: 130px; height: 200px; top: 0;">
    <div id="cart_message_error" style="display: none; margin-top: 10%;"></div>
    <div id="cart_message_products" style="margin-top: 5%;"></div>
  </div>
  <div id="cart_message_inner" style="position: absolute; bottom: 10px; left: 50px;">
    <center></center>
        </div>
   </div>
</div>

<script src="[-- OUTPUT_DIRECTORY_URL --]/media/en-US/javascript/jquery/jquery.js?v=1.2" type="text/javascript" defer></script>
<!--<script type="text/javascript" src="/aac_module/scripts/jquery.form.js"></script> -->
<script type="text/javascript">
  var ss_jQuery = jQuery.noConflict(true);
</script>
<script type="text/javascript" src="/aac_module/scripts/jquery.loadmask.min.js"></script>
<script type="text/javascript" src="/aac_module/scripts/jquery_ui.js?v=1.2"></script>
<script type="text/javascript">
  window.add_cart_loadmaskphrase='[-- VAR.AddCartMessage --]';
  window.empty_cart_loadmaskphrase='[-- VAR.EmptyCartMessage --]';
  window.loadmaskimage = new Image(25,25);
  window.loadmaskimage.src = '[-- OUTPUT_DIRECTORY_URL --]/media/en-US/css/images/loadmask.gif';
</script>

<script type="text/javascript">
[-- IF VAR.MiniCartType NE 5 --]
ss_jQuery(function () {

    window.minicart = {
        serialnum: '[-- STORE_Serial_Number --]',
        cartURL: "[-- SHOPPING_CART_URL --]?storeid=[-- STORE.ID --]&amp;function=show",
        storeid: "[-- STORE.ID --]",
        minicartIcon: "[-- ShopSite_Images --]/themesmedia/cart-black.gif",
        cartvalues: "",
        totals: [],
        productCount: 0,
        zip: '',
        country: '',
        cc: 0,
        cookieSet: false,
        subtotal: 0,
        order_total: 0,
        start1: 0,
        end1: 0,
        emptyMessage: "[-- VAR.NoItemsInCartMessage --]",
        products: [],
        textColor: "black",
        backgroundColor: "transparent",
        showCart: "no",
        cartColor: "black",
        textAlign: "left",
        cart_form_values: [],
        readCookie: function () {
            var cookies = document.cookie;
            var start = cookies.indexOf("ss_cart_" + this.serialnum + "=");
            var cartvalues = "";
            var tmp;
            var start = cookies.indexOf("=", start) + 1;
            var end = cookies.indexOf(";", start);
            if (end == -1) {
                end = cookies.length;
            }
            this.cartvalues = unescape(cookies.substring(start, end));
            if (this.cartvalues.length > 0) {
                this.cookieSet = true;
            } else {
                this.cookieSet = false;
            }
            if (this.cookieSet == false) {
                this.removeCookie("totals");
            }
            var tstart = cookies.indexOf("totals");
            var tstart = cookies.indexOf("=", tstart) + 1;
            var tend = cookies.indexOf(";", tstart);
            if (tend == -1) {
                tend = cookies.length;
            }
            var t = unescape(cookies.substring(tstart, tend));
            var t_temp = t.split("|");
            this.totals = new Array();
            for (n = 0; n < t_temp.length; n++) {
                var t_split = t_temp[n].split(":");
                var name = t_split[0];
                var value = t_split[1];
                this.totals[name] = value;
            }

        },

        parseCartValues: function () {
            start = 0;
            var linecount = 0;
            var total_count = 0;
            while ((start = this.cartvalues.indexOf("|", start)) != -1) {
                start++;
                end = this.cartvalues.indexOf("|", start);
                if (end != -1) {
                    linecount++;

                    if (linecount == 3) {
                        this.start1 = start;
                        this.end1 = end;
                    }

                    if (linecount > 3) {
                        tmp = this.cartvalues.substring(start, end);
                        colon = tmp.indexOf(":", 0);

                        var product_quantity = tmp.substring(0, colon);

                        if (product_quantity > 0) {
                            total_count += product_quantity / 1;

                            colon2 = tmp.indexOf(":", colon + 1);
                            var product_name = tmp.substring(colon2 + 1, end - start);
                            var product_price = tmp.substring(colon + 1, colon2);

                            var p_object = {
                                name: product_name,
                                price: product_price,
                                quantity: product_quantity
                            };
                            this.products.push(p_object);
                        }
                    }
                    start = end;
                } else {
                    break;
                }
            }

            if (total_count == 1) {
                this.productCount = total_count + " Item";
            } else {
                this.productCount = total_count + " Items";
            }

            tmp = this.cartvalues.substring(this.start1, this.end1);
            colon = tmp.indexOf(":", 0);
            this.subtotal = tmp.substring(colon + 1, this.end1 - this.start1);
            ss_jQuery("#minicart_subtotal_summary").text(this.subtotal);

        },
        setCookie: function (name, value, days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
            } else {
                var expires = "";
                document.cookie = name + "=" + value + expires + "; path=/";
            }
        },

        removeCookie: function (name) {
            this.setCookie(name, "", -1);
        },

        getCookie: function (c_name) {
            var i, x, y, ARRcookies = document.cookie.split(";");
            for (i = 0; i < ARRcookies.length; i++) {
                x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
                y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
                x = x.replace(/^\s+|\s+$/g, "");
                if (x == c_name) {
                    return unescape(y);
                }
            }
        },

        addProductRow: function (qnty, pname, price) {
            var new_row = '<tr><td class="minicart_qnty">' + qnty + '</td><td class="minicart_name">' + pname + '</td><td class="minicart_price">' + price + '</td></tr>';
            ss_jQuery("#minicart_4_ptable").append(new_row);
        },

        updateMinicart: function () {
            ss_jQuery.ajax({
                type: "POST",
                cache: false,
                url: "[-- SHOPPING_CART_URL --]",
                data: "&storeid=[-- STORE.ID --]&function=show",
                async: false,
                crossDomain: false,
                dataType: 'html',
                success: function (msg) {
                    var ss_jQuerydoc = ss_jQuery(msg);

                    var f_input = ss_jQuerydoc.find("form[name='order']");

            //window.cart_html = ss_jQuerydoc.find("form[name='order']").parent().html();

                    window.cart_data = f_input.serialize();

                    var form_values = f_input.serializeArray();

                    var total_regex = /^Total.*/;

                    var total = null;

                    ss_jQuery.each(form_values, function (i, field) {
                        window.minicart.cart_form_values[field.name] = field.value;
                    });

                    var totals_table = ss_jQuerydoc.find("table.totals > tbody > tr > td");
                    var total_value = null;
                    var total_index = null;

                    totals_table.each(function (i, field) {


                        if (total_index != null) {
                            if (i == total_index) {
                                total_value = field.innerHTML;
                            }
                        }
                    });




                    if (total_value != null) {
                        this.order_total = total_value;
                    } else {
                        this.order_total = "$0";
                    }

                }
            });

            this.products = new Array();
            this.readCookie();
            if (this.cookieSet == true) {
                this.parseCartValues();

                if (this.products.length > 0) {

                    if (this.products.length == 1) {
                        ss_jQuery("#minicart_item_count").text(this.productCount);
                    } else {
                        ss_jQuery("#minicart_item_count").text(this.productCount);
                    }

        [-- IF VAR.MiniCartType 4 --]
      ss_jQuery("#minicart_4_ptable").empty();
                        for (n = 0; n < this.products.length; n++) {
                                this.addProductRow(this.products[n].quantity, this.products[n].name, this.products[n].price);
                        }
                    [-- END_IF --]


                } else {
        [-- IF VAR.MiniCartType 4 --]
                    ss_jQuery("#minicart_4_ptable").empty();
                    [-- END_IF --]
                    ss_jQuery("#minicart_item_count").text("");
                    ss_jQuery("#minicart_subtotal_summary").text("");

                }

            } else {
    [-- IF VAR.MiniCartType 4 --]
                    ss_jQuery("#minicart_4_ptable").empty();
                    [-- END_IF --]
                ss_jQuery("#minicart_empty_wrap").show();
                ss_jQuery("#minicart_product_table_body").empty();
                ss_jQuery("#minicart_quantity").text("");
                ss_jQuery("#minicart_subtotal").text(this.emptyMessage);
            }

        }
    }

    window.minicart.updateMinicart();

});

function emptyCart() {
    window.minicart.removeCookie("totals");
    var scrollTop = ss_jQuery(window).scrollTop();
    var wheight = ss_jQuery(window).height();

    var mpos = scrollTop + Math.round(wheight / 2);

    ss_jQuery('body').mask(window.empty_cart_loadmaskphrase, 0, mpos);
    var ajaxTime = new Date().getTime();
    ss_jQuery.ajax({
        type: "POST",
        cache: false,
        url: "[-- SHOPPING_CART_URL --]",
        data: window.cart_data + "&function=Empty Cart",
        async: true,
        crossDomain: false,
        dataType: 'html',
        success: function (msg) {
            var ss_jQuerydoc = ss_jQuery(msg);
            window.minicart.updateMinicart();
            ss_jQuery("#minicart_shipping_options").empty();
            var totalTime = new Date().getTime() - ajaxTime;
            var timeout = 1000 - totalTime;

            setTimeout('ss_jQuery("body").unmask()', timeout);
        }
    });
}


ss_jQuery(function () {

        ss_jQuery("form[action*='order.cgi']").submit(function (event) {
            event.preventDefault();
            var pid = ss_jQuery(this).attr("id").replace("form", "");
            var pn = 'product_name_' + pid;
            var product_name = ss_jQuery("input[name='" + pn + "']").val();
            var murl = 'media_url_' + pid;
            var media_url = ss_jQuery("input[name='" + murl + "']").val();
            var pg = 'product_graphic_' + pid;
        var product_image = ss_jQuery("input[name='" + pg + "']").val();
        var pi = (product_image.length > 0) ? true : false;

        var ajaxTime = new Date().getTime();
            var sender = event.target.itemnum.value;
            var scrollTop = ss_jQuery(window).scrollTop();
            var wheight = ss_jQuery(window).height();

            var mpos = scrollTop + Math.round(wheight / 2);

            ss_jQuery('body').mask(window.add_cart_loadmaskphrase, 0, mpos);

            var dataObj = ss_jQuery(this).serializeArray();
            var data = ss_jQuery.param(dataObj, false);

            ss_jQuery.ajax({
                type: "POST",
                cache: false,
                url: "[-- SHOPPING_CART_URL --]",
                data: data,
                async: true,
                crossDomain: false,
                dataType: 'html',
                success: function (msg) {
                    var ss_jQuerydoc = ss_jQuery(msg);

                    var f_input = ss_jQuerydoc.find("form[name='order']");
            //window.cart_html = ss_jQuerydoc.find("form[name='order']").parent().html();

                    window.cart_data = f_input.serialize();

                    var f_array = f_input.serializeArray();
                    for (var index in f_array) {
                        window.minicart.cart_form_values[index] = f_array[index];
                    }
                    if (ss_jQuerydoc.find('.inv_err').length > 0) {
            window.cart_error = ss_jQuery.trim(ss_jQuerydoc.find('.inv_err td.inv_err').text());

                        ss_jQuery("#cart_message_" + sender).empty();
                        ss_jQuery("#cart_message_" + sender).html(ss_jQuerydoc.find('.inv_err td.inv_err').text());
                        window.minicart.updateMinicart();

                        var totalTime = new Date().getTime() - ajaxTime;
                        var timeout = 1000 - totalTime;

                        ss_jQuery("#cart_message_error").html(window.cart_error);
                        if(pi==true){
                            var image_path = media_url + product_image;
                          ss_jQuery("#cart_message_img").attr("src", image_path);
                          ss_jQuery("#cart_message_img").show();
                        } else{
                          ss_jQuery("#cart_message_img").hide();
                        }

                        ss_jQuery("#cart_message_error").show();
                        ss_jQuery("#cart_message_inner").hide();
                        ss_jQuery("#cart_message_products").empty();

                        ss_jQuery(".loadmask-msg").hide();

                        ss_jQuery( "#cart_message" ).dialog({
                                    autoOpen: false,
                                    height: 300,
                                    width: 400,
                                    modal: true,
                                  //  closeText: "",
                                    buttons: {
                      "Continue Shopping": function() {
                                        ss_jQuery( this ).dialog( "close" );
                                  },
                      "View Cart": function() {
                                        window.location.href = "[-- SHOPPING_CART_URL Base --]/order.cgi?storeid=[-- STORE.ID --]&function=show";
                      }
                  },
                  close: function() {
                    ss_jQuery("body").unmask();
                  }
              });
        ss_jQuery( "#cart_message" ).dialog("open");

                    } else {
                        window.minicart.updateMinicart();

                        var totalTime = new Date().getTime() - ajaxTime;
                        var timeout = 1000 - totalTime;

                        ss_jQuery("#cart_message_error").empty();
                        ss_jQuery("#cart_message_error").hide();
                        ss_jQuery("#cart_message_inner").show();
                        ss_jQuery("#cart_message_products").html(product_name);

                        if(pi==true){
                          var image_path = media_url + product_image;
                          ss_jQuery("#cart_message_img").attr("src", image_path);
                          ss_jQuery("#cart_message_img").show();
                        } else{
                          ss_jQuery("#cart_message_img").hide();
                        }

                        ss_jQuery(".loadmask-msg").hide();

      ss_jQuery( "#cart_message" ).dialog({
                                autoOpen: false,
                                height: 300,
                                width: 400,
                                modal: true,
                                //closeText: "",
                                buttons: {
                                        "Continue Shopping": function() {
                                                ss_jQuery( this ).dialog( "close" );
                                        },
                                        "View Cart": function() {
                                        window.location.href = "[-- SHOPPING_CART_URL Base --]/order.cgi?storeid=[-- STORE.ID --]&function=show";
                    }
                                },
                                close: function() {
                                        ss_jQuery("body").unmask();
                                }
                        });

      ss_jQuery( "#cart_message" ).dialog("open");

                    }
                }
            });

  });

        ss_jQuery("a[href*='function=add']").click(function (event) {
                event.preventDefault();
                var ajaxTime = new Date().getTime();
                var url = event.currentTarget.href;
                var product_name = ss_jQuery(this).attr("title");

                var s_data = url.split('?');
                var data = s_data[1];

                var scrollTop = ss_jQuery(window).scrollTop();
                var wheight = ss_jQuery(window).height();

                var mpos = scrollTop + Math.round(wheight / 2);

                ss_jQuery('body').mask(window.add_cart_loadmaskphrase, 0, mpos);

                ss_jQuery.ajax({
                    type: "GET",
                    cache: false,
                    url: "[-- SHOPPING_CART_URL Base --]/order.cgi",
                    data: data,
                    async: true,
                    crossDomain: false,
                    dataType: 'html',
                    success: function (msg) {
                        var ss_jQuerydoc = ss_jQuery(msg);

                        var f_input = ss_jQuerydoc.find("form[name='order']");

                        window.cart_data = f_input.serialize();

                        var f_array = f_input.serializeArray();
                        for (var index in f_array) {
                            window.minicart.cart_form_values[index] = f_array[index];
                        }
                        if (ss_jQuerydoc.find('.inv_err').length > 0) {
                            ss_jQuery("#cart_message_" + sender).empty();
                            ss_jQuery("#cart_message_" + sender).html(ss_jQuerydoc.find('.inv_err td.inv_err').text());
                            var error_msg = ss_jQuery.trim(ss_jQuery("#cart_message_" + sender).text());
                            alert(error_msg);
                            window.minicart.updateMinicart();
                            var totalTime = new Date().getTime() - ajaxTime;
                            var timeout = 1000 - totalTime;

                            setTimeout('ss_jQuery("body").unmask()', timeout);

                        } else {
                            window.minicart.updateMinicart();

                            ss_jQuery("#cart_message_error").empty();
                            ss_jQuery("#cart_message_error").hide();
                            ss_jQuery("#cart_message_inner").show();
                            ss_jQuery("#cart_message_products").html(product_name);

                            ss_jQuery(".loadmask-msg").hide();

                ss_jQuery( "#cart_message" ).dialog({
                                    autoOpen: false,
                                    height: 300,
                                    width: 400,
                                    modal: true,
                                  //  closeText: "",
                                    buttons: {
                                            "Continue Shopping": function() {
                                                    ss_jQuery( this ).dialog( "close" );
                                            },
                                            "View Cart": function() {
                                            
              window.location.href = "[-- SHOPPING_CART_URL Base --]/order.cgi?storeid=[-- STORE.ID --]&function=show";
                        }
                                    },
                                    close: function() {
                                            ss_jQuery("body").unmask();
                                    }
                            });

      ss_jQuery( "#cart_message" ).dialog("open");

                        }
                    }
            });

        });
});

[-- ELSE --]

ss_jQuery(function (){

        if (ss_jQuery("#minicart").parent().innerWidth() < 290) {
            ss_jQuery("#minicart").parent().css("max-width", "300px");
            ss_jQuery("#minicart").parent().css("width", "300px");
        }

        window.minicart = {
            serialnum: '[-- STORE_Serial_Number --]',
            cartURL: "[-- SHOPPING_CART_URL --]?storeid=[-- STORE.ID --]&amp;function=show",
            storeid: "[-- STORE.ID --]",
            minicartIcon: "[-- ShopSite_Images --]/themesmedia/cart-black.gif",
            cartvalues: "",
            totals: [],
            productCount: 0,
            tax: -1,
            shipping: null,
            zip: '',
            country: '',
            cc: 0,
            cookieSet: false,
            subtotal: 0,
            order_total: 0,
            start1: 0,
            end1: 0,
            emptyMessage: "[-- VAR.NoItemsInCartMessage --]",
            products: [],
            textColor: "black",
            backgroundColor: "transparent",
            showCart: "no",
            cartColor: "black",
            textAlign: "left",
            cart_form_values: [],
            readCookie: function () {
                var cookies = document.cookie;
                var start = cookies.indexOf("ss_cart_" + this.serialnum + "=");
                var cartvalues = "";
                var tmp;
                var start = cookies.indexOf("=", start) + 1;
                var end = cookies.indexOf(";", start);
                if (end == -1) {
                    end = cookies.length;
                }
                this.cartvalues = unescape(cookies.substring(start, end));
                if (this.cartvalues.length > 0) {
                    this.cookieSet = true;
                } else {
                    this.cookieSet = false;
                }
                if (this.cookieSet == false) {
                    this.removeCookie("totals");
                }
                var tstart = cookies.indexOf("totals");
                var tstart = cookies.indexOf("=", tstart) + 1;
                var tend = cookies.indexOf(";", tstart);
                if (tend == -1) {
                    tend = cookies.length;
                }
                var t = unescape(cookies.substring(tstart, tend));
                var t_temp = t.split("|");
                this.totals = new Array();
                for (n = 0; n < t_temp.length; n++) {
                    var t_split = t_temp[n].split(":");
                    var name = t_split[0];
                    var value = t_split[1];
                    this.totals[name] = value;
                }

            },

            parseCartValues: function () {
                start = 0;
                var linecount = 0;
                var total_count = 0;
                while ((start = this.cartvalues.indexOf("|", start)) != -1) {
                    start++;
                    end = this.cartvalues.indexOf("|", start);
                    if (end != -1) {
                        linecount++;

                        if (linecount == 3) {
                            this.start1 = start;
                            this.end1 = end;
                        }

                        if (linecount > 3) {
                            tmp = this.cartvalues.substring(start, end);
                            colon = tmp.indexOf(":", 0);

                            var product_quantity = tmp.substring(0, colon);

                            if (product_quantity > 0) {
                                total_count += product_quantity / 1;

                                colon2 = tmp.indexOf(":", colon + 1);
                                var product_name = tmp.substring(colon2 + 1, end - start);
                                var product_price = tmp.substring(colon + 1, colon2);

                                var p_object = {
                                    name: product_name,
                                    price: product_price,
                                    quantity: product_quantity
                                };

                                this.products.push(p_object);
                            }
                        }
                        start = end;
                    } else {
                        break;
                    }
                }


                if (total_count == 1) {
                    this.productCount = total_count;
                } else {
                    this.productCount = total_count;
                }

                tmp = this.cartvalues.substring(this.start1, this.end1);
                colon = tmp.indexOf(":", 0);
    var st = tmp.substring(colon + 1, this.end1 - this.start1);
                this.subtotal = (st != undefined && st.length > 0) ? st : "$0.00";
                ss_jQuery("#minicart_subtotal_summary").text(this.subtotal);
              ss_jQuery("#minicart_subtotal_value").text(this.subtotal);
      },
            setCookie: function (name, value, days) {
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    var expires = "; expires=" + date.toGMTString();
                } else {
                    var expires = "";
                    document.cookie = name + "=" + value + expires + "; path=/";
                }
            },

            removeCookie: function (name) {
                this.setCookie(name, "", -1);
            },

            getCookie: function (c_name) {
                var i, x, y, ARRcookies = document.cookie.split(";");
                for (i = 0; i < ARRcookies.length; i++) {
                    x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
                    y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
                    x = x.replace(/^\s+|\s+$/g, "");
                    if (x == c_name) {
                        return unescape(y);
                    }
                }
            },

            addProductRow: function (qnty, pname, price) {
                var new_row = '<tr><td class="minicart_qnty">' + qnty + '</td><td class="minicart_name">' + pname + '</td><td class="minicart_price">' + price + '</td></tr>';
                ss_jQuery("#minicart_product_table_body").append(new_row);
            },

            updateMinicart: function () {
                ss_jQuery.ajax({
                    type: "POST",
                    cache: false,
                    url: "[-- SHOPPING_CART_URL --]",
                    data: "&storeid=[-- STORE.ID --]&function=show",
                    async: false,
                    crossDomain: false,
                    dataType: 'html',
                    success: function (msg) {
                        var ss_jQuerydoc = ss_jQuery(msg);

                        var f_input = ss_jQuerydoc.find("form[name='order']");
                        window.cart_data = f_input.serialize();
                        var form_values = f_input.serializeArray();
                        var subtotal_regex = /^Subtotal.*/;
                        var ship_regex = /^Ship.*/;
                        var tax_regex = /^Tax.*/;
                        var total_regex = /^Total.*/;

                        var subtotal = null;
                        var ship_value = null;
                        var tax_value = null;
                        var total = null;

                        ss_jQuery.each(form_values, function (i, field) {
                            window.minicart.cart_form_values[field.name] = field.value;
                        });

                        var totals_table = ss_jQuerydoc.find("table.totals > tbody > tr > td");

                        var subtotal_index = null;
                        var ship_index = null;
                        var tax_index = null;
                        var total_index = null;

                        totals_table.each(function (i, field) {
                            if (ship_regex.test(field.innerHTML)) {
                                ship_index = i + 1;
                            } else if (tax_regex.test(field.innerHTML)) {
                                tax_index = i + 1;
          } else if (subtotal_regex.test(field.innerHTML)) {
                                subtotal_index = i + 1;
                            } else if (total_regex.test(field.innerHTML)) {
                                total_index = i + 1;
                            }

                            if (ship_index != null) {
                                if (i == ship_index) {
                                    ship_value = field.innerHTML;
                                }
                            }

                            if (tax_index != null) {
                                if (i == tax_index) {
                                    tax_value = field.innerHTML;
                                }
                            }

                            if (total_index != null) {
                                if (i == total_index) {
                                    total_value = field.innerHTML;
                                }
                            }
                        });


                        if (ship_value != null) {
                            this.shipping = ship_value;
                        } else {
                            this.shipping = "$0";
                        }

                        if (tax_value != null) {
                            this.tax = tax_value;
                        } else {
                            this.tax = "$0";
                        }

                        if (total_value != null) {
                            this.order_total = total_value;
                        } else {
                            this.order_total = "$0";
                        }

                        ss_jQuery("#minicart_tax_value").empty();
                        ss_jQuery("#minicart_tax_value").append(this.tax);

                        ss_jQuery("#minicart_ship_value").empty();
                        ss_jQuery("#minicart_ship_value").append(this.shipping);

                        //ss_jQuery("#minicart_subtotal_value").empty();
                        //ss_jQuery("#minicart_subtotal_value").append(this.subtotal);

                        ss_jQuery("#minicart_grand_total_value").empty();
                        ss_jQuery("#minicart_grand_total_value").append(this.order_total);

                        ss_jQuery("#minicart_subtotal_summary").text(this.order_total);

                    }
                });

                this.products = new Array();
                this.readCookie();
                if (this.cookieSet == true) {
                    this.parseCartValues();
                    if (this.productCount > 0) {
      ss_jQuery("#minicart_empty_message").hide();
      ss_jQuery("#minicart_product_table_body").empty();
      ss_jQuery("#minicart_cart_table").show();

      for (n = 0; n < this.products.length; n++) {

        this.addProductRow(this.products[n].quantity, this.products[n].name, this.products[n].price);
      }


                        if (this.productCount == 1) {
                            ss_jQuery("#minicart_item_count").text(this.productCount + " Item");
                        } else {
                            ss_jQuery("#minicart_item_count").text(this.productCount + " Items");
                        }

                    } else {

                        ss_jQuery("#minicart_item_count").text("");
                        ss_jQuery("#minicart_subtotal_summary").text("");
      ss_jQuery("#minicart_product_table_body").empty();
      ss_jQuery("#minicart_cart_table").hide();
      ss_jQuery("#minicart_empty_message").show();
      ss_jQuery("#minicart_subtotal_value").text("$0.00");

                    }

                } else {
                    ss_jQuery("#minicart_empty_wrap").show();
                    ss_jQuery("#minicart_product_table_body").empty();
        ss_jQuery("#minicart_cart_table").hide();
                    ss_jQuery("#minicart_quantity").text("");
                    ss_jQuery("#minicart_subtotal").text(this.emptyMessage);
        ss_jQuery("#minicart_subtotal_value").text("$0.00");
                }

        }
  }

    window.minicart.updateMinicart();

});

function emptyCart() {
    window.minicart.removeCookie("totals");
    var scrollTop = ss_jQuery(window).scrollTop();
    var wheight = ss_jQuery(window).height();

    var mpos = scrollTop + Math.round(wheight / 2);

    ss_jQuery('body').mask(window.empty_cart_loadmaskphrase, 0, mpos);
    var ajaxTime = new Date().getTime();
    ss_jQuery.ajax({
        type: "POST",
        cache: false,
        url: "[-- SHOPPING_CART_URL --]",
        data: window.cart_data + "&function=Empty Cart",
        async: true,
        crossDomain: false,
        dataType: 'html',
        success: function (msg) {
            var ss_jQuerydoc = ss_jQuery(msg);
            window.minicart.updateMinicart();
            ss_jQuery("#minicart_shipping_options").empty();

            var ajaxTime = new Date().getTime();
            var totalTime = new Date().getTime() - ajaxTime;
            var timeout = 1000 - totalTime;

            setTimeout('ss_jQuery("body").unmask()', timeout);
        }
    });
}


ss_jQuery(function () {


        ss_jQuery("form[action*='order.cgi']").submit(function (event) {
            event.preventDefault();
            var pid = ss_jQuery(this).attr("id").replace("form", "");
            var pn = 'product_name_' + pid;
            var product_name = ss_jQuery("input[name='" + pn + "']").val();
            var murl = 'media_url_' + pid;
            var media_url = ss_jQuery("input[name='" + murl + "']").val();
            var pg = 'product_graphic_' + pid;
        var product_image = ss_jQuery("input[name='" + pg + "']").val();
        var pi = (product_image.length > 0) ? true : false;

        var ajaxTime = new Date().getTime();
            var sender = event.target.itemnum.value;
            var scrollTop = ss_jQuery(window).scrollTop();
            var wheight = ss_jQuery(window).height();

            var mpos = scrollTop + Math.round(wheight / 2);

            ss_jQuery('body').mask(window.add_cart_loadmaskphrase, 0, mpos);

            var dataObj = ss_jQuery(this).serializeArray();
            var data = ss_jQuery.param(dataObj, false);

            ss_jQuery.ajax({
                type: "POST",
                cache: false,
                url: "[-- SHOPPING_CART_URL --]",
                data: data,
                async: true,
                crossDomain: false,
                dataType: 'html',
                success: function (msg) {
                    var ss_jQuerydoc = ss_jQuery(msg);

                    var f_input = ss_jQuerydoc.find("form[name='order']");
            //window.cart_html = ss_jQuerydoc.find("form[name='order']").parent().html();

                    window.cart_data = f_input.serialize();

                    var f_array = f_input.serializeArray();
                    for (var index in f_array) {
                        window.minicart.cart_form_values[index] = f_array[index];
                    }
                    if (ss_jQuerydoc.find('.inv_err').length > 0) {
            window.cart_error = ss_jQuery.trim(ss_jQuerydoc.find('.inv_err td.inv_err').text());

                        ss_jQuery("#cart_message_" + sender).empty();
                        ss_jQuery("#cart_message_" + sender).html(ss_jQuerydoc.find('.inv_err td.inv_err').text());
                        window.minicart.updateMinicart();

                        var totalTime = new Date().getTime() - ajaxTime;
                        var timeout = 1000 - totalTime;

                        ss_jQuery("#cart_message_error").html(window.cart_error);
                        if(pi==true){
                            var image_path = media_url + product_image;
                          ss_jQuery("#cart_message_img").attr("src", image_path);
                          ss_jQuery("#cart_message_img").show();
                        } else{
                          ss_jQuery("#cart_message_img").hide();
                        }

                        ss_jQuery("#cart_message_error").show();
                        ss_jQuery("#cart_message_inner").hide();
                        ss_jQuery("#cart_message_products").empty();

                        ss_jQuery(".loadmask-msg").hide();

                        ss_jQuery( "#cart_message" ).dialog({
                                    autoOpen: false,
                                    height: 300,
                                    width: 400,
                                    modal: true,
                                  //  closeText: "",
                                    buttons: {
                      "Continue Shopping": function() {
                                        ss_jQuery( this ).dialog( "close" );
                                  },
                      "View Cart": function() {
                                            window.location.href = "[-- SHOPPING_CART_URL Base --]/order.cgi?storeid=[-- STORE.ID --]&function=show";
                      }
                  },
                  close: function() {
                    ss_jQuery("body").unmask();
                  }
              });


                    } else {
                        window.minicart.updateMinicart();

                        var totalTime = new Date().getTime() - ajaxTime;
                        var timeout = 1000 - totalTime;

                        ss_jQuery("#cart_message_error").empty();
                        ss_jQuery("#cart_message_error").hide();
                        ss_jQuery("#cart_message_inner").show();
                        ss_jQuery("#cart_message_products").html(product_name);

                        if(pi==true){
                          var image_path = media_url + product_image;
                          ss_jQuery("#cart_message_img").attr("src", image_path);
                          ss_jQuery("#cart_message_img").show();
                        } else{
                          ss_jQuery("#cart_message_img").hide();
                        }

                        ss_jQuery(".loadmask-msg").hide();

      ss_jQuery( "#cart_message" ).dialog({
                                autoOpen: false,
                                height: 300,
                                width: 400,
                                modal: true,
                              //  closeText: "",
                                buttons: {
                                        "Continue Shopping": function() {
                                                ss_jQuery( this ).dialog( "close" );
                                        },
                                        "View Cart": function() {
                                        window.location.href = "[-- SHOPPING_CART_URL Base --]/order.cgi?storeid=[-- STORE.ID --]&function=show";
                    }
                                },
                                close: function() {
                                        ss_jQuery("body").unmask();
                                }
                        });
      ss_jQuery( "#cart_message" ).dialog("open");

                    }
                }
            });

  });

        ss_jQuery("a[href*='function=add']").click(function (event) {
                event.preventDefault();
                var ajaxTime = new Date().getTime();
                var url = event.currentTarget.href;
                var product_name = ss_jQuery(this).attr("title");

                var s_data = url.split('?');
                var data = s_data[1];

                var scrollTop = ss_jQuery(window).scrollTop();
                var wheight = ss_jQuery(window).height();

                var mpos = scrollTop + Math.round(wheight / 2);

                ss_jQuery('body').mask(window.add_cart_loadmaskphrase, 0, mpos);

                ss_jQuery.ajax({
                    type: "GET",
                    cache: false,
                    url: "[-- SHOPPING_CART_URL Base --]/order.cgi",
                    data: data,
                    async: true,
                    crossDomain: false,
                    dataType: 'html',
                    success: function (msg) {
                        var ss_jQuerydoc = ss_jQuery(msg);

                        var f_input = ss_jQuerydoc.find("form[name='order']");

                        window.cart_data = f_input.serialize();

                        var f_array = f_input.serializeArray();
                        for (var index in f_array) {
                            window.minicart.cart_form_values[index] = f_array[index];
                        }
                        if (ss_jQuerydoc.find('.inv_err').length > 0) {
                            ss_jQuery("#cart_message_" + sender).empty();
                            ss_jQuery("#cart_message_" + sender).html(ss_jQuerydoc.find('.inv_err td.inv_err').text());
                            var error_msg = ss_jQuery.trim(ss_jQuery("#cart_message_" + sender).text());
                            alert(error_msg);
                            window.minicart.updateMinicart();
                            var totalTime = new Date().getTime() - ajaxTime;
                            var timeout = 1000 - totalTime;

                            setTimeout('ss_jQuery("body").unmask()', timeout);

                        } else {
                            window.minicart.updateMinicart();

                            ss_jQuery("#cart_message_error").empty();
                            ss_jQuery("#cart_message_error").hide();
                            ss_jQuery("#cart_message_inner").show();
                            ss_jQuery("#cart_message_products").html(product_name);

                            ss_jQuery(".loadmask-msg").hide();

              ss_jQuery( "#cart_message" ).dialog({
                                    autoOpen: false,
                                    height: 300,
                                    width: 400,
                                    modal: true,
                                 //   closeText: "",
                                    buttons: {
                                            "Continue Shopping": function() {
                                                    ss_jQuery( this ).dialog( "close" );
                                            },
                                            "View Cart": function() {
                                            window.location.href = "[-- SHOPPING_CART_URL Base --]/order.cgi?storeid=[-- STORE.ID --]&function=show";
                        }
                                    },
                                    close: function() {
                                            ss_jQuery("body").unmask();
                                    }
                            });

                        }
                    }
            });

        });
});
[-- END_IF --]
</script>
<!-- END MODULE BODY -->
