<!DOCTYPE html>
<html>
<head>
  <title>Oppgave 8</title>
</head>
<body>
  <h3>Oppgave 8</h3>
    
  <form method="post" action="" id="oppgave8" name="oppgave8">
    Hva er 3 ganger 3 ? <input type="text" id="svar" name="svar" required  /> <br />
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
    <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
  </form>
</body>
</html>

<?php
if (isset($_POST ["fortsett"])) 
{
$svar=$_POST ["svar"];
if ($svar == 9)
{
print("Riktig. 3 ganger 3 er 9 <br/>");
}
else
{
print("Feil. 3 ganger 3 er ikke $svar. 3 ganger 3 er 9 <br/>");
}
}
?>