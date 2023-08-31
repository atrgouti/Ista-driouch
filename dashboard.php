<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  .navbar-nav tr:hover{
    border-bottom:2px solid white;
  }
  .butto {
      background: none repeat scroll 0 0 ;
      left: 90%;
      position: fixed;
      top: 10px;
    
    }
    .up{
      display:none;
    }
    @media screen and (max-width:1200px) {
    .butto{
      top:550px;
      left:93%;
    }
    .up{
      display:block;
    }
    .upp{
      display:none;
    }
  }
</style>
<?php 
    include "connexion.php" ;
    session_start();
    if(empty($_SESSION["noma"]) && empty($_SESSION["pwd"])){
        header ("location: admin.php");
    }

?>

<body>
 
    <div  class="row  m-0 p-0">
        <div class="col-xl-2 bg-primary h-auto py-4">
            <div class="d-flex text-white justify-content-center  mb-5">
            <a href="dashboard.php"><img src="istalogo.png" width="100px"></a> 
            </div>
            
            <div class="navbar-nav">
                <table class=" table table-borderless w-100 p-0 d-flex justify-content-center">
                    <tr>
                        <td>
                            <a href="#admin" class="nav-link text-white  fs-5"><i class="fa-regular fa-user"></i></a>
                        </td>
                        <td>
                            <a href="#admin" class="nav-link text-white fs-5">Admin</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#branche" class="nav-link text-white  fs-5"><i class="fa-solid fa-code-branch"></i></a>
                        </td>
                        <td>
                            <a href="#branche" class="nav-link text-white fs-5">Branche</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#dioporama" class="nav-link text-white  fs-5"><i class="fa-solid fa-panorama"></i></a>
                        </td>
                        <td>
                            <a href="#diaporama" class="nav-link text-white fs-5">Diaporama</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#vacance" class="nav-link text-white  fs-5"><i class="fa-solid fa-pause"></i></a>
                        </td>
                        <td>
                            <a href="#vacance" class="nav-link text-white fs-5">Vacance</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#matieres" class="nav-link text-white fs-5"><i class="fa-regular fa-clipboard "></i></a>
                        </td>
                        <td>
                            <a href="#matieres" class="nav-link text-white fs-5">Matières</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#contact" class="nav-link text-white fs-5"><i class="fa-solid fa-envelope"></i></a>
                        </td>
                        <td>
                            <a href="#contact" class="nav-link text-white fs-5">Contact</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#actualité" class="nav-link text-white fs-5"><i class="fa-regular fa-newspaper"></i></a>
                        </td>
                        <td>
                            <a href="#actualité" class="nav-link text-white fs-5">Actualité</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#evénement" class="nav-link text-white fs-5"><i class="fa-regular fa-calendar-check"></i></a>
                        </td>
                        <td>
                            <a href="#evénement" class="nav-link text-white fs-5">Evénement</a> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="déconnecter.php" class="nav-link text-white fs-5"><i class="fa-solid fa-power-off"></i></a>
                        </td>
                        <td>
                            <a href="déconnecter.php" class="nav-link text-white fs-5">déconnecter</a> 
                        </td>
                    </tr>
                    
                </table> 
            </div>
        </div>
        <div class="col-xl-10 m-0 p-0">
        <div  class='butto'><a href="#" class="btn btn-info text-white p-2"><span class='upp'>Aller à l'acceuil</span> <i class="fa-solid fa-angles-up up"></i></a></div>
            <div class="container col-xl-8 my-5 " id="matieres">
            <h2 class="text-white text-center rounded-3 bg-primary p-2" >Matières</h2>
                <a data-bs-toggle="modal" data-bs-target="#ajoutermatiere" class="mt-4  mb-3 float-end"><i class="fa-solid fa-plus btn fs-4 btn-success"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#editmatiere" class="mt-4  mx-2 mb-3  float-end"><i class="fa-solid fa-pen-to-square fs-4 btn btn-primary"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#deletematiere" class="mt-4  mb-3  float-end"><i class="fa-solid fa-trash-can fs-4 btn btn-danger"></i></a>
    <!-- Modal ajoutermatiere -->
    <div class="modal" id="ajoutermatiere">
        <div class="modal-dialog">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title text-primary">Ajouter une matière</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
            <!-- Modal body -->
            <form class="form-inline" method='post'>
            <div class="modal-body ">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Matière</span>
                      </div>
                      <input required type="text" class="form-control" name="matiere"  placeholder="écris le nom de la matière">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Branche</span>
                        </div>
                        <input required type="text" class="form-control" name="branche"  placeholder="entrez branche de la matière">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Année</span>
                        </div>
                        <input required type="text" class="form-control" name="annee"  placeholder="entrez l'annee">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Lien</span>
                        </div>
                        <input required type="text" class="form-control" name="lien"  placeholder="entrez lien de la matière">
                    </div>    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="ajouterm">Ajouter</button></a>
              <button type="reset" class="btn btn-danger" >Annuler</button>
            </div>
        </form>
      </div>
    </div>
  </div>
      <?php
        if(isset($_POST['ajouterm'])){
        include('connexion.php');
        $sql="INSERT INTO matiere (nomm,nomb,annee,lienm) Value (?,?,?,?)";
        $re=$db->prepare($sql);
        $re->execute(array($_POST['matiere'],$_POST['branche'],$_POST['annee'],$_POST['lien']));
    }
    ?>
         <!-- Modal Effacermatiere-->
         <div class="modal" id="deletematiere">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title text-danger">Effacer une matiere</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              

            </div>
      
            <!-- Modal body -->
            <form class="form-inline" method='post'>
            <div class="modal-body ">
                    <div class="input-group my-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Matière</span>
                      </div>
                      <input required type="text" class="form-control" name="matiere" placeholder="écris le nom de la matière">
                    </div>
                    êtes-vous sûr de vouloir supprimer
                    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-danger text-white"  name="deletem">Valider</button></a>
              <button type="reset" class="btn btn-light" >Annuler</button>
            </div><!-- Modal footer -->     
        </form>
          </div>
        </div>
      </div>
      <?php
     if(isset($_POST['deletem'])){
      include('connexion.php');
      $sql="DELETE FROM matiere WHERE nomm=?";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['matiere']));
  }
  ?>
      <!-- Modal editmatiere -->
<div class="modal" id="editmatiere">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-primary">Modifier une matière</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
        <!-- Modal body -->
        <form class="form-inline" method='post'>
        <div class="modal-body ">
            
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text text-primary">Matière</span>
                  </div>
                  <input required type="text" class="form-control" name="matiere"  placeholder="écris le nom de la matière">
                </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-primary">Branche</span>
                    </div>
                    <input required type="text" class="form-control" name="branche"  placeholder="entrez branche de la matière">
                  </div>
                  <div class="input-group my-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-primary">Année</span>
                    </div>
                    <input required type="text" class="form-control" name="annee"  placeholder="entrez l'annee">
                  </div>
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-primary">Lien</span>
                    </div>
                    <input required type="text" class="form-control" name="lien"  placeholder="entrez lien de la matière">
                  </div>        
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
         <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="modifierm">Modifier</button></a> 
          <button type="reset" class="btn btn-danger" >Annuler</button>
        </div>
    </form>
  
  
      </div>
    </div>
  </div>
    <?php
     if(isset($_POST['modifierm'])){
      include('connexion.php');
      $sql="UPDATE matiere SET nomb=?,annee=?,lienm=? WHERE nomm=? ";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['branche'],$_POST['annee'],$_POST['lien'],$_POST['matiere']));
  }
  ?>
                <table class="table table-bordered border-5 border mt-5 border-light shadow text-center">
                    <tr>
                       <th>Matière</th>
                       <th>Branche</th>
                       <th>Année</th>
                       <th>Lien</th>
                      
                    </tr>
        <?php
        include('connexion.php');
        $sql="SELECT * FROM matiere ";
        $re=$db->prepare($sql);
        $re->execute();
        while($don =$re->fetch()) {
        echo"<tr>
        <td>$don[nomm]</td>
        <td>$don[nomb]</td>
        <td>$don[annee]</td>
        <td><a href='$don[lienm]'><i class='fa-solid fa-link btn'></i></a>
        </td></tr>";
        }?>      
                </table>
            </div>  
              <!-- part2 -->
              <div class="container col-xl-8 my-5 " id="branche">
            <h2 class="text-white text-center rounded-3 bg-primary p-2" >Branche</h2>
                <a data-bs-toggle="modal" data-bs-target="#ajouterbranche" class="mt-4  mb-3 float-end"><i class="fa-solid fa-plus btn fs-4 btn-success"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#editbranche" class="mt-4  mx-2 mb-3  float-end"><i class="fa-solid fa-pen-to-square fs-4 btn btn-primary"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#deletebranche" class="mt-4  mb-3  float-end"><i class="fa-solid fa-trash-can fs-4 btn btn-danger"></i></a>
    <!-- Modal ajouterbranche -->
    <div class="modal" id="ajouterbranche">
        <div class="modal-dialog">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title text-primary">Ajouter une branche</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
            <!-- Modal body -->
            <form class="form-inline" method='post'>
            <div class="modal-body ">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Branche</span>
                      </div>
                      <input required type="text" class="form-control" name="branche"  placeholder="écris le nom de la branche">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Niveaux</span>
                        </div>
                        <input required type="text" class="form-control" name="niveaux"  placeholder="entrez niveaux de la branche">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Duree</span>
                        </div>
                        <input required type="text" class="form-control" name="duree"  placeholder="entrez duree de formtion">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Emploi de temps</span>
                        </div>
                        <input required type="text" class="form-control" name="lienb"  placeholder="entrez lien des emplois de temps de la branche">
                    </div>    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="ajouterb">Ajouter</button></a>
              <button type="reset" class="btn btn-danger" >Annuler</button>
            </div>
        </form>
      </div>
    </div>
  </div>
      <?php
        if(isset($_POST['ajouterb'])){
        include('connexion.php');
        $sql="INSERT INTO branche (nomb,niveaux,calendrier,dureeb) Value (?,?,?,?)";
        $re=$db->prepare($sql);
        $re->execute(array($_POST['branche'],$_POST['niveaux'],$_POST['lienb'],$_POST['duree']));
    }
    ?>
         <!-- Modal Effacerbrancher-->
         <div class="modal" id="deletebranche">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title text-danger">Effacer une branche</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              
            </div>
      
            <!-- Modal body -->
            <form class="form-inline" method='post'>
            <div class="modal-body ">
                    <div class="input-group my-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Branche</span>
                      </div>
                      <input required type="text" class="form-control" name="branche" placeholder="écris le nom de la branche">
                    </div>
                    êtes-vous sûr de vouloir supprimer
                    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-danger text-white"  name="deleteb">Valider</button></a>
              <a href="dashboard.php"><button type="button" class="btn btn-light" >Annuler</button></a>
            </div><!-- Modal footer -->     
        </form>
          </div>
        </div>
      </div>
      <?php
     if(isset($_POST['deleteb'])){
      include('connexion.php');
      $sql="DELETE FROM branche WHERE nomb=?";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['branche']));
  }
  ?>
      <!-- Modal editbranche -->
<div class="modal" id="editbranche">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-primary">Modifier une branche</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
        <!-- Modal body -->
        <form class="form-inline" method='post'>
        <div class="modal-body ">
            
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Branche</span>
                      </div>
                      <input required type="text" class="form-control" name="branche"  placeholder="écris le nom de la branche">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Niveaux</span>
                        </div>
                        <input required type="text" class="form-control" name="niveaux"  placeholder="entrez niveaux de la branche">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Duree</span>
                        </div>
                        <input required type="text" class="form-control" name="duree"  placeholder="entrez duree de formtion">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Emploi de temps</span>
                        </div>
                        <input required type="text" class="form-control" name="lienb"  placeholder="entrez lien des emplois de temps de la branche">
                    </div>   
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
         <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="modifierb">Modifier</button></a> 
          <button type="reset" class="btn btn-danger" >Réinitialiser</button>
        </div>
    </form>
  
  
      </div>
    </div>
  </div>
    <?php
     if(isset($_POST['modifierb'])){
      include('connexion.php');
      $sql="UPDATE branche SET niveaux=?,calendrier=?,dureeb=? WHERE nomb=? ";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['niveaux'],$_POST['lienb'],$_POST['duree'],$_POST['branche']));
     
  }
  ?>
                <table class="table table-bordered border-5 border mt-5 border-light shadow text-center">
                    <tr>
                       <th>Branche</th>
                       <th>Niveaux</th>
                       <th>Duree</th>
                       <th>Emploi de temps</th>
                      
                    </tr>
        <?php
        include('connexion.php');
        $sql="SELECT * FROM branche ";
        $re=$db->prepare($sql);
        $re->execute();
        while($don =$re->fetch()) {
        echo"<tr>

        <td>$don[nomb]</td>
        <td>$don[niveaux]</td>
        <td>$don[dureeb]</td>
        <td><a href='$don[calendrier]'><i class='fa-solid fa-link btn'></i></a>
        </td></tr>";
        }?>      
                </table>
            </div>    
            <!-- part3 -->
            <div class="container col-xl-8 my-5 " id="admin">
            <h2 class="text-white text-center rounded-3 bg-primary p-2" >Admin</h2>
                <a data-bs-toggle="modal" data-bs-target="#ajouteradmin" class="mt-4  mb-3 float-end"><i class="fa-solid fa-plus btn fs-4 btn-success"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#editadmin" class="mt-4  mx-2 mb-3  float-end"><i class="fa-solid fa-pen-to-square fs-4 btn btn-primary"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#deleteadmin" class="mt-4  mb-3  float-end"><i class="fa-solid fa-trash-can fs-4 btn btn-danger"></i></a>
    <!-- Modal ajouteradmin -->
    <div class="modal" id="ajouteradmin">
        <div class="modal-dialog">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title text-primary">Ajouter un admin</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
            <!-- Modal body -->
            <form class="form-inline" method='post'>
            <div class="modal-body ">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Id</span>
                      </div>
                      <input required type="text" class="form-control" name="ida"  placeholder="entrez id de l'admin">
                    </div>
                    
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Nom</span>
                        </div>
                        <input required type="text" class="form-control" name="noma"  placeholder="entrez nom de l'admin">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Mot de passe</span>
                        </div>
                        <input required type="password" class="form-control" name="pwd"  placeholder="entrez mot de passe">
                    </div>    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="ajoutera">Ajouter</button></a>
              <button type="reset" class="btn btn-danger" >Réinitialiser</button>
            </div>
        </form>
      </div>
    </div>
  </div>
      <?php
        if(isset($_POST['ajoutera'])){
        include('connexion.php');
        $sql="INSERT INTO admin (ida,noma,pwd) Value (?,?,?)";
        $re=$db->prepare($sql);
        $re->execute(array($_POST['ida'],$_POST['noma'],$_POST['pwd']));
    }
    ?>
         <!-- Modal Effaceradmin-->
         <div class="modal" id="deleteadmin">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title text-danger">Effacer un admin</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              
            </div>
      
            <!-- Modal body -->
            <form class="form-inline" method='post'>
            <div class="modal-body ">
                    <div class="input-group my-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Id</span>
                      </div>
                      <input required type="text" class="form-control" name="ida" placeholder="entrez id de l'admin">
                    </div>
                    êtes-vous sûr de vouloir supprimer
                    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-danger text-white"  name="deletea">Valider</button></a>
              <a href="dashboard.php"><button type="button" class="btn btn-light" >Annuler</button></a>
            </div><!-- Modal footer -->     
        </form>
          </div>
        </div>
      </div>
      <?php
     if(isset($_POST['deletea'])){
      include('connexion.php');
      $sql="DELETE FROM admin WHERE ida=?";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['ida']));
  }
  ?>
      <!-- Modal editadmin -->
<div class="modal" id="editadmin">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-primary">Modifier un admin</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
        <!-- Modal body -->
        <form class="form-inline" method='post'>
        <div class="modal-body ">
            
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Id</span>
                      </div>
                      <input required type="text" class="form-control" name="ida"  placeholder="entrez id de l'admin">
                    </div>
                    
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Nom</span>
                        </div>
                        <input required type="text" class="form-control" name="noma"  placeholder="entrez nom de l'admin">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Mot de passe</span>
                        </div>
                        <input required type="password" class="form-control" name="pwd"  placeholder="entrez mot de passe">
                    </div>    
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
         <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="modifiera">Modifier</button></a> 
          <button type="reset" class="btn btn-danger" >Réinitialiser</button>
        </div>
    </form>
  
  
      </div>
    </div>
  </div>
    <?php
     if(isset($_POST['modifiera'])){
      include('connexion.php');
      $sql="UPDATE admin SET noma=?,pwd=? WHERE ida=? ";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['noma'],$_POST['pwd'],$_POST['ida']));
     
  }
  ?>
                <table class="table table-bordered border-5 border mt-5 border-light shadow text-center">
                    <tr>
                       <th>Id</th>
                       <th>Nom</th>
                       <th>Mot de passe</th>
                      
                    </tr>
        <?php
        include('connexion.php');
        $sql="SELECT * FROM admin ";
        $re=$db->prepare($sql);
        $re->execute();
        while($don =$re->fetch()) {
        echo"<tr>

        <td>$don[ida]</td>
        <td>$don[noma]</td>
        <td>$don[pwd]</td></tr>";
        }?>      
                </table>
            </div>   
             <!-- part4 -->
             <div class="container col-xl-8 my-5 " id="vacance">
            <h2 class="text-white text-center rounded-3 bg-primary p-2" >Vacances</h2>
                
                <a data-bs-toggle="modal" data-bs-target="#editvacan" class="mt-4  mx-2 mb-3  float-end"><i class="fa-solid fa-pen-to-square fs-4 btn btn-primary"></i></a>

      <!-- Modal editvacance -->
<div class="modal" id="editvacan">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-primary">Modifier calendrier des vacances</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
        <!-- Modal body -->
        <form class="form-inline" method='post'>
        <div class="modal-body ">
            
        <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Vacance</span>
                      </div>
                      <input required type="text" class="form-control" name="idv"  placeholder="entrez id de vacance">
                    </div>
                    
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Image de calendrier</span>
                        </div>
                        <input required type="file" class="form-control" name="imagev"  placeholder="entrez image de calendrier">
                    </div>
                   
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
         <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="modifierv">Modifier</button></a> 
          <button type="reset" class="btn btn-danger" >Réinitialiser</button>
        </div>
    </form>
  
  
      </div>
    </div>
  </div>
    <?php
     if(isset($_POST['modifierv'])){
      include('connexion.php');
      $sql="UPDATE vacance SET imagev=? WHERE idv=? ";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['imagev'],$_POST['idv']));
     
  }
  ?>
                <table class="table table-bordered border-5 border mt-5 border-light shadow text-center">
                    <tr>
                       <th>Calendrier des vacances</th>
                       <th>Image de calendrier</th>
                      
                      
                    </tr>
        <?php
        include('connexion.php');
        $sql="SELECT * FROM vacance ";
        $re=$db->prepare($sql);
        $re->execute();
        while($don =$re->fetch()) {
        echo"<tr>

        <td>$don[idv]</td>
        <td><img src='$don[imagev]' width='200px'</td>
        </tr>";
        }?>      
                </table>
            </div> 
             <!-- part5 -->
             <div class="container col-xl-8 my-5 " id="diaporama">
            <h2 class="text-white text-center rounded-3 bg-primary p-2" >Diaporama</h2>
                <a data-bs-toggle="modal" data-bs-target="#ajouterdiapo" class="mt-4  mb-3 float-end"><i class="fa-solid fa-plus btn fs-4 btn-success"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#editdiapo" class="mt-4  mx-2 mb-3  float-end"><i class="fa-solid fa-pen-to-square fs-4 btn btn-primary"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#deletediapo" class="mt-4  mb-3  float-end"><i class="fa-solid fa-trash-can fs-4 btn btn-danger"></i></a>
    <!-- Modal ajouterdiaporama -->
    <div class="modal" id="ajouterdiapo">
        <div class="modal-dialog">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title text-primary">Ajouter une diaporama</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
            <!-- Modal body -->
            <form class="form-inline" method='post' enctype="multipart/form-data">
            <div class="modal-body ">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Diaporama</span>
                      </div>
                      <input required type="text" class="form-control" name="idd"  placeholder="entrez id de diaporama">
                    </div>
                    
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Image</span>
                        </div>
                        <input required type="file" class="form-control" name="imaged"  placeholder="entrez image de diaporama">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Lien</span>
                        </div>
                        <input required type="text" class="form-control" name="liend"  placeholder="entrez lien de diaporama">
                    </div>    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="ajouterd">Ajouter</button></a>
              <button type="reset" class="btn btn-danger" >Réinitialiser</button>
            </div>
        </form>
      </div>
    </div>
  </div>
      <?php
        if(isset($_POST['ajouterd'])){
          include('connexion.php');
          
          // Handle file upload
          $slideImagePlace = $_FILES['imaged']['tmp_name'];
          $slideImageName = $_FILES['imaged']['name'];
          
          $slideDestinationPath = 'slidePhotos/' . $slideImageName;
      
          if(move_uploaded_file($slideImagePlace, $slideDestinationPath)) {
              // File moved successfully
      
              // Insert data into the database
              $sql = "INSERT INTO diaporama (idd, imaged, liend) VALUES (?, ?, ?)";
              $re = $db->prepare($sql);
              $re->execute(array($_POST['idd'], $slideImageName, $_POST['liend']));
              echo "Diaporama item added successfully!";
          } else {
              echo "Error moving image.";
          }
      }
    ?>
         <!-- Modal Effacerdiaporama-->
         <div class="modal" id="deletediapo">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title text-danger">Effacer une diaporama</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              
            </div>
      
            <!-- Modal body -->
            <form class="form-inline" method='post'>
            <div class="modal-body ">
                    <div class="input-group my-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Diaporama</span>
                      </div>
                      <input required type="text" class="form-control" name="idd" placeholder="entrez id de diaporama">
                    </div>
                    êtes-vous sûr de vouloir supprimer
                    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-danger text-white"  name="deleted">Valider</button></a>
              <a href="dashboard.php"><button type="button" class="btn btn-light" >Annuler</button></a>
            </div><!-- Modal footer -->     
        </form>
          </div>
        </div>
      </div>
      <?php
     if(isset($_POST['deleted'])){
      include('connexion.php');
      $sql="DELETE FROM diaporama WHERE idd=?";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['idd']));
  }
  ?>
      <!-- Modal editdiaporama -->
<div class="modal" id="editdiapo">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-primary">Modifier une diaporama</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
        <!-- Modal body -->
        <form class="form-inline" method='post'>
        <div class="modal-body ">
            
        <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Diaporama</span>
                      </div>
                      <input required type="text" class="form-control" name="idd"  placeholder="entrez id de diaporama">
                    </div>
                    
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Image</span>
                        </div>
                        <input required type="file" class="form-control" name="imaged"  placeholder="entrez image de diaporama">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Lien</span>
                        </div>
                        <input required type="text" class="form-control" name="liend"  placeholder="entrez lien de diaporama">
                    </div>     
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
         <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="modifierd">Modifier</button></a> 
          <button type="reset" class="btn btn-danger" >Réinitialiser</button>
        </div>
    </form>
  
  
      </div>
    </div>
  </div>
    <?php
     if(isset($_POST['modifierd'])){
      include('connexion.php');
      $sql="UPDATE diaporama SET imaged=?,liend=? WHERE idd=? ";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['imaged'],$_POST['liend'],$_POST['idd']));
     
  }
  ?>
                <table class="table table-bordered border-5 border mt-5 border-light shadow text-center">
                    <tr>
                       <th>Diaporama</th>
                       <th>Image</th>
                       <th>Lien </th>
                      
                    </tr>
                   
        <?php
        include('connexion.php');
        $sql="SELECT * FROM diaporama ";
        $re=$db->prepare($sql);
        $re->execute();
        while($don =$re->fetch()) {
        echo"<tr>

        <td>$don[idd]</td>
        <td><img src='slidePhotos/$don[imaged]' width='100px'></td>
        <td> <a href='$don[liend]'><i class='fa-solid fa-link btn'></i></a></td></tr>";
        }?>      
                </table>
            </div>  
            <!-- part6 -->
            <div class="container col-xl-8 my-5 " id="actualité">
            <h2 class="text-white text-center rounded-3 bg-primary p-2" >Actualité</h2>
                <a data-bs-toggle="modal" data-bs-target="#ajouteractu" class="mt-4  mb-3 float-end"><i class="fa-solid fa-plus btn fs-4 btn-success"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#editactu" class="mt-4  mx-2 mb-3  float-end"><i class="fa-solid fa-pen-to-square fs-4 btn btn-primary"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#deleteactu" class="mt-4  mb-3  float-end"><i class="fa-solid fa-trash-can fs-4 btn btn-danger"></i></a>
    <!-- Modal ajouterActualité -->
    <div class="modal" id="ajouteractu">
        <div class="modal-dialog">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title text-primary">Ajouter une actualité</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
            <!-- Modal body -->
            <form class="form-inline" method='post' enctype="multipart/form-data">
            <div class="modal-body ">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Actualité</span>
                      </div>
                      <input required type="text" class="form-control" name="idac"  placeholder="entrez id de l'actualité">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Titre</span>
                        </div>
                        <input required type="text" class="form-control" name="titreac"  placeholder="entrez titre de l'actualité">
                    </div> 
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Description</span>
                        </div>
                        <textarea required  class="form-control" name="descriptionac"  placeholder="entrez description de l'actualité"></textarea>
                    </div> 
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Image</span>
                        </div>
                        <input required type="file" class="form-control" name="imageac"  placeholder="entrez image de l'actualité">
                    </div>
                      
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="ajouterac">Ajouter</button></a>
              <button type="reset" class="btn btn-danger" >Réinitialiser</button>
            </div>
        </form>
      </div>
    </div>
  </div>
      <?php
        if(isset($_POST['ajouterac'])){
          include('connexion.php');
          
          // Handle file upload
          $newsImagePlace = $_FILES['imageac']['tmp_name'];
          $newsImageName = $_FILES['imageac']['name'];
          
          $destinationPath = 'newsPhotos/' . $newsImageName;
      
          if(move_uploaded_file($newsImagePlace, $destinationPath)) {
              // File moved successfully
      
              // Insert data into the database
              $d = date("M d, Y");
              $sql = "INSERT INTO actualite (idac, titreac, datea, descriptionac, imageac) VALUES (?, ?, ?, ?, ?)";
              $re = $db->prepare($sql);
              $re->execute(array($_POST['idac'], $_POST['titreac'], $d, $_POST['descriptionac'], $newsImageName));
              echo "Actualite added successfully!";
          } else {
              echo "Error moving image.";
          }
      }
    ?>
         <!-- Modal EffacerActualité-->
         <div class="modal" id="deleteactu">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title text-danger">Effacer une actualité</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              
            </div>
      
            <!-- Modal body -->
            <form class="form-inline" method='post'>
            <div class="modal-body ">
                    <div class="input-group my-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Actualité</span>
                      </div>
                      <input required type="text" class="form-control" name="idac" placeholder="entrez id de l'actualité">
                    </div>
                    êtes-vous sûr de vouloir supprimer
                    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-danger text-white"  name="deleteac">Valider</button></a>
              <a href="dashboard.php"><button type="button" class="btn btn-light" >Annuler</button></a>
            </div><!-- Modal footer -->     
        </form>
          </div>
        </div>
      </div>
      <?php
     if(isset($_POST['deleteac'])){
      include('connexion.php');
      $sql="DELETE FROM actualite WHERE idac=?";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['idac']));
  }
  ?>
      <!-- Modal editActualité -->
<div class="modal" id="editactu">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-primary">Modifier une actualité</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
        <!-- Modal body -->
        <form class="form-inline" method='post' enctype="multipart/form-data">
        <div class="modal-body ">
            
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Actualité</span>
                      </div>
                      <input required type="text" class="form-control" name="idac"  placeholder="entrez id de l'actualité">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Titre</span>
                        </div>
                        
                        <input required type="text" class="form-control" name="titreac"  placeholder="entrez titre de l'actualité">
                    </div> 
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Description</span>
                        </div>
                        <textarea required  class="form-control" name="descriptionac"  placeholder="entrez description de l'actualité"></textarea>
                    </div> 
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Image</span>
                        </div>
                        <input  type="file" class="form-control" name="imageac"  placeholder="entrez image de l'actualité">
                    </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
         <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="modifierac">Modifier</button></a> 
          <button type="reset" class="btn btn-danger" >Réinitialiser</button>
        </div>
    </form>
  
  
      </div>
    </div>
  </div>
    <?php
if(isset($_POST['modifierac'])){
  include('connexion.php');
  
  // Handle file upload
  $newNewsImagePlace = $_FILES['imageac']['tmp_name'];
  $newNewsImageName = $_FILES['imageac']['name'];
  
  // Only attempt to move the file if a new image was uploaded
  if (!empty($newNewsImageName)) {
      $newsDestinationPath = 'newsPhotos/' . $newNewsImageName;
      
      if(move_uploaded_file($newNewsImagePlace, $newsDestinationPath)) {
          // File moved successfully
          updateDataWithNewImage($db, $newNewsImageName);
      } else {
          echo "Error moving image.";
      }
  } else {
      // No new image uploaded, update data without changing the image
      updateDataWithoutNewImage($db);
  }
}

// Function to update data without changing the image
function updateDataWithoutNewImage($db) {
  $sql = "UPDATE actualite SET titreac=?, datea=?, descriptionac=? WHERE idac=?";
  $re = $db->prepare($sql);
  $re->execute(array($_POST['titreac'], date("M d, Y"), $_POST['descriptionac'], $_POST['idac']));
  echo "Actualite updated successfully!";
}

// Function to update data with a new image
function updateDataWithNewImage($db, $newNewsImageName) {
  $newsDestinationPath = 'newsPhotos/' . $newNewsImageName;
  $sql = "UPDATE actualite SET titreac=?, datea=?, descriptionac=?, imageac=? WHERE idac=?";
  $re = $db->prepare($sql);
  $re->execute(array($_POST['titreac'], date("M d, Y"), $_POST['descriptionac'], $newNewsImageName, $_POST['idac']));
  echo "Actualite updated successfully!";
}
  ?>
                <table class="table table-bordered border-5 border mt-5 border-light shadow text-center">
                    <tr>
                       <th>Actualité</th>
                       <th>Titre</th> 
                       <th>Date</th>            
                       <th>Image</th>
                    </tr>
                   
        <?php
        include('connexion.php');
        $sql="SELECT * FROM actualite ";
        $re=$db->prepare($sql);
        $re->execute();
        while($don =$re->fetch()) {
        echo"<tr>

        <td>$don[idac]</td>
        <td>$don[titreac]</td>
        <td>$don[datea]</td>
        <td><img src='./newsPhotos/$don[imageac]' width='100px'></td>
        </tr>";
        }?>      
                </table>
            </div>   
            <!-- part7 -->
            <div class="container col-xl-8 my-5 " id="evénement">
            <h2 class="text-white text-center rounded-3 bg-primary p-2" >Evénement</h2>
                <a data-bs-toggle="modal" data-bs-target="#ajoutereve" class="mt-4  mb-3 float-end"><i class="fa-solid fa-plus btn fs-4 btn-success"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#editeve" class="mt-4  mx-2 mb-3  float-end"><i class="fa-solid fa-pen-to-square fs-4 btn btn-primary"></i></a>
                <a data-bs-toggle="modal" data-bs-target="#deleteeve" class="mt-4  mb-3  float-end"><i class="fa-solid fa-trash-can fs-4 btn btn-danger"></i></a>
    <!-- Modal ajouterEvénement -->
    <div class="modal" id="ajoutereve">
        <div class="modal-dialog">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title text-primary">Ajouter un evénement</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
            <!-- Modal body -->
            <form class="form-inline" method='post' enctype="multipart/form-data">>
            <div class="modal-body ">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Evénement</span>
                      </div>
                      <input required type="text" class="form-control" name="ide"  placeholder="entrez id de l'evénement">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Titre</span>
                        </div>
                        <input required type="text" class="form-control" name="titree"  placeholder="entrez titre de l'evénement">
                    </div> 
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Description</span>
                        </div>
                        <textarea required  class="form-control" name="descriptione"  placeholder="entrez description de l'evénement"></textarea>
                    </div> 
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Image</span>
                        </div>
                        <input required type="file" class="form-control" name="imagee"  placeholder="entrez image de l'evénement">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Date</span>
                        </div>
                        <input required type="date" class="form-control" name="datee"  placeholder="entrez la date de l'evénement">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Time</span>
                        </div>
                        <input required type="text" class="form-control" name="time"  placeholder="entrez le temps de l'evénement">
                    </div> 
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Localisation</span>
                        </div>
                        <input required type="text" class="form-control" name="locale"  placeholder="entrez localisation de l'evénement">
                    </div> 
                      
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="ajoutere">Ajouter</button></a>
              <button type="reset" class="btn btn-danger" >Réinitialiser</button>
            </div>
        </form>
      </div>
    </div>
  </div>
      <!-- original code  -->
      <?php
    //     if(isset($_POST['ajoutere'])){
    //     include('connexion.php');
    //     $eventImagePlace = $_FILES['imagee']['tmp_name'];
    //     $eventImageName = $_FILES['imagee']['name'];
    //     move_uploaded_file($eventImagePlace, './eventsPhotos/'.$eventImageName);
    //     $sql="INSERT INTO evenement (ide,titree,descriptione,imagee,datee,time,localisation) Value (?,?,?,?,?,?,?)";
    //     $re=$db->prepare($sql);
    //     $re->execute(array($_POST['ide'],$_POST['titree'],$_POST['descriptione'],$_POST['imagee'],$_POST['datee'],$_POST['time'],$_POST['locale']));
    // }
    ?>
    <!-- chatGPT code  -->
    <?php
      if(isset($_POST['ajoutere'])) {
        include('connexion.php');
        
        $eventImagePlace = $_FILES['imagee']['tmp_name'];
        $eventImageName = $_FILES['imagee']['name'];
        
        $destinationPath = 'eventsPhotos/' . $eventImageName;
    
        if(move_uploaded_file($eventImagePlace, $destinationPath)) {
            // Image moved successfully
            $sql = "INSERT INTO evenement (ide, titree, descriptione, imagee, datee, time, localisation) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $re = $db->prepare($sql);
            $re->execute(array($_POST['ide'], $_POST['titree'], $_POST['descriptione'], $eventImageName, $_POST['datee'], $_POST['time'], $_POST['locale']));
            echo "Event added successfully!";
        } else {
            echo "Error moving image.";
        }
      }
      ?>
         <!-- Modal EffacerEvénement-->
         <div class="modal" id="deleteeve">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title text-danger">Effacer un evénement</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              
            </div>
      
            <!-- Modal body -->
            <form class="form-inline" method='post'>
            <div class="modal-body ">
                    <div class="input-group my-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Evénement</span>
                      </div>
                      <input required type="text" class="form-control" name="ide" placeholder="entrez id de l'evénement">
                    </div>
                    êtes-vous sûr de vouloir supprimer
                    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-danger text-white"  name="deletee">Valider</button></a>
              <a href="dashboard.php"><button type="button" class="btn btn-light" >Annuler</button></a>
            </div><!-- Modal footer -->     
        </form>
          </div>
        </div>
      </div>
      <?php
     if(isset($_POST['deletee'])){
      include('connexion.php');
      $sql="DELETE FROM evenement WHERE ide=?";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['ide']));
  }
  ?>
      <!-- Modal editEvénement -->
<div class="modal" id="editeve">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-primary">Modifier un evénement</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
        <!-- Modal body -->
        <form class="form-inline" method='post' enctype="multipart/form-data">
        <div class="modal-body ">
            
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Evénement</span>
                      </div>
                      <input required type="text" class="form-control" name="ide"  placeholder="entrez id de l'evénement">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Titre</span>
                        </div>
                        <input required type="text" class="form-control" name="titree"  placeholder="entrez titre de l'evénement">
                    </div> 
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Description</span>
                        </div>
                        <textarea required  class="form-control" name="descriptione"  placeholder="entrez description de l'evénement"></textarea>
                    </div> 
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Image</span>
                        </div>
                        <input type="file" class="form-control" name="imagee"  placeholder="entrez image de l'evénement">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Date</span>
                        </div>
                        <input required type="date" class="form-control" name="datee"  placeholder="entrez la date de l'evénement">
                    </div>
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Time</span>
                        </div>
                        <input required type="text" class="form-control" name="time"  placeholder="entrez le temps de l'evénement">
                    </div> 
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text text-primary">Localisation</span>
                        </div>
                        <input required type="text" class="form-control" name="locale"  placeholder="entrez localisation de l'evénement">
                    </div> 
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
         <a href="dashboard.php"><button type="submit" class="btn btn-primary text-white"  name="modifiere">Modifier</button></a> 
          <button type="reset" class="btn btn-danger" >Réinitialiser</button>
        </div>
    </form>
  
  
      </div>
    </div>
  </div>
    <?php
     if(isset($_POST['modifiere'])){
      include('connexion.php');
      
      // Handle file upload
      $eventImagePlace = $_FILES['imagee']['tmp_name'];
      $eventImageName = $_FILES['imagee']['name'];
      
      // Only attempt to move the file if a new image was uploaded
      if (!empty($eventImageName)) {
          $destinationPath = 'eventsPhotos/' . $eventImageName;
          
          if(move_uploaded_file($eventImagePlace, $destinationPath)) {
              // File moved successfully
              updateEventWithImage($db, $eventImageName);
          } else {
              echo "Error moving image.";
          }
      } else {
          // No new image uploaded, update data without changing the image
          updateEventWithoutImage($db);
      }
  }
  
  // Function to update data without changing the image
  function updateEventWithoutImage($db) {
      $sql = "UPDATE evenement SET titree=?, descriptione=?, datee=?, time=?, localisation=? WHERE ide=?";
      $re = $db->prepare($sql);
      $re->execute(array($_POST['titree'], $_POST['descriptione'], $_POST['datee'], $_POST['time'], $_POST['locale'], $_POST['ide']));
      echo "Event updated successfully!";
  }
  
  // Function to update data with a new image
  function updateEventWithImage($db, $eventImageName) {
      $destinationPath = 'eventsPhotos/' . $eventImageName;
      $sql = "UPDATE evenement SET titree=?, descriptione=?, imagee=?, datee=?, time=?, localisation=? WHERE ide=?";
      $re = $db->prepare($sql);
      $re->execute(array($_POST['titree'], $_POST['descriptione'], $eventImageName, $_POST['datee'], $_POST['time'], $_POST['locale'], $_POST['ide']));
      echo "Event updated successfully!";
  }
  
  ?>
                <table class="table table-bordered border-5 border mt-5 border-light shadow text-center">
                    <tr>
                       <th>Evénement</th>
                       <th>Titre</th>
                       <th>Image</th>
                       <th>Date</th>
                       <th>Time</th>
                       <th>Localisation</th>
                    </tr>
                   
        <?php
        include('connexion.php');
        $sql="SELECT * FROM evenement ";
        $re=$db->prepare($sql);
        $re->execute();
        while($don =$re->fetch()) {
        echo"<tr>

        <td>$don[ide]</td>
        <td>$don[titree]</td>
      
        <td><img src='eventsPhotos/$don[imagee]' width='100px'></td>
        <td>$don[datee]</td>
        <td>$don[time]</td>
        <td>$don[localisation]</td>
        </tr>";
        }
        ?>      
                </table>
            </div>   
            <!-- part8 -->
            <div class="container col-xl-8 my-5 " id="contact">
            <h2 class="text-white text-center rounded-3 bg-primary p-2" >Contact</h2>
                <a data-bs-toggle="modal" data-bs-target="#deletecontact" class="mt-4  mb-3  float-end"><i class="fa-solid fa-trash-can fs-4 btn btn-danger"></i></a>
   
         <!-- Modal Effacercontact-->
         <div class="modal" id="deletecontact">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title text-danger">Effacer un contact</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              
            </div>
      
            <!-- Modal body -->
            <form class="form-inline" method='post'>
            <div class="modal-body ">
                    <div class="input-group my-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text text-primary">Contact</span>
                      </div>
                      <input required type="text" class="form-control" name="idc" placeholder="entrez id de contact">
                    </div>
                    êtes-vous sûr de vouloir supprimer
                    
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a href="dashboard.php"><button type="submit" class="btn btn-danger text-white"  name="deletec">Valider</button></a>
              <a href="dashboard.php"><button type="button" class="btn btn-light" >Annuler</button></a>
            </div><!-- Modal footer -->     
        </form>
          </div>
        </div>
      </div>
      <?php
     if(isset($_POST['deletec'])){
      include('connexion.php');
      $sql="DELETE FROM contact WHERE idc=?";
      $re=$db->prepare($sql);
      $re->execute(array($_POST['idc']));
  }
  ?>
      
                <table class="table table-bordered border-5 border mt-5 border-light shadow text-center">
                    <tr>
                       <th>Contact</th>
                       <th>Nom</th>
                       <th>Email</th>
                       <th>Commentaire</th>
                    </tr>
                   
        <?php
        include('connexion.php');
        $sql="SELECT * FROM contact ";
        $re=$db->prepare($sql);
        $re->execute();
        while($don =$re->fetch()) {
        echo"<tr>

        <td>$don[idc]</td>
        <td>$don[nomc]</td>
        <td>$don[emailc]</td>
        <td>$don[comment]</td>
        </tr>";
        }?>      
                </table>
            </div>   
        </div>
    </div>
    
</body>
</html>