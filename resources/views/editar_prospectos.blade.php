@extends('app')

@section('content')
<?php foreach ($aspirant as $aspirante) {?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">EDITAR DATOS DE ASPIRANTE</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        {!! Form::model($aspirante,['files' => 'true', 'method' => 'PATCH','action'=>['RecursosHumanosController@update','id'=>$aspirante->id_aspirant]]) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            Formulario
                        </div>

                            <!-- final -->

                        <div class="panel-body" id="elementHidde1">
                        
                            <div class="row" style="margin-bottom: 60px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nombre Completo *</label>
                                        <input name="nombre_aspirante" class="form-control" value="<?php echo $aspirante->nombre_aspirante; ?>" required >
                                    </div>
                                    <div class="form-group">
                                        <label>Puesto Solicitado *</label>
                                        <input name="puesto" class="form-control" value="<?php echo $aspirante->puesto; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Estado Civil *</label>
                                        <select name="estado_civil" class="form-control" required>
                                            <option value="<?php echo $aspirante->estado_civil; ?>"><?php echo $aspirante->estado_civil; ?></option>
                                            <option value="Soltero/a">Soltero/a</option>
                                            <option value="Casado(a)">Casado(a)</option>
                                            <option value="En una relación">En una relación</option>
                                            <option value="Comprometido(a)">Comprometido(a)</option>
                                            <option value="Mantiene una unión civil">Mantiene una unión civil</option>
                                            <option value="Divorciado(a)">Divorciado(a)</option>
                                            <option value="Viudo(a)">Viudo(a)</option>
                                            <option value="Separado(a)">Separado(a)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Aprovacion *</label>
                                        <select name="aprovacion" class="form-control" required>
                                            <option value=""><?php echo $aspirante->aprovacion; ?></option>
                                            <option value="Aprobado">Aprobado</option>
                                            <option value="Rechazado">Rechazado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Fecha de Aplicación *</label>
                                        <input name="fecha_examen" class="form-control" value="<?php echo $aspirante->fecha_examen; ?>" disabled required >
                                    </div>
                                    <div class="form-group">
                                        <div class="">
                                             <label>Fecha de Nacimiento *</label>
                                             <input name="fecha_nacimiento" class="form-control" value="<?php echo $aspirante->fecha_nacimiento; ?>" required placeholder="YYYY-MM-DD" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Edad *</label>
                                        <input name="edad" class="form-control" value="<?php echo $aspirante->edad; ?>" required onkeypress="return only_num(event)" maxlength="2">
                                    </div>
                                    <div class="form-group">
                                        <label>Grado de Escolaridad *</label>
                                        <input name="grado_escolaridad" class="form-control" value="<?php echo $aspirante->grado_escolaridad; ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group text-center">
                                        <label>Total de Respuestas en E</label>
                                        <input name="respuestas_E" class="form-control text-center" value="<?php echo $aspirante->respuestas_E; ?>" disabled required>
                                    </div>
                                    <div class="form-group text-center">
                                        <label>Total de Puntos E</label>
                                        <input name="puntos_E" class="form-control text-center" value="<?php echo $aspirante->puntos_E; ?>" disabled required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group text-center">
                                        <label>Total de Respuestas en N</label>
                                        <input name="respuestas_N" class="form-control text-center" value="<?php echo $aspirante->respuestas_N; ?>" disabled required>
                                    </div>
                                    <div class="form-group text-center">
                                        <label>Total de Puntos N</label>
                                        <input name="puntos_N" class="form-control text-center" value="<?php echo $aspirante->puntos_N; ?>" disabled required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group text-center">
                                        <label>Total de Respuestas en V</label>
                                        <input name="respuestas_V" class="form-control text-center" value="<?php echo $aspirante->respuestas_V; ?>" disabled required>
                                    </div>
                                    <div class="form-group text-center">
                                        <label>Total de Puntos V</label>
                                        <input name="puntos_V" class="form-control text-center" value="<?php echo $aspirante->puntos_V; ?>" disabled required>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div class="form-group">
                                        <label>Resultados Finales</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group text-center">
                                        <label>Puntos Totales</label>
                                        <input name="puntos_total" class="form-control text-center" value="<?php echo $aspirante->puntos_total; ?>" disabled required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group text-center">
                                        <label>Porcentaje Total</label>
                                        <div class="form-group input-group">
                                            <input name="percen_total" class="form-control text-center" value="<?php echo $aspirante->percen_total; ?>" disabled required>
                                            <span class="input-group-addon">%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Observaciones</label>
                                        <textarea name="observaciones" class="form-control" rows="4"><?php echo $aspirante->observaciones; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- /.row (nested) -->
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="text-center" style="margin-bottom: 30px;">
                {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
            </div>
            
        {!! Form::close() !!}
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>
<?php } ?>

@endsection


