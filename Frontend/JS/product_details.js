const modal = document.getElementById("popup-box");
const checkoutDiv = document.querySelector("nav");

const addButton = checkoutDiv.querySelector(".add");

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

function showModal() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function span() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function () {
  closeModal();
};

function closeModal(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
