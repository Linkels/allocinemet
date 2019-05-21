<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'allocine');

	// initialize variables
	$titre = "";
	$synopsis = "";
	$Realisateur = "";
	$Product = "";
	$Acteur = "";
	$image = "";
	$lien = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$titre = $_POST['titre'];
		$synopsis = $_POST['synopsis'];
  	$Realisateur = $_POST['Realisateur'];
  	$Product = $_POST['Product'];
  	$Acteur = $_POST['Acteur'];
  	$image = $_POST['image'];
    $lien = $_POST['lien'];

		mysqli_query($db, "INSERT INTO film (titre, synopsis, Realisateur, Product, Acteur, image, lien) VALUES ('$titre', '$synopsis', '$Realisateur', '$Product', '$Acteur', '$image', '$lien')");
		$_SESSION['message'] = "Film sauvegardé !";
		header('location: home.php');
	}

  if (isset($_POST['update'])) {
  	$id = $_POST['id'];
  	$titre = $_POST['titre'];
  	$synopsis = $_POST['synopsis'];
  	$Realisateur = $_POST['Realisateur'];
  	$Product = $_POST['Product'];
  	$Acteur = $_POST['Acteur'];
  	$image = $_POST['image'];
  	$lien = $_POST['lien'];

  	mysqli_query($db, "UPDATE film SET titre='$titre', synopsis='$synopsis', Realisateur='$Realisateur', Product='$Product', Acteur='$Acteur', image='$image', lien='$lien' WHERE id=$id");
  	$_SESSION['message'] = "Film mis à jour !";
  	header('location: home.php');
  }

  if (isset($_GET['del'])) {
  	$id = $_GET['del'];
  	mysqli_query($db, "DELETE FROM film WHERE id=$id");
  	$_SESSION['message'] = "Film supprimé !";
  	header('location: home.php');
  }
