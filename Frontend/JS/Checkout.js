

console.log("aaaaaaaaaaaaaaaaa");

// Este array existe para iniciliazar el session storage, mas adelante cuando otras paginas agreguen productos se borrara hasta la fila 219
let arrayDeProductos = [
  {
    nombre: "Ryzen 7 5800",
    precio: 379.67,
    descripcion: "",
    ruta: "../../../Imágenes/ryzen-7-5800.png",
    id: 11,
    cantidad: 1,
  },
  {
    nombre: "WD Blue SN550 SSD 1TB NVMe M.2 PCIe Gen 3",
    precio: 95.43,
    descripcion: "",
    ruta: "../../../Imágenes/wd-blue-sn550-1tb.png",
    id: 9,
    cantidad: 1,
  },
  {
    nombre: "Kingston FURY Beast DDR4 2666 MHz 8GB CL16",
    precio: 32.14,
    descripcion: "",
    ruta: "../../../Imágenes/kingston-fury-beast-8.png",
    id: 23,
    cantidad: 1,
  },
  {
    nombre: "MSI MPG B550 GAMING PLUS",
    precio: 134.84,
    descripcion: "",
    ruta: "../../../Imágenes/msi-b550.png",
    id: 20,
    cantidad: 1,
  },
];
sessionStorage.setItem("Carrito", JSON.stringify(arrayDeProductos));

const onChangeInputHandler = (e) => {e.preventDefault();
  const inputElement =
    e.target.parentElement.parentElement.querySelector("input");
  const nameElement =
    e.target.parentElement.parentElement.parentElement.querySelector("a");
  let carrito = JSON.parse(sessionStorage.getItem("Carrito"));

  carrito.forEach((val) => {
    if (val.nombre === nameElement.textContent) {
      val.cantidad = parseInt(inputElement.value);
      inputElement.value = parseInt(val.cantidad);
    }
  });
  sessionStorage.setItem("Carrito", JSON.stringify(carrito));
  renderAll();
};
const onDeleteInputHandler = (e) => {
  e.preventDefault();
  const nameElement =
    e.target.parentElement.parentElement.parentElement.querySelector("a");
  let carrito = JSON.parse(sessionStorage.getItem("Carrito"));

  carrito.forEach((val, index, array) => {
    if (val.nombre === nameElement.textContent) {
      array.splice(index, 1);
    }
  });
  sessionStorage.setItem("Carrito", JSON.stringify(carrito));
  renderAll();
};
const onSubmitFormHandler = (e) => {
  e.preventDefault();
  console.log("hola");
};
const renderAll = () => {
  renderProducts();
  renderPrices();
  renderFooter();
};

const renderPrices = () => {
  let carrito = JSON.parse(sessionStorage.getItem("Carrito"));
  const precioProductos = carrito.reduce((cont, val) => {
    return parseFloat(cont) + parseFloat(val.precio) * parseFloat(val.cantidad);
  }, 0);
  const divPreciosProductos = document.querySelector("div.DescripcionCheckout");
  const pPreciosProductos = divPreciosProductos.querySelector("p");
  const pPrecioTotal = divPreciosProductos.querySelectorAll("p")[2];



  pPreciosProductos.textContent = "Precio de los productos: " + parseFloat(precioProductos).toFixed(2) + "€";
  pPrecioTotal.textContent =
    "Precio Total: " + parseFloat(precioProductos + 5).toFixed(2) +"€";
  if (precioProductos === 0) {
    divPreciosProductos.innerHTML = "<p>Agregue productos a su carrito</p>";
    divPreciosProductos.parentElement.querySelector("button").disabled = true;
  }
};
const renderProducts = () => {
  let carrito = JSON.parse(sessionStorage.getItem("Carrito"));
  const tableBody = document.querySelector("tbody");
  tableBody.textContent = "";

  const template = document.querySelector("template");
  carrito.forEach((val) => {
    let clon = template.content.cloneNode(true);
    clon.querySelector("a").textContent = val.nombre;
    // Mutacion del src de la imagen. Cuando se cambie los lugares donde estan las imagenes o el html se necesita cambiar esta parte
    let ruta = "../../../" + val.ruta;
    clon.querySelector("img").setAttribute("src", ruta);
    clon.querySelector("img").setAttribute("alt", val.nombre);
    clon.querySelector(".price").textContent = val.precio + "€"  ;
    clon.querySelector("input").value = val.cantidad;
    tableBody.appendChild(clon);
  });
  if (carrito.length === 0) {
    let pEl = document.createElement("p");
    pEl.textContent = "Agregue productos a su carrito";
    pEl.setAttribute("class", "price");
    tableBody.appendChild(pEl);
  }
  addEventListenersToButtons();
};
const addEventListenersToButtons = () => {
  const nodeListInputs = document.querySelectorAll("input.checkoutInput");
  const nodeListButtonsAction = document.querySelectorAll("button");
  const nodeArrayButtons = Array.prototype.slice.call(nodeListButtonsAction);
  const nodeArrayInputs = Array.prototype.slice.call(nodeListInputs);

  nodeArrayButtons.forEach((val) => {
    if (val.textContent === "Cambiar") {
      val.addEventListener("click", onChangeInputHandler);
    } else if (val.textContent === "Eliminar") {
      val.addEventListener("click", onDeleteInputHandler);
    } else if (val.textContent === "Proceder al Checkout") {
      val.addEventListener("click", onSubmitFormHandler);
    }
  });
};
renderAll();


