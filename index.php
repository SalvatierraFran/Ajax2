<?php
$tituloVentana = "PRIMER PARCIAL - con archivos, AJAX, JQUERY y JSON -";
?>
<html>
    <head><meta charset="utf-8" />
        <title> <?php echo $tituloVentana; ?> </title>

        <meta charset="UTF-8">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="./JavaScript/FuncionesParcial.js"></script>

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <link rel="stylesheet" type="text/css" href="animacion.css">
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <?php
                //$objUser = json_decode($user);
                echo "<a class='btn btn-success animated bounceInLeft' href='#' id='mnuEnunciado' ><span class='glyphicon glyphicon-home'>&nbsp;</span>Enunciado</a>";
                echo "<a class='btn btn-default animated bounceInLeft' href='#' onclick='MostrarGrilla()'><span class='glyphicon glyphicon-th'>&nbsp;</span>1- Mostrar Mascotas&nbsp;</a>";
                echo "<a class='btn btn-info animated bounceInLeft' href='#' onclick='CargarFormCelular()'></span><span class='glyphicon glyphicon-plus-sign'>&nbsp;</span>2- Agregar Celular&nbsp;</a>";
                echo "<a class='btn btn-danger animated bounceInLeft' href='#' onclick='CargarFormEliminarCiudad()'><span class='glyphicon glyphicon-minus-sign'>&nbsp;</span>3- Eliminar Ciudad&nbsp;</a>";
                echo "<a class='btn btn-primary animated bounceInLeft' href='#' onclick='CargarFormSubirArchivo()'><span class='glyphicon glyphicon-file'>&nbsp</span>4- Subir Archivo&nbsp;</a>";
                ?>
            </div>            
            <div class="page-header" id="divEnunciado">
                <pre id="preEnunciado">
                    NOTA: <span style="font-weight:bold">&CirclePlus;Utilizar el archivo 'FuncionesParcial.js', d&oacute;nde estar&aacute;n todas 
                           las funciones de JAVASCRIPT, JQUERY y JSON.</span>
                          <span style="font-weight:bold">&CirclePlus;Utilizar el archivo 'nexoAdministrador.php' d&oacute;nde serr&aacute;n atendidas 
                            TODAS las llamadas AJAX.</span>
                          <span style="font-weight:bold">&CirclePlus;TODOS los m&eacute;todos DEBEN estar&aacute;n en sus respectivas CLASES .PHP</span>

                    1-(3pts) A partir del archivo <strong>archivos/mascotas.json</strong> se pide mostrar un listado 
                    (utilizando la clase <strong>MostrarJson.php</strong>) con su contenido en <i>&lt;div id="divGrilla"&gt;</i>.
                    2-(4pts) Guardar un objeto <strong><i>Celular</i></strong> con los siguientes datos:
                    Marca, Sistema operativo {Android, IOS, Windows}(desde un <i>&lt;select&gt;</i>) y cantidad de SIM
                    {1 &oacute; 2} (por un <i>&lt;input type="radio"&gt;</i>). Crear una clase .PHP que se autoserialice a JSON.
                    Guardar los celulares en el archivo <strong>celulares.json</strong>.
                    3-(3pts) Crear un <i>&lt;input type="text"&gt;</i> y un <i>&lt;input type="button"&gt;</i> que permitan
                    ELIMINAR una ciudad (del archivo <strong>archivos/ciudades.json</strong>) introduciendo 
                    el ID de la ciudad a eliminar.
                    4-(3pt) Crear un  <i>&lt;input type="file"&gt;</i> y un <i>&lt;input type="button"&gt;</i> que permita
                    SUBIR un archivo al servidor. S&oacute;lo se podr&aacute;n subir archivos con extensi&oacute;n .JSON
                    5-(1pt) Validar TODOS los campos (javascript/jquery) de los puntos anteriores. 
                    No pueden estar vac&iacute;os!!

                    PUNTOS - NOTA
                    8pts----->4
                    9pts----->5
                    10pts----->6
                    11pts----->7
                    12pts----->8
                    13pts----->9
                    14pts----->10

                    TIEMPO PARA RESOLVER EL EXAMEN: 90 MINUTOS
                </pre> 		
            </div>
            <div class="CajaInicio animated bounceInRight" style="width:900px">
                <h1>PRIMER PARCIAL - con archivos, AJAX, JQUERY y JSON - </h1>
                <table>
                    <tbody>
                        <tr>
                            <td width="40%">
                                <div id="divFrm" style="height:220px;overflow:auto;margin-top:10px">
                                    <br/><br/><h2>Mostrar form aqu&iacute;</h2>
                                </div>
                            </td>
                            <td rowspan="2" style="vertical-align:top">
                                <div id="divGrilla" style="height:550px;overflow:auto;border-style:solid;">
                                    <br/><br/><h2>Mostrar grilla aqu&iacute;</h2>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>