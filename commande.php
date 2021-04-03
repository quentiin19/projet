<?php
include("fonctions.php");
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryptos : Accueil</title>
	<link rel="stylesheet" href="css/style.css.css">
</head>

<body>

	<section class="top-page">
		<header>
			<img src="images/logo2.png"alt="logo du site">
			<nav class="ENTETTE">
				<li> Accueil</li>
				<li>Boutique</li>
				<li>S'identifier</li>
			</nav>
		</header>
		<div class="landing-page">
			<h1 class="slogan">La boutique n°1 sur la cryptomonnaie</h1>
		</div>
	</section>

	        <h1 align=center>Passer une commande</h1><br>
		<p class="lien"><a href="index.php">RETOUR</a></p>
		<h2 class="titre">Mon Panier ( Veillez vous inscrire avant de passer une commande ) </h2>
		<br>
		<form name="inscription" method="post" action="commande.php">
		<h2>Cryptomonnaie disponible:
		<SELECT name="cryptos">
			<OPTION value="Botcoin">Botcoin</OPTION>
			<OPTION value="Maki">Maki</OPTION>
			<OPTION value="BTornado">BTornado</OPTION>
			<OPTION value="Plural">Plural</OPTION>
			<OPTION value="Venom">Venom</OPTION>
			<OPTION value="Gury">Gury</OPTION>
			<OPTION value="Harch">Harch</OPTION>
			<OPTION value="Girco">Girco</OPTION>
			<OPTION value="Cista">Cista</OPTION>
			<OPTION value="Magi">Magi</OPTION>
		</SELECT>
		</h2>
			<br>
			<h2>Adresse email <input type="text" name="emailclient"><br>
				Pour combien d'euros en voulez vous ? <input type="text" name="prixtotal"><br>
			</h2>
			<input type="submit" name="valider" value="SOUMETTRE">
		</form>
			<?php
	if (isset ($_POST['valider'])) {
	$email=$_POST['emailclient'];
	$prix=$_POST['prixtotal'];
	$cryptocoin=$_POST['cryptos'];

	//On se connecte
	connectMaBase();
	$sql='SELECT Idcoin FROM coin WHERE nomcoin="'.$cryptocoin.'";';
	$idcoin=mysql_query($sql) or die('ERREUR SQL ! <br>'.$sql.'<br>'.mysql_error());
	mysql_close();
	connectMaBase();
	while ($data = mysql_fetch_array($idcoin)) {
		$sql = 'INSERT IGNORE INTO commande VALUES
		("","'.$email.'","'.$prix.'","'.$data['Idcoin'].'");';}
	mysql_query($sql) or die('ERREUR SQL ! <br>'.$sql.'<br>'.mysql_error());
	mysql_close();
	connectMaBase();
	//On prépare la requête SQL qui récupère les champs
	$sql = 'SELECT MAX(Idcommande) FROM COMMANDE;';
	/* On lance la requête (mysql_query) 
	et on impose un message d'erreur si la requête ne passe pas (or die) */ 
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	$result = mysql_query("SELECT * FROM produit");
	$nblignes = mysql_num_rows($result);
	//boucle qui organise $req en tableau associatif $date['champ']
	//On scanne le résultat et on construit chaque option avec
	echo '<section>';
	echo "<p> Votre demande est en cours de traitement ".$data['idcommande'];
	echo "</p>";
	echo '</section>';    
	//On libère mysql de cette première requête, mais on garde la variable PHP $data accessible
	mysql_free_result ($req); 
	//On ferme 
	mysql_close();}
	?>
</body>
	 

	