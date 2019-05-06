<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="projets.css">
    
    <title>liste des produits</title>

  
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
 echo "<strong ><h1>Tableau des produits</h1></strong>";

   
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

  width:1%;
  
}
.tm{
  background-color:skyblue;
  width:1%;
}

table
 {
    border: 1px solid rgb(32, 53, 54);
    margin-left: 10%;
    width: 80%;
    margin-top:-38%; 
    height: 200px;
}


tfoot {
    background-color: #333;
    color: #fff;
}
h1{
    margin-left: 35%;
    color: darkcyan;
    padding-top:-1%;
    padding-bottom:1%;
}
.red{
color: red !important;
}


</style>


</body>
</html>