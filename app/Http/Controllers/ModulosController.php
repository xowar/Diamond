<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use DB;

class ModulosController extends Controller
{

    public function index()
    {
        //
    }

    public function prospecto($puesto)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['pre_cliente'] == "1") {

            $states             = DB::table('states')->get();
            $credits             = DB::table('credits')->get();
            $offices             = DB::table('offices')->get();
            $employees          = DB::table('employees')->where('roles', '=', 'Asesor')->get();
            return view('register_prospecto', ['states' => $states, 'employees' => $employees, 'credits' => $credits, 'offices' => $offices]); 
            
        }else{
            return redirect('home');
        }
    }

    public function save_prospecto(Request $request)
    {
         DB::table('client')->insert(
            [
                'nombre'                    => $request['nombre'],
                'ubicacion_persona'         => $request['ubicacion_persona'],
                'email'                     => $request['email'],
                'telefono'                  => $request['telefono'],
                'celular'                   => $request['celular'],
                'presupuesto'               => $request['presupuesto'],
                'referido'                  => $request['referido'],
                'tipo_cliente'              => $request['tipo_cliente'],
                'tipo_credito'              => $request['tipo_credito'],
                'ubicacion_propiedad'       => $request['ubicacion_propiedad'],
                'necesidad_cliente'         => $request['necesidad_cliente'],
                'modulo'                    => $request['sucursal'],
                'asesor'                    => $request['asesor'],
                'requisitos_propiedad'      => $request['requisitos_propiedad'],
            ]);

            return redirect('home');        
    }

    public function visitas($puesto)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['pre_cliente'] == "1") {

            return view('visitas'); 
            
        }else{
            return redirect('home');
        }
    }

    public function agregar_visitas(Request $request)
    {

        $ultima_visita = DB::table('visits')
             ->select('*')
             ->orderBy('id_visits', 'desc')
             ->take(1)
             ->get();

            foreach ($ultima_visita as $key) {
                if ($key->fecha == $request['fecha']) {
                    
                    $sumVisita = $key->total_visitas + 1;

                    DB::table('visits')
                    ->where('fecha', '=', $request['fecha'])
                    ->update([
                        'total_visitas'         => $sumVisita,
                    ]);
                }else{
                    DB::table('visits')->insert([
                        'fecha'             => $request['fecha'],
                        'oficina'           => $request['oficina'],
                        'total_visitas'     => $request['visita'],
                    ]);
                }
            }
            return view('home'); 
    }
    

    public function table_prospecto($id)
    {
            $employees = DB::table('employees')
            ->where('id_user', '=', $id)
            ->get();

            
            $clients = DB::table('client')
            ->where('client.id_employee', '=', $employees[0]->id_employees)
            ->get();

            return view('table_prospectos', ['clients' => $clients]);
    }


    public function seguimiento($id)
    {
            $employees = DB::table('employees')->where('id_user', '=', $id)->get();
            
            $clients = DB::table('client')
            ->where('client.id_client', '=', $id)
            ->get();

            $seguimientos = DB::table('seguimiento')
            ->where('seguimiento.id_cliente', '=', $id)
            ->get();

            return view('seguimiento', ['clients' => $clients, 'seguimientos' => $seguimientos]);
    }


    public function add_actividad(Request $request)
    {

        DB::table('seguimiento')->insert(
            [
                'actividad'              => $request['actividad'],
                'observacion'            => $request['observacion'],
                'id_cliente'             => $request['id_cliente'],
            ]);

        DB::table('client')
            ->where('client.id_client', $request['id_cliente'])
            ->update(
            [
                'candidato'              => $request['candidato'],
            ]);


            $clients = DB::table('client')
            ->where('client.id_client', '=', $request['id_client'])
            ->get();

            return back()->withInput();  
    }

        public function editar_prospecto(Request $request)
    {

        DB::table('client')
            ->where('client.id_client', $request['id_cliente'])
            ->update(
            [
                'nombre'                => $request['nombre'],
                'email'                 => $request['email'],
                'telefono'              => $request['telefono'],
                'celular'               => $request['celular'],
                'ubicacion_persona'     => $request['ubicacion_persona'],
                'presupuesto'           => $request['presupuesto'],
                'tipo_credito'          => $request['tipo_credito'],
                'necesidad_cliente'     => $request['necesidad_cliente'],
                'tipo_cliente'          => $request['tipo_cliente'],
                'referido'              => $request['referido'],
                'modulo'                => $request['modulo'],
                'asesor'                => $request['asesor'],
                'ubicacion_propiedad'   => $request['ubicacion_propiedad'],
                'requisitos_propiedad'  => $request['requisitos_propiedad'],

            ]);


            $clients = DB::table('client')
            ->where('client.id_client', '=', $request['id_client'])
            ->get();

            return back()->withInput();  
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
