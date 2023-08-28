<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./navStyle.css" /> -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Kumbh+Sans&family=Poppins:ital,wght@0,300;1,200&family=Roboto:wght@300;400&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins";
  overflow-x: hidden;
}
/* working on the logo area  */
.fullLogoArea {
  width: 100%;
  position: relative;
  background-color: #0470cc;
}
.logoArea {
  width: 80%;
  margin: 0px auto;
  display: flex;
  justify-content: space-between;
  max-width: 1800px;
}
.logoArea {
  padding-top: 30px;
  padding-bottom: 70px;
}
.logoArea .logo img {
  height: 100px;
}
.schoolInfo {
  display: flex;
}
.callUs {
  display: flex;
  align-items: center;
  color: white;
  margin: 0px 20px;
}
.callUs img {
  height: 25px;
  background-color: #005199;
  padding: 5px;
  margin: 10px;
}
.emailUs {
  display: flex;
  align-items: center;
  color: white;
}
.emailUs img {
  height: 25px;
  background-color: #005199;
  padding: 5px;
  margin: 10px;
}

/* working on the navLinks  */
nav {
  width: 80%;
  background-color: white;
  margin: 0px auto;
  height: 100px;
  border-radius: 10px;
  transform: translateY(-50%);
  display: flex;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  overflow-y: hidden;
  z-index: 2;
  position: absolute;
  left: 0;
  right: 0;
  top: 200px;
  max-width: 1800px;
}
nav .openMenu {
  height: 30px;
  margin-right: 20px;
  cursor: pointer;
}
nav .logo {
  height: 50px;
  margin-left: 20px;
  display: none;
}
nav ul {
  display: flex;
  list-style: none;
  margin-left: 20px;
  font-weight: bold;
}
nav ul li {
  padding: 30px;
}
nav ul li a {
  text-decoration: none;
  color: rgb(49, 49, 49);
  position: relative;
}
nav ul li a::before {
  content: "";
  height: 1.5px;
  width: 0%;
  background-color: #005199;
  position: absolute;
  top: 40px;
  left: -20%;
  transition: 0.1s ease-in;
  text-align: center;
}
nav ul li a:hover::before {
  width: 140%;
}

/* working on the side bar  */
.sideBar {
  position: fixed;
  right: 0;
  top: 0;
  width: 20%;
  background-color: rgb(40, 40, 40);
  height: 100vh;
  overflow-y: auto;
  transition: transform 0.3s ease-in-out; /* Add transition property */
  transform: translateX(100%); /* Move the sidebar out of the screen */
  z-index: 8;
}
.sideBar .closeMenu {
  height: 20px;
}
.myNavBar.active .sideBar {
  transform: translateX(0%);
}
.myNavBar.active .fullLogoArea {
  filter: brightness(0.7);
}

.myNavBar.active nav {
  filter: brightness(0.7);
}
.sideBar .closeMenu {
  position: absolute;
  margin: 20px;
  cursor: pointer;
}
.sideBar .links {
  margin-left: 20px;
  /* this parametre is for media query */
  margin-top: 20%;
  display: none;
}
.sideBar .links ul {
  list-style: none;
}
.sideBar .links ul li {
  padding: 20px;
}
.sideBar .links ul li a {
  text-decoration: none;
  color: white;
  position: relative;
}

/* still working on the side bar but in the news section  */
.sideBar .latestNews h3 {
  color: rgb(224, 222, 222);
  margin-top: 20%;
}
.sideBar .line {
  height: 1px;
  width: 100%;
  background-color: rgb(124, 124, 124);
  margin: 10px 0px;
}
.sideBar .latestNews {
  margin-left: 20px;
}
.sideBar .newNews {
  display: flex;
  margin: 10px 0px;
}
.sideBar .newNews img {
  width: 30%;
}
.sideBar .newNews .newsInfo {
  width: 65%;
  margin: 10px;
  color: rgb(224, 222, 222);
}
.sideBar a {
  text-decoration: none;
  color: rgb(224, 222, 222);
}

@media screen and (max-width: 700px) {
  .fullLogoArea {
    display: none;
  }
  nav {
    transform: translateY(0%);
    width: 100%;
    border-radius: 0px;
    position: static;
  }
  nav .logo {
    display: block;
  }
  nav ul {
    display: none;
  }
  .sideBar {
    width: 80%;
  }
  .sideBar .links {
    display: block;
  }
}

    </style>
  </head>
  <body>
    <div class="myNavBar">
      <div class="fullLogoArea">
        <div class="logoArea">
          <div class="logo">
            <img src="./istalogo.png" alt="" />
          </div>
          <div class="schoolInfo">
            <div class="callUs">
              <img src="./Navphotos/icons8-call-50 (1).png" alt="" />
              <div class="info">
                <p>Call Us</p>
                <p style="font-size: 18px">0652876984</p>
              </div>
            </div>
            <div class="emailUs">
              <img src="./Navphotos/icons8-email-50.png" alt="" />
              <div class="info">
                <p>Email Us</p>
                <p style="font-size: 18px">istadriouch@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <img class="logo" src="./Navphotos/BlueLogo.png" alt="" />
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="#">Courses</a></li>
          <li><a href="./news.php">News</a></li>
          <li><a href="./events.php">Events</a></li>
          <li><a href="#">Calendars</a></li>
          <li><a href="#">Inscription</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
        <img class="openMenu" src="./Navphotos/icons8-menu-50 (1).png" alt="" />
      </nav>
      <div class="sideBar">
        <img class="closeMenu" src="./Navphotos/icons8-effacer-30.png" alt="" />
        <div class="links">
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="./news.php">News</a></li>
            <li><a href="./events.php">Events</a></li>
            <li><a href="#">Calendars</a></li>
            <li><a href="#">Inscription</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="latestNews">
          <h3>Latest News</h3>
          <div class="line"></div>
          <a href="#">
            <div class="newNews">
              <img src="./Navphotos/holiday.jpg" alt="" />
              <div class="newsInfo">
                <h4>New Holiday is comming</h4>
                <p>Learning, library</p>
              </div>
            </div>
          </a>
          <a href="#">
            <div class="newNews">
              <img src="./Navphotos/vecation.jpg" alt="" />
              <div class="newsInfo">
                <h4>AI Feild has been added</h4>
                <p>Learning, AI</p>
              </div>
            </div>
          </a>
        </div>
        <div class="latestNews">
          <h3>Latest Events</h3>
          <div class="line"></div>
          <a href="#">
            <div class="newNews">
              <img src="./Navphotos/freelance.jpg" alt="" />
              <div class="newsInfo">
                <h4>Freelance Event Next Week</h4>
                <p>Freelance</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- <script src="./navScript.js"></script> -->
    <script>
      const myNavBar = document.querySelector(".myNavBar");
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

    </script>
  </body>
</html>
