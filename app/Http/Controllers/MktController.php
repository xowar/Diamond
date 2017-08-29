<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


class MktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees          = DB::table('employees')->where('roles', '=', 'Asesor')->get();

        return view('mkt_agregar_proyecto', ['employees' => $employees]);
    }

    public function guardar_proyecto(Request $request)
    {
            DB::table('proyectos')->insert(
            [
                'lider_proyecto'            => $request['lider_proyecto'],
                'sub1'                      => $request['sub1'],
                'sub2'                      => $request['sub2'],
                'sub3'                      => $request['sub3'],
                'sub4'                      => $request['sub4'],
                'latitud'                   => $request['latitud'],
                'longitud'                  => $request['longitud'],
                'renders'                   => $request['renders'],
                'medidas'                   => $request['medidas'],
                'precio_min'                => $request['precio_min'],
                'precio_max'                => $request['precio_max'],
                'caracteristicas'           => $request['caracteristicas'],
                'nombre_inicial'            => $request['nombre_inicial'],
                'precio_cormecializacion'   => $request['precio_cormecializacion'],
                'comision'                  => $request['comision'],
                'comision_mkt'              => $request['comision_mkt'],
            ]);

            return redirect('home'); 
    }

    public function registro_articulo()
    {
        $proyectos      = DB::table('proyectos')->where('status', '=', 1)->get();
        $negocios      = DB::table('negocios')->where('status', '=', 1)->get();

        return view('mkt_registro_articulo', ['proyectos' => $proyectos, 'negocios' => $negocios]);
    }

    public function buscar_por_proyecto(Request $request)
    {
        $proyectos      = DB::table('proyectos')
            ->where('id_proyecto', '=', $request['id_proyectos'])
            ->where('status', '=', 1)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 3)
            ->get();
            
            $comision = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision/100);
            $comisionMKT = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision_mkt/100);
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'proyectos' => $proyectos, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]); 
    }

    public function buscar_por_id(Request $request)
    {
        $propiedades      = DB::table('registro_de_propiedad')
            ->where('id', '=', $request['id_propiedad'])
            ->where('status', '=', 1)
            ->get();


        if (!empty($propiedades)) {
             $commissions      = DB::table('commissions')
            ->where('id_commissions', '=', $propiedades[0]->id_comision)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedad'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedad'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedad'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_propiedad', '=', $request['id_propiedad'])
            ->where('status', '=', 3)
            ->get();
            
            $comision = ($propiedades[0]->precio_venta)*($commissions[0]->comision/100);
            $comision1 = $comision*0.10;
            $comisionMKT = $comision1*0.5;
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar_propiedad', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'propiedades' => $propiedades, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]); 
        }else{
            $proyectos      = DB::table('proyectos')->where('status', '=', 1)->get();
            $negocios      = DB::table('negocios')->where('status', '=', 1)->get();

            return view('mkt_registro_articulo', ['proyectos' => $proyectos, 'negocios' => $negocios]);
        }

       
    }

    public function buscar_por_negocios(Request $request)
    {
        $negocios      = DB::table('negocios')
            ->where('id_negocio', '=', $request['id_negocio'])
            ->where('status', '=', 1)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocio'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocio'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocio'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_negocios', '=', $request['id_negocio'])
            ->where('status', '=', 3)
            ->get();
            
            //$comision = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision/100);
            //$comisionMKT = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision_mkt/100);
            //$comision_libre = ($comision - $comisionMKT);
            //$restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar_negocio', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'negocios' => $negocios, 'employees' => $employees]); 
    }

    public function save_articulo(Request $request)
    {
        DB::table('articulos')->insert(
            [
                'nombre_articulo'       => $request['nombre_articulo'],
                'cantidad'              => $request['cantidad'], 
                'costo'                 => $request['costo'],
                'aprovado_por'          => $request['autorizado'],
                'nota'                  => $request['nota'],
                'proveedor'             => $request['proveedor'],
                'fecha_pedido'          => $request['fecha_pedido'],
                'fecha_entrega'         => $request['fecha_entrega'],
                'solicitado'            => $request['solicitado'],
                'status'                => $request['status_articulo'],
                'id_proyectos'          => $request['id_proyectos'],
                'desarrolladora'          => $request['desarrolladora'],

            ]);

        $proyectos      = DB::table('proyectos')
            ->where('id_proyecto', '=', $request['id_proyectos'])
            ->where('status', '=', 1)
            ->get();
        

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 3)
            ->get();

            $comision = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision/100);
            $comisionMKT = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision_mkt/100);
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'proyectos' => $proyectos, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]); 
       
    }

    public function save_articulo_propiedades(Request $request)
    {
        DB::table('articulos')->insert(
            [
                'nombre_articulo'       => $request['nombre_articulo'],
                'cantidad'              => $request['cantidad'], 
                'costo'                 => $request['costo'],
                'aprovado_por'          => $request['autorizado'],
                'nota'                  => $request['nota'],
                'proveedor'             => $request['proveedor'],
                'fecha_pedido'          => $request['fecha_pedido'],
                'fecha_entrega'         => $request['fecha_entrega'],
                'solicitado'            => $request['solicitado'],
                'status'                => $request['status_articulo'],
                'id_propiedad'        => $request['id_propiedades'],
                'id_proyectos'          => $request['id_proyectos'],
                'desarrolladora'          => $request['desarrolladora'],

            ]);

       $propiedades      = DB::table('registro_de_propiedad')
            ->where('id', '=', $request['id_propiedades'])
            ->where('status', '=', 1)
            ->get();

        $commissions      = DB::table('commissions')
            ->where('id_commissions', '=', $propiedades[0]->id_comision)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 3)
            ->get();
            
            $comision = ($propiedades[0]->precio_venta)*($commissions[0]->comision/100);
            $comision1 = $comision*0.10;
            $comisionMKT = $comision1*0.5;
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar_propiedad', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'propiedades' => $propiedades, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]);
       
    }

    public function proceso($id_articulo, $id_proyecto)
    {
        DB::table('articulos')
            ->where('articulos.id_articulos', '=', $id_articulo)
            ->update(
            [
                'status'              =>  2,
            ]);


        $proyectos      = DB::table('proyectos')
            ->where('id_proyecto', '=', $id_proyecto)
            ->where('status', '=', 1)
            ->get();


        

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_proyectos', '=', $id_proyecto)
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_proyectos', '=', $id_proyecto)
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_proyectos', '=', $id_proyecto)
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_proyectos', '=', $id_proyecto)
            ->where('status', '=', 3)
            ->get();

            $comision = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision/100);
            $comisionMKT = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision_mkt/100);
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'proyectos' => $proyectos, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]); 
       
    }

    public function proceso_propiedades($id_articulo, $id_propiedad)
    {
        DB::table('articulos')
            ->where('articulos.id_articulos', '=', $id_articulo)
            ->update(
            [
                'status'              =>  2,
            ]);

       $propiedades      = DB::table('registro_de_propiedad')
            ->where('id', '=', $id_propiedad)
            ->where('status', '=', 1)
            ->get();

            $commissions      = DB::table('commissions')
            ->where('id_commissions', '=', $propiedades[0]->id_comision)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_propiedad', '=', $id_propiedad)
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_propiedad', '=', $id_propiedad)
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_propiedad', '=', $id_propiedad)
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_propiedad', '=', $id_propiedad)
            ->where('status', '=', 3)
            ->get();

            $comision = ($propiedades[0]->precio_venta)*($commissions[0]->comision/100);
            $comision1 = $comision*0.10;
            $comisionMKT = $comision1*0.5;
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar_propiedad', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'propiedades' => $propiedades, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]);
       
    }

    public function proceso_guardar(Request $request)
    {
        DB::table('articulos')
            ->where('articulos.id_articulos', $request['id_articulo'])
            ->update(
            [
                'status'              =>  2,
            ]);


        $proyectos      = DB::table('proyectos')
            ->where('id_proyecto', '=', $request['id_proyectos'])
            ->where('status', '=', 1)
            ->get();
        

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 3)
            ->get();

            $comision = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision/100);
            $comisionMKT = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision_mkt/100);
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'proyectos' => $proyectos, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]);   
    }


    public function por_autorizar($id)
    {

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos      = DB::table('articulos')
            ->where('id_articulos', '=', $id)
            ->get();


        return view('mkt_verificar_autorizacion', ['articulos' => $articulos, 'employees' => $employees]); 
       
    }


    public function por_autorizar_propiedades($id)
    {

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos      = DB::table('articulos')
            ->where('id_articulos', '=', $id)
            ->get();


        return view('mkt_verificar_autorizacion_propiedades', ['articulos' => $articulos, 'employees' => $employees]); 
       
    }


    public function por_autorizar_guardar(Request $request)
    {
        DB::table('articulos')
            ->where('articulos.id_articulos', $request['id_articulo'])
            ->update(
            [
                'aprovado_por'        =>  $request['employee'],
                'status'              =>  3,
            ]);


        $proyectos      = DB::table('proyectos')
            ->where('id_proyecto', '=', $request['id_proyectos'])
            ->where('status', '=', 1)
            ->get();
        

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_proyectos', '=', $request['id_proyectos'])
            ->where('status', '=', 3)
            ->get();

            $comision = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision/100);
            $comisionMKT = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision_mkt/100);
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'proyectos' => $proyectos, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]);     
    }


    public function por_autorizar_guardar_propiedad(Request $request)
    {
        DB::table('articulos')
            ->where('articulos.id_articulos', $request['id_articulo'])
            ->update(
            [
                'aprovado_por'        =>  $request['employee'],
                'status'              =>  3,
            ]);


        
        $propiedades      = DB::table('registro_de_propiedad')
            ->where('id', '=', $request['id_propiedad'])
            ->where('status', '=', 1)
            ->get();

        $commissions      = DB::table('commissions')
            ->where('id_commissions', '=', $propiedades[0]->id_comision)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedad'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedad'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedad'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_propiedad', '=', $request['id_propiedad'])
            ->where('status', '=', 3)
            ->get();

            $comision = ($propiedades[0]->precio_venta)*($commissions[0]->comision/100);
            $comision1 = $comision*0.10;
            $comisionMKT = $comision1*0.5;
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar_propiedad', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'propiedades' => $propiedades, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]);     
    }




    public function mostrar($id_articulo)
    {
        $articulos = DB::table('articulos')
             ->select('*')
             ->where('id_articulos', "=", $id_articulo)
             ->get();


        return view('mkt_mostrar_articulo', ['articulos' => $articulos]); 
    }

    public function mostrar_propiedad($id_articulo)
    {
        $articulos = DB::table('articulos')
             ->select('*')
             ->where('id_articulos', "=", $id_articulo)
             ->get();

        return view('mkt_mostrar_propiedad', ['articulos' => $articulos]); 
       
    }

    public function mostrar_negocios($id_articulo)
    {
        $articulos = DB::table('articulos')
             ->select('*')
             ->where('id_articulos', "=", $id_articulo)
             ->get();


        return view('mkt_mostrar_negocio', ['articulos' => $articulos]); 
    }


    public function mkt_update_proyectos(Request $request, $id)
    {

        DB::table('articulos')
            ->where('articulos.id_articulos', $id)
            ->update(
            [
                'nombre_articulo'       => $request['nombre_articulo'],
                'cantidad'              => $request['cantidad'], 
                'costo'                 => $request['costo'],
                'aprovado_por'          => $request['autorizado'],
                'nota'                  => $request['nota'],
                'proveedor'             => $request['proveedor'],
                'fecha_pedido'          => $request['fecha_pedido'],
                'fecha_entrega'         => $request['fecha_entrega'],
                'solicitado'            => $request['solicitado'],
                'status'                => $request['status_articulo'],
                'id_proyectos'          => $request['id_proyectos'],
            ]);
       

       $proyectos      = DB::table('proyectos')
            ->where('id_proyecto', '=', $request['id_proyectos'])
            ->where('status', '=', 1)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 3)
            ->get();
            
        $comision = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision/100);
            $comisionMKT = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision_mkt/100);
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'proyectos' => $proyectos, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]);
       
    }


    public function mkt_update_propiedad(Request $request, $id)
    {

        DB::table('articulos')
            ->where('articulos.id_articulos', $id)
            ->update(
            [
                'nombre_articulo'       => $request['nombre_articulo'],
                'cantidad'              => $request['cantidad'], 
                'costo'                 => $request['costo'],
                'aprovado_por'          => $request['autorizado'],
                'nota'                  => $request['nota'],
                'proveedor'             => $request['proveedor'],
                'fecha_pedido'          => $request['fecha_pedido'],
                'fecha_entrega'         => $request['fecha_entrega'],
                'solicitado'            => $request['solicitado'],
                'status'                => $request['status_articulo'],
                'id_propiedad'          => $request['id_propiedades'],
            ]);
       

       $propiedades      = DB::table('registro_de_propiedad')
            ->where('id', '=', $request['id_propiedades'])
            ->where('status', '=', 1)
            ->get();

        $commissions      = DB::table('commissions')
            ->where('id_commissions', '=', $propiedades[0]->id_comision)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_propiedad', '=', $request['id_propiedades'])
            ->where('status', '=', 3)
            ->get();
            
            $comision = ($propiedades[0]->precio_venta)*($commissions[0]->comision/100);
            $comision1 = $comision*0.10;
            $comisionMKT = $comision1*0.5;
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar_propiedad', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'propiedades' => $propiedades, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]);
       
    }


    public function agregar_negocio()
    {
        $employees          = DB::table('employees')->where('roles', '=', 'Asesor')->get();

        return view('mkt_agregar_negocio', ['employees' => $employees]);
    }


    public function guardar_negocio(Request $request)
    {
            DB::table('negocios')->insert(
            [
                'nombre_negocio'            => $request['nombre_negocio'],
                'lider_proyecto'            => $request['lider_proyecto'],
                'sub1'                      => $request['sub1'],
                'sub2'                      => $request['sub2'],
                'sub3'                      => $request['sub3'],
            ]);

            return redirect('home'); 
    }



    public function save_articulo_negocios(Request $request)
    {
        DB::table('articulos')->insert(
            [
                'nombre_articulo'       => $request['nombre_articulo'],
                'cantidad'              => $request['cantidad'], 
                'costo'                 => $request['costo'],
                'aprovado_por'          => $request['autorizado'],
                'nota'                  => $request['nota'],
                'proveedor'             => $request['proveedor'],
                'fecha_pedido'          => $request['fecha_pedido'],
                'fecha_entrega'         => $request['fecha_entrega'],
                'solicitado'            => $request['solicitado'],
                'status'                => $request['status_articulo'],
                'id_negocios'          => $request['id_negocio'],
                'desarrolladora'          => $request['desarrolladora'],

            ]);



        $negocios      = DB::table('negocios')
            ->where('id_negocio', '=', $request['id_negocio'])
            ->where('status', '=', 1)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocio'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocio'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocio'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_negocios', '=', $request['id_negocio'])
            ->where('status', '=', 3)
            ->get();

        return view('mkt_tables_aprovar_negocio', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'negocios' => $negocios, 'employees' => $employees]); 
       
    }


    public function proceso_negocios($id_articulo, $id_negocio)
    {
        DB::table('articulos')
            ->where('articulos.id_articulos', '=', $id_articulo)
            ->update(
            [
                'status'              =>  2,
            ]);


        $negocios      = DB::table('negocios')
            ->where('id_negocio', '=', $id_negocio)
            ->where('status', '=', 1)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_negocios', '=', $id_negocio)
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_negocios', '=', $id_negocio)
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_negocios', '=', $id_negocio)
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_negocios', '=', $id_negocio)
            ->where('status', '=', 3)
            ->get();

        return view('mkt_tables_aprovar_negocio', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'negocios' => $negocios, 'employees' => $employees]); 
       
       
    }

    public function por_autorizar_negocios($id)
    {

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos      = DB::table('articulos')
            ->where('id_articulos', '=', $id)
            ->get();


        return view('mkt_verificar_autorizacion_negocios', ['articulos' => $articulos, 'employees' => $employees]); 
       
    }



    public function por_autorizar_guardar_negocio(Request $request)
    {
        DB::table('articulos')
            ->where('articulos.id_articulos', '=', $request['id_articulo'])
            ->update(
            [
                'aprovado_por'        => $request['employee'],
                'status'              =>  3,
            ]);

        $negocios      = DB::table('negocios')
            ->where('id_negocio', '=', $request['id_negocios'])
            ->where('status', '=', 1)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocios'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocios'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocios'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_negocios', '=', $request['id_negocios'])
            ->where('status', '=', 3)
            ->get();

        return view('mkt_tables_aprovar_negocio', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'negocios' => $negocios, 'employees' => $employees]); 
    }

    public function mkt_update_negocio(Request $request, $id)
    {

        DB::table('articulos')
            ->where('articulos.id_articulos', $id)
            ->update(
            [
                'nombre_articulo'       => $request['nombre_articulo'],
                'cantidad'              => $request['cantidad'], 
                'costo'                 => $request['costo'],
                'aprovado_por'          => $request['autorizado'],
                'nota'                  => $request['nota'],
                'proveedor'             => $request['proveedor'],
                'fecha_pedido'          => $request['fecha_pedido'],
                'fecha_entrega'         => $request['fecha_entrega'],
                'solicitado'            => $request['solicitado'],
                'status'                => $request['status_articulo'],
                'id_negocios'          => $request['id_negocios'],
            ]);
       

        $negocios      = DB::table('negocios')
            ->where('id_negocio', '=', $request['id_negocios'])
            ->where('status', '=', 1)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocios'])
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocios'])
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_negocios', '=', $request['id_negocios'])
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_negocios', '=', $request['id_negocios'])
            ->where('status', '=', 3)
            ->get();

        return view('mkt_tables_aprovar_negocio', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'negocios' => $negocios, 'employees' => $employees]); 
    }


    public function eliminar_articulo($id_articulos, $id_proyectos)
    {

            DB::table('articulos')
            ->where('articulos.id_articulos', $id_articulos)
            ->update(
            [
                'status' => 0,
            ]);

       $proyectos      = DB::table('proyectos')
            ->where('id_proyecto', '=', $id_proyectos)
            ->where('status', '=', 1)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_proyectos', '=', $id_proyectos)
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_proyectos', '=', $id_proyectos)
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_proyectos', '=', $id_proyectos)
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_proyectos', '=', $id_proyectos)
            ->where('status', '=', 3)
            ->get();
            
            $comision = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision/100);
            $comisionMKT = ($proyectos[0]->precio_cormecializacion)*($proyectos[0]->comision_mkt/100);
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'proyectos' => $proyectos, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]); 
       
    }


    public function eliminar_negocios($id_articulos, $id_negocios)
    {

            DB::table('articulos')
            ->where('articulos.id_articulos', $id_articulos)
            ->update(
            [
                'status' => 0,
            ]);

        $negocios      = DB::table('negocios')
            ->where('id_negocio', '=', $id_negocios)
            ->where('status', '=', 1)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_negocios', '=', $id_negocios)
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_negocios', '=', $id_negocios)
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_negocios', '=', $id_negocios)
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_negocios', '=', $id_negocios)
            ->where('status', '=', 3)
            ->get();

        return view('mkt_tables_aprovar_negocio', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'negocios' => $negocios, 'employees' => $employees]); 
       
    }

        public function eliminar_propiedad($id_articulos, $id_propiedad)
    {

            DB::table('articulos')
            ->where('articulos.id_articulos', $id_articulos)
            ->update(
            [
                'status' => 0,
            ]);

        $propiedades      = DB::table('registro_de_propiedad')
            ->where('id', '=', $id_propiedad)
            ->where('status', '=', 1)
            ->get();

        $commissions      = DB::table('commissions')
            ->where('id_commissions', '=', $propiedades[0]->id_comision)
            ->get();

        $employees      = DB::table('employees')
            ->where('status', '!=', 2)
            ->get();

        $articulos1      = DB::table('articulos')
            ->where('id_propiedad', '=', $id_propiedad)
            ->where('status', '=', 1)
            ->get();

        $articulos2      = DB::table('articulos')
            ->where('id_propiedad', '=', $id_propiedad)
            ->where('status', '=', 2)
            ->get();

        $articulos3      = DB::table('articulos')
            ->where('id_propiedad', '=', $id_propiedad)
            ->where('status', '=', 3)
            ->get();


        $total = DB::table('articulos')
            ->select( DB::raw('SUM(costo) as total_sales'))
            ->where('id_propiedad', '=', $id_propiedad)
            ->where('status', '=', 3)
            ->get();

            $comision = ($propiedades[0]->precio_venta)*($commissions[0]->comision/100);
            $comision1 = $comision*0.10;
            $comisionMKT = $comision1*0.5;
            $comision_libre = ($comision - $comisionMKT);
            $restanteMKT = ($comisionMKT - $total[0]->total_sales);

        return view('mkt_tables_aprovar_propiedad', ['articulos1' => $articulos1, 'articulos2' => $articulos2, 'articulos3' => $articulos3, 'total' => $total, 'propiedades' => $propiedades, 'employees' => $employees, 'comision' => $comision, 'comisionMKT' => $comisionMKT, 'comision_libre' => $comision_libre, 'restanteMKT'=> $restanteMKT]);     
       
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
