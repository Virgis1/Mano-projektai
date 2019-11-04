// menu

  $(".nav-item a").click(function(link) {
    link.preventDefault();
    let target = $(this).attr("href");
    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $(target).offset().top
        },
        2000
      );
    $(".navbar-toggler").toggleClass("change");
    $("#myNavbar").collapse("hide");
  });

// show cart
document.getElementById("cart-info").addEventListener("click", function() {
  var cart = document.getElementById("cart");
  cart.classList.toggle("show-cart");
});
// filter buttons
(function() {
  var filterBtn = document.querySelectorAll(".filter-btn");

  filterBtn.forEach(function(btn) {
    btn.addEventListener("click", function(event) {
      event.preventDefault();
      var value = event.target.dataset.filter;
      var items = document.querySelectorAll(".store-item");
      items.forEach(function(item) {
        if (value === "all") {
          item.style.display = "block";
        } else {
          if (item.classList.contains(value)) {
            item.style.display = "block";
          } else {
            item.style.display = "none";
          }
        }
      });
    });
  });
})();


