
@extends('layouts.app')
@section('title','Busqueda de Reportes')


@section('content')
    <header>
        <div class="div-logo">
            <img src="icons/logo.svg" alt="Logo a">
            <h1>SiTE</h1>
        </div>

        <div class="div-user">
            

            <a class="div-icon-user" href="{{url('/search')}}">
                <img src="icons/search-while.svg" alt="">
            </a>

            <a class="div-icon-user" href="{{url('/')}}">
                <img src="icons/home.svg" alt="">
            </a>


            <a class="div-icon-user" href="{{route('register.index')}}">
            <img src="icons/add-user.svg" alt="">
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

        <div class="container">
            <h2>Temperatura</h2>
            <div class="form-search">
                {{-- <form action="{{route('search.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="texto" value="{{$texto}}" placeholder="aaaa-mm-dd">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                    </div>
                </form> --}}

                <form action="{{route('search.index')}}" method="get" >
                    <input type="text" required name="texto" value="{{$texto}}" placeholder="aaaa-mm-dd">
                    <button type="submit">
                        <img src="icons/search-while.svg" alt="">
                    </button>
                </form>

            </div>

            <div class="content-table">
                <!-- Tabla Semanas -->
                <table id="myTableSem">
                    <thead>
                        <tr>
                            <th>Temperatura</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($temperaturas)<=0)
                        <tr>
                            <td colspan="5">
                                No hay resultados
                            </td>
                        </tr>
                        @else
                        @foreach ($temperaturas as $temperatura )
                        <tr>
                            <td>{{$temperatura->value}} °C</td>
                            <td>{{$temperatura->recorded}}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="col-sm-4 ">{{$temperaturas->links()}} </div>
            {{-- <div class="row">
                
                <div class="col-xl-l2">
                    <div class="table-responsive">
                        <table class="table table-striped">

                            <thead>
                                <tr>
                                    <th>value</th>
                                    <th>recorded</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($temperaturas)<=0)
                                <tr>
                                    <td colspan="5">
                                        No hay resultados
                                    </td>
                                </tr>
                                @else
                                @foreach ($temperaturas as $temperatura )
                                <tr>
                                    <td>{{$temperatura->value}}</td>
                                    <td>{{$temperatura->recorded}}</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>

                        </table>
                        <div class="col-sm-4 ">{{$temperaturas->links()}} </div>
                    </div>
                </div>
            </div> --}}
        </div>


    </main>

    <script src="{{ asset('js/showPassword.js')}}"></script>
@endsection

