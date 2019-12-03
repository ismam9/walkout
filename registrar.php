<?php  

require_once("php/db.php");


$name = $_POST["name"];
$edad = $_POST["age"];
$email = $_POST["email_p"];

$telefono = $_POST["telef"];


$passw = MD5($_POST["password2"]);

$nombre = filter_var($name, FILTER_SANITIZE_STRING);
$edads = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);
$emails = filter_var($email, FILTER_SANITIZE_EMAIL);
$telefonos = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);



$conn = new mysqli($servername, $username, $password, $dbname);


$insert = "INSERT INTO user(name, email_u, edad, passw, telef) VALUES (\"$nombre\", \"$emails\", \"$edads\", \"$passw\", $telefonos)";


  
if ($conn->query($insert) === TRUE) {   
	header ('Location: index.php');
}else{
  	header ('Location: register_index.php');
}
  
  /*
  if ($conn->query($insert)) {
    header ('Location: login.php');

  }else {
    header ('Location: ../formularioregistro.php');

  }*/


?>

