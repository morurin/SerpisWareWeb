const MockupDeArrayDeProductos = [
  {
    nombre: "Barriletes Bombones",
    precio: 4900,
    descripcion: "Barriletes",
    ruta: "../../Imágenes/Barrilete_Bombones.png",
    id: 1,
  },
  {
    nombre: "Bianchi Chocolate",
    precio: 11900,
    descripcion: "Bianchis",
    ruta: "../../Imágenes/Bianchi_Chocolate.png",
    id: 2,
  },
  {
    nombre: "Boa Gomitas",
    precio: 19900,
    descripcion: "Sabrosa goma con forma de boa",
    ruta: "../../Imágenes/Boa_Gomitas.png",
    id: 3,
  },
  {
    nombre: "BonBonBum Bombones",
    precio: 21900,
    descripcion: "Sabrosa goma con forma de boa",
    ruta: "../../Imágenes/BonBonBum_Bombones.png",
    id: 4,
  },
  {
    nombre: "BonBonBun Chicles",
    precio: 23900,
    descripcion: "Sabrosa goma con forma de boa",
    ruta: "../../Imágenes/BonBonBum_Chicles.png",
    id: 5,
  },
  {
    nombre: "Bubbaloo Chicles",
    precio: 16900,
    descripcion: "Sabrosa goma con forma de boa",
    ruta: "../../Imágenes/Bubbaloo_Chicles.png",
    id: 6,
  },
  {
    nombre: "Burbujet Chocolate",
    precio: 25900,
    descripcion: "Sabrosa goma con forma de boa",
    ruta: "../../Imágenes/Burbujet_Chocolate.png",
    id: 7,
  },
  {
    nombre: "Cables Gomitas",
    precio: 14900,
    descripcion: "Sabrosa goma con forma de boa",
    ruta: "../../Imágenes/Cables_Gomitas.jpg",
    id: 8,
  },
  {
    nombre: "Chocobreak",
    precio: 23900,
    descripcion: "Extravagante Chocolate relleno de crema frutal",
    ruta: "../../Imágenes/ChocoBreak_Chocolate.png",
    id: 9,
  },
  {
    nombre: "ChocoFresa Masmelos",
    precio: 12900,
    descripcion: "Sabrosa goma con forma de boa",
    ruta: "../../Imágenes/ChocoFresa_Masmelos.png",
    id: 10,
  },
  {
    nombre: "Chocomelos",
    precio: 16900,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Chocomelos_Masmelos.png",
    id: 11,
  },
  {
    nombre: "Gomitas Gusanos",
    precio: 17900,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Gusanos_Gomitas.png",
    id: 12,
  },
  {
    nombre: "Hershey Chocolate",
    precio: 18500,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Hershey_Chocolate.jpg",
    id: 13,
  },
  {
    nombre: "IceCream Masmelos",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/IceCream_Masmelos.png",
    id: 14,
  },
  {
    nombre: "Kinder Chocolate",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Kinder_Chocolate.png",
    id: 15,
  },
  {
    nombre: " Masmelos Masmelos",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Masmelos_Masmelos.png",
    id: 16,
  },
  {
    nombre: "Millows Masmelos",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Millows_Masmelos.png",
    id: 17,
  },
  {
    nombre: "Pirulito Bombones",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Pirulito_Bombones.png",
    id: 18,
  },
  {
    nombre: "Gomitas Sabores Surtidos",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Sabores_Gomitas.jpg",
    id: 19,
  },
  {
    nombre: "Splash gomitas",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Splash_Gomitas.jpg",
    id: 20,
  },
  {
    nombre: "Splot Chicles",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Splot_Chicles.jpg",
    id: 21,
  },
  {
    nombre: "Chicles Superacidos",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/SuperAcid_Chicles.jpg",
    id: 22,
  },
  {
    nombre: "Bombones Supercoco",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Supercoco_Bombones.png",
    id: 23,
  },
  {
    nombre: "Tumix Chicles",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Tumix_Chicles.jpg",
    id: 24,
  },
  {
    nombre: "Yogueta Bombones*",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "../../Imágenes/Yogueta_Bombones.jpg",
    id: 25,
  },

  {
    nombre: "dummy",
    precio: 50,
    descripcion: "Este producto solo existe para probar la pagina",
  },
];
// Este array existe para iniciliazar el session storage, mas adelante cuando otras paginas agreguen productos se borrara hasta la fila 219
let arrayDeProductos = [
  {
    nombre: "Chocomelos",
    precio: 16900,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "Imágenes/Chocomelos_Masmelos.png",
    id: 11,
    cantidad: 1,
  },
  {
    nombre: "Chocobreak",
    precio: 23900,
    descripcion: "Extravagante Chocolate relleno de crema frutal",
    ruta: "Imágenes/ChocoBreak_Chocolate.png",
    id: 9,
    cantidad: 1,
  },
  {
    nombre: "Bombones Supercoco",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "Imágenes/Supercoco_Bombones.png",
    id: 23,
    cantidad: 1,
  },
  {
    nombre: "Splash gomitas",
    precio: 14700,
    descripcion: "Delicioso masmelos cubierto de chocolate",
    ruta: "Imágenes/Splash_Gomitas.jpg",
    id: 20,
    cantidad: 1,
  },
];
sessionStorage.setItem("Carrito", JSON.stringify(arrayDeProductos));

const onChangeInputHandler = (e) => {
  e.preventDefault();
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
const renderFooter = () => {
  let height = window.innerHeight;
  const body = document.body;  
  const bodyHeight = body.offsetHeight;
  const footer = body.querySelector("footer");
  console.log(bodyHeight, height);
  if (height > bodyHeight) {
    footer.style.marginTop = `${height - bodyHeight - 5}px`;
    return
  }
  footer.style.marginTop ='3rem'
};
const renderPrices = () => {
  let carrito = JSON.parse(sessionStorage.getItem("Carrito"));
  const precioProductos = carrito.reduce((cont, val) => {
    return parseInt(cont) + parseInt(val.precio) * parseInt(val.cantidad);
  }, 0);
  const divPreciosProductos = document.querySelector("div.DescripcionCheckout");
  const pPreciosProductos = divPreciosProductos.querySelector("p");
  const pPrecioTotal = divPreciosProductos.querySelectorAll("p")[2];
  pPreciosProductos.textContent = "Precio Productos: $" + precioProductos;
  pPrecioTotal.textContent =
    "Precio Total: $" + parseInt(precioProductos + 9000);
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
    clon.querySelector(".price").textContent = "$" + val.precio;
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

//Ajustar el footer al final de la pagina si el contenido no es suficiente
