@extends('layout.oficial')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Ingreso de marcas</div>
            <div class="card-body card-block">
                <form method="POST" action="{{ route('marcas.store') }}" enctype="multipart/form-data"
                onsubmit="return checkSubmit();">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Ingrese el nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <select class="form-control" name="estado" aria-label="Default select example">
                                <option selected>Estado de la marca</option>
                                <option value="1">Activa</option>
                                <option value="0">Inactiva</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions form-group"><button type="submit" class="btn btn-primary btn-sm">GUARDAR</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($marcas as $index)
                                    <tr>
                                        <th scope="row">{{ $index->id }}</th>
                                        <td>{{ $index->nombre }}</td>
                                        @if ($index->estado == 1)
                                            <td>
                                                <form method="POST"
                                                action="{{ url('marcas/' . $index->id) }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <button title="Presione para desactivar" class="btn btn-success">
                                                        Activa
                                                    </button>
                                                </form>
                                            </td>
                                        @else
                                            <td>
                                                <form method="POST"
                                                action="{{ url('modificar/marcas/' . $index->id) }}">
                                                    {{ csrf_field() }}
                                                    <button title="Presione para activar" class="btn btn-danger">
                                                        Inactiva
                                                    </button>
                                                </form>
                                            </td>
                                        @endif
                                        {{-- <td class="center">
                                            <div style="margin-top:5px;margin-bottom:5px">
                                                <a href="{{ url('marcas/' . $index->id . '/edit') }}" class="btn btn btn-primary"
                                                    title="Editar">
                                                    <i class="fas fa-edit icon-action-btn"></i>
                                                </a>
                                                <a class="btn btn btn-danger" title="Desactivar marca"
                                                    onclick="event.preventDefault(); document.getElementById('formDel{{ $index->id }}').submit();">
                                                    <i class="fas fa-trash-alt icon-action-btn2"></i>
                                                </a>
                                            </div> 
                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection