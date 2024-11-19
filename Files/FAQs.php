<!?php include("Menuprincip.php") ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="WIDTH=DEVICE-WIDTH, INITITIAL-SCALE=1.0">
    <title>FAQs</title>
    <style>
        body {
            font-family: Arial, 5;
        }
        .faq-container {
            max-width: 600px;
            margin: 0 auto;
            padding:20px;
        }
        .faq-section {
            margin-bottom:20px;
        }
        .question {
            font-weight: bold;
        }
        .answer {
            margin-top: 5px;
        }
        form {
            margin-top: 30px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <section id="FAQ">
    <div class="faq-container">
        <h1>FAQs</h1>
       
    <form action="mailto:admin@maisongalaxie.com" method="post" enctype="text/plain">
        <label for="faq-question">Question :</label>
        <select id="faq-question" name="faq-question" required>
            <option value="Question1"> Question1 : Etes-vous interssé ?</option>
        <label for="response">Reponse :</label>
          <textarea id="response1" name="response" row="4" required></textarea>
          
          <label for="faq-question">Question :</label>
        <select id="faq-question" name="faq-question" required>
            <option value="Question1"> Question2 : Que pouvons-nous vous aider ?</option>
        <label for="response">Reponse :</label>
          <textarea id="response1" name="response" row="4" required></textarea>
        </select>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        <label for="name">Email :</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Envoyer</button>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] =="POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $faqQuestion = htmlspecialchars($_POST['faq-question']);
            $response = htmlspecialchars($_POST['response']);

            $to = "admin@maisongalaxie.com";
            $subject = "Nouvelle reponse a la FAQ";
            $message = "Nom: $name\nEmail: $email\nQuestion: $faqQuestion\nResponse: $response";
            $headers = "From: email";

            if (mail($to, $subject, $message, $headers)) {
                echo "Votre reponse a ete envoye avec succes.";
            } else {
                echo "il y a eu une erreur lors de l'envoie de votre reponse.";
            }
        }
        ?> 
    </form>
    </div>
    </section>
</body>
</html>