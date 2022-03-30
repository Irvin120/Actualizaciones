<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get ('texto'));
        $usuarios = DB::table('users')
                   ->select('id','name','email','email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at')
                   ->where('name','LIKE','%'.$texto. '%')
                   ->orWhere('id', 'LIKE', '%' .$texto. '%')
                   ->orderBy('name','asc')
                   ->paginate(10);

        return view('auth.usuario',compact('usuarios', 'texto'));

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
        $usuario= Usuario::findOrFail($id);
        //return $usuario;
        return view ('auth.edit',compact('usuario'));
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
        $usuario=Usuario::findOrFail($id);
        $usuario->name=$request->input('name');
        $usuario->email=$request->input('email');
        $usuario->password=$request->input('password');
        $usuario->save();
        return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
