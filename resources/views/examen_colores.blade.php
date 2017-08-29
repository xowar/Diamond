@extends('app')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PROCESO DE SELECCIÓN</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
            {!! Form::open(['url'=>'home/examen_colores/prospectos', 'method'=>'POST']) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            Formulario
                        </div>

                            <!-- final -->

                        <div class="panel-body" id="elementHidde1">
                        
                            <div class="row" style="margin-bottom: 60px;">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nombre Completo*</label>
                                        <input name="nombre_aspirante" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Puesto Solicitado *</label>
                                        <input name="puesto" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Estado Civil *</label>
                                        <select name="estado_civil" class="form-control" required>
                                            <option value="">selecciona una opción</option>
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
                                    <div class="form-group">
                                        <label>Fecha de Aplicación *</label>
                                        <input name="fecha_examen" class="form-control" value="<?php echo date('Y-m-d H:i:s'); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="">
                                             <label>Fecha de Nacimiento *</label>
                                        </div>
                                        <div class="col-lg-2">
                                            <input name="day" class="form-control" placeholder="DD" onkeypress="return only_num(event)" required maxlength="2">
                                        </div>
                                        <div class="col-lg-2">
                                            <input name="month" class="form-control" placeholder="MM" onkeypress="return only_num(event)" required maxlength="2">
                                        </div>
                                        <div class="col-lg-2">
                                            <input name="year" class="form-control" placeholder="YYYY" onkeypress="return only_num(event)" required maxlength="4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="col-lg-12" style="margin-bottom: 30px;">
                                    <label>INSTRUCCIONES:</label>
                                </div>                          
                                    <div id="target1" class="col-lg-3 text-center">
                                        <input type="button" class="examen_buttom_1" value="1" onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=1}else{ var str2='5'; var res = str1.concat(str2);document.getElementById('resultado').value=res;} $('#target1').hide();"/>
                                    </div>
                                    <div id="target2" class="col-lg-3 text-center">
                                        <input type="button" class="examen_buttom_2" value="2" onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=1}else{ var str2='1'; var res = str1.concat(str2);document.getElementById('resultado').value=res;} $('#target2').hide();"/>
                                    </div>
                                    <div id="target3" class="col-lg-3 text-center">
                                        <input type="button" class="examen_buttom_3" value="3" onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=1}else{ var str2='2'; var res = str1.concat(str2);document.getElementById('resultado').value=res;} $('#target3').hide();"/>
                                    </div>
                                    <div id="target4" class="col-lg-3 text-center">
                                        <input type="button" class="examen_buttom_4" value="4" onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=1}else{ var str2='4'; var res = str1.concat(str2);document.getElementById('resultado').value=res;} $('#target4').hide();"/>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center" style="margin-top: 20px;">
                                    <div id="target7" class="col-lg-3 text-center">
                                        <input type="button" class="examen_buttom_7" value="7" onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=1}else{ var str2='6'; var res = str1.concat(str2);document.getElementById('resultado').value=res;} $('#target7').hide();"/>
                                    </div>
                                    
                                    <div id="target6" class="col-lg-3 text-center">
                                        <input type="button" class="examen_buttom_6" value="6" onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=1}else{ var str2='3'; var res = str1.concat(str2);document.getElementById('resultado').value=res;} $('#target6').hide();"/>
                                    </div>
                                    <div id="target5" class="col-lg-3">
                                        <input type="button" class="examen_buttom_5" value="5" onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=1}else{ var str2='0'; var res = str1.concat(str2);document.getElementById('resultado').value=res;} $('#target5').hide();"/>
                                    </div>
                                    <div id="target8" class="col-lg-3 text-center">
                                        <input type="button" class="examen_buttom_8" value="8" onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=1}else{ var str2='7'; var res = str1.concat(str2);document.getElementById('resultado').value=res;} $('#target8').hide();"/>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center" style="margin-top: 50px;">
                                    <input class="btn btn-info" value="INICIAR DE NUEVO" onClick="limpiar(); $('#target1').show(); $('#target2').show(); $('#target3').show(); $('#target4').show(); $('#target5').show(); $('#target6').show(); $('#target7').show(); $('#target8').show();  "/>
                                </div>
                            </div>
                            <div class="row" style="display: none;">
                                <div class="col-lg-6 bnt-info">
                                    <div class="form-group">
                                        <label>Resultado</label>
                                        <input id="resultado" name="resultado_colores" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <!-- /.row (nested) -->
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde2" onclick="updateReloj()">
                            Test
                        </div>

                        <div class="panel-body" id="elementHidde2" style="display: none;">
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <h3 id="CuentaAtras"></h3>
                                </div>
                                <div class="col-lg-12" style="margin-bottom: 60px;">
                                    <label>Instrucciones: Escriba su respuesta en cada uno de los incisos. El orden de los números es de izquierda a derecha.</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <label style="font-size:25px">E</label>
                                        </div>   
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >1 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="1" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >4 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="4" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >7 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="7" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >10 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="10" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >13 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="13" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >16 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="16" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >19 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="19" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >22 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="25" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >25 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="25" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >28 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="31" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >31 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="31" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >34 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="34" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="text-center">
                                        <label style="font-size:25px">V</label>
                                    </div>   
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >2 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="2" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >5 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="5" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >8 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="8" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >11 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="11" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >14 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="14" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >17 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="17" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >20 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="20" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >23 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="23" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >26 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="26" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >29 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="29" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >32 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="32" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >35 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="35" onkeypress="return soloLetras(event)" maxlength="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <label style="font-size:25px">N</label>
                                        </div>                                        
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >3 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="3" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >6 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="6" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >9 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="9" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >12 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="12" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >15 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="15" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >18 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="18" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >21 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="21" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >24 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="24" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >27 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="27" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >30 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="30" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >33 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="33" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <label class="control-label col-sm-4 text-right" >36 )</label>
                                            <div class="col-sm-8">
                                                <input type="" class="form-control" id="" name="36" onkeypress="return only_num(event)" maxlength="5">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                            </div>
                            <!-- /.row (nested) -->
                        </div>

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="text-center" style="margin-bottom: 30px;">
                {!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
            </div>
            
        {!! Form::close() !!}
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection