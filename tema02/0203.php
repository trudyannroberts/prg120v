<?php

$svar=$_POST ["svar"];

if (!$svar)
{
    print("Du har ikke svart på spørsmålet om du er student");
}
else if ($svar=="j" or $svar=="J" or $svar=="ja" or $svar=="JA" or $svar=="Ja")
{
    print("Du har svart j på spørsmålet om du er student");
}
else if ($svar=="n" or $svar=="N" or $svar=="nei" or $svar=="NEI" or $svar=="Nei")
{
    print("Du har svart n på spørsmålet om du er student");
}
else 
{
    print("Du har ikke svart j eller n på spørsmålet om du er student");
}
?>