const icon = document.getElementById("hamburger-menu");
const hamburger = document.getElementById("container-hamburger");
let status = false;
icon.addEventListener("click", () => {
  if (!status) {
    hamburger.style.position = "absolute";
    hamburger.style.top = "5rem";
    hamburger.style.right = "0";
    hamburger.style.display = "flex";
    status = true;
  } else {
    hamburger.style.display = "none";
    hamburger.style.right = "-1000rem";
    status = false;
  }
});
