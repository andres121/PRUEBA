<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Cliente;
use App\Departamento;
use App\Ciudad;
use App\Agente;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cliente = DB::table('clientes')
                ->join('departamentos' , 'dep_id' , '=' ,'clientes.departamento_id')
                ->join('ciudads' , 'ciu_id' , '=' ,'clientes.ciudad_id')
                ->join('agentes' , 'age_id' , '=' ,'clientes.agente_id')
                ->select('clientes.*','departamentos.departamento', 'ciudads.municipio',
                'agentes.nombre')
                ->get();
    //  $cliente = Cliente::orderBy('id','DESC')->paginate(3);
      return view('cliente/cliente',compact('cliente'));
    }
    public function getCiudades(Request $request, $id){
      if($request->ajax()){
            $ciudades = Ciudad::ciudades($id);
            return response()->json($ciudades);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $agente = Agente::all();
          $departamento = Departamento::all();
          $ciudad = Ciudad::all();
          return view('cliente.registrar', compact('ciudad','departamento', 'agente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Cliente::create($request->all());
      return redirect()->route('clientes')->with('success','Registro creado satisfactoriamente');
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

      $agente = Agente::all();
      $departamento = Departamento::all();
      $ciudad = Ciudad::all();
      $clientes = Cliente::find($id);
      return view('cliente.editar',compact('clientes','ciudad','departamento', 'agente'));
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

      Cliente::find($id)->update($request->all());
      return redirect()->route('clientes')->with('success','Registro actualizado satisfactoriamente');

  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Cliente::where('id',$id)->delete();

    return redirect()->route('clientes')->with('success','Registro eliminado satisfactoriamente');
}
}
