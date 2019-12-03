<div class="container">
	<fieldset>
		<legend>Datos Personales</legend>

		<input id="email" type="hidden" name="email_t" pattern="([A-Z])\w+" onclick="info_name();" <?php echo 'value = ' . $_SESSION['email_u']; ?>> 

		<div class="d-flex justify-content-start">
			<p class="campop"> Nombre: <br> <!-- El nombre del usuario con evento on click para informar al usuario de las caracteristicas del campo nombre -->
				<input id="name" type="text" name="name" pattern="([A-Z])\w+" onclick="info_name();" <?php echo 'value = ' . $_SESSION['user']; ?>> 
				<label id="e_name" style="color: darkslateblue;"></label>
			</p>
		</div>

		<div class="d-flex justify-content-start">
			<p class="campop"> Edad: <br> <!-- El edad del usuario con evento on click para informar al usuario de las caracteristicas del campo edad --> 
				<input id="age" type="number" name="age" maxlength="3" onclick="info_age();" <?php echo 'value = ' . $_SESSION['edad']; ?> >
				<label id="e_age" style="color: darkslateblue;"></label>
			</p>
		</div>

	
					
		<div>
			<legend>Datos de interes</legend>

			<div class="d-flex justify-content-start">		
				<p class="campoi"> Email: <br> <!-- El email con evento on click para informar al usuario de las caracteristicas del campo email -->
					<input id="email" type="email" name="email" onclick="info_email();" <?php echo 'value = ' . $_SESSION['email_u']; ?>> 
					<label id="e_email" style="color: darkslateblue;"></label>
				</p>
			</div>

			<div class="d-flex justify-content-start">
				<p class="campoi"> Repetir Email: <br> <!-- repetir el emil con evento on click para informar al usuario de las caracteristicas del campo email -->
					<input id="r_email" type="email" name="email_p" onclick="info_rmail();"> 
					<label id="er_email" style="color: darkslateblue;"></label>
				</p>
			</div>

			<div class="d-flex justify-content-start">
				<p class="campoi"> Password: <br> <!-- El password del usuario con evento on click para informar al usuario de las caracteristicas del campo password -->
					<input id="passw" type="password" name="password" maxlength="15" onclick="info_password()" <?php echo 'value = ' . $_SESSION['password']; ?>>
					<label id="e_passw" style="color: darkslateblue;"></label>
				</p>
			</div>

			<div class="d-flex justify-content-start">
				<p class="campoi"> Repetir password: <br> <!-- El password del usuario con evento on click para informar al usuario de las caracteristicas del campo password -->
					<input id="passw2" type="password" name="password2" maxlength="15" onclick="info_passw()">
					<label id="er_passw" style="color: darkslateblue;"></label>
				</p>
			</div>

			<div class="d-flex justify-content-start">
				<p class="campoi"> Telefono: <br> <!-- El telefono del usuario con evento on click para informar al usuario de las caracteristicas del campo telefono -->
					<input id="tlf" type="tel" name="telef" maxlength="9" onclick="info_tlf();" <?php echo 'value = ' . $_SESSION['telefono']; ?>> 
					<label id="e_telef" style="color: darkslateblue;"></label>
				</p>
			</div>
		</div>
</div>


<label id="errors"></label>