<script src="/AE/bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script language="javascript" async>

  $(function() {

    var cookies = document.cookie,
    start = cookies.indexOf("ss_cart_[-- STORE_Serial_Number --]="),
    cartvalues = "",
    linecount = 0,
    start1,
    end1,
    tmp,
    $output="";

    if (start == -1) {
      $output = "0";
    } else {
      start = cookies.indexOf("=", start) +1;  
      var end = cookies.indexOf(";", start);  

      if (end == -1) end = cookies.length;
      cartvalues = unescape(cookies.substring(start,end)); //read in just the cookie data
      start = 0;

      while ((start = cartvalues.indexOf("|", start)) != -1)
      {
        start++;
        end = cartvalues.indexOf("|", start);
        if (end != -1)
        {
          linecount++;
          if (linecount == 2) // Total Quantity of Items
          {
            tmp = cartvalues.substring(start,end);
            zcolon = tmp.indexOf(":", 0);
            $output += tmp.substring(zcolon+1,end - start);
          }
          start = end;
        } else {
          break;
        }
      }
    }

    $('#header-bag, #header-mobile-bag, #header-scroll-bag').find('.badge').text($output);

  });
</script>