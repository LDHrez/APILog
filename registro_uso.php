<?php include ('functions.php');

$id_user=$_GET['iduser_app'];
$age=$_GET['age'];

$date = date('Y-m-d H:i:s');

ejecutarSQLCommand("INSERT INTO  `edad-estadistica` (edad,id_user,fecha)
VALUES ($age,$id_user,'$date');");


 ?>