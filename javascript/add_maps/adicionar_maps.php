<script>
function fechar_janela(){
	var display = document.getElementById("form_add").style.display;
	if(display != "none"){
		document.getElementById("form_add").style.display = 'none';
	};
}

function abrir_janela(){
	var display = document.getElementById("form_add").style.display;
	if(display != "block"){
		document.getElementById("form_add").style.display = 'block';
	};
}


	//Função para criar o mapa vazio
	(function() {
		//cria o mapa ao carregar
		window.onload = function() {
			var map = new google.maps.Map(document.getElementById("map"),{
				center: new google.maps.LatLng(-22.6085, -43.7128),
				zoom: 15,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
			});

			var lat;
			var lng;

			function criarMarcador(latLng, map) {
				var marker = new google.maps.Marker({
					position: latLng,
					map: map,
					draggable:true,
					title:"NOVO PONTO"
				});
				// assim que cria o ponto é capturado sua latitude e  longitude
				lat=marker.getPosition().lat();
				lng=marker.getPosition().lng();

				marker.addListener('dragend', function() {
					//sempre que arrastar e soltar o marcador e capturado a nova latitude e longitude
					lat=marker.getPosition().lat();
					lng=marker.getPosition().lng();
					//usa o ajax
					obter_dados (lat+"@"+lng,"adicionar_coordenadas","php/add_map/new_map.php?posicao=");
				});
			}

			var validador_novopt=true;
			map.addListener('click', function(e) {

				if (validador_novopt==true){
				criarMarcador(e.latLng, map);
			}
			validador_novopt=false;
				abrir_janela()
				obter_dados (lat+"@"+lng,"adicionar_coordenadas","php/add_map/new_map.php?posicao=");
			});
		}
	})();
</script>
