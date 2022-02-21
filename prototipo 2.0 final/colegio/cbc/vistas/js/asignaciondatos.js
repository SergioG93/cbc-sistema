/*=============================================
EDITAR ASIGNACION DE GRUPO Y Nombre Completo
=============================================*/
$(".tablas").on("click", ".btnEditarAsignacion", function(){

	var idAsignacion = $(this).attr("idAsignacion");

	var datos = new FormData();
	datos.append("idAsignacion", idAsignacion);

	$.ajax({
		url: "ajax/asignaciondatos.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){

            $("#editarAMaterno").val(respuesta["Apellido_Materno"]);
            $("#editarAPaterno").val(respuesta["Apellido_Paterno"]);
     		$("#editarNombre").val(respuesta["Nombres"]);
     		$("#idAsignacion").val(respuesta["Id"]);

     	}

	})


})



/*=============================================
Eliminar Usuario
=============================================*/

$(".tablas").on("click", ".btnEliminarAsignacion", function(){

	 var idAsignacion = $(this).attr("idAsignacion");

	 swal({
	 	title: '¿Está seguro de borrar?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar!'
	 }).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=asignaciondatos&idAsignacion="+idAsignacion;

	 	}

	 })

})
