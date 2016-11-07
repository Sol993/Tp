

function MostarLogin()
{
	//alert("siempre");

	var nombre = $("#nombre").val();
	var password = $("#password").val();

    $.ajax({
        type: 'POST',
        url: "./nexo.php",
        dataType: "json",
        data: {
			queHago : "mostrarLoginSession",
			nombre : nombre,
			password : password
		},
    }).then(function (objJson) {
		//alert(objJson);
		console.info(objJson);
		/*if(!objJson.Exito){
			alert(objJson.Mensaje);
			return;
		}*/
	},function (error) {
        alert(error.responseText);
    });   

}