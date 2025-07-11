gsap.to(".car", {
  scrollTrigger: {
    trigger: "#hdx",
    start: "top top",
    end: "+=800",
    scrub: true, // Smoothly link animation to scroll position
    markers: false // Show markers for debugging (remove in production)
  },
  scale: 1.2,
  x: -500,
  y: 100,
  duration: 1.5,
  ease: "power2.inOut"
});