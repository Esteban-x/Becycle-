
/* toggle "Catégories" */

window.addEventListener("DOMContentLoaded", function() {
    if (window.matchMedia("(max-width: 768px)").matches) {
        document.getElementById("collapseCategories").className = "collapse";
    } else {
        document.getElementById("collapseCategories").className = "collapse show";
    }
});