@extends('layouts.app')

@section('content')

    @if(session()->has('mensaje_creado'))
  

    <div class="row justify-content-center fondo-principal" style="position:relative;">
        <div class="alert alert-success animated bounceInLeft m_enviado mt-3" role="alert">
            <strong>Enviado:</strong> {!! session('mensaje_creado') !!}
            <button type="button" class="ml-2 close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    @endif

    @error('email')
    <div class="row justify-content-center fondo-principal" style="position:relative;">
        <div class="alert alert-danger animated bounceInLeft m_enviado mt-3" role="alert">
            <strong>Error en Login:</strong> {!! $errors->first('email') !!}
            <button type="button" class="ml-2 close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    @enderror

    @error('password')
    <div class="row justify-content-center fondo-principal" style="position:relative;">
        <div class="alert alert-danger animated bounceInLeft m_enviado mt-3" role="alert">
            <strong>Error en Login:</strong> {!! $errors->first('password'); !!}
            <button type="button" class="ml-2 close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @enderror

    <div class="fondo-principal">
        <!-- Carrusel -->
        <div class="container contenedor pt-3 pb-3">
            <div class="row justify-content-center">
                <div class="col-12 mt-3 mb-3 text-center">
                    <h1 class="titulo"><strong>Increíbles paisajes</strong></h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 mb-3">
                    <div class="carousel slide carousel-fade" id="principal-carousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#principal-carousel" data-slid-to="0" class="active"></li>
                            <li data-target="#principal-carousel" data-slid-to="1"></li>
                            <li data-target="#principal-carousel" data-slid-to="2"></li>
                        </ol>
        
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-caption d-block">
                                    <h4>Estancia de primera</h4>
                                </div>
                            <img src="{{url('img/Carrusel/carrusel1.jpg')}}" class="w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-caption d-block">
                                    <h4>Paisajes alucinantes</h4>
                                </div>
                                <img src="{{url('img/Carrusel/carrusel2.jpg')}}" class="w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-caption d-block">
                                    <h4>Ideal para descansar</h4>
                                </div>
                                <img src="{{url('img/Carrusel/carrusel3.jpg')}}" class="w-100" alt="">
                            </div>
                        </div>
        
                        <a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>

                        <a href="#principal-carousel" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Actividades -->
        <div class="container contenedor pb-3" id="actividades">
            <hr class="">
            <div class="row justify-items-center py-3">
                <div class="col-12 text-center">
                <h2 class="titulo-consulta"><strong>Nuestras actividades</strong></h2>
            </div>
            </div>
            <div class="row mt-3">
                <div class="col-5">
                    <div class="list-group" id="lista" role="tablist">
                        <a class="list-group-item list-group-item-action active btn-success" data-toggle="list" href="#actividad1" role="tab" aria-controls="elemento1"><i class="fas fa-hiking"></i> Traking</a>
                        <a class="list-group-item list-group-item-action btn-success" data-toggle="list" href="#actividad2" role="tab" aria-controls="elemento2"><i class="fas fa-horse"></i> Cabalgatas</a>
                        <a class="list-group-item list-group-item-action btn-success" data-toggle="list" href="#actividad3" role="tab" aria-controls="elemento3"><i class="fas fa-fish"></i> Pesca</a>
                        <a class="list-group-item list-group-item-action btn-success" data-toggle="list" href="#actividad4" role="tab" aria-controls="elemento4"><i class="fas fa-mountain"></i> Relax</a>
                    </div>
                </div>
                <div class="col-7">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="actividad1" role="tabpanel" aria-labelledby="actividad1">
                            <h3>Traking</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, quasi?</p>
                            <div class="d-flex justify-content-end align-items-end"><a href="#consulta" role="button" class="btn btn-success">Consultar</a></div>
                        </div>
    
                        <div class="tab-pane fade show" id="actividad2" role="tabpanel" aria-labelledby="actividad2">
                            <h3>Cabalgatas</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam aliquam molestiae expedita tenetur consequuntur facere nulla? Tempora molestiae illum sapiente. </p>
                            <div class="d-flex justify-content-end align-items-end"><a href="#consulta" role="button" class="btn btn-success">Consultar</a></div>
                        </div>
    
                        <div class="tab-pane fade show" id="actividad3" role="tabpanel" aria-labelledby="actividad3">
                            <h3>Pesca</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            <div class="d-flex justify-content-end align-items-end"><a href="#consulta" role="button" class="btn btn-success">Consultar</a></div>
                        </div>
    
                        <div class="tab-pane fade show" id="actividad4" role="tabpanel" aria-labelledby="actividad4">
                            <h3>Relax</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique at laborum, impedit rerum suscipit necessitatibus voluptatum!</p>
                            <div class="d-flex justify-content-end align-items-end"><a href="#consulta" role="button" class="btn btn-success">Consultar</a></div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

        <!-- Consulta -->
        <div class="container pb-3" id="consulta">
            <hr>
            <div class="row justify-content-center align-items-center py-3">
                <div class="col-md-6 col-12 pb-3">
                <h2 class="titulo-consulta"><strong>Realizá una consulta de lo que necesites!</strong></h2>
            </div>
                <div class="col-12 col-md-6">
                    <div class="card card-consulta">
                        <div class="card-header text-center">
                            <h3>Datos a completar</h1>
                        </div>
                        <div class="card-body">
                        <form action="{{route('mensaje.nuevo')}}" method="POST">
                            @csrf
                            {!!@method_field('POST')!!}
                                <div class="form-group">
                                    <label for="nombre">Nombre y Apellido</label>
                                    <input class="form-control form-control-sm" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                                </div>
                                
                                <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input class="form-control form-control-sm" type="email" id="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                        <label for="telefono">Teléfono</label>
                                        <input class="form-control form-control-sm" type="number" id="telefono" name="telefono" placeholder="Teléfono" required>
                                </div>

                                <div class="form-group">
                                        <label for="consulta">Consulta</label>
                                        <textarea class="form-control form-control-sm" type="text-area" id="consulta" name="consulta" placeholder="Consulta..." required></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-success" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <hr>
        </div>
        
        <!-- Contacto -->
        <div class="container" id="contacto">
            <div class="row align-items-center">
                <div class="col-12 col-md-8">
                    <h2 class="titulo-consu">Contacto</h2>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card accent-success border-success">
                        <div class="card-header text-center bg-success">
                             <p><img src="{{url('img/Presentacion/pres.jpg')}}" alt="card image" class="img-fluid rounded-circle" style="height:50%; width:50%;"></p>
                        </div>
                        <div class="card-body text-center">
                        
                        <h4 class="card-title">Rodrigo Funes Biasatti</h4>
                        <p class="card-text">Desarrollador</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="" class="social-icon text xs center">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="social-icon text xs center">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="" class="social-icon text xs center">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <hr>
        </div>
        
        <div class="container pt-1 pb-3" id="galeria">
            <div class="row text-center mt-3">
                <div class="col-12">
                    <h3 class="titulo"><strong>Galería de fotos</strong></h3>
                </div>
            </div>
        <!-- Galería -->
        <div class="row">
            <div class="col-12 col-md-4 mt-2">
                <div class="card shadow">
                    <img class="card-img-top" src="{{url('img/Galeria/galeria1.jpg')}}" alt="">
                    <div class="card-body text-white pie-pagina">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-text mt-3">Lorem ipsum dolor sit.</p>
                            <button class="btn btn-light" data-toggle="modal" data-target="#modal-galeria1"> Ver foto</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-galeria1" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="w-100 h-100" src="{{url('img/Galeria/galeria1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-2">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{url('img/Galeria/galeria2.jpg')}}" alt="">
                        <div class="card-body text-white pie-pagina">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text mt-3">Lorem ipsum dolor sit.</p>
                                <button class="btn btn-light" data-toggle="modal" data-target="#modal-galeria2"> Ver foto</button>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="modal fade" id="modal-galeria2" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="w-100 h-100" src="{{url('img/Galeria/galeria2.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-2">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{url('img/Galeria/galeria3.jpg')}}" alt="">
                        <div class="card-body text-white pie-pagina">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text mt-3">Lorem ipsum dolor sit.</p>
                                <button class="btn btn-light" data-toggle="modal" data-target="#modal-galeria3"> Ver foto</button>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="modal fade" id="modal-galeria3" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="w-100 h-100" src="{{url('img/Galeria/galeria3.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-2">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{url('img/Galeria/galeria4.jpg')}}" alt="">
                        <div class="card-body text-white pie-pagina">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text mt-3">Lorem ipsum dolor sit.</p>
                                <button class="btn btn-light" data-toggle="modal" data-target="#modal-galeria4"> Ver foto</button>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="modal fade" id="modal-galeria4" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <img class="w-100 h-100" src="{{url('img/Galeria/galeria4.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @auth
                <div class="col-12 col-md-4 mt-2 d-flex justify-content-center align-items-center">
                    <p><a href="" data-toggle="modal" data-target="#modal-newfoto" class="btn btn-info"><i class="fas fa-plus"></i></a></p>
                        <div class="modal fade" id="modal-newfoto" role="dialog" tabindex="-1">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content modal-newfoto">

                                <div class="modal-header">
                                    <h5 class="modal-title">Nueva Foto</h5>
                                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                                </div>

                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center">
                                            <form action="" method="POST">
                                                @csrf
                                                {!! @method_field("POST")!!}
                                                <div class="form-group">
                                                    <label for="foto">Foto</label>
                                                    <input class="form-control input-foto" type="file" name="foto" id="foto">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <label for="descripcion">Descripción</label>
                                                    <input class="form-control" type="text" id="descripcion" name="descripcion">
                                                </div>

                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-success text-right" type="submit">Subir</button>
                                                </div>

                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth
            </div>      
        </div>
    </div>
@endsection