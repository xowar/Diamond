@extends('app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            <b>Articulo</b>
                        </div>
                        <?php echo Form::token(); ?>
                        <?php foreach ($articulos as $articulo) {?>
                        <div class="panel-body">
                            {!! Form::model($articulo,['files' => 'true', 'method' => 'PATCH','action'=>['MktController@mkt_update_propiedad','id'=>$articulo->id_articulos]]) !!}
                            <div class="row">
                            

                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Articulo</label>
                                            <input name="nombre_articulo" class="form-control" value="<?php echo $articulo->nombre_articulo; ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Cantidad</label>
                                        <input name="cantidad" class="form-control" value="<?php echo $articulo->cantidad; ?>" required onkeypress="return only_num(event)" maxlength="20">
                                    </div>  
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Costo</label>
                                        <input name="costo" class="form-control" value="<?php echo number_format($articulo->costo); ?>" required onkeypress="return only_num(event)" maxlength="20">
                                    </div> 
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Proveedor</label>
                                        <input name="proveedor" class="form-control" value="<?php echo $articulo->proveedor; ?>" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Autorizado *</label>
                                        <input name="aprovado_por" class="form-control" value="<?php echo $articulo->aprovado_por; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Solicito *</label>
                                            <input name="solicitado" class="form-control" value="<?php echo $articulo->solicitado; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Fecha de pedido</label>
                                        <input name="fecha_pedido" class="form-control" value="<?php echo $articulo->fecha_pedido; ?>" id="date1">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Fecha de entrega *</label>
                                        <input name="fecha_entrega" class="form-control" value="<?php echo $articulo->fecha_entrega; ?>" id="date2">
                                    </div>
                                </div>
                                <div style="display: none;">
                                    <input name="id_propiedades" class="form-control" value="<?php echo $articulo->id_propiedad; ?>">
                                    <input type="" name="status_articulo" value="<?php echo $articulo->status; ?>">
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Estatus del Articulo</label>
                                        <input name="" class="form-control" value="<?php if ($articulo->status = 1) {
                                            echo "EN PROSESO"; 
                                        }elseif($articulo->status = 2){
                                            echo "POR APROVAR";
                                        }else{
                                            echo "APROVADO";
                                        } ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Nota</label>
                                        <textarea name="nota" class="form-control" rows="4"><?php echo $articulo->nota; ?></textarea>
                                    </div>
                                </div> 
                            </div>
                            
                            <div class="row text-center">
                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}
                            <!-- /.row (nested) -->
                        </div>
                        <?php } ?>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div>
                <input style="display: none;" type="text" name="create_by" value="{{ Auth::user()->name }}">
            </div>
            
      
        
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection