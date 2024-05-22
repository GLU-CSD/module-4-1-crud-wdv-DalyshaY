<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Homepage.</title>
</head>
<body>
  <?php include "header.php" ?>
  <div class="container">
    <!-- <div class="logo_section">
    </div> -->
    <div class="header">
      <img id="logo" src="./assets/img/logo.png" alt="/">
    </div>

    <div class="menubalk">
      <div class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Categorieen</a>
        <div class="dropdown-content">
          <a href="index.php">Home</a>
          <a href="acryl.php">Acryl nagels</a>
          <a href="gel.php">Gel nagels</a>
          <a href="manicure.php">Manicure</a>
          <a href="pedicure.php">Pedicure</a>
          <a href="m+p.php">Manicure/Pedicure</a>
          <a href="inspiratie.php">Inspiratie</a>
        </div>
      </div>

      <a href="formulier.php" class="menulink"><button class="winkelwagen">Maak een afspraak.</button></a>
      <button class="contact">Contact</button>
      <div class="search">
        <input type="text" class="searchTerm" placeholder="Search...">
        <i class="fa fa-search"></i>
      </div>
    </div>

    <div class="productenkolom">
      <section class="container">
        <div class="card">
          <div class="card-image car-8"></div>
          <h2>BIAB.</h2>
          <p class="omschrijving">Prijs wordt achteraf bepaald.</p>
          <a href="formulier.php" class="neon">Maak een afspraak.</a>
        </div>
      </section>
    </div>
    <?php include "sidebar.php" ?>
  </div>

    </div>

    <div class="sidebar_left">sidebar</div>

    <div class="footer">
      <div> Plaats.
        <p>
          <a>Ik ben gevestigt in Utrecht. De exacte locatie krijgt u nadat u heeft geboekt.</a>
        </p>
      </div>
      <div>Aanmelden
        <p>Meld u aan voor de nieuwsbrief en ontvang 10% korting.</p>
      </div>
      <div>Klantenservice
        <p>Voor vragen bel naar 050 500 567 777 of mail naar random@hotmail.com</p>
      </div>
    </div>

    <div class="copyright"> © Dalysha Jonis 2024.</div>

  </div>

  <script src="assets/js/app.js"></script>
</body>

</html>