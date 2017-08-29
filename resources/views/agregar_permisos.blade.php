@extends('app')

@section('content')
<?php foreach ($puestos as $puesto) {?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dar permisos a: <?php echo $puesto->rol; ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        {!! Form::model($puesto,['files' => 'true', 'method' => 'PATCH','action'=>['AdminController@update','id'=>$puesto->id_rol]]) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                           	Permisos
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                        
                                            <label>Registrar Propiedades</label>
                                            <select name="registro_propiedad" class="form-control" required>
                                                <option value="<?php echo $puesto->registro_propiedad; ?>"><?php if ($puesto->registro_propiedad == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Datos de Propiedad</label>
                                            <select name="datos_propiedad" class="form-control" required>
                                                <option value="<?php echo $puesto->datos_propiedad; ?>"><?php if ($puesto->datos_propiedad == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Editar Propiedades</label>
                                            <select name="editar_propiedad" class="form-control" required>
                                                <option value="<?php echo $puesto->editar_propiedad; ?>"><?php if ($puesto->editar_propiedad == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Eliminar Propiedades</label>
                                            <select name="eliminar_propiedad" class="form-control" required>
                                                <option value="<?php echo $puesto->eliminar_propiedad; ?>"><?php if ($puesto->eliminar_propiedad == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <div class="row">

                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Propiedades Eliminadas</label>
                                            <select name="propiedades_eliminadas" class="form-control" required>
                                                <option value="<?php echo $puesto->propiedades_eliminadas; ?>"><?php if ($puesto->propiedades_eliminadas == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Restaurar Propiedades *</label>
                                            <select name="restaurar_propiedad" class="form-control" required>
                                                <option value="<?php echo $puesto->restaurar_propiedad; ?>"><?php if ($puesto->restaurar_propiedad == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            Permisos
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Crear Empleado</label>
                                            <select name="crear_empleado" class="form-control" required>
                                                <option value="<?php echo $puesto->crear_empleado; ?>"><?php if ($puesto->crear_empleado == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Datos de Empleados</label>
                                            <select name="datos_empleado" class="form-control" required>
                                                <option value="<?php echo $puesto->datos_empleado; ?>"><?php if ($puesto->datos_empleado == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Editar Empleado</label>
                                            <select name="editar_empleado" class="form-control" required>
                                                <option value="<?php echo $puesto->editar_empleado; ?>"><?php if ($puesto->editar_empleado == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Eliminar Empleado</label>
                                            <select name="eliminar_empleado" class="form-control" required>
                                                <option value="<?php echo $puesto->eliminar_empleado; ?>"><?php if ($puesto->eliminar_empleado == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Empleados Eliminados</label>
                                            <select name="empleados_eliminados" class="form-control" required>
                                                <option value="<?php echo $puesto->empleados_eliminados; ?>"><?php if ($puesto->empleados_eliminados == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Restaurar Empleados</label>
                                        <select name="restaurar_empleado" class="form-control" required>
                                            <option value="<?php echo $puesto->restaurar_empleado; ?>"><?php if ($puesto->restaurar_empleado == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                            <option value="0">No</option>
                                            <option value="1">Si</option>
                                        </select>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            Permisos
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Crear Cuenta</label>
                                            <select name="crear_cuenta" class="form-control" required>
                                                <option value="<?php echo $puesto->crear_cuenta; ?>"><?php if ($puesto->crear_cuenta == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Agregar Cuenta</label>
                                            <select name="agregar_cuenta" class="form-control" required>
                                                <option value="<?php echo $puesto->agregar_cuenta; ?>"><?php if ($puesto->agregar_cuenta == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Eliminar Cuenta *</label>
                                            <select name="eliminar_cuenta" class="form-control" required>
                                                <option value="<?php echo $puesto->eliminar_cuenta; ?>"><?php if ($puesto->eliminar_cuenta == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Agregar Informacion</label>
                                            <select name="agregar_informacion" class="form-control" required>
                                                <option value="<?php echo $puesto->agregar_informacion; ?>"><?php if ($puesto->agregar_informacion == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                                <option value="0">No</option>
                                                <option value="1">Si</option>
                                            </select>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            Permisos
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                 <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Descargar Reportes</label>
                                        <select name="reportes_excel" class="form-control" required>
                                            <option value="<?php echo $puesto->reportes_excel; ?>"><?php if ($puesto->reportes_excel == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                            <option value="0">No</option>
                                            <option value="1">Si</option>
                                        </select>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            Permisos
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                 <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Visitas</label>
                                        <select name="visitas" class="form-control" required>
                                            <option value="<?php echo $puesto->visitas; ?>"><?php if ($puesto->visitas == "0") { echo "No"; }else{ echo "Si";}  ?></option>
                                            <option value="0">No</option>
                                            <option value="1">Si</option>
                                        </select>
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
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
      
        {!! Form::close() !!}
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>
<?php } ?>


@endsection