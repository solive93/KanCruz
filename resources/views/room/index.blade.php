@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Tus habitaciones</h1><hr>
                
            </div>
            <table cladd="table table-triped">
                <thead>
                    <tr>
                        <td><h3>Habitaciones</h3></td>
                        <td><h3>Descripción</h3></td>
                        <td><h3>Servicios</h3></td>
                        <td><h3>Precio</h3></td>
                        <td><h3>Disponibilidad</h3></td>
                        <td colspan="3"><h3>Acciones</h3></td>
                    </tr>
                </thead>

                @foreach($rooms as $room)
                <tr>
                    <td><?php echo $room->name;?></td>  
                    <td><?php echo $room->description;?></td>  
                    <td><?php echo $room->services;?></td>  
                    <td><?php echo $room->price;?></td>  
                    <td>
                        @if ($room->available==1)
                            {{'Disponible'}}
                        @endif
                        @if ($room->available==0)
                            {{'No Disponible'}}
                        @endif
                    </td>  
                    <td>
                        <a style="color:white" href="{{Route('room.edit',$room->id)}}" class="btn btn-info" role="button">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('room.destroy', $room->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input 
                                type="submit" 
                                value="Eliminar" 
                                class="btn btn-danger"
                                onclick="return confirm ('¿Estás seguro de eliminarlo?')">
                        </form>
                    </td> 
                </tr>
                @endforeach
            </table>
            <div class="card-footer">
                <a href="{{Route('room.create')}}" class="btn btn-secondary">Añadir nueva habitación</a>
            </div>
        </div>
    </div>
@endsection
