
$(document).ready(function () {

    $("#preEnunciado").css("display", "none");
    $("#mnuEnunciado").mouseover(function () {
        $("#preEnunciado").css("display", "block");
    });
    $("#mnuEnunciado").mouseout(function () {
        $("#preEnunciado").css("display", "none");
    });
});

function MostrarGrilla() {

    var pagina = "./nexoAdministrador.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
        data: {queHago: "mostrarGrilla"},
        async: true
        })
        .done(function (obj) {
		
            var tabla = '<table class="table">';
			tabla +=	'	<thead style="background:rgb(14, 26, 112);color:#fff;">';
			tabla +=	'		<tr>';
			tabla +=	'			<th rowspan="2">  ID </th>';
			tabla +=	'				<th rowspan="2">  NOMBRE </th>';
			tabla +=	'					<th rowspan="2">  TIPO  </th>';
			tabla +=	'						<th style="text-align:center">  DUE�O </th>';
			tabla +=	'					</tr> ';
			tabla +=	'					<tr>';
			tabla +=	'						<th>';
			tabla +=	'							<table>';
			tabla +=	'								<thead style="background:rgb(14, 26, 112);color:#fff;">';
			tabla +=	'									<tr>';
			tabla +=	'										<th> NOMBRE </th>';
			tabla +=	'										<th> CIUDAD </th>';
			tabla +=	'										<th> TELEFONO </th>';
			tabla +=	'									</tr>';
			tabla +=	'								</thead>';
			tabla +=	'							</table>';
			tabla +=	'						</th>';
			tabla +=	'					</tr>';
			tabla +=	'				</thead>';
							
			//Armar filas con los datos de las mascotas

            for (var i = 0; i < obj.length; i++)
            {
                tabla += "<tr>";
                tabla +=    "<td>" + obj[i].id + "</td>";
                tabla +=    "<td>" + obj[i].nombre + "</td>";
                tabla +=    "<td>" + obj[i].tipo + "</td>";
                tabla +=    "<td>" + obj[i].due\u00f1o.nombre + "</td>";
                tabla +=    "<td>" + obj[i].due\u00f1o.datos.ciudad + "</td>";
                tabla +=    "<td>" + obj[i].due\u00f1o.datos.telefono + "</td>";
                tabla +=    "<td><img src = '" + obj[i].foto + "' height = '100' width = '100'/></td>";
                tabla += "</tr>";
            }

			tabla += '</table>';
			
            $("#divGrilla").html(tabla);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
        });

}

function CargarFormCelular() {

    var pagina = "./nexoAdministrador.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "cargarForm"},
        async: true
        })
        .done(function (form) {

            $("#divFrm").html(form);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
        });
}
function CargarFormEliminarCiudad() {

    var pagina = "./nexoAdministrador.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "cargarFormEliminar"},
        async: true
        })
        .done(function (form) {

            $("#divFrm").html(form);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
        });
}

function AgregarCelular() {

    var pagina = "./nexoAdministrador.php";
    var celular = {};//crear objeto JSON
    
    alert("Implementar case \"agregarCelular\"");

    var marca = $("#txtMarca").val();
    var sistemaOperativo =  $("#cboSO").val();

    if ($("#rdoSIMUno").is(':checked'))
        var cantidadDeSim = 1;
    else
        var cantidadDeSim = 2;

    celular = {'marca' : marca, 
    'so' : sistemaOperativo,
    'cantSIM' : cantidadDeSim};

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "json",
        data: {
            queHago: "agregarCelular",
            celular: celular
        },
        async: true
    })
    .done(function (objJson) {

        if (!objJson.Exito) {
            alert(objJson.Mensaje);
            return;
        }

        alert(objJson.Mensaje);

    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });

}

function EliminarCiudad() {

    if (!confirm("Desea ELIMINAR el Ciudad??")) {
        return;
    }

    alert("Implementar Eliminar Ciudad....");

    var pagina = "./nexoAdministrador.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "JSON",
        data: {
            queHago: "eliminarCiudad", 
            idAuto : $("#txtIdCiudad").val()
        },
        async: true
        })
    .done(function (objJson) {

        if (!objJson.Exito) {
            alert(objJson.Mensaje);
            return;
        }

        alert(objJson.Mensaje);

    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });
}

function CargarFormSubirArchivo(){
    
    var pagina = "./nexoAdministrador.php";

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "text",
        data: {queHago: "cargarFormSubir"},
        async: true
        })
        .done(function (form) {

            $("#divFrm").html(form);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
        });
    
}

function SubirArchivo() {

    alert("Implementar Subir archivo....");

    var pagina = "./nexoAdministrador.php";

    var subir = $("#subir")[0];

    $.ajax({
        type: 'POST',
        url: pagina,
        dataType: "JSON",
        data: {
            queHago: "subirArchivo", 
            archivo : subir.files[0]
        },
        async: true
        })
    .done(function (objJson) {

        if (!objJson.Exito) {
            alert(objJson.Mensaje);
            return;
        }

        alert(objJson.Mensaje);

    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        alert(jqXHR.responseText + "\n" + textStatus + "\n" + errorThrown);
    });

}

function Validar(objJson) {

    alert("Implementar validaciones...");

    return true;
}