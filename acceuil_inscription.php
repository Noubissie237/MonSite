<?php 
	$auth = 0;
  include "bd.php"; 
  include "form.php";
  include "auth.php"; 
  
				function securisationEmail($mailC){
					$mailC = filter_var($mailC, FILTER_VALIDATE_EMAIL);
					$mailC = filter_var($mailC, FILTER_SANITIZE_EMAIL);
					return $mailC;
				}
			
				
							

	if(isset($_POST['pseudo'])){
		$password = sha1($_POST['pass2']);
		$pseu = ($_POST['pseudo']);
		$nom = ($_POST['nom']);
		$pren = ($_POST['prenom']);
		$mailbrute = $_POST['email'];
		$mail = securisationEmail($mailbrute);
		$sex = $_POST['sexe'];
		$fpass = $_POST['pass1'];
		$spass = $_POST['pass2'];
		
		if($fpass == $spass){
			
		$select = $bd -> prepare("INSERT INTO visiteurs(Id, Pseudo, Nom, Prenom, Sexe, Email, Pass) VALUES(NULL, '$pseu', '$nom', '$pren', '$sex', '$mail', SHA1('$spass')) ");
		$select -> execute();
		$select = $bd->query("SELECT * FROM visiteurs WHERE Pseudo ='$pseu' AND Pass = '$password' ");
		if($select->rowCount() > 0 ){
			$_SESSION['auth']=$select->fetch();
			header('Location:page1.php');
		}
	}else{
		echo "Les mots de passes ne correspondent pas !<br/>";
		header('acceuil_inscription.php');
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
						<input type = "text" required name = "pseudo" size= "50" placeholder = "Entrez votre pseudo" class = "input"  /></p>
					<p><label class = "input">Nom:</label><br/>
						<input type = "text" required name = "nom" size = "50" placeholder = "Entrez votre nom" class = "input"  /></p>
					<p><label class = "input">Prénom:</label><br/>
						<input type = "text" required name = "prenom" size = "50" placeholder = "Entrez votre prénom" class = "input"  /></p>
					<p><label class = "input">Email:</label><br/>
						<input type = "email" required name = "email" size = "50" placeholder = "Entrez adresse email" class = "input"  /></p>
					<p><label class = "input">Mot de pass</label>
						<input type = "password" required name= "pass1" size = "50"  class = "input"  /></p>
					<p><label class = "input">Confirmer</label>
						<input type = "password" name = "pass2" size = "50" placeholder = "Retapez votre mot de pass" class = "input"  /></p>
					<p><label class = "input">Sexe: </label>
						M <input type = "radio" required name = "sexe" class = "input" value = "MASCULIN" />
						F <input type = "radio" required name = "sexe" class = "input" value = "FEMININ" />
					<p><br/><input type = "submit" name = "valider" value = "Inscription" id = "valider"  />
					<input type = "reset" name = "annuler" value = "Annuler" id = "annuler" /></p>
						
			</fieldset>
		</fieldset>
		</form>
	</div>
 <p id= "conecte"><a href = "acceuil_connexion.php" id = "connecte" >Se connecter à un compte existant</a></p>
	</body>
</html>