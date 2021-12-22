// кноп верх
$(function() {
    $('.scrollup').click(function() {
      $("html, body").animate({
        scrollTop:0
      },1000);
    })
  })
  $(window).scroll(function() {
    if ($(this).scrollTop()>200) {
      $('.scrollup').fadeIn();
    }
    else {
      $('.scrollup').fadeOut();
    }
  });

// карусель

var angle=0;
function galleryspin(sign) { 
spinner = document.querySelector("#spinner");
if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
}

