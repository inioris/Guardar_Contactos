<?php 
	/**
	* 
	*/
	class Productos{
		 
		protected $nombre_producto;
		protected $precio;
		protected $descripcion;
		protected $fecha;

		function select()
		{
			include "../../Base_Datos/conexion.php";
			$conexion->query("SELECT * FROM Productos");
		}
		//funcion para la creacion de Procuctos
		function create($nombrep,$preciop,$descripcionp){
			include "../../Base_Datos/conexion.php";
			$conexion;
			$this->nombre_producto = $nombrep;
			$this->precio = $preciop;
			$this->descripcion = $descripcionp;
			$hola = new DateTime(); 
			$this->fecha = $hola->format('Y-m-d H:i:s');

			$conexion->query("INSERT INTO Productos(nombre_producto,precio,descripcion,fecha)VALUES('$this->nombre_producto','$this->precio','$this->descripcion','$this->fecha')");
		}
		//funcion para la actualizacion de Procuctos
		function update($id){
			//
		}
		//funcion para la eliminacion de Productos
		function eliminar(){
			//
		}

	}


?>
