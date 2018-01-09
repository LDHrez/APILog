<?php 
header( 'Content-Type: text/html;charset=utf-8' );


function ejecutarSQLCommand($commando){
 
 $mysqli = new mysqli("us-cdbr-iron-east-05.cleardb.net", "b2e58025c488b9", "532b4a5b", "heroku_fdb14b7aa982b59");
 //$mysqli = new mysqli("localhost", "root", "", "accesotest");

/* check connection */
if ($mysqli->connect_errno) {
    
    printf("Connect failed: %s\n", $mysqli->connect_error);
    //echo $mysqli->connect_error;

    exit();
}

if ( $mysqli->multi_query($commando)) {
     if ($resultset = $mysqli->store_result()) {
    	while ($row = $resultset->fetch_array(MYSQLI_BOTH)) {
    		
    	}
    	$resultset->free();
     }
    
   
}

$mysqli->close();
}

function getSQLResultSet($commando){
 
  //$mysqli = new mysqli("localhost", "root", "", "accesotest");
  $mysqli = new mysqli("us-cdbr-iron-east-05.cleardb.net", "b2e58025c488b9", "532b4a5b", "heroku_fdb14b7aa982b59");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    //echo $mysqli->connect_error;
    exit();
}

if ( $mysqli->multi_query($commando)) {
    //echo $mysqli->store_result();
	return $mysqli->store_result();
	
     
    
   
}



$mysqli->close();
}


?>
