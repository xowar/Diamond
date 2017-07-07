@extends('app')

@section('content')

<?php 
    /*foreach ($editPropiedades as $editPropieda) {

        $tipo_credito = explode(", ", $editPropieda->tipo_credito);
        print_r($tipo_credito[0]);
        die;
    }*/
?>
<?php 
    foreach ($editPropiedades as $editPropieda) {?>

    <!-- pasando de string a array -->
    <?php 
        $tipo_credito = explode(", ", $editPropieda->tipo_credito);
        $ine = explode(", ", $editPropieda->ine);
        $rfc = explode(", ", $editPropieda->rfc);
        $tipo_persona = explode(", ", $editPropieda->tipo_persona);
        $acta_nacimiento = explode(", ", $editPropieda->acta_nacimiento);
        $curp = explode(", ", $editPropieda->curp);
        $restricciones_renta_venta = explode(", ", $editPropieda->restricciones_renta_venta);
    ?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">EDITAR PROPIEDAD</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        {!! Form::model($editPropieda,['files' => 'true', 'method' => 'PATCH','action'=>['RegisterPropertyController@update','id'=>$editPropieda->id]]) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            Datos del dueño y responsable
                        </div>

                            <!-- final -->

                        <div class="panel-body" id="elementHidde1" style="display: none;">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombre *</label>
                                            <input value="<?php echo $editPropieda->nombre_dueno; ?>" name="nombre_dueno" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Dirección *</label>
                                            <input value="<?php echo $editPropieda->direccion_dueno; ?>" name="direccion_dueno" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Colonia *</label>
                                            <select name="colonia_dueno" class="form-control" required>
                                                <option value="<?php echo $editPropieda->id_colonia_dueno; ?>"><?php echo $editPropieda->colonia; ?></option>
                                            <?php 
                                                foreach ($colonies as $colonie) 
                                            {?>
                                                <option value="<?php echo $colonie->colonia; ?>"><?php echo $colonie->colonia; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Teléfono Casa</label>
                                            <input value="<?php echo $editPropieda->tel_casa; ?>" name="tel_casa" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Teléfono Oficina</label>
                                            <input value="<?php echo $editPropieda->tel_oficina; ?>" name="tel_oficina" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input value="<?php echo $editPropieda->celular; ?>" name="celular" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Estado Civil *</label>
                                            <select name="estado_civil" class="form-control" required>
                                                <option value="<?php echo $editPropieda->estado_civil; ?>"><?php echo $editPropieda->estado_civil; ?> </option>
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
                                            <input value="<?php echo $editPropieda->email; ?>" name="email" class="form-control" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email">
                                        </div>  
                                        <div class="form-group">
                                            <label>Es dueño quien ofrece la propiedad *</label>
                                            <select name="es_dueno_propiedad" class="form-control" required>
                                                <option value="<?php echo $editPropieda->es_dueno_propiedad; ?>"><?php echo $editPropieda->es_dueno_propiedad; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>    
                                        <div class="form-group">
                                            <label>Relación con el dueño de la propiedad</label>
                                            <input value="<?php echo $editPropieda->relacion_con_dueno; ?>" name="relacion_con_dueno" class="form-control">
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                        <?php } ?>
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
                                            <input value="<?php echo $editPropieda->calle_propiedad; ?>" name="calle_propiedad" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Número Exterior</label>
                                            <input value="<?php echo $editPropieda->numero_ext_propiedad; ?>" name="numero_ext_propiedad" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Número Interior</label>
                                            <input value="<?php echo $editPropieda->numero_int_propiedad; ?>" name="numero_int_propiedad" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Colonia *</label>
                                            <select name="colonia_propiedad" class="form-control" required>
                                                   <option value="<?php echo $editPropieda->id_colonia_propiedad; ?>"><?php echo $editPropieda->colonia; ?></option>
                                                <?php 
                                                foreach ($colonies as $colonie) {?>
                                                    <option value="<?php echo $colonie->id_colonies; ?>"><?php echo $colonie->colonia; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Ciudad *</label>
                                            <select name="ciudad_propiedad" class="form-control" required>
                                                <option value="<?php echo $editPropieda->id_cities; ?>"><?php echo $editPropieda->ciudades; ?></option>
                                                <?php 
                                                foreach ($cities as $city) {?>
                                                    <option value="<?php echo $city->id_cities; ?>"><?php echo $city->ciudades; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado *</label>
                                            <select name="estado_propiedad" class="form-control" required>
                                                <option value="<?php echo $editPropieda->id_estado_propiedad; ?>"><?php echo $editPropieda->estados; ?></option>
                                                <?php 
                                                foreach ($states as $state) {?>
                                                    <option value="<?php echo $state->id_state; ?>"><?php echo $state->estados; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Codigo Postal *</label>
                                            <input value="<?php echo $editPropieda->codigo_postal_propiedad; ?>" name="codigo_postal_propiedad" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Uso de Suelo *</label>
                                            <select name="uso_de_suelo" class="form-control" required>
                                                <option value="<?php echo $editPropieda->uso_de_suelo; ?>"><?php echo $editPropieda->uso_de_suelo; ?></option>
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
                                            <input value="<?php echo $editPropieda->frente; ?>" name="frente" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fondo</label>
                                            <input value="<?php echo $editPropieda->fondo; ?>" name="fondo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>M2 de Terreno</label>
                                            <input value="<?php echo $editPropieda->mcuadrado_terreno; ?>" name="mcuadrado_terreno" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>M2 de Construcción</label>
                                            <input value="<?php echo $editPropieda->mcuadrado_construccion; ?>" name="mcuadrado_construccion" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Recámaras *</label>
                                            <select name="recamaras" class="form-control" required>
                                                <option value="<?php echo $editPropieda->recamaras; ?>"><?php echo $editPropieda->recamaras; ?></option>
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
                                                <option value="<?php echo $editPropieda->banos_completos; ?>"><?php echo $editPropieda->banos_completos; ?></option>
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
                                                <option value="<?php echo $editPropieda->medios_banos; ?>"><?php echo $editPropieda->medios_banos; ?></option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cochera *</label>
                                            <select name="cochera" class="form-control" required>
                                                <option value="<?php echo $editPropieda->cochera; ?>"><?php echo $editPropieda->cochera; ?></option>
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
                                                <option value="<?php echo $editPropieda->niveles; ?>"><?php echo $editPropieda->niveles; ?></option>
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
                                            <input value="<?php echo $editPropieda->piso_condo; ?>" name="piso_condo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Conservación</label>
                                            <select name="conservacion" class="form-control">
                                                <option value="<?php echo $editPropieda->conservacion; ?>"><?php echo $editPropieda->conservacion; ?></option>
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
                                                <option value="<?php echo $editPropieda->duenos_originales; ?>"><?php echo $editPropieda->duenos_originales; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vestidor</label>
                                            <select name="vestidor" class="form-control">
                                                <option value="<?php echo $editPropieda->vestidor; ?>"><?php echo $editPropieda->vestidor; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Sala</label>
                                            <select name="sala" class="form-control">
                                                <option value="<?php echo $editPropieda->sala; ?>"><?php echo $editPropieda->sala; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Comedor</label>
                                            <select name="comedor" class="form-control">
                                                <option value="<?php echo $editPropieda->comedor; ?>"><?php echo $editPropieda->comedor; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cocina Integral</label>
                                            <select name="cocina_integral" class="form-control">
                                                <option value="<?php echo $editPropieda->cocina_integral; ?>"><?php echo $editPropieda->cocina_integral; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Estudio</label>
                                            <select name="estudio" class="form-control">
                                                <option value="<?php echo $editPropieda->estudio; ?>"><?php echo $editPropieda->estudio; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cuarto T.V.</label>
                                            <select name="cuarto_tv" class="form-control">
                                                <option value="<?php echo $editPropieda->cuarto_tv; ?>"><?php echo $editPropieda->cuarto_tv; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Patio</label>
                                            <select name="patio" class="form-control">
                                                <option value="<?php echo $editPropieda->patio; ?>"><?php echo $editPropieda->patio; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cuarto de Servicio</label>
                                            <select name="cuarto_servicio" class="form-control">
                                                <option value="<?php echo $editPropieda->cuarto_servicio; ?>"><?php echo $editPropieda->cuarto_servicio; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bodega</label>
                                            <select name="bodega" class="form-control">
                                                <option value="<?php echo $editPropieda->bodega; ?>"><?php echo $editPropieda->bodega; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cisterna</label>
                                            <select name="cisterna" class="form-control">
                                                <option value="<?php echo $editPropieda->cisterna; ?>"><?php echo $editPropieda->cisterna; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Aire Acondicionado</label>
                                            <select name="aire_acondicionado" class="form-control">
                                                <option value="<?php echo $editPropieda->aire_acondicionado; ?>"><?php echo $editPropieda->aire_acondicionado; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Instalaciones para Minisplit</label>
                                            <select name="instalaciones_minisplit" class="form-control">
                                                <option value="<?php echo $editPropieda->instalaciones_minisplit; ?>"><?php echo $editPropieda->instalaciones_minisplit; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Boyler</label>
                                            <select name="boyler" class="form-control">
                                                <option value="<?php echo $editPropieda->boyler; ?>"><?php echo $editPropieda->boyler; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bardeado</label>
                                            <select name="bardeado" class="form-control">
                                                <option value="<?php echo $editPropieda->bardeado; ?>"><?php echo $editPropieda->bardeado; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Protecciones</label>
                                            <select name="protecciones" class="form-control">
                                                <option value="<?php echo $editPropieda->protecciones; ?>"><?php echo $editPropieda->protecciones; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Terraza</label>
                                            <select name="terraza" class="form-control">
                                                <option value="<?php echo $editPropieda->terraza; ?>"><?php echo $editPropieda->terraza; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Balcón</label>
                                            <select name="balcon" class="form-control">
                                                <option value="<?php echo $editPropieda->balcon; ?>"><?php echo $editPropieda->balcon; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cuarto de Lavado</label>
                                            <select name="cuarto_lavado" class="form-control">
                                                <option value="<?php echo $editPropieda->cuarto_lavado; ?>"><?php echo $editPropieda->cuarto_lavado; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jacuzzi</label>
                                            <select name="jacuzzi" class="form-control">
                                                <option value="<?php echo $editPropieda->jacuzzi; ?>"><?php echo $editPropieda->jacuzzi; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Casa Club</label>
                                            <select name="casa_club" class="form-control">
                                                <option value="<?php echo $editPropieda->casa_club; ?>"><?php echo $editPropieda->casa_club; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Parrilla</label>
                                            <select name="parrilla" class="form-control">
                                                <option value="<?php echo $editPropieda->parrilla; ?>"><?php echo $editPropieda->parrilla; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Elevador</label>
                                            <select name="elevador" class="form-control">
                                                <option value="<?php echo $editPropieda->elevador; ?>"><?php echo $editPropieda->elevador; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Acceso a Playa</label>
                                            <select name="acceso_playa" class="form-control">
                                                <option value="<?php echo $editPropieda->acceso_playa; ?>"><?php echo $editPropieda->acceso_playa; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Muelle</label>
                                            <select name="muelle" class="form-control">
                                                <option value="<?php echo $editPropieda->muelle; ?>"><?php echo $editPropieda->muelle; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Urbanizado</label>
                                            <select name="urbanizado" class="form-control">
                                                <option value="<?php echo $editPropieda->urbanizado; ?>"><?php echo $editPropieda->urbanizado; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jardín</label>
                                            <select name="jardin" class="form-control">
                                                <option value="<?php echo $editPropieda->jardin; ?>"><?php echo $editPropieda->jardin; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Áreas Verdes</label>
                                            <select name="areas_verdes" class="form-control">
                                                <option value="<?php echo $editPropieda->areas_verdes; ?>"><?php echo $editPropieda->areas_verdes; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Alberca Común</label>
                                            <select name="alberca_comun" class="form-control">
                                                <option value="<?php echo $editPropieda->alberca_comun; ?>"><?php echo $editPropieda->alberca_comun; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Piscina Privada</label>
                                            <select name="piscina_privada" class="form-control">
                                                <option value="<?php echo $editPropieda->piscina_privada; ?>"><?php echo $editPropieda->piscina_privada; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Canchas</label>
                                            <select name="canchas" class="form-control">
                                                <option value="<?php echo $editPropieda->canchas; ?>"><?php echo $editPropieda->canchas; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Seguridad 24 Horas</label>
                                            <select name="seguridad_todo_dia" class="form-control">
                                                <option value="<?php echo $editPropieda->seguridad_todo_dia; ?>"><?php echo $editPropieda->seguridad_todo_dia; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sistema de Seguridad</label>
                                            <select name="sistema_seguridad" class="form-control">
                                                <option value="<?php echo $editPropieda->sistema_seguridad; ?>"><?php echo $editPropieda->sistema_seguridad; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Amueblado</label>
                                            <select name="amueblado" class="form-control">
                                                <option value="<?php echo $editPropieda->amueblado; ?>"><?php echo $editPropieda->amueblado; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vista al Mar</label>
                                            <select name="vista_mar" class="form-control">
                                                <option value="<?php echo $editPropieda->vista_mar; ?>"><?php echo $editPropieda->vista_mar; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vista a la Marina</label>
                                            <select name="vista_marina" class="form-control">
                                                <option value="<?php echo $editPropieda->vista_marina; ?>"><?php echo $editPropieda->vista_marina; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vista Panoramica</label>
                                            <select name="vista_panoramica" class="form-control">
                                                <option value="<?php echo $editPropieda->vista_panoramica; ?>"><?php echo $editPropieda->vista_panoramica; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Vista Campo de Golf</label>
                                            <select name="vista_campo_golf" class="form-control">
                                                <option value="<?php echo $editPropieda->vista_campo_golf; ?>"><?php echo $editPropieda->vista_campo_golf; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Agua</label>
                                            <select name="agua" class="form-control">
                                                <option value="<?php echo $editPropieda->agua; ?>"><?php echo $editPropieda->agua; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Luz *</label>
                                            <select name="luz" class="form-control">
                                                <option value="<?php echo $editPropieda->luz; ?>""><?php echo $editPropieda->luz; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Drenaje *</label>
                                            <select name="drenaje" class="form-control">
                                                <option value="<?php echo $editPropieda->drenaje; ?>"><?php echo $editPropieda->drenaje; ?></option>
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
                                                <option value="<?php echo $editPropieda->tiene_adeudo; ?>"><?php echo $editPropieda->tiene_adeudo; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Si, ¿Cuanto?</label>
                                            <input value="<?php echo $editPropieda->cuanto_adeudo; ?>" name="cuanto_adeudo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>¿Qué tipo de adeudo?</label>
                                            <input value="<?php echo $editPropieda->tipo_adeudo; ?>" name="tipo_adeudo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Ofrece Financiamiento *</label>
                                            <select name="ofrece_financiamiento" class="form-control">
                                                <option value="<?php echo $editPropieda->tipo_adeudo; ?>"><?php echo $editPropieda->tipo_adeudo; ?></option>
                                                <option value="No">No</option>
                                                <option value="Si">Si</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Aplica Credito *</label>
                                            <select name="aplica_credito" class="form-control" required>
                                                <option value="<?php echo $editPropieda->aplica_credito; ?>"><?php echo $editPropieda->aplica_credito; ?></option>
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
                                            <?php foreach ($credits as $credit) {  $checked = ""; ?>
                                                <?php foreach($tipo_credito as $tipo){ ?>
                                                    <?php if ($tipo == $credit->creditos) {
                                                        $checked = "true";
                                                    } ?>

                                                    <?php  } ?>    
                                                    <div class="checkbox">
                                                    <label>
                                                        <input <?php if ($checked == "true") {echo 'checked="checked"';} ?>  name="tipo_credito[]" type="checkbox" value="<?php echo $credit->creditos; ?>"><?php echo $credit->creditos; ?>
                                                    </label>
                                                </div>
                                            <?php } ?>
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
                                                <option value="<?php echo $editPropieda->tipo_contrato; ?>"><?php echo $editPropieda->tipo_contrato; ?></option>
                                                <option value="Anual">Anual</option>
                                                <option value="6 Meses">6 Meses</option>
                                                <option value="3 Meses">3 Meses</option>
                                                <option value="Indeterminado">Indeterminado</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>INE *</label>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($ine); $i++) { ?>
                                                <?php if ($ine[$i] == "Sr") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="ine[]" type="checkbox" value="Sr">Sr
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($ine); $i++) { ?>
                                                <?php if ($ine[$i] == "Sra") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="ine[]" type="checkbox" value="Sra">Sra
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>RFC *</label>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($rfc); $i++) { ?>
                                                <?php if ($rfc[$i] == "Sr") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?>    
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="rfc[]" type="checkbox" value="Sr">Sr
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($rfc); $i++) { ?>
                                                <?php if ($rfc[$i] == "Sra") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="rfc[]" type="checkbox" value="Sra">Sra
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($rfc); $i++) { ?>
                                                <?php if ($rfc[$i] == "No") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="rfc[]" type="checkbox" value="No">No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Persona *</label>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($tipo_persona); $i++) { ?>
                                                <?php if ($rfc[$i] == "Sr") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="tipo_persona[]" type="checkbox" value="Sr">Sr
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($tipo_persona); $i++) { ?>
                                                <?php if ($rfc[$i] == "Sra") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="tipo_persona[]" type="checkbox" value="Sra">Sra
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($tipo_persona); $i++) { ?>
                                                <?php if ($rfc[$i] == "N/A") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="tipo_persona[]" type="checkbox" value="N/A">N/A
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Acta de Nacimiento *</label>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($acta_nacimiento); $i++) { ?>
                                                <?php if ($acta_nacimiento[$i] == "Sr") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="acta_nacimiento[]" type="checkbox" value="Sr">Sr
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($acta_nacimiento); $i++) { ?>
                                                <?php if ($acta_nacimiento[$i] == "Sra") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="acta_nacimiento[]" type="checkbox" value="Sra">Sra
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($acta_nacimiento); $i++) { ?>
                                                <?php if ($acta_nacimiento[$i] == "No") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="acta_nacimiento[]" type="checkbox" value="No">No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>CURP *</label>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($curp); $i++) { ?>
                                                <?php if ($curp[$i] == "Sr") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="curp[]" type="checkbox" value="Sr">Sr
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($curp); $i++) { ?>
                                                <?php if ($curp[$i] == "Sra") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="curp[]" type="checkbox" value="Sra">Sra
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($curp); $i++) { ?>
                                                <?php if ($curp[$i] == "No") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="curp[]" type="checkbox" value="No">No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Escrituras de la Propiedad *</label>
                                            <select name="escritura_propiedad" class="form-control" required>
                                                <option value="<?php echo $editPropieda->escritura_propiedad; ?>"><?php echo $editPropieda->escritura_propiedad; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Titulo de Propiedad *</label>
                                            <select name="titulo_propiedad" class="form-control" required>
                                                <option value="<?php echo $editPropieda->titulo_propiedad; ?>"><?php echo $editPropieda->titulo_propiedad; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Clave Castatral *</label>
                                            <input value="<?php echo $editPropieda->clave_castatral; ?>" name="clave_castatral" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Valor Castatral *</label>
                                            <input value="<?php echo $editPropieda->valor_castatral; ?>" name="valor_castatral" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Registro de Propiedad *</label>
                                            <select name="registro_propiedad" class="form-control" required>
                                                <option value="<?php echo $editPropieda->registro_propiedad; ?>"><?php echo $editPropieda->registro_propiedad; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Aviso de Privacidad *</label>
                                            <select name="aviso_privacidad" class="form-control" required>
                                                <option value="<?php echo $editPropieda->aviso_privacidad; ?>"><?php echo $editPropieda->aviso_privacidad; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Recibo de la Luz *</label>
                                            <select name="recibo_luz" class="form-control" required>
                                                <option value="<?php echo $editPropieda->recibo_luz; ?>"><?php echo $editPropieda->recibo_luz; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Recibo del Agua *</label>
                                            <select name="recibo_agua" class="form-control" required>
                                                <option value="<?php echo $editPropieda->recibo_agua; ?>"><?php echo $editPropieda->recibo_agua; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Predial *</label>
                                            <select name="predial" class="form-control" required>
                                                <option value="<?php echo $editPropieda->predial; ?>"><?php echo $editPropieda->predial; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Planos *</label>
                                            <select name="planos" class="form-control" required>
                                                <option value="<?php echo $editPropieda->planos; ?>"><?php echo $editPropieda->planos; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Regimen Matrimonial *</label>
                                            <select name="regimen_matrimonial" class="form-control" required>
                                                <option value="<?php echo $editPropieda->regimen_matrimonial; ?>"><?php echo $editPropieda->regimen_matrimonial; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Acta de Matrimonio *</label>
                                            <select name="acta_matrimonio" class="form-control" required>
                                                <option value="<?php echo $editPropieda->acta_matrimonio; ?>"><?php echo $editPropieda->acta_matrimonio; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Regimen de Propiedad de Condominio *</label>
                                            <select name="regimen_propiedad_condo" class="form-control" required>
                                                <option value="<?php echo $editPropieda->regimen_propiedad_condo; ?>"><?php echo $editPropieda->regimen_propiedad_condo; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
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
                                                <option value="<?php echo $editPropieda->id_asesores; ?>"><?php echo $editPropieda->nombre_asesor; ?></option>
                                                <?php 
                                                foreach ($adviser as $asesor) {?>
                                                    <option value="<?php echo $asesor->id_asesor; ?>"><?php echo $asesor->nombre_asesor; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Prospectador *</label>
                                                <select name="id_prospector" class="form-control" required>
                                                <option value="<?php echo $editPropieda->id_prospectores; ?>"><?php echo $editPropieda->nombre_prospectador; ?></option>
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
                                                    <input value="<?php echo $editPropieda->fecha_asesor; ?>" name="fecha_asesor" type='text' class="form-control" required id="date1"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Exclusiva *</label>
                                            <select name="exclusiva" class="form-control" required>
                                                <option value="<?php echo $editPropieda->exclusiva; ?>"><?php echo $editPropieda->exclusiva; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Convenio *</label>
                                            <select name="tipo_convenio" class="form-control" required>
                                                <option value="<?php echo $editPropieda->tipo_convenio; ?>"><?php echo $editPropieda->tipo_convenio; ?></option>
                                                <option value="Venta">Venta</option>
                                                <option value="Renta">Renta</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Propiedad *</label>
                                            <select name="tipo_propiedad" class="form-control" required>
                                                <option value="<?php echo $editPropieda->id_tipo_propiedad; ?>"><?php echo $editPropieda->tipo_propiedad; ?></option>
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
                                                <option value="<?php echo $editPropieda->id_comision; ?>"><?php echo $editPropieda->comision; ?>%</option>
                                                <?php 
                                                foreach ($commissions as $commission) {?>
                                                    <option value="<?php echo $commission->id_commissions; ?>"><?php echo $commission->comision; ?>%</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Referido *</label>
                                            <select name="referido" class="form-control" required>
                                                <option value="<?php echo $editPropieda->referido; ?>"><?php echo $editPropieda->referido; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Llaves *</label>
                                            <select name="llaves" class="form-control" required>
                                                <option value="<?php echo $editPropieda->llaves; ?>"><?php echo $editPropieda->llaves; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Fotos *</label>
                                            <select name="fotos" class="form-control" required>
                                                <option value="<?php echo $editPropieda->fotos; ?>"><?php echo $editPropieda->fotos; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Amueblada a la renta o venta *</label>
                                            <select name="amueblada_renta_venta" class="form-control" required>
                                                <option value="<?php echo $editPropieda->amueblada_renta_venta; ?>"><?php echo $editPropieda->amueblada_renta_venta; ?></option>
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
                                            <input value="<?php echo $editPropieda->precio_venta; ?>" name="precio_venta" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Precio Renta</label>
                                            <input value="<?php echo $editPropieda->precio_renta; ?>" name="precio_renta" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Precio Mínimo</label>
                                            <input value="<?php echo $editPropieda->precio_minimo; ?>" name="precio_minimo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tipo de Moneda *</label>
                                            <select name="tipo_moneda" class="form-control" required>
                                                <option value="<?php echo $editPropieda->tipo_moneda; ?>"><?php echo $editPropieda->tipo_moneda; ?></option>
                                                <option value="MXN">MXN</option>
                                                <option value="USD">USD</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cuota de Mantenimiento</label>
                                            <input value="<?php echo $editPropieda->amueblada_renta_venta; ?>" name="cuota_mantenimiento" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Incluye Cuota de Mantenimiento</label>
                                            <select name="inclu_cuota_mantenimiento" class="form-control">
                                                <option value="<?php echo $editPropieda->inclu_cuota_mantenimiento; ?>"><?php echo $editPropieda->inclu_cuota_mantenimiento; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Precio M2</label>
                                            <input value="<?php echo $editPropieda->precio_mcuadrado; ?>" name="precio_mcuadrado" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Fecha de Inicio *</label>
                                            <div class="form-group">
                                                <div class='input-group date'>
                                                    <input value="<?php echo $editPropieda->fecha_inicio; ?>" name="fecha_inicio" type='text' class="form-control" required id="date2" />
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
                                                    <input value="<?php echo $editPropieda->fecha_termino; ?>" name="fecha_termino" type='text' class="form-control" required id="date3"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Restricciones de Renta / Venta</label>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($restricciones_renta_venta); $i++) { ?>
                                                <?php if ($restricciones_renta_venta[$i] == "No niños") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="restricciones_renta_venta[]" type="checkbox" value="No niños">No niños
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($restricciones_renta_venta); $i++) { ?>
                                                <?php if ($restricciones_renta_venta[$i] == "No animales") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="restricciones_renta_venta[]" type="checkbox" value="No animales">No animales
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($restricciones_renta_venta); $i++) { ?>
                                                <?php if ($restricciones_renta_venta[$i] == "Sólo Familias") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="restricciones_renta_venta[]" type="checkbox" value="Sólo Familias">Sólo Familias
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($restricciones_renta_venta); $i++) { ?>
                                                <?php if ($restricciones_renta_venta[$i] == "Sólo ejecutivos") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="restricciones_renta_venta[]" type="checkbox" value="Sólo ejecutivos">Sólo ejecutivos
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($restricciones_renta_venta); $i++) { ?>
                                                <?php if ($restricciones_renta_venta[$i] == "1 Año") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="restricciones_renta_venta[]" type="checkbox" value="1 Año">1 Año
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($restricciones_renta_venta); $i++) { ?>
                                                <?php if ($restricciones_renta_venta[$i] == "6 Meses") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="restricciones_renta_venta[]" type="checkbox" value="6 Meses">6 Meses
                                                </label>
                                            </div>
                                            <?php $checked = ""; ?>
                                            <?php for ($i=0; $i < count($restricciones_renta_venta); $i++) { ?>
                                                <?php if ($restricciones_renta_venta[$i] == "Otra") {
                                                    $checked = "true";
                                                } ?>
                                            <?php  } ?> 
                                            <div class="checkbox">
                                                <label>
                                                    <input <?php if ($checked == "true") {echo 'checked="checked"';} ?> name="restricciones_renta_venta[]" type="checkbox" value="Otra">Otra
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Existe algún defecto estructural *</label>
                                            <select value="<?php echo $editPropieda->defecto_estructural; ?>" name="defecto_estructural" class="form-control" required>
                                                <option value="<?php echo $editPropieda->defecto_estructural; ?>"><?php echo $editPropieda->defecto_estructural; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Especifique el defecto</label>
                                            <input value="<?php echo $editPropieda->defecto_especifico; ?>" name="defecto_especifico" class="form-control">
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
                                            <input value="<?php echo $editPropieda->folio; ?>" name="folio" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Esta completo el expediente *</label>
                                            <select name="expediente_completo" class="form-control" required>
                                                <option value="<?php echo $editPropieda->expediente_completo; ?>"><?php echo $editPropieda->expediente_completo; ?></option>
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Responsable de llenado *</label>
                                            <input value="<?php echo $editPropieda->responsable_llenado; ?>" name="responsable_llenado" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Responsable de revisión *</label>
                                            <input value="<?php echo $editPropieda->responsable_revision; ?>" name="responsable_revision" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Director que aprobó listing y comisión *</label>
                                            <select name="director_aprobo_listing_comision" class="form-control" required>
                                                <option value="<?php echo $editPropieda->director_aprobo_listing_comision; ?>"><?php echo $editPropieda->director_aprobo_listing_comision; ?></option>
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
                <input style="display: none;" type="text" name="update_by" value="{{ Auth::user()->name }}">
            </div>
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
      
        {!! Form::close() !!}
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection