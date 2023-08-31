<?php include './connexion.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="events.css" />
    <link rel="icon" type="image/x-icon" href="./Navphotos/BlueLogo.png">
  </head>
  <body>
    <?php include './navbar.php' ?>
    <div class="path">
      <div class="content">
        <h1>Upcoming Events</h1>
        <p>Home / Upcoming Events</p>
      </div>
    </div>
    <div class="events-area">
    <?php
      $sql = 'SELECT * FROM evenement ORDER BY ide DESC LIMIT 1';
      $res = $db->prepare($sql);
      $res->execute();
      while($donne = $res->fetch()){
        echo "
        <div class='latest-event'>
        <div class='photo'>
          <a href='eventsDetails.php?id=$donne[ide]'><img src='./eventsPhotos/$donne[imagee]' alt=''></a>
        </div>
        <div class='content'>
          <h1><a href='eventsDetails.php?id=$donne[ide]'>$donne[titree]</a></h1>
          <div class='datetime'>
            <p>$donne[datee]</p>
            <p class='time'>$donne[time]</p>
          </div>
          <p class='description'>$donne[descriptione]</p>
        </div>
      </div>
        ";
      }
      ?>
      
    </div>
    <div class="allEvents-area">
      <div class="allEvents">
         <?php
          $sql = 'SELECT * FROM evenement ORDER BY ide DESC LIMIT 9999999999999999999 OFFSET 1;';
          $res = $db->prepare($sql);
          $res->execute();
          while($donne = $res->fetch()){
            echo "
            <div class='event-box'>
              <div class='photo'>
                <a href='eventsDetails.php?id=$donne[ide]'><img src='./eventsPhotos/$donne[imagee]' alt=''></a>
              </div>
              <div class='content'>
                <div class='all-my-content'>
                  <h3><a href='eventsDetails.php?id=$donne[ide]'>$donne[titree]</a></h3>
                  <div class='datetime'>
                    <p>$donne[datee]</p>
                    <p class='time'>$donne[time]</p>
                  </div>
                  <p class='description'>$donne[descriptione]</p>
                </div>
              </div>
            </div>
            ";
          }
      ?>
  
      </div>
    </div>
    <?php include './footer.php' ?>
  </body>
</html>
