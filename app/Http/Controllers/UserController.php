<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use DateTime;

class UserController extends Controller
{


    public function index($puesto)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['crear_empleado'] == "1") {
           $roles = DB::table('roles')->get();
           $oficinas = DB::table('offices')->get();

            return view('register_users', ['roles' => $roles, 'oficinas' => $oficinas]);
            
        }else{
            return redirect('home');
        }
       
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
         $random = str_random(7);

        if (!empty($request->file('doc_ine'))) {
            //obtenemos el campo file definido en el formulario
            $fileINE = $request->file('doc_ine');
            //obtenemos el nombre del archivo
            $nombreINE = $fileINE->getClientOriginalName();
            $nombreINE = 'INE-Empleado-'.$random.$fileINE->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreINE,  \File::get($fileINE));
            //obtenemos la url
            $public_pathINE = public_path();
            $urlINE = '/documents/'.$nombreINE;
        }else{
            $urlINE = "";
            $nombreINE = "";
        }
        if (!empty($request->file('doc_rfc'))) {
            //obtenemos el campo file definido en el formulario
            $fileRFC = $request->file('doc_rfc');
            //obtenemos el nombre del archivo
            $nombreRFC = $fileRFC->getClientOriginalName();
            $nombreRFC = 'RFC-Empleado-'.$random.$fileRFC->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreRFC,  \File::get($fileRFC));
            //obtenemos la url
            $public_pathRFC = public_path();
            $urlRFC = '/documents/'.$nombreRFC;
        }else{
            $urlRFC = "";
            $nombreRFC = "";
        }
        if (!empty($request->file('doc_curp'))) {
            //obtenemos el campo file definido en el formulario
            $fileCURP = $request->file('doc_curp');
            //obtenemos el nombre del archivo
            $nombreCURP = $fileCURP->getClientOriginalName();
            $nombreCURP = 'CURP-Empleado-'.$random.$fileCURP->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreCURP,  \File::get($fileCURP));
            //obtenemos la url
            $public_pathCURP = public_path();
            $urlCURP = '/documents/'.$nombreCURP;
        }else{
            $urlCURP = "";
            $nombreCURP = "";
        }
        if (!empty($request->file('doc_comprobante_domicilio'))) {
            //obtenemos el campo file definido en el formulario
            $fileComprobante_Domicilio = $request->file('doc_comprobante_domicilio');
            //obtenemos el nombre del archivo
            $nombreComprobante_Domicilio = $fileComprobante_Domicilio->getClientOriginalName();
            $nombreComprobante_Domicilio = 'COMPROBANTE_DE_DOMICILIO-Empleado-'.$random.$fileComprobante_Domicilio->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreComprobante_Domicilio,  \File::get($fileComprobante_Domicilio));
            //obtenemos la url
            $public_pathComprobante_Domicilio = public_path();
            $urlComprobante_Domicilio = '/documents/'.$nombreComprobante_Domicilio;
        }else{
            $urlComprobante_Domicilio = "";
            $nombreComprobante_Domicilio = "";
        }
        if (!empty($request->file('doc_acta_nacimiento'))) {
            //obtenemos el campo file definido en el formulario
            $fileActa_Nacimiento = $request->file('doc_acta_nacimiento');
            //obtenemos el nombre del archivo
            $nombreActa_Nacimiento = $fileActa_Nacimiento->getClientOriginalName();
            $nombreActa_Nacimiento = 'ACTA_DE_NACIMIENTO-Empleado-'.$random.$fileActa_Nacimiento->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreActa_Nacimiento,  \File::get($fileActa_Nacimiento));
            //obtenemos la url
            $public_pathActa_Nacimiento = public_path();
            $urlActa_Nacimiento = '/documents/'.$nombreActa_Nacimiento;
        }else{
            $urlActa_Nacimiento = "";
            $nombreActa_Nacimiento = "";
        }
        if (!empty($request->file('doc_carta_no_antecedentes'))) {
            //obtenemos el campo file definido en el formulario
            $fileNo_Antecedentes = $request->file('doc_carta_no_antecedentes');
            //obtenemos el nombre del archivo
            $nombreNo_Antecedentes = $fileNo_Antecedentes->getClientOriginalName();
            $nombreNo_Antecedentes = 'CARTA_DE_NO_ANTECEDENTES-Empleado-'.$random.$fileNo_Antecedentes->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreNo_Antecedentes,  \File::get($fileNo_Antecedentes));
            //obtenemos la url
            $public_pathNo_Antecedentes = public_path();
            $urlNo_Antecedentes = '/documents/'.$nombreNo_Antecedentes;
        }else{
            $urlNo_Antecedentes = "";
            $nombreNo_Antecedentes = "";
        }
        if (!empty($request->file('doc_referencia_laboral'))) {
            //obtenemos el campo file definido en el formulario
            $fileReferencia_Laboral = $request->file('doc_referencia_laboral');
            //obtenemos el nombre del archivo
            $nombreReferencia_Laboral = $fileReferencia_Laboral->getClientOriginalName();
            $nombreReferencia_Laboral = 'CARTA_DE_REFERENCIA_LABORAL-Empleado-'.$random.$fileReferencia_Laboral->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreReferencia_Laboral,  \File::get($fileReferencia_Laboral));
            //obtenemos la url
            $public_pathReferencia_Laboral = public_path();
            $urlReferencia_Laboral = '/documents/'.$nombreReferencia_Laboral;
        }else{
            $urlReferencia_Laboral = "";
            $nombreReferencia_Laboral = "";
        }
        if (!empty($request->file('doc_referencia_personal'))) {
            //obtenemos el campo file definido en el formulario
            $fileReferencia_Personal = $request->file('doc_referencia_personal');
            //obtenemos el nombre del archivo
            $nombreReferencia_Personal = $fileReferencia_Personal->getClientOriginalName();
            $nombreReferencia_Personal = 'CARTA_DE_REFERENCIA_PERSONAL-Empleado-'.$random.$fileReferencia_Personal->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreReferencia_Personal,  \File::get($fileReferencia_Personal));
            //obtenemos la url
            $public_pathReferencia_Personal = public_path();
            $urlReferencia_Personal = '/documents/'.$nombreReferencia_Personal;
        }else{
            $urlReferencia_Personal = "";
            $nombreReferencia_Personal = "";
        }

        $validator = Validator::make($request->all(), [
            'name'              => 'required|max:50',
            'edad'              => 'required|max:3',
            'curp'              => 'required|max:18',
            'email'             => 'required|email|unique:users',
            'sexo'              => 'required',
            'roles'             => 'required',
            'fecha_nacimiento'  => 'required|max:10|min:10',
            'fecha_ingreso'     => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator->errors())
            ->withInput();
        }


            DB::table('employees')->insert(
            [
                'name'                      => $request['name'],
                'edad'                      => $request['edad'],
                'curp'                      => $request['curp'],
                'telefono'                  => $request['telefono'],
                'celular'                   => $request['celular'],
                'email'                     => $request['email'],
                'sexo'                      => $request['sexo'],
                'equipo'                    => $request['equipo'],
                'roles'                     => $request['roles'],
                'oficina'                   => $request['oficina'],
                'estado_civil'              => $request['estado_civil'],
                'fecha_comprobante'         => $request['fecha_comprobante'],
                'fecha_ine'                 => $request['fecha_ine'],
                'grado_escolaridad'         => $request['grado_escolaridad'],
                'fecha_nacimiento'          => $request['fecha_nacimiento'],

                'fecha_ingreso'             => $request['fecha_ingreso'],


                'doc_ine'                          => $urlINE,    
                'nombre_doc_ine'                   => $nombreINE,
                'doc_rfc'                          => $urlRFC,    
                'nombre_doc_rfc'                   => $nombreRFC,
                'doc_curp'                         => $urlCURP,    
                'nombre_doc_curp'                  => $nombreCURP,
                'doc_comprobante_domicilio'        => $urlComprobante_Domicilio,    
                'nombre_doc_comprobante_domicilio' => $nombreComprobante_Domicilio,
                'doc_Acta_Nacimiento'              => $urlActa_Nacimiento,
                'nombre_Acta_Nacimiento'           => $nombreActa_Nacimiento,
                'doc_carta_no_antecedentes'        => $urlNo_Antecedentes,
                'nombre_carta_no_antecedentes'     => $nombreNo_Antecedentes,
                'doc_referencia_laboral'           => $urlReferencia_Laboral,
                'nombre_Referencia_Laboral'        => $nombreReferencia_Laboral,
                'doc_referencia_personal'          => $urlReferencia_Personal,
                'nombre_Referencia_personal'       => $nombreReferencia_Personal,
            ]);
            return redirect('home');    
    }

    public function table_users($puesto)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['datos_empleado'] == "1") {
            $users = DB::table('employees')
            ->where('employees.status', '=', 1)
            ->paginate(15);

                foreach ($users as $key) {
                    $fechaActual = date("Y/m/d");

                    $fechaINE1 = new DateTime($key->fecha_ine);
                    $fechaINE2 = new DateTime($fechaActual);
                    $fechaINE = $fechaINE1->diff($fechaINE2);
                    $fechaINE3 = $fechaINE->format('%a');

                    $fechaCOMP1 = new DateTime($key->fecha_comprobante);
                    $fechaCOMP2 = new DateTime($fechaActual);
                    $fechaCOMP = $fechaCOMP1->diff($fechaCOMP2);
                    $fechaCOMP3 = $fechaCOMP->format('%a');


                        if ($fechaINE3 == 0 || $fechaCOMP3 == 0) {
                            DB::table('employees')
                            ->where('id_employees', "=", $key->id_employees)
                            ->update(['status' => 3,
                        ]);
                    }
                }

            return view('table_users', ['users' => $users]);  
            
        }else{
            return redirect('home');
        }
    }

    public function table_users_delete($puesto)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['empleados_eliminados'] == "1") {
            $users = DB::table('employees')
                ->where('employees.status', '=', 0)
                ->paginate(15);


            return view('table_users_delete', ['users' => $users]); 
            
        }else{
            return redirect('home');
        }
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
    public function edit($puesto, $id)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['editar_empleado'] == "1") {
        $users = DB::table('employees')
                        ->select('*')
                        ->where('id_employees', '=', $id)
                        ->get();

            $roles = DB::table('roles')->get();
            $oficinas = DB::table('offices')->get();

            return view('editar_users', ['users' => $users, 'roles' => $roles]);

        }else{
            return redirect('home');
        } 
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
        $random = str_random(7);

        if (!empty($request->file('doc_ine'))) {
            //obtenemos el campo file definido en el formulario
            $fileINE = $request->file('doc_ine');
            //obtenemos el nombre del archivo
            $nombreINE = $fileINE->getClientOriginalName();
            $nombreINE = 'INE-Empleado-'.$random.$fileINE->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreINE,  \File::get($fileINE));
            //obtenemos la url
            $public_pathINE = public_path();
            $urlINE = '/documents/'.$nombreINE;
        }else{
            $urlINE = $request['urlINE'];
            $nombreINE = $request['nombreINE'];
        }
        if (!empty($request->file('doc_rfc'))) {
            //obtenemos el campo file definido en el formulario
            $fileRFC = $request->file('doc_rfc');
            //obtenemos el nombre del archivo
            $nombreRFC = $fileRFC->getClientOriginalName();
            $nombreRFC = 'RFC-Empleado-'.$random.$fileRFC->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreRFC,  \File::get($fileRFC));
            //obtenemos la url
            $public_pathRFC = public_path();
            $urlRFC = '/documents/'.$nombreRFC;
        }else{
            $urlRFC = $request['urlRFC'];
            $nombreRFC = $request['nombreRFC'];
        }
        if (!empty($request->file('doc_curp'))) {
            //obtenemos el campo file definido en el formulario
            $fileCURP = $request->file('doc_curp');
            //obtenemos el nombre del archivo
            $nombreCURP = $fileCURP->getClientOriginalName();
            $nombreCURP = 'CURP-Empleado-'.$random.$fileCURP->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreCURP,  \File::get($fileCURP));
            //obtenemos la url
            $public_pathCURP = public_path();
            $urlCURP = '/documents/'.$nombreCURP;
        }else{
            $urlCURP = $request['urlCURP'];
            $nombreCURP = $request['nombreCURP'];
        }
        if (!empty($request->file('doc_acta_nacimiento'))) {
            //obtenemos el campo file definido en el formulario
            $fileActa_Nacimiento = $request->file('doc_acta_nacimiento');
            //obtenemos el nombre del archivo
            $nombreActa_Nacimiento = $fileActa_Nacimiento->getClientOriginalName();
            $nombreActa_Nacimiento = 'ACTA_DE_NACIMIENTO-Empleado-'.$random.$fileActa_Nacimiento->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreActa_Nacimiento,  \File::get($fileActa_Nacimiento));
            //obtenemos la url
            $public_pathActa_Nacimiento = public_path();
            $urlActa_Nacimiento = '/documents/'.$nombreActa_Nacimiento;
        }else{
            $urlActa_Nacimiento = $request['urlActa_Nacimiento'];
            $nombreActa_Nacimiento = $request['nombreActa_Nacimiento'];
        }
        if (!empty($request->file('doc_comprobante_domicilio'))) {
            //obtenemos el campo file definido en el formulario
            $fileComprobante_Domicilio = $request->file('doc_comprobante_domicilio');
            //obtenemos el nombre del archivo
            $nombreComprobante_Domicilio = $fileComprobante_Domicilio->getClientOriginalName();
            $nombreComprobante_Domicilio = 'COMPROBANTE_DE_DOMICILIO-Empleado-'.$random.$fileComprobante_Domicilio->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreComprobante_Domicilio,  \File::get($fileComprobante_Domicilio));
            //obtenemos la url
            $public_pathComprobante_Domicilio = public_path();
            $urlComprobante_Domicilio = '/documents/'.$nombreComprobante_Domicilio;
        }else{
            $urlComprobante_Domicilio = $request['urlComprobante_Domicilio'];
            $nombreComprobante_Domicilio = $request['nombreComprobante_Domicilio'];
        }
        if (!empty($request->file('doc_carta_no_antecedentes'))) {
            //obtenemos el campo file definido en el formulario
            $fileNo_Antecedentes = $request->file('doc_carta_no_antecedentes');
            //obtenemos el nombre del archivo
            $nombreNo_Antecedentes = $fileNo_Antecedentes->getClientOriginalName();
            $nombreNo_Antecedentes = 'CARTA_DE_NO_ANTECEDENTES-Empleado-'.$random.$fileNo_Antecedentes->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreNo_Antecedentes,  \File::get($fileNo_Antecedentes));
            //obtenemos la url
            $public_pathNo_Antecedentes = public_path();
            $urlNo_Antecedentes = '/documents/'.$nombreNo_Antecedentes;
        }else{
            $urlNo_Antecedentes = $request['urlNo_Antecedentes'];
            $nombreNo_Antecedentes = $request['nombreNo_Antecedentes'];
        }
        if (!empty($request->file('doc_referencia_laboral'))) {
            //obtenemos el campo file definido en el formulario
            $fileReferencia_Laboral = $request->file('doc_referencia_laboral');
            //obtenemos el nombre del archivo
            $nombreReferencia_Laboral = $fileReferencia_Laboral->getClientOriginalName();
            $nombreReferencia_Laboral = 'CARTA_DE_REFERENCIA_LABORAL-Empleado-'.$random.$fileReferencia_Laboral->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreReferencia_Laboral,  \File::get($fileReferencia_Laboral));
            //obtenemos la url
            $public_pathReferencia_Laboral = public_path();
            $urlReferencia_Laboral = '/documents/'.$nombreReferencia_Laboral;
        }else{
            $urlReferencia_Laboral = $request['urlReferencia_Laboral'];
            $nombreReferencia_Laboral = $request['nombreReferencia_Laboral'];
        }
        if (!empty($request->file('doc_referencia_personal'))) {
            //obtenemos el campo file definido en el formulario
            $fileReferencia_Personal = $request->file('doc_referencia_personal');
            //obtenemos el nombre del archivo
            $nombreReferencia_Personal = $fileReferencia_Personal->getClientOriginalName();
            $nombreReferencia_Personal = 'CARTA_DE_REFERENCIA_PERSONAL-Empleado-'.$random.$fileReferencia_Personal->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreReferencia_Personal,  \File::get($fileReferencia_Personal));
            //obtenemos la url
            $public_pathReferencia_Personal = public_path();
            $urlReferencia_Personal = '/documents/'.$nombreReferencia_Personal;
        }else{
            $urlReferencia_Personal = $request['urlReferencia_Personal'];
            $nombreReferencia_Personal = $request['nombreReferencia_Personal'];
        }

        $validator = Validator::make($request->all(), [
            'name'              => 'required|max:50',
            'edad'              => 'required|max:3',
            'curp'              => 'required|max:18',
            'email'             => 'required|email|unique:users',
            'sexo'              => 'required',
            'roles'             => 'required',
            'fecha_nacimiento'  => 'required|max:10|min:10',
            'fecha_ingreso'     => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator->errors())
            ->withInput();
        }
        
        $dateUpdate = date("Y-m-d H:i:s"); 
        DB::table('employees')
            ->where('id_employees', $id)
            ->update([
                'name'                      => $request['name'],
                'edad'                      => $request['edad'],
                'curp'                      => $request['curp'],
                'telefono'                  => $request['telefono'],
                'celular'                   => $request['celular'], 
                'email'                     => $request['email'],
                'sexo'                      => $request['sexo'],
                'equipo'                    => $request['equipo'],
                'roles'                     => $request['roles'],
                'oficina'                   => $request['oficina'],
                'oficina'                   => $request['oficina'],
                'estado_civil'              => $request['estado_civil'],
                'grado_escolaridad'         => $request['grado_escolaridad'],
                'fecha_comprobante'         => $request['fecha_comprobante'],
                'fecha_ine'                 => $request['fecha_ine'],
                'fecha_ingreso'             => $request['fecha_ingreso'],            
                'updated_at'                => $dateUpdate,

                'doc_ine'                          => $urlINE,    
                'nombre_doc_ine'                   => $nombreINE,
                'doc_rfc'                          => $urlRFC,    
                'nombre_doc_rfc'                   => $nombreRFC,
                'doc_curp'                         => $urlCURP,    
                'nombre_doc_curp'                  => $nombreCURP,
                'doc_comprobante_domicilio'        => $urlComprobante_Domicilio,    
                'nombre_doc_comprobante_domicilio' => $nombreComprobante_Domicilio,
                'doc_Acta_Nacimiento'              => $urlActa_Nacimiento,
                'nombre_Acta_Nacimiento'           => $nombreActa_Nacimiento,
                'doc_carta_no_antecedentes'           => $urlNo_Antecedentes,
                'nombre_carta_no_antecedentes'        => $nombreNo_Antecedentes,
                'doc_referencia_laboral'           => $urlReferencia_Laboral,
                'nombre_Referencia_Laboral'        => $nombreReferencia_Laboral,
                'doc_referencia_personal'          => $urlReferencia_Personal,
                'nombre_Referencia_personal'       => $nombreReferencia_Personal,
            ]);

            
            return view('home'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($puesto, $id)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['eliminar_empleado'] == "1") {
            $delete_at = date("d-m-Y"); 

            DB::table('employees')
                ->where('id_employees', $id)
                ->update(['status'                      => 0,
                          'fecha_salida'                => $delete_at,
                        ]);

            $roles = DB::table('roles')->get();

            return view('register_users', ['roles' => $roles,]);
            //return redirect('home/table_users');    
        }else{
            return redirect('home');
        }
    }

    public function restore($puesto, $id)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['restaurar_empleado'] == "1") {
            $delete_at = "00-00-0000"; 

            DB::table('employees')
                ->where('id_employees', $id)
                ->update(['status'                      => 1,
                          'fecha_salida'                => $delete_at,
                        ]);
            $roles = DB::table('roles')->get();

            return view('register_users', ['roles' => $roles,]);
            //return redirect('home/table_users_delete');     
        }else{
            return redirect('home');
        }
    }

    public function documentos($id)
    {
        $documents = DB::table('employees')
                    ->select('*')
                    ->where('id_employees', '=', $id)
                    ->get();

        return view('documents_employees', ['documents' => $documents]);  
    }

    public function table_users_renew($puesto)
    {
        $permisos = DB::table('roles')->where('rol', "=", $puesto)->get();
        $permisos = (array)$permisos[0];

        if (Auth::user()->puesto == $permisos['rol'] & $permisos['renovar_documentos'] == "1") {
            $users = DB::table('employees')
            ->where('employees.status', '=', 3)
            ->paginate(15);

                            foreach ($users as $key) {
                    $fechaActual = date("Y/m/d");

                    $fechaINE1 = new DateTime($key->fecha_ine);
                    $fechaINE2 = new DateTime($fechaActual);
                    $fechaINE = $fechaINE1->diff($fechaINE2);
                    $fechaINE3 = $fechaINE->format('%a');

                    $fechaCOMP1 = new DateTime($key->fecha_comprobante);
                    $fechaCOMP2 = new DateTime($fechaActual);
                    $fechaCOMP = $fechaCOMP1->diff($fechaCOMP2);
                    $fechaCOMP3 = $fechaCOMP->format('%a');


                        if ($fechaINE3 != "0" && $fechaCOMP3 != "0") {
                            DB::table('employees')
                            ->where('id_employees', "=", $key->id_employees)
                            ->update(['status' => 1,
                        ]);
                    }
                }

            return view('table_users', ['users' => $users]);  
            
        }else{
            return redirect('home');
        }
    }
}
