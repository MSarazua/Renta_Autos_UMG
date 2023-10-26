<!doctype html>

<html class="no-js" lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Sintony:wght@700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/8cb75b282f.js" crossorigin="anonymous"></script>
</head>
<style>
    .bg_header {
        background-color: #C70039 !important;
        font-size: 1.5rem;
    }

    /* Añade una regla para los elementos específicos que no deseas afectar (como formularios) */
    .content {
        position: relative;
        padding: 20px;
    }

    .img_login {
        width: 2.5rem;
    }

    /* Añade una regla para los elementos específicos que no deseas afectar (como formularios) */
    * {
        position: relative;
        font-family: 'Roboto Mono', monospace !important;
        font-family: 'Sintony', sans-serif !important;
    }

    .titulo_vehiculo {
        color: black;
        font-size: 3rem;
        text-transform: uppercase;
        font-weight: 700
    }

    .btn_reservar {
        border-radius: 50px;
        background-color: #47B5FF;
        font-size: 2rem
    }

    .homeCar {
        width: 85%;
    }

    #carouselExampleDark>* {
        z-index: 3;
    }

    .card-group-bg-white {
        background-color: #fff;
        /* Color blanco */
        padding: 20px;
        /* Agrega espacio de relleno si es necesario */
    }

    .btn_vehiculo {
        border-radius: 50px;
        background-color: #C70039;
        font-size: 1.5rem;
        min-width: 50%;
        max-width: 100%;
    }

    .card_vehiculos {
        margin-left: 3% !important
    }

    .circle-container {
        border: solid 2px #fff;
        width: 15vw;
        /* Ajusta el ancho según tus necesidades */
        position: relative;
        height: 25vh;
        /* Ajusta la altura según tus necesidades */
    }

    .circle {
        border: solid 2px #C70039;
        width: 200px;
        /* Diámetro del círculo */
        height: 200px;
        /* Diámetro del círculo */
        border-radius: 15%;
        border-top-left-radius: 45%;
        border-top-right-radius: 45%;
        /* Forma de círculo */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        /* Centrar el círculo */
    }

    .circle-image,
    .img1,
    .img2,
    .img3,
    .img4 {

        /* Color del círcurgb(52, 152, 219)imagen */
        z-index: 3;
        /* Capa superior */
        margin-top: -5rem;
        border-radius: 100%;
        /* URL de tu imagen */

        /* Ajusta el tamaño de la imagen */
    }

    .img1 {
        background-image: url('https://media-public.canva.com/MADGybaN6W0/4/screen.jpg');
        background-size: contain;
        background-position: center
    }

    .img2 {
        background-image: url('https://media-public.canva.com/MADGvhL0euM/7/screen.jpg');
        background-size: contain;
        background-position: center
    }

    .img3 {
        background-image: url('https://media-public.canva.com/MADGvugSTuo/7/screen.jpg');
        background-size: contain;
        background-position: center
    }

    .img4 {
        background-image: url('https://media-public.canva.com/MADGyUsMJOE/4/screen.jpg');
        background-size: contain;
        background-position: center
    }

    .circle-text {
        background-color: #C70039;
        /* Color del círculo del texto */
        z-index: 1;

    }


    .boxt>p {
        z-index: 5;
        text-align: center;
        line-height: 100%;
    }

    .boxt {
        color: #fff;
        margin-top: 8rem;
        text-align: center;
        font-size: 1.5rem;
    }

    @media (max-width: 1101px) {
        .circle-container {
            border: solid 2px #fff;
            width: 5vw;
            /* Ajusta el ancho según tus necesidades */
            position: relative;
            height: 15vh;
            /* Ajusta la altura según tus necesidades */
            margin: 3rem;
            margin-bottom: 5rem;
        }

        .circle {
            border: solid 2px #C70039;
            width: 130px;
            /* Diámetro del círculo */
            height: 130px;
            /* Diámetro del círculo */
            border-radius: 15%;
            border-top-left-radius: 45%;
            border-top-right-radius: 45%;
            /* Forma de círculo */
            position: absolute;
            top: 30%;
            left: 30%;
            transform: translate(-50%, -50%);
            /* Centrar el círculo */
        }

        .circle-image,
        .img1,
        .img2,
        .img3,
        .img4 {

            /* Color del círcurgb(52, 152, 219)imagen */
            z-index: 3;
            /* Capa superior */
            margin-top: -5rem;
            border-radius: 100%;
            /* URL de tu imagen */

            /* Ajusta el tamaño de la imagen */
        }

        .img1 {
            background-image: url('https://media-public.canva.com/MADGybaN6W0/4/screen.jpg');
            background-size: cover;
            background-position: center
        }

        .img2 {
            background-image: url('https://media-public.canva.com/MADGvhL0euM/7/screen.jpg');
            background-size: cover;
            background-position: center
        }

        .img3 {
            background-image: url('https://media-public.canva.com/MADGvugSTuo/7/screen.jpg');
            background-size: cover;
            background-position: center
        }

        .img4 {
            background-image: url('https://media-public.canva.com/MADGyUsMJOE/4/screen.jpg');
            background-size: cover;
            background-position: center
        }

        .circle-text {
            background-color: #C70039;
            /* Color del círculo del texto */
            z-index: 1;

        }


        .boxt>p {
            z-index: 5;
            text-align: center;
            line-height: 100%;
        }

        .boxt {
            color: #fff;
            margin-top: 3.5rem;
            text-align: center;
            font-size: 1rem;
        }
    }
</style>

<body class="bg_body">
    <header class="p-3 bg-dark text-white bg_header">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Inicio</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Reservar</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Cotizar</a></li>
                </ul>
                <div class="text-end">
                    <button type="button" class="btn me-2"><img class="img_login"
                            src= "{{ asset('img/usuario.png') }}"></button>
                    {{-- <button type="button" class="btn btn-warning">Sign-up</button> --}}
                </div>
            </div>
        </div>
    </header>
    <div class="content mt-3">
        @yield('content')
    </div> <!-- .content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
