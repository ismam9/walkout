<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
	        <th>No</th>
			<th>Código</th>
			<th>Titulo</th>
	        <th>Genero</th>
        	<th>Precio</th>
			<th>Tipo</th>
			<th>Productor</th>
			<th>Archivo</th>
			<th>Cabron</th>
		</tr>

		<?php 
		session_start();
		 
		require_once("../php/db.php");

		$productor = $_SESSION['nick'];

		$consulta = "SELECT * FROM beat b, producer p
					WHERE b.producer = p.cod_p 

					AND nickname = '$productor' ORDER BY cod_b ASC";

		$result = $conn->query($consulta);

		if($result->num_rows >= 0){
			

		    while($row = $result->fetch_assoc()){

				echo '
					<tr>
						<td>
							<form method="post" action="include/publicar.php">
								<input type="hidden" name="codigo" value="'.$row['cod_b'].'">
								</input>
								<input type="hidden" name="public" value="'.$row['cod_p'].'">
								</input>
								<button class="btn btn-warning" type="submit" href="#">Publicar
								</button>
							</form>
						</td>
						<td>'.$row['cod_b'].'</td>
						<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['titulo'].'</a></td>
                        <td>'.$row['genero'].'</td>
                        <td>'.$row['precio'].'</td>
						<td>'.$row['tipo'].'</td>
						<td>'.$row['producer'].'</td>
						<td>'.$row['archivo'].'</td>';
						
					echo  '
						</td>

						<td>
							<label>
			                    <form action="include/deletebeat.php" method="post">
			                        <input onclick="return confirm(\'Esta seguro de borrar los datos '.$_SESSION['nick'].'?\')" 
			                        	class="btn btn-danger btn-sm"
			                        	type="submit" 
			                        	name="deleteb" value="'.$row['cod_b'].'">
			                    </form>
	                    	</label>

						</td>
						<td>
							<div class="text-center" id="edit">
							  	<a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalEditForm2">Editar beat</a>
							</div>';

							include("updatebeat_form.php"); 
							
						echo '	
						</td>
						
					</tr>
					';
					$no++;
    		
		    	
		   	}
		}

		?>
	</table>
</div>
