<?php include './connexion.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="news.css">
</head>
<body>
    <?php include './navbar.php' ?>
    <div class="path">
      <div class="content">
        <h1>News</h1>
        <p>Home / Blog</p>
      </div>
    </div>

    <div class="events-area">
      <?php
      $sql = 'SELECT * FROM actualite ORDER BY idac DESC LIMIT 1';
      $res = $db->prepare($sql);
      $res->execute();
      while($donne = $res->fetch()){
        echo "
        <div class='latest-event'>
        <div class='photo'>
          <a href='newsDetails.php?id=$donne[idac]'><img src='./newsPhotos/$donne[imageac]' alt=''></a>
        </div>
        <div class='content'>
          <h1><a href='newsDetails.php?id=$donne[idac]'>$donne[titreac]</a></h1>
          <div class='datetime'>
            <p>$donne[datea]</p> 
          </div>
          <p class='description' id='truncated-paragraph'>$donne[descriptionac]</p>
          <p class='readMore'><a href='newsDetails.php?id=$donne[idac]'>Continue Reading</a></p>
        </div>
      </div>
        ";
      }
      ?>
      
    </div>
    <div class="allEvents-area">
      <div class="allEvents">
      <?php
          $sql = 'SELECT * FROM actualite ORDER BY idac DESC LIMIT 9999999999999999999 OFFSET 1;';
          $res = $db->prepare($sql);
          $res->execute();
          while($donne = $res->fetch()){
            echo "
            <div class='event-box'>
              <div class='photo'>
                <a href='newsDetails.php?id=$donne[idac]'><img src='./newsPhotos/$donne[imageac]' alt=''></a>
              </div>
              <div class='content'>
                <div class='all-my-content'>
                  <h3><a href='newsDetails.php?id=$donne[idac]'>$donne[titreac]</a></h3>
                  <div class='datetime'>
                    <p>October 17, 2017</p>
                  </div>
                  <p class='description'>$donne[descriptionac]</p>
                  <p class='readMore'><a href='newsDetails.php?id=$donne[idac]'>Continue Reading</a></p>
                </div>
              </div>
            </div>
            ";
          }
          
      ?>
  
      </div>
    </div>
    <?php include './footer.php' ?>
    <script>
      const paragraph = document.getElementById("truncated-paragraph");
      const originalText = paragraph.textContent;
      const words = originalText.split(" ");
      const truncatedText = words.slice(0, 40).join(" ") + '...'

      paragraph.textContent = truncatedText;
    </script>
</body>
</html>