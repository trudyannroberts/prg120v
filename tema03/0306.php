<?php
$gittTall=$_POST["gittTall"];

if($gittTall<=0){
    print("Tallet er ikke et positivt heltall");
}

for($tall=1;$tall<=$gittTall;$tall++) {
    print("$tall <br/>");
}
/*
startverdi: $tall=1
betingelse: $tall<=10
økning: $tall=$tall+1 eller $tall++
*/
?>