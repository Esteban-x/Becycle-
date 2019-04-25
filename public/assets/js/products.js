
/* toggle "Catégories" */

window.addEventListener("DOMContentLoaded", function() {
    if (window.matchMedia("(max-width: 768px)").matches) {
        document.getElementById("collapseCategories").className = "collapse";
    } else {
        document.getElementById("collapseCategories").className = "collapse show";
    }
});


/* product-example- home */

window.addEventListener("resize", function() {
    if (window.matchMedia("(max-width: 768px)").matches) {
        document.querySelector(".product-example").className = "product-example";
    }else{document.querySelector(".product-example").className = "product-example media";
  }
    
  });