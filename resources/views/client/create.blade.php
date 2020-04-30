@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('client.store')}}" method="POST">
                @csrf
                
                <div class="card text-white bg-dark mb-3">

                    <div class="card-header">
                        <label>Crea un nuevo cliente</label>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <label>Id</label>
                                <input type="hidden" name="id" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Nombre</label>
                                <input type="text" name="name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>DNI/NIF</label>
                                <input type="text" name="dni" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                                <input type="email" name="email" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Telefono</label>
                                <input type="phone" name="phone" class="form-control"/>
                        </div>
                        
                        
                        <!--
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <label>Mascotas</label>
                                <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input" name="pets">
                               
                                </div>
                            </div>
                            <input type="number" class="form-control" aria-label="Text input with checkbox" name="pets_number">
                        </div>
                        -->
                    </div>

                    <div class="card-footer">
                        <input type="submit" value="Crear" class="btn btn-primary">
                    </div>
                </div>    
            </form>
        </div>
    </div>
@endsection
