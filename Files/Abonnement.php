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
    <section id="Abonn">
    <form method="post" action="ttt.js"><br/>
    <h2 id="abonnement">Abonnez-vous</h2>
    <Form action="traiter_abonnement.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="nom">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required><br>

        <label for="type_abonnement">Type d'abonnement :</label>
        <select id="type_abonnement" name="type_abonnement" required>
            <option value="mensuel">Mensuel</option>
            <option value="annuel">Annuel</option>
        </setion><br><br>

        <input type="submit" value="s'abonner">
       
    </form>
    </section>
</body>
</html>


