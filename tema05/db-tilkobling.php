<?php /* db-tilkobling */
/*
/* Programmet foretar tilkobling til database-server og valg av database
*/
$host = getenv("mariadb");
$port = 3306;  
$username = getenv('888846');
$password = getenv('71f2888846');
$database = getenv('888846');
$db=mysqli_connect($host,$port, $username,$password,$database) or die ("ikke kontakt med database-server");
/* tilkobling til database-serveren utført */
?>