document.addEventListener("scroll", function() {
    var navbar = document.getElementById("navbar");
    var scrollPosition = window.scrollY;

    if (scrollPosition > 100) {
        navbar.classList.add("visible");
    } else {
        navbar.classList.remove("visible");
    }
});

document.addEventListener("mouseover", function(event) {
    var navbar = document.getElementById("navbar");
    var hoverZone = document.querySelector(".header-hover-zone");

    if (hoverZone.contains(event.target)) {
        navbar.classList.add("visible");
    } else if (window.scrollY <= 100) {
        navbar.classList.remove("visible");
    }
});