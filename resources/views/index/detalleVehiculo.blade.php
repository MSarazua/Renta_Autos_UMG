@extends('layout.index')
@section('content')

    <div class="container">
        <div class="row">
            @foreach ($detalleAutos->Message as $index)
                @if ($index->ID_Vehiculo == $idVehiculo)
                    <div class="row">
                        <div class="col">
                            <img class="homeCar" src= "{{ $index->ImgCar }}">
                        </div>
                        <div class="container">
                            <div class="row">
                                @foreach ($marcas->Message as $indexM)
                                    @if ($indexM->ID_Marca == $index->Marca)
                                        <div class="col-md-9 titulo_vehiculo" style="text-align: end">{{ $indexM->Marca }} {{ $index->Linea }}</div>
                                        <div class="col-md-3"><img style="width: 20%" src="{{ asset('img/reservar.png') }}"></div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="row" style="margin-top: 6%">
                                <div class="col">
                                    <div class="circle-container ">
                                        <div class="circle circle-image img1">
                                        </div>
                                        <div class="circle circle-text">
                                            <p>Transmisión</p>
                                            <p>{{ $index->Transmision }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circle-container">
                                        <div class="circle circle-image img2">
                                        </div>
                                        <div class="circle circle-text">
                                            <p>Año</p>
                                            <p>{{ $index->Ano }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circle-container">
                                        <div class="circle circle-image img3">
                                        </div>
                                        <div class="circle circle-text">
                                            <p>Asientos</p>
                                            <p>{{ $index->Asientos }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="circle-container">
                                        <div class="circle circle-image img4">
                                        </div>
                                        <div class="circle circle-text">
                                            <p>Motor</p>
                                            <p>{{ $index->Motor }}</p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                @endif
            @endforeach
            

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

@endsection