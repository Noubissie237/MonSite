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
			<link rel = "stylesheet" href = "index1.css" />
		</head>
	<body>
			<form action = "#" method = "POST" >
				<div id = "bock">
					<h1 class = "bleu">Connexion</h1>

				
					
						<p><strong>Pseudo / Email</strong><br/><br/> <input type = "text" name = "pseudoC" placeholder = "	Entrer le pseudo" class = "input"  required value = "<?php if(isset($_POST['pseudoC'])){ echo $_POST['pseudoC']; } ?>" /></p>
						<p><strong>Mot de passe</strong> <br/><br/><input type = "password" name = "passC" placeholder = "	Entrer le mot de passe" class = "input" required /></br>
						<span>Mot de passe incorrect</span>
					<p><input class = "input sub" type = "submit" name = "valider" value = "Se connecter" />
			
				</div>
					<h3 align = "center"><a href = "acceuil_inscription.php" id = "creation" >Créer un nouveau compte</a></h3>

		
			</form>
		
	</body>
</html>
