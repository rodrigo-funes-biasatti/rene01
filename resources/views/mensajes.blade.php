@extends('layouts.app')

@section('content')
    
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
                            <th scope="col" style="width: 11.7%">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($mensajes as $mens)
                        <tr>
                            <th scope="row">{{$mens->created_at}}</th>
                                <td>{{$mens->nombre_apellido}}</td>
                                <td>{{$mens->email}}</td>
                                <td>{{$mens->telefono}}</td>
                                <td>{{$mens->mensaje}}</td> 
                                <th scope="col">
                                    <div class="row">
                                        <div class="col-4">
                                            <form method="POST" action="{{route("set_viewed", $mens->message_id)}}">@csrf{!!$mens->viewed ? '<button class="btn btn-info"><i class="fas fa-eye-slash"></i></button>' : '<button class="btn btn-info"><i class="far fa-eye"></i></button>'!!}</form>
                                        </div>
                                        <div class="col-8">
                                        <form action="{{route("delete_message", $mens->message_id)}}" method="POST">@csrf<button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></form>
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