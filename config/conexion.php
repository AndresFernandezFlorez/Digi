
<?php
$mysqli = new mysqli('localhost', 'root', '', 'agesoco_db_digiturno');
if($mysqli->connect_error){
	echo $error -> $mysqli->connect_error;
}
else{
	echo "Funciona correcto";
}

?>
