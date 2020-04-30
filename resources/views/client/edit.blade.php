@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('client.update', $client->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card text-white bg-dark mb-3">

                <div class="card-header">
                        <label>Modifica los datos del cliente</label>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <label>Id</label>
                                <input type="hidden" name="id" class="form-control" value="{{$client->id}}"/>
                        </div>

                        <div class="form-group">
                            <label>Nombre</label>
                                <input type="text" name="name" class="form-control" value="{{$client->name}}"/>
                        </div>

                        <div class="form-group">
                            <label>DNI/NIF</label>
                                <input type="email" name="dni" class="form-control" value="{{$client->dni}}"/>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{$client->email}}"/>
                        </div>

                        <div class="form-group">
                            <label>Telefono</label>
                                <input type="phone" name="phone" class="form-control" value="{{$client->phone}}"/>
                        </div>

                    <div class="card-footer">
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                    </div>
                </div>    
            </form>
        </div>
    </div>
@endsection