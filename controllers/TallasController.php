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

require_once 'models/tallas.php';
require_once 'models/producto.php';

class tallaController{

	
	public function index(){
		Utils::isAdmin();
			$talla = new Talla();
		$tallas_sel = $talla->getAll();
		
		require_once 'views/categoria/index.php';
	}
	
	public function ver(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			// Conseguir categoria
			$talla = new Talla();
			$talla->setId($id);
			$talla = $talla->getOne();
			
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
			$talla = new Talla();
			$talla->setNombre($_POST['nombre']);
			$save = $talla->save();
		}
		header("Location:".base_url."categoria/index");
	}
	
}