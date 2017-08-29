@extends('app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">REGISTRO DE PROYECTO</h1>
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
        {!! Form::open(['url'=>'home/mkt/guardar_proyecto', 'method'=>'POST']) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                           	Formulario
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Lider de proyecto *</label>
                                            <select name="lider_proyecto" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Sub Lideres</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <select name="sub1" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>
                                            <div class="col-lg-3">
                                                <select name="sub2" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>
                                            <div class="col-lg-3">
                                                <select name="sub3" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>
                                            <div class="col-lg-3">
                                                <select name="sub4" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Direccion *</label>
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="latitud" class="form-control" required placeholder="LATITUD" maxlength="60">
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="longitud" class="form-control" required placeholder="LONGITUD"d maxlength="60">
                                            </div>
                                            
                                        </div>
                                            <div class="form-group">
                                            <label>Renders *</label>
                                            <textarea name="renders" class="form-control" rows="4"></textarea>

                                        </div>  
                                        <div class="form-group">
                                            <label>Medidas *</label>
                                            <textarea name="medidas" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Precios *</label>
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="precio_min" class="form-control" required placeholder="MIN" onkeypress="return only_num(event)" maxlength="20">
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="precio_max" class="form-control" required placeholder="MAX" onkeypress="return only_num(event)" maxlength="20">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>Precio estimado de comercializacion*</label>
                                                <input name="precio_cormecializacion" class="form-control" required  onkeypress="return only_num(event)">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Comision*</label>
                                                <input name="comision" class="form-control" required  onkeypress="return only_num(event)" maxlength="2">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Comision MKT*</label>
                                                <input name="comision_mkt" class="form-control" required  onkeypress="return only_num(event)" maxlength="2">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Caracteristicas *</label>
                                            <textarea name="caracteristicas" class="form-control" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre Inicial *</label>
                                            <input name="nombre_inicial" class="form-control" required>
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
                <input style="display: none;" type="text" name="create_by" value="{{ Auth::user()->name }}">
            </div>
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
      
        {!! Form::close() !!}
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection