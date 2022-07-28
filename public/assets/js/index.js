// preloader
const loader = document.getElementById("preloader");
window.addEventListener("load", () => {
  loader.style.display = "none";
});



//   betslipsection
let betClick = document.getElementById("bet");
let betSlipt = document.querySelector(".betslip");
let svgClick = document.querySelector(".fill");
let backDrop = document.querySelector('.backdrop')

betClick.addEventListener("click", clicked);
function clicked() {
  betSlipt.style.display = "block";
  betClick.style.display = "none";
  backDrop.style.display = 'block'
}
svgClick.addEventListener("click", click);
function click() {
  betSlipt.style.display = "none";
  betClick.style.display = "block";
  backDrop.style.display= 'none'
}
backDrop.addEventListener('click',click)


