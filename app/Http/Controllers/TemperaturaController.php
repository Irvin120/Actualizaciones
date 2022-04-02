<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//hacer referencia al modelo Temperatura
use App\Models\Temperatura;
use Illuminate\Support\Facades\DB;

class TemperaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $temperaturas=DB::table('temperatura')
                        ->select('num','message','sensor_num','value','recorded')
                        ->where('recorded', 'LIKE','%'.$texto.'%')
                        ->paginate(10);
        return view('auth.search',compact('temperaturas','texto'));
    }


    //<--------------------------------------------Tablas miguel---------------------------------------------------------->


    public function consultaDia()
    {
        $temperatura = Temperatura::all();
        $datos = array();
        $datos['name'] = 'Temperatura';
        $datos['data'] = [];

        $horas = array();
        $horas = [];

        foreach ($temperatura as $value) {
            array_push($datos['data'],$value['value']);
            $objHora = date_create($value['recorded']);
            $dataHora = date_format($objHora,'H:i:s');
            array_push($horas,$dataHora);
        }
        $datosGraficas = array($datos,$horas);
        return json_encode($datosGraficas);
    }

    public function consultaSemana()
    {
        $temperatura = Temperatura::all();
        $datos2 = array();
        $datos2['name'] = 'Temperatura';
        $datos2['data'] = [];

        $fecha = array();
        $fecha = [];

        foreach ($temperatura as $value) {
            array_push($datos2['data'],$value['value']);
            $objFecha = date_create($value['recorded']);
            $datafecha = date_format($objFecha,'D');
            array_push($fecha,$datafecha);
        }
        $datosGraficas2 = array($datos2,$fecha);
        return json_encode($datosGraficas2);
    }

    public function consultaMes()
    {
        $temperatura = Temperatura::all();
        $datos3 = array();
        $datos3['name'] = 'Temperatura';
        $datos3['data'] = [];

        $mes = array();
        $mes = [];

        foreach ($temperatura as $value) {
            array_push($datos3['data'],$value['value']);
            $objmes = date_create($value['recorded']);
            $datames = date_format($objmes,'M');
            array_push($mes,$datames);
        }
        $datosGraficas3 = array($datos3,$mes);
        return json_encode($datosGraficas3);
    }


    public function consultaYear()
    {
        $temperatura = Temperatura::all();
        $time = Temperatura::all();
        $datos4['name'] = 'Temperatura';
        $datos4['data'] = [];

        $year = array();
        $year = [];

        foreach ($temperatura as $value) {
            array_push($datos4['data'],$value['value']);
        }

        foreach($time as $value){
            $objyear = date_create($value['recorded']);
            $datayear = date_format($objyear,'Y');
            array_push($year,$datayear);
        }
        $datosGraficas3 = array($datos4,$year);
        return json_encode($datosGraficas3);
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }
}
