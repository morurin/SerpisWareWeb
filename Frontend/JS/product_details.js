

var modal = document.getElementById("popup-box");
const checkoutDiv = document.querySelector("nav");

var addButton = checkoutDiv.querySelector(".add");

function shopping_car() {
  let carrito = JSON.parse(sessionStorage.getItem("Carrito"));
  if (!carrito) {
    document.getElementById("car").textContent = 0;
    return;
  } else {
    const cantidadProductos = carrito.reduce((cont, val) => {
      return parseInt(cont) + parseInt(val.cantidad);
    }, 0);
    document.getElementById("car").textContent = cantidadProductos;
  }
}

document.addEventListener("click",
function(event){
  
  if(event.target == modal){
    closeModal();
  }
},
false
)

function showModal() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function span() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it


function closeModal(event) {
  document.querySelector(".modal").style.display = "none"
}
