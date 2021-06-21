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


//lazy load images using intersection observation
document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
});