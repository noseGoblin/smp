/*ON DOCUMENT READY*/
var scroll = 0;

$(document).ready(function(){
  var winW=$(window).width();
  if($('.nav-full').css('display')=='none'){
  //if (winW<1024){
    toSearchBarMobile();
  }else{
    $('.btn-search-new').css('background-color','#ec010b');
    $('#header-bag').css('display', 'block');
  	scroll=0;
  }
  getMobileNavScrollerHeight();
});
/*ON SCREEN RESIZE*/
/*$(window).on('orientationchange',function(){
  var winW = $(window).width();
  console.log('orientationchange winW '+winW);

	if($('.nav-full').css('display')=='block'){
		if(scroll=1){
			toSearchBarDesktop();
		}else if(scroll=0){
			toSearchBarScroll();
		}
	}else{
		toSearchBarMobile();
	}
	getMobileNavScrollerHeight();

  if($('.nav-mobile:visible').length!=0){//if old menu is up
    //ss_jQuery('#expertsewingconsultants').attr('display','block');
    $('.cmlla').addClass('new-cmlla');
  }else{//new menu is up
    //ss_jQuery('#expertsewingconsultants').css('display','none');
    $('.cmlla').removeClass('new-cmlla');
  }
});*/

$(window).on('orientationchange',function(){
	function switchSearchBars(){
		var winW = $(window).width();
		console.log('orientationchange win W '+winW);

		if($('.nav-full').css('display')=='none'){
			toSearchBarMobile();
		}else{
			if(scroll=1){
				toSearchBarDesktop();
			}else if(scroll=0){
				toSearchBarScroll();
			}
		}
		getMobileNavScrollerHeight();
	}
	setTimeout(switchSearchBars, 100)
})

//mobile dropdown
$('.mobile-search-btn, .mobile-search-toggle-wrap, .mobile-search-toggle').on('click touchstart',function(event){
	//event.preventDefault();
	$('.mobile-search-bar').toggleClass('search-active');
	//close menu when search bar opened
	if($('div.mobile-dropdown').hasClass('dropdown-active')){
		$('.menu-icon-bar').toggleClass('burger-active');
		$('.mobile-dropdown').toggleClass('dropdown-active');
	}
	return false; //test
});

var devBrowser=window.navigator.userAgent;
var stringBrowser=String(devBrowser);
devBrowser=stringBrowser.toLowerCase();

function disableDocumentScrolling() {
    if (document.documentElement.style.position != 'fixed') {
        // Get the top vertical offset.
        var topVerticalOffset = (typeof window.pageYOffset != 'undefined') ?
            window.pageYOffset : (document.documentElement.scrollTop ? 
            document.documentElement.scrollTop : 0);
        // Set the document to fixed position (this is the only way around IOS' overscroll "feature").
        document.documentElement.style.position = 'fixed';
        // Set back the offset position by user negative margin on the fixed document.
        document.documentElement.style.marginTop = '-' + topVerticalOffset + 'px';
    }
}

function enableDocumentScrolling() {
    if (document.documentElement.style.position == 'fixed') {
    	if(devBrowser.indexOf('msie')!=-1||devBrowser.indexOf('trident')!=-1/*||devBrowser.indexOf('edge')!=-1*/){
			//console.log('its IE: '+devBrowser);
			// Remove the fixed position on the document.
        	document.documentElement.style.position = 'static';
		}else{
			//console.log('its not IE: '+devBrowser);
			// Remove the fixed position on the document.
        	document.documentElement.style.position = 'static';
		}
        // Calculate back the original position of the non-fixed document.
        var scrollPosition = -1 * parseFloat(document.documentElement.style.marginTop);
        // Remove fixed document negative margin.
        document.documentElement.style.marginTop = null;
        // Scroll to the original position of the non-fixed document.
        window.scrollTo(0, scrollPosition);
    }
}

function toSearchBarMobile(){
  var searchBar=$('.detachable-search-bar').detach();

  $('#insert-searchbar').append(searchBar);
  $('.detachable-search-bar').addClass('mobile-search-bar');
  $('.detachable-search-bar div:first-child').addClass('mobile-search-bar-wrap');
  $('.btn-search-new').css('background-color','transparent');
  $('.btn-search-new span:first-child').addClass('mobile-icon-search');
  $('.btn-search-new span:first-child').removeClass('icon-search');
  //console.log('searchBarMobile');
  $('#header-mobile-bag').css('display', 'block');
  $('#header-scroll-bag, #header-bag').css('display','none');
  console.log('toSearchBarMobile ran');
}

function toSearchBarDesktop(){
  var searchBar=$('.detachable-search-bar').detach();
  $('.search-container').append(searchBar);
  $('.btn-search-new').css('background-color','#ec010b');
  $('#header-bag').css('display', 'block');
  $('#header-scroll-bag, #header-mobile-bag').css('display','none');
  scroll=0;
  console.log('toSearchBarDesktop ran');
}

function toSearchBarScroll(){
  var searchBar=$('.detachable-search-bar').detach();
  $('#searchbar-scroll').prepend(searchBar);
  $('#header-scroll-bag').css('display', 'block');
  $('#header-bag, #header-mobile-bag').css('display','none');
  scroll=1;
  console.log('toSearchBarScroll ran');
}

function getMobileNavScrollerHeight(){
  var winH=$(window).height();
  var navH=$('.mobile-branding-header').height();
  var scrllH=winH-(navH+99);
  $('.nav-scroller').css('height',scrllH+'px');
}

function goToNav(location, destination){
	var currentLoc="navblock"+location;
	var targetLoc="navblock"+destination;
	$('#'+currentLoc).css('display','none');
	$('#'+targetLoc).fadeIn('fast',function(){});
	$('#'+targetLoc).css('display','block');
}

$('.hamburger-menu').on('click touchstart', function(event){
	/*event.preventDefault();*/
	$('.menu-icon-bar').toggleClass('burger-active');
	$('.mobile-dropdown').toggleClass('dropdown-active');
	/*close search bar when the menu is opened*/
	if($('.mobile-search-bar').hasClass('search-active')){
		$('.mobile-search-bar').toggleClass('search-active');
	}	
	/*disable scroll when menu is active and refresh menu on close*/
	if($('div.mobile-dropdown').hasClass('dropdown-active')){
		$('body').css('position','relative');
		$('html').css('overflow','hidden');
		disableDocumentScrolling();
	}else{
		$('body').css('position','');
		$('html').css('overflow','');
		enableDocumentScrolling();
		/*refresh nav position*/
		$('#navblock0').css('display','block');
		$('#navblock1, #navblock2, #navblock3, #navblock4, #navblock5, #navblock6, #navblock7, #navblock8, #navblock9, #navblock10, #navblock11, #navblock12, #navblock13, #navblock14, #navblock15, #navblock16, #navblock17, #navblock18, #navblock19, #navblock20, #navblock21, #navblock22, #navblock23, #navblock24, #navblock25, #navblock26, #navblock27, #navblock28, #navblock29, #navblock30, #navblock31, #navblock32').css('display','none');
	}
	/*allow inside divs to scroll even when body html is prevented*/
	/*$('nav-scroller').on('touchstart touchmove',function(){

	});*/
	return false; //test
});

/*change the suggestion dropdown width for scroll down bar*/
$('input.form-control').focus(function(){
  var winW=$(window).width();
  var searchInputW=$('.detachable-search-bar input[name="search_field"]').width();
  searchInputW=searchInputW+26;
  if(winW>=1007){
    if($(document).scrollTop()>=60){
      $('.nxt-ac-main').each(function(){
        this.style.setProperty('width',searchInputW+'px','important');
      })
    }else{
      $('.nxt-ac-main').each(function(){
        this.style.setProperty('width',searchInputW+'px','important');
      })
    }
  }
})

/*ON DESKTOP SIZE SCROLL DOWN*/
$(document).scroll(function(){
  var winW=$(window).width();
  if(winW>=1007){
    if($(document).scrollTop()>=60){
      if($('.detachable-search-bar').hasClass('container')){
      }else{
        $('.detachable-search-bar').toggleClass('container');
      }
      if(scroll==0){
        toSearchBarScroll();
      }
    }
    if($(document).scrollTop()<60){
      if($('.detachable-search-bar').hasClass('container')){
        $('.detachable-search-bar').toggleClass('container');
      }else{}
      if(scroll==1){
        toSearchBarDesktop();
      }
    }
  }else{
    toSearchBarMobile();
    if($(document).scrollTop()>=60){
      $('.back-to-top-mobile').css('display','block');
    }else{
      $('.back-to-top-mobile').css('display','none');
    }
  }
});

$('.back-to-top-mobile').on('click touchstart',function(event){
  window.scrollTo(0,0);
});

/*DESKTOP SCROLL SEARCHBAR*/
$('.scroll-searchbar-trigger').on('click toucstart',function(event){
	//disableDocumentScrolling();
  $('#searchbar-scroll').toggleClass('active-searchbar-scroll');
  $('.detachable-search-bar').toggleClass('container');
  $('#search-scroll-icon').toggleClass('close-search-icon');
  $('#search-scroll-icon').toggleClass('search-icon');
  if($('.detachable-search-bar').hasClass('container')){
  }else{
    $('.detachable-search-bar').toggleClass('container');
  }
});

//tier 1 buttons PRODUCTS - BRANDS
$('#products-btn').mouseover(function(){
  $('.navbar-products-dropdown').css('display','block');
  $('#blinder-overlay').css('display','block');
  if($('#search-scroll-icon').hasClass('close-search-icon')){
    $('.scroll-searchbar-trigger').click();
  }
});

$('#products-btn').mouseout(function(){
  $('.navbar-products-dropdown').css('display','none');
  $('#blinder-overlay').css('display','none');
});

$('#notions-btn').mouseover(function(){
  $('.navbar-notions-dropdown').css('display','block');
  $('#blinder-overlay').css('display','block');
  if($('#search-scroll-icon').hasClass('close-search-icon')){
    $('.scroll-searchbar-trigger').click();
  }
});

$('#notions-btn').mouseout(function(){
  $('.navbar-notions-dropdown').css('display','none');
  $('#blinder-overlay').css('display','none');
});

$('#browse-btn').mouseover(function(){
  $('.navbar-browse-dropdown').css('display','block');
  $('#blinder-overlay').css('display','block');
  if($('#search-scroll-icon').hasClass('close-search-icon')){
    $('.scroll-searchbar-trigger').click();
  }
});

$('#browse-btn').mouseout(function(){
  $('.navbar-browse-dropdown').css('display','none');
  $('#blinder-overlay').css('display','none');
});

$('#brands-btn').mouseover(function(){
  $('.navbar-brands-dropdown').css('display','block');
  $('#blinder-overlay').css('display','block');
  if($('#search-scroll-icon').hasClass('close-search-icon')){
    $('.scroll-searchbar-trigger').click();
  }
});

$('#brands-btn').mouseout(function(){
  $('.navbar-brands-dropdown').css('display','none');
  $('#blinder-overlay').css('display','none');
});

//products dropdown
var openSubCats=function(a){
	var category=$('#'+a.id).attr('name');
	$('#'+category).css('display','block');
	//$('#'+category).delay(250).fadeIn();
	$('#tier2-'+category).toggleClass('active-tier2');
}

var closeSubCats=function(a){
	var category=$('#'+a.id).attr('name');
	if(cancelClose===true){return false;}
	$('#'+category).css('display','none');
	//$('#'+category).hide();
	$('#tier2-'+category).toggleClass('active-tier2');
	resetMenu();
}

var openMenu=function(a){
	//var category=ss_jQuery('#'+a.id).attr('name');
	$('#'+a).css('display','block');
	if($('#tier2-'+a).hasClass('active-tier2')){
	}else{
		$('#tier2-'+a).toggleClass('active-tier2');
	}
}

var closeMenu=function(a){
	//var category=ss_jQuery('#'+a.id).attr('name');
	$('#'+a).css('display','none');
	if($('#tier2-'+a).hasClass('active-tier2')){
		$('#tier2-'+a).toggleClass('active-tier2');
	}
	resetMenu();
	cancelClose=false;
}
//brands dropdown
var openSubBrands=function(a){
	category=$('#'+a.id).attr('name');
	$('#'+category+'-menu').css('display','block');
	$('#tier2-'+category).toggleClass('active-tier2');
}

var closeSubBrands=function(a){
	category=$('#'+a.id).attr('name');
	if(cancelClose===true){return false;}
	$('#'+category+'-menu').css('display','none');
	$('#tier2-'+category).toggleClass('active-tier2');
	resetMenu();
}

var openBrandMenu=function(a){
	var category=$('#'+a).attr('name');
	$('#'+category+'-menu').css('display','block');
	if($('#tier2-'+category).hasClass('active-tier2')){
	}else{
		$('#tier2-'+category).toggleClass('active-tier2');
	}
}

var closeBrandMenu=function(a){
	var category=$('#'+a).attr('name');
	$('#'+a).css('display','none');
	if($('#tier2-'+category).hasClass('active-tier2')){
		$('#tier2-'+category).toggleClass('active-tier2');
	}
	resetMenu();
	cancelClose=false;
}
function resetMenu(){
	if($('.navbar-products-dropdown, .navbar-brands-dropdown').find('.active-tier2').length>0){
		$('.active-tier2').toggleClass('active-tier2');
	}
}

//hoverIntent
var config={
	over: function(){openSubCats(this)},
	out: function(){closeSubCats(this)},
	timeout:300
};

var brandConfig={
	over: function(){openSubBrands(this)},
	out: function(){closeSubBrands(this)},
	timeout:300
};

var cancelClose;

$('#tier2-sewing-machines').hoverIntent(config);
$('#tier2-industrial-machines').hoverIntent(config);
$('#tier2-vacuum-machines').hoverIntent(config);
$('#tier2-irons-steamers-machines').hoverIntent(config);
$('#tier2-brands-machines').hoverIntent(config);

$('#tier2-sewing-supplies').hoverIntent(config);
$('#tier2-embroidery-supplies').hoverIntent(config);
$('#tier2-quilting-supplies').hoverIntent(config);
$('#tier2-other-supplies').hoverIntent(config);

$('#tier2-babylock').hoverIntent(config);
$('#tier2-bernina').hoverIntent(config);
$('#tier2-brother').hoverIntent(config);
$('#tier2-handiquilter').hoverIntent(config);
$('#tier2-viking').hoverIntent(config);
$('#tier2-janome').hoverIntent(config);
$('#tier2-juki').hoverIntent(config);
$('#tier2-pfaff').hoverIntent(config);
$('#tier2-reliable').hoverIntent(config);
$('#tier2-singer').hoverIntent(config);
$('#tier2-all').hoverIntent(config);

$('html').mousemove(function(){
	$('.tier3-content').mouseenter(function(){
		var catId=$(this).attr('id');
		if(catId.indexOf('menu')!==-1){
			openBrandMenu(catId);
			cancelClose=true;
		}else{
			openMenu(catId);
			cancelClose=true;
		}
	});
	$('.tier3-content').mouseleave(function(){
		var wrapId=$(this).attr('id');
		if(wrapId.indexOf('menu')!==-1){
			closeBrandMenu(wrapId);
		}else{
			closeMenu(wrapId);
		}
	})
});


$('a.shopping-bag').attr('href',shoppingCartURL);

//sticky desktop nav
var $document=$(document);

$document.scroll(function(){
  var navDivOverflow=$('.navbar-root').prop('scrollHeight');
  var navDivH=$('.sticky-desktop').prop('clientHeight');
  var navDif=navDivOverflow-navDivH;
  var resW=window.innerWidth;

  if(resW>=1007){
    $('.sticky-desktop').toggleClass('sticky-desk-nav',$document.scrollTop()>=60);
    $('.sticky-spool').toggleClass('shown',$document.scrollTop()>=60);
    $('#search-scroll-icon').toggleClass('shown',$document.scrollTop()>=60);
  }else{
    if($('.sticky-desktop').hasClass('sticky-desk-nav')){
      $('.sticky-desktop').toggleClass('sticky-desk-nav');
      $('.sticky-spool').toggleClass('shown');
      $('#search-scroll-icon').toggleClass('shown');
    }
  }
  if($document.scrollTop()>=60){
		$('.navbar-browse-dropdown').css('left','-429px');
	}else{
		$('.navbar-browse-dropdown').css('left','-306px');
  }
})

/*BROWSE BUTTON*/
var the_cookie = document.cookie.split(';');
for (var i = 0; i < the_cookie.length; i++) {
  var x = the_cookie[i].substr(0, the_cookie[i].indexOf("=")).replace(/^\s+|\s+$/g, "");
  var y = the_cookie[i].substr(the_cookie[i].indexOf("=") + 1);
  if (x === "4Tell") {
    var foo = JSON.parse(unescape(y));
    //To filter out bad cookies.
    if (foo.Viewed && typeof (foo.Viewed) === "object") {
      document.getElementById("browse-btn").style.display="block";
    }
  }
}