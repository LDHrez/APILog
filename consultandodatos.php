<?php
include('functions.php');
$email=$_GET["email"];


if($resultset=getSQLResultSet("SELECT iduser_app,age FROM `user_app` WHERE email='$email'")){
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		echo json_encode($row);
	}
}

?>