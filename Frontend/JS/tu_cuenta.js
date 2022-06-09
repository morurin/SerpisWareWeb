var defaultTap = document.getElementById("default");
defaultTap.style.display ="block"
function openMenu(evt, menu) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(menu).style.display = "block";
    evt.currentTarget.className += " active";
  }



  

var modalAdress = document.getElementById("adressM");
var modalName = document.getElementById("nameM")
var modalEmail = document.getElementById("emailM")
var modalNumber = document.getElementById("numberM")
var modalPassword = document.getElementById("passwordM")


document.addEventListener("click",
function(event){
  
  if(event.target == modalName || event.target == modalAdress
     || event.target == modalEmail || event.target == modalNumber || event.target == modalPassword){
    closeModal();
  }
  //if([modalAdress, modalName, modalEmail].indexOf(event.target)){
  //  closeModal();
  //}
  
},
false
)

function showModalA() {
  modalAdress.style.display = "block";
}

function showModalN() {
  modalName.style.display = "block";
}

function showModalE() {
  modalEmail.style.display = "block";
}

function showModalNu() {
  modalNumber.style.display = "block";
}

function showModalP() {
  modalPassword.style.display = "block";
}




// When the user clicks anywhere outside of the modal, close it
function closeModal(event) {
  document.querySelector(".adress-modal").style.display = "none";
  document.querySelector(".name-modal").style.display = "none";
  document.querySelector(".email-modal").style.display = "none";
  document.querySelector(".number-modal").style.display = "none";
  document.querySelector(".password-modal").style.display = "none";
}