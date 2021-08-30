<?php 
	function erreurs($a,$b){
		if ( $b == 0){
			throw new Exception('Division par zero impossible');
		}
	elseif( $a == 0){
		    throw new Exception ('Le numerateur est nul');
	}
	return $a/$b;
	}
	try{
		// echo erreurs(0,4);
		echo erreurs(4,0);
	}
	catch(Exception $e){
		echo $e -> getMessage();
	}
?>