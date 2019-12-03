<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

<div class="modal-dialog" role="document">

  <div class="modal-content">

    <div class="modal-header text-center">
      <h4 id="test1" class="modal-title w-100 font-weight-bold">Sign in</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <form method="post" action="login/login.php">
      <div class="modal-body mx-3">

        <br>
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email:
          </label>
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" title="email" id="defaultForm-email" name="email" class="form-control validate" required>          
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Password: 
          </label>
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" name="password" class="form-control validate" required>
        </div>
        <i class="text-danger">If you are not register, and you do the register form, you must refresh the site to be able to login !!</i>
      </div>

      <div class="modal-footer d-flex justify-content-end">
        <p>
          <button id="loginbutton" class="btn btn-primary" type="submit">Login</button>          
        </p>
        <p>
          <a href="register_index.php" class="btn btn-outline-secondary">Registro</a>
        </p>
      </div>
    </form>
  </div>
</div>

<!--<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header text-center">
        <h4 id="test1" class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">

          <br>
          <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email:
            </label>
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" title="email" id="defaultForm-email" class="form-control validate">          
          </div>

          <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Password: 
            </label>
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
          </div>
          <i class="text-danger">If you are not register, and you do the register form, you must refresh the site to be able to login !!</i>

          <br>
          <br>
          <div class="md-form-class" style="display:none;">
            <label data-error="wrong" data-success="right" for="defaultForm-pass"><i class="fas fa-lock prefix grey-text"> Re-enter your password: </i>
            </label>
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass2" class="form-control validate">
          </div>
         
          <br>
          <div class="md-form-class" style="display:none;">
            <label data-error="wrong" data-success="right" for="defaultForm-pass"><i class="fas fa-lock prefix grey-text">Your user name: </i>
            </label>
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass-username" class="form-control validate">
          </div>

          <br>
          <div class="md-form-class" style="display:none;">
            <label data-error="wrong" data-success="right" for="defaultForm-pass"><i class="fas fa-lock prefix grey-text">Your phone:</i>
            </label>
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass-username" class="form-control validate">
          </div>

          <br>
          <div class="md-form-class" style="display:none;">
            <hr>
            <button type="submit" id="registersubmit" class="btn btn-success">Submit register</button>          
          </div>

          </div>      

            <div class="modal-footer d-flex justify-content-end">
            <p>
              <button id="loginbutton" class="btn btn-primary">Login</button>          
            </p>
            <p>
              <button type="submit" id="registerbutton" class="btn btn-secundary">Registrar</button>

            </p>
        </form>

      </div>

    </div>

  </div>


</div>



