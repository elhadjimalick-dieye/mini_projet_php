<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="projets.css">
    </head>
    <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="pagedacceuil.php">ACCUEIL</a></li>
      <li><a href="listeproduits.php">liste des produits</a></li>
      <li><a href="ajout.php">ajouter produits</a></li>
      <li><a href="modifier.php">modifier produits</a></li>
      <li><a href="recherche.php">Rechercher produits </a></li>
      <li><a href="supprimer.php">Supprimer produits</a></li>
    </ul>
  
  </div>
</nav>
       <?php  
        include 'header.php';

        ?>
        <div class="container">
        <?php   $produit=array(
                        array('HP',70,400000,400000*70),
                        array('MAC',80,450000,450000*80),
                        array('LENOVO',8,220000,220000*8),
                        array('SAMSUNG',25,250000,250000*25),
                        array('SONY',9,200000,200000*9),
                        array('DELL',15,200000,200000*15),
                        array('TOSHIBA',10,200000,200000*10),
                        array('IMPRIMANTE',40,250000,250000*40),
                        array('PROJECTEUR',15,200000,200000*15),
                        array('DISQUE DUR',250,100000,100000*250)

                    );         ?>
            <br><br>
        <h1>RECHERCHER PRODUITS </h1>
        <br>
        
               <form class="form-inline" method="post" action=""> 
                <div class="row">
                    <div class="form-group">
                     <label for="recherche" class="sr-only">Rechercher</label>
                     <input type="number" name="recherche" class="form-control" id="recherche" placeholder="taper un seuil" >
                    </div>
                    <div class="col1">
                     <input type="number" name="pumin" class="form-control" id="inputEmail3" placeholder="Prix minimum" >
                    </div>
                    <div class="col2">
                    <input type="number" name="pumax" class="form-control" id="inputEmail3" placeholder="Prix Maximum"  >
                     </div>
                    <button type="submit" name="valider" class="btn btn-primary mb-2"required>RECHERCHER</button>
                </div>
                </form>
              
       
                <?php 
                      $ligne=10;
                      $colonne=4;
                    if (isset($_POST ['valider'])){
                        if(empty($_POST['max'])&& empty($_POST['quantite'])&&empty($_POST['min'])){
                            header('location: recherche.php');
                         }
                         else{
                        $r=$_POST['recherche'];
                        $prixmin=$_POST['pumin'];
                        $prixmax=$_POST['pumax'];
                      
                            echo '<table class="table ">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">DESIGNATION</th>
                                    <th scope="col">QUANTITE</th>
                                    <th scope="col">PRIX UNITAIRE</th>
                                    <th scope="col">MONTANT</th>

                                    </tr>
                                </thead>
                                <tbody>'
                                    ; }
                                    
              for($i=0;$i<$ligne;$i++){
                echo '<tr>';
                if($r<=$produit[$i][1] && $r!=""){
              if($produit[$i][1]<10){
                                                      
              for($j=0;$j<$colonne;$j++){
              echo '<td  class="bg-danger">'.$produit[$i][$j].'</td>';       
            }
          }
          else {
          for($j=0;$j<$colonne;$j++){
              echo '<td >'.$produit[$i][$j].'</td>';
              }
              }
              }
              elseif($prixmin<=$produit[$i][2] && $prixmax=="" && $r==""){
              if($produit[$i][1]<10){
                                                  
              for($j=0;$j<$colonne;$j++){
                echo '<td  class="bg-danger">'.$produit[$i][$j].'</td>';       
              }
          }
          else {
          for($j=0;$j<$colonne;$j++){
          echo '<td >'.$produit[$i][$j].'</td>';
          }
          }
          }
          elseif($prixmax<=$produit[$i][2] && $prixmin=="" && $r==""){
          if($produit[$i][1]<10){
                                              
        for($j=0;$j<$colonne;$j++){
          echo '<td  class="bg-danger">'.$produit[$i][$j].'</td>';       
          }
      }
        else {
          for($j=0;$j<$colonne;$j++){
        echo '<td >'.$produit[$i][$j].'</td>';
          }
      }
      }
      elseif( $r=="" && $produit[$i][2]>=$prixmin && $produit[$i][2]<=$prixmax && $prixmin!="" && $prixmax!="" ){
          if($produit[$i][1]<10){
                                                      
          for($j=0;$j<$colonne;$j++){
              echo '<td  class="bg-danger">'.$produit[$i][$j].'</td>';       
      }
        }
          else {
          for($j=0;$j<$colonne;$j++){
            echo '<td >'.$produit[$i][$j].'</td>';
          }
      }
      }
                                          
        elseif($r<=$produit[$i][1] && $prixmin<=$produit[$i][2] && $prixmax >= $produit[$i][2] && $prixmax>$prixmin && $prixmax!="" && $prixmin!="" && $r!=""){
      if($produit[$i][1]<10){
                                                      
          for($j=0;$j<$colonne;$j++){
      echo '<td  class="color-red">'.$produit[$i][$j].'</td>';       
          }
          }
          else {
            for($j=0;$j<5;$j++){
            echo '<td >'.$produit[$i][$j].'</td>';
              }
              }
          }
                                        
      }
                              
          echo '</tr>';     
              echo  '</tbody>
          </table> ';
        }   
          ?>
        </div>
        <style>
        
        .form-group{
            margin-left:15%;
        }
        .col1{
            margin-left:35%;
            margin-top:-3%;
        }
        .col2{
            margin-left:55%;
            margin-top:-3%;
        }
        .btn {
            margin-left:75%;
            margin-top:-5%;
        }
        </style>

 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
 
                    
        </body>


</html>