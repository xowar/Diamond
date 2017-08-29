@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PROPIEDADES ELIMINADAS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" style="overflow-y:hidden;overflow-x:scroll;">
                <div class="col-lg-12 table-scroll">
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

                                        <th>Nombre del Dueño</th>
                                        <th>Direccion del Dueño</th>
                                        <th>Colonia del Dueño</th>
                                        <th>Tel. Casa</th>
                                        <th>Tel. Oficina</th>
                                        <th>Celular</th>
                                        <th>Estado Civil</th>
                                        <th>Email</th>
                                        <th>Es Dueño de la Propiedad</th>
                                        <th>Relacion con el Dueño</th>

                                        <th>Calle de la Propiedad</th>
                                        <th>Numero Ext.</th>
                                        <th>Numero Int.</th>
                                        <th>Colonia</th>
                                        <th>Ciudad</th>
                                        <th>Estado</th>
                                        <th>Codigo Postal</th>
                                        <th>Uso de Suelo</th>

                                        <th>Frente</th>
                                        <th>Fondo</th>
                                        <th>Unidad de Medida</th>
                                        <th>Medida del Terreno</th>
                                        <th>Medida de la Construccion</th>
                                        <th>Recámaras</th>
                                        <th>Baños Completos</th>
                                        <th>Medios Baños</th>
                                        <th>Cocheras</th>
                                        <th>Niveles</th>
                                        <th>Piso Condo</th>
                                        <th>Conservación</th>
                                        <th>Dueños Originales</th>
                                        <th>Vestidor</th>
                                        <th>Closet</th>
                                        <th>Sala</th>
                                        <th>Comedor</th>
                                        <th>Cocina Integral</th>
                                        <th>Estudio</th>
                                        <th>Cuarto T.V.</th>
                                        <th>Patio</th>
                                        <th>Cuarto de Servicio</th>
                                        <th>Bodega</th>
                                        <th>Cisterna</th>
                                        <th>Aire Acondicionado</th>
                                        <th>Instalaciones para Minisplit</th>
                                        <th>Boyler</th>
                                        <th>Bardeado</th>
                                        <th>Protecciones</th>
                                        <th>Terraza</th>
                                        <th>Balcón</th>
                                        <th>Cuarto de Lavado</th>
                                        <th>Jacuzzi</th>
                                        <th>Aljiber</th>
                                        <th>Casa Club</th>
                                        <th>Parrilla</th>
                                        <th>Elevador</th>
                                        <th>Acceso a Playa</th>
                                        <th>Muelle</th>
                                        <th>Urbanizado</th>
                                        <th>Jardín</th>
                                        <th>Áreas Verdes</th>
                                        <th>Alberca Común</th>
                                        <th>Piscina Privada</th>
                                        <th>Canchas</th>
                                        <th>Seguridad 24 Horas</th>
                                        <th>Sistema de Seguridad</th>
                                        <th>Amueblado</th>
                                        <th>Vista al Mar</th>
                                        <th>Vista a la Marina</th>
                                        <th>Vista Panoramica</th>
                                        <th>Vista Campo de Golf</th>
                                        <th>Agua</th>
                                        <th>Luz</th>
                                        <th>Drenaje</th>

                                        <th>Tiene aduedo</th>
                                        <th>Si, Cuanto?</th>
                                        <th>¿Qué tipo de adeudo?</th>
                                        <th>Ofrece Financiamiento</th>
                                        <th>Aplica Credito</th>
                                        <th>Especifica que tipo de crédito aplica</th>

                                        <th>Tipo de Contrato</th>
                                        <th>INE</th>
                                        <th>RFC</th>
                                        <th>Tipo de Persona</th>
                                        <th>Acta de Nacimiento</th>
                                        <th>CURP</th>
                                        <th>Escrituras de la Propiedad</th>
                                        <th>Titulo de Propiedad</th>
                                        <th>Registro de Propiedad</th>
                                        <th>Aviso de Privacidad</th>
                                        <th>Recibo de la Luz</th>
                                        <th>Recibo del Agua</th>
                                        <th>Predial</th>
                                        <th>Clave Castatral</th>
                                        <th>Valor Castatral</th>
                                        <th>Planos</th>
                                        <th>Regimen Matrimonial</th>
                                        <th>Acta de Matrimonio</th>
                                        <th>Regimen de Propiedad de Condominio</th>

                                        <th>Asesor</th>
                                        <th>Prospectador</th>
                                        <th>Fecha</th>
                                        <th>Exclusiva</th>
                                        <th>Tipo de Convenio</th>
                                        <th>Tipo de Propiedad</th>
                                        <th>Comision</th>
                                        <th>Referido</th>
                                        <th>Llaves</th>
                                        <th>Fotos</th>
                                        <th>Amueblada a la renta o venta</th>
                                        <th>Tipo de Anuncio</th>

                                        <th>Precio Venta</th>
                                        <th>Precio Renta</th>
                                        <th>Precio Mínimo</th>
                                        <th>Tipo de Moneda</th>
                                        <th>Cuota de Mantenimiento</th>
                                        <th>Incluye Cuota de Mantenimiento</th>
                                        <th>Precio M2</th>
                                        <th>Fecha de Inicio</th>
                                        <th>Fecha de Termino</th>
                                        <th>Restricciones de Renta / Venta</th>
                                        <th>Existe algún defecto estructural</th>
                                        <th>Especifique el defecto</th>

                                        <th>Folio</th>
                                        <th>Esta completo el expediente</th>
                                        <th>Responsable de llenado</th>
                                        <th>Responsable de revisión</th>
                                        <th>Director que aprobó listing y comisión</th>
                                        <th>Codigo</th>
                                        <th>Borrado el</th>
                                        <th>Borrado por</th>
                                        <th>Motivo de borrado</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        foreach ($registro_de_propiedad as $propiedad) {?>
                                        <tr class="odd gradeX">
                                            <td>
                                                <a class="btn btn-success" href="{{URL::to('home/property_delete/restore', array(Auth::user()->puesto, $propiedad->id))}}">Restaurar</a>
                                            </td>
                                            <td><?php echo $propiedad->nombre_dueno; ?></td>
                                            <td><?php echo $propiedad->direccion_dueno; ?></td>
                                            <td><?php echo $propiedad->colonia; ?></td>
                                            <td><?php echo $propiedad->tel_casa; ?></td>
                                            <td><?php echo $propiedad->tel_oficina; ?></td>
                                            <td><?php echo $propiedad->celular; ?></td>
                                            <td><?php echo $propiedad->estado_civil; ?></td>
                                            <td><?php echo $propiedad->email; ?></td>
                                            <td><?php echo $propiedad->es_dueno_propiedad; ?></td>
                                            <td><?php echo $propiedad->relacion_con_dueno; ?></td>

                                            <td><?php echo $propiedad->calle_propiedad; ?></td>
                                            <td><?php echo $propiedad->numero_ext_propiedad; ?></td>
                                            <td><?php echo $propiedad->numero_int_propiedad; ?></td>
                                            <td><?php echo $propiedad->colonia; ?></td>
                                            <td><?php echo $propiedad->ciudades; ?></td>
                                            <td><?php echo $propiedad->estados; ?></td>
                                            <td><?php echo $propiedad->codigo_postal_propiedad; ?></td>
                                            <td><?php echo $propiedad->uso_de_suelo; ?></td>

                                            <td><?php echo $propiedad->frente; ?></td>
                                            <td><?php echo $propiedad->fondo; ?></td>
                                            <td><?php echo $propiedad->unidad_medida; ?></td>
                                            <td><?php echo $propiedad->mcuadrado_terreno; ?></td>
                                            <td><?php echo $propiedad->mcuadrado_construccion; ?></td>
                                            <td><?php echo $propiedad->recamaras; ?></td>
                                            <td><?php echo $propiedad->banos_completos; ?></td>
                                            <td><?php echo $propiedad->medios_banos; ?></td>
                                            <td><?php echo $propiedad->cochera; ?></td>
                                            <td><?php echo $propiedad->niveles; ?></td>
                                            <td><?php echo $propiedad->piso_condo; ?></td>
                                            <td><?php echo $propiedad->conservacion; ?></td>
                                            <td><?php echo $propiedad->duenos_originales; ?></td>
                                            <td><?php echo $propiedad->vestidor; ?></td>
                                            <td><?php echo $propiedad->closet; ?></td>
                                            <td><?php echo $propiedad->sala; ?></td>
                                            <td><?php echo $propiedad->comedor; ?></td>
                                            <td><?php echo $propiedad->cocina_integral; ?></td>
                                            <td><?php echo $propiedad->estudio; ?></td>
                                            <td><?php echo $propiedad->cuarto_tv; ?></td>
                                            <td><?php echo $propiedad->patio; ?></td>
                                            <td><?php echo $propiedad->cuarto_servicio; ?></td>
                                            <td><?php echo $propiedad->bodega; ?></td>
                                            <td><?php echo $propiedad->cisterna; ?></td>
                                            <td><?php echo $propiedad->aire_acondicionado; ?></td>
                                            <td><?php echo $propiedad->instalaciones_minisplit; ?></td>
                                            <td><?php echo $propiedad->boyler; ?></td>
                                            <td><?php echo $propiedad->bardeado; ?></td>
                                            <td><?php echo $propiedad->protecciones; ?></td>
                                            <td><?php echo $propiedad->terraza; ?></td>
                                            <td><?php echo $propiedad->balcon; ?></td>
                                            <td><?php echo $propiedad->cuarto_lavado; ?></td>
                                            <td><?php echo $propiedad->jacuzzi; ?></td>
                                            <td><?php echo $propiedad->aljiber; ?></td>
                                            <td><?php echo $propiedad->casa_club; ?></td>
                                            <td><?php echo $propiedad->parrilla; ?></td>
                                            <td><?php echo $propiedad->elevador; ?></td>
                                            <td><?php echo $propiedad->acceso_playa; ?></td>
                                            <td><?php echo $propiedad->muelle; ?></td>
                                            <td><?php echo $propiedad->urbanizado; ?></td>
                                            <td><?php echo $propiedad->jardin; ?></td>
                                            <td><?php echo $propiedad->areas_verdes; ?></td>
                                            <td><?php echo $propiedad->alberca_comun; ?></td>
                                            <td><?php echo $propiedad->piscina_privada; ?></td>
                                            <td><?php echo $propiedad->canchas; ?></td>
                                            <td><?php echo $propiedad->seguridad_todo_dia; ?></td>
                                            <td><?php echo $propiedad->sistema_seguridad; ?></td>
                                            <td><?php echo $propiedad->amueblado; ?></td>
                                            <td><?php echo $propiedad->vista_mar; ?></td>
                                            <td><?php echo $propiedad->vista_marina; ?></td>
                                            <td><?php echo $propiedad->vista_panoramica; ?></td>
                                            <td><?php echo $propiedad->vista_campo_golf; ?></td>
                                            <td><?php echo $propiedad->agua; ?></td>
                                            <td><?php echo $propiedad->luz; ?></td>
                                            <td><?php echo $propiedad->drenaje; ?></td>

                                            <td><?php echo $propiedad->tiene_adeudo; ?></td>
                                            <td><?php echo $propiedad->cuanto_adeudo; ?></td>
                                            <td><?php echo $propiedad->tipo_adeudo; ?></td>
                                            <td><?php echo $propiedad->ofrece_financiamiento; ?></td>
                                            <td><?php echo $propiedad->aplica_credito; ?></td>
                                            <td><?php echo $propiedad->tipo_credito; ?></td>

                                            <td><?php echo $propiedad->tipo_contrato; ?></td>
                                            <td><?php echo $propiedad->ine; ?></td>
                                            <td><?php echo $propiedad->rfc; ?></td>
                                            <td><?php echo $propiedad->tipo_persona; ?></td>
                                            <td><?php echo $propiedad->acta_nacimiento; ?></td>
                                            <td><?php echo $propiedad->curp; ?></td>
                                            <td><?php echo $propiedad->escritura_propiedad; ?></td>
                                            <td><?php echo $propiedad->titulo_propiedad; ?></td>
                                            <td><?php echo $propiedad->registro_propiedad; ?></td>
                                            <td><?php echo $propiedad->aviso_privacidad; ?></td>
                                            <td><?php echo $propiedad->recibo_luz; ?></td>
                                            <td><?php echo $propiedad->recibo_agua; ?></td>
                                            <td><?php echo $propiedad->predial; ?></td>
                                            <td><?php echo $propiedad->planos; ?></td>
                                            <td><?php echo $propiedad->regimen_matrimonial; ?></td>
                                            <td><?php echo $propiedad->clave_castatral; ?></td>
                                            <td><?php echo $propiedad->valor_castatral; ?></td>
                                            <td><?php echo $propiedad->acta_matrimonio; ?></td>
                                            <td><?php echo $propiedad->regimen_propiedad_condo; ?></td>

                                            <td><?php echo $propiedad->nombre_asesor; ?></td>
                                            <td><?php echo $propiedad->nombre_prospectador; ?></td>
                                            <td><?php echo $propiedad->fecha_asesor; ?></td>
                                            <td><?php echo $propiedad->exclusiva; ?></td>
                                            <td><?php echo $propiedad->tipo_convenio; ?></td>
                                            <td><?php echo $propiedad->tipo_propiedad; ?></td>
                                            <td><?php echo $propiedad->comision; ?>%</td>
                                            <td><?php echo $propiedad->referido; ?></td>
                                            <td><?php echo $propiedad->llaves; ?></td>
                                            <td><?php echo $propiedad->fotos; ?></td>
                                            <td><?php echo $propiedad->amueblada_renta_venta; ?></td>
                                            <td><?php echo $propiedad->tipo_anuncio; ?></td>


                                            <td><?php echo $propiedad->precio_venta; ?></td>
                                            <td><?php echo $propiedad->precio_renta; ?></td>
                                            <td><?php echo $propiedad->precio_minimo; ?></td>
                                            <td><?php echo $propiedad->tipo_moneda; ?></td>
                                            <td><?php echo $propiedad->cuota_mantenimiento; ?></td>
                                            <td><?php echo $propiedad->inclu_cuota_mantenimiento; ?></td>
                                            <td><?php echo $propiedad->precio_mcuadrado; ?></td>
                                            <td><?php echo $propiedad->fecha_inicio; ?></td>
                                            <td><?php echo $propiedad->fecha_termino; ?></td>
                                            <td><?php echo $propiedad->restricciones_renta_venta; ?></td>
                                            <td><?php echo $propiedad->defecto_estructural; ?></td>
                                            <td><?php echo $propiedad->defecto_especifico; ?></td>

                                            <td><?php echo $propiedad->folio; ?></td>
                                            <td><?php echo $propiedad->expediente_completo; ?></td>
                                            <td><?php echo $propiedad->responsable_llenado; ?></td>
                                            <td><?php echo $propiedad->responsable_revision; ?></td>
                                            <td><?php echo $propiedad->director_aprobo_listing_comision; ?></td> 
                                            <td><?php echo $propiedad->codigo; ?></td> 
                                            <td><?php echo $propiedad->delete_at; ?></td> 
                                            <td><?php echo $propiedad->delete_by; ?></td> 
                                            <td><?php echo $propiedad->reason; ?></td> 
                                            
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
