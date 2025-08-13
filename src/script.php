<?php

$nome = $_POST["dsNome"];
$idade = $_POST["dsIdade"];
$genero = "";

if ($_POST["flGenero"] == "M") 
  $genero = "Masculino";
else if($_POST["flGenero"] == "F")
  $genero = "Feminino";
else
  $genero = "Outros";

echo "Nome: " . $nome . " Idade: " . $idade . PHP_EOL;
echo "Genero: " . $genero . PHP_EOL;

$idadeDezAnos = $idade + 10;
echo "Sua idade daqui 10 anos e: " . $idadeDezAnos . PHP_EOL;

if($idade >= 18)
  echo "Voce e maior de idade" . PHP_EOL;
else
  echo "Voce e menor de idade" . PHP_EOL;

if(filter_var($idade, FILTER_VALIDATE_INT) === false){
  echo "Sua idade nao e um inteiro" . PHP_EOL;
}else{
  echo "Sua idade e um inteiro" . PHP_EOL;
}

$ip = $_SERVER['REMOTE_ADDR'];
echo "IP: " . $ip . PHP_EOL;

$userAgent = $_SERVER['HTTP_USER_AGENT'];
echo 'User Agent: '. $userAgent . PHP_EOL;

$dataHora = date('Y-m-d H:i:s');
echo "Data e Hora: " . $dataHora . PHP_EOL;

?>