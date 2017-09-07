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

                        <?php foreach ($clients as $client) {?>
                        <div class="panel-body">
                        <input type="" name="id_cliente" value="<?php echo $client->id_client; ?>" style="display: none;">
                                <input type="" name="puesto" value="<?php echo Auth::user()->puesto; ?>" style="display: none;">  
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
                                <select name="ubicacion_persona" class="form-control" required>
                                    <option value="<?php echo $client->ubicacion_persona; ?>"><?php echo $client->ubicacion_persona; ?></option>
                                    <?php foreach ($states as $state) { ?>
                                        <option value="<?php echo $state->estados; ?>"><?php echo $state->estados; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Presupuesto:</label>
                                <input type="" name="presupuesto" class="form-control" value="<?php echo $client->presupuesto; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tipo de Pago: </label>
                                <select id="tipo_pago"  name="tipo_pago" class="form-control">
                                    <option value="<?php echo $client->tipo_pago; ?>"><?php echo $client->tipo_pago; ?></option>
                                    <option value="Efectivo">Efectivo</option>
                                        <option value="Credito">Credito</option>
                                    </select>
                            </div>
                            <div id="tipo_credito" class="form-group" style="<?php if ($client->tipo_pago == "Credito") { echo "display: true;";
                            }elseif($client->tipo_pago == "Efectivo"){ echo "display: none;"; }elseif (empty($client->tipo_pago)) { echo "display: none;"; } ?>">
                                <label>Tipo de Credito: </label>
                                <select  name="tipo_credito" class="form-control">
                                    <option value="<?php echo $client->tipo_credito; ?>"><?php echo $client->tipo_credito; ?></option>
                                    <?php foreach ($credits as $credit) { ?>
                                        <option value="<?php echo $credit->creditos; ?>"><?php echo $credit->creditos; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Necesidad del Cliente: </label>
                                <textarea type="" name="necesidad_cliente" class="form-control"><?php echo $client->necesidad_cliente; ?></textarea>
                            </div>
                            
                        </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Tipo de Cliente: </label>
                                    <select name="tipo_cliente" class="form-control" required>
                                        <option value="<?php echo $client->tipo_cliente; ?>"><?php echo $client->tipo_cliente; ?></option>
                                        <option value="Compra">Compra</option>
                                        <option value="Venta">Venta</option>
                                        <option value="Renta">Renta</option>
                                    </select>
                                </div>
                                <div class="form-group" style="display: <?php if(empty($client->referido_online)){ echo "none;"; } ?>">
                                    <label>Referido Online: </label>
                                        <select name="referido_online" class="form-control" >
                                            <option value="<?php echo $client->referido_online; ?>"><?php echo $client->referido_online; ?></option>
                                            <option value="Anuncio en internet">Anuncio en internet</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Twitter">Twitter</option>
                                            <option value="Instagram">Instagram</option>
                                            <option value="Pinterest">Pinterest</option>
                                            <option value="Radio">Radio</option>
                                            <option value="TV">TV</option>
                                        </select>

                                </div>
                                <div class="form-group" style="display: <?php if(empty($client->referido_offline)){ echo "none;"; } ?>" >
                                    <label>Referido Offline: </label>
                                    <select name="referido_offline" class="form-control">
                                        <option value="<?php echo $client->referido_offline; ?>"><?php echo $client->referido_offline; ?></option>
                                        <option value="Referido">Referido</option>
                                        <option value="Familiar">Familiar</option>
                                        <option value="Amigo">Amigo</option>
                                        <option value="Seguimiento">Seguimiento</option>
                                        <option value="Periodico">Periodico</option>
                                        <option value="Radio">Radio</option>
                                        <option value="Asesores">Asesores</option>
                                        <option value="Modulos">Modulos</option>
                                        <option value="Oficinas">Oficinas</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Modulo / Oficina: </label>
                                    <select name="modulo" class="form-control" required>
                                        <option value="<?php echo $client->modulo; ?>"><?php echo $client->modulo; ?></option>
                                        <?php foreach ($offices as $office) { ?>
                                            <option value="<?php echo $office->oficina; ?>"><?php echo $office->oficina; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Asesor: </label>
                                    <select name="asesor" class="form-control" required>
                                        <option value="<?php echo $client->asesor; ?>"><?php echo $client->asesor; ?></option>
                                        <?php foreach ($employees as $employee) { ?>
                                            <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Ubicacion de la Propiedad: </label>
                                    <select name="ubicacion_propiedad" class="form-control" required>
                                        <option value="<?php echo $client->ubicacion_propiedad; ?>"><?php echo $client->ubicacion_propiedad; ?></option>
                                        <?php foreach ($states as $state) { ?>
                                            <option value="<?php echo $state->estados; ?>"><?php echo $state->estados; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Requisitos de la propiedad: </label>
                                    <textarea type="" name="requisitos_propiedad" class="form-control"><?php echo $client->requisitos_propiedad; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nombre del Proyecto: </label>
                                    <input type="" name="nombre_proyecto" class="form-control" value="<?php echo $client->name_proyecto; ?>">
                            </div>
                            </div>
                            <div class="col-lg-12 text-center" style="margin-bottom: 30px;">
                                {!! Form::submit('Editar datos de prospecto', ['class'=>'btn btn-primary']) !!}
                            </div>
                            {!! Form::close() !!}
                            {!! Form::open(['url'=>'home/modulos/table_prospecto/seguimiento/add_actividad', 'method'=>'POST']) !!}
                            <div class="col-lg-12" style="margin-top: 20px">
                                <div class="col-lg-4" style="display: none;">
                                    <div class="form-group">
                                        <?php foreach ($clients as $client) { ?>
                                            <input name="id_cliente" class="form-control" value="<?php echo $client->id_client; ?>">
                                        <?php } ?>
                                    </div>
                                </div>
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
                                        <label>Tipo de Candidato</label>
                                        <select name="candidato" class="form-control" required>
                                        <?php foreach ($clients as $client) { ?>
                                            <option value="<?php echo $client->candidato; ?>"><?php echo $client->candidato; ?></option>
                                        <?php } ?>
                                            <option value="Potencial">Potencial</option>
                                            <option value="Basura">Basura</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                
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