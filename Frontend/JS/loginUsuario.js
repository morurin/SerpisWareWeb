
var modal = document.getElementById("popup-box");



//Modal registroo

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