<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


  <title>AllocineMet</title>

  <link href="https://fonts.googleapis.com/css?family=Poiret+One|Roboto+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script rel="text/javascript" src="app.js"></script>
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">


</head>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=allocine;charset=utf8', 'root', '');
$requete = "SELECT * FROM film";
$reponse = $bdd->query($requete);
?>

<body>

  <?php include "header.php";?>

  <div onmouseover="nav2()" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/THE-VILLAINESS.jpg" class="d-block w-100 img" height="960px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/hobbit_3.jpg" class="d-block w-100 img" height="960px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/escobar.jpg" class="d-block w-100 img" height="960px" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="bg1">
    <h1 class="text-center text-light  mb-3">
      <font color="black">à l' affiche</font>
    </h1>
    <div class="ligne text-center">
      <img class="ligne_g fadeInLeft animated" src="img/ligne_g.png">
      <img class="ligne_d fadeInRight animated" src="img/ligne_d.png">
    </div>

    <!-- Carousel -->
    <div class="carousel mt-5" id="carou" data-flickity>
      <?php
            while($donnees = $reponse->fetch())
            {
              ?>
      <div class="carousel-cell"><a href="content.php?id=<?php echo $donnees["id"];?>">
        <img class="img_caroussel" src="img/<?php echo $donnees["image"]; ?>">
      </a></div>
      <?php
            }
            ?>
      </a></div>
      <!-- fun du Carousel -->

    </div>
  </div>
  <div class="parallax-window" data-parallax="scroll" data-image-src="./img/pop.jpeg"></div>
  <div onmouseover="nav1()" class="container-titre mx-auto my-5 text-center">
    <h1>ALLOCINEMET</h1>
    <div class="ligne text-center">
      <img class="ligne_g fadeInLeft animated" src="img/ligne_g.png">
      <img class="ligne_d fadeInRight animated" src="img/ligne_d.png">
    </div>
  </div>
  <div class="container-fluid col-12 mx-auto my-5">
    <div class="image float-left col-4">
      <img src="https://i.ytimg.com/vi/GXM838nBLuw/maxresdefault.jpg" class="img-fluid" alt="Responsive image">
    </div>
    <div class="text-center container-fluid mx-auto ">
      <h2 class=" container-fluid mx-auto">Lorem Ipsum</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga error reiciendis repellat, aut quos
        culpa
        distinctio tempora a laudantium voluptatem eligendi possimus nesciunt quas maiores, asperiores
        beatae
        esse? Nulla, totam.</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
        eligendi
        repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
        quis?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
        eligendi
        repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
        quis?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nesciunt sapiente. Magnam dicta
        eligendi
        repellendus repellat dolore saepe rem totam. Possimus quam illo aliquam repudiandae ipsam nam ad, et
        quis?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita minus nisi sed cum, molestiae
        voluptates est voluptatibus architecto iusto molestias esse sapiente hic nulla quasi vel aperiam a
        ex tempora!</p>
    </div>
  </div>

  <?php include "footer.php";?>

  <script src="js/app.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/parallax.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
