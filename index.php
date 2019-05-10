<?php


include "classes/Pessoa.php";
include "classes/imc.php";

// INSTANCIANDO OBJETOS
$pessoa = new Pessoa(70, 1.70);
$imc = new Imc($pessoa);

// EXECUSSAO DO CALCULO
echo $imc->calcular();

?>