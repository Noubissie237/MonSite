<?php 
	$auth = 0;
  include "bd.php"; 
  include "auth.php"; 

	if(isset($_POST['pseudoC']) && isset($_POST['passC'])){
		$passwordC = sha1($_POST['passC']);
		$pseuC = $_POST['pseudoC'];
		$selectC = $bd->query("SELECT * FROM visiteurs WHERE (Pseudo = '$pseuC' AND Pass = '$passwordC') OR (Email = '$pseuC' AND Pass = '$passwordC') ");
		if($selectC->rowCount() > 0 ){
			$_SESSION['auth']=$selectC->fetch();
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
		<h1 class = "bleu">Connexion</h1>
		<p id = "bleu">Utilisez votre compte de visiteur</p><br/>
			<form action = "#" method = "POST" >
		
				<fieldset id = "fieldset1">
					<fieldset>
						<p>Pseudo / Email: <input type = "text" name = "pseudoC" size = "80" required /></p>
						<p>Mot de passe: <input type = "password" name = "passC" size = "80" required /></p>
					<br/>
					<p><input id = "send" type = "submit" name = "valider" value = "Se connecter" />
					<input id = "nosend" type = "reset" name = "supprimer" value = "Annuler" /></p>
					</fieldset>
				</fieldset>
				<p class = 'bleu'><a href = "acceuil_inscription.php" >Créer un nouveau compte</a></p>
		
			</form>
		
	</body>
</html>
