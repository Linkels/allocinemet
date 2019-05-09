<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Réalisateur</title>

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

</head>

    <?php
    $bdd = new PDO('mysql:host=localhost;dbname=allocine;charset=utf8', 'root', '');
    $requete = "SELECT * FROM realisateur WHERE id=" . $_GET["id"];
    $reponse = $bdd->query($requete);
    while ($donnees = $reponse->fetch())
    {
  ?>

<body>
  <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
  <?php include "header.php";?>



  <main id="real">

    <!--  pour le titre -->
    <div class="hoofd">
      <h1 class="text-uppercase"><?php echo $donnees['Nom'];?></h1>
      <div class="fleches_2">
        <img class="fleche_g animated fadeInLeft" src="img/ligne_g.png">
        <img class="fleche_d animated fadeInRight" src="img/ligne_d.png">
      </div>
    </div>


    <!--<div class="header_films">
          <h1>NOS FILMS</h1>
          <div class="ligne">
          <img class="ligne_g fadeInLeft animated" src="img/ligne_g.png">
          <img class="ligne_d fadeInRight animated" src="img/ligne_d.png">
      </div>
    </div>-->
    <!-- pour la partie carte d'identité et sa photo -->

    <div class="row">
      <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
      <div class="col-10 col-sm-10 col-md-5 col-lg-5 col-xl-6">

        <div class="list-group CI">
          <a class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Naissance</h5>
            </div>
            <?php echo'<p class="mb-1">' . $donnees['Naissance'] . '</p>';?>
          </a>
          <a class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Filmopgraphie</h5>
            </div>
            <?php echo'<p class="mb-1">' . $donnees['Filmographie'] . '</p>';?>
          </a>
        </div>
      </div>

      <div class="col-3 col-sm-3 col-md-1 col-lg-1 col-xl-1"></div>

      <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">

        <img src="img/<?php echo $donnees["img"]; ?>" height="100%" width="100%">

      </div>
      <div class="col-3 col-sm-3 col-md-2 col-lg-2 col-xl-1"></div>

    </div>
    </div>


    <!--  pour la descrition de l'oeuvre du réalisateur  -->

      <?php echo'<p class="text-center shadow-lg p-3 mb-5 bg-light rounded">' . $donnees['Biographie'] . '</p>';?>


  </main>

  <?php

}
$reponse->closeCursor();
 ?>

  <?php include "footer.php";?>


  <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    $('.m-nav-toggle').click(function(e) {
      e.preventDefault();
      $('#Navbar').toggleClass('is-open');
    })


    document.addEventListener('DOMContentLoaded', function() {
      window.onscroll = function(ev) {
        document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" :
          "cInvisible";
      };
    });

    $('#sidebarCollapse').click(function(e) {
      e.preventDefault();
      $('#sidebar').toggleClass('active');
    })

    function openModal() {
      document.getElementById("modal").style.top = "0px";
    }

    function closeModal() {
      document.getElementById("modal").style.top = "-780px";
    }
  </script>

</body>

</html>
