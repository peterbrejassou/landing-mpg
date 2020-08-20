document.addEventListener("DOMContentLoaded", function () {
  // Animate mobile menu button and display mobile menu
  document
    .getElementById("mobile-menu-btn")
    .addEventListener("click", function () {
      // Change l'état du bouton
      this.classList.toggle("open");
      // Affiche ou masque le menu mobile
      var mobileMenu = document.getElementById("menu");
      mobileMenu.style.display =
        mobileMenu.style.display === "block" ? "none" : "block";
      // Overflow hidden sur le body pour bloquer le scroll
      document.body.classList.toggle("menu-active");
    });

  document
    .querySelector(".input-effect input")
    .addEventListener("focusout", function () {
      if (this.value != "") {
        this.classList.add("has-content");
      } else {
        this.classList.remove("has-content");
      }
    });
});
