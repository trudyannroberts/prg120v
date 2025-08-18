<?php  


$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"];

if ($tall1 == $tall2)
{
    print ("Tall 1 er lik tall 2");
}
else if ($tall1 < $tall2)
{
    print ("Tall 1 er mindre enn tall 2");
}
else if ($tall1 > $tall2)
{
    print ("Tall 1 er større enn tall 2");
} 
else
{
    print ("Du har ikke fylt inn tall");
}