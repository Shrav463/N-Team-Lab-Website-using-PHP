const hero = document.getElementById("hero");
const images = [
  labData.themeUrl + "/scope.png",
  labData.themeUrl + "/Slide2.png"
];
let current = 0;

hero.style.backgroundImage = `url('${images[current]}')`;

setInterval(() => {
  current = (current + 1) % images.length;
  hero.style.backgroundImage = `url('${images[current]}')`;
}, 3000);
