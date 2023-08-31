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
body{
    width: 100%
}
main{
    width: 80%;
    margin: 0px auto;
}
.branche{
    display: flex;
    margin-top:60px ;
    margin-bottom: 40px;
    padding: 15px;
  justify-content: space-evenly;
  /* align-items: center; */
}
.brp,.bri{
    
    width: 48%;
}
@media screen and (max-width:800px) {
    .brp,.bri
    {
        width:100% ;
        margin-top: 25px;
    }
    .branche{
        flex-direction: column-reverse;
    }
    
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
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.path .content h1 {
  font-size: 25px;
  font-weight: bold;
}
.content a{
    
    text-decoration:none;
    color:white;

 
    font-weight: bold;
    
  
}

@media screen and (max-width: 700px) {
  .path .content {
    width: 90%;
    margin: 0px auto;
    margin-top: 50px;
    margin-bottom: 50px;
  }
}
.awdi{ 
     overflow-Y: hidden; 
      padding:10px 20px;  
        border-radius: 20px;background-color:#0470cc;
}
    </style>
</head>
<body>
<?php
    include './navbar.php';
    ?>
   <div class="path">
      <div class="content">
       <div> <h1>Inscription</h1>
        <p>Home / Inscription</p></div>
        <div class='awdi'><a href="https://www.ofppt.ma/fr/inscription-en-ligne?utm_source=Bouton%20Inscription&utm_medium=CTA&utm_campaign=inscription">Inscription en ligne</a>
        </div>
      </div>
    </div>
    <main>
        <div style="text-align: center;">
            <h1 style="color: #0470cc; margin-top: 150px;font-weight: bold;">INSCRIPTION</h1>
            <pre>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, deserunt. 
                Sint soluta illum cumque excepturi, harum saepe laborum consequuntur quibusdam id! Reprehenderit 
                magnam nisi possimus illum ea neque repellendus! Animi!
            entre 15 ans et 30ans</pre>
        </div>
        <div class="branche">
            <div class="brp"><h2 style='margin-bottom:15px'><span style="color:#0470cc;font-weight: bold;">D</span>eveloppement
                <span style="color:#0470cc;font-weight: bold;">D</span>igital</h2>
                <ul style='line-height: 2.5;'>
                    <li>2 photocopies de la carte nationale égaliser</li>
                    <li>2 photocopies de bac scientifique égaliser</li>
                    <li>2 photo personnelle</li>
                    <li>2 relevés de note égaliser</li>
                    <li>Prix total de formation : 2400dh</li>
                    <li>Durée de formation : 30 mois</li>
                </ul>
                
            </div>
            <div class="bri"><img src="D.D.png" style="border-radius: 25px;" width="100%"></div>
        </div>
        <div class="branche">
            <div class="brp"><h2 style='margin-bottom:15px'><span style="color:#0470cc;font-weight: bold;">G</span>estion des 
                <span style="color:#0470cc;font-weight: bold;">E</span>ntreprises</h2>
                <ul style='line-height: 2.5;'>
                    <li>2 photocopies de la carte nationale égaliser</li>
                    <li>2 photocopies de bac scientifique égaliser</li>
                    <li>2 photo personnelle</li>
                    <li>2 relevés de note égaliser</li>
                    <li>Prix total de formation : 2400dh</li>
                    <li>Durée de formation : 30 mois</li>
                </ul>
                
            </div>
            <div class="bri"><img src="G.E.png" style="border-radius: 25px;" width="100%"></div>
        </div>
        <div class="branche">
            <div class="brp"><h2 style='margin-bottom:15px'><span style="color:#0470cc;font-weight: bold;">A</span>ssistant 
                <span style="color:#0470cc;font-weight: bold;">A</span>dministratif</h2>
                <ul style='line-height: 2.5;'>
                    <li>2 photocopies de la carte nationale égaliser</li>
                    <li>2 photocopies de bac scientifique égaliser</li>
                    <li>2 photo personnelle</li>
                    <li>2 relevés de note égaliser</li>
                    <li>Prix total de formation : 2400dh</li>
                    <li>Durée de formation : 30 mois</li>
                </ul>
                
            </div>
            <div class="bri"><img src="A.A.png" style="border-radius: 25px;" width="100%"></div>
        </div>
    </main>
    <?php
    include('footer.php');
    ?>
</body>
</html>