<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
	        <th>No</th>
			<th>Código</th>
			<th>Nombre</th>
	        <th>Email</th>
        	<th>Edad</th>
			<th>Teléfono</th>
		</tr>

		<?php 
		session_start();
		 
		require_once("../php/db.php");


		$consulta = "SELECT * FROM user ORDER BY cod_user ASC";
		$result = $conn->query($consulta);

		if($result->num_rows >= 0){
			$conn->error;
		    while($row = $result->fetch_assoc()){

				echo '
					<tr>
						<td>'.$no.'</td>
						<td>'.$row['cod_user'].'</td>
						<td><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['name'].'</a></td>
                        <td>'.$row['email_u'].'</td>
                        <td>'.$row['edad'].'</td>
						<td>'.$row['telef'].'</td>
						<td>';
						
					echo '
						</td>

						<td>
							<label>
			                    <form action="include/deleteuser.php" method="post">
			                        <input onclick="return confirm(\'Esta seguro de borrar los datos '.$row['name'].'?\')" 
			                        	class="btn btn-danger btn-sm"
			                        	type="submit" 
			                        	name="deleteu" value="'.$row['cod_user'].'">
			                    </form>
	                    	</label>

						</td>
						<td>
							<div class="text-center" id="edit">
							  	<a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalEditForm">Editar</a>
							</div>';

							include("updateuser_form.php"); 
							
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
