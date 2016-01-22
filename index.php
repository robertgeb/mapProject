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
    include "javascript/index_map/maps.php";
    ?>
    <div id="box">
      <?php include "parts/topo_body.php";?>
      <div id="map">
      </div>
      <div id="conteudo">
      </div>
    </div>
  </body>
</html>
