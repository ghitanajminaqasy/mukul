'use strict';


// function tampil() {
//     var name = document.getElementById("name").value
//     var email = document.getElementById("email").value
//     var message = document.getElementById("message").value
//     document.getElementById("thanks").innerHTML="<b>Thank for your response. Your data recorded as aspiring athlete:</b>"
//     document.getElementById("contactme").innerHTML="Please contact me through : " + "<b>" + email + "</b>"
//     document.getElementById("saysomething").innerHTML="I want to say about : " + "<br>" + "<b>" + message + "</b>"
// }

const navToggleBtn = document.querySelector("[data-nav-toggle-btn]");
const header = document.querySelector("[data-header]");

navToggleBtn.addEventListener("click", function () {
  header.classList.toggle("active");
});