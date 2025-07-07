gsap.to(".content-loader-text h1", {
  opacity: 1,
  delay: 0.5,
  y: 0,
  duration: 1.25,
  stagger: { each: 0.05, from: "random" },
  ease: "expo.out"
});
const tll = gsap.timeline({
  paused: true
});
tll.to("#percent, #bar", {
  duration: 0.9,
  opacity: 0,
  zIndex: -1
});

let width = 0;
let bar = document.getElementById("bar");
let id;
function move() {
  id = setInterval(frame, 25);
}
function frame() {
  if (width >= 100) {
    clearInterval(id);
    tll.play();
    gsap.to(".content-loader-text h1", {
      opacity: 0,
      delay: 0.4,
      duration: 1.25,
      stagger: { each: 0.05, from: "random" },
      ease: "expo.out"
    });
    gsap.to(".loader", {
      opacity: 0,
      delay: 1.0,
      duration: 1.25,
      ease: "power1.inOut"
    });
    gsap.to(".container-loader", {
      delay: 2.25,
      duration: 0.3,
      display: "none",
      ease: "power1.inOut"
    });
    gsap.from(".content-loaded li", {
      delay: 2,
      duration: 1.3,
      opacity: 0,
      y: "100%",
      ease: "power4.out",
      stagger: 0.2,
    });
  } else {
    width++;
    gsap.to(bar, {
      width: width + "%",
      duration: 2.5,
      ease: "expo.out"
    });
    document.getElementById("percent").innerHTML = "( " + width + "%" + " )";
  }
}
document.addEventListener("DOMContentLoaded", () => {
  move();
});
