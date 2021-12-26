$(document).ready(function(){
	$(".eliminar").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$(this).parent('td').parent('tr').remove();
		$.post('./ejecuta1.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
			Imagen:imagen
		},function(e){
			alert(e);
		});
		
	});
$(".modificar").click(function(){
		var tipo=$(this).parent('td').parent('tr').find('.Tipo').val();
		var color=$(this).parent('td').parent('tr').find('.Color').val();
		var dimension=$(this).parent('td').parent('tr').find('.Dimension').val();
		var capacidad=$(this).parent('td').parent('tr').find('.capacidad').val();
		var presio=$(this).parent('td').parent('tr').find('.presio').val();
		var personaje=$(this).parent('td').parent('tr').find('.personaje').val();
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$.post('./ejecuta1.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Tipo:tipo,
			Color:color,
			Dimension:dimension,
			Capacidad:capacidad,
			Presio:presio,
			Personaje:peronaje,
			Imagen:imagen,
			},function(e){
			alert(e);
		});
	});
});