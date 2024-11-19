<!?php  include("Services.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CV | Jonathan Zirhumana</title>
    <meta name="description" content="">
    <meta name="keywords" content="CV, Jonathan Zirhumana">
    <style>
            .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            }
            label {
            display: block;
            margin-bottom: 5px;
            }
            input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            }
            button, input[type="submit"] {
            padding: 8px 20px;
            width: 100%;
            margin-bottom: 5px ;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            }
            button:hover, input[type="submit"]:hover {
            background-color: #0056b3;
            }
            form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            }
            form:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            }
            label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            }
            input[type="date"],
            input[type="tel"],
            select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease;
            }
            input[type="date"]:focus,
            input[type="tel"]:focus,
            select:focus {
            border-color: #007bff;
            }
            input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            }
            input[type="submit"]:hover {
            background-color: #0056b3;
            }
            .form-container {
            display: none;
          }
          .form-container.active {
            display: block;
          }
      
          </style>
</head>
<body>
  <section id="Caiss">
    <form method="post" action="ttt.js"><br/>
    <h2 id="abonnement">Payez en toute securité ici </h2>
    <Form action="traiter_caisse.php" method="post">

        <label for="montant">Montant :</label>
        <input type="text" id="montant" name="montant" required><br>

        <label for="description">Description :</label>
        <textarea id="description" name="description :" required></textarea><br><br>

        <input type="submit" value="Enregistrer">

    </form>
  </section>  
</body>
</html>