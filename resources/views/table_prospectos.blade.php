@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">INFORMACIÓN DE PROSPECTOS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            TOTAL DE PROSPECTOS: <b><?php echo count($clients); ?></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Opcion</th>
                                        <th>Nombre</th>
                                        <th>Ubicacion de la paersona</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Celular</th>
                                        <th>Tipo de Cliente</th>
                                        <th>Modulo / Oficina</th>
                                        <th>Asesor</th>
                                        <th>Requisitos de la propiedad</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php 
                                        foreach ($clients as $client) {?>
                                        <tr class="odd gradeX">
                                            <td><a class="btn btn-primary" href="{{URL::to('home/modulos/table_prospecto/seguimiento', array($client->id_client))}}">Seguimiento</a></td>
                                            <td><?php echo $client->nombre; ?></td>
                                            <td><?php echo $client->ubicacion_persona; ?></td>
                                            <td><?php echo $client->email; ?></td>
                                            <td><?php echo $client->telefono; ?></td>
                                            <td><?php echo $client->celular; ?></td>
                                            <td><?php echo $client->tipo_cliente; ?></td> 
                                            <td><?php echo $client->modulo; ?></td> 
                                            <td><?php echo $client->asesor; ?></td> 
                                            <td><?php echo $client->requisitos_propiedad; ?></td> 
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
