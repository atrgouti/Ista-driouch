<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
.path {
  width: 100%;
  background-color: rgb(233, 233, 233);
 
}
.input-group-area button{
    color:white;
    border:none;
    padding:10px;
    background-color:green;
    cursor:pointer;
    width:100%;
 
}
.path .content {
  width: 80%;
  margin: 0px auto;
  margin-top: 70px;
  margin-bottom: 25px; 
}
.edt {
    display: flex;
    margin-top: 10px;
    flex-wrap: wrap;
     justify-content: space-evenly;
     width: 100%;
     margin-bottom:25px;
}

.edtb{
    font-weight: bold;
    border-radius: 25px;
    text-align: center; width: 30%; 
    margin: 10px;
    
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
  .edtb{
    width: 98%;
    margin:auto;
    margin-top: 20px;
  }  
  main{
    width: 90%;
  }
}


.input-group {
  display: table;
  border-collapse: collapse;
  width: 100%;
}

.input-group > * {
  display: table-cell;
  border: 1px solid #ddd;
  vertical-align: middle;
}

.input-group-icon {
  background-color: #0470cc;;
  color: white;
  padding: 0 12px;
}

.input-group-area {
  width: 50%;
  padding: auto;
}

.input-group input {
  border: 0;
  display: block;
  width: 100%;
  padding: 8px;
}
    </style>
</head>
<body>
<?php
session_start();
    include('navbar.php');
    ?>
<div class="path">
      <div class="content">
      <h1>Cours</h1>
        <p>Home / Cours</p>
        
      </div>
</div>
<main>

        <h1 style="color: #0470cc; margin-top: 150px;font-weight: bold;text-align: center;margin-bottom:20px">Technicien Spécialisé</h1>
        <div class="edt">
            <?php
               
                include('connexion.php');
                $sql="SELECT * FROM branche WHERE niveaux='Technicien Spécialisé'";
                $re=$db->prepare($sql);
                $re->execute();
                while($don =$re->fetch()) {
                    
                    echo"<form method='post' class='edtb' action='course.php'>
                    <label class='input-group' style='border:none;'> 
                    <div class='input-group-area'>
                        <div style='color:white;background-color:#0470cc;padding:8px;width:100%;'>$don[nomb]</div>
                    </div>
                    <input type='text'  style='display: none;' name='brn' value='$don[nomb]'>
                   
                    <div class='input-group-area'>
                        <select name='annee' id=''  style='width:100%;padding:10px;border:none;'required>
                            <option value='1ére'>1ére année</option>
                            <option value='2eme'>2eme année</option>
                        </select>
                    </div>
                    <div class='input-group-area' >
                    <button type='submit' name='validerm' >Valider</button></div>
                    </label> 
                </form>";
            }  
                ?>          
        </div> 
        <h1 style="color: #0470cc; margin-top: 150px;font-weight: bold;text-align: center;margin-bottom:20px">Technicien</h1>
        <div class="edt">
            <?php
               
                include('connexion.php');
                $sql="SELECT * FROM branche WHERE niveaux='Technicien'";
                $re=$db->prepare($sql);
                $re->execute();
                while($don =$re->fetch()) {
                    
                    echo"<form method='post' class='edtb' action='course.php'>
                    <label class='input-group' style='border:none;'> 
                    <div class='input-group-area'>
                        <div style='color:white;background-color:#0470cc;padding:8px;width:100%;'>$don[nomb]</div>
                    </div>
                    <input type='text'  style='display: none;' name='brn' value='$don[nomb]'>
                   
                    <div class='input-group-area'>
                        <select name='annee' id=''  style='width:100%;border:none;padding:10px;'required>
                            <option value='1ére'>1ére année</option>
                            <option value='2eme'>2eme année</option>
                        </select>
                    </div>
                    <div class='input-group-area' >
                    <button type='submit' name='validerm' >Valider</button></div>
                    </label> 
                </form>";
            }  
                ?>          
            </div>
            <h1 style="color: #0470cc; margin-top: 150px;font-weight: bold;text-align: center;margin-bottom:20px">Qualification</h1>
        <div class="edt">
            <?php
               
                include('connexion.php');
                $sql="SELECT * FROM branche WHERE niveaux='Qualification'";
                $re=$db->prepare($sql);
                $re->execute();
                while($don =$re->fetch()) {
                    
                    echo"<form method='post' class='edtb' action='course.php'>
                    <label class='input-group' style='border:none;'> 
                    <div class='input-group-area'>
                        <div style='color:white;background-color:#0470cc;padding:8px;width:100%;'>$don[nomb]</div>
                    </div>
                    <input type='text'  style='display: none;' name='brn' value='$don[nomb]'>
                   
                    <div class='input-group-area'>
                        <select name='annee' id=''  style='width:100%;border:none;padding:10px;'required>
                            <option value='1ére'>1ére année</option>
                            <option value='2eme'>2eme année</option>
                        </select>
                    </div>
                    <div class='input-group-area' >
                    <button type='submit' name='validerm' >Valider</button></div>
                    </label> 
                </form>";
            }  
                ?>          
        </div> 
        <h1 style="color: #0470cc;; margin-top: 150px;font-weight: bold;text-align: center;margin-bottom:20px">Spécialisation</h1>
        <div class="edt">
            <?php
               
                include('connexion.php');
                $sql="SELECT * FROM branche WHERE niveaux='Spécialisation'";
                $re=$db->prepare($sql);
                $re->execute();
                while($don =$re->fetch()) {
                    
                    echo"<form method='post' class='edtb' action='course.php'>
                    <label class='input-group' style='border:none;'> 
                    <div class='input-group-area'>
                        <div style='color:white;background-color:#0470cc;padding:8px;width:100%;'>$don[nomb]</div>
                    </div>
                    <input type='text'  style='display: none;' name='brn' value='$don[nomb]'>
                   
                    <div class='input-group-area'>
                        <select name='annee' id=''  style='width:100%;border:none;padding:10px;'required>
                            <option value='1ére'>1ére année</option>
                        </select>
                    </div>
                    <div class='input-group-area' >
                    <button type='submit' name='validerm' >Valider</button></div>
                    </label> 
                </form>";
            }  
                ?>          
        </div> 
        
</main>
<?php
    include('footer.php');
    ?>  
</body>
</html>