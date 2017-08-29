@extends('app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">VISITAS EN MODULO: {{ Auth::user()->oficina }}</h1>
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
        {!! Form::open(['url'=>'home/modulos/visitas/agregar_visitas', 'method'=>'POST']) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <input type="" name="fecha" class="form-control" value="<?php echo date('d-m-Y'); ?>" style="display: none;>
                                    </div>
                                    <div class="form-group">
                                        <input type="" name="oficina" class="form-control" value="<?php echo Auth::user()->oficina; ?>" style="display: none;">
                                    </div>
                                    <div class="form-group" style="display: none;">
                                        <input type="" name="visita" class="form-control" value="1" >
                                    </div>
                                    <div class="form-group">
                                        {!! Form::submit('Agregar Visita', ['class'=>'btn btn-primary']) !!}
                                    </div>
                                </div>
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
            
      
        {!! Form::close() !!}
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection