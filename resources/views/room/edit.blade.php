@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Habitacion {{$room->name}}</h1><hr> 
            </div>
            <div class="card-body">
                <form action="{{Route('room.update',$room->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Habitacion </label> 
                        <input type="text" name="name" class="form-control" value="{{$room->name}}">
                    </div>  
                    <div class="form-group">
                        <label for="name">Descripción</label>
                        <input type="text" name="description" class="form-control" value="{{$room->description}}"/>
                    </div>  
                    <div class="form-group">
                        <label for="name">Servicios</label>
                        <input type="text" name="services" class="form-control" value="{{$room->services}}" />
                    </div>  
                    <div class="form-group">
                        <label for="name">Precio</label>
                        <input type="text" name="price" class="form-control" value="{{$room->price}}"/>
                    </div>  
                    <div class="form-group">
                        <label for="name">Disponible</label>
                        <input type="checkbox" name="available" class="form-control" value='1'/>
                    </div>  
                    <div class="form-group">
                        <label for="name">No Disponible</label>
                        <input type="checkbox" name="available" class="form-control" value='0'/>
                    </div>  
                    <input type="submit" value="Actualizar" class="btn btn-primary">  
                </form>
            </div>
            <div class="card-footer">
                <a href="{{Route('room.index')}}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
@endsection