
<?php
include("include/a_config.php"); //pagina principal, HOME.

session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Admin</title>
  <?php include("include/head-tag-contents.php"); ?>
</head>
<body>

  <form method="post" action="admincrud/login/loginp.php">

    <div class="container">
      <div class="row justify-content-md-center">

        <div class="col col-lg-2">
          
        </div>

        <div class="col-md-auto" style="margin-top: 2em; border: solid 1px blue;">
          <h4>Producer login</h4><hr>

          <div class="form-group">
            <label>Nickname: </label><br>
              <input type="text" class="form-control" name="nickname" required>
              <small id="nickHelp" class="form-text text-muted">We'll never share your dates with anyone else.</small>
          </div>
          
          <div class="form-group">
            <label>Password: </label><br>
              <input type="password" class="form-control" name="passw" required>
              <label></label>    
            <br>
          </div>

          <button id="loginbutton" class="btn btn-primary" type="submit" style="float: right;">Login</button>
        </div>

        <div class="col col-lg-2">
          
        </div>

      </div>
    </div>

  </form>

</body>
</html>

