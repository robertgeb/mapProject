<script>
  //função ajax
  function CriaRequest() {
    request = new XMLHttpRequest();
    if (!request)
      alert("Seu Navegador não suporta Ajax!");
    else
      return request;
      }

    //função de requisição ajax
    function obter_dados (identificacao, div_usada,caminho){
      var display = document.getElementById(div_usada).style.display;
      if(display != "block"){
        document.getElementById(div_usada).style.display = 'block';
      };

      var result = document.getElementById(div_usada);
      var xmlreq = CriaRequest();

      xmlreq.open("GET",caminho + identificacao, true);

      // função para mudanças nos dados
      xmlreq.onreadystatechange = function(){
        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {
          // Verifica se o arquivo foi encontrado com sucesso
          if (xmlreq.status == 200) {
            result.innerHTML = xmlreq.responseText;
          }else{
            result.innerHTML = "Erro: " + xmlreq.statusText;
          }
        }
      };
      xmlreq.send(null);
    };
</script>
