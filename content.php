<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Content</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <!--  pour la police des titres  -->
  <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <!-- pour les autres textes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <!--mon CSS -->
  <link rel="stylesheet" href="css/style_pages_cont_real_act.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <?php include "header.php";?>


  <?php
$bdd = new PDO('mysql:host=localhost;dbname=allocine;charset=utf8', 'root', '');
  $requete = "SELECT * FROM film WHERE id=" . $_GET["id"];
  $reponse = $bdd->query($requete);
  while ($donnees = $reponse->fetch())
  {
?>

  <main id="content">

    <!--  pour le titre -->

    <div class="hoofd">
      <h1 class="text-uppercase">


        <?php echo $donnees["titre"];?>

      </h1>
      <div class="fleches_2">
        <img class="fleche_g animated fadeInLeft" src="img/ligne_g.png">
        <img class="fleche_d animated fadeInRight" src="img/ligne_d.png">
      </div>
    </div>

    <!-- pour l'image du film -->
    <div id="img_content">
      <img src="img/<?php echo $donnees["image"]; ?>" class="mr-3" alt="...">
    </div>

    <!-- pour la description du film -->



    <?php

        echo'<p class="text-center bg-light">' . $donnees['synopsis'] . '</p>';

    ?>

    <!-- pour la partie récap d'infos et la bande annonce -->

    <div class="row">
      <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
      <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-5">

        <div class="list-group">
           <div class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Réalisateur</h5>
            </div>

            <p class="mb-1">
              <a href="realisateur.php?id=<?php echo $donnees["id"];?>"
              <?php

                echo'<p>' . $donnees['Realisateur'] . '</p>';

            ?>
          </a>
              </small>
          </div>
          <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Production</h5>
            </div>
            <p class="mb-1">

              <?php
                echo'<p>' . $donnees['Product'] . '</p>';

            ?>

          </a>
          <a href="acteur.html" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Acteurs</h5>
            </div>
            <p class="mb-1">

              <?php
                echo'<p>' . $donnees['Acteur'] . '</p>';

            ?>

          </a>
        </div>
      </div>

      <div class="col-1 col-sm-3 col-md-3 col-lg-1 col-xl-1"></div>
      <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4">
        <iframe class="shadow-lg p-3 mb-5 bg-light rounded" src="<?php echo $donnees["lien"]; ?>" height="250px" width="450px">f</iframe>
      </div>



      <div class="col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1"></div>

    </div>

  </main>

  <?php

}
$reponse->closeCursor();
 ?>

  <?php include "footer.php";?>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>

</html>
