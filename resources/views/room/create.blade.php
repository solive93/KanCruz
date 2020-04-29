@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Crear Habitación</h1><hr> 
            </div>
            <div class="card-body">
                <form action="{{Route('room.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" class="form-control"/>
                    </div>  
                    <div class="form-group">
                        <label for="name">Descripción</label>
                        <input type="text" name="description" class="form-control"/>
                    </div>  
                    <div class="form-group">
                        <label for="name">Servicios</label>
                        <input type="text" name="services" class="form-control"/>
                    </div>  
                    <div class="form-group">
                        <label for="name">Precio</label>
                        <input type="text" name="price" class="form-control"/>
                    </div>  
                    <div class="form-group">
                        <label for="name">Disponible</label>
                        <input type="checkbox" name="available" class="form-control" value='1'/>
                    </div>  
                    <input type="submit" value="Add" class="btn btn-primary">  
                </form>
            </div>
            <div class="card-footer">
                <a href="{{Route('room.index')}}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection