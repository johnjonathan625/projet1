<!?php include(Menuprincip.php) ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#000000">
        <link rel="stylesheet" href="./../html/styles.css">
        <title>ETUDES | FORMATION</title>
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
        <section id="Cont">
          <form method="post" action="ttt.js"><br/>
            <h1>REJOIGNEZ-NOUS</h1><br/>
            <p>CONTACT</p><br/>
            <label for="certificat">E-mail</label><br/>
            <input type="email" name="E-mail" id="E-mail" placeholder="Entrez votre adresse mail ici..." required="on"><br/>
            <label for="certificat">Telephone</label><br/>
            <input type="tel" name="tel" id="tel" max="13" required="on"><br/>
            <label for="Residence">Residence</label><br/>
            <input type="text" name="Residence" id="Residence" required="on"><br/>

            <input type ="submit" value="Envoyer" name="Envoyer">
            <input type ="reset" value="Effacer" name="Effacer">
            <input type ="button" value="+" name="add"><br></br>
          </form>
        </section>
    </body>
</html>
           