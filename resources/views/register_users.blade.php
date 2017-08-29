@extends('app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">REGISTRO DE USUARIOS</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <!-- /.row -->
        {!! Form::open(['url'=>'home/create_users', 'method'=>'POST', 'files' => 'true']) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                           	Formulario
                        </div>
                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nombre *</label>
                                            <input name="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Edad *</label>
                                            <input name="edad" class="form-control" required onkeypress="return only_num(event)" maxlength="2">
                                        </div>
                                            <div class="form-group">
                                            <label>Sexo *</label>
                                            <select name="sexo" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input name="telefono" class="form-control" onkeypress="return only_num(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input name="celular" class="form-control" onkeypress="return only_num(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>CURP *</label>
                                            <input name="curp" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de Nacimiento *</label>
                                            <input id="fecha_nacimiento" name="fecha_nacimiento" placeholder="dd-mm-yyyy" class="form-control" onblur="validarFecha(this)" maxlength="10">
                                        </div>
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input name="email" class="form-control" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                                        </div>
                                        <div class="form-group">
                                            <label>Puesto *</label>
                                            <select name="roles" class="form-control">
                                            <option value="">Selecciona una opcion</option>
                                            <?php foreach ($roles as $rol) { ?>
                                                <option value="<?php echo $rol->rol; ?>"><?php echo $rol->rol; ?></option>
                                            <?php } ?>            
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Grado de Escolaridad *</label>
                                            <input name="grado_escolaridad" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado Civil *</label>
                                            <select name="estado_civil" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <option value="Soltero/a">Soltero/a</option>
                                                <option value="Casado(a)">Casado(a)</option>
                                                <option value="En una relación">En una relación</option>
                                                <option value="Comprometido(a)">Comprometido(a)</option>
                                                <option value="Mantiene una unión civil">Mantiene una unión civil</option>
                                                <option value="Divorciado(a)">Divorciado(a)</option>
                                                <option value="Viudo(a)">Viudo(a)</option>
                                                <option value="Separado(a)">Separado(a)</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <!--<div class="form-group">
                                            <label>Puesto</label>
                                            <input name="puesto" class="form-control">
                                        </div>-->
                                        
                                        <!--<div class="form-group">
                                            <label>Equipo *</label>
                                            <select name="equipo" class="form-control">
                                                <option value="">Selecciona una opcion</option>
                                                <option value="1">Rojo</option>
                                                <option value="2">Azul</option>
                                            </select>
                                        </div>-->
                                        <div class="form-group">
                                            <label>Oficinas *</label>
                                            <select name="oficina" class="form-control">
                                            <option value="">Selecciona una opcion</option>
                                            <?php foreach ($oficinas as $oficina) { ?>
                                                <option value="<?php echo $oficina->oficina; ?>"><?php echo $oficina->oficina; ?></option>
                                            <?php } ?>            
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Fecha de Ingreso *</label>
                                            <div class="form-group">
                                                <div class='input-group date'>
                                                    <input name="fecha_ingreso" type='text' class="form-control" required id="date2"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>INE *</label>
                                            <div>
                                                <input name="doc_ine" type="file" accept="application/pdf" class=" form-group" required>
                                                <input class="form-control" type="" name="fecha_ine" placeholder="FECHA DE CADUCIDAD INE" id="date4">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>RFC *</label>
                                            <div>
                                                <input name="doc_rfc" type="file" accept="application/pdf" class=" form-group" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>CURP *</label>
                                            <div>
                                                <input name="doc_curp" type="file" accept="application/pdf" class=" form-group" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Acta de Nacimiento *</label>
                                            <div>
                                                <input name="doc_acta_nacimiento" type="file" accept="application/pdf" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Comprobante de Domicilo *</label>
                                            <div>
                                                <input name="doc_comprobante_domicilio" type="file" accept="application/pdf" class=" form-group" required>
                                                <input class="form-control" type="" name="comprobante_domicilio" placeholder="FECHA DE CADUCIDAD COMPROBANTE" id="date5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Carta de no Antecedentes Penales *</label>
                                            <div>
                                                <input name="doc_carta_no_antecedentes" type="file" accept="application/pdf" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Carta de Referencia Laboral *</label>
                                            <div>
                                                <input name="doc_referencia_laboral" type="file" accept="application/pdf" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Carta de Referencia Personal *</label>
                                            <div>
                                                <input name="doc_referencia_personal" type="file" accept="application/pdf" required>
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