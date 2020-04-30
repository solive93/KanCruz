@extends('layouts.app')

@section('content')
<div class="container">           

     <ul class="list-group">
            <li class="list-group-item">Id: {{$client->id}}</li>
            <li class="list-group-item">Nombre: {{$client->name}}</li> 
            <li class="list-group-item">Documento: {{$client->dni}}</li>  
            <li class="list-group-item">Email: {{$client->email}}</li> 
            <li class="list-group-item">Telefono: {{$client->phone}}</li> 
        </ul>
</div>
@endsection
