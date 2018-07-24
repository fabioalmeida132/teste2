<?php
    include "Teste.class.php";
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    $soma = new Teste($n1,$n2);

    echo $soma->somar();

    //teste2