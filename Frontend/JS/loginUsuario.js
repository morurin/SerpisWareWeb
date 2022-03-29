const usernarmeElement = document.querySelector("#registroEmail");
const passwordElement = document.querySelector("#registrousername");
const botonLogin = document.querySelector("#login");

const loginHandler = (e) => {
  e.preventDefault();
  const credentials = {
    username: usernarmeElement.value,
    password: passwordElement.value,
  };
  console.log(credentials);
  // AQUI VIENE TODA LA LOGICA QUE SE HACE YA CUANDO SE TENGA UNA CONEXION AL BACKEND
};
botonLogin.addEventListener("click", loginHandler);
