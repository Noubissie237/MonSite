<?php 
	$auth = 0;
	include "bd.php"; 
	include "auth.php"; 
  
				function securisationEmail($mailC){
					$mailC = filter_var($mailC, FILTER_VALIDATE_EMAIL);
					$mailC = filter_var($mailC, FILTER_SANITIZE_EMAIL);
					return $mailC;
				}
				
				function securisationPass($pass){
					if(strlen($pass) < 4){
						header('Location:acceuil_inscription_nbPass.php');
						die();
					}
					else{
						return $pass;
					}
				}
				
				function securisationName($name){
					$name = htmlspecialchars($name);
					$name = trim($name);
					$name = stripslashes($name);
					$name = strip_tags($name);
					return $name;
				}

	if(isset($_POST['pseudo'])){
		$password = sha1($_POST['pass2']);
		$pseudobrute = ($_POST['pseudo']);
		$pseu = securisationName($pseudobrute);
		$nombrute = ($_POST['nom']);
		$nom = securisationName($nombrute);
		$prenombrute = ($_POST['prenom']);
		$pren = securisationName($prenombrute);
		$mailbrute = $_POST['email'];	
		$mail = securisationEmail($mailbrute);		
		if($mail == NULL){
			header('Location:mailError.php');
		}
		else{
			$sex = $_POST['sexe'];
			$passbrute1 = $_POST['pass1'];
			$fpass = securisationPass($passbrute1);
			$passbrute2 = $_POST['pass2'];
			$spass = securisationPass($passbrute2);
			
				if($fpass != $spass){
					header('Location:acceuil_inscription_corresPass.php');
				}
				else{
					$select = $bd -> query("SELECT * FROM visiteurs WHERE Pseudo = '$pseu' ");
					if($select -> rowCount() > 0){
						header('Location:acceuil_inscription_pseudo.php');
					}else{
						$select = $bd -> prepare("INSERT INTO visiteurs(Id, Pseudo, Nom, Prenom, Sexe, Email, Pass) VALUES(NULL, '$pseu', '$nom', '$pren', '$sex', '$mail', SHA1('$spass')) ");
						$select -> execute();
						$select = $bd->query("SELECT * FROM visiteurs WHERE Pseudo ='$pseu' AND Pass = '$password' ");
							if($select->rowCount() > 0 ){
								$_SESSION['auth']=$select->fetch();
								header('Location:page1.php');
							}
	header('acceuil_inscription.php');
					}
				}
		}
	}
	
?>
<!DOCTYPE html>
<html>
		<head>
			<title>Inscription</title>
			<meta charset = "utf-8" />
			<link rel = "stylesheet" href = "acceuil_inscription_pseudo.css" />
		</head>
	<body>
	
	<div id = "block">
			<form action = "#" method = "POST" id="myform">
			<h1>Creer votre compte de visiteurs</h1>
					<p>Pseudo<span> *</span><br/>
						<input type = "text" required name = "pseudo" class = "input" placeholder = "	Entrer le pseudo" class = "input" value = "<?php if(isset($_POST['pseudo'])){ echo $_POST['pseudo']; } ?>" /><br/>
					<span>Ce pseudo existe déjà !</span></p>
					<p>Nom<span> *</span><br/>
						<input type = "text" required name = "nom" class = "input nom" placeholder = "	Entrer le nom" class = "input" value = "<?php if(isset($_POST['nom'])){ echo $_POST['nom']; } ?>"/></p>
					<p>	Prénom<span> *</span><br/>
						<input type = "text" required name = "prenom" class = "input prenom" placeholder = "	Entrer le prénom" class = "input" value = "<?php if(isset($_POST['prenom'])){ echo $_POST['prenom']; } ?>" /></p>
					<p>Email<span> *</span><br/>
						<input type = "email" required name = "email" class = "input" placeholder = "	Votremail@gmail.com" class = "input" pattern = "^(.*)gmail.com$" value = "<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" /></p>
					<p>Mot de passe<span> *</span><br/>
						<input type = "password" required name= "pass1" class = "input"  class = "input" value = "<?php if(isset($_POST['pass1'])){ echo $_POST['pass1']; } ?>" /></p>
					<p>Confirmer<span> *</span><br/>
						<input type = "password" name = "pass2" placeholder = "	Retapez le mot de passe" class = "input" required value = "<?php if(isset($_POST['pass2'])){ echo $_POST['pass2']; } ?>" /></p>
					<p>Sexe:<span> *</span>
						M <input type = "radio" required name = "sexe" class = "inputin" value = "MASCULIN" />
						F <input type = "radio" required name = "sexe" class = "inputin" value = "FEMININ" /></p>
					<p><br/><input type = "submit" name = "valider" class = "input valid" value = "Inscription" id = "valider"  /></p>
		</form>
		
	</div>
<h3 align = "center"><a href = "index.php" id = "connecte" >Se connecter à un compte existant</a></h3>
	</body>
</html>