<div class="modelCompare-outter greybox bord2">
<h2 class="mid">Compare Similar Models</h2>
<table id="modelCompare-table" class="whitebg">
  <tr>
    <td></td>
    <td class="modelCompareText"><a href="<?php echo "https://www.sewingmachinesplus.com/".$mcp1Product['ss_filename']; ?>"><img class="lazy" data-src="<?php echo "//cdn.sewingmachinesplus.com/media/".$mcp1Product['ss_graphic']; ?>.jpg"/><br/><?php echo $mcp1Product['ss_name']; ?></a></td>
    <td class="modelCompareText"><a href="<?php echo "https://www.sewingmachinesplus.com/".$mcp2Product['ss_filename']; ?>"><img class="lazy" data-src="<?php echo "//cdn.sewingmachinesplus.com/media/".$mcp2Product['ss_graphic']; ?>"/><br/><?php echo $mcp2Product['ss_name']; ?></a></td>
    <td class="modelCompareText"><a href="<?php echo "https://www.sewingmachinesplus.com/".$mcp3Product['ss_filename']; ?>"><img class="lazy" data-src="<?php echo "//cdn.sewingmachinesplus.com/media/".$mcp3Product['ss_graphic']; ?>"/><br/><?php echo $mcp3Product['ss_name']; ?></a></td>
    <td class="modelCompareText"><a href="<?php echo "https://www.sewingmachinesplus.com/".$mcp4Product['ss_filename']; ?>"><img class="lazy" data-src="<?php echo "//cdn.sewingmachinesplus.com/media/".$mcp4Product['ss_graphic']; ?>"/><br/><?php echo $mcp4Product['ss_name']; ?></a></td>
  </tr>
  <tr>
    <td></td>
    <td><a href="<?php echo "https://www.sewingmachinesplus.com/".$mcp1Product['ss_filename']; ?>" id="dwnButton"><h4>Learn More</h4></a></td>
    <td><a href="<?php echo "https://www.sewingmachinesplus.com/".$mcp2Product['ss_filename']; ?>" id="dwnButton"><h4>Learn More</h4></a></td>
    <td><a href="<?php echo "https://www.sewingmachinesplus.com/".$mcp3Product['ss_filename']; ?>" id="dwnButton"><h4>Learn More</h4></a></td>
    <td><a href="<?php echo "https://www.sewingmachinesplus.com/".$mcp4Product['ss_filename']; ?>" id="dwnButton"><h4>Learn More</h4></a></td>
  </tr>
  <tr class="darkBG">
    <td>Price</td>
    <td style="font-weight:bold;"><?php if(($mcp1Product['ss_saleamount'] == 0.0000 && $mcp1Product['ss_price'] == 0.0000) || ($mcp1Product['ss_displayprice'] == "uncheck" || $mcp1Product['ss_displayprice'] == "unchecked")) {echo "Call for Details";}elseif($mcp1Product['ss_saleamount'] == 0.0000) {echo money_format('$%i',$mcp1Product['ss_price']);}else{echo money_format('$%i',$mcp1Product['ss_saleamount']);} ?></td>
    <td style="font-weight:bold;"><?php if(($mcp2Product['ss_saleamount'] == 0.0000 && $mcp2Product['ss_price'] == 0.0000) || ($mcp2Product['ss_displayprice'] == "uncheck" || $mcp2Product['ss_displayprice'] == "unchecked")) {echo "Call for Details";}elseif($mcp2Product['ss_saleamount'] == 0.0000) {echo money_format('$%i',$mcp2Product['ss_price']);}else{echo money_format('$%i',$mcp2Product['ss_saleamount']);} ?></td>
    <td style="font-weight:bold;"><?php if(($mcp3Product['ss_saleamount'] == 0.0000 && $mcp3Product['ss_price'] == 0.0000) || ($mcp3Product['ss_displayprice'] == "uncheck" || $mcp3Product['ss_displayprice'] == "unchecked")) {echo "Call for Details";}elseif($mcp3Product['ss_saleamount'] == 0.0000) {echo money_format('$%i',$mcp3Product['ss_price']);}else{echo money_format('$%i',$mcp3Product['ss_saleamount']);} ?></td>
    <td style="font-weight:bold;"><?php if(($mcp4Product['ss_saleamount'] == 0.0000 && $mcp4Product['ss_price'] == 0.0000) || ($mcp4Product['ss_displayprice'] == "uncheck" || $mcp4Product['ss_displayprice'] == "unchecked")) {echo "Call for Details";}elseif($mcp4Product['ss_saleamount'] == 0.0000) {echo money_format('$%i',$mcp4Product['ss_price']);}else{echo money_format('$%i',$mcp4Product['ss_saleamount']);} ?></td>
  </tr>
  <tr class="lightBG">
    <td>Customer Rating</td>
    <td><div class="star_container <?php echo $mcp1Product['ss_sku']; ?>"></div></td>
    <td><div class="star_container <?php echo $mcp2Product['ss_sku']; ?>"></div></td>
    <td><div class="star_container <?php echo $mcp3Product['ss_sku']; ?>"></div></td>
    <td><div class="star_container <?php echo $mcp4Product['ss_sku']; ?>"></div></td>
  </tr>
  <tr class="darkBG">
    <td>Stitch Count</td>
    <td><?php echo $mcProducts1Specs[0] ?></td>
    <td><?php echo $mcProducts2Specs[0] ?></td>
    <td><?php echo $mcProducts3Specs[0] ?></td>
    <td><?php echo $mcProducts4Specs[0] ?></td>
  </tr>
  <tr class="lightBG">
    <td>Drop Feed/Free Motion <span class="mctt" title="A drop feed mechanism is what allows you to free motion quilt on a household sewing machine.">&#9432;</span></td>
    <td><?php echo $mcProducts1Specs[1] ?></td>
    <td><?php echo $mcProducts2Specs[1] ?></td>
    <td><?php echo $mcProducts3Specs[1] ?></td>
    <td><?php echo $mcProducts4Specs[1] ?></td>
  </tr>
  <tr class="darkBG">
    <td>Speed Control <span class="mctt" title="Set your speed and your sewing machine will consistently sew at that same exact speed until you stop.">&#9432;</span></td>
    <td><?php echo $mcProducts1Specs[2] ?></td>
    <td><?php echo $mcProducts2Specs[2] ?></td>
    <td><?php echo $mcProducts3Specs[2] ?></td>
    <td><?php echo $mcProducts4Specs[2] ?></td>
  </tr>
  <tr class="lightBG">
    <td>Thread Tension</td>
    <td><?php echo $mcProducts1Specs[3] ?></td>
    <td><?php echo $mcProducts2Specs[3] ?></td>
    <td><?php echo $mcProducts3Specs[3] ?></td>
    <td><?php echo $mcProducts4Specs[3] ?></td>
  </tr>
  <tr class="darkBG">
    <td>Stitches Per Minute</td>
    <td><?php echo $mcProducts1Specs[4] ?></td>
    <td><?php echo $mcProducts2Specs[4] ?></td>
    <td><?php echo $mcProducts3Specs[4] ?></td>
    <td><?php echo $mcProducts4Specs[4] ?></td>
  </tr>
  <tr class="lightBG">
    <td>Embroidery</td>
    <td><?php echo $mcProducts1Specs[5] ?></td>
    <td><?php echo $mcProducts2Specs[5] ?></td>
    <td><?php echo $mcProducts3Specs[5] ?></td>
    <td><?php echo $mcProducts4Specs[5] ?></td>
  </tr>
  <tr class="darkBG">
    <td>Max Stitch Width</td>
    <td><?php echo $mcProducts1Specs[6] ?></td>
    <td><?php echo $mcProducts2Specs[6] ?></td>
    <td><?php echo $mcProducts3Specs[6] ?></td>
    <td><?php echo $mcProducts4Specs[6] ?></td>
  </tr>
  <tr class="lightBG">
    <td>Max Stitch Length</td>
    <td><?php echo $mcProducts1Specs[7] ?></td>
    <td><?php echo $mcProducts2Specs[7] ?></td>
    <td><?php echo $mcProducts3Specs[7] ?></td>
    <td><?php echo $mcProducts4Specs[7] ?></td>
  </tr>
  <tr class="darkBG">
    <td>Thread Cutter</td>
    <td><?php echo $mcProducts1Specs[8] ?></td>
    <td><?php echo $mcProducts2Specs[8] ?></td>
    <td><?php echo $mcProducts3Specs[8] ?></td>
    <td><?php echo $mcProducts4Specs[8] ?></td>
  </tr>
  <tr class="lightBG">
    <td>Needle Threader</td>
    <td><?php echo $mcProducts1Specs[9] ?></td>
    <td><?php echo $mcProducts2Specs[9] ?></td>
    <td><?php echo $mcProducts3Specs[9] ?></td>
    <td><?php echo $mcProducts4Specs[9] ?></td>
  </tr>
  <tr class="darkBG">
    <td>Included Presser Feet</td>
    <td><?php echo $mcProducts1Specs[10] ?></td>
    <td><?php echo $mcProducts2Specs[10] ?></td>
    <td><?php echo $mcProducts3Specs[10] ?></td>
    <td><?php echo $mcProducts4Specs[10] ?></td>
  </tr>
  <tr class="lightBG">
    <td>Warranty</td>
    <td><?php echo $mcProducts1Specs[11] ?></td>
    <td><?php echo $mcProducts2Specs[11] ?></td>
    <td><?php echo $mcProducts3Specs[11] ?></td>
    <td><?php echo $mcProducts4Specs[11] ?></td>
  </tr>
</table>
</div>
<script type="text/javascript"> function saLoadScript(src) { var js = window.document.createElement('script'); js.src = src; js.type = 'text/javascript'; document.getElementsByTagName("head")[0].appendChild(js); } saLoadScript('//www.shopperapproved.com/widgets/group2.0/21959.js'); </script>