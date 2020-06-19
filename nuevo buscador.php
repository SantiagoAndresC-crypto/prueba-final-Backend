<?php 
class Buscador{

	public $rutaJson;

	function __construct($rutaJson){
		$this->rutaJson = $rutaJson;
	}

	public function datosJson(){
		$data 		= file_get_contents($this->rutaJson);
		$productos 	= json_decode($data, true);

		
		return $productos;
	}
}
?>