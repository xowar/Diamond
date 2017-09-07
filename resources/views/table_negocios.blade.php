@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">INFORMACIÓN DE NEGOCIOS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            TOTAL DE NEGOCIOS: <b><?php echo count($negocios); ?></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Opciones</th>
                                        <th>Nombre del Negocio</th>
                                        <th>Lider de Negocio</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php 
                                        foreach ($negocios as $negocio) {?>
                                        <tr class="odd gradeX">
                                            <td>
                                                <a class="btn btn-primary" href="{{URL::to('home/mkt/table_negocios/mostrar_negocio', array($negocio->id_negocio))}}">Mostrar</a>
                                                <a class="btn btn-primary" href="{{URL::to('home/mkt/table_negocios/delete_negocio', array($negocio->id_negocio))}}">Eliminar</a>
                                            </td>
                                            <td><?php echo $negocio->nombre_negocio; ?></td>
                                            <td><?php echo $negocio->lider_proyecto; ?></td>
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