@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">INFORMACIÓN DE CLIENTES</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            TOTAL DE CLIENTES: <b><?php echo count($clients); ?></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Ubicacion de la paersona</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Celular</th>
                                        <th>Ubicación de la Propiedad</th>
                                        <th>Necesidad del cliente</th>
                                        <th>Presupuesto</th>
                                        <th>¿Como se Entero?</th>
                                        <th>Tipo de Credito</th>
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

                                            <td><?php echo $client->nombre; ?></td>
                                            <td><?php echo $client->ubicacion_persona; ?></td>
                                            <td><?php echo $client->email; ?></td>
                                            <td><?php echo $client->telefono; ?></td>
                                            <td><?php echo $client->celular; ?></td>
                                            <td><?php echo $client->ubicacion_propiedad; ?></td>
                                            <td><?php echo $client->necesidad_cliente; ?></td>
                                            <td><?php echo $client->presupuesto; ?></td>
                                            <td><?php echo $client->referido; ?></td>
                                            <td><?php echo $client->tipo_credito; ?></td>
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
