<?php 
	$auth = 0;
  include "bd.php"; 
  include "form.php";
  include "auth.php"; 
  
				function securisation($donnees){
					$donnees = preg_match('/[a-z]/', $donnees);
					return $donnees;
				}

	if((isset($_POST['pseudo'])) && (isset($_POST['pass2']))){
		$password = sha1($_POST['pass2']);
		$pseu = $_POST['pseudo'];
		$nom = $_POST['nom'];
		$pren = $_POST['prenom'];
		$mail = $_POST['email'];
		$sex = $_POST['sexe'];
		$fpass = $_POST['pass1'];
		$spass = $_POST['pass2'];
		$select = $bd -> prepare("INSERT INTO visiteurs(Id, Pseudo, Email, Sexe, Pass) VALUES(NULL, '$pseu', '$mail', '$sex', SHA1('$pass')) ");
		$select -> execute();
		$select = $bd->query("SELECT * FROM visiteurs WHERE Pseudo ='$pseu' AND Pass = '$password' ");
		if($select->rowCount() > 0 ){
			$_SESSION['auth']=$select->fetch();
			header('Location:page1.php');
		}
	}
?>
<!DOCTYPE html>
<html>
		<head>
			<title>Inscription</title>
			<meta charset = "utf-8" />
			<link rel = "stylesheet" href = "acceuil_inscription.css" />
		</head>
	<body>
	
	<div>
			<form action = "#" method = "POST">
			<h1 id = "titre">CREEZ VOTRE COMPTE DE VISITEUR</h1>
		<fieldset id = "centre">
			<fieldset >
				<legend class = "small_titre">Informations de connexions</legend>
					<p><label class = "input">Pseudo:</label><br/>
						<input type = "text" name = "pseudo" size= "50" placeholder = "Entrez votre pseudo" class = "input"/></p>
					<p><label class = "input">Nom:</label><br/>
						<input type = "text" name = "nom" size = "50" placeholder = "Entrez votre nom" class = "input" /></p>
					<p><label class = "input">Prénom:</label><br/>
						<input type = "text" name = "prenom" size = "50" placeholder = "Entrez votre prénom" class = "input" /></p>
					<p><label class = "input">Email:</label><br/>
						<input type = "email" name = "email" size = "50" placeholder = "Entrez adresse email" class = "input" /></p>
					<p><label class = "input">Mot de pass</label>
						<input type = "password" name= "pass1" size = "50"  class = "input" /></p>
					<p><label class = "input">Confirmer</label>
						<input type = "password" name = "pass2" size = "50" placeholder = "Retapez votre mot de pass" class = "input" /></p>
					<p><label class = "input">Sexe: </label>
						M <input type = "radio" name = "sexe" class = "input" value = "MASCULIN" />
						F <input type = "radio" name = "sexe" class = "input" value = "FEMININ" />
					<p><br/><input type = "submit" name = "valider" value = "Inscription" id = "valider"  />
					<input type = "reset" name = "annuler" value = "Annuler" id = "annuler" /></p>
						
			</fieldset>
		</fieldset>
		</form>
	</div>
 <p id= "conecte"><a href = "acceuil_connexion.php" id = "connecte" >Se connecter à un compte existant</a></p>
	</body>
</html>