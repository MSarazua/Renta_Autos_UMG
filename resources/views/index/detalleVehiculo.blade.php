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
                                        <div class="col-md-3"><button type="button" class="btn border-0" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$index->ID_Vehiculo}}">
                                            <img style="width: 20%" src="{{ asset('img/reservar.png') }}">
                                        </button></div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal_{{$index->ID_Vehiculo}}" tabindex="-1" aria-labelledby="exampleModalLabel_{{$index->ID_Vehiculo}}" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="border-bottom: 3px solid black !important">
                                                    <h5 class="modal-title" style="text-align: center !important" id="exampleModalLabel_{{$index->ID_Vehiculo}}"><b>RESERVA DE VEHÍCULO</b></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @if ($index->Disponible == "Si")
                                                        <p>
                                                            <b>Vehículo disponible</b>
                                                        </p>
                                                    @endif
                                                    <form method="POST" action="{{ url('api/detallereserva') }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="POST">
                                                        <input type="hidden" name="ID_DetalleReserva" value="3">
                                                        <input type="hidden" name="ID_Usuario" value="{{ $id_usuario }}">
                                                        <input type="hidden" name="ID_Vehiculo" value="{{$index->ID_Vehiculo}}">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Fecha de salida</span>
                                                            <input type="date" class="form-control" name="FechaSalida" placeholder="Fecha de salida" aria-label="Fecha de salida">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">Fecha de entrada</span>
                                                            <input type="date" class="form-control" name="FechaEntrada" placeholder="Fecha de entrada" aria-label="Fecha de entrada">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Q</span>
                                                            <input type="text" class="form-control" name="PrecioBase" placeholder="Precio base" aria-label="Precio base">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">%</span>
                                                            <input type="text" class="form-control" name="Descuento" placeholder="Descuento" aria-label="Descuento">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">+</span>
                                                            <input type="text" class="form-control" name="Adicionales" placeholder="Adicionales" aria-label="Adicionales">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">Q</span>
                                                            <input type="text" class="form-control" name="PrecioFinalCliente" placeholder="Precio Final" aria-label="Precio Final">
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" name="PrecioTotal" placeholder="Precio Total" aria-label="Precio Total">
                                                        </div>
                                                        <button type="submit" class="btn btn-lg text-light" style="background-color: #3C486B; float: right; border-radius: 20px">
                                                            Confirmar reserva
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
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
        </div>
    </div>

@endsection