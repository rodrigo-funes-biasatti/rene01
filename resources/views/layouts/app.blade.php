<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <!--FUENTES-->
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <!--FONT AWESOME-->
        <script src="https://kit.fontawesome.com/455fb26efc.js"></script>
        
        <!-- Styles -->
        <style>
            
            #m_enviado {
                animation-duration: 3s;
                animation-delay: 2s;
                animation-iteration-count: infinite;
            }

            .contenedor{
                
            }

            .titulo{
                color: #000000;
                font-family: 'Raleway', cursive;

            }

            .titulo-consulta{
                color: #000000;
                font-family: 'Raleway', cursive;
            }


            .navegacion{
                background-color: rgba(0, 0, 0, 0.59);
            }

            .navegacion a:hover{
                background-color: #343720;
            }

            .navegacion a{
                color: #fff;
            }

            .fondo-cabecera{
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-image: url({{url('img/fondo.jpg')}});
            }

            .fondo-principal{
                background-color: gainsboro;
            }

            .modal-administracion{
                background-color: gainsboro !important;
            }

            .modal-newfoto{
                background-color: gainsboro !important;
            }

            .input-foto{
                background-color: gainsboro !important;
                border:none;
            }

            .pie-pagina{
                background-color: darkslategrey;
                color: #FFF;
            }

            .modal-content{
                background-color: darkslategrey;
            }

            .pie-pagina a{
                color: inherit;
            }

            .card-consulta{
                background-color: gainsboro;
            }

            .modal-contenedor{
                margin:0 auto;
            }

            html {
                position: relative;
                min-height: 100%;
            }
            
            body{
                background-color: gainsboro;
                width: 100%;
                margin-bottom: 50px;
            }

            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                /* Set the fixed height of the footer here */
                background-color: #f5f5f5;
            }

            .texto-principal{
                text-shadow: 2px 2px 1px rgba(0, 0, 0, 1);
            }
        </style>
    
    </head>
<body>
    <div class="fondo-cabecera justify-content-center">
        @if (\Request::is('mensajes'))
        <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark navegacion">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="navbar-toggler-icon icono-menu-s"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                    <a href="{{route('home')}}" class="nav-link">Inicio </a>
                        @guest
                        <a href="" class="nav-link ml-auto" data-toggle="modal" data-target="#modal-administracion">Administración</a>
                        @else
                        <a href="{{route('mensajes')}}" class="nav-link" style="color: yellow;">Mensajes</a>
                        <a class="nav-link ml-auto" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         {{Auth::user()->name}}: Logout
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endguest
                    </div>
                </nav>
            </div>
        @else
        <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark navegacion">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="navbar-toggler-icon icono-menu-s"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                    <a href="{{route('home')}}" class="nav-link">Inicio </a>
                        <a href="#actividades" class="nav-link">Actividades</a>                     
                        <a href="#contacto" class="nav-link">Contacto</a>
                        <a href="#galeria" class="nav-link">Galería</a>
                        @guest
                        <a href="" class="nav-link ml-auto" data-toggle="modal" data-target="#modal-administracion">Administración</a>
                        @else
                        <a href="{{route('mensajes')}}" class="nav-link" style="color: yellow;">Mensajes</a>
                        <a class="nav-link ml-auto" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         {{Auth::user()->name}}: Logout
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endguest
                    </div>
                </nav>
            </div>
            @endif
    <div class="container">       
        <div class="row text-center texto-principal">
            <div class="col-12 col-sm-12 mt-5 mb-2">
                <h2 class="text-white">Bienvenido a la web de Maria Juana!!!</h2>
            </div>
            <div class="col-12 mb-5">
                <p class="text-white texto-principal">Contacto con la naturaleza, un lugar enclavado en la Patagonia Argentina, rodeada de cerros, arroyos y cuenta con un bosque de araucarias milenarias, lengas y ñires, un rincón único en el mundo!!!</p>
            </div>
        </div>
    </div>
</div>

<!-- Adminstración -->
<div class="container fondo-principal">
    <div class="modal fade" id="modal-administracion" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content modal-administracion">
                <div class="modal-header">
                    <h5 class="modal-title">Iniciar sesión</h5>
                    <button class="close" data-dismiss="modal" aria-label="cerrar"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-6">
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label for="email">Nombre de usuario</label>
                                        <input class="form-control" type="text" id="email" name="email" placeholder="Nombre de usuario" required>
                                    </div>
                                    <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input class="form-control" type="password" id="password" name="password" placeholder="Contraseña" required>
                                    </div>

                                    <div class="form-group">
                                            <button class="btn btn-success" type="submit">Ingresar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container fondo-principal pt-3">
        @yield('content')
</div>

    <footer class="footer">
        <div class="d-flex py-3 justify-content-around pie-pagina">
            <div><i class="fab fa-facebook text-primary"></i> <a class="link-unstyled" href="">Facebook</a></div>
            <div><i class="fab fa-whatsapp text-success "></i> +549 2942-000000</div>
            <div><i class="fab fa-instagram text-danger"></i> <a class="link-unstyled" href="">Instagram</a></div>       
        </div>
    </footer>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</html>
