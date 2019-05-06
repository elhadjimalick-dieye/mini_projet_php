<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="projets.css">
    <title>Document</title>
</head>
<body>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">ACCUEIL</a></li>
      <li><a href="listeproduits.php">liste des produits</a></li>
      <li><a href="ajout.php">ajouter produits</a></li>
      <li><a href="modifier.php">modifier produits</a></li>
      <li><a href="recherche.php">Rechercher produits </a></li>
      <li><a href="supprimer.php">Supprimer produits</a></li>
    </ul>

  </div>
  <form  method="POST" action="" style="margin-left:70%;margin-top:1%;">
<p>
    <input type="text" name="produits" placeholder="nom produits" required/>
   
   
    <button type="submit"  name="ok" class="btn btn-primary">supprimer</button>
</p>
</form>
</nav>

   
<!-- The form -->




<?php

echo "<strong ><h1 >Tableau des produits</h1></strong>";

   
$produit = array(
                array('Produits','Prix unitaire','Quantites','Montants'),
                array('HP',400000,70,400000*70),
                array('MAC',450000,80,450000*80),
                array('LENOVO',220000,8,220000*8),
                array('SAMSUNG',250000,25,250000*25),
                array('SONY',200000,9,200000*9),
                array('DELL',200000,15,200000*15),
                array('TOSHIBA',200000,10,200000*10),
                array('IMPRIMANTE',250000,40,250000*40),
                array('PROJECTEUR',200000,15,200000*15),
                array('CAMERA',200000,150,200000*150),
                array('DISQUE DUR',100000,250,100000*250)
);
               if (isset($_POST["ok"])) {
                  $nom = $_POST['produits'];
                  $Prix_unitaire=$_POST['prix_unitaire'];
                  $Quantites=$_POST['quantite'];
                  $update=$nom;

                  for($i=0; $i<count($produit);$i++){
                    if($update==$produit[$i][0]){
                      
                      $produit [$i][1]=$Prix_unitaire;
                      $produit [$i][2]=$Quantites;
                      $Montant=$Prix_unitaire*$Quantites;
                      $produit [$i][3]=$Montant;

                      
                
                    }
                
                }
                }

                    echo "<table class='table container'>";
                    
                    '<thead class="thead-dark">';
                    
                    ?>


                    
            <?php
$sup=$_POST['produits'];
if (isset($sup)) {
    echo '<tr>';
    for ($i=0; $i < count ($produit) ; $i++) { 
        for ($j =0; $j  < count ($produit[$i]) ; $j ++) { 
         if ($produit[$i][0]== $sup) {
        unset($produit[$i]);
         }
        }
    }
    echo '</tr>';
}
echo "<table class='table container'>";
'<thead class="thead-dark">';
for($i=0; $i<count($produit);$i++){
   if ($produit[$i][2] >=10 || $produit[$i][2]=="Quantites"){
     echo '<tr ><th class="thead-dark";  scope="col">'.$produit[$i][0].'</th>';
     echo '<th  class="thead";scope="col">'.$produit [$i][1].'</th>';
     echo '<th class="th"; scope="col">'.$produit [$i][2].'</th>';
     echo '<th class="tm"; scope="col">'.$produit [$i][3].'</th>'.'<br>'.'<br>'.'</tr>';
   }
   else{
  
   echo '<tr class="" ><th class="thead-dark";  scope="col">'.$produit[$i][0].'</th>';
   echo '<th  class="thead";scope="col">'.$produit [$i][1].'</th>';
   echo '<th  class="th red"; scope="col" >'.$produit [$i][2].'</th>';
   echo '<th class="tm"; scope="col">'.$produit [$i][3].'</th>'.'<br>'.'<br>'.'</tr>'; 
   }
 }
 '</thead>';
echo '</table>';



        




?>
<style>
.thead-dark{
  background-color:skyblue;
  width:1%;
}
.thead{
  background-color:white;
  width:1%;
}
.th{
  background-color:;
  width:1%;

}
.tm{
  background-color:skyblue;
  width:1%;
}

table
 {
;
    margin-left: 10%;
    width: 80%;
    margin-top:-300PX; 
    height: 150px;
}


tfoot {
    background-color: #333;
    color: #fff;
}
h1{
    margin-left: 35%;
    color: darkcyan;
    padding-top:-25%;
    padding-bottom:1%;
}
input{
  width:60%;
  height:31px;
}

.red{
color: red !important;
}

</style>













   
</body>
</html>