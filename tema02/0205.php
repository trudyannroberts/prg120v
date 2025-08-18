<?php    /* Oppgave 4 */


$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];
$tall3=$_POST["tall3"];

if ($tall3==1)
{
    $resultat = $tall1 + $tall2;

    print ("Tall 1 er $tall1 <br/>");
    print ("Tall 2 er $tall2 <br/> <br/>");
    print ("Regneoperasjonen er Addisjon <br/>");
    print ("Resultatet av regneoperasjonen er $resultat <br/>");
}
else if ($tall3==2)
{
    $resultat = $tall1 - $tall2;

    print ("Tall 1 er $tall1 <br/>");
    print ("Tall 2 er $tall2 <br/> <br/>");
    print ("Regneoperasjonen er Subtraksjon <br/>");
    print ("Resultatet av regneoperasjonen er $resultat <br/>");
}
else if ($tall3==3)
{
    $resultat = $tall1 * $tall2;

    print ("Tall 1 er $tall1 <br/>");
    print ("Tall 2 er $tall2 <br/> <br/>");
    print ("Regneoperasjonen er Multiplikasjon <br/>");
    print ("Resultatet av regneoperasjonen er $resultat <br/>");
}
else if ($tall3==4)
{
    $resultat = $tall1 / $tall2;

    print ("Tall 1 er $tall1 <br/>");
    print ("Tall 2 er $tall2 <br/> <br/>");
    print ("Regneoperasjonen er Divisjon <br/>");
    print ("Resultatet av regneoperasjonen er $resultat <br/>");
}
else
{
print ("Det er ikke angitt en gyldig regneoperasjon <br/>");
}
?>