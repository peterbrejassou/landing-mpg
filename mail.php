<?php 
include 'config.php';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent = 'Prénom et nom : ' . $name . "\nMessage : \n" . $message;
$recipient = EMAIL_ADMIN;
$subject = "MPG Contact";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error send mail");
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,700;0,900;1,400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" href="styles/base.css" />
    <link rel="stylesheet" href="styles/contact.css" />
    <script src="scripts/script.js"></script>
    <title>Mon Petit Garage - Contact</title>
  </head>

  <body>
    <header>
      <a class="logo" href="index.html"
        ><img src="img/icons/logo.svg" alt="Logo Mon petit garage"
      /></a>
      <ul id="menu">
        <li class="active"><a href="contact.html">Contact</a></li>
      </ul>
      <div id="mobile-menu-btn" class="mobile-menu">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
    </header>

    <section class="contact">
      <h1>Contact</h1>
      <p class="instructions">Merci pour votre message.</p>
      <a class="btn" href="index.html">Retour à l'accueil</a>
    </section>

    <footer>©2020 Tous droits réservés - Icons by <a href="https://icons8.com">Icons8</a></footer>
  </body>
</html>
