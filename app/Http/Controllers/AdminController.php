<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($puesto)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['crear_cuenta'] == "1") {
        $users = DB::table('employees')
            ->where('employees.status', '=', 1)
            ->paginate(15);

        return view('admin_table_users', ['users' => $users]); 
            
        }else{
            return redirect('home');
        }
    }

    public function admin_create_acc($puesto, $id)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['agregar_cuenta'] == "1") {
            $users = DB::table('employees')
                        ->select('*')
                        ->where('id_employees', '=', $id)
                        ->get();

            return view('admin_create_acc', ['users' => $users]);
            
        }else{
            return redirect('home');
        } 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $dateCreate = date("Y-m-d H:i:s"); 
            DB::table('users')->insert(
            [
                'name'                      => $request['name'],
                'email'                     => $request['email'], 
                'password'                  => bcrypt($request['password']),
                'remember_token'            => $request['_token'],
                'puesto'                    => $request['roles'],
                'oficina'                   => $request['oficina'],
                'created_at'                => $dateCreate,
                'updated_at'                => $dateCreate,
            ]);

            $id_users = DB::table('users')
             ->select(DB::raw('MAX(id) as id'))
             ->get();
            $id_users = (array)$id_users[0];

            DB::table('employees')
            ->where('id_employees', $id)
            ->update([
                'id_user'   => $id_users['id'],
            ]);

            $users = DB::table('employees')
                ->where('employees.status', '=', 1)
                ->paginate(15);

            return view('admin_table_users', ['users' => $users]); 
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_acc($puesto, $id)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['eliminar_cuenta'] == "1") {
            $id_users = DB::table('employees')
                ->select('id_user')
                ->where('id_employees', $id)
                ->get();

             $id_users = (array)$id_users[0];

            DB::table('users')
                ->where('id', '=', $id_users['id_user'])
                ->delete();

            DB::table('employees')
            ->where('id_employees', $id)
            ->update(['id_user'   => '0',]);
            
            $users = DB::table('employees')
            ->where('employees.status', '=', 1)
            ->paginate(15);

            return view('admin_table_users', ['users' => $users]);  
            
        }else{
            return redirect('home');
        }
        
    }

    public function agregar_info($puesto)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['agregar_informacion'] == "1") {
        $users = DB::table('employees')
            ->where('employees.status', '=', 1)
            ->paginate(15);

        $states   = DB::table('states')->get();
        $roles   = DB::table('roles')->get();

        return view('agregar_info', ['states' => $states, 'roles' => $roles]); 
            
        }else{
            return redirect('home');
        }

    }


    public function add_colonia(Request $request)
    {
            DB::table('colonies')->insert(
            [
                'colonia'    => $request['colonia'],
            ]);

            return redirect('home/agregar_info');
    }

    public function add_ciudad(Request $request)
    {
            DB::table('cities')->insert(
            [
                'ciudades'    => $request['ciudades'],
            ]);

            return redirect('home/agregar_info');
    }

    public function add_estados(Request $request)
    {
            DB::table('states')->insert(
            [
                'estados'    => $request['estados'],
            ]);

            return redirect('home/agregar_info');
    }

    public function add_oficinas(Request $request)
    {
            DB::table('offices')->insert(
            [
                'oficina'    => $request['oficina'],
                'cod_oficina'    => $request['codigo'],
                'id_states'    => $request['codigo'],
            ]);

            return redirect('home/agregar_info');
    }

    public function add_creditos(Request $request)
    {
            DB::table('credits')->insert(
            [
                'creditos'    => $request['creditos'],
            ]);

            return redirect('home/agregar_info');
    }

    public function add_comiciones(Request $request)
    {
            DB::table('commissions')->insert(
            [
                'comision'    => $request['comision'],
            ]);

            return redirect('home/agregar_info');
    }

    public function add_tipo_propiedad(Request $request)
    {
            DB::table('type_propertys')->insert(
            [
                'tipo_propiedad'    => $request['tipo_propiedad'],
                'iden_propiedad'    => $request['identificador'],
            ]);

            return redirect('home/agregar_info');
    }

    public function add_razon_eliminar(Request $request)
    {
            DB::table('rason_to_delete')->insert(
            [
                'reason'    => $request['reason'],
            ]);

            return redirect('home/agregar_info');
    }

    public function add_puesto(Request $request)
    {
            DB::table('roles')->insert(
            [
                'rol'    => $request['puesto'],
            ]);

            return redirect('home/agregar_info');
    }

    public function agregar_permiso(Request $request)
    {
        $permisos = DB::table('roles')->where('rol', "=", $request['puesto'])->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['agregar_permisos'] == "1") {
             $puestos = DB::table('roles')
                ->where('roles.id_rol', '=', $request['add_permiso'])
                ->paginate(15); 

            return view('agregar_permisos', ['puestos' => $puestos]);    
        }else{
            return redirect('home');
        }
       
    }

    public function update(Request $request, $id)
    {
        DB::table('roles')
            ->where('id_rol', $id)
            ->update([
                'registro_propiedad'        => $request['registro_propiedad'],
                'datos_propiedad'           => $request['datos_propiedad'],
                'editar_propiedad'          => $request['editar_propiedad'],
                'eliminar_propiedad'        => $request['eliminar_propiedad'],
                'propiedades_eliminadas'    => $request['propiedades_eliminadas'],
                'restaurar_propiedad'       => $request['restaurar_propiedad'],
                'crear_empleado'            => $request['crear_empleado'],
                'datos_empleado'            => $request['datos_empleado'],
                'editar_empleado'           => $request['editar_empleado'],
                'eliminar_empleado'         => $request['eliminar_empleado'],
                'empleados_eliminados'      => $request['empleados_eliminados'],
                'restaurar_empleado'        => $request['restaurar_empleado'],
                'eliminar_propiedad'        => $request['eliminar_propiedad'],
                'crear_cuenta'              => $request['crear_cuenta'],
                'agregar_cuenta'            => $request['agregar_cuenta'],
                'eliminar_cuenta'           => $request['eliminar_cuenta'],
                'agregar_informacion'       => $request['agregar_informacion'],
                'reportes_excel'            => $request['reportes_excel'],
                'visitas'                   => $request['visitas'],
            ]);

        return redirect('home');
    }


}
