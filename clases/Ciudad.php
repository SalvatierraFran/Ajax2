<?php
class Ciudad {

    public static function Eliminar($idCiudad) 
    {
    	if (!file_exists("archivos/ciudades.json"))
    		return false;

    	$archivo = fopen("archivos/ciudades.json", "r");

    	$nuevoArchivo = "";

    	$encontrada = 0;

    	while (!feof($archivo)) 
    	{
    		$ciudad = fgets($archivo);

    		if (substr_count($ciudad, $idCiudad) == 0)
    			$nuevoArchivo .= $ciudad;
    		else
    			$encontrada++;
    	}

    	fclose($archivo);

    	if ($encontrada == 0)
    		return false;

    	$archivo = fopen("archivos/ciudades.json", "w");

    	if (fwrite($archivo, $nuevoArchivo) === false)
    		$resultado = false;
    	else
    		$resultado = true;

    	fclose($archivo);

    	return true;
    }
}
