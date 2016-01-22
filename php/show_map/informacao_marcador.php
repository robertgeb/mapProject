<?php
  include "../conexao.php";
// Verifica se a variável está vazia
$buscasql=$_GET["buscasql"];
if (empty($buscasql)) {
    $sql = "SELECT * FROM pontos_mapa";
} else {
    $sql = "SELECT * FROM pontos_mapa WHERE ID like $buscasql";
}
$result = mysql_query($sql);
$cont = mysql_affected_rows($conexao);
// Verifica se a consulta retornou linhas
if ($cont > 0) {
    // Captura os dados da consulta e inseri na tabela HTML
    while ($linha = mysql_fetch_array($result)) {
        $return='O ponto é '.utf8_encode($linha["nome"]).
        '<br>Sua latitude fica em '.utf8_encode($linha["latitude"]).
        '<br> e sua longitude em '.utf8_encode($linha["longitude"]);
    };
    echo '<img class="close" src="imagem/close.png" alt="Fechar" onclick="fechar_janela()"/>';
    echo $return;
} else {
    // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
    echo "Não foram encontrados registros!";
};
?>
