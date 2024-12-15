<?php 
require './conn/db.php';

// Vérifiez si le formulaire a été soumis
$villes_result = null;
$query = "SELECT * FROM ville";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Location'])) {
    $pays_id = mysqli_real_escape_string($conn, $_POST['Location']);

    // Requête pour récupérer les villes correspondant au pays sélectionné
    $query = "SELECT * FROM ville WHERE id_pays = '$pays_id'";
}
$villes_result = mysqli_query($conn, $query);
?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>Africa Géo-Junior</title>

  <link href="assets/images/removebg-preview.png" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/removebg-preview.png" style="height: 75px; width: 75px; margin-top: -2px;" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="ajouter.php">Ajouter</a></li>
              <li><a href="villes.php" class="active">Villes</a></li>
              <!-- <li><a href="deals.html">Deals</a></li> -->
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Explorez les villes emblématiques</h4>
          <h2>Leurs richesses culturelles et leurs paysages uniques</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <div class="search-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form id="search-form" name="gs" method="Post" role="search" action="villes.php">
            <div class="row">
              <div class="col-lg-2">
                <h4>Pays:</h4>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <select name="Location" class="form-select" aria-label="Default select example" id="chooseLocation"
                    onChange="this.form.click()" required>
                    <option value="" selected>Pays</option>
                    <?php
                       $pays_query = "SELECT id_pays, nom FROM pays";
                       $pays_result = mysqli_query($conn, $pays_query);
                       while ($pays = mysqli_fetch_assoc($pays_result)) {
                        echo "<option value='" . $pays['id_pays'] . "'>" . $pays['nom'] . "</option>";
                       }
                     ?>
                  </select>
                </fieldset>
              </div>
              <div class="col-lg-2">
                <fieldset>
                  <button type="submit" class="border-button">Rechercher</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="amazing-deals">
    <div class="container">
      <div class="row">

        <?php
      if ($villes_result && mysqli_num_rows($villes_result) > 0) {
        while ($ville = mysqli_fetch_assoc($villes_result)) { ?>
        <div class="col-lg-6 col-sm-6">
          <div class="item mb-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="<?= $ville['imageURL'] ?>" alt="Ville">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <h4>
                    <?= $ville['nom'] ?>
                  </h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-map"></i>
                      <span class="list text-dark">
                        <?= $ville['type'] ?>
                      </span>
                    </div>
                  </div>
                  <p class="text-dark">
                    <?= $ville['description'] ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }
      } else {
        echo "<p class='text-danger text-center'>Aucune ville trouvée.</p>";
      }
      ?>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 <a href="#">Fatima-Ezzahra Aloyane</a> Company. All rights reserved.
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(".option").click(function () {
      $(".option").removeClass("active");
      $(this).addClass("active");
    });
  </script>

</body>

</html>