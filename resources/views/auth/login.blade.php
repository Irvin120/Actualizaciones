@extends('layouts.app')

@section('title','Inicio de Sesión')

@section('content')
    <main>
        <div class="background">
            <!--  <img class="img1" src="icons/blob.svg" alt="sombra1">
            <img class="img2" src="icons/blob1.svg" alt="sombra2">
            <img class="img3" src="icons/blob2.svg" alt="sombra3"> -->
            <img class="img4" src="{{ asset('icons/curve.svg') }}" alt="">
        </div>
 
        <section class="login">
            <div class="login-logo">
                <img src="{{ asset('icons/logo.svg') }}" alt="Logo a">
                <h1>SiTE</h1> 
                 
            </div>

            <div class="form">
                <img  class="user-img" src="{{ asset('img/user-logo.png') }}" alt="Inicio de Sesión">
                <h2>Inicio de sesión</h2>
                {{-- ERROR --}}
                @error('message')
                <p>{{$message}}</p>
                    
                @enderror
                

                <form action="" method="POST">
                    @csrf
                    <input id="email" name="email" type="email" placeholder="Ingrese su correo" required>
                    <input id="password" name="password" type="password" placeholder="Ingrese su contraseña" required>
                    <div class="show-password">
                        <input type="checkbox" name="show-password" id="input-show-password">
                        <label for="show-password">Mostrar Constraseña</label>
                    </div>
                    <input type="submit" value="Ingresar">
                </form>
            </div>
            
        </section>
    </main>

    <script src="{{ asset('js/showPassword.js')}}"></script>
@endsection