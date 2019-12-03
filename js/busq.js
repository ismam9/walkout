$(obtener_registros());

function obtener_registros(beats){
	$.ajax({
		url: 'php/busqueda.php',
		type: 'POST',
		dataType: 'html',
		data: { beats: beats },
	})

	.done(function(response){
		$("#resultados").html(response);
	});
}

$(document).on('keyup', '#palabra', function(){
	var valor= $(this).val();
	if (valor != "") {
		obtener_registros(valor);
	}else{
		obtener_registros();
	}
});