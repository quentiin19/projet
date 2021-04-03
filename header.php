<?php
include("fonctions.php");
?> 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traphouse : Accueil</title>
	<link rel="stylesheet" href="css/style.css.css">
<!-- basic -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/logo3.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->	
</head>
<body style="background-color:#AFEEEE;">

	
  <section class="top-header">
	 <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-4">
          <div class="contact-number">
            <i class="fa fa-phone"></i>
            <span>09 82 73 22 33</span>
          </div>
        </div>     
          <!-- Site Logo -->
          <div class="logo">
            <a href="index.php"><img src="images/logo3.png" alt="#"></a>
          </div>
        </div>
		
		<div class="col-md-4 col-xs-12 col-sm-4">
          <ul class="top-menu list-inline">
            <li class="list-inline-item"><a href="commande.php"><i class="fa fa-shopping-cart"></i>Panier</a></li>
            <li class="list-inline-item"><a href="clients.php"><i class="fa fa-sign-in"></i>Se connecter</a></li>
          </ul>
        </div>
      </div>
    </div>

	</section>
	  <section class="menu">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Boutique
              </a>
              <div class="dropdown-menu full-width" aria-labelledby="navbarDropdown">
                <div class="row">
                  <div class="col-4">
                    <div class="dropdown-header">Cryptomonnaies</div>
                    <div class="dropdown-divider"></div>
                    <a href="shop.php">Botcoin</a>
                    <a href="shop.php">Tornado</a>
                    <a href="shop.php">Maki</a>
                    <a href="shop.php">Voir la liste</a>
                    <a href="shop.php"></a>
                  </div>
                  <div class="col-4">
                    <div class="dropdown-header">Outils</div>
                    <div class="dropdown-divider"></div>
                    <a href="shop.php">Cours des monnaies</a>
                    <a href="shop.php">Prédictions</a>
                    <a href="shop.php"></a>
                    <a href="shop.php"></a>
                    <a href="shop.php"></a>
                  </div>
                </div>
              </div>
            </li>

		<ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.php">Renseignements</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </section>
