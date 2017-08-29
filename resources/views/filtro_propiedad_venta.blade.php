@extends('app')

@section('content')
<div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">FILTRAR PROPIEDADES</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            {!! Form::open(['url'=>'home/filtro_propiedad_venta/resultado_propiedades', 'method'=>'POST']) !!}
            <div class="row text-center">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Tipo de Propiedad</label>
                        <select name="id_tipo_propiedad" class="form-control">
                            <option value="">Selecciona una opción</option>
                            <?php foreach ($tipo_propiedades as $tipo_propiedad) { ?>
                                <option value="<?php echo $tipo_propiedad->id_type_propertys; ?>"><?php echo $tipo_propiedad->tipo_propiedad; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ubicación</label>
                        <select name="ubicacion" class="form-control">
                            <option value="">Selecciona una opción</option>
                            <?php foreach ($colonias as $colonia) { ?>
                                <option value="<?php echo $colonia->id_colonies; ?>"><?php echo $colonia->colonia; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group" >
                        <div class="col-lg-12 text-center">
                            <label>Rango de Precio</label>
                        </div>
                        <div class="col-lg-6" style="margin-bottom: 15px;">
                            <input name="min" class="form-control" placeholder="$ MIN">
                        </div>
                        <div class="col-lg-6" style="margin-bottom: 15px;">
                            <input name="max" class="form-control" placeholder="$ MAX">
                        </div>    
                    </div>
                    <div class="form-group">
                        <label>Recamaras</label>
                        <select name="recamaras" class="form-control">
                            <option value="">Selecciona una opción</option>
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
                        <label>Baños Completos</label>
                        <select name="banos_completos" class="form-control">
                            <option value="">Selecciona una opción</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Medios Baños</label>
                        <select name="medios_banos" class="form-control">
                            <option value="">Selecciona una opción</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Niveles</label>
                        <select name="niveles" class="form-control">
                            <option value="">Selecciona una opción</option>
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
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cochera</label>
                        <select name="cochera" class="form-control">
                            <option value="">Selecciona una opción</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
            </div>
            {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
            <!-- /.row -->
    </div>
    {!! Form::close() !!}



@endsection
