let svg= document.querySelector(".svg-bg");
let path= svg.querySelector("path");
const pathLength = path.getTotalLength();
console.log(pathLength);

gsap.set(path, {strokeDasharray : pathLength});

gsap.fromTo(
  path,
  {
    strokeDashoffset: pathLength,
  },
  {
    strokeDashoffset: 0,
    duration: 10,
    ease: "none",
    scrollTrigger: {
      trigger: ".svg-bg",
      start: "top top",
      end: "bottom bottom",
      scrub: 1,
    },
  }
);


const app = {
  init: function() {
    console.log('app init - si besoin de JS ;)');
  },
};

document.addEventListener('DOMContentLoaded', app.init);