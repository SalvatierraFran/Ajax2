<?php$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;switch ($queHago) {    case "mostrarGrilla":        require_once 'clases/MostrarJson.php';                $JsonDeMascotas = MostrarJson::TraerTodosLasMascotas();        echo $JsonDeMascotas;        break;    case "cargarForm":        $form = '<form>                       <input type="text" placeholder="Ingrese MARCA" id="txtMarca" />                    <label >Sistema Operativo:</label>                    <select id="cboSO">                        <option value="android">Android</option>                        <option value="ios">IOS</option>                        <option value="windows">Windows</option>                    </select><br>                    <label >1 SIM:</label><input type="radio" id="rdoSIMUno" name="rdo" checked /><br>                    <label >2 SIM:</label><input type="radio" id="rdoSIMDos" name="rdo" /><br>                    <input type="button" class="MiBotonUTN" onclick="AgregarCelular()" value="Guardar Celular"  />                </form>';                echo $form;                break;    case "cargarFormEliminar":        $form = '<form>                       <input type="text" placeholder="Ingrese ID Ciudad" id="txtIdCiudad" />                    <br>                    <input type="button" class="MiBotonUTN" onclick="EliminarCiudad()" value="Eliminar Ciudad"  />                </form>';                echo $form;                break;    case "agregarCelular":        require_once 'clases/Celular.php';        $retorno["Exito"] = TRUE;        $retorno["Mensaje"] = "Se ha creado el CELULAR";                $obj = isset($_POST['celular']) ? json_decode(json_encode($_POST['celular'])) : NULL;//implementar la clase .php Celular        $cel = new Celular($obj->marca, $obj->so, $obj->cantSIM);        if (!$cel->Agregar()) {            $retorno["Exito"] = FALSE;            $retorno["Mensaje"] = "Lamentablemente ocurrio un error y no se pudo AGREGAR el celular.";        } else {            $retorno["Mensaje"] = "El celular fue agregado CORRECTAMENTE!!!";        }        echo json_encode($retorno);        break;    case "eliminarCiudad":                require_once 'clases/Ciudad.php';        $retorno["Exito"] = TRUE;        $retorno["Mensaje"] = "";                $idMascota = isset($_POST['idAuto']) ? $_POST['idAuto'] : NULL;//implementar la clase .php Ciudad        if (!Ciudad::Eliminar($idMascota)) {            $retorno["Exito"] = FALSE;            $retorno["Mensaje"] = "Lamentablemente ocurrio un error y no se pudo ELIMINAR la ciudad.";        } else {            $retorno["Mensaje"] = "La ciudad fue eliminada CORRECTAMENTE!!!";        }        echo json_encode($retorno);        break;    case "cargarFormSubir":        $form = '<form>                       <input type="file" placeholder="Ingrese ID Mascota" id="subir" />                    <br>                    <input type="button" class="MiBotonUTN" onclick="SubirArchivo()" value="Subir Archivo"  />                </form>';                echo $form;                break;    case "SubirArchivo":        $retorno["Exito"] = TRUE;        $retorno["Mensaje"] = "";                $archivo = isset($_FILES['archivo']) ? $_FILES['archivo'] : NULL;        if ($archivo === NULL)        {             $retorno["Exito"] = FALSE;            $retorno["Mensaje"] = "El archivo no se pudo leer";        }        else        {                    }    default:        echo ":(";}