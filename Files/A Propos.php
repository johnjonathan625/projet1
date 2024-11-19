<!?php  include("connection.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Localisation Geographique</title>
    <meta name="description" content="">
    <meta name="keywords" content="CV, Jonathan Zirhumana">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
      <style>
        form {
          margin-top: 20px;
        }
        h1 {
          text-align: center;
        }
        h1: p {
          text-align: center;
        }
        .photo-gallery {
          display: flex;
          flex-wrap: wrap;
        }
        .photo-gallery {
          margin: 10px;
          width: calc(33% - 20px);
          border-radius: 5px;
        }
    </style>
</head>
<body>
   <section id="form">
    <div class="about__content">
        <h1>À propos</h4>
        <p class="section__description">
          C'est rapide et sécurisé pour faciliter la tâche dans de nombreuses situations importantes. Vous découvrirez tout ce que vous devez savoir sur Galaxy sur mon site web.
        </p>
        <p class="section__description">
          N'importe où en République
          Démocratique du Congo et bientôt dans d'autres pays, vous pouvez effectuer des transactions d'argent ou recevoir de l'argent sans passer par une banque.
        </p>
    </div>
    <form id="Location-form" action="submit.php" method="post">
         <label for="company-name">MAISON GALAXIE</label><br/>
            <input type="text" name="company-name" id="company-name" required><br/>

         <label for="addresse">Adresse :</label><br/>
            <input type="text" name="addresse" id="addresse" required><br/>

         <label for="latitude">Latitude :</label><br/>
            <input type="text" name="latitude" id="latitude" required><br/>

         <label for="longitude">longitude :</label><br/>
            <input type="text" name="longitude" id="longitude" required><br/>

         <button type="submit">Envoyer</button>
         <?php 
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $companyName = htmlspecialchars($_POST['company-name']);
          $address = htmlspecialchars($_POST['address']);
          $latitude = htmlspecialchars($_POST['latitude']);
          $longititude = htmlspecialchars($_POST['longititude']);

          // Connexion a la base de donnees
        /*  $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "localisation geographique";

          $conn = new mysqli($servername,$username, $password, $dbname);

          if ($conn->connect_error) {
            die ("La connexion a echoue: " $conn->connect_error);
          }*/
         $sql = "INSERT INTO localisation géographique (companyName,addresse, latitude, longititude) VALUE ('$companyName', '$address', '$latitude','$longititude')";
         if ($conn->query($sql) === TRUE) {
          echo "Nouvelle localisation enregistree avec succes";
         } /*else {
          echo "Erreur: " . $sql . <br> . $conn->error;
         }*/
         $conn->close();
        } /*else {
          echo "Methode de requete non autorisee.";
        }*/
         ?>
      </form>
      <div id="map" style="height: 400px; width: 100px;"></div>
    </section>
    <script src="./Files/scripts.js"></script>
<body>
</html>