@extends('app')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">REGISTRO DE USUARIOS</h1>
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
        {!! Form::open(['url'=>'home/create_users', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row col-lg-6">
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
                                            <label>Ciudades *</label>
                                            <input name="ciudades" class="form-control" required>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        {!! Form::close() !!}
        <!-- End -->
        {!! Form::open(['url'=>'home/agregar_info/add_colonia', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row col-lg-6">
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
                                            <label>Colonia *</label>
                                            <input name="colonia" class="form-control" required>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        {!! Form::close() !!}
        <!-- End -->
        
        {!! Form::open(['url'=>'home/agregar_info/add_estados', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row col-lg-6">
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
                                            <label>Estados *</label>
                                            <input name="estados" class="form-control" required>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        {!! Form::close() !!}
        
        {!! Form::open(['url'=>'home/agregar_info/add_oficinas', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row col-lg-6">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            Formulario
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Oficinas *</label>
                                            <input name="oficina" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Codigo *</label>
                                            <input name="codigo" class="form-control" required  maxlength="3">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Estado *</label>
                                            <select name="estado" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <?php foreach ($states as $estado) {?>
                                                <option value="<?php echo $estado->id_state; ?>"><?php echo $estado->estados; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        {!! Form::close() !!}
        
        {!! Form::open(['url'=>'home/agregar_info/add_creditos', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row col-lg-6">
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
                                            <label>Creditos *</label>
                                            <input name="creditos" class="form-control" required>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        {!! Form::close() !!}
        
        {!! Form::open(['url'=>'home/agregar_info/add_comiciones', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row col-lg-6">
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
                                            <label>Comiciones</label>
                                            <input name="comision" class="form-control" required>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        {!! Form::close() !!}
        
        {!! Form::open(['url'=>'home/agregar_info/add_tipo_propiedad', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row col-lg-6">
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
                                            <label>Tipo de propiedad *</label>
                                            <input name="tipo_propiedad" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Identificador de propiedad *</label>
                                            <input name="identificador" class="form-control" maxlength="1" onkeypress="return soloLetras(event)">
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        {!! Form::close() !!}
        
        {!! Form::open(['url'=>'home/agregar_info/add_razon_eliminar', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row col-lg-6">
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
                                            <label>Razon para eliminar propiedad *</label>
                                            <input name="reason" class="form-control" required>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        {!! Form::close() !!}
        
        {!! Form::open(['url'=>'home/agregar_info/add_puesto', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row col-lg-6">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            Formulario
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label>Puestos *</label>
                                            <input name="puesto" class="form-control" required >
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        {!! Form::close() !!}

        {!! Form::open(['url'=>'home/agregar_permiso', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row col-lg-6">
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
                                        <input type="" name="puesto" style="display: none;" value="{{Auth::user()->puesto}}">
                                            <label>Asignar Permisos a: *</label>
                                            <select name="add_permiso" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <?php foreach ($roles as $rol) {?>
                                                <option value="<?php echo $rol->id_rol; ?>"><?php echo $rol->rol; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            {!! Form::submit('Agregar', ['class'=>'btn btn-primary']) !!}
                        </div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        {!! Form::close() !!}
        


    </div>
    <!-- /.container-fluid -->
</div>
@endsection