@extends('layouts.app')

@section('title','Registro de usuarios')

@section('content')
 <header>
    <div class="div-logo">
        <img src="icons/logo.svg" alt="Logo a">
        <h1>SiTE</h1>
    </div>



    <div class="div-user">
        {{-- <div class="form-search">
            <form action="#">
              <input required placeholder="Buscar reporte..." type="search">
              <button type="submit">
                  <img src="icons/search-while.svg" alt="">
              </button>
            </form>
        </div> --}}

        <a class="div-icon-user" href="{{url('/search')}}">
            <img src="icons/search-while.svg" alt="">
        </a>

        <a class="div-icon-user" href="{{url('/')}}">
            <img src="icons/home.svg" alt="">
        </a>

        <button class="div-icon-not"  id="btn-notification">
            <img src="icons/notification.svg" alt="">
        </button>

        <a class="div-icon-user" href="{{route('login.destroy')}}">
            <img src="icons/exit.svg" alt="">
        </a>

    </div>

</header>

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
                <h2>Registro Usuarios</h2>
                    {{-- ERROR --}}
                    @error('message')
                    <p>{{$message}}</p>

                    @enderror

                <form action="" method="POST">
                    @csrf
                    <input id="name" name="name" type="text" placeholder="Ingrese su nombre" required>
                    <input id="email" name="email" type="email" placeholder="Ingrese su correo" required>
                    <input id="password" name="password" type="password" placeholder="Ingrese su contraseña" required>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirmar contraseña" required>
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

@endsection
