<?php include ('functions.php');

$email=$_GET['email'];
$last_name=$_GET['last_name'];
$name=$_GET['name'];
$password=$_GET['password'];
$age=$_GET['age'];
//$pais=$_GET['pais'];

ejecutarSQLCommand("INSERT INTO  `user_app` (email,last_name,name, password, age)
VALUES (
    '$email' ,
    '$last_name' ,
    '$name' ,
    '$password',
    '$age')

 ON DUPLICATE KEY UPDATE 
    `name`= '$name',
    `password`='$password';
    `last_name`= '$last_name',
    `age`='$age';");  

 ?>