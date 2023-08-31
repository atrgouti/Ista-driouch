<?php include './connexion.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./eventsDetails.css">
    <link rel="icon" type="image/x-icon" href="./Navphotos/BlueLogo.png">
</head>
<body>
    <?php include './navbar.php' ?>
    <main>
        <?php
        $sql = 'SELECT * FROM evenement WHERE ide = ?';
        $res = $db->prepare($sql);
        $res->execute(array($_GET['id']));
        while($donne = $res->fetch()){
            echo"
                <header>
                    <div class='preview'>
                        <img src='./eventsPhotos/$donne[imagee]' alt=''>
                    </div>
                    <div class='details'>
                        <h2>Event Details</h2>
                        <p>
                            <label>Date</label>
                            <span>$donne[datee]</span>
                        </p>
                        <p>
                            <label>Time</label>
                            <span>$donne[time]</span>
                        </p>
                        <p>
                            <label>Adress</label>
                            <span>$donne[localisation]</span>
                        </p>
                    </div>
                </header>
                <section>
                    <h1 class='title'>$donne[titree]</h1>
                    <dl class='description'>$donne[descriptione]</dl>
                </section>    
            ";
        }
        ?>
        
    </main>
    <?php include './footer.php' ?>
</body>
</html>