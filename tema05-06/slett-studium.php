<?php /* slett-studium */
/*
/* Programmet lager et skjema for å kunne slette et studium
/* Programmet sletter det valgte studiet
*/
?>
<script src="../funksjoner.js"> </script>
<h3>Slett studium</h3>
<form method="post" action="" id="slettStudiumSkjema" name="slettStudiumSkjema" onSubmit="return bekreft()">
    Studium
    <select name="studiumkode" id="studiumkode">
        <?php print("<option value=''>velg studium </option>");
        include("dynamiske-funksjoner.php"); listeboksStudiumkode(); ?>
    </select> <br/>
    <input type="submit" value="Slett studium" name="slettStudiumKnapp" id="slettStudiumKnapp" />
</form>

<?php
if (isset($_POST ["slettStudiumKnapp"])){
    include("db-tilkobling.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
    $studiumkode=$_POST ["studiumkode"];

    $valideringSql = "SELECT * FROM emne WHERE studiumkode='$studiumkode';";
    $valideringResultat = mysqli_query($db, $valideringSql) or die ("ikke mulig &aring; hente data fra databasen");
    $antallRader = mysqli_num_rows($valideringResultat);
    if ($antallRader > 0) {
        die("Kan ikke slette studium som har tilknyttede emner.");
    }
   
    $sqlSetning="DELETE FROM studium WHERE studiumkode='$studiumkode';";
    mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
    /* SQL-setning sendt til database-serveren */
    print ("F&oslash;lgende studium er n&aring; slettet: $studiumkode <br />");
}
?>