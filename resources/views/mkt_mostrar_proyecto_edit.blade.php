@extends('app')

@section('content')
<?php foreach ($proyectos as $proyecto) {?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">DATOS DEL PROYECTO</h1>
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
        {!! Form::model($proyectos,['method' => 'PATCH','action'=>['MktController@editar_proyecto', 'id'=>$proyecto->id_proyecto]]) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                           	Formulario
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Lider de proyecto *</label>
                                            <select name="lider_proyecto" class="form-control" required>
                                                <option value="<?php echo $proyecto->lider_proyecto; ?>"><?php echo $proyecto->lider_proyecto; ?></option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Sub Lideres</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <select name="sub1" class="form-control">
                                                <option value="<?php echo $proyecto->sub1; ?>"><?php echo $proyecto->sub1; ?></option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>
                                            <div class="col-lg-3">
                                                <select name="sub2" class="form-control">
                                                <option value="<?php echo $proyecto->sub2; ?>"><?php echo $proyecto->sub2; ?></option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>
                                            <div class="col-lg-3">
                                                <select name="sub3" class="form-control">
                                                <option value="<?php echo $proyecto->sub3; ?>"><?php echo $proyecto->sub3; ?></option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>
                                            <div class="col-lg-3">
                                                <select name="sub4" class="form-control">
                                                <option value="<?php echo $proyecto->sub4; ?>"><?php echo $proyecto->sub4; ?></option>
                                                <?php foreach ($employees as $employee) { ?>
                                                    <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                <?php } ?>                                                
                                            </select>

                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Direccion *</label>
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="latitud" class="form-control" required placeholder="LATITUD" maxlength="60" value="<?php echo $proyecto->latitud; ?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="longitud" class="form-control" required placeholder="LONGITUD"d maxlength="60" value="<?php echo $proyecto->longitud; ?>">
                                            </div>
                                            
                                        </div>
                                            <div class="form-group">
                                            <label>Renders *</label>
                                            <textarea name="renders" class="form-control" rows="4"><?php echo $proyecto->renders; ?></textarea>

                                        </div>  
                                        <div class="form-group">
                                            <label>Medidas *</label>
                                            <textarea name="medidas" class="form-control" rows="4"><?php echo $proyecto->medidas; ?></textarea>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <label>Precios *</label>
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="precio_min" class="form-control" required placeholder="MIN" onkeypress="return only_num(event)" maxlength="20" value="<?php echo $proyecto->precio_min; ?>">
                                            </div>
                                            <div class="col-lg-6">
                                                <input name="precio_max" class="form-control" required placeholder="MAX" onkeypress="return only_num(event)" maxlength="20" value="<?php echo $proyecto->precio_max; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>Precio estimado de comercializacion*</label>
                                                <input name="precio_cormecializacion" class="form-control" required disabled=""  onkeypress="return only_num(event)" value="<?php echo $proyecto->precio_cormecializacion; ?>">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Comision*</label>
                                                <!--<input name="comision" class="form-control" required  onkeypress="return only_num(event)" maxlength="2">-->
                                                <select name="comision" class="form-control" disabled="">
                                                    <option value="<?php echo $proyecto->precio_min; ?>"><?php echo $proyecto->comision; ?> %</option>
                                                    <option value="1">1 %</option>
                                                    <option value="2">2 %</option> 
                                                    <option value="3">3 %</option> 
                                                    <option value="4">4 %</option> 
                                                    <option value="5">5 %</option>                                            
                                                    <option value="6">6 %</option> 
                                                    <option value="7">7 %</option> 
                                                    <option value="8">8 %</option> 
                                                    <option value="9">9 %</option> 
                                                    <option value="10">10 %</option> 
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Comision MKT*</label>
                                                <!--<input name="comision_mkt" class="form-control" required  onkeypress="return only_num(event)" maxlength="2">-->
                                                <select name="comision_mkt" class="form-control" disabled="">
                                                    <option value="<?php echo $proyecto->comision_mkt; ?>"><?php echo $proyecto->comision_mkt; ?> %</option>
                                                    <option value="1">1 %</option>
                                                    <option value="2">2 %</option> 
                                                    <option value="3">3 %</option> 
                                                    <option value="4">4 %</option> 
                                                    <option value="5">5 %</option>                                            
                                                    <option value="6">6 %</option> 
                                                    <option value="7">7 %</option> 
                                                    <option value="8">8 %</option> 
                                                    <option value="9">9 %</option> 
                                                    <option value="10">10 %</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Caracteristicas *</label>
                                            <textarea name="caracteristicas" class="form-control" rows="4"><?php echo $proyecto->caracteristicas; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nombre Inicial *</label>
                                            <input name="nombre_inicial" class="form-control" required value="<?php echo $proyecto->nombre_inicial; ?>">
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
            {!! Form::submit('Guardar Cambios', ['class'=>'btn btn-primary']) !!}
      
        {!! Form::close() !!}
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>

<?php } ?>
@endsection