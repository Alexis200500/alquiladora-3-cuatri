$(document).ready(function(){
	$(".eliminar").click(function(){
		var imagen=$(this).parent('td').parent('tr').find('.imagen').val();
		$(this).parent('td').parent('tr').remove();
		$.post('./ejecuta.php',{
			Caso:'Eliminar',
			Id:$(this).attr('data-id'),
			Imagen:imagen
		},function(e){
			alert(e);
		});
		
	});
	$(".modificar").click(function(){
		var nombre=$(this).parent('td').parent('tr').find('.nombre').val();
		var apellidop=$(this).parent('td').parent('tr').find('.apellidop').val();
		var apellidom=$(this).parent('td').parent('tr').find('.apellidom').val();
		var telefono=$(this).parent('td').parent('tr').find('.telefono').val();
		var email=$(this).parent('td').parent('tr').find('.email').val();
		var usuario=$(this).parent('td').parent('tr').find('.usuario').val();
		var pass=$(this).parent('td').parent('tr').find('.pass').val();
		var passadmin=$(this).parent('td').parent('tr').find('.passadmin').val();
		$.post('./ejecuta.php',{
			Caso:'Modificar',
			Id:$(this).attr('data-id'),
			Nombre:nombre,
			Apellidop:apellidop,
			Apellidom:apellidom,
			Telefono:telefono,
			Email:email,
			Usuario:usuario,
			Pass:pass,
			Passadmin:passadmin
		},function(e){
			alert(e);
		});
	});
});