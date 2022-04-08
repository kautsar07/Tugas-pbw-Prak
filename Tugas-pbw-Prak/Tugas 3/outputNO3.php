<?php
$hari = $_POST['hari'];
$hari = strtoupper($hari);
switch ($hari){
    case 1:
        print "INI ADALAH HARI SENIN";
        break;
    case 2:
        print "INI ADALAH HARI SELASA";
        break;
    case 3:
        print "INI ADALAH HARI RABU";
        break;
    case 4:
        print "INI ADALAH HARI KAMIS";
        break;
    case 5:
        print "INI ADALAH HARI JUMAT";
        break;
    case 6:
        print "INI ADALAH HARI SABTU";
        break;
    case 7:
        print "INI ADALAH HARI MINGGU";
        break;

}