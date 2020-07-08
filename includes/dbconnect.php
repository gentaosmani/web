<?php
try{
	$pdo = new PDO("mysql:host=localhost;dbname=perdoruesit", "root", "");

} catch(PDOException $pdo){
	die("Lidhja deshtoi");

}

 ?>