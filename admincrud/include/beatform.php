<form enctype="multipart/form-data" action="include/guardarbeat.php" method="post">

	<div class="container">
	
		
		<div class="d-flex justify-content-start">
			<p class="campop"> Titulo: <br> <!-- El nombre del usuario con evento on click para informar al usuario de las caracteristicas del campo nombre -->
				<input id="name" type="text" name="titulo"> 
				<label id="" style="color: darkslateblue;"></label>
			</p>
		</div>

		<div class="d-flex justify-content-start">
			<p class="campop"> Genero: <br> <!-- El edad del usuario con evento on click para informar al usuario de las caracteristicas del campo edad --> 
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
				<select name="tipo">
					<option value="Free">Free</option>
					<option value="Leasing">Leasing</option>
					<option value="Exclusive">Eclusive</option>
				</select> 
				<label id="" style="color: darkslateblue;"></label>
			</p>
		</div>

		
		<div class="d-flex justify-content-start">
			<p class="campoi">:* <?php echo $_SESSION["nick"]; ?><!-- El telefono del usuario con evento on click para informar al usuario de las caracteristicas del campo telefono -->
				<input id="tipo" type="hidden" name="productor" value = "<?php echo $_SESSION['codigo']; ?>" > 
				<label id="" style="color: darkslateblue;"></label>
			</p>
		</div>

		<div class="d-flex justify-content-start">
			<p class="campoi"><br> <!-- El telefono del usuario con evento on click para informar al usuario de las caracteristicas del campo telefono -->
				Ubicación <input type="file" name="archivito">

				<label id="" style="color: darkslateblue;"></label>
			</p>
		</div>

	</div>

	<input type="submit" value="Guardar archivo">

</form>