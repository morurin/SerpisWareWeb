//Ajustar el footer al final de la pagina si el contenido no es suficiente
let height = document.body.clientHeight;
const body = document.querySelector("body");
const bodyHeight = body.offsetHeight;
const footer = body.querySelector("footer");
if (height > bodyHeight) {
    console.log(height, bodyHeight)
  footer.style.marginTop = `${height - bodyHeight-5}px`;
}

window.onscroll = function () {
  scrollFunction();
};

let prevScrollpos = window.pageYOffset;

function scrollFunction() {
  let currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    document.getElementById("topnav").style.top = "0";
  } else {
    document.getElementById("topnav").style.top = "-65px";
  }
  prevScrollpos = currentScrollPos;
}
const closeBtn = document.querySelector(".closebtn");
closeBtn.addEventListener("click", closeNav);
const barBtn = document.querySelector(".bar");
barBtn.addEventListener("click", openSide);
function openSide() {
  document.getElementById("sidenav").style.width = "240px";
}

function closeNav() {
  document.getElementById("sidenav").style.width = "0";
}
