

var choco = document.getElementsByClassName("chocolate");
var bom = document.getElementsByClassName("bombones");
var malv = document.getElementsByClassName("masmelos");
var gomi = document.getElementsByClassName("gomas");
var chi = document.getElementsByClassName("chicles")
var i;



function general() {
	for (i = 0; i < choco.length; i++) {
    	choco[i].style.display = "initial";
  	}
    for (i = 0; i < bom.length; i++) {
    	bom[i].style.display = "initial";
  	}
    for (i = 0; i < malv.length; i++) {
    	malv[i].style.display = "initial";
  	}
	for (i = 0; i < gomi.length; i++) {
    	gomi[i].style.display = "initial";
  	}
	for (i = 0; i < chi.length; i++) {
    	chi[i].style.display = "initial";
  	}
}

function chocolate() {
	for (i = 0; i < choco.length; i++) {
    	choco[i].style.display = "initial";
  	}
    for (i = 0; i < bom.length; i++) {
    	bom[i].style.display = "none";
  	}
    for (i = 0; i < malv.length; i++) {
    	malv[i].style.display = "none";
  	}
	for (i = 0; i < gomi.length; i++) {
    	gomi[i].style.display = "none";
  	}
	for (i = 0; i < chi.length; i++) {
    	chi[i].style.display = "none";
  	}
}

function bombon() {
	for (i = 0; i < choco.length; i++) {
    	choco[i].style.display = "none";
  	}
    for (i = 0; i < bom.length; i++) {
    	bom[i].style.display = "initial";
  	}
    for (i = 0; i < malv.length; i++) {
    	malv[i].style.display = "none";
  	}
	for (i = 0; i < gomi.length; i++) {
    	gomi[i].style.display = "none";
  	}
	for (i = 0; i < chi.length; i++) {
    	chi[i].style.display = "none";
  	}
}

function malvavisco() {
	for (i = 0; i < choco.length; i++) {
    	choco[i].style.display = "none";
  	}
    for (i = 0; i < bom.length; i++) {
    	bom[i].style.display = "none";
  	}
    for (i = 0; i < malv.length; i++) {
    	malv[i].style.display = "initial";
  	}
	for (i = 0; i < gomi.length; i++) {
    	gomi[i].style.display = "none";
  	}
	for (i = 0; i < chi.length; i++) {
    	chi[i].style.display = "none";
  	}
}

function gomita() {
	for (i = 0; i < choco.length; i++) {
    	choco[i].style.display = "none";
  	}
    for (i = 0; i < bom.length; i++) {
    	bom[i].style.display = "none";
  	}
    for (i = 0; i < malv.length; i++) {
    	malv[i].style.display = "none";
  	}
	for (i = 0; i < gomi.length; i++) {
    	gomi[i].style.display = "initial";
  	}
	for (i = 0; i < chi.length; i++) {
    	chi[i].style.display = "none";
  	}
}

function chicle() {
	for (i = 0; i < choco.length; i++) {
    	choco[i].style.display = "none";
  	}
    for (i = 0; i < bom.length; i++) {
    	bom[i].style.display = "none";
  	}
    for (i = 0; i < malv.length; i++) {
    	malv[i].style.display = "none";
  	}
	for (i = 0; i < gomi.length; i++) {
    	gomi[i].style.display = "none";
  	}
	for (i = 0; i < chi.length; i++) {
    	chi[i].style.display = "initial";
  	}
}







// ---------Responsive-navbar-active-animation-----------
function test(){
	var tabsNewAnim = $('#navbarSupportedContent');
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();

	$(".hori-selector").css({
	  "top":itemPosNewAnimTop.top + "px", 
	  "left":itemPosNewAnimLeft.left + "px",
	  "height": activeWidthNewAnimHeight + "px",
	  "width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click","li",function(e){
	  $('#navbarSupportedContent ul li').removeClass("active");
	  $(this).addClass('active');
	  var activeWidthNewAnimHeight = $(this).innerHeight();
	  var activeWidthNewAnimWidth = $(this).innerWidth();
	  var itemPosNewAnimTop = $(this).position();
	  var itemPosNewAnimLeft = $(this).position();
	  $(".hori-selector").css({
		"top":itemPosNewAnimTop.top + "px", 
		"left":itemPosNewAnimLeft.left + "px",
		"height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	  });
	});
  }
  $(document).ready(function(){
	setTimeout(function(){ test(); });
  });
  $(window).on('resize', function(){
	setTimeout(function(){ test(); }, 500);
  });
  $(".navbar-toggler").click(function(){
	setTimeout(function(){ test(); });
  });


