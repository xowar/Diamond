@extends('app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">AUTORIZACIÓ</h1>
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
                            <b>VERIFICAR AUTORIZACIÓ</b>
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                            {!! Form::open(['url'=>'home/mkt/buscar_por_proyecto/por_autorizar_guardar', 'method'=>'POST']) !!}
                                <div class="col-lg-6">
                                    <div class="form-group text-center">
                                        <label>Selecciona Persona que Autoriza</label>
                                        <select name="employee" class="form-control" required>
                                            <?php foreach ($articulos as $articulo) { ?>
                                                <option value="<?php echo $articulo->aprovado_por; ?>"><?php echo $articulo->aprovado_por; ?></option>
                                            <?php } ?>
                                            <?php foreach ($employees as $employee) { ?>
                                                <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div>
                                    <div class="form-group text-center" style="display: none;">
                                        <?php foreach ($articulos as $articulo) { ?>
                                            <input type="" name="id_articulo" value="<?php echo $articulo->id_articulos; ?>">
                                            <input type="" name="id_proyectos" value="<?php echo $articulo->id_proyectos; ?>">
                                        <?php } ?>
                                    </div>

                                    <div class="text-center">
                                        {!! Form::submit('AUTORIZAR', ['class'=>'btn btn-primary']) !!}
                                    </div>
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