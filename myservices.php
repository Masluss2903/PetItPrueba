<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <script src="./js/all.js"></script>
    <script src="https://kit.fontawesome.com/6be6db9500.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
    <script src="./js/admin.js"> </script>



    <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="shortcut icon" href="./assets/icono-petit.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Mis servicios</title>
  </head>
  <body>
    <header>
      <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <a href="./index.html"><img class="tamanochico" id = "icono" src="./assets/SVG/logo-petit.svg" alt="icono"></a>
              </div>
              <div class="col">
                <div class="btn-group float-right">
                  <div class="align-middle">
                    <img id="imgowner"class="img_menu rounded-circle" src="" alt="">
                  </div>
                  <button  id = "menusuario" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Nombre
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <button class="dropdown-item" type="button"><i class="fas fa-user-edit"></i>Editar Perfil </button>
                      <button onclick="window.location.href ='/index.html'" class="dropdown-item" type="button"><i class="fas fa-sign-out-alt exit"></i>Cerrar Sesión</button>
                  </div>
                </div>
              </div>
            </div>
            <div id="mitableroid" class="row purple">
              <div class="col">
                <h1 class="margin-left mitablero">Mi tablero</h1>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>

    <body>
      
      <div class="form-group row">
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Rehabilitación
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Ortopedia
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="" disabled>Dermatología
          </label>
        </div>  
      </div>

      <div class="form-group row">
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Cardiología (electrocardiografía y ecocardiografía)
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Rayos X (radiología digital)
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="" disabled>Electrocirugía
          </label>
        </div>  
      </div>
  

      
    </body>

    <?php include "./footer.html" ?>