@extends('layout.oficial')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 offset-md-3 "><img class="homeCar" src= "{{ asset('img/CR001.png') }}"></div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="display-3 text-white">
                    TOYOTA FORTUNER 4x4
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="col text-center mt-3">
                    <button type="submit" class="btn-lg btn text-white btn_reservar">
                        {{ __('RESERVA YA ') }}
                        <img style="width: 2.5rem" src= "{{ asset('img/flecha.png') }}">
                    </button>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <hr style="border: 2px solid white">
        <br>
        {{-- <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('img/SLAC_1.webp') }}" class="d-block w-100" alt="..." width="25rem">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('img/CR001.png') }}" class="d-block w-100" alt="..." width="25rem">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/CR001.png') }}" class="d-block w-100" alt="..." width="25rem">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div> --}}
    </div>
    <div class="container">
        <div class="card-group col-12">
          @foreach ($autos->Message as $index)
              <div class="card card_vehiculos col-sm-12">
                <img src="{{ $index->ImgCar }}<" class="card-img-top" alt="...">
                <div class="card-footer">
                  <center>
                    @foreach ($marcas->Message as $indexM)
                      @if ($indexM->ID_Marca == $index->Marca)
                        <a target="_blank" href="{{ url('detalleVehiculo/' . $index->ID_Vehiculo ) }}" type="submit" class="btn-lg btn text-white btn_vehiculo">
                          {{ $indexM->Marca }}
                          <img style="width: 2rem" src= "{{ asset('img/flecha.png') }}">
                        </a>
                      @endif
                    @endforeach
                  </center>
                </div>
              </div>
          @endforeach
        </div>
    </div>
@endsection