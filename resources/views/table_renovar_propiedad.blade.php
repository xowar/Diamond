@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">RENOVACION DE PROPIEDADES</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!--<div class="row">
                <div class="col-lg-6">
                   <a class="btn btn-success" href="{{URL::to('home/table_propiedades/excel_propiedades')}}">Descargar Excel</a>
                </div>
            </div>-->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
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
                                        <th>ID</th>
                                        <th>ASESOR</th>
                                        <th>FECHA INICIO</th>
                                        <th>FECHA TERMINO</th>
                                        <th>DIAS RESTANTES</th>
                                        <th>DOCUMENTACIÓN</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                        <?php foreach ($registro_de_propiedad as $propiedad) {?>
                                        <?php        
                                            $fechaActual = date("Y/m/d");
                                            
                                            $fecha1 = new DateTime($propiedad->fecha_termino);
                                            $fecha2 = new DateTime($fechaActual);
                                            $fecha = $fecha1->diff($fecha2);
                                            $fecha3 = $fecha->format('%a');
                                        ?>
                                        <tr class="odd gradeX" style="<?php 
                                        if ($fecha3 <= 5) {
                                            echo "background-color: #ffb3b3;";
                                        }if ($fecha3 <= 14 && $fecha3 >= 6){
                                            echo "background-color: #feffb3;";
                                        }  ?>">
                                            <td>
                                                <a class="btn btn-primary" href="{{URL::to('home/table_propiedades/editar_propiedades', array(Auth::user()->puesto, $propiedad->id))}}">Renovar</a>
                                                <!--<a class="btn btn-danger" href="{{URL::to('home/table_propiedades/destroy', array($propiedad->id, Auth::user()->id))}}">Eliminar</a>-->
                                                <!--<a class="btn btn-danger" href="{{URL::to('home/table_propiedades/reason_delete', array(Auth::user()->puesto, $propiedad->id))}}">Eliminar</a>-->
                                            </td>

                                            <td><?php echo $propiedad->id; ?></td>
                                            <td><?php echo $propiedad->id_asesores; ?></td>
                                            <td><?php echo $propiedad->fecha_inicio; ?></td>
                                            <td><?php echo $propiedad->fecha_termino; ?></td>
                                            <td><?php echo $fecha3;?></td>
                                            

                                            <td><a class="btn btn-info" href="{{URL::to('home/table_propiedades/documentos', array($propiedad->id))}}">Mostrar</a></td>
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
