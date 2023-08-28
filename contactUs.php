<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contactUs.css">
    <link rel="icon" type="image/x-icon" href="./Navphotos/BlueLogo.png">
</head>
<body>
    <?php include './navbar.php' ?>
    <div class="path">
      <div class="content">
        <h1>Contact</h1>
        <p>Home / contact</p>
      </div>
    </div>
    <main>
        <div class="getInTouch">
            <h1>Get In Touch</h1>
            <p>Energistically benchmark vertical channels before visionary solutions. Interactively initiate frictionless imperatives vis-a-vis unique benefits. Monotonectally actualize turnkey sources after extensible processes.</p>
        </div>
        <section>
          <form>
            <div class="nameEmail">
              <input type="text" placeholder='Name'>
              <input type="text" placeholder='Your Email'>
            </div>
            <textarea class='message' name="message" id="" cols="30" rows="10" placeholder='Your Message'></textarea>
            <button>SUBMIT</button>
          </form>
          <div class="map">
            <img src="smail.jpg" alt="">
          </div>
        </section>
    </main>
    <?php include './footer.php' ?>
</body>
</html>