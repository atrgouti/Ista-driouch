<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="icon" type="image/x-icon" href="./Navphotos/BlueLogo.png">
  </head>
  <body>
    <div class="myNavBar">
      <?php include './navbar.php' ?>
      <!-- <div class="myFixedBg">
        <img src="slide1.png" alt="">
      </div> -->
      <?php include './slide/slide.php' ?>
      <div class="options">
        <div class="box box1">
          <a href="./inscription.php"><img src="homePhotos/icon-box2222.jpg" alt=""></a>
          <div class="infos">
            <p class="title"><a href="./inscription.php">Inscription</a></p>
            <p class='description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, unde.</p>
            <p class='readMore'><a href="./inscription.php">Read More!</a></p>
          </div>
        </div>
        <div class="box box1">
          <a href="./course.php"><img src="homePhotos/latestNews.jpg" alt=""></a>
          <div class="infos">
            <p class="title"><a href="./course.php">courses</a></p>
            <p class='description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, unde.</p>
            <p class='readMore'><a href="./course.php">Read More!</a></p>
          </div>
        </div>
        <div class="box box1">
          <a href="./emploi-de-temps.php"><img src="homePhotos/noticeBoard.jpg" alt=""></a>
          <div class="infos">
            <p class="title"><a href="./emploi-de-temps.php">calander</a></p>
            <p class='description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, unde.</p>
            <p class='readMore'><a href="./emploi-de-temps.php">Read More!</a></p>
          </div>
        </div>
        <div class="box box1">
          <a href="./news.php"><img src="homePhotos/grades.jpg" alt=""></a>
          <div class="infos">
            <p class="title"><a href="./news.php">News</a></p>
            <p class='description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, unde.</p>
            <p class='readMore'><a href="./news.php">Read More!</a></p>
          </div>
        </div>
      </div>
      <section class="welcomeToIsta">
        <h1>Bienvenue a Ista de Driouch</h1>
        <p>Découvrez notre école exceptionnelle, offrant une multitude de domaines d'études passionnants tels que le développement Fullstack, l'économie et la mécanique automobile. Nos instructeurs qualifiés et nos installations modernes vous guideront dans votre parcours éducatif. Rejoignez-nous dans cette aventure d'apprentissage et d'innovation.</p>
        <h3>Bilal Mhamdi</h3>
        <h5>Headmaster</h5>
      </section>
      <section class="newsEvents">
        <div class="news">
        <?php
          include('connexion.php');
          $sql = 'SELECT * FROM actualite ORDER BY idac DESC LIMIT 1';
          $res = $db->prepare($sql);
          $res->execute();
          while($donne = $res->fetch()){
            echo "
            <div class='firstNews'>
            <div class='info'>
              <h1><a href='#'>$donne[titreac]</a></h1>
              <p id='truncated-paragraph'>$donne[descriptionac]</p>
              <h4><a href='#'>Read More!</a></h4>
              </div>
              <div class='image'>
                <a href=''><img src='newsPhotos/$donne[imageac]' alt=''></a>
              </div>
              </div>
            ";
          }
          ?>
          <?php
          $sql = 'SELECT * FROM actualite ORDER BY idac DESC LIMIT 1 OFFSET 1';
          $res = $db->prepare($sql);
          $res->execute();
          while($donne = $res->fetch()){
            echo "
            <div class='secendNews'>
            <div class='info'>
              <h1><a href='#'>$donne[titreac]</a></h1>
              <p id='truncated-paragraph2'>$donne[descriptionac]</p>
              <h4><a href='#'>Read More!</a></h4>
            </div>
            <div class='image'>
              <a href=''><img src='newsPhotos/$donne[imageac]' alt=''></a>
            </div>
          </div>
            ";
          }
          ?>
          
        </div>
        <div class="events">
          <div class="inside">
          <?php
          include('connexion.php');
          $sql = 'SELECT * from evenement ORDER by ide DESC LIMIT 3';
          $res = $db->prepare($sql);
          $res->execute();
          while($donne = $res->fetch()){
            echo "
            <div class='myEvent'>
              <h4><a href='eventsDetails.php?id=$donne[ide]'>$donne[titree]</a></h4>
              <div class='dateAndTime'>
                <p class='date'>$donne[datee]</p>
                <p class='time'>$donne[time]</p>
              </div>
              <div class='eventline'></div>
            </div>
            ";
          }
          ?>

            <p class='viewEvents'><a href="events.php">VIEW ALL EVENTS</a></p>
          </div>
        </div>
      </section>
      <section class="Testimonials">
        <h1>Témoignages d'étudiants</h1>
        <div class="boxes">
          <div class="box">
            <p class="review">Rapidiously enhance standardized information through virtual benefits. Dynamically reintermediate low-risk high-yield partnerships via intermandated collaboration and idea-sharing. Efficiently parallel task maintainable portals.</p>
            <div class="name">
            Austin Holmes
            </div>
            <div class="feild">Study on Civilization</div>
            <img src="./homePhotos/comma.png" alt="">
          </div>
          <div class="box">
            <p class="review">Rapidiously enhance standardized information through virtual benefits. Dynamically reintermediate low-risk high-yield partnerships via intermandated collaboration and idea-sharing. Efficiently parallel task maintainable portals.</p>
            <div class="name">
            Austin Holmes
            </div>
            <div class="feild">Study on Civilization</div>
            <img src="./homePhotos/comma.png" alt="">
          </div>
          <div class="box">
            <p class="review">Rapidiously enhance standardized information through virtual benefits. Dynamically reintermediate low-risk high-yield partnerships via intermandated collaboration and idea-sharing. Efficiently parallel task maintainable portals.</p>
            <div class="name">
            Austin Holmes
            </div>
            <div class="feild">Study on Civilization</div>
            <img src="./homePhotos/comma.png" alt="">
          </div>
        </div>
      </section>

      <div class="collaboration">
        <h1 class='title'>Collaboration</h1>
        <div class="boxes">
          <div class="box box1">
            <a href="#"><img src="homePhotos/altissia.jpg" alt=""></a>
            <div class="infos">
              <p class="title"><a href="#">Altissia</a></p>
              <p class='description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, unde.</p>
              <p class='readMore'><a href="#">Read More!</a></p>
            </div>
          </div>
          <div class="box box1">
            <a href="#"><img src="homePhotos/anapec.jpg" alt=""></a>
            <div class="infos">
              <p class="title"><a href="#">Anapec</a></p>
              <p class='description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, unde.</p>
              <p class='readMore'><a href="#">Read More!</a></p>
            </div>
          </div>
          <div class="box box1">
            <a href="#"><img src="homePhotos/Scholaxvox.jpg" alt=""></a>
            <div class="infos">
              <p class="title"><a href="#">Scholarvox</a></p>
              <p class='description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, unde.</p>
              <p class='readMore'><a href="#">Read More!</a></p>
            </div>
          </div>
          <div class="box box1">
            <a href="#"><img src="./homePhotos/openclassrooms.jpg" alt=""></a>
            <div class="infos">
              <p class="title"><a href="#">Openclassrooms</a></p>
              <p class='description'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, unde.</p>
              <p class='readMore'><a href="#">Read More!</a></p>
            </div>
          </div>
        </div>
      </div>

      <?php include './footer.php' ?>
    </div>
    <script src='home.js'></script>
    <script>
      const paragraph = document.getElementById("truncated-paragraph")
      const paragraph2 = document.getElementById("truncated-paragraph2")
      const originalText = paragraph.textContent;
      const originalText2 = paragraph2.textContent;
      const words = originalText.split(" ");
      const words2 = originalText2.split(" ");
      const truncatedText = words.slice(0, 20).join(" ") + '...'
      const truncatedText2 = words2.slice(0, 15).join(" ") + '...'

      paragraph.textContent = truncatedText;
      paragraph2.textContent = truncatedText2;
    </script>
  </body>
</html>
