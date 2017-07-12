@extends('app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">REGISTRO DE PROPIEDAD</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        {!! Form::open(['url'=>'home/store', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            Datos del dueño y responsable
                        </div>
                        <div class="panel-body" id="elementHidde1" style="display: none;">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombre *</label>
                                            <input name="nombre_dueno" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Dirección *</label>
                                            <input name="direccion_dueno" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Colonia *</label>
                                            <select name="colonia_dueno" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                            <?php 
                                                foreach ($colonies as $colonie) 
                                            {?>
                                                <option value="<?php echo $colonie->id_colonies; ?>"><?php echo $colonie->colonia; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Teléfono Casa</label>
                                            <input name="tel_casa" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Teléfono Oficina</label>
                                            <input name="tel_oficina" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input name="celular" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Estado Civil *</label>
                                            <select name="estado_civil" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Casado Bienes Mancomunados">Casado Bienes Mancomunados</option>
                                                <option value="Casado Bienes Separados">Casado Bienes Separados</option>
                                                <option value="Soltero">Soltero</option>
                                                <option value="Divorciado">Divorciado</option>
                                                <option value="Union Libre">Union Libre</option>
                                                <option value="Viudo">Viudo</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" class="form-control" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
                                        </div>  
                                        <div class="form-group">
                                            <label>Es dueño quien ofrece la propiedad *</label>
                                            <select name="es_dueno_propiedad" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>    
                                        <div class="form-group">
                                            <label>Relación con el dueño de la propiedad</label>
                                            <input name="relacion_con_dueno" class="form-control">
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde2">
                            <!-- Title-->
                            Datos propiedad
                        </div>
                        <div class="panel-body" id="elementHidde2" style="display: none;">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Calle *</label>
                                            <input name="calle_propiedad" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Número Exterior</label>
                                            <input name="numero_ext_propiedad" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Número Interior</label>
                                            <input name="numero_int_propiedad" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Colonia *</label>
                                            <select name="colonia_propiedad" class="form-control" required>
                                                   <option>Selecciona una opcion</option>
                                                <?php 
                                                foreach ($colonies as $colonie) 
                                                {?>
                                                    <option value="<?php echo $colonie->id_colonies; ?>"><?php echo $colonie->colonia; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Ciudad *</label>
                                            <select name="ciudad_propiedad" class="form-control" required>
                                                <option>Selecciona una opcion</option>
                                                <?php 
                                                foreach ($cities as $city) {?>
                                                    <option value="<?php echo $city->id_cities; ?>"><?php echo $city->ciudades; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado *</label>
                                            <select name="estado_propiedad" class="form-control" required>
                                                <option>Selecciona una opcion</option>
                                                <?php 
                                                foreach ($states as $state) {?>
                                                    <option value="<?php echo $state->id_state; ?>"><?php echo $state->estados; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Codigo Postal *</label>
                                            <input name="codigo_postal_propiedad" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Uso de Suelo *</label>
                                            <select name="uso_de_suelo" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Habitacional">Habitacional</option>
                                                <option value="Comercial">Comercial</option>
                                                <option value="Mixto">Mixto</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde3">
                            <!-- Title-->
                            Descripción de la Propiedad
                        </div>
                        <div class="panel-body" id="elementHidde3" style="display: none;">
                            <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Frente</label>
                                            <input name="frente" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fondo</label>
                                            <input name="fondo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>M2 de Terreno</label>
                                            <input name="mcuadrado_terreno" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>M2 de Construcción</label>
                                            <input name="mcuadrado_construccion" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Recámaras *</label>
                                            <select name="recamaras" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Baños Completos *</label>
                                            <select name="banos_completos" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Medios Baños *</label>
                                            <select name="medios_banos" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cochera *</label>
                                            <select name="cochera" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Niveles *</label>
                                            <select name="niveles" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Piso Condo</label>
                                            <input name="piso_condo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Conservación</label>
                                            <select name="conservacion" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="En Proyecto">En Proyecto</option>
                                                <option value="Nuevo">Nuevo</option>
                                                <option value="Excelente">Excelente</option>
                                                <option value="Bueno">Bueno</option>
                                                <option value="Medio">Medio</option>
                                                <option value="Malo">Malo</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Dueños Originales *</label>
                                            <select name="duenos_originales" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vestidor</label>
                                            <select name="vestidor" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Sala</label>
                                            <select name="sala" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Comedor</label>
                                            <select name="comedor" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cocina Integral</label>
                                            <select name="cocina_integral" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Estudio</label>
                                            <select name="estudio" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cuarto T.V.</label>
                                            <select name="cuarto_tv" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Patio</label>
                                            <select name="patio" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cuarto de Servicio</label>
                                            <select name="cuarto_servicio" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bodega</label>
                                            <select name="bodega" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cisterna</label>
                                            <select name="cisterna" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Aire Acondicionado</label>
                                            <select name="aire_acondicionado" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Instalaciones para Minisplit</label>
                                            <select name="instalaciones_minisplit" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Boyler</label>
                                            <select name="boyler" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bardeado</label>
                                            <select name="bardeado" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Protecciones</label>
                                            <select name="protecciones" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Terraza</label>
                                            <select name="terraza" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Balcón</label>
                                            <select name="balcon" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cuarto de Lavado</label>
                                            <select name="cuarto_lavado" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jacuzzi</label>
                                            <select name="jacuzzi" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Casa Club</label>
                                            <select name="casa_club" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Parrilla</label>
                                            <select name="parrilla" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Elevador</label>
                                            <select name="elevador" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Acceso a Playa</label>
                                            <select name="acceso_playa" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Muelle</label>
                                            <select name="muelle" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Urbanizado</label>
                                            <select name="urbanizado" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jardín</label>
                                            <select name="jardin" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Áreas Verdes</label>
                                            <select name="areas_verdes" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Alberca Común</label>
                                            <select name="alberca_comun" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Piscina Privada</label>
                                            <select name="piscina_privada" class="form-control">
                                                <option>Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Canchas</label>
                                            <select name="canchas" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Seguridad 24 Horas</label>
                                            <select name="seguridad_todo_dia" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sistema de Seguridad</label>
                                            <select name="sistema_seguridad" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Amueblado</label>
                                            <select name="amueblado" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vista al Mar</label>
                                            <select name="vista_mar" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vista a la Marina</label>
                                            <select name="vista_marina" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vista Panoramica</label>
                                            <select name="vista_panoramica" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vista Campo de Golf</label>
                                            <select name="vista_campo_golf" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Agua *</label>
                                            <select name="agua" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Luz *</label>
                                            <select name="luz" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Drenaje *</label>
                                            <select name="drenaje" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde4">
                            <!-- Title-->
                            Financiamiento
                        </div>
                        <div class="panel-body" id="elementHidde4" style="display: none;">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tiene aduedo *</label>
                                            <select name="tiene_adeudo" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Si, ¿Cuanto?</label>
                                            <input name="cuanto_adeudo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>¿Qué tipo de adeudo?</label>
                                            <input name="tipo_adeudo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Ofrece Financiamiento *</label>
                                            <select name="ofrece_financiamiento" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Aplica Credito *</label>
                                            <select name="aplica_credito" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Todos">Todos</option>
                                                <option value="Ninguno">Ninguno</option>
                                                <option value="Directo">Directo</option>
                                                <option value="Algunos">Algunos</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Especifica que tipo de crédito aplica</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="tipo_credito[]" type="checkbox" value="Bancario">Bancario
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="tipo_credito[]" type="checkbox" value="Scotiabank">Scotiabank
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="tipo_credito[]" type="checkbox" value="Infonavit">Infonavit
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="tipo_credito[]" type="checkbox" value="Fovissste">Fovissste
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="tipo_credito[]" type="checkbox" value="Isfam">Isfam
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="tipo_credito[]" type="checkbox" value="Otra">Otra
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde5">
                            <!-- Title-->
                            Documentación
                        </div>
                        <div class="panel-body" id="elementHidde5" style="display: none;">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tipo de Contrato *</label>
                                            <select name="tipo_contrato" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Anual">Anual</option>
                                                <option value="6 Meses">6 Meses</option>
                                                <option value="3 Meses">3 Meses</option>
                                                <option value="Indeterminado">Indeterminado</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>INE *</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="ine[]" type="checkbox" value="Sr" id="ineSr" onchange="javascript:showContent1()">Sr
                                                </label>
                                            </div>
                                            <div id="ineSr1" style="display: none;">
                                                <input name="doc_ine1" type="file" accept="application/pdf">
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="ine[]" type="checkbox" value="Sra" id="ineSra" onchange="javascript:showContent2()">Sra
                                                </label>
                                            </div>
                                            <div id="ineSra1" style="display: none;">
                                                <input name="doc_ine2" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>RFC *</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="rfc[]" type="checkbox" value="Sr" id="rfcSr" onchange="javascript:showContent3()">Sr
                                                </label>
                                            </div>
                                            <div id="rfcSr1" style="display: none;">
                                                <input name="doc_rfc1" type="file" accept="application/pdf">
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="rfc[]" type="checkbox" value="Sra" id="rfcSra" onchange="javascript:showContent4()">Sra
                                                </label>
                                            </div>
                                            <div id="rfcSra1" style="display: none;">
                                                <input name="doc_rfc2" type="file" accept="application/pdf">
                                            </div>  
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Persona *</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="tipo_persona[]" type="checkbox" value="Sr" id="tipoSr" onchange="javascript:showContent5()">Sr
                                                </label>
                                            </div>
                                            <div id="tipoSr1" style="display: none;">
                                                <input name="doc_TipoPersona1" type="file" accept="application/pdf">
                                            </div>  
                                            <div class="checkbox">
                                                <label>
                                                    <input name="tipo_persona[]" type="checkbox" value="Sra" id="tipoSra" onchange="javascript:showContent6()">Sra
                                                </label>
                                            </div>
                                            <div id="tipoSra1" style="display: none;">
                                                <input name="doc_TipoPersona2" type="file" accept="application/pdf">
                                            </div>  
                                            <div class="checkbox">
                                                <label>
                                                    <input name="tipo_persona[]" type="checkbox" value="N/A">N/A
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Acta de Nacimiento *</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="acta_nacimiento[]" type="checkbox" value="Sr" id="actaSr" onchange="javascript:showContent7()">Sr
                                                </label>
                                            </div>
                                            <div id="actaSr1" style="display: none;">
                                                <input name="doc_ActaNacimiento1" type="file" accept="application/pdf">
                                            </div>  
                                            <div class="checkbox">
                                                <label>
                                                    <input name="acta_nacimiento[]" type="checkbox" value="Sra" id="actaSra" onchange="javascript:showContent8()">Sra
                                                </label>
                                            </div>
                                            <div id="actaSra1" style="display: none;">
                                                <input name="doc_ActaNacimiento2" type="file" accept="application/pdf">
                                            </div>  
                                            <div class="checkbox">
                                                <label>
                                                    <input name="acta_nacimiento[]" type="checkbox" value="No">No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>CURP *</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="curp[]" type="checkbox" value="Sr" id="curpSr" onchange="javascript:showContent9()">Sr
                                                </label>
                                            </div>
                                            <div id="curpSr1" style="display: none;">
                                                <input name="doc_curp1" type="file" accept="application/pdf">
                                            </div> 
                                            <div class="checkbox">
                                                <label>
                                                    <input name="curp[]" type="checkbox" value="Sra" id="curpSra" onchange="javascript:showContent10()">Sra
                                                </label>
                                            </div>
                                            <div id="curpSra1" style="display: none;">
                                                <input name="doc_curp2" type="file" accept="application/pdf">
                                            </div> 
                                            <div class="checkbox">
                                                <label>
                                                    <input name="curp[]" type="checkbox" value="No">No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Escrituras de la Propiedad *</label>
                                            <select id="escritura_propiedad" name="escritura_propiedad" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="escritura_propiedad1" style="display: none;">
                                                <input name="doc_escritura" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Titulo de Propiedad *</label>
                                            <select id="titulo_propiedad" name="titulo_propiedad" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="titulo_propiedad1" style="display: none;">
                                                <input name="doc_titulo" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Registro de Propiedad *</label>
                                            <select id="registro_propiedad" name="registro_propiedad" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="registro_propiedad1" style="display: none;">
                                                <input name="doc_registro" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Clave Castatral *</label>
                                            <input name="clave_castatral" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Valor Castatral *</label>
                                            <input name="valor_castatral" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Aviso de Privacidad *</label>
                                            <select id="aviso_privacidad" name="aviso_privacidad" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="aviso_privacidad1" style="display: none;">
                                                <input name="doc_aviso" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Recibo de la Luz *</label>
                                            <select id="recibo_luz" name="recibo_luz" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="recibo_luz1" style="display: none;">
                                                <input name="doc_recibo_luz" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Recibo del Agua *</label>
                                            <select name="recibo_agua" id="recibo_agua" name="recibo_agua" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="recibo_agua1" style="display: none;">
                                                <input name="doc_recibo_agua" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Predial *</label>
                                            <select id="predial" name="predial" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="predial1" style="display: none;">
                                                <input name="doc_predial" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Planos *</label>
                                            <select id="planos" name="planos" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="planos1" style="display: none;">
                                                <input name="doc_planos" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Regimen Matrimonial *</label>
                                            <select id="regimen_matrimonial" name="regimen_matrimonial" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="regimen_matrimonial1" style="display: none;">
                                                <input name="doc_regimen_matrimonial" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Acta de Matrimonio *</label>
                                            <select id="acta_matrimonio" name="acta_matrimonio" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="acta_matrimonio1" style="display: none;">
                                                <input name="doc_acta_matrimonio" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Regimen de Propiedad de Condominio *</label>
                                            <select id="regimen_propiedad_condo" name="regimen_propiedad_condo" class="form-control" required>
                                                <option value="">Selecciona una opcion</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                            <div id="regimen_propiedad_condo1" style="display: none;">
                                                <input name="doc_regimen_propiedad_condo" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde6">
                            <!-- Title-->
                            Asesor Diamond
                        </div>
                        <div class="panel-body" id="elementHidde6" style="display: none;">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Asesor *</label>
                                            <select name="id_asesor" class="form-control" required>
                                                <option>Selecciona una opción</option>
                                                <?php 
                                                foreach ($adviser as $asesor) {?>
                                                    <option value="<?php echo $asesor->id_asesor; ?>"><?php echo $asesor->nombre_asesor; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Prospectador *</label>
                                                <select name="id_prospector" class="form-control" required>
                                                <option>Selecciona una opción</option>
                                                <?php 
                                                foreach ($prospector as $prospec) {?>
                                                    <option value="<?php echo $prospec->id_prospectador; ?>"><?php echo $prospec->nombre_prospectador; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha *</label>
                                            <div class="form-group">
                                                <div class='input-group date'>
                                                    <input name="fecha_asesor" type='text' class="form-control" required id="date1"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Exclusiva *</label>
                                            <select name="exclusiva" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Convenio *</label>
                                            <select name="tipo_convenio" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Venta">Venta</option>
                                                <option value="Renta">Renta</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Propiedad *</label>
                                            <select name="tipo_propiedad" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <?php 
                                                foreach ($type_propertys as $type_property) {?>
                                                    <option value="<?php echo $type_property->id_type_propertys; ?>"><?php echo $type_property->tipo_propiedad; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Comision *</label>
                                            <select name="comision" class="form-control" required>
                                                <option>Selecciona una opción</option>
                                                <?php 
                                                foreach ($commissions as $commission) {?>
                                                    <option value="<?php echo $commission->id_commissions; ?>"><?php echo $commission->comision; ?>%</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Referido *</label>
                                            <select name="referido" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Llaves *</label>
                                            <select name="llaves" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Fotos *</label>
                                            <select name="fotos" class="form-control" required>
                                                <option>Selecciona una opción</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Amueblada a la renta o venta *</label>
                                            <select name="amueblada_renta_venta" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Sin">Sin</option>
                                                <option value="Con">Con</option>
                                                <option value="Cualquiera">Cualquiera</option>
                                            </select>
                                        </div>

                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde7">
                            <!-- Title-->
                            Precio de Promoción
                        </div>
                        <div class="panel-body" id="elementHidde7" style="display: none;">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Precio Venta</label>
                                            <input name="precio_venta" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Precio Renta</label>
                                            <input name="precio_renta" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Precio Mínimo</label>
                                            <input name="precio_minimo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Moneda *</label>
                                            <select name="tipo_moneda" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="MXN">MXN</option>
                                                <option value="USD">USD</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cuota de Mantenimiento</label>
                                            <input name="cuota_mantenimiento" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Incluye Cuota de Mantenimiento</label>
                                            <select name="inclu_cuota_mantenimiento" class="form-control">
                                                <option value="">Selecciona una opción</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Precio M2</label>
                                            <input name="precio_mcuadrado" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Fecha de Inicio *</label>
                                            <div class="form-group">
                                                <div class='input-group date'>
                                                    <input name="fecha_inicio" type='text' class="form-control" required id="date2" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de Termino *</label>
                                            <div class="form-group">
                                                <div class='input-group date'>
                                                    <input name="fecha_termino" type='text' class="form-control" required id="date3"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Restricciones de Renta / Venta</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="restricciones_renta_venta[]" type="checkbox" value="No niños">No niños
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="restricciones_renta_venta[]" type="checkbox" value="No animales">No animales
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="restricciones_renta_venta[]" type="checkbox" value="Sólo Familias">Sólo Familias
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="restricciones_renta_venta[]" type="checkbox" value="Sólo ejecutivos">Sólo ejecutivos
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="restricciones_renta_venta[]" type="checkbox" value="1 Año">1 Año
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="restricciones_renta_venta[]" type="checkbox" value="6 Meses">6 Meses
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input name="restricciones_renta_venta[]" type="checkbox" value="Otra">Otra
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Existe algún defecto estructural *</label>
                                            <select name="defecto_estructural" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Especifique el defecto</label>
                                            <input name="defecto_especifico" class="form-control">
                                        </div>

                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde8">
                            <!-- Title-->
                            Realización y Autorización
                        </div>
                        <div class="panel-body" id="elementHidde8" style="display: none;">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Folio</label>
                                            <input name="folio" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Esta completo el expediente *</label>
                                            <select name="expediente_completo" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Responsable de llenado *</label>
                                            <input name="responsable_llenado" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Responsable de revisión *</label>
                                            <input name="responsable_revision" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Director que aprobó listing y comisión *</label>
                                            <select name="director_aprobo_listing_comision" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Pedro Juarez">Pedro Juarez</option>
                                                <option value="Rodolfo Pardo">Rodolfo Pardo</option>
                                                <option value="Meliton Osuna">Meliton Osuna</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
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
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
      
        {!! Form::close() !!}
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection