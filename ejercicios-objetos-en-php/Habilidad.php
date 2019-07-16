<?php
/*Crear una clase llamada Habilidad. La misma debe tener dos atributos: nombre y
expertise (expertise es un número entre 0 y 5). Definir los atributos como privados.
Definir los getters, setters y constructor de la clase.
*/
/**
 *
 */
class Habilidad
{
  private $nombre;
  private $expertise;

public function setNombre(String $nombre){
  $this->nombre=$nombre;
}
public function getNombre(){
  return $this->nombre;
}
public function setExpertise(Int $expertise){
  $this->expertise=$expertise;

}
public function getExpertise(){
  return $this->expertise;
}



public function __construct($nombre, $expertise){
  $this->setNombre($nombre);
  if ($expertise<=5 || $expertise >=0) {
    $this->setExpertise($expertise);
  }

}


}
