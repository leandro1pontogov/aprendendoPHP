<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <style>
  #frmCadastroPessoa{
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    height: 100%;
    gap: 5px;
  }
  #frmNotaPessoa{
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    height: 100%;
    gap: 5px;
  }
  #frmImc{
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    height: 100%;
    gap: 5px;
  }
  #frmData{
    display: flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    height: 100%;
    gap: 5px;
  }
  #linha{
    border: 1px dashed black;
    width: 100%;
    margin-top: 15px;
  }
</style>
<script>
$(document).ready(function() {
  $("#BtnEnviar").click(function(){
    $.post(
      "script.php",
      {
        dsNome: $("#dsNome").val(),
        dsIdade: $("#dsIdade").val(),
        flGenero: $("#flGenero").val()
      },
      function(response){
        console.log(response)
    })
  })
  $("#BtnEnviarNota").click(function(){
    $.post(
      "controller.php?action=calcularMedia",
      {
        vlNota1: $("#vlNota1").val(),
        vlNota2: $("#vlNota2").val(),
        vlNota3: $("#vlNota3").val(),
        vlNota4: $("#vlNota4").val(),
      },
      function(response){
        console.log(response)
    })
  })
  $("#BtnEnviarImc").click(function(){
    $.post(
      "controller.php?action=calcularImc",
      {
        vlPeso: $("#vlPeso").val(),
        vlAltura: $("#vlAltura").val(),
      },
      function(response){
        console.log(response)
    })
  })
  $("#BtnEnviarData").click(function(){
    $.post(
      "controller.php?action=calcularData",
      {
        dtData: $("#dtData").val(),
      },
      function(response){
        console.log(response)
    })
  })
})
</script>
</head>

<body>
  

  <form id="frmCadastroPessoa">

    <h2>Informe os dados</h2>

    <label for="dsNome">Informe seu nome</label>
    <input type="text" id="dsNome" name="dsNome">
    <label for="dsIdade">Informe sua idade</label>
    <input type="text" id="dsIdade" name="dsIdade">

    <label for="flGenero"></label>
    <select name="flGenero" id="flGenero">
      <option value="" disabled selected>Escolha seu Genero</option>
      <option value="M">Masculino</option>
      <option value="F">Feminino</option>
      <option value="O">Outro</option>
    </select>

    <input id="BtnEnviar" type="button" value="Enviar">

  </form>

  <div id="linha"></div>

  <form id="frmNotaPessoa">

    <h2>Informe suas Notas</h2>
    <label for="vlNota1">Nota 1</label>
    <input type="text" id="vlNota1" name="vlNota1">
    <label for="vlNota2">Nota 2</label>
    <input type="text" id="vlNota2" name="vlNota2">
    <label for="vlNota3">Nota 3</label>
    <input type="text" id="vlNota3" name="vlNota3">
    <label for="vlNota4">Nota 4</label>
    <input type="text" id="vlNota4" name="vlNota4">

    <input id="BtnEnviarNota" type="button" value="Enviar">

  </form>

  <div id="linha"></div>

  <form id="frmImc">

    <h2>Informe os dados</h2>

    <label for="vlPeso">Peso</label>
    <input type="text" id="vlPeso" name="vlPeso">
    <label for="vlAltura">Altura</label>
    <input type="text" id="vlAltura" name="vlAltura">

    <input id="BtnEnviarImc" type="button" value="Enviar">

  </form>

  <div id="linha"></div>

  <form id="frmData">

    <h2>Informe uma data</h2>

    <input type="date" name="dtData" id="dtData">

    <input id="BtnEnviarData" type="button" value="Enviar">

  </form>

</body>
</html>

<?php
  