ScrollTrigger.create({
  trigger: ".aligned-us",
  start: () => "center center",
  endTrigger: ".partners",
  end: "center center",
  pin: true,
  pinType: "transform",
  pinnedContainer: ".wrap"
});