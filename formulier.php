<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/formulier.css">
  <title>Homepage</title>
</head>

<body>
  <?php include "header.php" ?>
  <div class="productenkolom">
    <div id="div">
      <h1>Maak hier je afspraak.</h1>
      <p>Vul hier je gegevens in.</p>
    </div>
    <section class="container">
      <form action="doelbestand.php" method="POST" class="form">
        <label class="omschrijving" for="voornaam">Voornaam:</label>
        <div id="input"><input type="text" tabindex="1" name="voornaam" placeholder="Voornaam" value="" required></div><br>

        <label class="omschrijving" for="tv">Tussenvoegsel (optioneel): </label>
        <div id="input"><input type="text" tabindex="2" name="tv" placeholder="Tussenv." value="" size="20"></div><br>

        <label class="omschrijving" for="achternaam">Achternaam:</label>
        <div id="input"><input type="text" tabindex="3" name="anaam" placeholder="achternaam" value="" required></div><br>

        <label class="omschrijving" for="email.">E-mailadres:</label>
        <div id="input"><input type="email" tabindex="3" id="email" name="email" placeholder="random@gmail.com" value=""
            pattern="[a-z0-9.%+-]+@[a-z0-9.-]+.[a-z]{2,}$" required></div><br>

        <label class="omschrijving" for="telnummer">Telefoonnummer:</label>
        <div id="input"><input type="tel" tabindex="4" id="telnummer" name="telnummer" value="" pattern="{5,20}"
            placeholder="telefoonnummer"></div><br>

        <label class="omschrijving" for="geboorte_datum">Geboortedatum:</label>
        <div id="input"><input type="date" tabindex="5" name="geboorte_datum" placeholder="Geboortedatum"></div><br>

        <label class="omschrijving" for="datum">Datum:</label>
        <div id="input"><input type="date" tabindex="6" name="datum" placeholder="Datum"></div><br>

        <label class="omschrijving" for="tijd">Tijd:</label>
        <div id="input"><input type="time" tabindex="7" name="tijd" placeholder="Tijd"></div><br>

        <label class="omschrijving" for="personen">Kom je alleen?:</label>
        <div id="input"><input type="radio" tabindex="8" id="Ja" name="personen" value="Ja">
          <label for="Ja">Ja, ik kom alleen.</label>
          <input type="radio" tabindex="9" id="Nee" name="personen" value="Nee">
          <label for="Nee">Nee, ik kom met iemand.</label>
        </div><br>

        <label class="omschrijving" for="behandeling">Type behandeling:</label>
        <div id="input" input type="radio" tabindex="10"  id="behandeling" name="behandeling" value="behandeling"
          placeholder="behandeling">
          <label for="acryl">Acryl.</label>
          <input type="radio" tabindex="11" id="gel" name="behandeling" value="gel">
          <label for="Gel">Gel.</label> 
          <input type="radio" id="Biab" tabindex="12" name="behandeling" value="Biab">
          <label for="biab">Biab.</label>
          <input type="radio" tabindex="13" id="Manicure" name="behandeling" value="Manicure">
          <label for="Manicure">Manicure.</label>
          <input type="radio" tabindex="14" id="Pedicure" name="behandeling" value="Pedicure">
          <label for="Pedicure">Pedicure.</label>
          <input type="radio" tabindex="15" id="P+M" name="behandeling" value="P+M">
          <label for="Pedicure + Manicure">Pedicure + Manicure.</label>
        </div><br>

        <label class="omschrijving" for="palet" placeholder="Palet">kleurenpalet:</label>
        <div id="input"><input type="color" tabindex="16"  id="kleurenpalet" name="palet" value="" width="70px" />
          <input type="color" tabindex="17" id="kleurenpalet" name="palet" value="" width="70px" />
          <input type="color" tabindex="18" id="kleurenpalet" name="palet" value="" width="70px" />
          <input type="color" tabindex="19" id="kleurenpalet" name="palet" value="" width="70px" />
        </div><br>

        <label class="omschrijving groot" for="Rekening">waar moet ik rekening mee houden?:</label>
        <div id="input"><textarea name="omschrijving" tabindex="20" >Hou rekening met...</textarea></div><br>

        <label class="omschrijving" for="nieuwsbrief">Nieuwsbrief:</label>
        <div id="input"><input type="checkbox" tabindex="21" id="niewsbrief" name="nieuwsbrief" label for="nieuwsbrief"> Ja, ik wil
          mij aanmelden voor de nieuwsbrief met $10 korting op mijn volgende bestelling.</label></div><br>
        <input type="Submit" tabindex="22" class="neonbut">
      </form>
    </section>
  </div>

  <!-- <div class="sidebar_left">
        <button class="neonbutton">Acryl.</button>
        <button class="neonbutton">Gel.</button>
        <button class="neonbutton">Manicure.</button>
        <button class="neonbutton">Pedicure.</button>
        <button class="neonbutton">Manicure + Pedicure.</button>
      </div>  -->

  <div class="sidebar_right"></div>
  <?php include "footer.php" ?>
  <script src="assets/js/app.js"></script>
</body> 
</html>