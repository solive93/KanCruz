@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('booking.update', $booking->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card text-white bg-dark mb-3">

                    <div class="card-header">
                        <label>Modifica la reserva</label>
                    </div>

                    <div class="card-body">

                    <div class="form-group">
                            <label>Id</label>
                                <input type="hidden" name="id" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Nombre</label>
                                <input type="text" name="client_name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Apellido</label>
                                <input type="email" name="client_lastname" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Documento</label>
                                <input type="text" name="client_document" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                                <input type="email" name="client_email" class="form-control"/>
                        </div>


                        <div class="form-group">
                            <label>Telefono</label>
                                <input type="phone" name="client_phone" class="form-control" value="{{$booking->client_phone}}"/>
                        </div>

                        <div class="form-group">
                            <label>Fecha de entrada</label>
                                <input type="date" name="checkin" class="form-control" value="{{$booking->checkin}}"/>
                        </div>

                        <div class="form-group">
                            <label>Fecha de salida</label>
                                <input type="date" name="checkout" class="form-control" value="{{$booking->checkout}}"/>
                        </div>

                        <div class="form-group">
                            <label>Desayuno</label>
                                <input type="checkbox" name="breakfast" class="form-control" value="{{$booking->breakfast}}"/>
                        </div>

                        <div class="form-group">
                            <label>Mascotas</label>
                                <input type="checkbox" name="pets" class="form-control" value="{{$booking->pets}}"/>
                        </div>

                    </div>

                    <div class="card-footer">
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                    </div>
                </div>    
            </form>
        </div>
    </div>
@endsection