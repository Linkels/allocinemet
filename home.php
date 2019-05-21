<?php

//home.php

/**
 * Start the session.
 */
session_start();


/**
 * Check if the user is logged in.
 */
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: login.php');
    exit;
}


/**
 * Print out something that only logged in users can see.
 */

?>
<?php  include('server.php'); ?>
<?php
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM film WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$titre = $n['titre'];
			$synopsis = $n['synopsis'];
			$Realisateur = $n['Realisateur'];
			$Product = $n['Product'];
			$Acteur = $n['Acteur'];
			$image = $n['image'];
			$lien = $n['lien'];
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
  <title>CRUD: CReate, Update, Delete PHP MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/crud.css">
</head>

<body>
  <?php if (isset($_SESSION['message'])): ?>
  <div class="msg">
    <?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		?>
  </div>


  <input type="hidden" name="id" value="<?php echo $id; ?>">

  <?php endif ?>
  <form method="post" action="server.php">
    <div class="input-group">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <label>titre</label>
      <input type="text" name="titre" value="<?php echo $titre; ?>">
    </div>
    <div class="input-group">
      <label>synopsis</label>
      <input type="text" name="synopsis" value="<?php echo $synopsis; ?>">
    </div>
    <div class="input-group">
      <label>Realisateur</label>
      <input type="text" name="Realisateur" value="<?php echo $Realisateur; ?>">
    </div>
    <div class="input-group">
      <label>Product</label>
      <input type="text" name="Product" value="<?php echo $Product; ?>">
    </div>
    <div class="input-group">
      <label>Acteur</label>
      <input type="text" name="Acteur" value="<?php echo $Acteur; ?>">
    </div>
    <div class="input-group">
      <label>image</label>
      <input type="text" name="image" value="<?php echo $image; ?>">
    </div>
    <div class="input-group">
      <label>lien</label>
      <input type="text" name="lien" value="<?php echo $lien; ?>">
    </div>
    <div class="input-group">
      <?php if ($update == true): ?>
      <button class="btn" type="submit" name="update" style="background: #556B2F;">update</button>
      <?php else: ?>
      <button class="btn" type="submit" name="save">Save</button>
      <?php endif ?>
    </div>
  </form>

  <?php $results = mysqli_query($db, "SELECT * FROM film"); ?>

  <table>
    <thead>
      <tr>
        <th>titre</th>
        <th>synopsis</th>
        <th>Realisateur</th>
        <th>Product</th>
        <th>Acteur</th>
        <th>image</th>
        <th>lien</th>
      </tr>
    </thead>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row['titre']; ?></td>
      <td><?php echo $row['synopsis']; ?></td>
      <td><?php echo $row['Realisateur']; ?></td>
      <td><?php echo $row['Product']; ?></td>
      <td><?php echo $row['Acteur']; ?></td>
      <td><?php echo $row['image']; ?></td>
      <td><?php echo $row['lien']; ?></td>
      <td>
        <a href="home.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a>
      </td>
      <td>
        <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>

  <form>
    <a href="index.php"><button type="button" name="button">index</button></a>
    <a href="allo_films.php"><button type="button" name="button">FILMS</button></a>

    <a href="deconnexion.php"><button type="button" name="button">Déco</button></a>
</body>

</html>
