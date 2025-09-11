<?php /* Oppgave 5 */
/*
/* Programmet mottar klassekode fra et HTML-skjema
/* Programmet sjekker om klassekode er korrekt fylt ut ved bruk av en egendefinert fuksjon
*/
function validerKlassekode($klassekode)
{
    $lovligKlassekode=true;
    if (!$klassekode) {
        $lovligKlassekode=false;
    } else if (strlen($klassekode)!=3) {
        $lovligKlassekode=false;
      } else{
            $tegn1=$klassekode[0]; /* f�rste tegn i klassekoden */
            $tegn2=$klassekode[1]; /* andre tegn i klassekoden */
            $tegn3=$klassekode[2]; /* tredje tegn i klassekoden */
            if (!ctype_alpha($tegn1)) {
                $lovligKlassekode=false;
            }
            if (!ctype_alpha($tegn2)) {
                $lovligKlassekode=false;
            }
            if (!ctype_digit($tegn3)) {
                 $lovligKlassekode=false;
            }
        }
    return $lovligKlassekode;
} 

$klassekode=$_POST ["klassekode"];
$lovligKlassekode=validerKlassekode($klassekode); /* valideringsfunksjon utf�rt */
if ($lovligKlassekode) /* klassekode er korrekt fylt ut */
{
print("Klassekode er korrekt fylt ut <br />");
}
else /* klassekode er ikke korrekt fylt ut */
{
print("Klassekode er ikke korrekt fylt ut <br />");
}
?>