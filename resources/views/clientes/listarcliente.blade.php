<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>CLIENTES</title>
</head>

<body>
    <h1>listar clientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">codigo</th>
                <th scope="col">tlno</th>
                <th scope="col">domicilio</th>
                <th scope="col">run_social</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $cliente->codigo }}</td>{{--la variable que cree en el controlador y le paso los atributos  --}}
                    <td>{{ $cliente->tlno }}</td>
                    <td>{{ $cliente->domicilio }}</td> 
                    <td>{{ $cliente->run_social }}</td>                   
                    <td><a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a></td>{{--aca le coloco donde el controlador ese teacher.edit  --}}
                    <td>
                        <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST">{{--aca le coloco donde el controlador ese teacher.edit--}}
                            @csrf
                            @method('delete')
                            <button type="submit"  class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>



                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
