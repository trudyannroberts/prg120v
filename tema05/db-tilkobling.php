<?php /* db-tilkobling */
/*
/* Programmet foretar tilkobling til database-server og valg av database
*/
$host = getenv("b-studentsql-1.usn.no");
$username = getenv('888846');
$password = getenv('71f2888846');
$database = getenv('888846');
$db=mysqli_connect($host, $username,$password,$database, 3306) or die ("ikke kontakt med database-server");
/* tilkobling til database-serveren utført */
?>