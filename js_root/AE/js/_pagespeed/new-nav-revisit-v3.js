var isMobile = navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/);
//isMobile = 'iPhone';
if(isMobile!=null){ //if it's mobile
	$('.nav-mobile').css('display','block');
	$('.nav-full').css('display','none');
	toSearchBarMobile();
}else{
	$('.nav-mobile').css('display','none');
	$('.nav-full').css('display','block');
	toSearchBarDesktop();
}

$('a.shopping-bag').attr('href',shoppingCartURL);

/*ON DOCUMENT READY*/
$(document).ready(function(){
	getMobileNavScrollerHeight();
});

/*ON ORIENTATION CHANGE*/
$(window).on('orientationchange', function(){
});

/*ON SCROLL*/
$(document).scroll(function(){
	if($(document).scrollTop()>=50){
    if($('.detachable-search-bar').hasClass('container')){
    }else{
      $('.detachable-search-bar').toggleClass('container');
    }
    toSearchBarScroll();
  }else{
  	toSearchBarMobile();
    if($(document).scrollTop()>=60){
      $('.back-to-top-mobile').css('display','block');
    }else{
      $('.back-to-top-mobile').css('display','none');
    }
  }
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

/*DESKTOP SCROLL SEARCHBAR*/
$('.scroll-searchbar-trigger').on('click touchstart',function(event){
	disableDocumentScrolling();
  $('#searchbar-scroll').toggleClass('active-searchbar-scroll');
  $('.detachable-search-bar').toggleClass('container');
  $('#search-scroll-icon').toggleClass('close-search-icon');
  $('#search-scroll-icon').toggleClass('search-icon')
  if($('.detachable-search-bar').hasClass('container')){
  }else{
    $('.detachable-search-bar').toggleClass('container');
  }
});

/*FUNCTIONS*/
//cut searchbar into mobile location
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
  console.log('toSearchBarMobile ran');
}
//cut searchbar into desktop location
function toSearchBarDesktop(){
  var searchBar=$('.detachable-search-bar').detach();
  $('.search-container').append(searchBar);
  $('.btn-search-new').css('background-color','#ec010b');
  $('#header-bag').css('display', 'block');
  scroll=0;
  console.log('toSearchBarDesktop ran');
}
//cut searchbar into scroll location
function toSearchBarScroll(){
  var searchBar=$('.detachable-search-bar').detach();
  $('#searchbar-scroll').prepend(searchBar);
  $('#header-scroll-bag').css('display', 'block');
  scroll=1;
  console.log('toSearchBarScroll ran');
}

function getMobileNavScrollerHeight(){
  var winH=$(window).height();
  var navH=$('.mobile-branding-header').height();
  var scrllH=winH-(navH+99);
  $('.nav-scroller').css('height',scrllH+'px');
}

//reset menu to initial state
function resetMenu(){
	if($('.navbar-products-dropdown, .navbar-brands-dropdown').find('.active-tier2').length>0){
		$('.active-tier2').toggleClass('active-tier2');
	}
}

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

/*ON HOVERINTENT*/
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

/* DESKTOP NAV BUTTONS */
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

/*MOBILE*/

$('.back-to-top-mobile').on('click touchstart',function(event){
  window.scrollTo(0,0);
});

function goToNav(location, destination){
	var currentLoc="navblock"+location;
	var targetLoc="navblock"+destination;
	$('#'+currentLoc).css('display','none');
	$('#'+targetLoc).fadeIn('fast',function(){});
	$('#'+targetLoc).css('display','block');
}