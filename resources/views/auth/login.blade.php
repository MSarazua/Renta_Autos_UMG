@extends('layout.loginregister')
@section('content')

<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <form method="POST" action="{{ url('userLogin') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Usuario</label>
                        <input name="user" type="text" class="form-control" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    {{-- <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                        <label class="pull-right">
                            <a href="#">Forgotten Password?</a>
                        </label>
                    </div> --}}
                    <button type="submit" class="btn btn_vehiculo btn-flat m-b-30 m-t-30">Iniciar sesión  
                        <img style="width: 2rem" src= "{{ asset('img/flecha.png') }}">
                    </button>
                    <div class="register-link m-t-15 text-center">
                        <p>¿No tienes una cuenta? <a href="{{ url('register') }}">Regístrate</a></p>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection