const primerFormulario = document.querySelector(".formularioContainerGrande");
const nombreElement = primerFormulario.querySelector("#registronombre");
const apellidosElement = primerFormulario.querySelector("#registroApellidos");
const direccionElement = primerFormulario.querySelector("#registrodireccion");
const direccionAdicionalElement = primerFormulario.querySelector(
  "#registroDireccionAdicional"
);
const departamentoElement = primerFormulario.querySelector(
  "#registroListaDepartamento"
);
const ciudadElement = primerFormulario.querySelector("#registroCiudad");
const segundoFormulario = primerFormulario.nextElementSibling;
const emailElement = segundoFormulario.querySelector("#registroemail");
const telefonoElement = segundoFormulario.querySelector("#registrotelefono");
const tipoDocElement = segundoFormulario.querySelector(
  "#registroListaTipoDeDocumento"
);
const numDocElement = segundoFormulario.querySelector("#registrodocumento");
const claveElement = segundoFormulario.querySelector("#registrousername");
const registerHandler = (e) => {
  e.preventDefault();
  const datosEntrega = {
    nombres: nombreElement.value,
    apellidos: apellidosElement.value,
    direccion: direccionElement.value,
    direccionAdicional: direccionAdicionalElement.value,
    departamento: departamentoElement.value,
    ciudad: ciudadElement.value,
  };
  const datosUsuario = {
    email: emailElement.value,
    telefono: telefonoElement.value,
    tipoDocumento: tipoDocElement.value,
    numDocumento: numDocElement.value,
    clave: claveElement.value,
  };
  console.log(datosEntrega, datosUsuario);
  // AQUI VIENE TODA LA LOGICA QUE SE HACE YA CUANDO SE TENGA UNA CONEXION AL BACKEND
};
primerFormulario.parentElement.addEventListener("submit", registerHandler);
