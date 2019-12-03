<?php

require_once("php/db.php");


$consulta = "SELECT * FROM producer";
$result = $conn->query($consulta);


if ($result->num_rows >= 0) {
	while ($row = $result->fetch_assoc()){
		echo '
			<div class="container-fluid" id="body-cover">

				<div class="container">

				  	<div class="row">

					    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					    	<div class="card">
					      		<div class="card-body text-center">
					      			<p style="float: right";> '.$row['highlight'].'</p>
					      			<p>
					      				<img class="img-fluid" src="include/images/iwasaura.jpg" alt="card image">
					      			</p>
									<h4 class="card-title"><strong><i>'.$row['nickname'].'</i></strong></h4>
			                        <p class="card-text">'.$row['about'].'</p>
			                        <a href="productor.php" class="btn btn-primary btn-sm"><i class="fa fa-plus">Ver perfil</i></a>
								</div>                   
			                    
					      	</div>
					    </div>
					    <br>
					    <br>

				  	</div>

				</div>
			</div>

		';
	}
}

?>



