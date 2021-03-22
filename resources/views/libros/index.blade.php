<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('resources/post/css/indexPost.css') }}" rel="stylesheet">
    <title>Libros</title>
</head>
<body>
    <h1 class="title">Index de libros</h1><br>
    <p><a href="/create">Crear libros</a></p><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>titulo</th>
                <th>descripcion</th>
                <th>contenido</th>
                <th>fecha</th>
                <th>categoria_id</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
         <tbody>
            @foreach($libros as $libros)
                <tr>
                    <td>{{ $libros->id }}</td>
                    <td>{{ $libros->titulo }}</td>
                    <td>{{ $libros->descripcion }}</td>
                    <td>{{ $libros->contenido }}</td>
                    <td>{{ date('Y-m-d', strtotime($libros->create_at )) }}</td>
                    <td>{{ $libros->categoria_id }}</td>
                    <td>
                        <form action="libros/{{$libros->id}}" method="post" class="d-inline">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>