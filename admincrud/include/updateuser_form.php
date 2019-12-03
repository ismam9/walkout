<div class="modal fade" id="modalEditForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

<div class="modal-dialog" role="document">

  <div class="modal-content">

    <div class="modal-header text-center">
      <h4 id="test1" class="modal-title w-100 font-weight-bold">Sign in</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <form method="post" action="include/updateuser.php">
      <div class="modal-body mx-3">

        <br>
        <p class="campop"><i class="text-danger"> Escriba el código del usuario que desea eliminar: </i> <br> <!-- El nombre del usuario con evento on click para informar al usuario de las caracteristicas del campo nombre -->
          <input id="codigo" type="number" name="cod" pattern="([A-Z])\w+"> 
          <label id="e_name" style="color: darkslateblue;"></label>
        </p>

      <div class="d-flex justify-content-start">
        <p class="campop"> Nombre: <br> <!-- El nombre del usuario con evento on click para informar al usuario de las caracteristicas del campo nombre -->
          <input id="name" type="text" name="name" pattern="([A-Z])\w+" onclick="info_name();"> 
          <label id="e_name" style="color: darkslateblue;"></label>
        </p>
      </div>

      <div class="d-flex justify-content-start">
        <p class="campop"> Edad: <br> <!-- El edad del usuario con evento on click para informar al usuario de las caracteristicas del campo edad --> 
          <input id="age" type="number" name="age" maxlength="3" onclick="info_age();">
          <label id="e_age" style="color: darkslateblue;"></label>
        </p>
      </div>

      <div class="d-flex justify-content-start">    
        <p class="campoi"> Email: <br> <!-- El email con evento on click para informar al usuario de las caracteristicas del campo email -->
          <input id="email" type="email" name="email" onclick="info_email();"> 
          <label id="e_email" style="color: darkslateblue;"></label>
        </p>
      </div>

      <div class="d-flex justify-content-start">
        <p class="campoi"> Telefono: <br> <!-- El telefono del usuario con evento on click para informar al usuario de las caracteristicas del campo telefono -->
          <input id="tlf" type="tel" name="telef" maxlength="9" onclick="info_tlf();"> 
          <label id="e_telef" style="color: darkslateblue;"></label>
        </p>
      </div>

      <div class="modal-footer d-flex justify-content-end">
        <p>
          <button id="editbutton" class="btn btn-primary" type="submit">Editar</button>          
        </p>

      </div>
    </form>
  </div>
</div>