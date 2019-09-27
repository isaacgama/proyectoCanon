$(document).ready(function(){
	$("#btn-login").click(function(){
		//alert("hola");
		let obj={
			"accion" : "login"
		};
		$("form").find("input").map(function(i, e){
			//console.log(i, e);
			obj[$(this).prop("name")]=$(this).val();
			if ($(this).prop("type") == "checkbox") {
				obj[$(this).prop("name")]= $(this).prop("checked");
			}
		});
		console.log(obj);
		$.post("includes/funciones.php", obj, function(respuesta){
			alert(respuesta.texto);
			if (respuesta.status == 0) {
				alert("Datos Incorrectos");
			}
			else{

			window.location.replace("index.php");
			//si el estatus es 0, enviar mensaje de datos incorrectos, intente de nuevo 
			//si el estatus es 1, redireccionar al index

}
		},"JSON");


	});




});