<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ReportesExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $employees           = DB::table('employees')->where('roles', '=', 'Asesor')->get();

            return view('reportes_excel', ['employees' => $employees]);

    }


    public function excel_propiedades(){
        
        Excel::create('REGISTRO DE PROPIEDADES', function($excel) {
            
            $excel->sheet('Datos', function($sheet) {

                //Header
                $sheet->row(1, ['FOLIO', 
                                'CODIGO', 
                                'ESTATUS', 
                                'ESTADO', 
                                'PROPIEDAD', 
                                'TITULO', 
                                'ID', 
                                'ASESOR', 
                                'CONTRATO', 
                                '%', 
                                'AVISO DE PRIV.', 
                                'INGRESO', 
                                'VENCIMIENTO', 
                                'NOMBRE CLIENTE', 
                                'TELEFONO CLIENTE', 
                                'CELULAR CLIENTE', 
                                'REFERIDO', 
                                'ESCRITURAS', 
                                'TIT. DE PROP.', 
                                'INE',
                                'PREDIAL', 
                                'RBO. LUZ', 
                                'RBO. AGUA', 
                                'ACTA MAT.', 
                                'ACTA NAC.', 
                                'RFC', 
                                'CURP', 
                                'PLANO', 
                                'LIB. GRAVAMEN', 
                                'CUOTA MANT.', 
                                'REG. PROP', 
                                'OBSERVACIÓN', 
                                'LLAVE O CITA', 
                                'PUBLICIDAD', 
                                'ESTRUCTURA', 
                                'REVISION AUDITORIA']);

                $sheet->setBorder('A1:AJ1', 'thin');



                $sheet->cells('A1:B1', function($cells1){
                    $cells1->setBackground('#E19DFF');
                    $cells1->setAlignment('center');
                    $cells1->setFontcolor('#FFFFFF');
                    $cells1->setValignment('center');
                    $cells1->setFontsize('14');
                });
                $sheet->cells('C1:E1', function($cells2){
                    $cells2->setBackground('#FF738A');
                    $cells2->setAlignment('center');
                    $cells2->setFontcolor('#FFFFFF');
                    $cells2->setValignment('center');
                    $cells2->setFontsize('14');

                });
                $sheet->cells('F1:G1', function($cells3){
                    $cells3->setBackground('#4D96FF');
                    $cells3->setAlignment('center');
                    $cells3->setFontcolor('#FFFFFF');
                    $cells3->setValignment('center');
                    $cells3->setFontsize('14');

                });
                $sheet->cells('H1', function($cells4){
                    $cells4->setBackground('#FFB96F');
                    $cells4->setAlignment('center');
                    $cells4->setFontcolor('#FFFFFF');
                    $cells4->setValignment('center');
                    $cells4->setFontsize('14');

                });
                $sheet->cells('I1:Q1', function($cells5){
                    $cells5->setBackground('#8FCB8F');
                    $cells5->setAlignment('center');
                    $cells5->setFontcolor('#FFFFFF');
                    $cells5->setValignment('center');
                    $cells5->setFontsize('14');

                });
                $sheet->cells('R1:AE1', function($cells6){
                    $cells6->setBackground('#CACACA');
                    $cells6->setAlignment('center');
                    $cells6->setFontcolor('#FFFFFF');
                    $cells6->setValignment('center');
                    $cells6->setFontsize('14');

                });
                $sheet->cells('AF1:AJ1', function($cells7){
                    $cells7->setBackground('#8EDBFF');
                    $cells7->setAlignment('center');
                    $cells7->setFontcolor('#FFFFFF');
                    $cells7->setValignment('center');
                    $cells7->setFontsize('14');

                });

                $sheet->setWidth(array(
                    'A' => '30',
                    'B' => '30',
                    'C' => '30',
                    'D' => '30',
                    'E' => '30',
                    'F' => '30',
                    'G' => '30',
                    'H' => '30',
                    'I' => '30',
                    'J' => '30',
                    'K' => '30',
                    'L' => '30',
                    'M' => '30',
                    'N' => '40',
                    'O' => '40',
                    'P' => '40',
                    'Q' => '40',
                    'R' => '30',
                    'S' => '30',
                    'T' => '30',
                    'U' => '30',
                    'V' => '30',
                    'W' => '30',
                    'X' => '30',
                    'Y' => '30',
                    'Z' => '30',
                    'AA' => '30',
                    'AB' => '30',
                    'AC' => '30',
                    'AD' => '30',
                    'AE' => '30',
                    'AF' => '60',
                    'AG' => '30',
                    'AH' => '30',
                    'AI' => '30',
                    'AJ' => '60'


                ));
                $sheet->setHeight(array(
                    '1' => '25'
                ));

                $registro_de_propiedad = DB::table('registro_de_propiedad')
                    ->leftJoin('commissions', 'registro_de_propiedad.id_comision', '=', 'commissions.id_commissions')
                    ->leftJoin('type_propertys', 'registro_de_propiedad.id_tipo_propiedad', '=', 'type_propertys.id_type_propertys')
                    ->leftJoin('colonies', 'registro_de_propiedad.id_colonia_dueno', '=', 'colonies.id_colonies')
                    ->leftJoin('cities', 'registro_de_propiedad.id_ciudad_propiedad', '=', 'cities.id_cities')
                    ->leftJoin('states', 'registro_de_propiedad.id_estado_propiedad', '=', 'states.id_state')
                    ->leftJoin('prospector', 'registro_de_propiedad.id_prospectores', '=', 'prospector.id_prospectador')
                    ->leftJoin('adviser', 'registro_de_propiedad.id_asesores', '=', 'adviser.id_asesor')
                    ->leftJoin('documents_property', 'registro_de_propiedad.id_doc_propertys', '=', 'documents_property.id_doc_property')
                    ->where('registro_de_propiedad.status', '=', 1)
                    ->get();

                    foreach ($registro_de_propiedad as $registro) {
                        $row = [];

                        $row[0] = $registro->id;
                        $row[1] = $registro->codigo;
                        $row[2] = $registro->status_propiedad;
                        $row[3] = $registro->estado_registro;
                        $row[4] = $registro->tipo_propiedad;
                        $row[5] = $registro->colonia;
                        $row[6] = $registro->id;
                        $row[7] = $registro->nombre_asesor;
                        $row[9] = $registro->tipo_contrato;
                        $row[11] = $registro->comision;
                        $row[12] = $registro->aviso_privacidad;
                        $row[13] = $registro->fecha_inicio;
                        $row[14] = $registro->fecha_termino;
                        $row[15] = $registro->nombre_dueno;
                        $row[16] = $registro->tel_casa;
                        $row[17] = $registro->celular;
                        $row[18] = $registro->referido;
                        $row[19] = $registro->escritura_propiedad;
                        $row[20] = $registro->titulo_propiedad;
                        $row[21] = $registro->ine;
                        $row[22] = $registro->predial;
                        $row[23] = $registro->recibo_luz;
                        $row[24] = $registro->recibo_agua;
                        $row[25] = $registro->acta_matrimonio; 
                        $row[26] = $registro->acta_nacimiento; 
                        $row[27] = $registro->rfc;
                        $row[28] = $registro->curp;
                        $row[29] = $registro->planos;
                        $row[30] = $registro->tiene_adeudo;
                        $row[31] = $registro->cuota_mantenimiento;
                        $row[32] = $registro->registro_propiedad;
                        $row[33] = $registro->observaciones;
                        $row[35] = $registro->llaves;
                        $row[36] = $registro->tipo_anuncio;
                        $row[37] = $registro->estructura;
                        $row[38] = $registro->revision_auditoria;

                         $sheet->appendRow($row);
                        
                    }


                   
            });

        })->export('xls');
    }

    public function excel_propiedades_asesor(Request $request){

        Excel::create('REGISTRO DE PROPIEDADES POR ASESOR', function($excel) use ($request) {
            
            $excel->sheet('Datos', function($sheet) use ($request) {

                //Header
                $sheet->row(1, ['FOLIO', 
                                'CODIGO', 
                                'ESTATUS', 
                                'ESTADO', 
                                'PROPIEDAD', 
                                'TITULO', 
                                'ID', 
                                'ASESOR', 
                                'CONTRATO', 
                                '%', 
                                'AVISO DE PRIV.', 
                                'INGRESO', 
                                'VENCIMIENTO', 
                                'NOMBRE CLIENTE', 
                                'TELEFONO CLIENTE', 
                                'CELULAR CLIENTE', 
                                'REFERIDO', 
                                'ESCRITURAS', 
                                'TIT. DE PROP.', 
                                'INE',
                                'PREDIAL', 
                                'RBO. LUZ', 
                                'RBO. AGUA', 
                                'ACTA MAT.', 
                                'ACTA NAC.', 
                                'RFC', 
                                'CURP', 
                                'PLANO', 
                                'LIB. GRAVAMEN', 
                                'CUOTA MANT.', 
                                'REG. PROP', 
                                'OBSERVACIÓN', 
                                'LLAVE O CITA', 
                                'PUBLICIDAD', 
                                'ESTRUCTURA', 
                                'REVISION AUDITORIA']);

                $sheet->setBorder('A1:AJ1', 'thin');



                $sheet->cells('A1:B1', function($cells1){
                    $cells1->setBackground('#E19DFF');
                    $cells1->setAlignment('center');
                    $cells1->setFontcolor('#FFFFFF');
                    $cells1->setValignment('center');
                    $cells1->setFontsize('14');
                });
                $sheet->cells('C1:E1', function($cells2){
                    $cells2->setBackground('#FF738A');
                    $cells2->setAlignment('center');
                    $cells2->setFontcolor('#FFFFFF');
                    $cells2->setValignment('center');
                    $cells2->setFontsize('14');

                });
                $sheet->cells('F1:G1', function($cells3){
                    $cells3->setBackground('#4D96FF');
                    $cells3->setAlignment('center');
                    $cells3->setFontcolor('#FFFFFF');
                    $cells3->setValignment('center');
                    $cells3->setFontsize('14');

                });
                $sheet->cells('H1', function($cells4){
                    $cells4->setBackground('#FFB96F');
                    $cells4->setAlignment('center');
                    $cells4->setFontcolor('#FFFFFF');
                    $cells4->setValignment('center');
                    $cells4->setFontsize('14');

                });
                $sheet->cells('I1:Q1', function($cells5){
                    $cells5->setBackground('#8FCB8F');
                    $cells5->setAlignment('center');
                    $cells5->setFontcolor('#FFFFFF');
                    $cells5->setValignment('center');
                    $cells5->setFontsize('14');

                });
                $sheet->cells('R1:AE1', function($cells6){
                    $cells6->setBackground('#CACACA');
                    $cells6->setAlignment('center');
                    $cells6->setFontcolor('#FFFFFF');
                    $cells6->setValignment('center');
                    $cells6->setFontsize('14');

                });
                $sheet->cells('AF1:AJ1', function($cells7){
                    $cells7->setBackground('#8EDBFF');
                    $cells7->setAlignment('center');
                    $cells7->setFontcolor('#FFFFFF');
                    $cells7->setValignment('center');
                    $cells7->setFontsize('14');

                });

                $sheet->setWidth(array(
                    'A' => '30',
                    'B' => '30',
                    'C' => '30',
                    'D' => '30',
                    'E' => '30',
                    'F' => '30',
                    'G' => '30',
                    'H' => '30',
                    'I' => '30',
                    'J' => '30',
                    'K' => '30',
                    'L' => '30',
                    'M' => '30',
                    'N' => '40',
                    'O' => '40',
                    'P' => '40',
                    'Q' => '40',
                    'R' => '30',
                    'S' => '30',
                    'T' => '30',
                    'U' => '30',
                    'V' => '30',
                    'W' => '30',
                    'X' => '30',
                    'Y' => '30',
                    'Z' => '30',
                    'AA' => '30',
                    'AB' => '30',
                    'AC' => '30',
                    'AD' => '30',
                    'AE' => '30',
                    'AF' => '60',
                    'AG' => '30',
                    'AH' => '30',
                    'AI' => '30',
                    'AJ' => '60'


                ));
                $sheet->setHeight(array(
                    '1' => '25'
                ));

               
                $registro_de_propiedad = DB::table('registro_de_propiedad')
                    ->leftJoin('commissions', 'registro_de_propiedad.id_comision', '=', 'commissions.id_commissions')
                    ->leftJoin('type_propertys', 'registro_de_propiedad.id_tipo_propiedad', '=', 'type_propertys.id_type_propertys')
                    ->leftJoin('colonies', 'registro_de_propiedad.id_colonia_dueno', '=', 'colonies.id_colonies')
                    ->leftJoin('cities', 'registro_de_propiedad.id_ciudad_propiedad', '=', 'cities.id_cities')
                    ->leftJoin('states', 'registro_de_propiedad.id_estado_propiedad', '=', 'states.id_state')
                    ->leftJoin('prospector', 'registro_de_propiedad.id_prospectores', '=', 'prospector.id_prospectador')
                    ->leftJoin('adviser', 'registro_de_propiedad.id_asesores', '=', 'adviser.id_asesor')
                    ->leftJoin('documents_property', 'registro_de_propiedad.id_doc_propertys', '=', 'documents_property.id_doc_property')
                    ->where('registro_de_propiedad.id_asesores', '=', $request['employees'])
                    ->where('registro_de_propiedad.status', '=', 1)
                    ->get();

                    foreach ($registro_de_propiedad as $registro) {
                        $row = [];

                        $row[0] = $registro->id;
                        $row[1] = $registro->codigo;
                        $row[2] = $registro->status_propiedad;
                        $row[3] = $registro->estado_registro;
                        $row[4] = $registro->tipo_propiedad;
                        $row[5] = $registro->colonia;
                        $row[6] = $registro->id;
                        $row[7] = $registro->id_asesores;
                        $row[9] = $registro->tipo_contrato;
                        $row[11] = $registro->comision;
                        $row[12] = $registro->aviso_privacidad;
                        $row[13] = $registro->fecha_inicio;
                        $row[14] = $registro->fecha_termino;
                        $row[15] = $registro->nombre_dueno;
                        $row[16] = $registro->tel_casa;
                        $row[17] = $registro->celular;
                        $row[18] = $registro->referido;
                        $row[19] = $registro->escritura_propiedad;
                        $row[20] = $registro->titulo_propiedad;
                        $row[21] = $registro->ine;
                        $row[22] = $registro->predial;
                        $row[23] = $registro->recibo_luz;
                        $row[24] = $registro->recibo_agua;
                        $row[25] = $registro->acta_matrimonio; 
                        $row[26] = $registro->acta_nacimiento; 
                        $row[27] = $registro->rfc;
                        $row[28] = $registro->curp;
                        $row[29] = $registro->planos;
                        $row[30] = $registro->tiene_adeudo;
                        $row[31] = $registro->cuota_mantenimiento;
                        $row[32] = $registro->registro_propiedad;
                        $row[33] = $registro->observaciones;
                        $row[35] = $registro->llaves;
                        $row[36] = $registro->tipo_anuncio;
                        $row[37] = $registro->estructura;
                        $row[38] = $registro->revision_auditoria;

                         $sheet->appendRow($row);
                        
                    }
                   
            });

        })->export('xls');
    }

    public function listing(Request $request){

        Excel::create('listing', function($excel) use($request){
            
            $excel->sheet('Datos', function($sheet) use ($request) {

                //Header
                $sheet->mergeCells('A1:A2:B1:B2');
                $sheet->mergeCells('B1:B2:C1:C2');
                $sheet->mergeCells('C1:D1');
                $sheet->mergeCells('E1:E2');
                $sheet->mergeCells('I1:I2');
                $sheet->mergeCells('J1:J2');
                $sheet->mergeCells('F1:F2');
                $sheet->mergeCells('G1:G2');
                $sheet->mergeCells('H1:H2');
                $sheet->mergeCells('K1:L1');
                $sheet->mergeCells('M1:M2');

                $sheet->row(1, ['IDA', 
                                'IDC', 
                                'FECHA',
                                "",
                                'ASESOR', 
                                'PROPIEDAD', 
                                "",
                                'TIPO DE PROPIEDAD', 
                                'ESTATUS', 
                                'EXCLUSIVA', 
                                'EXCLUSIVA', 
                                '',
                                '%']);
                
                $sheet->row(2, ['', 
                                '', 
                                'ING', 
                                'COM', 
                                '', 
                                '',
                                '',
                                '',
                                '',  
                                '', 
                                'Inicio',
                                'Termino'
                                ]);

                $sheet->setBorder('A1:M1', 'thin');
                $sheet->setBorder('A2:M2', 'thin');



                $sheet->cells('A1:M1', function($cells1){
                    $cells1->setBackground('#CDCDCD');
                    $cells1->setAlignment('center');
                    //$cells1->setFontcolor('#FFFFFF');
                    $cells1->setValignment('center');
                    $cells1->setFontsize('10');
                });
                $sheet->cells('A2:M2', function($cells1){
                    $cells1->setBackground('#CDCDCD');
                    $cells1->setAlignment('center');
                    //$cells1->setFontcolor('#FFFFFF');
                    $cells1->setValignment('center');
                    $cells1->setFontsize('10');
                });


                $sheet->setWidth(array(
                    'A' => '20',
                    'B' => '20',
                    'C' => '20',
                    'D' => '20',
                    'E' => '20',
                    'F' => '20',
                    'G' => '20',
                    'H' => '20',
                    'I' => '20',
                    'J' => '20',
                    'K' => '20',
                    'L' => '20',
                    'M' => '5',
                ));


                $registro_de_propiedad = DB::table('registro_de_propiedad')
                    ->leftJoin('commissions', 'registro_de_propiedad.id_comision', '=', 'commissions.id_commissions')
                    ->leftJoin('type_propertys', 'registro_de_propiedad.id_tipo_propiedad', '=', 'type_propertys.id_type_propertys')
                    ->leftJoin('colonies', 'registro_de_propiedad.id_colonia_dueno', '=', 'colonies.id_colonies')
                    ->leftJoin('cities', 'registro_de_propiedad.id_ciudad_propiedad', '=', 'cities.id_cities')
                    ->leftJoin('states', 'registro_de_propiedad.id_estado_propiedad', '=', 'states.id_state')
                    ->leftJoin('prospector', 'registro_de_propiedad.id_prospectores', '=', 'prospector.id_prospectador')
                    ->leftJoin('adviser', 'registro_de_propiedad.id_asesores', '=', 'adviser.id_asesor')
                    ->leftJoin('documents_property', 'registro_de_propiedad.id_doc_propertys', '=', 'documents_property.id_doc_property')
                    ->where('registro_de_propiedad.status', '=', 1)
                    ->whereYear('registro_de_propiedad.create_at', '=', $request['year'])
                    ->whereMonth('registro_de_propiedad.create_at', '=', $request['month'])
                    ->get();


                    foreach ($registro_de_propiedad as $registro) {
                        $row = [];

                        $row[0] = $registro->id;
                        $row[1] = $registro->codigo;
                        $row[2] = $registro->create_at;
                        $row[3] = $registro->fecha_revicion;
                        $row[4] = $registro->id_asesores;
                        $row[5] = $registro->colonia;
                        $row[6] = $registro->tipo_convenio;
                        $row[7] = $registro->tipo_propiedad;
                        $row[8] = $registro->estado_registro;
                        $row[9] = $registro->tipo_contrato;
                        $row[11] = $registro->fecha_inicio;
                        $row[12] = $registro->fecha_termino;
                        $row[13] = $registro->id_comision;

                         $sheet->appendRow($row);
                        
                    }


                   
            });

        })->export('xls');
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
