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
.path {
  width: 100%;
  background-color: rgb(233, 233, 233);
 
}
.path .content {
  width: 90%;
  margin: 0px auto;
  margin-top: 70px;
  margin-bottom: 50px; 
}
@media screen and (max-width: 800px) {
  .path .content {
    width: 90%;
    margin: 0px auto;
    margin-top: 50px;
    margin-bottom: 50px;
  }
  .brp,.bri
    {
        width:100% ;
        margin-top: 25px;
    }
    .branche{
        flex-direction: column-reverse;
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
      <h1>A propos de nous</h1>
        <p>Home / A propos de nous</p>
        
      </div>
</div>
<div style="text-align: center;">
        <h1 style="color: rgb(0, 26, 255); margin-top: 150px;font-weight: bold;">Règles</h1>
        <pre>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, deserunt. 
            Sint soluta illum cumque excepturi, harum saepe laborum consequuntur quibusdam id! Reprehenderit 
            magnam nisi possimus illum ea neque repellendus! Animi!
        entre 15 ans et 30ans</pre> 
</div>
<div class="branche">
        <div class="brp"><h2 style='margin-bottom:15px; text-align:center;'>A propos de nous</h2>
            <p style='line-height: 2;'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse officia
             harum eaque quaerat facere doloribus ex odio nobis quisquam voluptatibus 
        soluta illum aliquid odit, dolor asperiores corrupti? Ratione, omnis quisquam! 
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente dolores accusantium 
                veniam? Veritatis dicta, iusto quo perferendis debitis
                 eveniet error molestiae labore nobis! Tempora eos eligendi, voluptatibus sequi possimus facere?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio amet officia doloremque exercitationem ad 
                labore porro, aliquam ipsum optio delectus illo animi! Esse id obcaecati ipsum iste incidunt saepe maxime!</p>
                
            
           </div>
        <div class="bri"><img src="ista.png" style="border-radius: 25px;" width="100%"></div>
    </div>
    <?php
    include('footer.php');
    ?>
</body>
</html>