gsap.set(".ball", {xPercent: -50, yPercent: -50});

let targets = gsap.utils.toArray(".ball"); 

window.addEventListener("mousemove", e => {
  gsap.to(targets, {
    duration: 0.35,
    x: e.pageX,
    y: e.pageY,
    ease: "none",
    overwrite: "auto",
    stagger: 0.035,
  });
    $( "#ldx" ).text( "X: " + event.pageX + ", Y: " + event.pageY );
    $( "#hdx" ).text( "X: " + event.pageX + ", Y: " + event.pageY );
});