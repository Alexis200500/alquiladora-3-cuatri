$(document).ready(function(){
	$(".eliminar").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$(this).parent('td').parent('tr').remove();
		$.post('./ejecuta2.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
			Imagen:imagen
		},function(e){
			alert(e);
		});
		
	});
	$(".modificar").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
		var precio=$(this).parent('td').parent('tr').find('.precio').val();
		var cantidad=$(this).parent('td').parent('tr').find('.cantidad').val();
		var subtotal=$(this).parent('td').parent('tr').find('.subtotal').val();
		
		$.post('./ejecuta2.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Imagen:imagen,
			Nombre:nombre,
			Precio:precio,
			Cantidad:cantidad,
			Subtotal:subtotal,
			
		},function(e){
			alert(e);
		});
	});
});