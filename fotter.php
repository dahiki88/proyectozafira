<?php include "modals/loginModal.php"?>
<?php include "modals/registerModal.php"?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<footer class="text-white text-center text-lg-start bg-dark">
  <div class="container p-4">

    <div class="row mt-4">

      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
        <h5 class="text-upercase mb-4">
          Eventos Zafira
        </h5>
        <p>
          Debes ser el cambio que quieres que ocurra en la fiesta donde tus sueños se hacen realidad y te permiten 
          disfrutar con los seres que tu amas.
        </p>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
          standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a 
          type specimen book.
        </p>
        <div class="mt-4 redes">
          <a href="http://" type="button" class="btn btn-floating btn-light btn-lg">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="http://" type="button" class="btn btn-floating btn-light btn-lg">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="http://" type="button" class="btn btn-floating btn-light btn-lg">
            <i class="fab fa-google-plus-g"></i>
          </a>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-4 md-mb-0">
        <h5 class="text-upercase mb-4 pb-1">Buscador</h5>
        <div class="form-outline form-white mb-4">
          <input type="text"  id="formControl" class="form-control form-control-lg" placeholder="Buscar"/>
                
        </div>
        <ul class="fa-ul leftNow">
          <li class="mb-3">
            <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Vereda la balsa Chia Cundinamarca</span>
          </li>
          <li class="mb-3">
           <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">eventoszafira@gmail.com</span>
          </li>
          <li class="mb-3">
            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">3166978612</span>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 md-mb-0">
        
        <h5 class="text-upercase mb-4 pb-1">Horarios</h5>
        <table :class="table text-center text-white">
          <tr>
            <tbody class="fw-normal">
              <td>Lunes - viernes</td>
              <td>8am - 5pm</td>
            </tbody>
          </tr>
        
                  
        </table>
    
      </div>
    </div><!-- fin del row - -->
     
          

      
        </div> 
        <div class="text-center p-3 mt-3" style="background:black">
          <i class="fas fa-copyright" >Copyright 2022</i>
        </div>
      </div><!-- fin de encabezado -->
  </footer>
</html>