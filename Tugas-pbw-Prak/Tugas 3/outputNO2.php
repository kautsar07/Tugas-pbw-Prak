<?php
$Huruf = $_POST['Huruf'];
if ($Huruf=='a'||$Huruf=='A'||$Huruf=='e'||$Huruf=='E'||$Huruf=='i'||$Huruf=='I'||$Huruf=='o'||$Huruf=='O'||$Huruf=='u'||$Huruf=='U') {
    print "$Huruf adalah Vokal.";
} else {
    print "$Huruf adalah Konsonan.";
}
?>