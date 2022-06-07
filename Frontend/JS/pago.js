

var modalAdress = document.getElementById("adressM");
var modalPayment = document.getElementById("paymentM");


document.addEventListener("click",
function(event){
  
  if(event.target == modalAdress || event.target == modalPayment){
    closeModal();
  }
},
false
)

function showModalA() {
  modalAdress.style.display = "block";
}

function showModalP() {
    modalPayment.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
function span() {
  modalAdress.style.display = "none";
  modalPayment.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
function closeModal(event) {
  document.querySelector(".payment-modal").style.display = "none";
  document.querySelector(".adress-modal").style.display = "none";
}