@extends('layout.loginregister')
@section('content')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form  method="POST" action="{{ url('userRegister') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="ID_Persona" value="9">
                        <input type="hidden" name="ID_Rol" value="9">
                        <input type="hidden" name="Estado" value="1">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="Nombre" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" name="Apellido" class="form-control" placeholder="Apellido">
                        </div>
                        <div class="form-group">
                            <label>Número</label>
                            <input type="text" name="Numero" class="form-control" placeholder="Número">
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" name="Correo" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>DPI/Pasaporte</label>
                            <input type="text" name="Documento" class="form-control" placeholder="Documento">
                        </div>
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" name="Username" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="Contrasena" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-flat m-b-30 m-t-30 btn_vehiculo">Registrar</button>
                        <div class="register-link m-t-15 text-center">
                            <p>¿Ya tienes una cuenta? <a href="{{ url('login') }}"> Iniciar sesión</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection