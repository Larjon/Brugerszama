// Get Modal
var modal = document.getElementById('myModal');
    
// Get pseudoelement to open Modal
var btn = document.getElementById("sized");

// Get the <span> element to close Modal
var span = document.getElementsByClassName("close")[0];

// When user clicks button, open Modal
btn.onclick = function() {
   modal.style.display = "block";
   };

// When user clicks Close (x), close Modal
span.onclick = function() {
   modal.style.display = "none";
   };

// When user clicks anywhere outside of the Modal, close Modal
 window.onclick = function(event) {
    if (event.target == modal) {
       modal.style.display = "none";
       }
    }

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};


document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'admin.php';
};