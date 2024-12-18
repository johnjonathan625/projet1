<!?php  include("service.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CV | Jonathan Zirhumana</title>
    <meta name="description" content="">
    <meta name="keywords" content="CV, Jonathan Zirhumana">
    <link href="./public/css/main.css" rel="stylesheet">
    <link href="./public/css/style.css" rel="stylesheet">
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
  background-color: yellow;
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

    </style>
</head>
<body>
  <section id="Serv">
    <h1>Services:</h1>
    <header class="header" id="service">
          <nav>
              <div class="link"><a href="./../Files/Abonnement.php">Abonnements</a></div>
              <div class="link"><a href="./../Files/Caisse.php">Caisse</a></div>
          </nav>
    </header>
  </section>

</body>
</html>