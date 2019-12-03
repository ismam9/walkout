<div class="modal fade" id="modalEditForm2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

	<div class="modal-dialog" role="document">

	  	<div class="modal-content">

		    <div class="modal-header text-center">
		      <h4 id="test1" class="modal-title w-100 font-weight-bold">Sign in</h4>
		      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		      </button>
		    </div>

			<form enctype="multipart/form-data" action="include/updatebeat.php" method="post">

				<div class="container">

					<p class="campop"><i class="text-danger"> Escriba el código del beat que desea editar: </i> <br> <!-- El nombre del usuario con evento on click para informar al usuario de las caracteristicas del campo nombre -->
			          	<input id="codigo" type="number" name="cod_b" pattern="([A-Z])\w+"> 
			          	<label id="e_name" style="color: darkslateblue;"></label>
			        </p>
				

					<div class="d-flex justify-content-start">
						<p class="campop"> Titulo: <br> <!-- El nombre del usuario con evento on click para informar al usuario de las caracteristicas del campo nombre -->
							<input id="name" type="text" name="titulo"> 
							<label id="" style="color: darkslateblue;"></label>
						</p>
					</div>

					<div class="d-flex justify-content-start">
						<p class="campop"> Género: <br> <!-- El edad del usuario con evento on click para informar al usuario de las caracteristicas del campo edad --> 
							<input id="age" type="text" name="genero">
							<label id="" style="color: darkslateblue;"></label>
						</p>					
					</div>

					<div class="d-flex justify-content-start">		
						<p class="campoi"> Precio: <br> <!-- El email con evento on click para informar al usuario de las caracteristicas del campo email -->
							<input id="price" type="number" name="precio"> 
							<label id="" style="color: darkslateblue;"></label>
						</p>
					</div>

					<div class="d-flex justify-content-start">
						<p class="campoi"> Tipo: <br> <!-- repetir el emil con evento on click para informar al usuario de las caracteristicas del campo email -->
							<input id="tipo" type="text" name="tipo"> 
							<label id="" style="color: darkslateblue;"></label>
						</p>
					</div>

						
					<div class="d-flex justify-content-start">
						<p class="campoi"> Productor: <br> <!-- El telefono del usuario con evento on click para informar al usuario de las caracteristicas del campo telefono -->
							<input id="tipo" type="text" name="productor"> 
							<label id="" style="color: darkslateblue;"></label>
						</p>
					</div>

					<div class="d-flex justify-content-start">
						<p class="campoi"><br> <!-- El telefono del usuario con evento on click para informar al usuario de las caracteristicas del campo telefono -->
							Ubicación <input type="file" name="archivito">

							<label id="" style="color: darkslateblue;"></label>
						</p>
					</div>

					<input class="btn btn-success btn-rounded" type="submit" value="Guardar archivo" style="float: right;">
				</div>

			</form>
		</div>
	</div>
</div>