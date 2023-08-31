<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Kumbh+Sans&family=Poppins:ital,wght@0,300;1,200&family=Roboto:wght@300;400&display=swap");
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins";

}
main{
  width: 80%; 
  margin: 0px auto;
}
.cld{
  border-radius: 20px;
  width:50%;
}

.path {
  width: 100%;
  background-color: rgb(233, 233, 233);
 
}
.path .content {
  width: 80%;
  margin: 0px auto;
  margin-top: 70px;
  margin-bottom: 50px; 
}
.path .content h1 {
  font-size: 25px;
  font-weight: bold;
}
.edt {
    display: flex;
    margin-top: 15px;
    flex-wrap: wrap;
     justify-content: space-between;
     width: 100%;
     margin-bottom:15px;
}
.edtb{
    width: 20%; 
    margin: 10px;
 
}
.edtb{
    background-color: #0470cc;
    border-radius: 20px;
    text-align: center;
    
}
.edtb:hover{
  background-color: #0460cc;
}
.edtb a{
    display: block;
    padding:10px;
    font-weight: bold;
    color:white;
    text-decoration: none;
}

@media screen and (max-width: 800px) {
  .path .content {
    width: 90%;
    margin: 0px auto;
    margin-top: 50px;
    margin-bottom: 50px;
  }
  .edt{
    flex-direction: column;
  }
  .edtb,.cld{
    width: 100%;
    margin:0;
    margin-top: 20px;
  }
}
    </style>
  
</head>
<body>
    <?php
    include('navbar.php');
    ?>
      <div class="path">
          <div class="content">
          <h1>Emploi de temps</h1>
            <p>Home / Emploi de temps</p>
          </div>
      </div>
        <main>
        <div style="text-align: center; padding:10px ;">
            <h1 style="color:  #0470cc; margin-top: 100px;font-weight: bold;margin-bottom: 35px;">Calendrier des vacances</h1>
            <?php
            include('connexion.php');
            $sql="SELECT * FROM vacance ";
            $re=$db->prepare($sql);
            $re->execute();
            while($don =$re->fetch()) {
            echo"<img src='$don[imagev]' class='cld'>";
            }
            ?>
          
        </div>
        <div style=" padding:10px ;">
            <h1 style="color:  #0470cc; margin-top: 100px;font-weight: bold;margin-bottom: 35px;text-align: center;">Agenda</h1>
            <div class="edt">
                <?php
                  
                    include('connexion.php');
                    $sql="SELECT * FROM branche ";
                    $re=$db->prepare($sql);
                    $re->execute();
                    while($don =$re->fetch()) {
                    echo"<div class='edtb'> <a href='$don[calendrier]'>$don[nomb]</a></div>";
                    }
                    ?>  
            </div>      
        </div>
    </main>
    <?php
    include('footer.php');
    ?>
</body>
</html>