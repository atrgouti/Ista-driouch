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
          <form method='POST'>
            <div class="nameEmail">
              <input required type="text" placeholder='Name' name='name'>
              <input required type="text" placeholder='Your Email' name='email'>
            </div>
            <textarea required class='message' name="message" id="" cols="30" rows="10" placeholder='Your Message'></textarea>
            <button name='submit'>SUBMIT</button>
          </form>
          <?php
          // if(isset($_POST['submit'])){
          //   include('connexion.php');
          //   $sql = "INSERT INTO `contact`(`nomc`, `emailc`, `comment`) VALUES (?, ?, ?)";
          //   $res = $db->prepare($sql);
          //   $res->execute(array($_POST['name'], $_POST['email'], $_POST['message']));
          //   if($res){
          //     echo'Le message a été envoyé avec succès';
          //   }
          // }
          ?>
          <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13076.707537778675!2d-3.4041657588093193!3d34.977233843887475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7643b77f14c9b9%3A0xd2e11c5019de9241!2sISTA%2C%20Institut%20Sp%C3%A9cialis%C3%A9%20de%20Technologie%20Appliqu%C3%A9e%20Driouch!5e0!3m2!1sfr!2sma!4v1693295549955!5m2!1sfr!2sma" width='100%' height='100%' style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </section>
        <?php
          if(isset($_POST['submit'])){
            include('connexion.php');
            $sql = "INSERT INTO `contact`(`nomc`, `emailc`, `comment`) VALUES (?, ?, ?)";
            $res = $db->prepare($sql);
            $res->execute(array($_POST['name'], $_POST['email'], $_POST['message']));
            if($res){
              echo'Le message a été envoyé avec succès';
            }
          }
          ?>
    </main>
    <?php include './footer.php' ?>
</body>
</html>