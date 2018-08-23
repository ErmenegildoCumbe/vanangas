@extends('layouts.base')

@section('css')
    
@endsection

@section('content')
{{-- cabecalho da pagina --}}
<div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Início</h4> </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
            
            <ol class="breadcrumb">
                <li><a href="#">Vanangas</a></li>
                <li><a href="#">Pedidos de Pacote</a></li>
                <li><a href="#">Meus Pedidos</a></li>
                <li class="active">Cancelados</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    {{-- conteudo --}}
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">Pedidos de Pacotes de Viagem Cancelados</div>
            <div class="table-responsive">
                <table class="table table-hover manage-u-table color-bordered-table muted-bordered-table">
                    <thead>
                        <tr>
                            <th width="70" class="text-center">#</th>
                            <th>Viajantes</th>
                            <th>Ponto de Partida</th>
                            <th>Ponto de Chegada</th>
                            <th>Início</th>
                            <th>Término</th>                            
                            <th width="300">Opçoes</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php  $i=0; ?>
                            @foreach ($pedidos as $pedido)
                             
                                <tr>
                                    <td class="text-center"> <?php echo ++$i; ?> </td>
                                    <td> {{ $pedido->nr_viajantes}} </td>
                                    <td> {{ $pedido->ponto_partida}} </td>
                                    <td> {{ $pedido->ponto_chegada}} </td>
                                    <td>{{ $pedido->data_inicio}} </td>
                                    <td>{{ $pedido->data_fim}} </td>
                                
                                    <td>
                                        <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                        <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                        <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                        
                                    </td>
                                </tr>
                            @endforeach   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /row --> 
@endsection

@section('scripts')
    <script src="{{  asset('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
@endsection