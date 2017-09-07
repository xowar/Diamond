@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">INFORMACIÓN DE PROYECTOS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            TOTAL DE PROYECTOS: <b><?php echo count($proyectos); ?></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Opciones</th>
                                        <th>Nombre Inicial</th>
                                        <th>Lider de proyecto</th>
                                        <th>Precio Max</th>
                                        <th>Precio Min </th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php 
                                        foreach ($proyectos as $proyecto) {?>
                                        <tr class="odd gradeX">
                                            <td>
                                                <a class="btn btn-primary" href="{{URL::to('home/mkt/table_proyectos/mostrar_proyecto', array($proyecto->id_proyecto))}}">Mostrar</a>
                                                <a class="btn btn-danger" href="{{URL::to('home/mkt/table_proyectos/delete_proyecto', array($proyecto->id_proyecto))}}">Eliminar</a>
                                            </td>
                                            <td><?php echo $proyecto->nombre_inicial; ?></td>
                                            <td><?php echo $proyecto->lider_proyecto; ?></td>
                                            <td><?php echo $proyecto->precio_max; ?></td>
                                            <td><?php echo $proyecto->precio_min; ?></td>
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
