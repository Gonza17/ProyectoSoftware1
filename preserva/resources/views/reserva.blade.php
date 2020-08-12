@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-header">{{ __('Tus Reservas') }}</div>
                
                <div class="card-body">
                
                    
                    @foreach($reservas as $reserva)

                            <div class="card mt-2">
                                <div class="card-header">
                                    <h2>Id: {{ $reserva->id }}</h2>
                                    <h4>Rut: {{ $reserva->username }}</h4>
                                    <h4>Reservado por: {{ $reserva->nombre_completo }}</h4>
                                    <h4>Solicitado por: {{ $reserva->nombre_reservante }}</h4>
                                    <h4>Codigo Laboratorio: {{ $reserva->cod_lab }}</h4>
                                    <h4>Fecha: {{ $reserva->fecha }}</h4>
                                    <h4>Bloque: {{ $reserva->bloque }}</h4>
                                    <h4>Capacidad: {{ $reserva->cap_res }}</h4>
                                    
                                    <form action = "{{ url('/reserva/'.$reserva->id.'/edit') }}">
                                        <button class="button button2 " type = "submit" >Editar reserva <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                        </svg> </button>
                                        
                                    </form>
                                    @if((auth::user()->tipo_usuario)==3)
                                        <form method ='POST' action = "{{ url('/reserva/'.$reserva->id) }}">
                                        @method('DELETE')
                                        @csrf
                                        <form method ='POST' action = "{{ url('/reserva/'.$reserva->id) }}">
                                            <button class="button button3" type = "submit" onclick="return confirm('Confirmar borrado')">Borrar reserva <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                            </svg></button>
                                        </form>
                                    @endif

                                </div>
                            </div>
                        
                    @endforeach
                    {{ $reservas->links() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection