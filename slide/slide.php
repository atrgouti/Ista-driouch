<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 *{
  margin: 0;
 }
   
    .fade {
      animation-name: fade;
      animation-duration: 2s;
    }
  
    .slide{
     
      margin-left: auto;
      margin-right:auto;
      width:100%;
      position: relative;
      
      
    }
    .next {
  right: 0;
  border-radius: 3px 0 0 3px;

}


.prev:hover, .next:hover {
  background-color: rgba(37, 1, 165, 0.8);
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  transform: translateY(-50%);
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
    
    @keyframes fade {
      from {left: 100%} 
      to {right: 100%}
    }

    </style>
    </head>
    <body>
    <div class='slide'>
      <?php
      include('connexion.php');
      $sql = 'SELECT * FROM diaporama';
      $res = $db->prepare($sql);
      $res->execute();
      while($donne = $res->fetch()){
        echo"
        <div class='mySlides fade'>
          <img src='slidePhotos/$donne[imaged]' width='100%'>
        </div>
        ";
      }
      ?>
      
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a> 
    </div>
    <script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      
      slides[slideIndex-1].style.display = "block";  
      
      setTimeout(showSlides, 4000); // Change image every 4 seconds
    }
  let slideInde = 1;
showSlide(slideInde);

function plusSlides(n) {
  showSlide(slideInde += n);
}

function currentSlide(n) {
  showSlide(slideInde = n);
}

function showSlide(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");

  if (n > slides.length) {slideInde = 1}    
  if (n < 1) {slideInde = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }

  
  slides[slideInde-1].style.display = "block";  

}
    </script>
    
</body>
</html>