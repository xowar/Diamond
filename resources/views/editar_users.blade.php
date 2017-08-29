@extends('app')

@section('content')
<?php foreach ($users as $user) {?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">REGISTRO DE EMPLEADOS</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        {!! Form::model($user,['files' => 'true', 'method' => 'PATCH','action'=>['UserController@update', 'id'=>$user->id_employees]]) !!}
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
                                            <input value="<?php echo $user->name; ?>" name="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Edad *</label>
                                            <input value="<?php echo $user->edad; ?>" name="edad" class="form-control" required onkeypress="return only_num(event)" maxlength="2">
                                        </div>
                                            <div class="form-group">
                                            <label>Sexo *</label>
                                            <select name="sexo" class="form-control">
                                                <option value="<?php echo $user->sexo; ?>"><?php if ($user->sexo = "M"){echo "Masculino";}else{echo "Femenino";} ?></option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input value="<?php echo $user->telefono; ?>" name="telefono" class="form-control" onkeypress="return only_num(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>Celular</label>
                                            <input value="<?php echo $user->celular; ?>" name="celular" class="form-control" onkeypress="return only_num(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>CURP *</label>
                                            <input value="<?php echo $user->curp; ?>" name="curp" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Fecha de Nacimiento *</label>
                                            <input id="fecha_nacimiento" value="<?php echo $user->fecha_nacimiento; ?>" name="fecha_nacimiento" placeholder="dd-mm-yyyy" class="form-control" onblur="validarFecha(this)" maxlength="10">
                                        </div>
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input value="<?php echo $user->email; ?>" name="email" class="form-control" type="email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <!--<div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>-->
                                        <div class="form-group">
                                            <label>Puesto *</label>
                                            <select name="roles" class="form-control">
                                                <option value="<?php echo $user->roles; ?>"><?php echo $user->roles; ?></option>
                                                <option value="">Selecciona una opcion</option>
                                            <?php foreach ($roles as $rol) { ?>
                                                <option value="<?php echo $rol->rol; ?>"><?php echo $rol->rol; ?></option>
                                            <?php } ?>    
                                            </select>
                                        </div>  
                                        <div class="form-group">
                                            <label>Grado de Escolaridad *</label>
                                            <input name="grado_escolaridad" class="form-control" value="<?php echo $user->grado_escolaridad; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado Civil *</label>
                                            <select name="estado_civil" class="form-control" required>
                                                <option value="<?php echo $user->estado_civil; ?>"><?php echo $user->estado_civil; ?></option>
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

                                        <div class="form-group">
                                            <label>Fecha de Ingreso *</label>
                                            <div class="form-group">
                                                <div class='input-group date'>
                                                    <input value="<?php echo $user->fecha_ingreso; ?>" name="fecha_ingreso" type='text' class="form-control" required id="date2"/>
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>INE *</label>
                                            <div>
                                                <input name="doc_ine" type="file" accept="application/pdf" class=" form-group">
                                                <input class="form-control" type="" name="fecha_ine" value="<?php echo $user->fecha_ine; ?>" placeholder="FECHA DE CADUCIDAD INE" id="date4">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>RFC *</label>
                                            <div>
                                                <input name="doc_rfc" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>CURP *</label>
                                            <div>
                                                <input name="doc_curp" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Acta de Nacimiento *</label>
                                            <div>
                                                <input name="doc_acta_nacimiento" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Comprobante de Domicilo *</label>
                                            <div>
                                                <input name="comprobante_domicilio" type="file" accept="application/pdf" class=" form-group">
                                                <input class="form-control" type="" name="fecha_comprobante" value="<?php echo $user->fecha_comprobante; ?>" placeholder="FECHA DE CADUCIDAD COMPROBANTE" id="date5">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Carta de no Antecedentes Penales *</label>
                                            <div>
                                                <input name="doc_carta_no_antecedentes" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Carta de Referencia Laboral *</label>
                                            <div>
                                                <input name="doc_referencia_laboral" type="file" accept="application/pdf">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Carta de Referencia Personal *</label>
                                            <div>
                                                <input name="doc_referencia_personal" type="file" accept="application/pdf">
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

                <div style="display: none;">

                <input type="text" name="urlINE" value="<?php echo $user->doc_ine; ?>">
                <input type="text" name="urlRFC" value="<?php echo $user->doc_rfc; ?>">
                <input type="text" name="urlCURP" value="<?php echo $user->doc_curp; ?>">
                <input type="text" name="urlActa_Nacimiento" value="<?php echo $user->doc_Acta_Nacimiento; ?>">
                <input type="text" name="urlComprobante_Domicilio" value="<?php echo $user->doc_comprobante_domicilio; ?>">
                <input type="text" name="urlNo_Antecedentes" value="<?php echo $user->doc_carta_no_antecedentes; ?>">
                <input type="text" name="urlReferencia_Laboral" value="<?php echo $user->doc_referencia_laboral; ?>">
                <input type="text" name="urlReferencia_Personal" value="<?php echo $user->doc_referencia_personal; ?>">


                <input type="text" name="nombreINE" value="<?php echo $user->nombre_doc_ine; ?>">
                <input type="text" name="nombreRFC" value="<?php echo $user->nombre_doc_rfc; ?>">
                <input type="text" name="nombreCURP" value="<?php echo $user->nombre_doc_curp; ?>">
                <input type="text" name="nombreActa_Nacimiento" value="<?php echo $user->nombre_Acta_Nacimiento; ?>">
                <input type="text" name="nombreComprobante_Domicilio" value="<?php echo $user->nombre_doc_comprobante_domicilio; ?>">
                <input type="text" name="nombreNo_Antecedentes" value="<?php echo $user->nombre_carta_no_antecedentes; ?>">
                <input type="text" name="nombreReferencia_Personal" value="<?php echo $user->nombre_Referencia_personal; ?>">
                <input type="text" name="nombreReferencia_Laboral" value="<?php echo $user->nombre_Referencia_Laboral; ?>">
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
<?php } ?>


@endsection