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
                <li><a href="#">Passagens</a></li>                
                <li class="active">Requisiçoes</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>
    {{-- conteudo --}}
    <div class="row" style="margin: auto;">
        <button type="button" class="btn btn-primary" data-toggle="modal" 
            data-target="#addpassenger" data-whatever="@mdo">Adicionar Viajante
        </button>
        <div class="modal fade bs-example-modal-lg" id="addpassenger" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel1">Inserçao de Passageiro</h4> 
                        </div>
                        <div class="modal-body col-md-offset-1 col-sm-offset-1">
                                <form action="#" class="form-material form-horizontal">
                                        {{ csrf_field() }}
                                    <div class="form-body">
                                        <h3 class="box-title">Informaçao sobre o Passageiro</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nome</label>                                                                            
                                                    <input type="text" class="form-control" placeholder="">  
                                                   
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Apelido</label>                                                                            
                                                    <input type="text" class="form-control" placeholder="">  
                                                   
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label class="control-label">Forma de Tratamento</label>
                                                            <select class="form-control">                                                                                           
                                                                    <option>Sr.</option>
                                                                    <option>Sra.</option>
                                                                    <option>Excia.</option>                                                                                            
                                                            </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label">Data Nascimento</label>                                                                               
                                                            <input type="text" class="form-control" placeholder="dd/mm/aaaa">
                                                       
                                                    </div>
                                                </div>
                                                <!--/span-->
                                        </div>                                                    
                                        <!--/row-->
                                        <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label class="control-label">Sexo</label>                                                                                        
                                                                <select class="form-control">                                                                                           
                                                                        <option>Masculino</option>
                                                                        <option>Feminino</option>                                                                                                                                                                                           
                                                                </select>
                                                            </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Tipo de Passageiro</label>
                                                            <select class="form-control">                                                                                           
                                                                    <option>Adulto (> 12)</option>
                                                                    <option>Criança (> 2)</option>
                                                                    <option>Bébé (< 2)</option>                                                                                                                                                                                           
                                                            </select>
                                                        </div>
                                                </div>                                                                   

                                        </div>
                                        
                                        <!--/row-->
                                    </div>                                                            
                                </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
        </div>
</div>
{{--tabela de passageiros --}}
<div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">GERIR PASSAGEIROS</div>
                <div class="table-responsive">
                    <table class="table table-hover manage-u-table">
                        <thead>
                            <tr>
                                <th width="70" class="text-center">#</th>
                                <th>NOME</th>
                                <th>SEXO</th>
                                <th>TIPO</th>
                                <th>DATA DE NASCIMENTO</th>                                                        
                                <th>MANAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Daniel Kristeen
                                    <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                <td>Feminino</td>
                                <td>daniel@website.com
                                    <br/><span class="text-muted">999 - 444 - 555</span></td>
                                <td>15 Mar 1988
                                    <br/><span class="text-muted">10: 55 AM</span></td>
                             
                                <td>                                                            
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>Daniel Kristeen
                                    <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                <td>Feminino</td>
                                <td>daniel@website.com
                                    <br/><span class="text-muted">999 - 444 - 555</span></td>
                                <td>15 Mar 1988
                                    <br/><span class="text-muted">10: 55 AM</span></td>
                             
                                <td>                                                            
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Daniel Kristeen
                                    <br/><span class="text-muted">Texas, Unitedd states</span></td>
                                <td>Masculino </td>
                                <td>daniel@website.com
                                    <br/><span class="text-muted">999 - 444 - 555</span></td>
                                <td>15 Mar 1988
                                    <br/><span class="text-muted">10: 55 AM</span></td>
                                
                                <td>                                                            
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-trash"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i class="ti-pencil-alt"></i></button>
                                    <button type="button" class="btn btn-info btn-outline btn-circle btn-lg m-r-20"><i class="ti-upload"></i></button>
                                </td>
                            </tr>                        
                                                                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
{{-- /tabela de passageiros --}} 
@endsection

@section('scripts')
    <script src="{{  asset('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
@endsection