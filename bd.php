 <?php
	$serveur = "localhost";
	$pass = "";
	$login = "root";
	 try{
		$bd = new PDO("mysql:host=$serveur;dbname=monsite", $login, $pass);
		$bd ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$bd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
}		
	 catch(PDOException $e){
		 echo "Echec : ".$e->getMessage();
	 }
 ?>