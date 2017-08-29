@extends('app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">BUSCADOR</h1>
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
        
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            <b>Buscar por PROYECTO o por ID DE PROPIEDAD</b>
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                            {!! Form::open(['url'=>'home/mkt/buscar_por_proyecto', 'method'=>'POST']) !!}
                                <div class="col-lg-4">
                                    <div class="form-group text-center">
                                        <label>Selecciona Proyecto</label>
                                        <select name="id_proyectos" class="form-control" required>
                                            <option value="">Selecciona una opcion</option>
                                            <?php foreach ($proyectos as $proyecto) { ?>
                                                <option value="<?php echo $proyecto->id_proyecto; ?>"><?php echo $proyecto->nombre_inicial; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="text-center">
                                        {!! Form::submit('Buscar por Proyecto', ['class'=>'btn btn-primary']) !!}
                                    </div>
                                </div>
                                
                            {!! Form::close() !!}
                            {!! Form::open(['url'=>'home/mkt/buscar_por_negocios', 'method'=>'POST']) !!}
                                <div class="col-lg-4">
                                    <div class="form-group text-center">
                                        <label>Selecciona Negocio</label>
                                        <select name="id_negocio" class="form-control" required>
                                            <option value="">Selecciona una opcion</option>
                                            <?php foreach ($negocios as $negocio) { ?>
                                                <option value="<?php echo $negocio->id_negocio; ?>"><?php echo $negocio->nombre_negocio; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="text-center">
                                        {!! Form::submit('Buscar por Negocio', ['class'=>'btn btn-primary']) !!}
                                    </div>
                                </div>
                                
                            {!! Form::close() !!}
                            {!! Form::open(['url'=>'home/mkt/buscar_por_id', 'method'=>'POST']) !!}
                                <div class="col-lg-4">
                                    <div class="form-group text-center">
                                        <label>Ingresa ID de Propiedad</label>
                                        <input type="" name="id_propiedad" class="form-control" required onkeypress="return only_num(event)">
                                    </div>
                                    <div class="text-center">
                                        {!! Form::submit('Buscar por ID', ['class'=>'btn btn-primary']) !!}
                                    </div>
                            {!! Form::close() !!}
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
            
      
        
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection