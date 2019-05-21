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

echo 'Congratulations! You are logged in!';
?>

<!DOCTYPE html>
<html lang="en">

<html>
  <head>
    <title></title>
  </head>
<body>
<form name="insertion" action="insertion2.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>titre</td>
      <td><input type="text" name="titre"></td>
    </tr>
    <tr align="center">
      <td>synopsis</td>
      <td><input type="text" name="synopsis"></td>
    </tr>
    <tr align="center">
      <td>Realisateur</td>
      <td><input type="text" name="Realisateur"></td>
    </tr>
    <tr align="center">
      <td>Product</td>
      <td><input type="text" name="Product"></td>
    </tr>
    <tr align="center">
      <td>Acteur</td>
      <td><input type="text" name="Acteur"></td>
    </tr>
    <tr align="center">
      <td>lien</td>
      <td><input type="text" name="lien"></td>
    </tr>

    <tr align="center">
      <td colspan="2"><input type="submit" value="insérer"></td>
    </tr>
  </table>
</form>
<a href="index.php">index</a>
</body>
</html>
