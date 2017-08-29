@extends('app')

@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">REPORTES EN EXCEL</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            EXCEL
                        </div>

                            <!-- final -->

                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <a class="btn btn-success" href="{{URL::to('home/reportes_excel/excel_propiedades')}}">Descargar Excel</a>
                                        <label>REGISTRO DE PROPIEDADES:</label>
                                    </div>
                                    {!! Form::open(['url'=>'home/reportes_excel/excel_propiedades_asesor', 'method'=>'POST']) !!}
                                        <div class="col-lg-1">
                                            {!! Form::submit('Descargar Excel', ['class'=>'btn btn-success']) !!}
                                        </div>
                                        <div class="col-lg-2">
                                            <label>REGISTRO DE PROPIEDADES DEL ASESOR:</label> 
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="employees" class="form-control">
                                                    <?php foreach ($employees as $employee) { ?>
                                                        <option value="<?php echo $employee->name; ?>"><?php echo $employee->name; ?></option>
                                                    <?php } ?>
                                                    
                                            </select>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                                <div class="col-lg-12">
                                    <!--<div class="col-lg-6">
                                        <a class="btn btn-success" href="{{URL::to('home/reportes_excel/listing')}}">Descargar Excel</a>
                                        <label>LISTING POR MES DE:</label>
                                    </div>-->
                                    {!! Form::open(['url'=>'home/reportes_excel/listing', 'method'=>'POST']) !!}

                                        <div class="col-lg-1">
                                            {!! Form::submit('Descargar Excel', ['class'=>'btn btn-success']) !!}
                                        </div>
                                        <div class="col-lg-2">
                                            <label>LISTING POR MES DE:</label> 
                                        </div>
                                        <div class="col-lg-1">
                                            <select name="month" class="form-control">
                                                <option value="01">ENERO</option>
                                                <option value="02">FEBRERO</option>
                                                <option value="03">MARZO</option>
                                                <option value="04">ABRIL</option>
                                                <option value="05">MAYO</option>
                                                <option value="06">JUNIO</option>
                                                <option value="07">JULIO</option>
                                                <option value="08">AGOSTO</option>
                                                <option value="09">SEPTIEMBRE</option>
                                                <option value="10">OCTUBRE</option>
                                                <option value="11">NOVIEMBRE</option>
                                                <option value="12">DICIEMBRE</option>
                                            </select>
                                        
                                        </div>
                                        <div class="col-lg-1 form-group">
                                            <input type="" name="year" value="<?php echo date("Y");  ?>" class="form-control" onkeypress="return only_num(event)">
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                                    
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection