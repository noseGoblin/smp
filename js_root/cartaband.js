
/* Cart Abandonment Module Tracker JavaScript
**
** Copyright (C) 2006 Psychogenic Inc. 
** All Rights Reserved.
**
** Licensed exclusively for use by Lexiconn as part 
** of the Shopsite Cart Abandonment Module.
**
** http://www.psychogenic.com/
**
*/

function psyGetCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    } else {
        begin += 2;
    }
    var end = document.cookie.indexOf(";", begin);
    if (end == -1) {
        end = dc.length;
    }
    return unescape(dc.substring(begin + prefix.length, end));
}





function psyClientSideInclude(url, postdata) 
{
	var req = false;
	// For Safari, Firefox, and other non-MS browsers
	if (window.XMLHttpRequest) {
		try {
			req = new XMLHttpRequest();
		} catch (e) {
			req = false;
		}
	} else if (window.ActiveXObject) {
		// For Internet Explorer on Windows
		try {
			req = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				req = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				req = false;
			}
		}
	}
	
	if (req) {
		// Synchronous request, wait till we have it all
		
		if (postdata)
		{
		
			req.open('POST', url, false);
			req.setRequestHeader('Content-Type',
					'application/x-www-form-urlencoded');
					
			req.send(postdata);
		
		} else {
		
			req.open('GET', url, false);
			req.send(null);
		}
		
		// alert(req.responseText);
	} 
	
	return req;

}

function PsyCart(sid, baseurl)
{

	var self = this;
	this.shopid = sid;
	this.baseurl = baseurl;
	
	var sbid = '';
	
	var subtotal = 0.00;
	var shiptotal = 0.00;
	var taxtotal = 0.00;
	
	var skuArray = Array();
	var nameArray = Array();
	var qtArray = Array();
	var numprod = 0;
	
	var couponArray = Array();
	var numcoup = 0;
	
	var pagelocation = '';
	
	
	this.cid = function (cid)
	{
		sbid = cid;
	}
	
	this.page = function (url)
	{
		pagelocation = url;
	}
	
	this.coupons = function (numcoupons, coupArr)
	{
		numcoup = numcoupons;
		couponArray = coupArr;
	}
	
	this.contents = function (numproducts, skuArr, nameArr, qtArr)
	{
		numprod = numproducts;
		skuArray = skuArr;
		nameArray = nameArr;
		qtArray = qtArr;
	}
	
	this.totals = function(subt, shipt, taxt)
	{
		subtotal = subt;
		shiptotal = shipt;
		taxtotal = taxt;
	}
	
	this.notify = function() {
	
		if (! (numprod && skuArray.length && qtArray.length))
			return false;
		
		var postparams = constructParams(this.shopid);
		
		// alert(url);
		
		return psyClientSideInclude(this.baseurl, postparams);
	}
	
	function constructParams (sid)
	{
		if (! numprod )
			return false;
			
		
		if (skuArray.length != numprod )
		{
			alert ("PSYErr: SKU <-> numprod mismatch");
			return false;
		}
		
		if (qtArray.length != numprod )
		{
			alert ("PSYErr: QT <-> numprod mismatch");
			return false;
		}
		
		// some strings we'll need very often
		var namePStr	= 'Name=';
		var qtPStr 	= 'Quantity=';
		var skuPStr 	= 'SKU=';
		var ptypePStr 	= 'Product%20Type=';
		var ptypeTangibleStr 	= 'Tangible';
		var ptypeCouponStr 	= 'coupon';
		
		// our target url params container
		var url = '';
		
		// a few intermediary arrays to hold various product related params
		var qtParams = Array(qtArray.length + couponArray.length);
		
		var NumItemNcoupons = skuArray.length + couponArray.length;
		var skuParams = Array(NumItemNcoupons);
		var nameParams = Array(NumItemNcoupons);
		var typeParams = Array(NumItemNcoupons);
		
		// loop over all the products, adding entries to each of the 
		// above param arrays
		var i = 0;
		for (i = 0; i < numprod; i++)
		{
			var tmp;
			
			var bnum = "" + i;
			if (bnum < 9)
			{
				bnum = '0' + i;
			}
			
			
			// BXX-
			var itemprefix = 'B' + bnum + '-';
			
			tmp = itemprefix + qtPStr + escape(qtArray[i]);
			qtParams[i] = tmp;
			
			tmp = itemprefix + skuPStr + escape(skuArray[i]);
			skuParams[i] = tmp;
			
			tmp = itemprefix + namePStr + escape(nameArray[i]);
			nameParams[i] = tmp;
			
			tmp = itemprefix + ptypePStr + ptypeTangibleStr;
			typeParams[i] = tmp;
			
		}
		
		
		// now loop over the coupons, doing the same but setting the
		// product type to 'coupon' instead.
		for (i = 0; i < numcoup; i++)
		{
			var tmp;
			
			// make sure we start our Basket Item count where we left off
			// with the products above.
			var bnum = "" + (i + numprod);
			if (bnum < 9)
			{
				bnum = '0' + i;
			}
			
			
			// BXX-
			var itemprefix = 'B' + bnum + '-';
			
			tmp = itemprefix + qtPStr + '1'; // always set qt to one for coupons
			qtParams[i] = tmp;
			
			tmp = itemprefix + skuPStr + escape(couponArray[i]);
			skuParams[i] = tmp;
			
			tmp = itemprefix + namePStr + escape(couponArray[i]);
			nameParams[i] = tmp;
			
			
			tmp = itemprefix + ptypePStr + ptypeCouponStr;
			typeParams[i] = tmp;
		}
		
		// get some valid URL param strings for each of our param arrays
		var skuParamString = skuParams.join('&');
		var nameParamString = nameParams.join('&');
		var qtParamString = qtParams.join('&');
		var typeParamString = typeParams.join('&');
		
		var emailParamString = 'Email=';
		// try to grab the email  
		if (document.billing)
		{
			if (document.billing.Email && document.billing.Email.value != "")
			{
				emailParamString += escape(document.billing.Email.value);
			}
		}
		
		var regClientNameParamString = 'rname=';
		
		var regClientCookie = psyGetCookie('ss_reg_0001200073');
		if (regClientCookie)
		{
			var cookieNameEnd = regClientCookie.indexOf("|");
			if (cookieNameEnd > 0)
			{
				// end found.
				regClientNameParamString += regClientCookie.substring(0, cookieNameEnd);
			}
		} // end if we have a reg user cookie


		// finally, construct the complete parameter list, url encoded.
		url = 'sbid=' + escape(sbid)
			+ '&' + skuParamString 
			+ '&' + nameParamString 
			+ '&' + qtParamString
			+ '&' + typeParamString
			+ '&' + emailParamString
			+ '&' + regClientNameParamString
			+ '&sid=' + escape(sid)
			+ '&O-ProductTotal=' + escape(subtotal)
			+ '&O-TaxTotal=' + escape(taxtotal)
			+ '&O-ShippingTotal=' + escape(shiptotal)
			+ '&prevlocation=' + escape(pagelocation);
		
		return url;
	}
		
}

function psyOkToProceed(sid)
{
	/* We can put any test here, returning false will abort processing.
	** For now, we just want to skip AOL on Mac as its causing 
	** browser crashes...
	*/
	
	if (navigator)
	{
		// check platform and useragent for deadly combo...
		if (navigator.platform.indexOf("Mac") != -1)
		{
			// it is a mac
			if (navigator.userAgent.indexOf("AOL") != -1)
			{
				// it is AOL, skip it
				return false;
			}
		}
		
	}
	
	return true;
}


function psyCartAbandonmentNotify(sid, baseurl)
{

	if (! sid && baseurl)
		return false;
	
	if (! psyOkToProceed(sid))
		return false;
	
	var mycart = new PsyCart(sid, baseurl);
	mycart.cid(ss_sbid);

	if (window.ss_sku)	
		mycart.contents(number_products, ss_sku, ss_name, ss_quantity);
	mycart.totals(ss_subtotal, ss_shiptotal, ss_taxtotal);
	if (typeof prevlocation != 'undefined' && prevlocation)
	{
		mycart.page(prevlocation);
	} else {
		mycart.page(location.href);
	}
	
	if (number_coupons 
		&& typeof ss_coupon_name != 'undefined')
	{
		mycart.coupons(number_coupons, ss_coupon_name);
	}
	
	
	return mycart.notify();
}
	
