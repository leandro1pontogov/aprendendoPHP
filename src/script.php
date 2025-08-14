<?php

date_default_timezone_set('America/Sao_Paulo');

$nome = $_POST["dsNome"];
$idade = $_POST["dsIdade"];
$genero = "";

$mensagem = "";

if ($_POST["flGenero"] == "M") 
  $genero = "Masculino";
else if($_POST["flGenero"] == "F")
  $genero = "Feminino";
else
  $genero = "Outros";

$mensagem .= "Nome: " . $nome . " Idade: " . $idade . PHP_EOL;
$mensagem .= "Genero: " . $genero . PHP_EOL;

$idadeDezAnos = $idade + 10;
$mensagem .= "Sua idade daqui 10 anos e: " . $idadeDezAnos . PHP_EOL;

if($idade >= 18)
  $mensagem .= "Voce e maior de idade" . PHP_EOL;
else
  $mensagem .= "Voce e menor de idade" . PHP_EOL;

if(filter_var($idade, FILTER_VALIDATE_INT) === false){
  $mensagem .= "Sua idade nao e um inteiro" . PHP_EOL;
}else{
  $mensagem .= "Sua idade e um inteiro" . PHP_EOL;
}

$ip = $_SERVER['REMOTE_ADDR'];
$mensagem .= "IP: " . $ip . PHP_EOL;

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$mensagem .= 'User Agent: '. $userAgent . PHP_EOL;

$dataHora = date('Y-m-d H:i:s');
$mensagem .= "Data e Hora: " . $dataHora . PHP_EOL;

$respostaPessoa = ["data" => $mensagem];
echo json_encode($respostaPessoa);

?>