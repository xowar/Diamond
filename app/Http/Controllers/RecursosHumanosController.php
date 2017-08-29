<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RecursosHumanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('examen_colores');
    }


    public function store(Request $request)
    {
        //
    }

public function prospectos(Request $request)
    {


        $e = 0;
        $v = 0;
        $n = 0;
        $total = 0;
        for ($i=1; $i <= 34 ; $i++) { 
            $request[$i] = strtoupper($request[$i]);
        }

        if ($request['1'] == "D") {
            $e = $e+1;
            $total = $total+1;
            
        }
        if ($request['4'] == "C") {
            $e = $e+1;
            $total = $total+1;
        }
        if ($request['7'] == "E") {
            $e = $e+1;
            $total = $total+1;
        }
        if ($request['10'] == "D") {
            $e = $e+1;
            $total = $total+1;
        }
        if ($request['13'] == "C") {
            $e = $e+1;
            $total = $total+1;
        }
        if ($request['16'] == "A") {
            $e = $e+1;
            $total = $total+1;
        }
        if ($request['19'] == "E") {
            $e = $e+1;
            $total = $total+1;
        }
        if ($request['22'] == "B") {
            $e = $e+1;
            $total = $total+1;
        }
        if ($request['25'] == "B") {
            $e = $e+1;
            $total = $total+1;
        }
        if ($request['28'] == "B") {
            $e = $e+1;
            $total = $total+1;
        }
        if ($request['31'] == "A") {
            $e = $e+1;
            $total = $total+1;
        }
        if ($request['34'] == "C") {
            $e = $e+1;
            $total = $total+1;
        }
        // respuestas V
        if ($request['2'] == "C") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['5'] == "C") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['8'] == "E") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['11'] == "D") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['14'] == "B") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['17'] == "B") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['20'] == "A") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['23'] == "D") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['26'] == "E") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['29'] == "A") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['32'] == "B") {
            $v = $v+1;
            $total = $total+1;
        }
        if ($request['35'] == "D") {
            $v = $v+1;
            $total = $total+1;
        }
        // respuestas N
        if ($request['3'] == "17") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['6'] == "5") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['9'] == "16") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['12'] == "3") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['15'] == "16") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['18'] == "23") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['21'] == "18") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['24'] == "26") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['27'] == "59") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['30'] == "38") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['33'] == "26") {
            $n = $n+1;
            $total = $total+1;
        }
        if ($request['34'] == "38") {
            $n = $n+1;
            $total = $total+1;
        }
        $ePercen = round($e/12*100);
        $vPercen = round($v/12*100);
        $nPercen = round($n/12*100);
        $promedioAciertos = round($total/3);
        $puntosTotal = $ePercen+$vPercen+$nPercen;
        $totalPercen = round($puntosTotal/3);


        if ($request['day'] < 10) {
            $request['day'] = '0'.$request['day'];
        }else{
            $request['day'];
        }
        if ($request['month'] < 10) {
            $request['month'] = '0'.$request['month'];
        }else{
            $request['month'];
        }

        $fecha_nacimiento = $request['year'].'-'.$request['month'].'-'.$request['day']; 

         DB::table('aspirant')->insert(
            [
                'nombre_aspirante'              => $request['nombre_aspirante'],
                'puesto'                        => $request['puesto'],
                'estado_civil'                  => $request['estado_civil'],
                'fecha_nacimiento'              => $fecha_nacimiento,
                'fecha_examen'                  => $request['fecha_examen'],
                'resultado_colores'             => $request['resultado_colores'],
                'respuestas_E'                  => $e,
                'respuestas_N'                  => $n,
                'respuestas_V'                  => $v,
                'puntos_E'                      => $ePercen,
                'puntos_N'                      => $nPercen,
                'puntos_V'                      => $vPercen,
                'promedio_aciertos'             => $promedioAciertos,
                'puntos_total'                  => $puntosTotal,
                'percen_total'                  => $totalPercen,
            ]);

            return redirect('home');  
    }
    
    public function table_prospectos()
    {
        $aspirant = DB::table('aspirant')
            ->paginate(15);

        return view('table_prospectos', ['aspirant' => $aspirant]);  
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
        $aspirant = DB::table('aspirant')
                    ->select('*')
                    ->where('id_aspirant', '=', $id)
                    ->get();
                    
        return view('editar_prospectos', ['aspirant' => $aspirant]);  
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
        DB::table('aspirant')
            ->where('id_aspirant', $id)
            ->update([
                'nombre_aspirante'              => $request['nombre_aspirante'],
                'puesto'                        => $request['puesto'],
                'estado_civil'                  => $request['estado_civil'],
                'fecha_nacimiento'              => $request['fecha_nacimiento'],
                'grado_escolaridad'             => $request['grado_escolaridad'],
                'edad'                          => $request['edad'],
                'observaciones'                 => $request['observaciones'],
                'aprovacion'                    => $request['aprovacion'],
                'resultado_colores'             => $request['resultado_colores'],
            ]);

        if ($request['observaciones'] = "Aprobado") {
            DB::table('employees')->insert(
            [
                'name'                          => $request['nombre_aspirante'],
                'roles'                         => $request['puesto'],
                'estado_civil'                  => $request['estado_civil'],
                'fecha_nacimiento'              => $request['fecha_nacimiento'],
                'edad'                          => $request['edad'],
                'grado_escolaridad'             => $request['grado_escolaridad'],
            ]);
        }

        return redirect('home/table_prospectos');
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
