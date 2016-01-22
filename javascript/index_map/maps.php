<?php
//script que chama os dados_marcadores.php que é o JSON com os pontos. ?>
<script type="text/javascript" src="javascript/dados_marcadores.php"></script>
<script>

	//função para ocultar a janela flutuante superior
	function fechar_janela(){
		var display = document.getElementById("conteudo").style.display;
		if(display != "none"){
			document.getElementById("conteudo").style.display = 'none';
		};
	}


	(function() {
		window.onload = function() {
			// Geração do mapa
			var map = new google.maps.Map(document.getElementById("map"), {
				center: new google.maps.LatLng(-22.6085, -43.7128),
				zoom: 15,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
			});

			// Gerando uma janela de informação global para ser reusado em todos os marcadores
			//var infoWindow = new google.maps.InfoWindow();
			// Criando loop para exibir todo o JSON

			for (var i = 0, length = json.length; i < length; i++) {
				var data = json[i],
				latLng = new google.maps.LatLng(data.latitude, data.longitude);
				// inserindo marcador no mapa
				var marker = new google.maps.Marker({
					position: latLng,
					map: map,
					title: data.nome,
				});

				//Gerando o encapsulamento para reter as informações corretas em cada loop
				(function(marker, data) {
					//Criando o evento em caso de clique no marcador
					google.maps.event.addListener(marker, "click", function(e) {
						//Gerando janela de informação suspensa
						//infoWindow.open(map, marker);
						//inserindo o conteúdo endereço na caixa de informação
						//infoWindow.setContent(data.endereco);
						//chamando a função externa do AJAX
						obter_dados(data.ID,"conteudo", "php/show_map/informacao_marcador.php?buscasql=");
						// adicionar função Ajax
					});
					//Parâmetros usados na função de cada marcador
				})(marker, data);
			}
		}
	})();
</script>
