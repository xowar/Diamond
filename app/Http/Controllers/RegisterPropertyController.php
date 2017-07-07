<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function register_property()
    {
        $colonies           = DB::table('colonies')->get();
        $cities             = DB::table('cities')->get();
        $states             = DB::table('states')->get();
        $commissions        = DB::table('commissions')->get();
        $type_propertys     = DB::table('type_propertys')->get();
        $prospector         = DB::table('prospector')->get();
        $adviser            = DB::table('adviser')->get();

        return view('register_property', ['colonies' => $colonies, 'cities' => $cities, 'states' => $states, 'commissions' => $commissions, 'type_propertys' => $type_propertys, 'prospector' => $prospector, 'adviser' => $adviser]);  
    }

    public function store(Request $request)
    {   

        $random = str_random(7);

        if (!empty($request->file('doc_ine1'))) {
            //INE
            //obtenemos el campo file definido en el formulario
            $fileINE1 = $request->file('doc_ine1');
            //obtenemos el nombre del archivo
            $nombreINE1 = $fileINE1->getClientOriginalName();
            $nombreINE1 = $random.'-INE-'.$fileINE1->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreINE1,  \File::get($fileINE1));
            //obtenemos la url
            $public_pathINE1 = public_path();
            $urlINE1 = $public_pathINE1.'/documents/'.$nombreINE1;
        }else{
            $urlINE1 = "";
        }
        if (!empty($request->file('doc_rfc1'))) {
            //RFC
            //obtenemos el campo file definido en el formulario
            $fileRFC1 = $request->file('doc_rfc1');
            //obtenemos el nombre del archivo
            $nombreRFC1 = $fileRFC1->getClientOriginalName();
            $nombreRFC1 = $random1.'-RFC-'.$fileRFC1->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreRFC1,  \File::get($fileRFC1));
            //obtenemos la url
            $public_pathRFC1 = public_path();
            $urlRFC1 = $public_pathINE1.'/documents/'.$nombreRFC1;
            }else{
                $urlRFC1 = "";
            }
        if (!empty($request->file('doc_TipoPersona1'))) {
            //TIPO DE PERSONA
            //obtenemos el campo file definido en el formulario
            $fileTipoPersona1 = $request->file('doc_TipoPersona1');
            //obtenemos el nombre del archivo
            $nombreTipoPersona1 = $fileTipoPersona1->getClientOriginalName();
            $nombreTipoPersona1 = $random.'-TipoPersona-'.$fileTipoPersona1->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreTipoPersona1,  \File::get($fileTipoPersona1));
            //obtenemos la url
            $public_pathTipoPersona1 = public_path();
            $urlPersona1 = $public_pathTipoPersona1.'/documents/'.$nombreTipoPersona1;
        }else{
           $urlPersona1 = "";
        }
        if (!empty($request->file('doc_ActaNacimiento1'))) {
            //ACTA DE NACIMIENTO
            //obtenemos el campo file definido en el formulario
            $fileActaNacimiento1 = $request->file('doc_ActaNacimiento1');
            //obtenemos el nombre del archivo
            $nombreActaNacimiento1 = $fileActaNacimiento1->getClientOriginalName();
            $nombreActaNacimiento1 = $random.'-ActaNacimiento-'.$fileActaNacimiento1->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreActaNacimiento1,  \File::get($fileActaNacimiento1));
            //obtenemos la url
            $public_pathActaNacimiento1 = public_path();
            $urlActaNacimiento1 = $public_pathActaNacimiento1.'/documents/'.$nombreActaNacimiento1;
        }else{
           $urlActaNacimiento1 = "";
        }
        if (!empty($request->file('doc_curp1'))) {
            //CRUP
            //obtenemos el campo file definido en el formulario
            $fileCURP1 = $request->file('doc_curp1');
            //obtenemos el nombre del archivo
            $nombreCURP1 = $fileCURP1->getClientOriginalName();
            $nombreCURP1 = $random.'-CURP-'.$fileCURP1->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreCURP1,  \File::get($fileCURP1));
            //obtenemos la url
            $public_pathCURP1 = public_path();
            $urlCURP1 = $public_pathCURP1.'/documents/'.$nombreCURP1;
        }else{
           $urlCURP1 = "";
        }
        if (!empty($request->file('doc_ine2'))) {
            //INE
            //obtenemos el campo file definido en el formulario
            $fileINE2 = $request->file('doc_ine2');
            //obtenemos el nombre del archivo
            $nombreINE2 = $fileINE2->getClientOriginalName();
            $nombreINE2 = $random.'-INE-'.$fileINE2->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreINE2,  \File::get($fileINE2));
            //obtenemos la url
            $public_pathINE2 = public_path();
            $urlINE2 = $public_pathINE2.'/documents/'.$nombreINE2;
        }else{
            $urlINE2 = "";
        }
        if (!empty($request->file('doc_rfc2'))) {
            //RFC
            //obtenemos el campo file definido en el formulario
            $fileRFC2 = $request->file('doc_rfc2');
            //obtenemos el nombre del archivo
            $nombreRFC2 = $fileRFC2->getClientOriginalName();
            $nombreRFC2 = $random.'-RFC-'.$fileRFC2->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreRFC2,  \File::get($fileRFC2));
            //obtenemos la url
            $public_pathRFC2 = public_path();
            $urlRFC2 = $public_pathINE2.'/documents/'.$nombreRFC2;
            }else{
                $urlRFC2 = "";
            }
        if (!empty($request->file('doc_TipoPersona2'))) {
            //TIPO DE PERSONA
            //obtenemos el campo file definido en el formulario
            $fileTipoPersona2 = $request->file('doc_TipoPersona2');
            //obtenemos el nombre del archivo
            $nombreTipoPersona2 = $fileTipoPersona2->getClientOriginalName();
            $nombreTipoPersona2 = $random.'-TipoPersona-'.$fileTipoPersona2->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreTipoPersona2,  \File::get($fileTipoPersona2));
            //obtenemos la url
            $public_pathTipoPersona2 = public_path();
            $urlPersona2 = $public_pathTipoPersona2.'/documents/'.$nombreTipoPersona2;
        }else{
           $urlPersona2 = "";
        }
        if (!empty($request->file('doc_ActaNacimiento2'))) {
            //ACTA DE NACIMIENTO
            //obtenemos el campo file definido en el formulario
            $fileActaNacimiento2 = $request->file('doc_ActaNacimiento2');
            //obtenemos el nombre del archivo
            $nombreActaNacimiento2 = $fileActaNacimiento2->getClientOriginalName();
            $nombreActaNacimiento2 = $random.'-ActaNacimiento-'.$fileActaNacimiento2->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreActaNacimiento2,  \File::get($fileActaNacimiento2));
            //obtenemos la url
            $public_pathActaNacimiento2 = public_path();
            $urlActaNacimiento2 = $public_pathActaNacimiento2.'/documents/'.$nombreActaNacimiento2;
        }else{
           $urlActaNacimiento2 = "";
        }
        if (!empty($request->file('doc_curp2'))) {
            //CRUP
            //obtenemos el campo file definido en el formulario
            $fileCURP2 = $request->file('doc_curp2');
            //obtenemos el nombre del archivo
            $nombreCURP2 = $fileCURP2->getClientOriginalName();
            $nombreCURP2 = $random.'-CURP-'.$fileCURP2->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreCURP2,  \File::get($fileCURP2));
            //obtenemos la url
            $public_pathCURP2 = public_path();
            $urlCURP2 = $public_pathCURP2.'/documents/'.$nombreCURP2;
        }else{
           $urlCURP2 = "";
        }
        if (!empty($request->file('doc_escritura'))) {
            //ESCRITURA PROPIEDAD
            //obtenemos el campo file definido en el formulario
            $fileESCRITURA = $request->file('doc_escritura');
            //obtenemos el nombre del archivo
            $nombreESCRITURA = $fileESCRITURA->getClientOriginalName();
            $nombreESCRITURA = $random.'-ESCRITURA-'.$fileESCRITURA->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreESCRITURA,  \File::get($fileESCRITURA));
            //obtenemos la url
            $public_pathESCRITURA = public_path();
            $urlESCRITURA = $public_pathESCRITURA.'/documents/'.$nombreESCRITURA;
        }else{
           $urlESCRITURA = "";
        }
        if (!empty($request->file('doc_titulo'))) {
            //ESCRITURA TITULO
            //obtenemos el campo file definido en el formulario
            $fileTITULO = $request->file('doc_titulo');
            //obtenemos el nombre del archivo
            $nombreTITULO = $fileESCRITURA->getClientOriginalName();
            $nombreTITULO = $random.'-TITULO-'.$fileESCRITURA->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreTITULO,  \File::get($fileTITULO));
            //obtenemos la url
            $public_pathTITULO = public_path();
            $urlTITULO = $public_pathTITULO.'/documents/'.$nombreTITULO;
        }else{
           $urlTITULO = "";
        }
        if (!empty($request->file('doc_registro'))) {
            //REGISTRO PROPIEDAD
            //obtenemos el campo file definido en el formulario
            $fileREGISTRO = $request->file('doc_registro');
            //obtenemos el nombre del archivo
            $nombreREGISTRO = $fileActaNacimiento->getClientOriginalName();
            $nombreREGISTRO = $random.'-REGISTRO-'.$fileREGISTRO->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreREGISTRO,  \File::get($fileREGISTRO));
            //obtenemos la url
            $public_pathREGISTRO = public_path();
            $urlREGISTRO = $public_pathREGISTRO.'/documents/'.$nombreREGISTRO;
        }else{
           $urlREGISTRO = "";
        }
        if (!empty($request->file('doc_aviso'))) {
            //AVISO PRIVACIDAD
            //obtenemos el campo file definido en el formulario
            $fileAVISO = $request->file('doc_aviso');
            //obtenemos el nombre del archivo
            $nombreAVISO = $fileAVISO->getClientOriginalName();
            $nombreAVISO = $random.'-AVISO-'.$fileAVISO->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreAVISO,  \File::get($fileAVISO));
            //obtenemos la url
            $public_pathAVISO = public_path();
            $urlAVISO = $public_pathAVISO.'/documents/'.$nombreAVISO;
        }else{
           $urlAVISO = "";
        }
        if (!empty($request->file('doc_recibo_agua'))) {
            //RECIBO AGUA
            //obtenemos el campo file definido en el formulario
            $fileReciboAgua = $request->file('doc_recibo_agua');
            //obtenemos el nombre del archivo
            $nombreReciboAgua = $fileReciboAgua->getClientOriginalName();
            $nombreReciboAgua = $random.'-ReciboAgua-'.$fileReciboAgua->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreReciboAgua,  \File::get($fileReciboAgua));
            //obtenemos la url
            $public_pathReciboAgua = public_path();
            $urlReciboAgua = $public_pathReciboAgua.'/documents/'.$nombreReciboAgua;
        }else{
           $urlReciboAgua = "";
        }
        if (!empty($request->file('doc_recibo_luz'))) {
            //RECIBO LUZ
            //obtenemos el campo file definido en el formulario
            $fileReciboLuz = $request->file('doc_recibo_luz');
            //obtenemos el nombre del archivo
            $nombreReciboLuz = $fileReciboLuz->getClientOriginalName();
            $nombreReciboLuz = $random.'-ReciboLuz-'.$fileReciboLuz->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreReciboLuz,  \File::get($fileReciboLuz));
            //obtenemos la url
            $public_pathReciboLuz = public_path();
            $urlReciboLuz = $public_pathReciboLuz.'/documents/'.$nombreReciboLuz;
        }else{
           $urlReciboLuz = "";
        }
        if (!empty($request->file('doc_predial'))) {
            //PREDIAL
            //obtenemos el campo file definido en el formulario
            $filePREDIAL = $request->file('doc_predial');
            //obtenemos el nombre del archivo
            $nombrePREDIAL = $filePREDIAL->getClientOriginalName();
            $nombrePREDIAL = $random.'-PREDIAL-'.$filePREDIAL->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombrePREDIAL,  \File::get($filePREDIAL));
            //obtenemos la url
            $public_pathPREDIAL = public_path();
            $urlPREDIAL = $public_pathPREDIAL.'/documents/'.$nombrePREDIAL;
        }else{
           $urlPREDIAL = "";
        }
        if (!empty($request->file('doc_planos'))) {
            //PLANOS
            //obtenemos el campo file definido en el formulario
            $filePLANOS = $request->file('doc_planos');
            //obtenemos el nombre del archivo
            $nombrePLANOS = $filePLANOS->getClientOriginalName();
            $nombrePLANOS = $random.'-PLANOS-'.$fileReciboLuz->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombrePLANOS,  \File::get($filePLANOS));
            //obtenemos la url
            $public_pathPLANOS = public_path();
            $urlPLANOS = $public_pathPLANOS.'/documents/'.$nombrePLANOS;
        }else{
           $urlPLANOS = "";
        }
        if (!empty($request->file('doc_regimen_matrimonial'))) {
            //REGIMEN MATRIMONIAL
            //obtenemos el campo file definido en el formulario
            $fileRegimenMatrimonial = $request->file('doc_regimen_matrimonial');
            //obtenemos el nombre del archivo
            $nombreRegimenMatrimonial = $fileRegimenMatrimonial->getClientOriginalName();
            $nombreRegimenMatrimonial = $random.'-RegimenMatrimonial-'.$fileRegimenMatrimonial->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombrePLANOS,  \File::get($fileRegimenMatrimonial));
            //obtenemos la url
            $public_pathRegimenMatrimonial = public_path();
            $urlRegimenMatrimonial = $public_pathRegimenMatrimonial.'/documents/'.$nombreRegimenMatrimonial;
        }else{
           $urlRegimenMatrimonial = "";
        }
        if (!empty($request->file('doc_acta_matrimonio'))) {
            //ACTA MATRIMONIO
            //obtenemos el campo file definido en el formulario
            $fileActaMatrimono = $request->file('doc_acta_matrimonio');
            //obtenemos el nombre del archivo
            $nombreActaMatrimono = $fileActaMatrimono->getClientOriginalName();
            $nombreActaMatrimono = $random.'-ActaMatrimono-'.$fileActaMatrimono->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreActaMatrimono,  \File::get($fileActaMatrimono));
            //obtenemos la url
            $public_pathActaMatrimono = public_path();
            $urlActaMatrimonio = $public_pathActaMatrimono.'/documents/'.$nombreActaMatrimono;
        }else{
           $urlActaMatrimonio = "";
        }
        if (!empty($request->file('doc_regimen_propiedad_condo'))) {
            //REGIMEN PROPIEDAD CONDO
            //obtenemos el campo file definido en el formulario
            $fileRegimenCondo = $request->file('doc_regimen_propiedad_condo');
            //obtenemos el nombre del archivo
            $nombreRegimenCondo = $fileRegimenCondo->getClientOriginalName();
            $nombreRegimenCondo = $random.'-RegimenCondo-'.$fileRegimenCondo->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombreRegimenCondo,  \File::get($fileRegimenCondo));
            //obtenemos la url
            $public_pathRegimenCondo = public_path();
            $urlRegimenCondo = $public_pathRegimenCondo.'/documents/'.$nombreRegimenCondo;
        }else{
           $urlRegimenCondo = "";
        }

        $id_doc_propertys = DB::table('documents_property')
             ->select(DB::raw('MAX(id_doc_property)+1 as id'))
             ->get();
             $id_doc_propertys = (array)$id_doc_propertys[0];

             if (!is_null($id_doc_propertys)) {
                $id_doc_propertys;
             }else{
                $id_doc_propertys['id'] = 1;
             }


        //Crea el codigo para guardarlo
            $year = date("y");

            $tipo = DB::table('type_propertys')
                     ->select('iden_propiedad')
                     ->where('id_type_propertys', '=', $request['tipo_propiedad'])
                     ->get();
            $tipo = (array)$tipo[0];

            $idPropiedad = DB::table('registro_de_propiedad')
             ->select(DB::raw('MAX(id)+1 as id'))
             ->get();
             $idPropiedad = (array)$idPropiedad[0];
            if (!is_null($idPropiedad)) {
                $idPropiedad;
             }else{
                $idPropiedad['id'] = 1;
             }

             if ($request['tiene_adeudo'] == 'Si'){
                $expediente = "1G";
             }else{
                $expediente = "0G"; 
             }

             if ($request['exclusiva'] == "Si") {
                $exclusiva = "1E";
             }else{
                $exclusiva = "0E";
             }

             $comision = DB::table('commissions')
                     ->select('comision')
                     ->where('id_commissions', '=', $request['comision'])
                     ->get();

            $comision = (array)$comision[0];


             if ($comision['comision'] < "10") {
                    $codComision = '0'.$comision['comision'];
             }else{
                $codComision = $comision['comision'];
             }

             if ($request['id_prospector'] < 10) {
                 $idProspector = '0'.$request['id_prospector'];
             }else{
                $idProspector = $request['id_prospector'];
             }
             $codigo = $year.$tipo['iden_propiedad'].$idPropiedad['id'].'-'.$expediente.$exclusiva.$codComision.'-'.$idProspector;

        //end

        if (!empty($request['tipo_credito'])) {
            $array_tipo_credito = $request['tipo_credito'];
            $tipo_credito = implode(", ", $array_tipo_credito);
        }else{
            $tipo_credito = "";
        }  
        if (!empty($request['ine'])) {
            $array_ine = $request['ine'];
            $ine = implode(", ", $array_ine);
        }else{
            $ine = "";
        }
        if (!empty($request['rfc'])) {
            $array_rfc = $request['rfc'];
            $rfc = implode(", ", $array_rfc);
        }else{
            $rfc = "";
        }
        if (!empty($request['tipo_persona'])) {
            $array_tipo_persona = $request['tipo_persona'];
            $tipo_persona = implode(", ", $array_tipo_persona);
        }else{
            $tipo_persona = "";
        }
        if (!empty($request['acta_nacimiento'])) {
            $array_acta_nacimiento = $request['acta_nacimiento'];
            $acta_nacimiento = implode(", ", $array_acta_nacimiento);
        }else{
            $acta_nacimiento = "";
        }
        if (!empty($request['curp'])) {
            $array_curp = $request['curp'];
            $curp = implode(", ", $array_curp);
        }else{
            $curp = "";
        }
       
        if (!empty($request['restricciones_renta_venta'])) {
            $array_restricciones_renta_venta = $request['restricciones_renta_venta'];
            $restricciones_renta_venta = implode(", ", $array_restricciones_renta_venta);
        }else{
            $restricciones_renta_venta = "";
        }


        DB::table('registro_de_propiedad')->insert(
        [

            'nombre_dueno'              => $request['nombre_dueno'],
            'direccion_dueno'           => $request['direccion_dueno'],
            'id_colonia_dueno'          => $request['colonia_dueno'],
            'tel_casa'                  => $request['tel_casa'],
            'tel_oficina'               => $request['tel_oficina'],
            'celular'                   => $request['celular'],
            'estado_civil'              => $request['estado_civil'],
            'email'                     => $request['email'],
            'es_dueno_propiedad'        => $request['es_dueno_propiedad'],
            'relacion_con_dueno'        => $request['relacion_con_dueno'],

            'calle_propiedad'           => $request['calle_propiedad'],
            'numero_ext_propiedad'      => $request['numero_ext_propiedad'],
            'numero_int_propiedad'      => $request['numero_int_propiedad'],
            'id_colonia_propiedad'      => $request['colonia_propiedad'],
            'id_ciudad_propiedad'       => $request['ciudad_propiedad'],
            'id_estado_propiedad'       => $request['estado_propiedad'],
            'codigo_postal_propiedad'   => $request['codigo_postal_propiedad'],
            'uso_de_suelo'              => $request['uso_de_suelo'],

            'frente'                    => $request['frente'],
            'fondo'                     => $request['fondo'],
            'mcuadrado_terreno'         => $request['mcuadrado_terreno'],
            'mcuadrado_construccion'    => $request['mcuadrado_construccion'],
            'recamaras'                 => $request['recamaras'],
            'banos_completos'           => $request['banos_completos'],
            'medios_banos'              => $request['medios_banos'],
            'cochera'                   => $request['cochera'],
            'niveles'                   => $request['niveles'],
            'piso_condo'                => $request['piso_condo'],
            'conservacion'              => $request['conservacion'],
            'duenos_originales'         => $request['duenos_originales'],
            'vestidor'                  => $request['vestidor'],
            'sala'                      => $request['sala'],
            'comedor'                   => $request['comedor'],
            'cocina_integral'           => $request['cocina_integral'],
            'estudio'                   => $request['estudio'],
            'cuarto_tv'                 => $request['cuarto_tv'],
            'patio'                     => $request['patio'],
            'cuarto_servicio'           => $request['cuarto_servicio'],
            'bodega'                    => $request['bodega'],
            'cisterna'                  => $request['cisterna'],
            'aire_acondicionado'        => $request['aire_acondicionado'],
            'instalaciones_minisplit'   => $request['instalaciones_minisplit'],
            'boyler'                    => $request['boyler'],
            'bardeado'                  => $request['bardeado'],
            'protecciones'              => $request['protecciones'],
            'terraza'                   => $request['terraza'],
            'balcon'                    => $request['balcon'],
            'cuarto_lavado'             => $request['cuarto_lavado'],
            'jacuzzi'                   => $request['jacuzzi'],
            'casa_club'                 => $request['casa_club'],
            'parrilla'                  => $request['parrilla'],
            'elevador'                  => $request['elevador'],
            'acceso_playa'              => $request['acceso_playa'],
            'muelle'                    => $request['muelle'],
            'urbanizado'                => $request['urbanizado'],
            'jardin'                    => $request['jardin'],
            'areas_verdes'              => $request['areas_verdes'],
            'alberca_comun'             => $request['alberca_comun'],
            'piscina_privada'           => $request['piscina_privada'],
            'canchas'                   => $request['canchas'],
            'seguridad_todo_dia'        => $request['seguridad_todo_dia'],
            'sistema_seguridad'         => $request['sistema_seguridad'],
            'amueblado'                 => $request['amueblado'],
            'vista_mar'                 => $request['vista_mar'],
            'vista_marina'              => $request['vista_marina'],
            'vista_panoramica'          => $request['vista_panoramica'],
            'vista_campo_golf'          => $request['vista_campo_golf'],
            'agua'                      => $request['agua'],
            'luz'                       => $request['luz'],
            'drenaje'                   => $request['drenaje'],

            'tiene_adeudo'              => $request['tiene_adeudo'],
            'cuanto_adeudo'             => $request['cuanto_adeudo'],
            'tipo_adeudo'               => $request['tipo_adeudo'],
            'ofrece_financiamiento'     => $request['ofrece_financiamiento'],
            'aplica_credito'            => $request['aplica_credito'],
            'tipo_credito'              => $tipo_credito,

            'tipo_contrato'             => $request['tipo_contrato'],
            'ine'                       => $ine,
            'rfc'                       => $rfc,
            'tipo_persona'              => $tipo_persona,
            'acta_nacimiento'           => $acta_nacimiento,
            'curp'                      => $curp,
            'escritura_propiedad'       => $request['escritura_propiedad'],
            'titulo_propiedad'          => $request['titulo_propiedad'],
            'registro_propiedad'        => $request['registro_propiedad'],
            'aviso_privacidad'          => $request['aviso_privacidad'],
            'recibo_luz'                => $request['recibo_luz'],
            'recibo_agua'               => $request['recibo_agua'],
            'predial'                   => $request['predial'],
            'planos'                    => $request['planos'],
            'regimen_matrimonial'       => $request['regimen_matrimonial'],
            'clave_castatral'           => $request['clave_castatral'],
            'valor_castatral'           => $request['valor_castatral'],
            'acta_matrimonio'           => $request['acta_matrimonio'],
            'regimen_propiedad_condo'   => $request['regimen_propiedad_condo'],

            'id_asesores'               => $request['id_asesor'],
            'id_prospectores'           => $request['id_prospector'],
            'fecha_asesor'              => $request['fecha_asesor'],
            'exclusiva'                 => $request['exclusiva'],
            'tipo_convenio'             => $request['tipo_convenio'],
            'id_tipo_propiedad'         => $request['tipo_propiedad'],
            'id_comision'               => $request['comision'],
            'referido'                  => $request['referido'],
            'llaves'                    => $request['llaves'],
            'fotos'                     => $request['fotos'],
            'amueblada_renta_venta'     => $request['amueblada_renta_venta'],
            
            'precio_venta'              => $request['precio_venta'],
            'precio_renta'              => $request['precio_renta'],
            'precio_minimo'             => $request['precio_minimo'],
            'tipo_moneda'               => $request['tipo_moneda'],
            'cuota_mantenimiento'       => $request['cuota_mantenimiento'],
            'inclu_cuota_mantenimiento' => $request['inclu_cuota_mantenimiento'],
            'precio_mcuadrado'          => $request['precio_mcuadrado'],
            'fecha_inicio'              => $request['fecha_inicio'],
            'fecha_termino'             => $request['fecha_termino'],
            'restricciones_renta_venta' => $restricciones_renta_venta,
            'defecto_estructural'       => $request['defecto_estructural'],
            'defecto_especifico'        => $request['defecto_especifico'],
            
            'folio'                             => $request['folio'],
            'expediente_completo'               => $request['expediente_completo'],
            'responsable_llenado'               => $request['responsable_llenado'],
            'responsable_revision'              => $request['responsable_revision'],
            'director_aprobo_listing_comision'  => $request['director_aprobo_listing_comision'],
            'codigo'                            => $codigo,

            'id_doc_propertys'                  => $id_doc_propertys['id'],

            'create_by'                 => $request['create_by'],
        ]);

        DB::table('documents_property')->insert(
        [
            'doc_ine1'                      => $urlINE2,
            'doc_rfc1'                      => $urlRFC2,
            'doc_TipoPersona1'              => $urlPersona2,
            'doc_ActaNacimiento1'           => $urlActaNacimiento2,
            'doc_curp1'                     => $urlCURP2,
            'doc_ine2'                      => $urlINE2,
            'doc_rfc2'                      => $urlRFC2,
            'doc_TipoPersona2'              => $urlPersona2,
            'doc_ActaNacimiento2'           => $urlActaNacimiento2,
            'doc_curp2'                     => $urlCURP2,
            'doc_escritura'                 => $urlESCRITURA,
            'doc_titulo'                    => $urlTITULO,
            'doc_registro'                  => $urlREGISTRO,
            'doc_aviso'                     => $urlAVISO,
            'doc_recibo_luz'                => $urlReciboLuz,
            'doc_recibo_agua'               => $urlReciboAgua,
            'doc_predial'                   => $urlPREDIAL,
            'doc_planos'                    => $urlPLANOS,
            'doc_regimen_matrimonial'       => $urlRegimenMatrimonial,
            'doc_acta_matrimonio'           => $urlActaMatrimonio,
            'doc_regimen_propiedad_condo'   => $urlRegimenCondo,
        ]);

        return redirect('home'); 

       /* $colonies           = DB::table('colonies')->get();
        $cities             = DB::table('cities')->get();
        $states             = DB::table('states')->get();
        $commissions        = DB::table('commissions')->get();
        $type_propertys     = DB::table('type_propertys')->get();
        $prospector         = DB::table('prospector')->get();
        $adviser            = DB::table('adviser')->get();*/

        //return view('register_property', ['colonies' => $colonies, 'cities' => $cities, 'states' => $states, 'commissions' => $commissions, 'type_propertys' => $type_propertys, 'prospector' => $prospector, 'adviser' => $adviser]);  
    }

    public function table_propiedades()
    {
        $registro_de_propiedad = DB::table('registro_de_propiedad')
            ->leftJoin('commissions', 'registro_de_propiedad.id_comision', '=', 'commissions.id_commissions')
            ->leftJoin('type_propertys', 'registro_de_propiedad.id_tipo_propiedad', '=', 'type_propertys.id_type_propertys')
            ->leftJoin('colonies', 'registro_de_propiedad.id_colonia_dueno', '=', 'colonies.id_colonies')
            ->leftJoin('cities', 'registro_de_propiedad.id_ciudad_propiedad', '=', 'cities.id_cities')
            ->leftJoin('states', 'registro_de_propiedad.id_estado_propiedad', '=', 'states.id_state')
            ->leftJoin('prospector', 'registro_de_propiedad.id_prospectores', '=', 'prospector.id_prospectador')
            ->leftJoin('adviser', 'registro_de_propiedad.id_asesores', '=', 'adviser.id_asesor')
            ->where('registro_de_propiedad.status', '=', 1)
            ->paginate(15);

        return view('table_propiedades', ['registro_de_propiedad' => $registro_de_propiedad]);  
    }


    public function editar_propiedades($id)
    {
        $editPropiedades = DB::table('registro_de_propiedad')
                    ->leftJoin('commissions', 'registro_de_propiedad.id_comision', '=', 'commissions.id_commissions')
                    ->leftJoin('type_propertys', 'registro_de_propiedad.id_tipo_propiedad', '=', 'type_propertys.id_type_propertys')
                    ->leftJoin('colonies', 'registro_de_propiedad.id_colonia_dueno', '=', 'colonies.id_colonies')
                    ->leftJoin('cities', 'registro_de_propiedad.id_ciudad_propiedad', '=', 'cities.id_cities')
                    ->leftJoin('states', 'registro_de_propiedad.id_estado_propiedad', '=', 'states.id_state')
                    ->leftJoin('prospector', 'registro_de_propiedad.id_prospectores', '=', 'prospector.id_prospectador')
                    ->leftJoin('adviser', 'registro_de_propiedad.id_asesores', '=', 'adviser.id_asesor')
                    ->select('*')
                    ->where('id', '=', $id)
                    ->get();

        $colonies           = DB::table('colonies')->get();
        $cities             = DB::table('cities')->get();
        $states             = DB::table('states')->get();
        $credits            = DB::table('credits')->get();
        $commissions        = DB::table('commissions')->get();
        $type_propertys     = DB::table('type_propertys')->get();
        $prospector         = DB::table('prospector')->get();
        $adviser            = DB::table('adviser')->get();

        return view('editar_propiedad', ['editPropiedades' => $editPropiedades, 'colonies' => $colonies, 'cities' => $cities, 'states' => $states, 'credits' => $credits, 'commissions' => $commissions, 'type_propertys' => $type_propertys, 'prospector' => $prospector, 'adviser' => $adviser]);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
            $year = date("y");

            $tipo = DB::table('type_propertys')
                     ->select('iden_propiedad')
                     ->where('id_type_propertys', '=', $request['tipo_propiedad'])
                     ->get();
            $tipo = (array)$tipo[0];

            $idPropiedad = DB::table('registro_de_propiedad')
             ->select(DB::raw('MAX(id)+1 as id'))
             ->get();
             $idPropiedad = (array)$idPropiedad[0];


             if ($request['tiene_adeudo'] == 'Si'){
                $expediente = "1G";
             }else{
                $expediente = "0G"; 
             }

             if ($request['exclusiva'] == "Si") {
                $exclusiva = "1E";
             }else{
                $exclusiva = "0E";
             }

             $comision = DB::table('commissions')
                     ->select('comision')
                     ->where('id_commissions', '=', $request['comision'])
                     ->get();

            $comision = (array)$comision[0];


             if ($comision['comision'] < "10") {
                    $codComision = '0'.$comision['comision'];
             }else{
                $codComision = $comision['comision'];
             }

             if ($request['id_prospector'] < 10) {
                 $idProspector = '0'.$request['id_prospector'];
             }else{
                $idProspector = $request['id_prospector'];
             }
             $codigo = $year.$tipo['iden_propiedad'].$idPropiedad['id'].'-'.$expediente.$exclusiva.$codComision.'-'.$idProspector;


        if (!empty($request['tipo_credito'])) {
            $array_tipo_credito = $request['tipo_credito'];
            $tipo_credito = implode(", ", $array_tipo_credito);
        }else{
            $tipo_credito = "";
        }  
        if (!empty($request['ine'])) {
            $array_ine = $request['ine'];
            $ine = implode(", ", $array_ine);
        }else{
            $ine = "";
        }
        if (!empty($request['rfc'])) {
            $array_rfc = $request['rfc'];
            $rfc = implode(", ", $array_rfc);
        }else{
            $rfc = "";
        }
        if (!empty($request['tipo_persona'])) {
            $array_tipo_persona = $request['tipo_persona'];
            $tipo_persona = implode(", ", $array_tipo_persona);
        }else{
            $tipo_persona = "";
        }
        if (!empty($request['acta_nacimiento'])) {
            $array_acta_nacimiento = $request['acta_nacimiento'];
            $acta_nacimiento = implode(", ", $array_acta_nacimiento);
        }else{
            $acta_nacimiento = "";
        }
        if (!empty($request['curp'])) {
            $array_curp = $request['curp'];
            $curp = implode(", ", $array_curp);
        }else{
            $curp = "";
        }
        
        if (!empty($request['restricciones_renta_venta'])) {
            $array_restricciones_renta_venta = $request['restricciones_renta_venta'];
            $restricciones_renta_venta = implode(", ", $array_restricciones_renta_venta);
        }else{
            $restricciones_renta_venta = "";
        }

        $update_at = date("Y-m-d H:i:s"); 

        DB::table('registro_de_propiedad')
            ->where('id', $id)
            ->update([
                'nombre_dueno'              => $request['nombre_dueno'],
                'direccion_dueno'           => $request['direccion_dueno'],
                'id_colonia_dueno'          => $request['colonia_dueno'],
                'tel_casa'                  => $request['tel_casa'],
                'tel_oficina'               => $request['tel_oficina'],
                'celular'                   => $request['celular'],
                'estado_civil'              => $request['estado_civil'],
                'email'                     => $request['email'],
                'es_dueno_propiedad'        => $request['es_dueno_propiedad'],
                'relacion_con_dueno'        => $request['relacion_con_dueno'],

                'calle_propiedad'           => $request['calle_propiedad'],
                'numero_ext_propiedad'      => $request['numero_ext_propiedad'],
                'numero_int_propiedad'      => $request['numero_int_propiedad'],
                'id_colonia_propiedad'      => $request['colonia_propiedad'],
                'id_ciudad_propiedad'       => $request['ciudad_propiedad'],
                'id_estado_propiedad'       => $request['estado_propiedad'],
                'codigo_postal_propiedad'   => $request['codigo_postal_propiedad'],
                'uso_de_suelo'              => $request['uso_de_suelo'],

                'frente'                    => $request['frente'],
                'fondo'                     => $request['fondo'],
                'mcuadrado_terreno'         => $request['mcuadrado_terreno'],
                'mcuadrado_construccion'    => $request['mcuadrado_construccion'],
                'recamaras'                 => $request['recamaras'],
                'banos_completos'           => $request['banos_completos'],
                'medios_banos'              => $request['medios_banos'],
                'cochera'                   => $request['cochera'],
                'niveles'                   => $request['niveles'],
                'piso_condo'                => $request['piso_condo'],
                'conservacion'              => $request['conservacion'],
                'duenos_originales'         => $request['duenos_originales'],
                'vestidor'                  => $request['vestidor'],
                'sala'                      => $request['sala'],
                'comedor'                   => $request['comedor'],
                'cocina_integral'           => $request['cocina_integral'],
                'estudio'                   => $request['estudio'],
                'cuarto_tv'                 => $request['cuarto_tv'],
                'patio'                     => $request['patio'],
                'cuarto_servicio'           => $request['cuarto_servicio'],
                'bodega'                    => $request['bodega'],
                'cisterna'                  => $request['cisterna'],
                'aire_acondicionado'        => $request['aire_acondicionado'],
                'instalaciones_minisplit'   => $request['instalaciones_minisplit'],
                'boyler'                    => $request['boyler'],
                'bardeado'                  => $request['bardeado'],
                'protecciones'              => $request['protecciones'],
                'terraza'                   => $request['terraza'],
                'balcon'                    => $request['balcon'],
                'cuarto_lavado'             => $request['cuarto_lavado'],
                'jacuzzi'                   => $request['jacuzzi'],
                'casa_club'                 => $request['casa_club'],
                'parrilla'                  => $request['parrilla'],
                'elevador'                  => $request['elevador'],
                'acceso_playa'              => $request['acceso_playa'],
                'muelle'                    => $request['muelle'],
                'urbanizado'                => $request['urbanizado'],
                'jardin'                    => $request['jardin'],
                'areas_verdes'              => $request['areas_verdes'],
                'alberca_comun'             => $request['alberca_comun'],
                'piscina_privada'           => $request['piscina_privada'],
                'canchas'                   => $request['canchas'],
                'seguridad_todo_dia'        => $request['seguridad_todo_dia'],
                'sistema_seguridad'         => $request['sistema_seguridad'],
                'amueblado'                 => $request['amueblado'],
                'vista_mar'                 => $request['vista_mar'],
                'vista_marina'              => $request['vista_marina'],
                'vista_panoramica'          => $request['vista_panoramica'],
                'vista_campo_golf'          => $request['vista_campo_golf'],
                'agua'                      => $request['agua'],
                'luz'                       => $request['luz'],
                'drenaje'                   => $request['drenaje'],

                'tiene_adeudo'              => $request['tiene_adeudo'],
                'cuanto_adeudo'             => $request['cuanto_adeudo'],
                'tipo_adeudo'               => $request['tipo_adeudo'],
                'ofrece_financiamiento'     => $request['ofrece_financiamiento'],
                'aplica_credito'            => $request['aplica_credito'],
                'tipo_credito'              => $tipo_credito,

                'tipo_contrato'             => $request['tipo_contrato'],
                'ine'                       => $ine,
                'rfc'                       => $rfc,
                'tipo_persona'              => $tipo_persona,
                'acta_nacimiento'           => $acta_nacimiento,
                'curp'                      => $curp,
                'escritura_propiedad'       => $request['escritura_propiedad'],
                'titulo_propiedad'          => $request['titulo_propiedad'],
                'registro_propiedad'        => $request['registro_propiedad'],
                'aviso_privacidad'          => $request['aviso_privacidad'],
                'recibo_luz'                => $request['recibo_luz'],
                'recibo_agua'               => $request['recibo_agua'],
                'predial'                   => $request['predial'],
                'planos'                    => $request['planos'],
                'regimen_matrimonial'       => $request['regimen_matrimonial'],
                'clave_castatral'           => $request['clave_castatral'],
                'valor_castatral'           => $request['valor_castatral'],
                'acta_matrimonio'           => $request['acta_matrimonio'],
                'regimen_propiedad_condo'   => $request['regimen_propiedad_condo'],

                'id_asesores'               => $request['id_asesor'],
                'id_prospectores'           => $request['id_prospector'],
                'fecha_asesor'              => $request['fecha_asesor'],
                'exclusiva'                 => $request['exclusiva'],
                'tipo_convenio'             => $request['tipo_convenio'],
                'id_tipo_propiedad'         => $request['tipo_propiedad'],
                'id_comision'               => $request['comision'],
                'referido'                  => $request['referido'],
                'llaves'                    => $request['llaves'],
                'fotos'                     => $request['fotos'],
                'amueblada_renta_venta'     => $request['amueblada_renta_venta'],
                
                'precio_venta'              => $request['precio_venta'],
                'precio_renta'              => $request['precio_renta'],
                'precio_minimo'             => $request['precio_minimo'],
                'tipo_moneda'               => $request['tipo_moneda'],
                'cuota_mantenimiento'       => $request['cuota_mantenimiento'],
                'inclu_cuota_mantenimiento' => $request['inclu_cuota_mantenimiento'],
                'precio_mcuadrado'          => $request['precio_mcuadrado'],
                'fecha_inicio'              => $request['fecha_inicio'],
                'fecha_termino'             => $request['fecha_termino'],
                'restricciones_renta_venta' => $restricciones_renta_venta,
                'defecto_estructural'       => $request['defecto_estructural'],
                'defecto_especifico'        => $request['defecto_especifico'],
                
                'folio'                             => $request['folio'],
                'expediente_completo'               => $request['expediente_completo'],
                'responsable_llenado'               => $request['responsable_llenado'],
                'responsable_revision'              => $request['responsable_revision'],
                'director_aprobo_listing_comision'  => $request['director_aprobo_listing_comision'],
                'codigo'                            => $codigo,

                'update_at'                 => $update_at,
                'update_by'         => $request['update_by'],
            ]);

            
            return redirect('home'); 
    }



    public function property_delete()
    {
        $registro_de_propiedad = DB::table('registro_de_propiedad')
            ->leftJoin('commissions', 'registro_de_propiedad.id_comision', '=', 'commissions.id_commissions')
            ->leftJoin('type_propertys', 'registro_de_propiedad.id_tipo_propiedad', '=', 'type_propertys.id_type_propertys')
            ->leftJoin('colonies', 'registro_de_propiedad.id_colonia_dueno', '=', 'colonies.id_colonies')
            ->leftJoin('cities', 'registro_de_propiedad.id_ciudad_propiedad', '=', 'cities.id_cities')
            ->leftJoin('states', 'registro_de_propiedad.id_estado_propiedad', '=', 'states.id_state')
            ->leftJoin('prospector', 'registro_de_propiedad.id_prospectores', '=', 'prospector.id_prospectador')
            ->leftJoin('adviser', 'registro_de_propiedad.id_asesores', '=', 'adviser.id_asesor')
            ->leftJoin('reason_to_delete', 'registro_de_propiedad.delete_reason', '=', 'reason_to_delete.id_reason')
            ->where('registro_de_propiedad.status', '=', 0)
            ->paginate(15);


        return view('property_delete', ['registro_de_propiedad' => $registro_de_propiedad]);  
    }

    public function restore($id)
    {
            DB::table('registro_de_propiedad')
            ->where('id', $id)
            ->update(['status' => 1]);

        $registro_de_propiedad = DB::table('registro_de_propiedad')
            ->leftJoin('commissions', 'registro_de_propiedad.id_comision', '=', 'commissions.id_commissions')
            ->leftJoin('type_propertys', 'registro_de_propiedad.id_tipo_propiedad', '=', 'type_propertys.id_type_propertys')
            ->leftJoin('colonies', 'registro_de_propiedad.id_colonia_dueno', '=', 'colonies.id_colonies')
            ->leftJoin('cities', 'registro_de_propiedad.id_ciudad_propiedad', '=', 'cities.id_cities')
            ->leftJoin('states', 'registro_de_propiedad.id_estado_propiedad', '=', 'states.id_state')
            ->leftJoin('prospector', 'registro_de_propiedad.id_prospectores', '=', 'prospector.id_prospectador')
            ->leftJoin('adviser', 'registro_de_propiedad.id_asesores', '=', 'adviser.id_asesor')
            ->leftJoin('reason_to_delete', 'registro_de_propiedad.delete_reason', '=', 'reason_to_delete.id_reason')
            ->where('registro_de_propiedad.status', '=', 0)
            ->paginate(15);

        return view('property_delete', ['registro_de_propiedad' => $registro_de_propiedad]);  

    }

    public function reason_delete($id)
    {
        $reasonDelete = DB::table('registro_de_propiedad')
                     ->select('*')
                     ->where('id', '=', $id)
                     ->get();

        $reason_to_delete         = DB::table('reason_to_delete')->get();

        return view('reason_delete', ['reasonDelete' => $reasonDelete, 'reason_to_delete' => $reason_to_delete]);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $delete_at = date("Y-m-d H:i:s"); 

        DB::table('registro_de_propiedad')
            ->where('id', $id)
            ->update(['status'                      => 0,
                      'delete_reason'               => $request['delete_reason'],
                      'delete_by'                   => $request['delete_by'],
                      'delete_at'                   => $delete_at,
                    ]);

                $registro_de_propiedad = DB::table('registro_de_propiedad')
            ->leftJoin('commissions', 'registro_de_propiedad.id_comision', '=', 'commissions.id_commissions')
            ->leftJoin('type_propertys', 'registro_de_propiedad.id_tipo_propiedad', '=', 'type_propertys.id_type_propertys')
            ->leftJoin('colonies', 'registro_de_propiedad.id_colonia_dueno', '=', 'colonies.id_colonies')
            ->leftJoin('cities', 'registro_de_propiedad.id_ciudad_propiedad', '=', 'cities.id_cities')
            ->leftJoin('states', 'registro_de_propiedad.id_estado_propiedad', '=', 'states.id_state')
            ->leftJoin('prospector', 'registro_de_propiedad.id_prospectores', '=', 'prospector.id_prospectador')
            ->leftJoin('adviser', 'registro_de_propiedad.id_asesores', '=', 'adviser.id_asesor')
            ->leftJoin('reason_to_delete', 'registro_de_propiedad.delete_reason', '=', 'reason_to_delete.id_reason')
            ->where('registro_de_propiedad.status', '=', 1)
            ->paginate(15);

        return view('table_propiedades', ['registro_de_propiedad' => $registro_de_propiedad]);  
    }
}
