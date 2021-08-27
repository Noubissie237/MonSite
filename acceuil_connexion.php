<?php 
	$auth = 0;
  include "bd.php"; 
  include "form.php";
  include "auth.php"; 

	if(isset($_POST['pseudo']) && isset($_POST['pass'])){
		$password = sha1($_POST['pass']);
		$pseu = $_POST['pseudo'];
		$select = $bd->query("SELECT * FROM visiteurs WHERE Pseudo = '$pseu' AND Pass = '$password' ");
		if($select->rowCount() > 0 ){
			$_SESSION['auth']=$select->fetch();
			header('Location:page1.php');		
			}
	}
	
?>
<!DOCTYPE html>
<html>
		<head>	
			<title>CONNEXION</title>
			<meta charset = "utf-8" />
			<link rel = "stylesheet" href = "acceuil_connexion.css" />
		</head>
	<body>
		<h1>Connexion</h1>
		<p id = "first">Utilisez votre compte de visiteur</p><br/>
			<form action = "#" method = "POST" >
		
				<fieldset id = "fieldset1">
					<fieldset>
						<p>Pseudo: <input type = "text" name = "pseudo" size = "50" /></p>
						<p>Mot de passe: <input type = "password" name = "pass" size = "50" /></p>
					<br/>
					<p><input id = "send" type = "submit" name = "valider" value = "Se connecter" />
					<input id = "nosend" type = "reset" name = "supprimer" value = "Annuler" /></p>
					</fieldset>
				</fieldset>
				<p><a href = "acceuil_inscription.php" id="last" >Créer un nouveau compte</a></p>
		
			</form>
		
	</body>
</html>
