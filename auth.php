<?php
	session_start();
if(!isset($auth)){
  if(!isset($_SESSION['id'])){
	header('Location:acceuil_inscription.php');
}}
?>
