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
                                        <th style="width: 160px;">Opciones</th>
                                        <th>Nombre</th>
                                        <th>Edad</th>
                                        <th>Sexo</th>
                                        <th>Teléfono</th>
                                        <th>Celular</th>
                                        <th>CURP</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        <th>Fecha de Ingreso</th>
                                        <th>Caducidad INE (Días)</th>
                                        <th>Caducidad Comp. Domicilio (Días)</th>
                                        <th>Documentos</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php 
                                        foreach ($users as $user) {?>
                                        <?php        
                                            $fechaActual = date("Y/m/d");
                                            
                                            $fechaINE1 = new DateTime($user->fecha_ine);
                                            $fechaINE2 = new DateTime($fechaActual);
                                            $fechaINE = $fechaINE1->diff($fechaINE2);
                                            $fechaINE3 = $fechaINE->format('%a');

                                            $fechaCOMP1 = new DateTime($user->fecha_comprobante);
                                            $fechaCOMP2 = new DateTime($fechaActual);
                                            $fechaCOMP = $fechaCOMP1->diff($fechaCOMP2);
                                            $fechaCOMP3 = $fechaCOMP->format('%a');
                                        ?>
                                        <tr class="odd gradeX" style="<?php 
                                        if ($fechaINE3 <= 60 || $fechaCOMP3 <= 30) {
                                            echo "background-color: #ffb3b3;";
                                        } ?>">
                                            <td>
                                                <a class="btn btn-primary" href="{{URL::to('home/table_users/edit', array(Auth::user()->puesto, $user->id_employees))}}">Editar</a>
                                                <a class="btn btn-danger" href="{{URL::to('home/table_users/destroy', array(Auth::user()->puesto, $user->id_employees))}}">Eliminar</a>
                                            </td>
                                            <td><?php echo $user->name; ?></td>
                                            <td><?php echo $user->edad; ?></td>
                                            <td><?php echo $user->sexo; ?></td>
                                            <td><?php echo $user->telefono; ?></td>
                                            <td><?php echo $user->celular; ?></td>
                                            <td><?php echo $user->curp; ?></td>
                                            <td><?php echo $user->fecha_nacimiento; ?></td>
                                            <td><?php echo $user->email; ?></td>
                                            <td><?php echo $user->roles; ?></td>
                                            <td><?php echo $user->fecha_ingreso; ?></td> 
                                            <td><?php echo $fechaINE3;?></td>
                                            <td><?php echo $fechaCOMP3;?></td>

                                            <td><a class="btn btn-info" href="{{URL::to('home/table_users/documentos', array($user->id_employees))}}">Mostrar</a></td>
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
