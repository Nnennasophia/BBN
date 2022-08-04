//show update

const showContent = document.querySelector(".btn-kid");
const showContent2 = document.querySelector(".btn-kid2");
const showContent3 = document.querySelector(".btn-kid3");
const displayItem = document.querySelector(".kid-first");
const displayItem2 = document.querySelector(".kid-sec");
const displayItem3 = document.querySelector(".kid-third");

showContent.addEventListener("click", () => {
  console.log("romeoscript");
  displayItem.style.display = "block";
  displayItem2.style.display = "none";
  displayItem3.style.display = "none";
});
showContent2.addEventListener("click", () => {
  console.log("romeoscript");
  displayItem.style.display = "none";
  displayItem2.style.display = "block";
  displayItem3.style.display = "none";
});
showContent3.addEventListener("click", () => {
  console.log("romeoscript");
  displayItem.style.display = "none";
  displayItem2.style.display = "none";
  displayItem3.style.display = "block";
});
console.log("romeoscript");