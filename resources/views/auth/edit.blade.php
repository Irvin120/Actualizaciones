<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" type="text/css">
</head>
<body>
    <main>
        <div class="background">

            <img class="img4" src="{{ asset('icons/curve3.svg') }}" alt="">
        </div>

        <section class="login">
            <div class="login-logo">
                <img src="{{ asset('icons/logo.svg') }}" alt="Logo a">
                <h1>SiTE</h1>

            </div>

            <div class="form">
                <img  class="user-img" src="{{ asset('img/user-logo.png') }}" alt="Inicio de Sesión">
                <h2>Actualizar Usuarios</h2>
                    {{-- ERROR --}}
                    @error('message')
                    <p>{{$message}}</p>

                    @enderror

                <form action="{{route('usuario.update',$usuario->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <input id="name" name="name" type="text" placeholder="Ingrese su nombre" required value="{{$usuario->name}}">

                    <input id="email" name="email" type="email" placeholder="Ingrese su correo" required value="{{$usuario->email }}">

                    <input id="password" name="password" type="password" placeholder="Ingrese su contraseña" required value="{{$usuario->password}}">

                    <div class="show-password">
                        <input type="checkbox" name="show-password" id="input-show-password">
                        <label for="show-password">Mostrar Constraseña</label>
                    </div>

                    <input type="submit" value="Registrar">

                </form>
            </div>

        </section>
    </main>
    <script src="{{ asset('js/showPassword.js')}}"></script>

</body>
</html>
