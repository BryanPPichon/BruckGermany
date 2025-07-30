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




$(document).on('scroll',function(){
    if(!detectDevice()){
        if($(document).scrollTop()>=$('#aboutus').offset().top && $(document).scrollTop()<$('#partners').offset().top){ //assuming the about section has an id called about (#about)
            $('#logob').attr("src","img/bruck_200.png");
            $('a.nav-link').css("color","var(--dark)!important");
        }
        else if($(document).scrollTop()>=$('#visiontxt').offset().top && $(document).scrollTop()<$('#mision').offset().top){
            $('#logob').attr("src","img/bruck_200.png");
            $('a.nav-link').css("color","var(--dark)!important");
        }
        else{
            $('#logob').attr("src","img/200_B&R.png");
            $('a.nav-link').css("color","var(--white)!important");
        }
    }
});