

// preloader
const loader = document.getElementById("preloader");
window.addEventListener("load", () => {
  loader.style.display = "none";
});



//   betslipsection
let betClick = document.getElementById("bet");
let betSlipt = document.querySelector(".betslip");
let svgClick = document.querySelector(".fill");
let backDrop = document.querySelector('.infodrop')

betClick.addEventListener("click", clicked);
function clicked() {
  betSlipt.style.display = "block";
  betClick.style.display = "none";
  backDrop.style.display = 'block'
}
backDrop.addEventListener('click',click)
svgClick.addEventListener("click", click);
function click() {
  betSlipt.style.display = "none";
  betClick.style.display = "block";
  backDrop.style.display= 'none'
}

const showContent = document.querySelector('.btn-kid')
const showContent2 = document.querySelector('.btn-kid2')
const showContent3 = document.querySelector('.btn-kid3')
const displayItem = document.querySelector('.kid-first')
const displayItem2 = document.querySelector('.kid-sec')
const displayItem3 = document.querySelector('.kid-third')

showContent.addEventListener('click',()=>{
  console.log("romeoscript")
    displayItem.style.display = 'block'
    displayItem2.style.display = 'none'
    displayItem3.style.display = 'none'
})
showContent2.addEventListener('click',()=>{
  console.log("romeoscript")
    displayItem.style.display = 'none'
    displayItem2.style.display = 'block'
    displayItem3.style.display = 'none'
})
showContent3.addEventListener('click',()=>{
  console.log("romeoscript")
    displayItem.style.display = 'none'
    displayItem2.style.display = 'none'
    displayItem3.style.display = 'block'
})
console.log("romeoscript")

