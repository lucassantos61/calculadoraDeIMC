<?php
require_once 'vendor/autoload.php';

use lucassantos\IMC;

use lucassantos\Bootstrap;

$weight = floatval(filter_input(INPUT_POST,'peso'));
$height = floatval(filter_input(INPUT_POST,'altura'));

$imc = new IMC();

$data = ["RESULT" => $imc->calculaIMC($weight, $height)];

$render = new Bootstrap("formulario");
$render->renderView($data);