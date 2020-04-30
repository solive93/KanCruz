@extends('layouts.app')

@section('content')

    <div class="text-center mt-3 mb-4 container">
        @if (session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{session()->get('success')}} 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{route('client.create')}}" class="btn btn-primary">Añade un nuevo cliente</a>
    </div>


    <div class="col-8 m-auto">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo electronico</th>
                    <th>Telefono</th>
                    <th>DNI</th>
                    <th>Acción</th>
                </tr>
            </thead>
                @foreach($clients as $client)
                <tbody>
                        <tr>
                            <th scope="row">{{$client->id}}</th>
                            <td>{{$client->name}}</td>
                            <td>{{$client->email}}</td>
                            <td>{{$client->phone}}</td>
                            <td>{{$client->dni}}</td>
                            <td>
                        
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                            <a href="{{route('client.show', $client->id)}}" class="btn btn-secondary">Detalles</a>
                                    </div>
                                        
                                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                                        <a href="{{route('client.edit', $client->id)}}" class="btn btn-warning">Editar</a>
                                    </div>

                                    <div class="btn-group mr-2" role="group" aria-label="Third group">
                                        <form action="{{route('client.destroy', $client->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Borrar" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
        </table>
    </div>
@endsection
