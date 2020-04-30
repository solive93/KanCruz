@extends('layouts.app')

@section('content')
<div class="container">           

     <ul class="list-group">
            <li class="list-group-item">Numero de reserva: {{$booking->id}}</li>
            <li class="list-group-item">Nombre: {{$booking->client_name}}</li> 
            <li class="list-group-item">Apellidos: {{$booking->client_lastname}}</li>
            <li class="list-group-item">Documento: {{$booking->client_dni}}</li>  
            <li class="list-group-item">Email: {{$booking->client_email}}</li> 
            <li class="list-group-item">Telefono: {{$booking->client_phone}}</li> 
            <li class="list-group-item">Fecha de entrada: {{$booking->checkin}}</li> 
            <li class="list-group-item">Fecha de salida: {{$booking->checkout}}</li> 
            <li class="list-group-item">Numero de huespedes:</li>
            <li class="list-group-item">Desayuno: {{$booking->breakfast}}</li> 
            <li class="list-group-item">Mascotas: {{$booking->pets}}</li> 
        </ul>
</div>
@endsection
