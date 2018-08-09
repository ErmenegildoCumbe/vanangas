@extends('layouts.base')

@section('css')
    
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">MANAGE USERS</div>
            <div class="table-responsive">
                <table class="table table-hover manage-u-table">
                    <thead>
                        <tr>
                            <th width="70" class="text-center">#</th>
                            <th>Ponto de Partida</th>
                            <th>Ponto de Chegada</th>
                            <th>Início</th>
                            <th>Término</th>                            
                            <th width="300">Opçoes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Daniel Kristeen
                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                            <td>Visual Designer
                                <br/><span class="text-muted">Past : teacher</span></td>
                            <td>15 Mar 1988</td>
                            <td>15 Mar 1988</td>
                         
                            <td>
                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Daniel Kristeen
                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                            <td>Visual Designer
                                <br/><span class="text-muted">Past : teacher</span></td>
                            <td>15 Mar 1988</td>
                            <td>15 Mar 1988</td>
                         
                            <td>
                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Daniel Kristeen
                                <br/><span class="text-muted">Texas, Unitedd states</span></td>
                            <td>Visual Designer
                                <br/><span class="text-muted">Past : teacher</span></td>
                            <td>15 Mar 1988</td>
                            <td>15 Mar 1988</td>
                         
                            <td>
                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-key"></i></button>
                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                
                            </td>
                        </tr>
                       
                        
                        
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