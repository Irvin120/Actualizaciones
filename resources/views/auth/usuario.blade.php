<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Usuarios</title>

</head>

<body>
    <div class="container">
        <h4>Gestion de usuarios</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('usuario.index')}}" method="get">

                    <div class="for-row">

                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        </div>

                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>

                    </div>
                </form>
            </div>

            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Opciones</th>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>email_verified_at</th>
                                <th>password</th>
                                <th>remember_token</th>
                                <th>created_at</th>
                                <th>update_at</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (count($usuarios)<=0)
                                <tr>
                                    <td colspan="9">No hay resultados</td>
                                </tr>
                            @else
                            @foreach ($usuarios as $usuario )
                            <tr>
                                <td>
                                    <a href="{{route('usuario.edit',$usuario->id)}}" class="btn btn-warning btn-sm"> Editar</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$usuario->id}}">
                                    Eliminar
                                    </button>
                                </td>
                                <th>{{$usuario->id}}</th>
                                <th>{{$usuario->name}}</th>
                                <th>{{$usuario->email}}</th>
                                <th>{{$usuario->email_verified_at}}</th>
                                <th>{{$usuario->password}}</th>
                                <th>{{$usuario->remember_token}}</th>
                                <th>{{$usuario->created_at}}</th>
                                <th>{{$usuario->updated_at}}</th>
                            </tr>
                            @include('auth.delete')
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$usuarios->links()}}
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
