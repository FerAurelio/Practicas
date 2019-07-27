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
private $id;

public function __construct(String $nombre, String $mail,String $contrasenia, Celular $celular, $habilidades = null, $id = 0){
$this->setnombre($nombre);
$this->setMail( $mail);
$this->setContrasenia ( $contrasenia);
$this->setCelular($celular);
if ($habilidades) {
$this->setHabilidades($habilidad);
}
if ($id) {
$this->setId($id);
}
}

public function setId(String $id){
  $this->id=$id;
}

public function getId(){
return $this->id;
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


public function sabeHacer(string $habilidad, int $puntaje){
     foreach ($this->getHabilidades() as $nombre => $unaHabilidad) {
       if( $habilidad == $unaHabilidad->getNombre() && $puntaje<$unaHabilidad->getExpertise()){
         echo true;
       } else {
         echo false;
       }
     }return;
   }




/*Agregarle al usuario el método guardar. Para esto:
a. Queda a criterio del alumno en qué soporte almacenar la información del
Usuario
b. Si el usuario no tiene id, esto significa que el usuario es nuevo y debería
hacerse una inserción
c. Si el usuario ya tiene id asignado debe realizarse un update
26. Generar una función que retorne todos los usuarios almacenados. Esta función no
debe retornar arrays sino objetos Usuario. Tener cuidado con que estos objetos
usuarios tengan su id correspondiente y no volver a encriptar la contraseña
27. Agregarle al usuario el método eliminar que lo elimine de la base de datos en caso
de ya tener id asignado.*/

public function guardar(){
  $todosLosUsuarios=json_decode(file_get_contents('data/users.json'), true);
  if ($this->getId()==0) {
  $this->getId()+1;
  $listaUsuarios[]=$this;
  file_put_contents('data/users.json', json_encode($listaUsuarios, JSON_PRETTY_PRINT));
}else{
  $listaUsuarios[]=$this;
  file_put_contents('data/users.json', json_encode($listaUsuarios, JSON_PRETTY_PRINT));
}
}
}
