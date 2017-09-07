@extends('app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">REGISTRO DE PROSPECTO</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <!-- /.row -->
        {!! Form::open(['url'=>'home/modulos/prospecto/save_prospecto', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                           	Formulario
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input name="nombre" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Ubicacion de la paersona</label>
                                             <select name="ubicacion_persona" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($states as $state) { ?>
                                                    <option value="<?php echo $state->estados; ?>"><?php echo $state->estados; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                                        </div>
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input name="telefono" class="form-control" onkeypress="return only_num(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input name="celular" class="form-control" onkeypress="return only_num(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>Ubicación de la Propiedad</label>
                                            <select name="ubicacion_propiedad" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($states as $state) { ?>
                                                    <option value="<?php echo $state->estados; ?>"><?php echo $state->estados; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de propiedad</label>
                                            <select id="info_ref" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($type_propertys as $type_property) { ?>
                                                    <option value="<?php echo $type_property->tipo_propiedad; ?>"><?php echo $type_property->tipo_propiedad; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>¿Que Proyecto?</label>
                                            <input name="name_proyecto" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Necesidad del cliente</label>
                                            <textarea name="necesidad_cliente" class="form-control" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Presupuesto</label>
                                            <input name="presupuesto" class="form-control" onkeypress="return only_num(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>¿Como se Entero?</label>
                                            <select id="ref_info" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Online">Online</option>
                                                <option value="Offline">Offline</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select id="online" name="referido_online" class="form-control" style="display: none;">
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Anuncio en internet">Anuncio en internet</option>
                                                <option value="Facebook">Facebook</option>
                                                <option value="Twitter">Twitter</option>
                                                <option value="Instagram">Instagram</option>
                                                <option value="Pinterest">Pinterest</option>
                                                <option value="Radio">Radio</option>
                                                <option value="TV">TV</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select id="offline" name="referido_offline" class="form-control" style="display: none;">
                                                <option value="">Selecciona una opcion</option>
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
                                            <label>Tipo de pago</label>
                                            <select id="tipo_pago" name="tipo_pago" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Efectivo">Efectivo</option>
                                                <option value="Credito">Credito</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select id="tipo_credito" name="tipo_credito" class="form-control" style="display: none">
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($credits as $credit) { ?>
                                                    <option value="<?php echo $credit->creditos; ?>"><?php echo $credit->creditos; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Cliente</label>
                                            <select name="tipo_cliente" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Compra">Compra</option>
                                                <option value="Venta">Venta</option>
                                                <option value="Renta">Renta</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Modulo / Oficina</label>
                                            <select name="sucursal" class="form-control" required>
                                                <option value="<?php echo Auth::user()->oficina; ?>"><?php echo Auth::user()->oficina; ?></option>
                                                <?php foreach ($offices as $office) { ?>
                                                    <option value="<?php echo $office->oficina; ?>"><?php echo $office->oficina; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Asesor</label>
                                            <select name="asesor" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Candidato</label>
                                            <select name="tipo_candidato" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Basura">Basura</option>
                                                <option value="Potencial">Potencial</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Requisitos de la propiedad</label>
                                            <textarea name="requisitos_propiedad" class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div>
                <input style="display: none;" type="text" name="id" value="{{ Auth::user()->id }}">
            </div>
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
      
        {!! Form::close() !!}
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection