<!doctype html>

<html class="no-js" lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Sintony:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8cb75b282f.js" crossorigin="anonymous"></script>
</head>
<style>
      .bg_header {
          background-color: #C70039 !important;
          font-family: 'Roboto Mono', monospace;
          font-family: 'Sintony', sans-serif;
          font-size: 1.5rem;
      }
      .bg_body {
          position: relative;
          background-color: #3c486b;
          background-image: linear-gradient(119deg, #3c486b 42%, #47b5ff 100%);
          margin: 20px;
          overflow: hidden;
          height: 100vh;
      }
      
      /* Agrega una capa negra transparente solo sobre el body */
      .bg_body::before {
          content: "";
          background: rgba(0, 0, 0, 0.5);
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 1;
      }
      
      /* Añade una regla para los elementos específicos que no deseas afectar (como formularios) */
      .content {
          position: relative;
          z-index: 2;
          padding: 20px;
      }

      .img_login {
        width: 2.5rem;
      }

      /* Añade una regla para los elementos específicos que no deseas afectar (como formularios) */
      * {
          position: relative;
          z-index: 2;
      }

      .titulo_vehiculo {
        color: white;
        font-family: 'Roboto Mono', monospace;
        font-family: 'Sintony', sans-serif;
        font-size: 3.5rem
      }

      .btn_reservar {
        border-radius: 50px; 
        background-color: #47B5FF;
        font-family: 'Roboto Mono', monospace;
        font-family: 'Sintony', sans-serif;
        font-size: 2rem
      }
</style>
<body class="bg_body">
    <header class="p-3 bg-dark text-white bg_header">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-white">Inicio</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Reservar</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Cotizar</a></li>
            </ul>
            <div class="text-end">
              <button type="button" class="btn me-2"><img class="img_login" src= "{{ asset('img/usuario.png') }}"></button>
              {{-- <button type="button" class="btn btn-warning">Sign-up</button> --}}
            </div>
          </div>
        </div>
      </header>
    <div class="content mt-3">
        @yield('content')
    </div> <!-- .content -->
</body>
</html>