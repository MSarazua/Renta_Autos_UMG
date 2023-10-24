@extends('layout.oficial')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-3"><img src= "{{ asset('img/CR001.png') }}"></div>
        </div>
        <div class="row">
            <div class="col">
                <div class="titulo_vehiculo">
                    TOYOTA FORTUNER 4x4
                </div>
            </div>
            <div class="col">
                <div class="col text-center mt-3">
                    <button type="submit" class="btn-lg btn text-white btn_reservar">
                        {{ __('RESERVA YA ') }}
                        <img style="width: 2.5rem" src= "{{ asset('img/flecha.png') }}">
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection