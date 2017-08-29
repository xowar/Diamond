@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SEGUIMIENTO DE PROSPECTOS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        {!! Form::open(['url'=>'home/modulos/table_prospecto/seguimiento/editar_prospecto', 'method'=>'POST']) !!}
                        <div class="panel-body">
                        <?php foreach ($clients as $client) {?>
                        <div class="col-lg-3">                          
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="" name="nombre" class="form-control" value="<?php echo $client->nombre; ?>">
                            </div>
                            <div class="form-group">
                                <label>Email: </label>
                                <input type="" name="email" class="form-control" value="<?php echo $client->email; ?>">
                            </div>
                            <div class="form-group">
                                <label>Teléfono:</label>
                                <input type="" name="telefono" class="form-control" value="<?php echo $client->telefono; ?>">
                            </div>
                            <div class="form-group">
                                <label>Celular: </label>
                                <input type="" name="celular" class="form-control" value="<?php echo $client->celular; ?>">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Ubicacion de la Persona: </label>
                                <input type="" name="ubicacion_persona" class="form-control" value="<?php echo $client->ubicacion_persona; ?>">
                            </div>
                            <div class="form-group">
                                <label>Presupuesto:</label>
                                <input type="" name="presupuesto" class="form-control" value="<?php echo $client->presupuesto; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tipo de Credito: </label>
                                <input type="" name="tipo_credito" class="form-control" value="<?php echo $client->tipo_credito; ?>">
                            </div>

                            <div class="form-group">
                                <label>Necesidad del Cliente: </label>
                                <input type="" name="necesidad_cliente" class="form-control" value="<?php echo $client->necesidad_cliente; ?>">
                            </div>
                            
                        </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Tipo de Cliente: </label>
                                    <input type="" name="tipo_cliente" class="form-control" value="<?php echo $client->tipo_cliente; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Referido: </label>
                                    <input type="" name="referido" class="form-control" value="<?php echo $client->referido; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Modulo / Oficina: </label>
                                    <input type="" name="modulo" class="form-control" value="<?php echo $client->modulo; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Asesor: </label>
                                    <input type="" name="asesor" class="form-control" value="<?php echo $client->asesor; ?>">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Ubicacion de la Propiedad: </label>
                                    <input type="" name="ubicacion_propiedad" class="form-control" value="<?php echo $client->ubicacion_propiedad; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Requisitos de la propiedad: </label>
                                    <input type="" name="requisitos_propiedad" class="form-control" value="<?php echo $client->requisitos_propiedad; ?>">
                                </div>
                            </div>
                            <div class="col-lg-12 text-center" style="margin-bottom: 30px;">
                                {!! Form::submit('Editar datos de prospecto', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                            {!! Form::open(['url'=>'home/modulos/table_prospecto/seguimiento/add_actividad', 'method'=>'POST']) !!}
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Actividad</label>
                                        <input name="actividad" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Observación</label>
                                        <textarea name="observacion" class="form-control" rows="2" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Candidato</label>
                                        <select name="candidato" class="form-control" required>
                                            <option value="<?php echo $client->candidato; ?>"><?php echo $client->candidato; ?></option>
                                            <option value="Potencial">Potencial</option>
                                            <option value="Basura">Basura</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <input type="" name="id_cliente" value="<?php echo $client->id_client; ?>" style="display: none;">
                                <input type="" name="puesto" value="<?php echo Auth::user()->puesto; ?>" style="display: none;">
                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                            </div>
                        <?php } ?>
                        {!! Form::close() !!}
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>                                        
                                        <th>Actividad</th>
                                        <th>Observación</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php 
                                        foreach ($seguimientos as $seguimiento) {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $seguimiento->actividad; ?></td> 
                                            <td><?php echo $seguimiento->observacion; ?></td> 
                                            <td><?php echo $seguimiento->fecha; ?></td> 
                                        </tr>
                                    <?php } ?>
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>                                                    
                        <!-- /.panel-body -->
                    </div>

                    <!-- /.panel -->
                </div>

                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
    </div>



@endsection