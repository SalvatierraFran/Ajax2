<?php
class Celular {

//agregar atributos necesarios
	private $_marca;
	private $_so;
	private $_cantSIM;
    
    public function __construct($marca, $so, $cantSIM) 
    {
        $this->_marca = $marca;
        $this->_so = $so;
        $this->_cantSIM = $cantSIM;
    }
    
    public function Agregar() {
        //IMPLEMENTAR...
        $archivo = fopen("archivos/celulares.json", "a");

        $cadena = '{"marca":"' . $this->_marca .
        '","so":"' . $this->_so . '","cantSIM":' .
         $this->_cantSIM . '}';

        if (fwrite($archivo, $cadena . "\r\n") === false)
        	$resultado = false;
        else
        	$resultado = true;

        fclose($archivo);

        return $resultado;
    }
}