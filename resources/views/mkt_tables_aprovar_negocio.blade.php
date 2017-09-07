@extends('app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">NOMBRE: <?php foreach ($negocios as $negocio) {
                                                echo $negocio->nombre_negocio; 
                                                } ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            <b>Agregar articulo</b>
                        </div>
                        <?php echo Form::token(); ?>
                        <div class="panel-body">
                        {!! Form::open(['url'=>'home/mkt/buscar_por_negocios/save_articulo_negocios', 'method'=>'POST']) !!}
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Articulo</label>
                                        <input name="nombre_articulo" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Cantidad</label>
                                        <input name="cantidad" class="form-control" required onkeypress="return only_num(event)" maxlength="20">
                                    </div>  
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Costo</label>
                                        <input name="costo" class="form-control" required onkeypress="return only_num(event)" maxlength="20">
                                    </div> 
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Nota</label>
                                        <textarea name="nota" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Proveedor</label>
                                        <input name="proveedor" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Autorizado</label>
                                        <select name="autorizado" class="form-control">
                                            <option value="">Selecciona una opción</option>
                                            <?php foreach ($employees as $employee) {?>
                                                <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Fecha de pedido</label>
                                        <input name="fecha_pedido" class="form-control" id="date1">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Fecha de entrega *</label>
                                        <input name="fecha_entrega" class="form-control" id="date2">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Solicito *</label>
                                        <input name="solicitado" class="form-control" required>
                                        <!--<select name="solicitado" class="form-control" required>
                                            <option value="">Selecciona una opción</option>
                                            <?php foreach ($employees as $employee) {?>
                                                <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                            <?php } ?>
                                        </select>-->
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Desarrolladora</label>
                                        <input name="desarrolladora" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Estatus del Articulo</label>
                                        <select name="status_articulo" class="form-control" required>
                                            <option value="1">En proceso</option>
                                            <option value="2">Por Autorizar</option>
                                            <option value="3">Autorizado</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-1" style="display: none;">
                                    <div class="form-group">
                                        <label>ID</label>
                                        <?php foreach ($negocios as $negocio) { ?>
                                        <input name="id_negocio" class="form-control" value="<?php echo $negocio->id_negocio; ?>">
                                        <?php } ?>
                                    </div>
                                </div>  
                            </div>
                            <div class="row text-center">
                                {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
                            </div>
                        {!! Form::close() !!}


                            <div class="row">
                                <hr style="border-top: 1px solid #151212;">
                            </div>
                            <div class="row">
                                    <div class="col-lg-12 text-center" style="margin-bottom: 40px;">
                                        <label>EN PROCESO</label>
                                    </div>
                                    <div class="col-lg-12"> 
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Nombre Articulo</label>
                                            </div>
                                        </div> 
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Proveedor</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Solicitado</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Aprovado</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group text-center">
                                                 <label style="margin-top: 5px;">Acciones</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;">Cantidad</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;">Costo</label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                    <?php 
                                    $count = count($articulos1);

                                    $contador1 = 1;
                                    foreach ($articulos1 as $articulo1) { ?>
                                    <div class="col-lg-12">
                                                                                
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;"><?php echo $articulo1->nombre_articulo; ?></label>
                                            </div>
                                        </div>

                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;"><?php echo $articulo1->proveedor; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;"><?php echo $articulo1->solicitado; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label><?php echo $articulo1->aprovado_por; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                                <button id="<?php echo "myBtn".$contador1; ?>"  class="btn btn-primary" data-toggle="modal" data-target="<?php echo "#myModal".$contador1; ?>">Mostrar</button>                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                                <a class="btn btn-primary" href="{{URL::to('home/mkt/buscar_por_negocios/proceso_negocios', array($articulo1->id_articulos, $articulo1->id_negocios))}}">Por Autorizar</a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;"><?php echo $articulo1->cantidad; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;">$ <?php echo number_format($articulo1->costo); ?></label>
                                            </div>
                                        </div>

                                         <div id="<?php echo "myModal".$contador1; ?>" class="modal" style="display: none;">

                                          <!-- Modal content -->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <!--<span class="close">&times;</span>-->
                                              <div class="text-center">
                                                  <h2>INFORMACIÓN</h2>
                                              </div>
                                              
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-lg-5 col-lg-offset-2">
                                                    <div class="form-group">
                                                        <label>NOMBRE DEL ARTICULO:</label>
                                                        <p><?php echo $articulo1->nombre_articulo; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NOMBRE DEL PROVEEDOR:</label>
                                                        <p><?php echo $articulo1->proveedor; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>SOLICITADO POR:</label>
                                                        <p><?php echo $articulo1->solicitado; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>AUTORIZADO POR:</label>
                                                        <p><?php echo $articulo1->aprovado_por; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                    <label>NOTA:</label>
                                                    <p><?php echo $articulo1->nota; ?></p>
                                                </div>
                                                </div>  
                                                <div class="form-group">
                                                        <label>CANTIDAD:</label>
                                                        <p><?php echo $articulo1->cantidad; ?></p>
                                                    </div>                                             
                                                <div class="form-group">
                                                    <label>COSTO:</label>
                                                    <p><?php echo number_format($articulo1->costo); ?></p>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>FECHA DE PEDIDO:</label>
                                                    <p><?php echo $articulo1->fecha_pedido; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>FECHA DE ENTREGA:</label>
                                                    <p><?php echo $articulo1->fecha_entrega; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>ESTADO DEL ARTICULO:</label>
                                                    <p><?php if($articulo1->status == 1){
                                                            echo "EN PROCESO";
                                                        }elseif ($articulo1->status == 2) {
                                                            echo "POR AUTORIZAR";
                                                        }else{
                                                            echo "AUTORIZADO";
                                                        }  ?></p>
                                                </div>

                                            </div>
                                            <div class="modal-footer ">
                                                <div class="text-center">
                                                    <a class="btn btn-success" href="{{URL::to('home/mkt/buscar_por_negocios/mostrar_negocios', array($articulo1->id_articulos))}}">EDITAR</a>
                                                    <a class="btn btn-danger" href="{{URL::to('home/mkt/buscar_por_negocios/eliminar_negocios', array($articulo1->id_articulos, $articulo1->id_negocios))}}">ELIMINAR</a>
                                                </div>
                                              
                                            </div>
                                          </div>

                                        </div>


                                        <div class="col-lg-1" style="display: none;">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <?php foreach ($negocios as $negocio) { ?>
                                                <input name="id_negocio" class="form-control" value="<?php echo $negocio->id_negocio; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>  
                                        <div class="col-lg-1" style="display: none;">
                                            <div class="form-group">
                                                <input type="" name="id_articulo" value="<?php echo $articulo1->id_articulos;?>">
                                            </div>
                                        </div>                                        
                                    </div>

                                    <?php $contador1 = $contador1+1;} ?>
                            </div>
                            <div class="row">
                                <hr style="border-top: 1px solid #151212;">
                            </div>
                             <div class="row">
                                    <div class="col-lg-12 text-center" style="margin-bottom: 40px;">
                                        <label>POR AUTORIZAR</label>
                                    </div>
                                        
                                    <div class="col-lg-12"> 
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Nombre Articulo</label>
                                            </div>
                                        </div> 
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Proveedor</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Solicitado</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Aprovado</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group text-center">
                                                 <label style="margin-top: 5px;">Acciones</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;">Cantidad</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;">Costo</label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                  
                                    <?php $count2 = count($articulos2);
                                     $contador2 = 1;
                                    foreach ($articulos2 as $articulo2) { ?>
                                        <div class="col-lg-12">
                                        
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;"><?php echo $articulo2->nombre_articulo; ?></label>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;"><?php echo $articulo2->proveedor; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;"><?php echo $articulo2->solicitado; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label><?php echo $articulo2->aprovado_por; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                                <button id="<?php echo "myBtnn".$contador2; ?>"  class="btn btn-primary" data-toggle="modal" data-target="<?php echo "#myModall".$contador2; ?>">Mostrar</button>                                               
                                            </div>
                                        </div>
                                        <!--<div class="col-lg-1">
                                            <div class="form-group">
                                                <a class="btn btn-primary" href="{{URL::to('home/mkt/buscar_por_proyecto/mostrar', array($articulo2->id_articulos))}}">Mostrar</a>
                                            </div>
                                        </div>-->
                                        <div id="<?php echo "myModall".$contador2; ?>" class="modal" style="display: none;">

                                          <!-- Modal content -->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <!--<span class="close">&times;</span>-->
                                              <div class="text-center">
                                                  <h2>INFORMACIÓN</h2>
                                              </div>
                                              
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-lg-5 col-lg-offset-2">
                                                    <div class="form-group">
                                                        <label>NOMBRE DEL ARTICULO:</label>
                                                        <p><?php echo $articulo2->nombre_articulo; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NOMBRE DEL PROVEEDOR:</label>
                                                        <p><?php echo $articulo2->proveedor; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>SOLICITADO POR:</label>
                                                        <p><?php echo $articulo2->solicitado; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>AUTORIZADO POR:</label>
                                                        <p><?php echo $articulo2->aprovado_por; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                    <label>NOTA:</label>
                                                    <p><?php echo $articulo2->nota; ?></p>
                                                </div>
                                                </div>  
                                                <div class="form-group">
                                                        <label>CANTIDAD:</label>
                                                        <p><?php echo $articulo2->cantidad; ?></p>
                                                    </div>                                             
                                                <div class="form-group">
                                                    <label>COSTO:</label>
                                                    <p><?php echo number_format($articulo2->costo); ?></p>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>FECHA DE PEDIDO:</label>
                                                    <p><?php echo $articulo2->fecha_pedido; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>FECHA DE ENTREGA:</label>
                                                    <p><?php echo $articulo2->fecha_entrega; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>ESTADO DEL ARTICULO:</label>
                                                    <p><?php if($articulo2->status == 1){
                                                            echo "EN PROCESO";
                                                        }elseif ($articulo2->status == 2) {
                                                            echo "POR AUTORIZAR";
                                                        }else{
                                                            echo "AUTORIZADO";
                                                        }  ?></p>
                                                </div>

                                            </div>
                                            <div class="modal-footer ">
                                                <div class="text-center">
                                                    <a class="btn btn-success" href="{{URL::to('home/mkt/buscar_por_negocios/mostrar_negocios', array($articulo2->id_articulos))}}">EDITAR</a>
                                                    <a class="btn btn-danger" href="{{URL::to('home/mkt/buscar_por_negocios/eliminar_negocios', array($articulo2->id_articulos, $articulo2->id_negocios))}}">ELIMINAR</a>
                                                </div>
                                              
                                            </div>
                                          </div>

                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group">
                                                <a class="btn btn-primary" href="{{URL::to('home/mkt/buscar_por_negocios/por_autorizar_negocios', array($articulo2->id_articulos))}}">Autorizar</a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;"><?php echo $articulo2->cantidad; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;">$ <?php echo number_format($articulo2->costo); ?></label>
                                            </div>
                                        </div>



                                        <div class="col-lg-1" style="display: none;">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <?php foreach ($negocios as $negocio) { ?>
                                                <input name="id_negocio" class="form-control" value="<?php echo $negocio->id_negocio; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>  
                                        <div class="col-lg-1" style="display: none;">
                                            <div class="form-group">
                                                <input type="" name="id_articulo" value="<?php echo $articulo2->id_articulos;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <?php $contador2 = $contador2+1;} ?>
                            </div>



                            
                            <div class="row">
                                <hr style="border-top: 1px solid #151212;">
                            </div>
                             <div class="row">
                                    <div class="col-lg-12 text-center" style="margin-bottom: 40px;">
                                        <label>AUTORIZADOS</label>
                                    </div>
                                        
                                    <div class="col-lg-12"> 
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Nombre Articulo</label>
                                            </div>
                                        </div> 
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Proveedor</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Solicitado</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;">Aprovado</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group text-center">
                                                 <label style="margin-top: 5px;">Acciones</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;">Cantidad</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;">Costo</label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                
                                <?php $count3 = count($articulos3);
                                     $contador3 = 1;
                                     foreach ($articulos3 as $articulo3) { ?>
                                        <div class="col-lg-12">
                                        
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;"><?php echo $articulo3->nombre_articulo; ?></label>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;"><?php echo $articulo3->proveedor; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label style="margin-top: 5px;"><?php echo $articulo3->solicitado; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label><?php echo $articulo3->aprovado_por; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <button id="<?php echo "myBtns".$contador3; ?>"  class="btn btn-primary" data-toggle="modal" data-target="<?php echo "#myModals".$contador3; ?>">Mostrar</button>                                               
                                            </div>
                                        </div>
                                        
                                        <!--<div class="col-lg-2">
                                            <div class="form-group">
                                                <a class="btn btn-primary" href="{{URL::to('home/mkt/buscar_por_proyecto/mostrar', array($articulo3->id_articulos))}}">Mostrar</a>
                                            </div>
                                        </div> -->
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;"><?php echo $articulo3->cantidad; ?></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <div class="form-group text-right">
                                                <label style="margin-top: 5px;">$ <?php echo number_format($articulo3->costo); ?></label>
                                            </div>
                                        </div>
                                        
                                         <div id="<?php echo "myModals".$contador3; ?>" class="modal" style="display: none;">

                                          <!-- Modal content -->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <!--<span class="close">&times;</span>-->
                                              <div class="text-center">
                                                  <h2>INFORMACIÓN</h2>
                                              </div>
                                              
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-lg-5 col-lg-offset-2">
                                                    <div class="form-group">
                                                        <label>NOMBRE DEL ARTICULO:</label>
                                                        <p><?php echo $articulo3->nombre_articulo; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NOMBRE DEL PROVEEDOR:</label>
                                                        <p><?php echo $articulo3->proveedor; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>SOLICITADO POR:</label>
                                                        <p><?php echo $articulo3->solicitado; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>AUTORIZADO POR:</label>
                                                        <p><?php echo $articulo3->aprovado_por; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                    <label>NOTA:</label>
                                                    <p><?php echo $articulo3->nota; ?></p>
                                                </div>
                                                </div>  
                                                <div class="form-group">
                                                        <label>CANTIDAD:</label>
                                                        <p><?php echo $articulo3->cantidad; ?></p>
                                                    </div>                                             
                                                <div class="form-group">
                                                    <label>COSTO:</label>
                                                    <p><?php echo number_format($articulo3->costo); ?></p>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>FECHA DE PEDIDO:</label>
                                                    <p><?php echo $articulo3->fecha_pedido; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>FECHA DE ENTREGA:</label>
                                                    <p><?php echo $articulo3->fecha_entrega; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>ESTADO DEL ARTICULO:</label>
                                                    <p><?php if($articulo3->status == 1){
                                                            echo "EN PROCESO";
                                                        }elseif ($articulo3->status == 2) {
                                                            echo "POR AUTORIZAR";
                                                        }else{
                                                            echo "AUTORIZADO";
                                                        }  ?></p>
                                                </div>

                                            </div>
                                            <div class="modal-footer ">
                                                <div class="text-center">

                                                </div>
                                              
                                            </div>
                                          </div>

                                        </div>

                                        <div class="col-lg-1" style="display: none;">
                                            <div class="form-group">
                                                <label>ID</label>
                                                <?php foreach ($negocios as $negocio) { ?>
                                                <input name="id_negocio" class="form-control" value="<?php echo $negocio->id_negocio; ?>">
                                                <?php } ?>
                                            </div>
                                        </div>  
                                        <div class="col-lg-1" style="display: none;">
                                            <div class="form-group">
                                                <input type="" name="id_articulo" value="<?php echo $articulo3->id_articulos;?>">
                                            </div>
                                        </div>
                                    </div>
                                    <?php $contador3 = $contador3+1;} ?>
                            </div>
                            <div class="row">
                                <hr style="border-top: 1px solid #151212;">
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center" style="margin-bottom: 40px;">
                                    <label>SALDO</label>
                                </div>

                            </div>
                         
                           
                            <div class="row">
                                <div class="col-lg-offset-7 col-lg-4 text-left">
                                    <label>TOTAL DE ARTICULOS</label>
                                </div>
                                <div class="col-lg-1 text-right">
                                    <?php foreach ($total as $total1) {?>
                                        <label>$ <?php echo number_format($total1->total_sales); ?></label>
                                    <?php } ?>
                                    
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
            
      
        
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection