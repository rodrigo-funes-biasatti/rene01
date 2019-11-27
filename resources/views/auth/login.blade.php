@extends('layouts.app')

@section('content')

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

@endsection
