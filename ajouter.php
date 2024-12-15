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
              <li><a href="ajouter.php" class="active">Ajouter</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="deals.html">Deals</a></li>
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

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Discover Our Weekly Offers</h4>
          <h2>Amazing Prices &amp; More</h2>
          <!-- <div class="border-button"><a href="about.html">Discover More</a></div> -->
        </div>
      </div>
    </div>
  </div>

  <?php 
  require 'conn/db.php';
  $query ="select * from pays";
  $result = mysqli_query($conn,$query);
?>


  <!-- Formulaires -->
  <div class="container my-5">
    <div class="row g-4">
      <div class="col-lg-6">
        <form action="" method="POST" class="p-4 bg-light rounded"
          style="background-image:url(./assets/images/upscaled.jpg)">
          <h1 class="text-center text-white">Pays</h1>
          <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
          </div>
          <div class="mb-3">
            <label for="population" class="form-label">Population</label>
            <input type="number" class="form-control" id="population" name="population" placeholder="Population">
          </div>
          <div class="mb-3">
            <label for="langues" class="form-label">Langues</label>
            <input type="text" class="form-control" id="langues" name="langues" placeholder="Langues">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <!-- <input type="text" class="form-control" id="description" name="description" placeholder="Description"> -->
            <textarea for="description" name="description" id="description" class="form-control" placeholder="Votre description ..."></textarea>
          </div>
          <div class="mb-3">
            <label for="id_continent">Continent</label>
            <select name="id_continent" id="id_continent" class="form-select">
              <!-- <option value="1">Afrique</option> -->
              <?php
                  $query = "SELECT id_continent, nom FROM continent";
                  $result = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo "<option value='" . $row['id_continent'] . "'>" . $row['nom'] . "</option>";
                  }
              ?>
            </select>
          </div>
          <button type="submit" class="btn w-100" style="background:#22b3c1;">Submit</button>
        </form>
      </div>

      <div class="col-lg-6">
        <form action="" method="POST" class="p-4 bg-light rounded"
          style="background-image:url(./assets/images/upscaled.jpg)">
          <h1 class="text-center text-white">Villes</h1>
          <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <!-- <input type="text" class="form-control" id="description" name="description" placeholder="Description"> -->
             <textarea for="description" name="description" id="description" class="form-control" placeholder="Votre description ..."></textarea>
          </div>
          <div class="mb-3">
            <label for="id_pays">Pays</label>
            <select id="id_pays" name="id_pays" class="form-select">
              <?php
                  $query = "SELECT id_pays, nom FROM pays";
                  $result = mysqli_query($conn, $query);
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo "<option value='" . $row['id_pays'] . "'>" . $row['nom'] . "</option>";
                  }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="type" class="form-se">Type</label>
            <select name="type" id="type" class="form-select">
              <option value="capitale">Capitale</option>
              <option value="autre">Autre</option>
            </select>
          </div>
          <button type="submit" class="btn w-100" style="background:#22b3c1;">Submit</button>
        </form>
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2036 <a href="#">WoOx Travel</a> Company. All rights reserved.
            <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a>
          </p>
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
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function () {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

</body>

</html>