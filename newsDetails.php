<?php include './connexion.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newsDetails.css">
</head>
<body>
<?php include './navbar.php' ?>
<?php
$sql1 = 'SELECT * FROM actualite WHERE idac = ?';
$res1 = $db->prepare($sql1);
$res1->execute(array($_GET['id']));
while($donne = $res1->fetch()){
    echo"
    <main>
        <header>
            <img src='./newsPhotos/$donne[imageac]' alt=''>
        </header>
        <section>
            <h1 class='title'>$donne[titreac]</h1>
            <dl class='description'>$donne[descriptionac]</dl>
        </section>
    </main>
    ";
}
?>
    <?php include './footer.php' ?>
</body>
</html>