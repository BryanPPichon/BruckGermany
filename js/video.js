$('.owl-carousel').owlCarousel({
        items:1,
<<<<<<< Updated upstream
        merge:true,
        loop:false,
        margin:10,
        video:true,
=======
        merge:false,
        loop:true,
        margin:40,
        autoplay:true,
        video:false,
>>>>>>> Stashed changes
        lazyLoad:true,
        center:true,
        responsive:{
            520:{
                items:1
            },
            600:{
                items:1
            }
        }
    })