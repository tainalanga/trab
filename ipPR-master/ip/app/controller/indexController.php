<?php

    function especIp($t1, $t2, $t3, $t4, $mascara){
        $ip =  $t1.".".$t2.".".$t3.".".$t4."/".$mascara;

        $mascaras = ['24' => 0, '25' => 128, '26' => 192, '27' => 224, '28' => 240, '29' => 248, '30' => 252, '31' =>254, '32' => 255];
        $mascaraF = "255.255.255.".$mascaras[$mascara];

        return $mascaraF;


    }





if (!isset($_GET['rota'])){
    include_once "../views/index.php";
}

if (isset($_GET['rota']) and $_GET['rota'] == 'calcular') {
    $ip = especIp($_GET['1'], $_GET['2'],$_GET['3'],$_GET['4'],$_GET['mascara']);
    echo "<h1>".$ip."</h1>";
}