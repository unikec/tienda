<?php
/**
 * VISTA DE LOGIN
 */
?>
<div class="container ">
<h2 class='text-center'><img class="" src="../Assets/img/user.png"
     width="50px"/> Login de usuario:</h2>

  <form class="form-horizontal" method="POST">
      <div class="form-group row">

        <label class="control-label col-sm-2" for="name">Usuario:</label>

        <div class="col-sm-10">
          <input type="text" class="form-control" id="usuario" name='usuario' placeholder="Enter nick" value="<?php if (isset($_COOKIE['usuario'])) {echo $_COOKIE['usuario'];}?>" >
        </div>
      </div>

      <div class="form-group row">

        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name='password' placeholder="Enter password" value="<?php if (isset($_COOKIE['password'])) {echo $_COOKIE['password'];}?>"/>       </div>
        </div>

        <?php if (isset($login_error)): ?>
          <div class="alert alert-danger" style="margin-top:5px;">Tu usuario o/y tu contraseña no son correctos, inténtelo de nuevo!! :( 
          </div>
        <?php endif;?>
        <div class="form-group row">
          <div class="col-sm-offset-2 col-sm-12">
            <input type="submit" value="Enviar" name="submit" class="btn btn-success btn-lg btn-block" />
          </div>
        </div>
  </form>
</div>