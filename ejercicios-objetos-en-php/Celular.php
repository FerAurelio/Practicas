<?php /*. Crear en un archivo nuevo una clase llamada Celular. La misma debe tener cuatro
atributos: marca, modelo, proveedor de línea y número telefónico. Definir los
atributos como privados. Definir los getters, setters y constructor de la clase.
*/
class Celular
{
private $marca;
private $modelo;
private $proveedorLinea;
private $numeroTelefono;

public function __construct(String $marca, String $modelo, String $proveedorLinea, Int $numeroTelefono){
$this->setMarca($marca);
$this->setModelo($modelo);
$this->setProveedorLinea($proveedorLinea);
$this->setNumeroTelefono($numeroTelefono);
}

public function setMarca(String $marca){
  $this->marca=$marca;
}

public function getMarca(){
return $this->marca;


}public function setModelo(String $modelo){
  $this->modelo=$modelo;
}

public function getModelo(){
return $this->modelo;
}

public function setProveedorLinea(String $proveedorLinea){
  $this->proveedorLinea=$proveedorLinea;
}

public function getProveedorLinea(){
return $this->proveedorLinea;
}

public function setNumeroTelefono(Int $numeroTelefono){
  $this->numeroTelefono=$numeroTelefono;
}

public function getNumeroTelefono(){
return $this->numeroTelefono;
}

}
