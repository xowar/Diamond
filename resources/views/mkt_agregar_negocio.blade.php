@extends('app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">REGISTRO DE NEGOCIO</h1>
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
        {!! Form::open(['url'=>'home/mkt/guardar_negocio', 'method'=>'POST']) !!}
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
                                            <label>Nombre del Negocio</label>
                                            <input type="" name="nombre_negocio" class="form-control" required>
                                        </div>  
                                    </div>
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
                                            <div class="col-lg-4">
                                                <select name="sub1" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>
                                            <div class="col-lg-4">
                                                <select name="sub2" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>
                                            <div class="col-lg-4">
                                                <select name="sub3" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>                                         
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