@extends('layouts.app')

@section('title','Panel Principal')

@section('content')
    <header>
        <div class="div-logo">
            <img src="icons/logo.svg" alt="Logo a">
            <h1>SiTE</h1>
        </div>



        <div class="div-user">
            {{-- <a class="div-icon-user" href="{{route('search.index')}}">
              <img src="icons/search.svg" alt="">

            </a>  --}}

            <a class="div-icon-user" href="{{route('usuario.index')}}">
                <img src="icons/search-while.svg" alt="">
              </a>


            <a class="div-icon-user" href="{{url('/search')}}">
              <img src="icons/search-while.svg" alt="">
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
        <section class="indicators">
            <div class="card">
                <div class="box">
                  <div class="percent">
                    <svg>
                        <!-- <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                              <stop offset="0%" stop-color="#00bc9b" />
                              <stop offset="100%" stop-color="#5eaefd" />
                            </linearGradient>
                          </defs>  -->

                          <circle cx="45" cy="45" r="45"></circle>
                          <circle cx="45" cy="45" r="45"></circle>
                        <!-- Formula
                        content: 150x150
                        svg: cx=70 cy=70 r=60
                        restas 10 al content y la mitad colocas en svg-->
                        <!-- <circle cx="70" cy="70" r="70"></circle> -->
                    </svg>

                    <div class="number">
                      <h2>20<span>ºC</span></h2>
                    </div>
                  </div>
                  <h2 class="text">T. INTERIOR</h2>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <div class="percent">
                    <svg>
                      <circle cx="45" cy="45" r="45"></circle>
                      <circle cx="45" cy="45" r="45"></circle>
                    </svg>
                    <div class="number">
                      <h2>51<span>%</span></h2>
                    </div>
                  </div>
                  <h2 class="text">HUMEDAD</h2>
                </div>
              </div>
              <div class="card">
                <div class="box">
                  <div class="percent">
                    <svg>
                      <circle cx="45" cy="45" r="45"></circle>
                      <circle cx="45" cy="45" r="45"></circle>
                    </svg>
                    <div class="number">
                      <h2>35<span>ºC</span></h2>
                    </div>
                  </div>
                  <h2 class="text">T. EXTERIOR</h2>
                </div>
              </div>
        </section>

        <section class="grafics">
          <div class="content-button">
            <div class="content-1">
              <button id="btn-grafica"  class="active">Gráfica</button>
              <button id="btn-barra">Barras</button>
              <button id="btn-tabla">Tabla</button>


            </div>

            <div class="content-2">
              <button id="btnHrs" class="active bg-graficas">24 hrs</button>
              <button id="btnSem" class="bg-graficas">semana</button>
              <button id="btnMes" class="bg-graficas">mes</button>
              <button id="btnAnio" class="bg-graficas">año</button>
            </div>

          </div>
          <div class="content-grafic">
            <!-- Grafica Horas -->
            <canvas id="myChartHrs"width="100%" height="100%"></canvas>

            <!-- Grafica Semana -->
            <canvas id="myChartSem" style="display: none;" width="100%" height="100%"></canvas>

            <!-- Grafica Mes -->
            <canvas id="myChartMes" style="display: none;" width="100%" height="100%"></canvas>

            <!-- Grafica Anio -->
            <canvas id="myChartAnio" style="display: none;" width="100%" height="100%"></canvas>

            <!-- Grafica Horas -->
            <canvas id="myBarHrs" style="display: none;" width="100%" height="100%"></canvas>

            <!-- Grafica Semana -->
            <canvas id="myBarSem" style="display: none;" width="100%" height="100%"></canvas>

            <!-- Grafica Mes -->
            <canvas id="myBarMes" style="display: none;" width="100%" height="100%"></canvas>

            <!-- Grafica Anio -->
            <canvas id="myBarAnio" style="display: none;" width="100%" height="100%"></canvas>

             <!-- Tabla Horas -->
            <table id="myTableHrs" style="display: none;" width="100%" height="100%" >

            </table>

            <!-- Tabla Semanas -->
            <table id="myTableSem"  style="display: none;"  width="100%" height="100%" class="rwd-table">

            </table>

            <!-- Tabla Meses -->
            <table id="myTableMes"  style="display: none;"  width="100%" height="100%" class="rwd-table">

            </table>

            <!-- Tabla Anio -->
            <table id="myTableAnio"  style="display: none;"  width="100%" height="100%" class="rwd-table">

            </table>
          </div>


        </section>

        <section class="notif">
          <div class="title-and-closed">

            <img class="img-closed" src="img/close.png" alt="">
          </div>

          <div class="element">
            <div class="el-img">
              <img src="img/warning.png" alt="">
            </div>
            <div class="el-body">
              <h5 class="alert">Alerta</h5>
              <p class="description">El sistema a detectado cambios importantes en la temperatura del SITE</p>
              <p class="date">10:27 PM - 28/02/2022</p>
            </div>

          </div>

          <div class="element">
            <div class="el-img">
              <img src="img/caution.png" alt="">
            </div>
            <div class="el-body">
              <h5 class="warning">Precaución</h5>
              <p class="description">El sistema a detectado cambios importantes en la temperatura del SITE</p>
              <p class="date">10:27 PM - 28/02/2022</p>
            </div>
          </div>

          <div class="element">
            <div class="el-img">
              <img src="img/email.png" alt="">
            </div>
            <div class="el-body">
              <h5 class="good">Cambios en el sistema</h5>
              <p class="description">El sistema a detectado cambios importantes en la temperatura del SITE</p>
              <p class="date">10:27 PM - 28/02/2022</p>
            </div>
          </div>

          <div class="element">
            <div class="el-img">
              <img src="img/caution.png" alt="">
            </div>
            <div class="el-body">
              <h5 class="warning">Precaución</h5>
              <p class="description">El sistema a detectado cambios importantes en la temperatura del SITE</p>
              <p class="date">10:27 PM - 28/02/2022</p>
            </div>
          </div>

          <div class="element">
            <div class="el-img">
              <img src="img/email.png" alt="">
            </div>
            <div class="el-body">
              <h5 class="good">Cambios en el sistema</h5>
              <p class="description">El sistema a detectado cambios importantes en la temperatura del SITE</p>
              <p class="date">10:27 PM - 28/02/2022</p>
            </div>
          </div>

        </section>

    </main>


    <script src="{{ asset('js/chart.min.js')}}"></script>

    <script src="{{ asset('js/grafica.js')}}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/tabla.js')}}"></script>

@endsection
