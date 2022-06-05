

var cpu = document.getElementsByClassName("procesadores");
var motherboard = document.getElementsByClassName("placasBase");
var ram = document.getElementsByClassName("ram");
var graphic = document.getElementsByClassName("graficas");
var disk = document.getElementsByClassName("discos")
var other = document.getElementsByClassName("otros")
var i;

console.log("a");


function general() {
	for (i = 0; i < cpu.length; i++) {
     cpu[i].style.display = "initial";
  	}
    for (i = 0; i < motherboard.length; i++) {
    	motherboard[i].style.display = "initial";
  	}
    for (i = 0; i < ram.length; i++) {
    	ram[i].style.display = "initial";
  	}
	for (i = 0; i < graphic.length; i++) {
    	graphic[i].style.display = "initial";
  	}
	for (i = 0; i < disk.length; i++) {
    	disk[i].style.display = "initial";
  	}
	for (i = 0; i < other.length; i++) {
	other[i].style.display = "initial";
	}
}

function procesadores() {
	for (i = 0; i < cpu.length; i++) {
     cpu[i].style.display = "initial";
  	}
    for (i = 0; i < motherboard.length; i++) {
    	motherboard[i].style.display = "none";
  	}
    for (i = 0; i < ram.length; i++) {
    	ram[i].style.display = "none";
  	}
	for (i = 0; i < graphic.length; i++) {
    	graphic[i].style.display = "none";
  	}
	for (i = 0; i < disk.length; i++) {
    	disk[i].style.display = "none";
  	}
	for (i = 0; i < other.length; i++) {
	other[i].style.display = "none";
	}
}

function placasBase() {
	for (i = 0; i < cpu.length; i++) {
     cpu[i].style.display = "none";
  	}
    for (i = 0; i < motherboard.length; i++) {
    	motherboard[i].style.display = "initial";
  	}
    for (i = 0; i < ram.length; i++) {
    	ram[i].style.display = "none";
  	}
	for (i = 0; i < graphic.length; i++) {
    	graphic[i].style.display = "none";
  	}
	for (i = 0; i < disk.length; i++) {
    	disk[i].style.display = "none";
  	}
	for (i = 0; i < other.length; i++) {
	other[i].style.display = "none";
	}
}

function ramu() {
	for (i = 0; i < cpu.length; i++) {
     cpu[i].style.display = "none";
  	}
    for (i = 0; i < motherboard.length; i++) {
    	motherboard[i].style.display = "none";
  	}
    for (i = 0; i < ram.length; i++) {
    	ram[i].style.display = "initial";
  	}
	for (i = 0; i < graphic.length; i++) {
    	graphic[i].style.display = "none";
  	}
	for (i = 0; i < disk.length; i++) {
    	disk[i].style.display = "none";
  	}
	for (i = 0; i < other.length; i++) {
	other[i].style.display = "none";
	}
}

function graficas() {
	for (i = 0; i < cpu.length; i++) {
     cpu[i].style.display = "none";
  	}
    for (i = 0; i < motherboard.length; i++) {
    	motherboard[i].style.display = "none";
  	}
    for (i = 0; i < ram.length; i++) {
    	ram[i].style.display = "none";
  	}
	for (i = 0; i < graphic.length; i++) {
    	graphic[i].style.display = "initial";
  	}
	for (i = 0; i < disk.length; i++) {
    	disk[i].style.display = "none";
  	}
	for (i = 0; i < other.length; i++) {
	other[i].style.display = "none";
	}
}

function discos() {
	for (i = 0; i < cpu.length; i++) {
     cpu[i].style.display = "none";
  	}
    for (i = 0; i < motherboard.length; i++) {
    	motherboard[i].style.display = "none";
  	}
    for (i = 0; i < ram.length; i++) {
    	ram[i].style.display = "none";
  	}
	for (i = 0; i < graphic.length; i++) {
    	graphic[i].style.display = "none";
  	}
	for (i = 0; i < disk.length; i++) {
    	disk[i].style.display = "initial";
  	}
	for (i = 0; i < other.length; i++) {
		other[i].style.display = "none";
		}	  

}

function otros() {
for (i = 0; i < cpu.length; i++) {
	cpu[i].style.display = "none";
	}
for (i = 0; i < motherboard.length; i++) {
	motherboard[i].style.display = "none";
	}
for (i = 0; i < ram.length; i++) {
	ram[i].style.display = "none";
	}
for (i = 0; i < graphic.length; i++) {
	graphic[i].style.display = "none";
	}
for (i = 0; i < disk.length; i++) {
	disk[i].style.display = "none";
	}
for (i = 0; i < other.length; i++) {
	other[i].style.display = "initial";
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


