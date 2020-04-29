@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
                <th>Reserva</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha de entrada</th>
                <th>Fecha de salida</th>
                <th>Desayuno</th>
                <th>Mascotas</th>
                <th>Acción</th>
            </tr>
        </thead>
            @foreach($bookings as $booking)
               <tbody></tbody>
                    <tr>
                    <th scope="row">{{$booking->id}}</th>
                    <td>{{$booking->client_name}}</td>
                    <td>{{$booking->client_email}}</td>
                    <td>{{$booking->checkin}}</td>
                    <td>{{$booking->checkout}}</td>
                    <td>{{$booking->breakfast}}</td>
                    <td>{{$booking->pets}}</td>
                    <td>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <a href="{{route('booking.edit', $booking->id)}}" class="btn btn-warning">Editar</a>
                            </div>

                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <form action="{{route('booking.destroy', $booking->id)}}" method="post">
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
