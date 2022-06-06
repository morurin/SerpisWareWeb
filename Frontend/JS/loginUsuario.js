const usernarmeElement = document.querySelector("#registroEmail");
const passwordElement = document.querySelector("#registrousername");
const botonLogin = document.querySelector("#login");

var modal = document.getElementById("popup-box");

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





//Modal registro

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