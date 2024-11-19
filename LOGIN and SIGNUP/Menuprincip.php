<?php
 include("./../Admin/Connexion/root.php");
 include(Root_path."vendor/autoload.php");
 /*include(Root_path."login-user-php.php.php");
 include_once(Root_path."./../Files/service.php");
 include_once(Root_path."./../Files/A Propos.php");
 include_once(Root_path."./../Files/FAQs.php");
 include_once(Root_path."./../Files/Contact.php");
 include_once(Root_path."./../Files/Blog.php");*/

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Projet | Jonathan Zirhumana</title>
    <meta name="description" content="">
    <meta name="keywords" content="CV, Jonathan Zirhumana">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="./../Files/main.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css?v=fsgds5sdg5dsgk" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

:root {
  --primary-color: #6a46cf;
  --primary-color-dark: #1913d4;
  --secondary-color: #0b1423;
  --secondary-color-dark: #091121;
  --text-light: #cbd5e1;
  --white: #ffffff;
  --max-width: 1200px;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body{
  width: 100%;
  height: 100vh;
}

.section__container {
  padding: 3rem 3px;
}

.section__header {
  padding-top: 3rem;
  position: relative;
  isolation: isolate;
  margin-bottom: 1rem;
  font-size: 1.5rem;
  font-weight: 500;
  overflow: hidden;
}

.section__header::before {
  position: absolute;
  left: 0;
  bottom: 0;
  font-size: 2.5rem;
  font-weight: 600;
  line-height: 6rem;
  white-space: nowrap;
  opacity: 0.1;
}

.section__description {
  color: var(--text-light);
  line-height: 1.5rem;
}

.btn {
  padding: 0.75rem 1rem;
  outline: none;
  border: none;
  font-size: 0.9rem;
  color: var(--white);
  border: 1px solid;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.btn__primary {
  background-color: var(--primary-color);
  border-color: var(--primary-color);
}

.btn__primary:hover {
  background-color: var(--primary-color-dark);
}

.btn__secondary {
  background-color: transparent;
  border-color: var(--white);
}

.btn__secondary:hover {
  background-color: rgba(255, 255, 255, 0.1);
}

img {
  display: flex;
  width: 100%;
  height: auto;
  object-fit: cover;
}

a {
  text-decoration: none;
}

html,
body {
  scroll-behavior: smooth;
}

body {
  background-color: var(--secondary-color);
  font-family: "Poppins", sans-serif;
  color: var(--white);
}

nav {
  position: fixed;
  display: flex;
  height: 60px;
  align-items: center;
  justify-content: space-evenly;
  background: var(--primary-color);
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
}
.link a {
  color: var(--white);
  transition: 0.3s;
}

.link a:hover {
  color: var(--primary-color);
}

.header {
  position: relative;
  top: 55px;
  height: auto;
  background-image: linear-gradient(
      rgba(11, 20, 35, 0.8),
      rgba(11, 20, 35, 0.8)
    ),
    url("images/R.jpg");
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}

.header__container {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.header__container h4 {
  margin-bottom: 0.5rem;
  font-size: 1.2rem;
  font-weight: 500;
}

.header__container h1 {
  margin-bottom: 1rem;
  font-size: 2rem;
  font-weight: 600;
  line-height: 36px;
  color: var(--primary-color);
}

.header__container .section__description {
  max-width: 900px;
  margin-inline: auto;
  margin-bottom: 2rem;
}

.header__btns {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
}

.header__btns .btn {
  min-width: 150px;
}

.about__container {
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(2,minmax(250px, 1fr));
  gap: 0.5rem;
}

.about__image {
  overflow: hidden;
}

.about__image img {
  width: 380px;
  max-width: 100%;
}

.about__content h4 {
  width: 400px;
  max-width: 100%;
  margin-bottom: 1rem;
  font-size: 2rem;
  font-weight: 600;
}

.about__content .section__description {
  margin-bottom: 1rem;
}

.about__content .section__description span {
  color: var(--primary-color);
}

.blog__container .section__header::before {
  content: "News";
}

.blog__grid {
  margin-top: 4rem;
  display: grid;
  grid-template-columns:repeat(auto-fit, minmax(250px, 1fr));
  gap: 2.5rem;
}

.blog__content {
  padding: 1rem;
  background-color: var(--secondary-color-dark);
}

.blog__content h4 {
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 500;
}

.blog__content .section__description {
  margin-bottom: 2rem;
}

.blog__content > div {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 2rem;
  flex-wrap: wrap;
}

.blog__content a {
  color: var(--white);
  transition: 0.3s;
}

.blog__content a:hover {
  color: var(--primary-color);
}

.blog__socials {
  flex: 0 0 100px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 0.1rem;
}

.footer {
  background-color: var(--secondary-color-dark);
}

.footer__container .section__header {
  text-align: center;
}

.footer__container .section__header::before {
  content: "Contact Us";
  left: 50%;
  transform: translateX(-50%);
}

.footer__container .section__description {
  max-width: 600px;
  margin-inline: auto;
  margin-bottom: 4rem;
  text-align: center;
}

.footer__content h4 {
  margin-bottom: 1rem;
  font-size: 1.2rem;
  font-weight: 500;
}

.footer__content p {
  margin-bottom: 1rem;
  color: var(--text-light);
}

.footer__socials {
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  gap: 1rem;
  margin-right: 10px;
  white-space: nowrap;
}

.footer__socials a {
  font-size: 1.5rem;
  background: var(--white);
  color: var(--primary-color-dark);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.3s;
}

.footer__socials a:hover {
  color: var(--primary-color);
}
.footer__bar {
  padding: 1rem;
  font-size: 0.9rem;
  color: var(--text-light);
  text-align: center;
}
@media screen and (max-width:768px) {
  .about__container {
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
  }
  .service__grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .service__card {
    padding: 2rem;
  }

  .panel__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .banner__container {
    grid-template-columns: repeat(4, 1fr);
  }

  .banner__card:nth-child(2n - 1),
  .banner__card:nth-child(2) {
    border-right: 1px solid var(--white);
  }

  .blog__grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .footer__grid {
    grid-template-columns: 1fr 2fr;
  }
}
@media screen and (max-width: 540px) {
  .banner__container {
    grid-template-columns: 100vw;
  }
  .banner__card:nth-child(2n - 1) {
    border: none;
  }
  .about__container{
    grid-template-columns: 100vw;
  }
  .panel__grid{
    grid-template-columns: 100vw;
  }
  .service__card{
    flex-direction: column;
  }
  .service__grid{
    grid-template-columns: 100vw;
  }
  .blog__grid {
    grid-template-columns: 100vw;
  }
}
/*
        body {
            font-family: 'Roboto', sans-serif;
        }
            */
        #search-input{
            width: 500px;
            min-width: 250px;
            margin: auto;
        }
        #header {
            background: linear-gradient(45deg, #007bff, #6610f2);
            color: white;
            padding: 15px 0;
            align-items: center;
        }
        #dob {
            background-image: url('<?=base_url;?>public/images/background.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        #footer {
            bottom: 0;
            left: 0;
            width: 100%;
        }
        .nav-link {
            color: white !important;
        }
        main {
          padding: 20px;
        }
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
 <body class="index-page">
    <header class="header" id="home">
    <nav>
                           <div class="link"><a href="./login-user-php.php"> Se connecter</a></div>
                           <div class="link"><a href="./../Files/service.php">Nos Services</a></div> 
                           <div class="link"><a href="./../Files/A Propos.php">A Propos</a></div>
                           <div class="link"><a href="./../Files/FAQs.php">FAQs</a></div>
                           <div class="link"><a href="./../Files/Contact.php">Contact</a></div>
                           <div class="link"><a href="./signup-user.php">Blog</a></div>
    </nav>
    </header>
    <main class="main">
    <section class="section" id="home">
      <h1>MAISON GALAXIE</h1><br>
        <h1>Bienvenue sur notre site web</h1>
        <p class="section__description">
          Merci de votre confiance pour La Vision de la Maison GALAXIE. Si vous avez des questions, des demandes d'informations ou si vous souhaitez vous impliquer, n'hésitez pas à nous contacter. Nous sommes toujours là pour vous.
        </p>
      </section>
      <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="./image/jonas.jpg" alt="about" />
      </div>
      </section>
        <!-- Hero Section -->
        <section class="section" id="dob">
            <div class="container m-auto">
                <input id="search-input" type="search" placeholder="Rechercher un utilisateur ici..." class="form-control">
            </div>
        </section><!-- /Hero Section -->
       </main>

    <footer id="footer" class="footer position-fixed light-background">
        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">CV</strong> Tout droit réservé</p>
                <div class="credits">
                    Crée par <a href="#">Jonathan Zirhumana</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="<?=base_url;?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 </body>
</html>
