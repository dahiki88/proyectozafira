<!--login de usuario -->
<div class="modal" id="Login">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Inicio de sesion</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form action="/Controllers/UserController.php" method="POST">
         <div class="modal-body">
       <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Ingresar email" name="email" required>
    </div>
        <div class="mb-3">
        <label for="pwd" class="form-label">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Ingresar contraseña" name="pswd" required>
        </div>
      </div>
    <div class="modal-footer">
       <button type="submit" class="btn btn-primary">Login</button>
     </div>
   </form>
      <!-- Modal body -->

    </div>
  </div>
</div>
   <!--cerrar login de usuario-->