@extends('app')

@section('content')

<?php 
    foreach ($reasonDelete as $reason) {?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Eliminar</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        {!! Form::model($reason,['method' => 'PATCH','action'=>['RegisterPropertyController@destroy','id'=>$reason->id]]) !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="btnHidde8">
                            <!-- Title-->
                            Razón para dar de baja
                        </div>
                        <div class="panel-body" id="elementHidde8"">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Razon *</label>
                                            <select name="delete_reason" class="form-control" required>
                                                <option value="">Selecciona una opción</option>
                                                <?php foreach ($reason_to_delete as $allReason) { ?>
                                                    <option value="<?php echo $allReason->id; ?>"><?php echo $allReason->reason; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input style="display: none;" value="{{ Auth::user()->name }}" name="delete_by" class="form-control" required>
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
            {!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
      
        {!! Form::close() !!}
    <!-- End -->
    </div>
    <!-- /.container-fluid -->
</div>

<?php } ?>
@endsection