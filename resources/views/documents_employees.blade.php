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
    foreach ($documents as $documents) {?>



<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">DOCUMENTOS DE EMPLEADO</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde1">
                            <!-- Title-->
                            PDF
                        </div>

                            <!-- final -->

                        <div class="panel-body" id="elementHidde1">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <label>INE:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_ine; ?>"><?php echo $documents->nombre_doc_ine; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>RFC:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_rfc; ?>"><?php echo $documents->nombre_doc_rfc; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>CURP:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_curp; ?>"><?php echo $documents->nombre_doc_curp; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>ACTA DE NACIMIENTO:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_Acta_Nacimiento; ?>"><?php echo $documents->nombre_Acta_Nacimiento; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>COMPROBANTE DE DOMICILIO:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_comprobante_domicilio; ?>"><?php echo $documents->nombre_doc_comprobante_domicilio; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>CARTA DE NO ANTECEDENTES PENALES:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_carta_no_antecedentes; ?>"><?php echo $documents->nombre_carta_no_antecedentes; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>REFERENCIA PERSONAL:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_referencia_personal; ?>"><?php echo $documents->nombre_Referencia_personal; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>REFERENCIA LABORAL:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_referencia_laboral; ?>"><?php echo $documents->nombre_Referencia_Laboral; ?></a>
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
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection