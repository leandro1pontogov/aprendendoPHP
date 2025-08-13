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
    width: 400px;
    height: 100%;
    gap: 5px;
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
})
</script>
</head>

<body>
  

  <form id="frmCadastroPessoa">

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


</body>
</html>

<?php
  