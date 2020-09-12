<?php

namespace App\Http\Controllers;

use App\Registro;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index(){
        return view("registro");
    }

    public function guardar(Request $request){
        $datos_guardar = New Registro;
        $datos_guardar->num_codigo = $request->input('num_codigo');
        $datos_guardar->gestion = $request->input('gestion');
        $datos_guardar->area_unidad = $request->input('area_unidad');
        $datos_guardar->titulo_proceso = $request->input('titulo_proceso');
        $datos_guardar->formato = $request->input('formato');
        $datos_guardar->tomo = $request->input('tomo');
        $datos_guardar->total_tomo = $request->input('total_tomo');
        $datos_guardar->total_fojas = $request->input('total_fojas');
        $datos_guardar->num_estantes = $request->input('num_estantes');
        $datos_guardar->bandeja_alfabetica = $request->input('bandeja_alfabetica');
        $datos_guardar->prioridad_1 = $request->input('prioridad_1');
        $datos_guardar->tipologia = $request->input('tipologia');
        $datos_guardar->cod_detalle = $request->input('cod_detalle');
        $datos_guardar->descripcion_adjunta = $request->input('descripcion_adjunta');
        $datos_guardar->hoja_ruta = $request->input('hoja_ruta');
        $datos_guardar->fech_inicio = $request->input('fech_inicio');
        $datos_guardar->fojas = $request->input('fojas');
        $datos_guardar->original = $request->input('original');
        $datos_guardar->copia = $request->input('copia');
        $datos_guardar->legalizado = $request->input('legalizado');
        $datos_guardar->fotocopia = $request->input('fotocopia');
        $datos_guardar->observacion = $request->input('observacion');

        $datos_guardar->save();
        return redirect()->route('registro');

        // return $request -> file("documento_pdf");
    }

    public function mostrar(){

      // $registros = Registro::get();
      $registros = DB::table('registros')->get();
      return view('/mostrar', compact('registros') );
      // print_r($registros);
      // exit();
    }

    public function eliminar($id){
      // echo $id;
      Registro::destroy($id);
      return view('registro');

    }

    public function obtener($id){
      $registro = Registro::where('id', $id)->first();
      // echo $registro;
      return view( 'modificar', compact('registro'));
    }

    public function editar(Request $request, $id){
      // echo $id;
      // Registro::where('id', $id)->update($datosReserva);
      $datos = request()->except(['_token', '_method']);
      Registro::where('id', $id)->update($datos);
      return redirect('mostrar');
        // print_r($datos);
    }
  } 
