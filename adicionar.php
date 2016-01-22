<?php
//Página para adicionar novo ponto ao mapa
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8"/>
    <title>Break Check</title>
    <script src="http://maps.googleapis.com/maps/api/js"></script>

  <?php
  include "css/css_pagina.php";
  ?>
  </head>

  <body>
    <?php
    include "javascript/ajax.php";
    include "javascript/add_maps/adicionar_maps.php";
    ?>
    <div id="box">
      <?php include "parts/topo_body.php";?>
      <div id="map">
      </div>
      <div id="form_add">
        <img class="close" src="imagem/close.png" alt="Fechar" onclick="fechar_janela()"/>
        <div id="adicionar_coordenadas">
        </div>
        <div id="form">
        <?php include "php/add_map/formulario_map.php";?>
      </div>
      </div>
    </div>
  </body>
</html>
