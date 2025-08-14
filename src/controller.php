<?php

date_default_timezone_set('America/Sao_Paulo');
$action = $_GET["action"];

switch ($action) {
  case "calcularMedia":

    $nota1 = $_POST["vlNota1"];
    $nota2 = $_POST["vlNota2"];
    $nota3 = $_POST["vlNota3"];
    $nota4 = $_POST["vlNota4"];

    if($nota1 < 0 || $nota1 > 10 ||
      $nota2 < 0 || $nota2 > 10 ||
      $nota3 < 0 || $nota3 > 10 ||
      $nota4 < 0 || $nota4 > 10){

      echo "Informe notas somente de 0 a 10" . PHP_EOL;
      exit;
    }

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if($media >= 7){
      echo "Aprovado!!" . PHP_EOL;
    }else if($media >= 5){
      echo "Recuperacao!!" . PHP_EOL;
      $notaNecessaria = 14 - $media;
      echo "Voce precisa de: " . $notaNecessaria . " para passar" . PHP_EOL;
    }else{
      echo "Reprovado!!" . PHP_EOL;
    }

    echo "A media das suas notas e: " . $media . PHP_EOL;

    $maiorNota = $nota1;
    if($nota2 > $maiorNota){
      $maiorNota = $nota2;
      if($nota3 > $maiorNota){
        $maiorNota = $nota3;  
        if($nota4 > $maiorNota){
          $maiorNota = $nota4;  
        }
      }
    }
    echo "A maior nota recebida foi: " . $maiorNota;
    break;

  case "calcularImc":

    $peso = $_POST["vlPeso"];
    $altura = $_POST["vlAltura"];

    if($peso < 0 || $altura < 0){
      echo "Informe valores positivos";
    }

    $imc = $peso / ($altura * $altura);

    echo "Seu IMC e " . $imc . PHP_EOL;

    if($imc < 18.5){
      echo "Voce esta abaixo do peso" . PHP_EOL;
    }else if($imc < 25){
      echo "Seu peso e normal" . PHP_EOL;
    }else if($imc < 30){
      echo "Voce esta com sobrepeso" . PHP_EOL;
    }else{
      echo "Voce esta obeso" . PHP_EOL;
    }

    $peso_ideal = 22 * ($altura ^ 2);
    echo "Seu peso ideal e de: " . $peso_ideal . PHP_EOL;

    if($peso > $peso_ideal){
      $acima_peso = $peso - $peso_ideal;
      echo "Voce esta " . $acima_peso . "KG acima do seu peso ideal" . PHP_EOL;
    }else{
      $abaixo_peso = $peso_ideal - $peso;
      echo "Voce esta " . $abaixo_peso . "KG abaixo do seu peso ideal" . PHP_EOL;
    }
    break;

  case "calcularData":

    $dataInformadaStr = $_POST["dtData"];
    $dataInformada = new DateTime($dataInformadaStr);
    $dataAtual = new DateTime();

    $intervalo = $dataInformada->diff($dataAtual);

    $dias = $intervalo->days;
    $horas = $intervalo->h;
    $minutos = $intervalo->i;
    $segundos = $intervalo->s;

    if($intervalo->invert === 0){
      echo "A data informada foi a: ";
    }else{
      echo "A data informada sera daqui a: ";
    }

    echo $dias . " dias, " . $horas . " horas, " . $minutos . " minutos e " . $segundos . " segundos";

}