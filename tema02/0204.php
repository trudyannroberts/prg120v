<?php

$gift=$_POST ["gift"];
$barn=$_POST ["barn"];

if (!$gift or !$barn)
{
    print("Du har ikke svart på begge spørsmålene");
}
if ($gift=="j" and $barn=="j")
{
    print("Du er gift og har barnn");
}
else if ($gift=="j" and $barn=="n")
{
    print("Du er gift, men har ikke barn");
}
else if ($gift=="n" and $barn=="j")
{
    print("Du er ikke gift, men har barn");
}
else if ($gift=="n" and $barn=="n")
{
    print("Du er ikke gift og har ikke barn");
}
else
{
    print("Du har ikke svart på om du er gift og har barn");
}
?>