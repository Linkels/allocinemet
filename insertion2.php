<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allocine";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  //récupération des valeurs des champs:
  //nom:
  $titre  = $_POST["titre"] ;
  //prenom:
  $synopsis = $_POST["synopsis"] ;
  //adresse:
  $Realisateur = $_POST["Realisateur"] ;
  //code postal:
  $Product        = $_POST["Product"] ;
  //numéro de téléphone:
  $Acteur       = $_POST["Acteur"] ;
  //lien youtube:
  $lien       = $_POST["lien"] ;

  //création de la requête SQL:
  $sql = "INSERT  INTO film (titre, synopsis, Realisateur, Product, Acteur, lien)
            VALUES ( '$titre', '$synopsis', '$Realisateur', '$Product', '$Acteur', '$lien') " ;

  //exécution de la requête SQL:
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>


  <a href="index.php">index</a>
