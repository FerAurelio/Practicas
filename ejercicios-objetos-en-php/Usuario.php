<?php

/*
 Crear un archivo usuario.php en donde definiremos la clase “Usuario”
 */

 /*A la Clase usuario pongamosle 3 atributos (nombre, mail y contraseña)
*/
class Usuario
{
private $nombre;
private $mail;
private $contrasenia;
private $celular;
private $habilidades;

public function __construct(String $nombre, String $mail,String $contrasenia, Celular $celular){
$this->setnombre($nombre);
$this->setMail( $mail);
$this->setContrasenia ( $contrasenia);
$this->setCelular($celular);
if ($habilidad) {
$this->setHabilidades($habilidad);
}
}

public function setNombre(String $nombre){
  $this->nombre=$nombre;
}

public function getNombre(){
return $this->nombre;
}

public function setMail(String $mail){
  $this->mail=$mail;
}

public function getMail(){
  return $this->mail;
}


/*2. Agregaremos el método privado encriptarPass que dado un string devuelve su
versión hasheada.
*/

private function encriptarPass($pass){
return password_hash($pass, PASSWORD_DEFAULT);
}

public function setContrasenia(String $contrasenia){
  $this->contrasenia=$this->encriptarPass($contrasenia);
}

public function getContrasenia(){
  return $this->contrasenia;
}

public function saludar(){
  return "Hola " . $this->getNombre();
}

public function setCelular(Celular $celular){
  $this->celular=$celular;
}

public function getCelular(){
  return $this->celular;
}
/*. Agregar en usuario.php el método mostrarTelefono. El método debe retornar un
string con una descripción del teléfono incluyendo marca y modelo. Si la marca del
teléfono es Apple debe agregarse al final del string el texto “ y soy fan de los
iphones”.*/

public function mostrarTelefono(){
  $marca = $this->celular->getMarca();

  if ($marca == "Apple"){
  return "Tengo un celular Marca " . $this->celular->getMarca() . " y modelo " .  $this->celular->getModelo() . " y soy fan de los iphones.";
}else{
    return "Tengo un celular Marca " . $this->celular->getMarca() . " y modelo " . $this->celular->getModelo() . ".";
}
  }
/*19. Agregar en usuario.php el método llamar. El mismo debe recibir un Usuario y el
tiempo de duración de la llamada. La función debe retornar el costo de la llamada. Si
ambos usuarios cuentan con el mismo proveedor de línea, la llamada es gratis. Si
esto no es así la llamada cuesta $10 por minuto*/


public function llamar(Usuario $usuario, Int $duracion){
$compania=$usuario->celular->getProveedorLinea();
$compania2=$this->celular->getProveedorLinea();

if ($compania==$compania2) {
  return "La llamada es gratuita.";
}else{
  return "La llamada cuesta $" . $duracion * 10 . ".-";
}
}

public function setHabilidades(Habilidad $habilidad){
 $this->habilidades[]=$habilidad;
}


public function getHabilidades() {
   return $this->habilidades;
}







/*23. Agregar en la clase Usuario el método sabeHacer la misma recibe un string y un
puntaje. La función devuelve verdadero únicamente si el string recibido es el nombre
de una de las habilidades del usuario y si el puntaje es menor al expertise del
usuario en esa habilidad. En caso contrario, retorna falso.*/
public function sabeHacer(String $habilidad, Int $puntaje){
  $habilidadUsuario=$this->habilidades->getNombre();
  $puntajeUsuario=$this->habilidades->getExpertise();
  if ($habilidad ==  $habilidadUsuario && $puntaje < $puntajeUsuario) {
    true;
  }else{
    false;
  }
}


}
