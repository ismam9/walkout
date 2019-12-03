<form enctype="multipart/form-data" action="include/guardarpista.php" method="post">

	<div class="container">

		<div class="d-flex justify-content-start">
			<p class="campoi">Código del Beat: <br> <!-- El telefono del usuario con evento on click para informar al usuario de las caracteristicas del campo telefono -->
				<input id="tipo" type="text" name="beat"> 
				<label id="" style="color: darkslateblue;"></label>
			</p>
		</div>

		<div class="d-flex justify-content-start">
			<p class="campoi"><br> <!-- El telefono del usuario con evento on click para informar al usuario de las caracteristicas del campo telefono -->
				Ubicación <input type="file" name="pistita">

				<label id="" style="color: darkslateblue;"></label>
			</p>
		</div>

		<input class="btn btn-success btn-rounded" type="submit" value="Guardar archivo">

	</div>

</form>