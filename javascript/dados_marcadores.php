
<?php
  //gerando  o JSON de pontos do mapa
  include "../php/conexao.php";
  $selecao_sql='SELECT * FROM pontos_mapa';

  //realizando a query
  $resultado_sql=mysql_query($selecao_sql);
  $numero_linhas_resultado=mysql_num_rows($resultado_sql);

  $JSON='[';

  $contador=0;
  //criando o fetch array para a query
  while($linhas_resultado=mysql_fetch_array($resultado_sql)){
    $JSON=$JSON.'
        {
          "ID":"'.utf8_encode($linhas_resultado["ID"]).'",
          "nome":"'.utf8_encode($linhas_resultado["nome"]).'",
          "latitude":"'.utf8_encode($linhas_resultado["latitude"]).'",
          "longitude":"'.utf8_encode($linhas_resultado["longitude"]).'",
          "endereco":"'.utf8_encode($linhas_resultado["endereco"]).'",
          "data_adicao":"'.utf8_encode($linhas_resultado["data_adicao"]).'"
        }
        ';
        $contador=$contador+1;
        if($contador!=$numero_linhas_resultado){
          $JSON=$JSON.',';
        }
      }
      $JSON=$JSON.']';
?>

var json = <?php echo $JSON; ?>
