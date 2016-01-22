
<?php
$posicao=$_GET["posicao"];
$parte = explode("@", $posicao);

$longitude=$parte[0];
$latitude=$parte[1];

?>
<p>Latitude: <?php echo $latitude; ?><br/>
  Longitude: <?php echo $longitude; ?></p>
