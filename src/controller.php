<?php

date_default_timezone_set('America/Sao_Paulo');
$action = $_GET["action"];

switch ($action) {
  case "calcularMedia":

    $nota1 = $_POST["vlNota1"];
    $nota2 = $_POST["vlNota2"];
    $nota3 = $_POST["vlNota3"];
    $nota4 = $_POST["vlNota4"];

    $mensagem = "";

    if($nota1 < 0 || $nota1 > 10 ||
       $nota2 < 0 || $nota2 > 10 ||
       $nota3 < 0 || $nota3 > 10 ||
       $nota4 < 0 || $nota4 > 10)
       {
       $mensagem .= "Informe notas somente de 0 a 10" . PHP_EOL;
       exit;
       }

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if($media >= 7){
      $mensagem .= "Aprovado!!" . PHP_EOL;
    }else if($media >= 5){
      $mensagem .= "Recuperacao!!" . PHP_EOL;
      $notaNecessaria = 14 - $media;
      $mensagem .= "Voce precisa de: " . $notaNecessaria . " para passar" . PHP_EOL;
    }else{
      $mensagem .= "Reprovado!!" . PHP_EOL;
    }

    $mensagem .= "A media das suas notas e: " . $media . PHP_EOL;

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
    $mensagem .= "A maior nota recebida foi: " . $maiorNota;

    $respostaNota = ["data" => $mensagem];
    echo json_encode($respostaNota);
    break;

  case "calcularImc":

    $peso = $_POST["vlPeso"];
    $altura = $_POST["vlAltura"];

    $mensagem = "";

    if($peso < 0 || $altura < 0){
      $mensagem .= "Informe valores positivos";
    }

    $imc = $peso / ($altura * $altura);

    $mensagem .= "Seu IMC e " . $imc . PHP_EOL;

    if($imc < 18.5){
      $mensagem .= "Voce esta abaixo do peso" . PHP_EOL;
    }else if($imc < 25){
      $mensagem .= "Seu peso e normal" . PHP_EOL;
    }else if($imc < 30){
      $mensagem .= "Voce esta com sobrepeso" . PHP_EOL;
    }else{
      $mensagem .= "Voce esta obeso" . PHP_EOL;
    }

    $peso_ideal = 22 * ($altura ^ 2);
    $mensagem .= "Seu peso ideal e de: " . $peso_ideal . PHP_EOL;

    if($peso > $peso_ideal){
      $acima_peso = $peso - $peso_ideal;
      $mensagem .= "Voce esta " . $acima_peso . "KG acima do seu peso ideal" . PHP_EOL;
    }else{
      $abaixo_peso = $peso_ideal - $peso;
      $mensagem .= "Voce esta " . $abaixo_peso . "KG abaixo do seu peso ideal" . PHP_EOL;
    }

    $respostaImc = ["data" => $mensagem];
    echo json_encode($respostaImc);
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

    $mensagem = "";

    if($intervalo->invert === 0){
      $mensagem .= "A data informada foi a: ";
    }else{
      $mensagem .= "A data informada sera daqui a: ";
    }

    $mensagem .= $dias . " dias, " . $horas . " horas, " . $minutos . " minutos e " . $segundos . " segundos";

    $respostaData =  ["data" => $mensagem];
    echo json_encode($respostaData);
    break;
}
