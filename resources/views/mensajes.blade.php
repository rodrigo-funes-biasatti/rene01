@extends('layouts.app')

@section('content')
    
    <div class="row justify-content-center pb-2">
        <h2>Mensajes</h2>
    </div>

    <div class="row">
        <div class="col-6 col-sm-12">
            <table class="table">
                    <thead class="bg-success">
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Nombre y Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                            <th scope="col" style="width: 25%">Mensaje</th>
                            <th scope="col" style="width: 10%">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($mensajes as $mens)
                        <tr>
                            <th scope="row">{{$mens->create_at}}</th>
                                <td>{{$mens->nombre_apellido}}</td>
                                <td>{{$mens->email}}</td>
                                <td>{{$mens->telefono}}</td>
                                <td class="font-weight-bold">{{$mens->mensaje}}</td> 
                                <th scope="col">
                                    <div class="row">
                                        <div class="col-5">
                                            <form method="POST" action="{{route("set_viewed", $mens->message_id)}}">@csrf{!!$mens->viewed ? '<button type="submit" data-toggle="tooltip" data-placement="left" title="Leído" class="btn btn-info"><i class="fas fa-eye-slash"></i></button>' : '<button type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="left" title="Marcar como leído" class="btn btn-info"><i class="far fa-eye"></i></button>'!!}</form>
                                        </div>
                                        <div class="col-7">
                                        <form action="{{route("delete_message", $mens->message_id)}}" method="POST">@csrf<button onclick="return confirm('¿Realmente desea borrar el mensaje de {{$mens->nombre_apellido}}?');" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="Borrar"><i class="fas fa-trash-alt"></i></button></form>
                                        </div>
                                    </div>
                                </th>  
                            </tr>                   
                        @endforeach

                    </tbody> 
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{$mensajes->links()}}
    </div>

@endsection