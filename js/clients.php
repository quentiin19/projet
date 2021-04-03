<?php
include('header.php');
?> 

	
  <section class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h1 class="page-name">Votre compte</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compte</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="login section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="heading-text">Connexion</h2>
          <form id="inscription" method="post" action="clients.php">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">E-mail</label>
              <div class="col-sm-10">
                <input type="email" placeholder="Votre E-mail" class="form-control" name="emailclient" id="email">
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Mot de passe</label>
              <div class="col-sm-10">
                <input type="password" placeholder="Votre mot de passe" class="form-control" name="passwordclient" id="password">
              </div>
            </div>

            <input type="submit" class="btn btn-main" value="Connexion">
            <span class="forgot-password-text">Mot de passe oublié ?</span>
          </form>
        </div>

        <!-- <div class="col-md-6">
          <h2 class="heading-text">Reset Password</h2>
          <form id="contact-form" method="post" action="" role="form">

            <p>Please enter your email address below. You will receive a link to reset your password.</p>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Email <span class="req">*</span></label>
              <div class="col-sm-10">
                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
              </div>
            </div>

            <input type="submit" class="btn btn-main" value="Login">
            <input type="submit" class="btn btn-transparent" value="Cancel">
          </form>
        </div> -->

        <div class="col-md-6">
          <h2 class="heading-text">S'inscrire</h2>
          <form id="contact-form" method="post" action="" role="form">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Prénom</label>
              <div class="col-sm-9">
                <input type="text" placeholder="Votre prénom" class="form-control" name="prenomclient">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Nom</label>
              <div class="col-sm-9">
                <input type="text" placeholder="Votre nom" class="form-control" name="nomclient">
              </div>
            </div>
			
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">E-mail <span class="req">*</span></label>
              <div class="col-sm-9">
                <input type="text" placeholder="Votre E-mail" class="form-control" name="emailclient">
              </div>
            </div>
			
			<div class="form-group row">
              <label class="col-sm-3 col-form-label">Pseudo <span class="req">*</span></label>
              <div class="col-sm-9">
                <input type="text" placeholder="Votre pseudo" class="form-control" name="pseudoclient">
              </div>
            </div>

            
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Mot de passe<span class="req">*</span></label>
              <div class="col-sm-9">
                <input type="text" placeholder="Votre mot de passe" class="form-control" name="passwordclient">
              </div>
            </div>

            <input type="submit" class="btn btn-main float-right" value="Inscription">
          </form>
        </div>
      </div>
    </div>
  </section>

	
	<?php
	if (isset ($_POST['valider'])) {
	$nom=$_POST['nomclient'];
	$prenom=$_POST['prenomclient'];
	$email=$_POST['emailclient'];
	$pseudo=$_POST['pseudoclient'];
	$pwd=$_POST['passwordclient'];

	//On se connecte
	connectMaBase();
	$sql = 'INSERT INTO clients VALUES
	("","'.$nom.'","'.$prenom.'","'.$email.'","'.$pseudo.'","'.$pwd.'");';
	mysql_query($sql) or die('ERREUR SQL ! <br>'.$sql.'<br>'.mysql_error());
	mysql_close();
	connectMaBase();
	//On prépare la requête SQL qui récupère les champs
	$sql = 'SELECT MAX(idclient) FROM CLIENTS;';
	/* On lance la requête (mysql_query) 
	et on impose un message d'erreur si la requête ne passe pas (or die) */ 
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	//boucle qui organise $req en tableau associatif $date['champ']
	//On scanne le résultat et on construit chaque option avec
	echo '<section>';
	echo "<p>Vous etes maintenant inscrit ! ";
	echo "</p>";
	echo '</section>';
	//On libère mysql de cette première requête, mais on garde la variable PHP $data accessible
	mysql_free_result ($req); 
	//On ferme 
	mysql_close();}
	?>    
	<?php
	include('footer.php');
	?> 
