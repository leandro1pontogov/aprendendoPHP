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

echo "Nome: " . $nome . " Idade: " . $idade . "  Genero: " . $genero . PHP_EOL;

$idadeDezAnos = $idade + 10;
echo "Sua idade daqui 10 anos e: " . $idadeDezAnos . PHP_EOL;

if($idade >= 18)
  echo "Voce e maior de idade";
else
  echo "Voce e menor de idade"

?>