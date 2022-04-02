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


          <!--  GRAFICAS -->
          <div class="content-grafic">
            <!-- Grafica lineas Horas -->
            <div id="graficHrs" style="width: 100%;"></div>

            <!-- Grafica lineas Semana -->
            <div id="graficSem" style="width: 100%;"></div>

            <!-- Grafica lineas Mes -->
            <div id="graficMes" style="width: 100%;"></div>

            <!-- Grafica lineas Anio -->
            <div id="graficYear" style="width: 100%;"></div>

            <!-- Grafica barras Horas -->
            <div id="barHoras" style="width: 100%;"></div>

            <!-- Grafica  barras Semana -->
            <div id="barSem" style="width: 100%;"></div>

            <!-- Grafica barras Mes-->
            <div id="barMes" style="width: 100%;"></div>

            <!-- Grafica barras Anio -->
            <div id="barYear" style="width: 100%;" ></div>

             <!-- Tabla Horas -->
            <table id="myTableHrs" style="display: none;" width="100%" height="100%" >

            </table>

            <!-- Tabla Semanas -->
            <table id="myTableSem"  style="display: none;"  width="100%" height="100%" class="rwd-table">

            </table>

            <!-- Tabla Meses-->
            <table id="myTableMes"  style="display: none;"  width="100%" height="100%" class="rwd-table">

            </table>

            <!-- Tabla Anio-->
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- SCRIPT -->

    <!-- Grafica de lineas Horas-->
    <script>
        var options = {
          series: [],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        title: {
          text: '',
          align: 'left'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: [],
        }
        };
        var grafica1 = new ApexCharts(document.querySelector("#graficHrs"), options);
        grafica1.render();

        window.setInterval(function() {
            $.get('{{ route('dia') }}', function (response) {
                    var data = JSON.parse(response);
                    grafica1.updateOptions({
                        xaxis: {
                            categories: data[1],
                        },
                        series: [data[0]]
                    });
                });
        },2000);
  </script>
  <!-- Graficas de lineas Semanas -->
  <script>
      var options = {
        series: [],
        chart: {
        height: 350,
        type: 'line',
        zoom: {
          enabled: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth'
      },
      title: {
        text: '',
        align: 'left'
      },
      grid: {
        row: {
          colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
          opacity: 0.5
        },
      },
      xaxis: {
        categories: [],
      }
      };
      var grafica2 = new ApexCharts(document.querySelector("#graficSem"), options);
      grafica2.render();

      window.setInterval(function() {
          $.get('{{ route('semana') }}', function (response) {
                  var data = JSON.parse(response);
                  grafica2.updateOptions({
                      xaxis: {
                          categories: data[1],
                      },
                      series: [data[0]]
                  });
              });
      },2000);
  </script>

  <!-- Grafica de linesa mes  -->
  <script>
      var options = {
        series: [],
        chart: {
        height: 350,
        type: 'line',
        zoom: {
          enabled: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth'
      },
      title: {
        text: '',
        align: 'left'
      },
      grid: {
        row: {
          colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
          opacity: 0.5
        },
      },
      xaxis: {
        categories: [],
      }
      };
      var grafica3 = new ApexCharts(document.querySelector("#graficMes"), options);
      grafica3.render();

      window.setInterval(function() {
          $.get('{{ route('mes') }}', function (response) {
                  var data = JSON.parse(response);
                  grafica3.updateOptions({
                      xaxis: {
                          categories: data[1],
                      },
                      series: [data[0]]
                  });
              });
      },2000);
  </script>

  <!-- Graficas de lineas año -->
  <script>
      var options = {
        series: [],
        chart: {
        height: 350,
        type: 'line',
        zoom: {
          enabled: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth'
      },
      title: {
        text: '',
        align: 'left'
      },
      grid: {
        row: {
          colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
          opacity: 0.5
        },
      },
      xaxis: {
        categories: [],
      }
      };
      var grafica4 = new ApexCharts(document.querySelector("#graficYear"), options);
      grafica4.render();

      window.setInterval(function() {
          $.get('{{ route('year') }}', function (response) {
                  var data = JSON.parse(response);
                  grafica4.updateOptions({
                      xaxis: {
                          categories: data[1],
                      },
                      series: [data[0]]
                  });
              });
      },2000);
  </script>

  <!-- Graficas de barras Horas -->
  <script>
    options = {
      chart: {
        type: 'bar'
      },
      series: [{
        data: [{
          x: 'category A',
          y: 10
        }, {
          x: 'category B',
          y: 18
        }, {
          x: 'category C',
          y: 13
        }]
      }]
    }
    var grafica5 = new ApexCharts(document.querySelector("#barHoras"), options);
      grafica5.render();

      window.setInterval(function() {
          $.get('{{ route('dia') }}', function (response) {
                  var data = JSON.parse(response);
                  grafica5.updateOptions({
                      xaxis: {
                          categories: data[1],
                      },
                      series: [data[0]]
                  });
              });
      },2000);
  </script>
  <!-- Graficas de barras Semanas -->
  <script>
    options = {
      chart: {
        type: 'bar'
      },
      series: [{
        data: [{
          x: 'category A',
          y: 10
        }, {
          x: 'category B',
          y: 18
        }, {
          x: 'category C',
          y: 13
        }]
      }]
    }
    var grafica6 = new ApexCharts(document.querySelector("#barSem"), options);
      grafica6.render();

      window.setInterval(function() {
          $.get('{{ route('semana') }}', function (response) {
                  var data = JSON.parse(response);
                  grafica6.updateOptions({
                      xaxis: {
                          categories: data[1],
                      },
                      series: [data[0]]
                  });
              });
      },2000);
  </script>
  <!-- Graficas de barras Mes  -->
  <script>
    options = {
      chart: {
        type: 'bar'
      },
      series: [{
        data: [{
          x: 'category A',
          y: 10
        }, {
          x: 'category B',
          y: 18
        }, {
          x: 'category C',
          y: 13
        }]
      }]
    }
    var grafica7 = new ApexCharts(document.querySelector("#barMes"), options);
      grafica7.render();

      window.setInterval(function() {
          $.get('{{ route('mes') }}', function (response) {
                  var data = JSON.parse(response);
                  grafica7.updateOptions({
                      xaxis: {
                          categories: data[1],
                      },
                      series: [data[0]]
                  });
              });
      },2000);
  </script>
  <!-- Graficas de barras Año -->
  <script>
    options = {
      chart: {
        type: 'bar'
      },
      series: [{
        data: [{
          x: 'category A',
          y: 10
        }, {
          x: 'category B',
          y: 18
        }, {
          x: 'category C',
          y: 13
        }]
      }]
    }
    var grafica8 = new ApexCharts(document.querySelector("#barYear"), options);
      grafica8.render();

      window.setInterval(function() {
          $.get('{{ route('year') }}', function (response) {
                  var data = JSON.parse(response);
                  grafica8.updateOptions({
                      xaxis: {
                          categories: data[1],
                      },
                      series: [data[0]]
                  });
              });
      },2000);
  </script>

{{--
   <script src="{{ asset('js/chart.min.js')}}"></script>

    <script src="{{ asset('js/grafica.js')}}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ asset('js/tabla.js')}}"></script> --}}

@endsection
