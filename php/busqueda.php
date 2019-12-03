<?php

require_once("db.php");

$conn = new mysqli($servername, $username, $password, $dbname);

$tabla ="";

$consulta = "SELECT * FROM beat WHERE titulo NOT LIKE '' ORDER BY cod_b LIMIT 0";


if (isset($_POST['beats'])) {

	$palabra = $conn->real_escape_string($_POST['beats']);
	$consulta = "SELECT * FROM beat WHERE
	titulo LIKE '%$palabra%' OR 
	genero LIKE '%$palabra%' OR
	tipo LIKE '%$palabra%'";

}

$consultados = $conn->query($consulta);


if($consultados->num_rows>0){
	echo'<div> 			
	';
	
	while ($row = $consultados->fetch_assoc()) {
		echo '<h6><i>'.$row['titulo'].'
				<div style="display:relative; z-index=-1;">
					<form method="post" action="verbeat.php">
						<input name="beatc" type="hidden" value='.$row['cod_b'].'>
						<button class="btn btn-rounded">VER BEAT
						</button>
					</form>
				</div>
			</i></h6>
			';
	}

	echo '
	</div>';
}else{
	echo"<center><h5>No hemos encontrado nada</h5></center>";
} 


?>