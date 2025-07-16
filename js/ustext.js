$(document).ready(function () {
  if ($(window).width() > 1024) { // check width of window
    ScrollTrigger.create({
      trigger: ".aligned-us",
      start: () => "center center",
      endTrigger: ".partners",
      end: "center center",
      pin: true,
      pinType: "transform",
      pinnedContainer: ".wrap"
    });
  }
});