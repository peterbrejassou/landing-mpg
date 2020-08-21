$(document).ready(function() {
  // Animate mobile menu button and display mobile menu
  $("#mobile-menu-btn").click(function () {
      // Change l'état du bouton
      $(this).toggleClass("open");
      // Affiche ou masque le menu mobile
      var mobileMenu = $("#menu");
      if($("#menu").is(":hidden")){
        $("#menu").show();
      } else {
        $("#menu").hide();
      }
      // Overflow hidden sur le body pour bloquer le scroll
      $(document).body.toggleClass("menu-active")
    });

  $(".input-effect input").focusout(function () {
      if (this.value != "") {
        this.classList.add("has-content");
      } else {
        this.classList.remove("has-content");
      }
    });

  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    dots: false,
    fade: true,
    infinite: true,
    pauseOnHover: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });
});

