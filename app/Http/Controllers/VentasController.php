<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function filtro_propiedad_venta($puesto)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

            if (Auth::user()->puesto == $permisos['rol'] & $permisos['datos_propiedad'] == "1") {
                $tipo_propiedades = DB::table('type_propertys')->get();
                $colonias = DB::table('colonies')->get();

            return view('filtro_propiedad_venta', ['tipo_propiedades' => $tipo_propiedades], ['colonias' => $colonias]);  
        }else{
            return redirect('home');
        }
    }

    public function resultado_propiedades(Request $request)
    {
                     
                     if ($request['id_tipo_propiedad'] == "5") {
                        $query = DB::table('registro_de_propiedad');

                        if ($request['id_tipo_propiedad']) {
                            $query->where('id_tipo_propiedad', $request['id_tipo_propiedad']);
                        }
                        if ($request['ubicacion']) {
                            $query->where('id_colonia_propiedad', $request['ubicacion']);
                        }
                        if ($request['recamaras']) {
                            $query->where('recamaras', $request['recamaras']);
                        }
                        if ($request['banos_completos']) {
                            $query->where('banos_completos', $request['banos_completos']);
                        }
                        if ($request['medios_banos']) {
                            $query->where('medios_banos', $request['medios_banos']);
                        }
                        if ($request['niveles']) {
                            $query->where('niveles', $request['niveles']);
                        }
                        if ($request['cochera']) {
                            $query->where('cochera', $request['cochera']);
                        }
                        if ($request['min']) {
                            $query->WhereBetween('precio_renta', [$request['min'], $request['max']]);
                        }

                        $query->select('*');
                        $result = $query->get();
                     }else{

                        $query = DB::table('registro_de_propiedad');

                        if ($request['id_tipo_propiedad']) {
                            $query->where('id_tipo_propiedad', $request['id_tipo_propiedad']);
                        }
                        if ($request['ubicacion']) {
                            $query->where('id_colonia_propiedad', $request['ubicacion']);
                        }
                        if ($request['recamaras']) {
                            $query->where('recamaras', $request['recamaras']);
                        }
                        if ($request['banos_completos']) {
                            $query->where('banos_completos', $request['banos_completos']);
                        }
                        if ($request['medios_banos']) {
                            $query->where('medios_banos', $request['medios_banos']);
                        }
                        if ($request['niveles']) {
                            $query->where('niveles', $request['niveles']);
                        }
                        if ($request['cochera']) {
                            $query->where('cochera', $request['cochera']);
                        }
                        if ($request['min']) {
                            $query->WhereBetween('precio_venta', [$request['min'], $request['max']]);
                        }

                        $query->leftJoin('colonies', 'registro_de_propiedad.id_colonia_propiedad', '=', 'colonies.id_colonies')
                                ->leftJoin('type_propertys', 'registro_de_propiedad.id_tipo_propiedad', '=', 'type_propertys.id_type_propertys')
                                ->leftJoin('cities', 'registro_de_propiedad.id_tipo_propiedad', '=', 'cities.id_cities')
                                ->leftJoin('employees', 'registro_de_propiedad.id_asesores', '=', 'employees.id_employees')
                                ->select('*');
                        $result = $query->get();
                    }
      
            return view('venta_propiedades', ['result' => $result, 'request' => $request]);  

    }


    public function propiedad_cliente($puesto, $id)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

            if (Auth::user()->puesto == $permisos['rol'] & $permisos['propiedad_cliente'] == "1") {
                $propiedades = DB::table('registro_de_propiedad')
                    ->leftJoin('commissions', 'registro_de_propiedad.id_comision', '=', 'commissions.id_commissions')
                    ->leftJoin('type_propertys', 'registro_de_propiedad.id_tipo_propiedad', '=', 'type_propertys.id_type_propertys')
                    ->leftJoin('colonies', 'registro_de_propiedad.id_colonia_dueno', '=', 'colonies.id_colonies')
                    ->leftJoin('cities', 'registro_de_propiedad.id_ciudad_propiedad', '=', 'cities.id_cities')
                    ->leftJoin('states', 'registro_de_propiedad.id_estado_propiedad', '=', 'states.id_state')
                    //->leftJoin('prospector', 'registro_de_propiedad.id_prospectores', '=', 'prospector.id_prospectador')
                    //->leftJoin('adviser', 'registro_de_propiedad.id_asesores', '=', 'adviser.id_asesor')
                    
                    ->leftJoin('documents_property', 'registro_de_propiedad.id_doc_propertys', '=', 'documents_property.id_doc_property')
                    ->select('*')
                    ->where('id', '=', $id)
                    ->get();

                    $clients = DB::table('client')->get();
                

            return view('propiedad_cliente', ['propiedades' => $propiedades, 'clients' => $clients]);  
        }else{
            return redirect('home');
        }
    }


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
