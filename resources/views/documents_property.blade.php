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
                <h1 class="page-header">DOCUMENTOS DE PROPIEDAD</h1>
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
                                        <label>INE Sr:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_ine1; ?>"><?php echo $documents->nombre_doc_ine1; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>INE Sra:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_ine2; ?>"><?php echo $documents->nombre_doc_ine2; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>RFC Sr:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_rfc1; ?>"><?php echo $documents->nombre_doc_rfc1; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>RFC Sra:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_rfc2; ?>"><?php echo $documents->nombre_doc_rfc2; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Tipo de persona Sr:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_TipoPersona1; ?>"><?php echo $documents->nombre_doc_TipoPersona1; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Tipo de persona Sra:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_TipoPersona2; ?>"><?php echo $documents->nombre_doc_TipoPersona2; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Acta de nacimiento Sr:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_ActaNacimiento1; ?>"><?php echo $documents->nombre_doc_ActaNacimiento1; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Acta de nacimiento Sra:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_ActaNacimiento2; ?>"><?php echo $documents->nombre_doc_ActaNacimiento2; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Curp Sr:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_curp1; ?>"><?php echo $documents->nombre_doc_curp1; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Curp Sra:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_curp2; ?>"><?php echo $documents->nombre_doc_curp2; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Escritura:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_escritura; ?>"><?php echo $documents->nombre_doc_escritura; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Titulo:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_titulo; ?>"><?php echo $documents->nombre_doc_titulo; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Registro:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_registro; ?>"><?php echo $documents->nombre_doc_registro; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Aviso:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_aviso; ?>"><?php echo $documents->nombre_doc_aviso; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Recibo de luz:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_recibo_luz; ?>"><?php echo $documents->nombre_doc_recibo_luz; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Recibo de agua:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_recibo_agua; ?>"><?php echo $documents->nombre_doc_recibo_agua; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Predial:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_predial; ?>"><?php echo $documents->nombre_doc_predial; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Planos:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_planos; ?>"><?php echo $documents->nombre_doc_planos; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Regimen matrimonial:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_regimen_matrimonial; ?>"><?php echo $documents->nombre_doc_regimen_matrimonial; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Acta de matrimonio:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_acta_matrimonio; ?>"><?php echo $documents->nombre_doc_acta_matrimonio; ?></a>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Regimen de propiedad condominio:</label>
                                        <a href="{{ url('/') }}<?php echo $documents->doc_regimen_propiedad_condo; ?>"><?php echo $documents->nombre_doc_regimen_propiedad_condo; ?></a>
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