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
    <div class="productenkolom">
      <section class="container">
        <div class="card">
          <div class="card-image car-1"></div>
          <h2>Acryl met design.</h2>
          <p class="omschrijving">Prijs wordt achteraf bepaald.</p>
          <a href="formulier.php" class="neon">Maak een afspraak.</a>
        </div>

        <div class="card">
          <div class="card-image car-2"></div>
          <h2>Acryl zonder design.</h2>
          <p class="omschrijving">Prijs wordt achteraf bepaald.</p>
          <a href="formulier.php" class="neon">Maak een afspraak.</a>
        </div>
      </section>
    </div>
    <?php include "sidebar.php" ?>
    <!-- <div class="sidebar_left">
      <button class="neonbutton">Acryl.</button>
      <button class="neonbutton">Gel.</button>
      <button class="neonbutton">Manicure.</button>
      <button class="neonbutton">Pedicure.</button>
      <button class="neonbutton">Manicure + Pedicure.</button>


      <div class="custom-wrapper">
        <div class="price-input-container">
          <div class="price-input">
            <div class="price-field">
              <span>Min prijs:</span>
              <input type="number" class="min-input" value="20">
            </div>
            <div class="price-field">
              <span>Max prijs:</span>
              <input type="number" class="max-input" value="100">
            </div>
          </div>
          <div class="slider-container">
            <div class="price-slider">
            </div>
          </div>
        </div>

        <div class="range-input">
          <input type="range" class="min-range" min="0" max="10000" value="2500" step="1">
          <input type="range" class="max-range" min="0" max="10000" value="8500" step="1">
        </div>
      </div>
    </div> -->
  </div>
  </div>
  <div class="sidebar_right">sidebar</div>

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
  <script src="assets/js/app.js"></script>
</body>

</html>