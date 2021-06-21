$(document).ready(function(){
  $('.horiz-img').on('click', function() {
    //indicate the modal is being shown
    $('#img01').addClass('shown');
  });

  $('#modal01').click(function(){ 
    $('#img01').removeClass('shown');
    $(this).css('display', 'none');
  });

  $('html').keydown(function(e) {
    if ($('#img01').hasClass('shown')) {
      let shownImg= $('#img01').attr('src');
      let subpath = shownImg.substring(500, shownImg.indexOf('img'));
      let smallVersion = $("img[src$='./"+subpath+"']");
      console.log(smallVersion.attr('src'));
      if (e.keyCode == 39) {
        let nextImg = smallVersion.next();
        $('#img01').attr('src', nextImg.attr('src'));
      }
      if (e.keyCode == 37) {
        let nextImg = smallVersion.prev();
        $('#img01').attr('src', nextImg.attr('src'));
      }
    }
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