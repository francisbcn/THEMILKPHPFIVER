<?php

class Producto{
	private $id;
	private $categoria_id;
	private $nombre;
	private $descripcion;
	private $descripcion_corta;
	private $precio;
	private $stock;
	private $oferta;
	private $fecha;
	private $imagen;
	private $talla = "";
	private $color = "";
/* 	private $bordado; */


	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	
	function getId() {
		return $this->id;
	}

	function getCategoria_id() {
		return $this->categoria_id;
	}

	function getNombre() {
		return $this->nombre;
	}

	function getDescripcion() {
		return $this->descripcion;
	}
	function getDescripcionCorta() {
		return $this->descripcion_corta;
	}


	function getPrecio() {
		return $this->precio;
	}

	function getStock() {
		return $this->stock;
	}

	function getOferta() {
		return $this->oferta;
	}

	function getFecha() {
		return $this->fecha;
	}

	function getTalla() {
		return $this->talla;
	}


	function getColor() {
		return $this->color;
	}

/* 	function getBordado() {
		return $this->bordado;
	} */

	function getImagen() {
		return $this->imagen;
	}

	function setId($id) {
		$this->id = $id;
	}

	function setCategoria_id($categoria_id) {
		$this->categoria_id = $categoria_id;
	}

	function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	function setDescripcion($descripcion) {
		$this->descripcion = $this->db->real_escape_string($descripcion);
	}

	function setDescripcionCorta($descripcion_corta) {
		$this->descripcion_corta = $this->db->real_escape_string($descripcion_corta);
	}

	function setPrecio($precio) {
		$this->precio = $this->db->real_escape_string($precio);
	}

	function setStock($stock) {
		$this->stock = $this->db->real_escape_string($stock);
	}

	function setOferta($oferta) {
		$this->oferta = $this->db->real_escape_string($oferta);
	}

	function setFecha($fecha) {
		$this->fecha = $fecha;
	}


	function setTalla($talla) {
		$this->talla = $talla;
	}


	function setColor($color) {
		$this->color = $color;
	}

/* 	function setBordado($bordado) {
		$this->bordado = $bordado;
	} */

	function setImagen($imagen) {
		$this->imagen = $imagen;
	}

	public function getAll(){
		$productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC");
		return $productos;
	}
	
	public function getAllCategory(){
		$sql = "SELECT p.*, c.nombre AS 'catnombre' FROM productos p "
				. "INNER JOIN categorias c ON c.id = p.categoria_id "
				. "WHERE p.categoria_id = {$this->getCategoria_id()} "
				. "ORDER BY id DESC";
		$productos = $this->db->query($sql);
		return $productos;
	}
	
	public function getRandom($limit){
		$productos = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT $limit");
		return $productos;
	}
	
	public function getOne(){
		$producto = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()}");
		return $producto->fetch_object();
	}
	

	public function save(){
		$sql = "INSERT INTO productos (categoria_id, nombre, descripcion, descripcion_corta, precio, talla_id, color_id, stock, fecha, imagen) VALUES ({$this->getCategoria_id()}, '{$this->getNombre()}', '{$this->getDescripcion()}', '{$this->getDescripcionCorta()}', {$this->getPrecio()}, {$this->getTalla()}, {$this->getColor()}, {$this->getStock()}, CURDATE(), '{$this->getImagen()}')";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
/* 	public function save(){
		$sql = "INSERT INTO productos VALUES(NULL, {$this->getCategoria_id()}, '{$this->getNombre()}', '{$this->getDescripcion()}', '{$this->getDescripcionCorta()}', {$this->getPrecio()}, {$this->getTalla()}, {$this->getColor()}, {$this->getStock()}, null, CURDATE(), '{$this->getImagen()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	} */
	
	public function edit(){
		$sql = "UPDATE productos SET nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', descripcion_corta='{$this->getDescripcionCorta()}', precio={$this->getPrecio()},  talla_id={$this->getTalla()}, color_id={$this->getColor()}, stock={$this->getStock()}, categoria_id={$this->getCategoria_id()}  ";
		
		if($this->getImagen() != null){
			$sql .= ", imagen='{$this->getImagen()}'";
		}
		
		$sql .= " WHERE id={$this->id};";
		
		
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
	
	public function delete(){
		$sql = "DELETE FROM productos WHERE id={$this->id}";
		$delete = $this->db->query($sql);
		
		$result = false;
		if($delete){
			$result = true;
		}
		return $result;
	}
	
}