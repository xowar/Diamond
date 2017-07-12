<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('register_users');
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
        $dateCreate = date("Y-m-d H:i:s"); 
            DB::table('employees')->insert(
            [
                'name'                      => $request['name'],
                'edad'                      => $request['edad'],
                'curp'                      => $request['curp'],
                'telefono'                  => $request['telefono'],
                'celular'                   => $request['celular'],
                'puesto'                    => $request['puesto'],
                'email'                     => $request['email'],
                'sexo'                      => $request['sexo'],
                'equipo'                    => $request['equipo'],
                'id_roles'                  => $request['id_roles'],
                'fecha_nacimiento'          => $request['fecha_nacimiento'],
                'fecha_ingreso'             => $request['fecha_ingreso'],
                'created_at'                => $dateCreate,
            ]);
            return redirect('home');     
    }

    public function table_users()
    {
        $users = DB::table('employees')
            ->where('employees.status', '=', 1)
            ->paginate(15);

        return view('table_users', ['users' => $users]);  
    }

    public function table_users_delete()
    {
        $users = DB::table('employees')
            ->where('employees.status', '=', 0)
            ->paginate(15);

        return view('table_users_delete', ['users' => $users]);  
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
        $users = DB::table('employees')
                    ->select('*')
                    ->where('id_employees', '=', $id)
                    ->get();

        return view('editar_users', ['users' => $users]);  
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
        $dateUpdate = date("Y-m-d H:i:s"); 
        DB::table('employees')
            ->where('id_employees', $id)
            ->update([
                'name'                      => $request['name'],
                'edad'                      => $request['edad'],
                'curp'                      => $request['curp'],
                'telefono'                  => $request['telefono'],
                'celular'                   => $request['celular'],
                'puesto'                    => $request['puesto'],
                'email'                     => $request['email'],
                'sexo'                      => $request['sexo'],
                'equipo'                    => $request['equipo'],
                'id_roles'                  => $request['id_roles'],
                'fecha_nacimiento'          => $request['fecha_nacimiento'],
                'fecha_ingreso'             => $request['fecha_ingreso'],            
                'updated_at'                 => $dateUpdate,
            ]);

            
            return redirect('home/table_users'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_at = date("d-m-Y"); 

        DB::table('employees')
            ->where('id_employees', $id)
            ->update(['status'                      => 0,
                      'fecha_salida'                => $delete_at,
                    ]);


        return redirect('home/table_users');  
    }

    public function restore($id)
    {
        $delete_at = "00-00-0000"; 

        DB::table('employees')
            ->where('id_employees', $id)
            ->update(['status'                      => 1,
                      'fecha_salida'                => $delete_at,
                    ]);

        return redirect('home/table_users_delete');  

    }
}
