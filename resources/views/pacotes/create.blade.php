@extends('layouts.base')
@section('css')
<link href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
@endsection

@section('content')
    
<!--.row-->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading"> Preencha os Dados do Pacote</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
                    <form action="#" class="form-material">
                            {{ csrf_field() }}
                        <div class="form-body">
                            <h3 class="box-title">Informaçao do Pacote</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Designaçao</label>
                                        <input type="text" id="firstName" class="form-control" placeholder="introduza a o nome do Pacote"> 
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Descriçao</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="example">
                                                <label class="control-label">Duraçao do Pacote</label>
                                                <p class="text-muted m-b-20"> Selecione o principio e o fim da disponibilidade do Pacote</p>
                                                <div class="input-daterange input-group" id="date-range">
                                                    <input type="text" class="form-control" name="start" /> <span class="input-group-addon bg-info b-0 text-white">Até</span>
                                                    <input type="text" class="form-control" name="end" /> </div>
                                            </div>
                                </div>
                                <!--/span-->
                                
                            </div>
                            <!--/row-->

                            <h3 class="box-title m-t-40">Endereço</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label>Local</label>
                                        <input type="text" class="form-control"><span class="help-block"> Introduza o nome do país, cidade ou província </span> 
                                    </div>
                                </div>
                            </div>
                            
                         
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Gravar</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--./row-->
@endsection

@section('scripts')

<script src="{{  asset('bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{  asset('bower_components/moment/moment.js') }}"></script>
<script src="{{  asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript">

        // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });

</script>
    <script src="{{  asset('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
@endsection