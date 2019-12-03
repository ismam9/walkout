<?php  //creacion de tablas y llaves primaris y foraneas necesarias


require_once("../db.php");

//
$dbname = "walkout";

$sql = "DROP DATABASE IF EXISTS $dbname;";

if (mysqli_query($conn, $sql)) {
    echo "la base de datos $dbanme que existia ha sido eliminada,";
    
}

/*****************************************
************CREACION DE BASE DE DATOS*****
*****************************************/


$sql = "CREATE DATABASE IF NOT EXISTS $dbname 
		CHARACTER SET utf8
		COLLATE utf8_unicode_ci;";

if (mysqli_query($conn, $sql)) {
    echo "\nDatabase: $dbname creado con exito ";
} else {
    die ("Error creating database: " . mysqli_error($conn));
}


mysqli_select_db($conn, $dbname);


/*****************************************
************CREACION DE TABLAS*****
*****************************************/
/*
$dbtable_registrado = "register";*/
$dbtable_user = "user";
$dbtable_producer = "producer";
$dbtable_beat = "beat";
$dbtable_pistas = "pistas";

$dbtable_publica = "publicacion";
$dbtable_comprar = "comprar";


/*
$sql = "CREATE TABLE IF NOT EXISTS $dbtable_registrado(
		email varchar(20) NOT NULL, 
		password varchar(20) NOT NULL,
		rol varchar(50) NOT NULL,
		PRIMARY KEY(email)
		);"; 

if ($conn->query($sql)) {
    echo true; // "La tabla $dbtable_users ha sido creada con exito";
}else{
	echo ("Error creating table: " . $conn->error);
}
*/
$sql = "CREATE TABLE IF NOT EXISTS $dbtable_user(
		cod_user int(20) NOT NULL AUTO_INCREMENT,
		name varchar(20) NOT NULL,
		email_u varchar(20) NOT NULL,
		edad int(3) NOT NULL,
		passw varchar(255) NOT NULL,
		telef int(15),
		rol varchar (15) NOT NULL DEFAULT 'user',
		PRIMARY KEY(cod_user)
		);"; 

if ($conn->query($sql) === TRUE) {
    echo true; // "La tabla $dbtable_sub ha sido creada con exito";
}else{
	echo false; //("Error creating table: " . $conn->error);
}

$sql = "CREATE TABLE IF NOT EXISTS $dbtable_producer(

		cod_p int(20) NOT NULL AUTO_INCREMENT,
		nickname varchar(20) NOT NULL,
		name varchar(20) NOT NULL,
		secname varchar(20) NOT NULL,
		email_p varchar(20) NOT NULL,
		passw varchar(255) NOT NULL,
		ciudad varchar(20) NOT NULL,
		highlight varchar(20) NOT NULL,
		telef int (15),
		about varchar (255),
		rol varchar (15) NOT NULL DEFAULT 'prod',
		PRIMARY KEY(cod_p)
		);"; 

if ($conn->query($sql) === TRUE) {
    echo true; // "La tabla $dbtable_sub ha sido creada con exito";
}else{
	echo false; //("Error creating table: " . $conn->error);
}


$sql = "CREATE TABLE IF NOT EXISTS $dbtable_beat(
		cod_b int(20) NOT NULL AUTO_INCREMENT,
		titulo varchar(30) NOT NULL,
		genero varchar(20) NOT NULL,
		precio int(20) NOT NULL,
		tipo varchar(20) NOT NULL,
		producer int(20) NOT NULL,
		archivo mediumblob,
		PRIMARY KEY(cod_b)
		);"; 

if ($conn->query($sql) === TRUE) {
    echo true; // "La tabla $dbtable_categ ha sido creada con exito";
}else{
	echo false; //("Error creating table: " . $conn->error);
}


$sql = "CREATE TABLE IF NOT EXISTS $dbtable_pistas(
		cod_p int(30) NOT NULL AUTO_INCREMENT, 
		cod_b int(20) NOT NULL,
		archivo_p mediumblob,		

		PRIMARY KEY(cod_p)
		);"; 

if ($conn->query($sql) === TRUE) {
    echo true; // "La tabla $dbtable_image ha sido creada con exito";
}else{
	echo ("Error creating table: " . $conn->error);
}


$sql = "CREATE TABLE IF NOT EXISTS $dbtable_publica(
		
		cod_b int(20) NOT NULL,
		nickname varchar(20) NOT NULL,
		fecha_p TIMESTAMP
		);"; 

if ($conn->query($sql)) {
    echo true; // "La tabla $dbtable_users ha sido creada con exito";
}else{
	echo ("Error creating table: " . $conn->error);
}


$sql = "CREATE TABLE IF NOT EXISTS $dbtable_comprar(
		
		cod_user int(20) NOT NULL,
		cod_b varchar(20) NOT NULL,
		fecha_c TIMESTAMP
		);"; 

if ($conn->query($sql)) {
    echo true; // "La tabla $dbtable_users ha sido creada con exito";
}else{
	echo false; //("Error creating table: " . $conn->error);
}


/*************FOREIGN KEY FROM EXPERIENCIA***************************
*******************VIA ALTER TABLE*****************************	
*/
/*
$sql = "ALTER TABLE $dbtable_user
		ADD FOREIGN KEY (email_u) REFERENCES $dbtable_registrado(email)
		;";

if ($conn->query($sql) === TRUE) {
    echo "La tabla $dbtable_user ha sido MODIFICADA CON EXITO";
}else{
	die("Error MODIFYING table: " . $conn->error);
}
*/
$sql = "ALTER TABLE $dbtable_beat
		ADD FOREIGN KEY (producer) REFERENCES $dbtable_producer(cod_p)
		;";

if ($conn->query($sql) === TRUE) {
    echo "La tabla $dbtable_expe ha sido MODIFICADA CON EXITO";
}else{
	die("Error MODIFYING table: " . $conn->error);
}
/*
$sql = "ALTER TABLE $dbtable_expe
		ADD FOREIGN KEY (tipo_sub) REFERENCES $dbtable_sub(tipo_sub)
		;";

if ($conn->query($sql) === TRUE) {
    echo "La tabla $dbtable_expe ha sido MODIFICADA CON EXITO";
}else{
	die("Error MODIFYING table: " . $conn->error);
}
*/

?>