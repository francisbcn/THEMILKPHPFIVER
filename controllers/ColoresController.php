<?php
//require_once 'models/categoria.php';
//require_once 'models/producto.php';

//class categoriaController{
	
	//public function index(){
		//Utils::isAdmin();
		//$categoria = new Categoria();
		//$categorias = $categoria->getAll();
		
	//require_once 'views/categoria/index.php';
	//}
	
	//public function ver(){
		//if(isset($_GET['id'])){
		//	$id = $_GET['id']; -->
			
			// Conseguir categoria
/* 			$categoria = new Categoria();
			$categoria->setId($id);
			$categoria = $categoria->getOne();
			 */
			// Conseguir productos;
	/* 		$producto = new Producto();
			$producto->setCategoria_id($id);
			$productos = $producto->getAllCategory();
		}
		
		require_once 'views/categoria/ver.php';
	}
	
	public function crear(){
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}
	
	public function save(){
		Utils::isAdmin();
	    if(isset($_POST) && isset($_POST['nombre'])){ */
			// Guardar la categoria en bd
/* 			$categoria = new Categoria();
			$categoria->setNombre($_POST['nombre']);
			$save = $categoria->save();
		}
		header("Location:".base_url."categoria/index");
	}
	
} */

require_once 'models/colores.php';
require_once 'models/producto.php';

class colorController{

	
	public function index(){
		Utils::isAdmin();
			$color = new Talla();
		$color_sel = $color->getAll();
		
		require_once 'views/categoria/index.php';
	}
	
	public function ver(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			// Conseguir categoria
			$color = new Color();
			$color->setId($id);
			$color = $color->getOne();
			
			// Conseguir productos;
			$producto = new Producto();
			$producto->setCategoria_id($id);
			$productos = $producto->getAllCategory();
		}
		
		require_once 'views/categoria/ver.php';
	}
	
	public function crear(){
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
	}
	
	public function save(){
		Utils::isAdmin();
	    if(isset($_POST) && isset($_POST['nombre'])){
			// Guardar la categoria en bd
			$color = new Color();
			$color->setNombre($_POST['nombre']);
			$save = $color->save();
		}
		header("Location:".base_url."categoria/index");
	}
	
}