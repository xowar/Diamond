@extends('app')

@section('content')
<?php foreach ($users as $user) {?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">REGISTRO DE EMPLEADOS</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        {!! Form::model($user,['files' => 'true', 'method' => 'PATCH','action'=>['UserController@update','id'=>$user->id_employees]]) !!}
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
                                            <input value="<?php echo $user->name; ?>" name="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Edad *</label>
                                            <input value="<?php echo $user->edad; ?>" name="edad" class="form-control" required>
                                        </div>
                                            <div class="form-group">
                                            <label>Sexo *</label>
                                            <select name="sexo" class="form-control">
                                                <option value="<?php echo $user->sexo; ?>">Selecciona una opcion</option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input value="<?php echo $user->telefono; ?>" name="telefono" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input value="<?php echo $user->celular; ?>" name="celular" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>CURP *</label>
                                            <input value="<?php echo $user->curp; ?>" name="curp" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de Nacimiento</label>
                                            <input value="<?php echo $user->fecha_nacimiento; ?>" name="fecha_nacimiento" placeholder="dd-mm-yyyy" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="<?php echo $user->email; ?>" name="email" class="form-control" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                                        </div>

                                        <!--<div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>-->
                                        <div class="form-group">
                                            <label>Puesto</label>
                                            <input value="<?php echo $user->puesto; ?>" name="puesto" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Rol *</label>
                                            <select name="id_roles" class="form-control">
                                                <option value="<?php echo $user->id_roles; ?>">Selecciona una opcion</option>
                                                <option value="1">asesor</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Equipo *</label>
                                            <select name="equipo" class="form-control">
                                                <option value="<?php echo $user->equipo; ?>">Selecciona una opcion</option>
                                                <option value="1">Rojo</option>
                                                <option value="2">Azul</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Fecha de Ingreso *</label>
                                            <div class="form-group">
                                                <div class='input-group date'>
                                                    <input value="<?php echo $user->fecha_ingreso; ?>" name="fecha_ingreso" type='text' class="form-control" required id="date2"/>
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
<?php } ?>


@endsection