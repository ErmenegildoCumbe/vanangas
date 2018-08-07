@extends('layouts.base')
@section('css')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link href="{{ asset('bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/gallery/css/animated-masonry-gallery.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/fancybox/ekko-lightbox.min.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="col-lg-12  col-sm-12 col-xs-12">
    <div class="white-box">
        <h3 class="box-title">Detalhes do Pacote</h3>
        <p class="text-muted m-b-30"> Veja todos detalhes deste pacote</p>
        <div class="vtabs">
            <ul class="nav tabs-vertical">
                <li class="tab active">
                    <a data-toggle="tab" href="#home3" aria-expanded="true"> <span class="visible-xs"><i class="material-icons">
                            bookmark
                            </i></span> <span class="hidden-xs">Principal</span> </a>
                </li>
                {{--  <li class="tab">
                    <a data-toggle="tab" href="#profile3" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Imagens</span> </a>
                </li>  --}}
                <li class="tab">
                    <a aria-expanded="false" data-toggle="tab" href="#messages3"> <span class="visible-xs"><i class="material-icons">
                            chat
                            </i></span> <span class="hidden-xs">Comentários</span> </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="home3" class="tab-pane active">
                    <div class="col-md-6">
                        <h3>Nome Pacote</h3>
                        <h4>Provincia</h4>
                        <small class="text-success">  <i class="material-icons">
                                location_on
                                </i> Exemplo de provincia Provincia
                            </small>
                            <small class="text-muted db"> <b>Data:</b> 2018-07-20</small>
                            <small class="text-muted db"><b>Validade:</b> 2018-10-20</small>
                            <div class="center" style="">
                                    <a class="btn btn-rounded btn-info btn-block p-10">Requisitar Pacote</a>
                            </div>
                    </div>
                    <div class="col-md-5 pull-right">
                            <h3>Descriçao Pacote</h3>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                {{--  <div id="profile3" class="tab-pane">
                    <div class="col-md-12">
                        <h3>Imagens do Local</h3>
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                     
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                    </div>
                       
                </div>  --}}
                <div id="messages3" class="tab-pane">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="white-box">
                                    <h3 class="box-title">Comentários Recentes Comentários Recentes</h3>
                                    <div class="comment-center p-t-10">
                                        <div class="comment-body">
                                            <div class="user-img"> <img src="{{ asset('images/template/users/pawandeep.jpg') }}" alt="user" class="img-circle"></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5><span class="time">10:20 AM   20  may 2016</span> <span class="label label-rouded label-info">PENDING</span>
                                                <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> <a href="javacript:void(0)" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Approve</a><a href="javacript:void(0)" class="btn-rounded btn btn-default btn-outline"><i class="ti-close text-danger m-r-5"></i> Reject</a> </div>
                                        </div>
                                        <div class="comment-body">
                                            <div class="user-img"> <img src="{{ asset('images/template/users/sonu.jpg') }}" alt="user" class="img-circle"> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5><span class="time">10:20 AM   20  may 2016</span> <span class="label label-rouded label-success">APPROVED</span>
                                                <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> </div>
                                        </div>
                                        <div class="comment-body b-none">
                                            <div class="user-img"> <img src="{{ asset('images/template/users/arijit.jpg') }}" alt="user" class="img-circle"> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit singh</h5><span class="time">10:20 AM   20  may 2016</span> <span class="label label-rouded label-danger">REJECTED</span>
                                                <br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> </div>
                                        </div>
                                    </div>
                                </div>
                                
                                    <div class="row">
                                            <div class="col-xs-8">
                                                <textarea placeholder="Introduza a tua mensagem aqui" class="chat-box-input"></textarea>
                                            </div>
                                            <div class="col-xs-4 text-right">
                                                <button class="btn btn-success btn-circle btn-lg" type="button"><i class="material-icons">
                                                        send
                                                        </i></button>
                                            </div>
                                    </div>
                                
                                <div class="center">
                                        <a class="btn btn-rounded btn-default btn-block p-10">Comentários anteriores</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>  

<!-- /.row -->
<div  class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Galeria do Local</h3>
            <div id="gallery">
               
                <div id="gallery-content">
                    <div id="gallery-content-center">
                        <a href="{{ asset('images/template/heading-bg/slide3.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('images/template/heading-bg/slide3.jpg') }}" alt="gallery" class="all studio" /> </a>
                        <a href="{{ asset('images/template/heading-bg/slide4.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('images/template/heading-bg/slide4.jpg') }}" class="all landscape" alt="gallery" /> </a>
                        <a href="{{ asset('images/template/heading-bg/slide6.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('images/template/heading-bg/slide6.jpg') }}" class="all studio" alt="gallery" /> </a>
                        <a href="{{ asset('images/template/heading-bg/slide1.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('images/template/heading-bg/slide1.jpg') }}" class="all studio" alt="gallery" /> </a>
                        <a href="{{ asset('images/template/heading-bg/slide3.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('images/template/heading-bg/slide3.jpg') }}" class="all landscape" alt="gallery" /></a>
                        <a href="{{ asset('images/template/heading-bg/slide3.jpg') }}" data-toggle="lightbox" data-gallery="multiimages" data-title="Image title will be apear here"><img src="{{ asset('images/template/heading-bg/slide3.jpg') }}" class="all studio" alt="gallery" /> </a>
                       
                            
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{  asset('bower_components/gallery/js/animated-masonry-gallery.js') }}"></script>
    <script src="{{  asset('bower_components/gallery/js/jquery.isotope.min.js') }}"></script>
    <script src="{{  asset('bower_components/fancybox/ekko-lightbox.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function($) {
            // delegate calls to data-toggle="lightbox"
            $(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
                event.preventDefault();
                return $(this).ekkoLightbox({
                    onShown: function() {
                        if (window.console) {
                            return console.log('Checking our the events huh?');
                        }
                    },
                    onNavigate: function(direction, itemIndex) {
                        if (window.console) {
                            return console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
                        }
                    }
                });
            });
            //Programatically call
            $('#open-image').click(function(e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });
            $('#open-youtube').click(function(e) {
                e.preventDefault();
                $(this).ekkoLightbox();
            });
            // navigateTo
            $(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
                event.preventDefault();
                var lb;
                return $(this).ekkoLightbox({
                    onShown: function() {
                        lb = this;
                        $(lb.modal_content).on('click', '.modal-footer a', function(e) {
                            e.preventDefault();
                            lb.navigateTo(2);
                        });
                    }
                });
            });
        });
        </script>
        <script src="{{  asset('bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
@endsection