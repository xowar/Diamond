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
        <!-- /.row -->
        {!! Form::open(['url'=>'home/create_users', 'method'=>'POST', 'files' => 'true']) !!}
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
                                            <label>Nombre *</label>
                                            <input name="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Edad *</label>
                                            <input name="edad" class="form-control" required>
                                        </div>
                                            <div class="form-group">
                                            <label>Sexo *</label>
                                            <select name="sexo" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input name="telefono" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input name="celular" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>CURP *</label>
                                            <input name="curp" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de Nacimiento</label>
                                            <input name="fecha_nacimiento" placeholder="dd-mm-yyyy" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                                        </div>
                                        <div class="form-group">
                                            <label>Puesto</label>
                                            <input name="puesto" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Rol *</label>
                                            <select name="id_roles" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <option value="1">asesor</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Equipo *</label>
                                            <select name="equipo" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <option value="1">Rojo</option>
                                                <option value="2">Azul</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Fecha de Ingreso *</label>
                                            <div class="form-group">
                                                <div class='input-group date'>
                                                    <input name="fecha_ingreso" type='text' class="form-control" required id="date2"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
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