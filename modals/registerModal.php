<!-- registro de usuario-->
<div class="modal" id="Registro">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Registro</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form action="/Controllers/UserController.php" method="POST">
         <div class="modal-body">
         <div class="mb-3 mt-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingresar nombre" name="nombre" required>
    </div>
         <div class="mb-3 mt-3">
        <label for="apellido" class="form-label">Apellido:</label>
        <input type="text" class="form-control" id="apellido" placeholder="Ingresar apellido" name="apellido" required>
    </div>
       <div class="mb-3 mt-3">
        <label for="telefono" class="form-label">Telefono:</label>
        <input type="number" class="form-control" id="telefono" placeholder="Ingresar telefono" name="telefono" required>
    </div>
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
       <button type="submit" class="btn btn-primary">Registro</button>
     </div>
   </form>
      <!-- Modal body -->

    </div>
  </div>
</div>
   <!--cerrar registro de usuario-->