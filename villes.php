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
                        <li><a href="villes.php"  class="active">Villes</a></li>
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
          <h4>Discover Our Weekly Offers</h4>
          <h2>Amazing Prices &amp; More</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <?php 
  require 'conn/db.php';
  $query ="select * from pays";
  $result = mysqli_query($conn,$query);
  ?>

  <div class="search-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-2">
                <h4>Rechercher par Pays:</h4>
              </div>
              <div class="col-lg-4">
                <fieldset>
                  <select name="Location" class="form-select" aria-label="Default select example" id="chooseLocation"
                    onChange="this.form.click()">
                    <option selected>Pays</option>
                    <?php
                      $query = "SELECT id_continent, nom FROM pays";
                      $result = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id_pays'] . "'>" . $row['nom'] . "</option>";
                      }
                    ?>
                  </select>
                </fieldset>
              </div>
              <div class="col-lg-2">
                <fieldset>
                  <button class="border-button">Rechercher</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php 
  require 'conn/db.php';
  $query ="select * from ville";
  $result = mysqli_query($conn,$query);
  ?>

  <div class="amazing-deals">
    <div class="container">
      <div class="row">

      <?php while ($data = mysqli_fetch_assoc(result: $result)) {?>

        <div class="col-lg-6 col-sm-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-6">
                <div class="image">
                  <img src="<?=$data['imageURL']?>" alt="">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="content">
                  <h4><?=$data['nom']?></h4>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-map"></i>
                      <span class="list"><?=$data['type']?></span>
                    </div>
                  </div>
                  <p style="color: black;"><?=$data['description']?></p>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php  
      }?>
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