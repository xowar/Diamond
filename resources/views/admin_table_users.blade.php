@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">INFORMACIÓN DE EMPLEADOS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="overflow-y:hidden;overflow-x:scroll;">
                <div class="col-lg-12 table-scroll-users">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Datos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th style="width: 250px;">Opciones</th>
                                        <th>Nombre</th>
                                        <th>Edad</th>
                                        <th>Sexo</th>
                                        <th>Teléfono</th>
                                        <th>Celular</th>
                                        <th>CURP</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Email</th>
                                        <th>Puesto</th>
                                        <th>Rol</th>
                                        <th>Equipo</th>
                                        <th>Fecha de Ingreso</th>
                                        <th>Fecha de Salida</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php 
                                        foreach ($users as $user) {?>
                                        <tr class="odd gradeX">
                                            <td>
                                                <a class="btn btn-primary" href="{{URL::to('home/admin_create_acc', array($user->id_employees))}}">Agregar Cuenta</a>
                                                <a class="btn btn-danger" style="<?php if ($user->id_user < "1") {
                                                    echo "display: none;";
                                                } ?>" href="{{URL::to('home/admin_table_users/destroy_acc', array($user->id_employees))}}">Eliminar Cuenta</a>
                                            </td>
                                            <td><?php echo $user->name; ?></td>
                                            <td><?php echo $user->edad; ?></td>
                                            <td><?php echo $user->sexo; ?></td>
                                            <td><?php echo $user->telefono; ?></td>
                                            <td><?php echo $user->celular; ?></td>
                                            <td><?php echo $user->curp; ?></td>
                                            <td><?php echo $user->fecha_nacimiento; ?></td>
                                            <td><?php echo $user->email; ?></td>
                                            <td><?php echo $user->puesto; ?></td>
                                            <td><?php echo $user->id_roles; ?></td>
                                            <td><?php echo $user->equipo; ?></td>
                                            <td><?php echo $user->fecha_ingreso; ?></td> 
                                            <td><?php echo $user->fecha_salida; ?></td> 
                                        </tr>
                                    <?php } ?>
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>                                                    
                        <!-- /.panel-body -->
                    </div>

                    <!-- /.panel -->
                </div>

                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
    </div>



@endsection
