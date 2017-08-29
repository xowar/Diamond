@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PROPIEDADES</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!--<div class="row">
                <div class="col-lg-6">
                   <a class="btn btn-success" href="{{URL::to('home/table_propiedades/excel_propiedades')}}">Descargar Excel</a>
                </div>
            </div>-->
            <!-- /.row -->
            <?php foreach ($result as $propiedades) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <b>ID DE LA PROPIEDAD: <?php echo $propiedades->id; ?></b>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Colonia: <?php echo $propiedades->colonia; ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Calle: <?php echo $propiedades->calle_propiedad; ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Ciudad: <?php echo $propiedades->ciudades; ?></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Frente: <?php echo $propiedades->frente; ?> m</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Fondo: <?php echo $propiedades->fondo; ?> m</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Terreno: <?php echo $propiedades->mcuadrado_terreno; ?> <?php echo $propiedades->unidad_medida;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Construccion: <?php echo $propiedades->mcuadrado_construccion;?> <?php echo $propiedades->unidad_medida;?></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Asesor: <?php echo $propiedades->name;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Oficina: <?php echo $propiedades->oficina;?> </label>
                                    </div>
                                    <div class="form-group">
                                        <label>Celular: <?php echo $propiedades->celular;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Nextel:</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 text-center" style="margin-bottom: 20px;">
                                    <h2>DETALLES</h2>
                                </div>

                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Recamaras: <?php echo $propiedades->recamaras;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Baños Completos: <?php echo $propiedades->banos_completos;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Medios Baños: <?php echo $propiedades->medios_banos;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Niveles: <?php echo $propiedades->niveles;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Cochera: <?php echo $propiedades->cochera;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Agua: <?php echo $propiedades->agua;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Luz: <?php echo $propiedades->luz;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Drenaje: <?php echo $propiedades->drenaje;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Vestidor: <?php echo $propiedades->vestidor;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Sala: <?php echo $propiedades->sala;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Comedor: <?php echo $propiedades->comedor;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Cocina Integral: <?php echo $propiedades->cocina_integral;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Estudio: <?php echo $propiedades->estudio;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Cuarto T.V.: <?php echo $propiedades->cuarto_tv;?></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Patio: <?php echo $propiedades->patio;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Bodega: <?php echo $propiedades->bodega;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Cuarto de Servicio: <?php echo $propiedades->cuarto_servicio;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Cisterna: <?php echo $propiedades->cisterna;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Aire Acondicionado: <?php echo $propiedades->aire_acondicionado;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Instalaciones para Minisplit: <?php echo $propiedades->instalaciones_minisplit;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Boyler: <?php echo $propiedades->boyler;?></label>
                                    </div> 
                                    <div class="form-group">
                                        <label>Bardeado: <?php echo $propiedades->bardeado;?></label>
                                    </div> 
                                    <div class="form-group">
                                        <label>Protecciones: <?php echo $propiedades->protecciones;?></label>
                                    </div> 
                                    <div class="form-group">
                                        <label>Terraza: <?php echo $propiedades->terraza;?></label>
                                    </div> 
                                    <div class="form-group">
                                        <label>Balcón: <?php echo $propiedades->balcon;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Cuarto de lavado: <?php echo $propiedades->cuarto_lavado;?></label>
                                    </div> 
                                    <div class="form-group">
                                        <label>Jacuzzi: <?php echo $propiedades->jacuzzi;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Aljiber: <?php echo $propiedades->aljiber;?></label>
                                    </div>  
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Casa Club: <?php echo $propiedades->casa_club;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Parrilla: <?php echo $propiedades->parrilla;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Elevador: <?php echo $propiedades->elevador;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Acceso a Playa: <?php echo $propiedades->acceso_playa;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Muelle: <?php echo $propiedades->muelle;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Urbanizado: <?php echo $propiedades->urbanizado;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Jardín: <?php echo $propiedades->jardin;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Áreas Verdes: <?php echo $propiedades->areas_verdes;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Alberca Común: <?php echo $propiedades->alberca_comun;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Piscina Privada: <?php echo $propiedades->piscina_privada;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Canchas: <?php echo $propiedades->canchas;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Seguridad 24 Horas: <?php echo $propiedades->seguridad_todo_dia;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Sistema de Seguridad: <?php echo $propiedades->sistema_seguridad;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Amueblado: <?php echo $propiedades->amueblado;?></label>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Vista al Mar: <?php echo $propiedades->vista_mar;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Vista a la Marina: <?php echo $propiedades->vista_marina;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Vista Panoramica: <?php echo $propiedades->vista_panoramica;?></label>
                                    </div>
                                    <div class="form-group">
                                        <label>Vista Campo de Golf: <?php echo $propiedades->vista_campo_golf;?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-warning" href="{{URL::to('home/filtro_propiedad_venta/propiedad_cliente', array(Auth::user()->puesto, $propiedades->id))}}">COMPRAR</a>
                            </div>
                        </div>
                                                

                    </div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <?php } ?>

            <!-- /.row -->
    </div>



@endsection
