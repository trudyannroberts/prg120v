<?php

$navn=$_POST["navn"];

$oppdeltNavn=explode(" ",$navn);

$fornavn=$oppdeltNavn[0];
$etternavn=$oppdeltNavn[1];
print("Fornavnet er $fornavn <br/>");
print("Etternavnet er $etternavn <br/>"); 

?>