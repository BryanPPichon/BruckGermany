const st = SplitText.create(".leteer", { type: "chars", charsClass: "char" });

st.chars.forEach((char) => {
  gsap.set(char, { attr: { "data-content": char.innerHTML } });
});

const textBlock = document.querySelector(".texting");

textBlock.onpointermove = (e) => {
  st.chars.forEach((char) => {
    const rect = char.getBoundingClientRect();
    const cx = rect.left + rect.width / 2;
    const cy = rect.top + rect.height / 2;
    const dx = e.clientX - cx;
    const dy = e.clientY - cy;
    const dist = Math.sqrt(dx * dx + dy * dy);
    if (dist < 15)
      gsap.to(char, {
        overwrite: true,
        duration: 1.2 -dist / 15,
        scrambleText: {
          text: char.dataset.content,
          chars: ".:",
          speed: 0.5,
        },
        ease:'none'
      });
  });
};

const textBlock2 = document.querySelector(".texting2");

textBlock2.onpointermove = (e) => {
  st.chars.forEach((char) => {
    const rect = char.getBoundingClientRect();
    const cx = rect.left + rect.width / 2;
    const cy = rect.top + rect.height / 2;
    const dx = e.clientX - cx;
    const dy = e.clientY - cy;
    const dist = Math.sqrt(dx * dx + dy * dy);
    if (dist < 15)
      gsap.to(char, {
        overwrite: true,
        duration: 1.2 -dist / 15,
        scrambleText: {
          text: char.dataset.content,
          chars: ".:",
          speed: 0.5,
        },
        ease:'none'
      });
  });
};