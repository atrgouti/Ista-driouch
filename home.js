const myNavBar = document.querySelector(".HomePage");
const openMenu = document.querySelector(".openMenu");
const closeMenu = document.querySelector(".closeMenu");
const sideBar = document.querySelector(".sideBar");
openMenu.addEventListener("click", (event) => {
  event.stopPropagation(); // Prevent the click event from propagating
  myNavBar.classList.add("active");
});
closeMenu.addEventListener("click", () => {
  myNavBar.classList.remove("active");
});

// Add click event listener to the entire document
document.addEventListener("click", (event) => {
  // Check if the clicked element is not within the menu
  if (
    !sideBar.contains(event.target) &&
    myNavBar.classList.contains("active")
  ) {
    myNavBar.classList.remove("active");
  }
});
