<?php

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
      $notaNecessaria = 7 - $media;
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
}