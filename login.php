<?php
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>index</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">

    </head>
    <body>
      <!-- contenedor principal-->
        <div class="container py-4">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="darkSwitch" checked>
            <label for="darkSwitch" class="form-check-label">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
              </svg>
            </label>
          </div>
          <div class="row justify-content-center h-100 py=4">
             <!--aqui va una imagen-->
             <!--<img src="" alt="logo" class="rounded mx-auto d-block" style="width:250px">-->
          </div>
        </div>
        <div class="row justify-content-center h-100">
           <div class="col-sm-8 col-md-6 col-lg-6 rounded">
               <div class="row">
                  <div class="col-sm-10 col-md-12 col-lg-12">
                    <!--inicia login-->
                    <form class="needs-validation" novalidate action="index.html" method="post">
                       <div class="input-group mb-3">
                          <span class="input-group-text" id="perfil">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                             <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                             <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                          </svg>
                          </span>
                            <input type="text" name="usuario" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedaby="Usuario" required>
                            <div class="valid-feedback">Usuario Correcto</div>
                            <div class="invalid-feedback">Usuario Incorrecto</div>
                       </div>
                       <div class="input-group mb-3">
                       <span class="input-group-text" id="perfil">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"/>
                                </svg>
                          </span>
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Pass" aria-describedaby="Pass" required>
                            <div class="valid-feedback">Password Correcto</div>
                            <div class="invalid-feedback">Campo Vacio Incorrecto</div>
                       
                       </div>
                       <div class="d-grid gap-2">
                         <button class="btn btn-outilne-primary btn-sm" type="submit"> ingresar </button>
                       </div>
                    </form>
                    <!--fin del login-->
                  </div>
               </div>
           </div>
        </div>
          <div class="container text-center">
             <p class="text-muted py-2"> holaaa </p>
          </div>
        <!--fin de primer contenedor-->
        <!-- inicia script de validacion-->
        <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
        </script>
       <script src="bootstrap.bundle.min.js"></script>
       <script src="bootstrap.min.js"></script>
    </body>
</html>