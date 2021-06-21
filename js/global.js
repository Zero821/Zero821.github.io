$(document).ready(function(){
  //stop auto slide of carousel
  $('.carousel').carousel({
    interval: false,
  });
});

function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
  let x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
