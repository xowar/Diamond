@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">VENTAS</h1>
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
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                <?php foreach ($propiedades as $propiedad) { ?>
                                    <div class="form-group">
                                        <label>ID DE LA PROPIEDAD: <?php echo $propiedad->id; ?></label>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Ubicacion de la paersona</th>                                     
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <?php 
                                        foreach ($clients as $client) {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $client->nombre; ?></td>
                                            <td><?php echo $client->ubicacion_persona; ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>    
                        </div>
                                                

                    </div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <!-- /.row -->
    </div>
</div>



@endsection
