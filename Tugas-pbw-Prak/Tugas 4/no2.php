<?php
if(isset($_POST['konfirm'])){
    $prima = $_POST['prima'];
    $x = "Prima";
    for ($i=2; $i<=$prima-1; $i++){
        if ($prima % $i == 0){
            $x = "bukan Prima";
        break;       
        }
    }
    echo "Bilangan ".$prima." adalah ". "bilangan ".$x;
}

?>