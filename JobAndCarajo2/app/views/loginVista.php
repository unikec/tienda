 <div class="centrar">	
  <div class="container cuerpo text-center">	
    <p><h2><img class="alineadoTextoImagen" src="../Assets/img/user.png"
     width="50px"/> Login de usuario:</h2></p>
  </div>
  <div class="container">
    <form   method="POST">
      <label for="name">Usuario:
        <input type="text" name="usuario" class="form-control"
         value="<?php if(isset($_COOKIE['usuario'])) { echo $_COOKIE['usuario']; } ?>" /> 
      </label>
      <br/>
      <label for="password">Contraseña:
        <input type="password" name="password" class="form-control"
         value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>"/>            
      </label>
<?php if(isset($login_error)) : ?>
      <div class="alert alert-danger" style="margin-top:5px;">Tu usuario o/y tu contraseña no son correctos, inténtelo de nuevo!! :( </div>
<?php endif; ?>      
      <input type="submit" value="Enviar" name="submit" class="btn btn-success" />
    </form>
  </div>
</div>  