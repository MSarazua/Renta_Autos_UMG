<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <form method="POST" action="{{ route('marcas.store') }}" enctype="multipart/form-data"
    onsubmit="return checkSubmit();">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre de marca</label>
            <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Ingrese el nombre">
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <button type="submit" style="border-radius: 10px" class="btn btn btn-primary">
                        <i class="fas fa-save"></i>
                        {{ __('GUARDAR') }}
                    </button>
                </div>
            </div>
        </div>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marcas as $index)
            <tr>
                <th scope="row">{{ $index->id }}</th>
                <td>{{ $index->nombre }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>