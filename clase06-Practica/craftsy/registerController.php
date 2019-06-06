<?php /*nombre, email, contraseña, pais, terminos*/
/*creo funcion para validar registro*/

function registerValidate(){

/*array de errores vacio*/
$errors=[];

/*guardo lo q viene por $_POST*/
$name = trim($_POST['nombre']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$country = $_POST['pais'];
$tyc = $_POST['tyc'];
$imgProfile=$_FILES["imgProfile"];

if (empty($name)) {
 $errors["inName"]= "Este campo no puede estar vacío";
}

if (empty($email) ) {
 $errors["inEmail"]= "Este campo no puede estar vacío";
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) ){
 $errors["inEmail"]= "Debe ingresar un email válido";
} elseif(emailExist($email) ){
  $errors["inEmail"]= "Este email se encuentra registrado";
}

if (empty($password)) {
$errors["inPassword"]="Debe escribir una contraseña";
} elseif ($password<6) {
$errors["inPassword"]="La contraseña debe tener al menos 6 caracteres";
}

if (empty($country)) {
$errors["inCountry"]="Debes seleccionar un pais";
}

if (empty($tyc)) {
  $errors["intyc"]="Debes aceptar los términos y condiciones";
}

if ($imgProfile["error"]!=0) {
  $errors["inImgProfile"]="Sube una imagen para tu perfil!";
}


return $errors;

}

function getAllUsers(){
  return json_decode(file_get_contents("data/usersJSON.json"),true);
}

function saveUser(){
  $usersAll= getAllUsers();
/*hashear pass*/
$_POST["password"]=password_hash($_POST["password"], PASSWORD_DEFAULT);
  $userAll[]=$_POST;
  file_put_contents("data/usersJSON.json", json_encode($userAll));
  }


function emailExist($email){
  $userAll= getAllUsers();
  foreach ($userAll as $oneUser) {
    if ($oneUser["email"]== $email) {
    return true;
    }
  }

function saveImage(){
/* saco la extension*/
$ext= pathinfo($_FILES["imgProfile"]["name"],PATHINFO_EXTENSION);
/* digo a donde lo guardo*/
$finalFile= "data/imgUser/" . uniqid( $id . "image-") . ".". $ext;
/*subo el archivo a su destino final*/
move_uploaded_file($_FILES["imgProfile"]["tmp_name"], $finalFile);

return $finalFile;


}




}


?>
