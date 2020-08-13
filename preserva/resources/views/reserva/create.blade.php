@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nueva Reserva') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    
                    <form method="POST" action="{{ url('reserva') }}">
                        @csrf

                        <div class="form-group">
                            <label for="username">{{ __('RUT') }}</label>
                            <input id="username" value ="{{ (auth::user()->username) }}" type="text" class="form-control "  readonly=»readonly» name="username"  required autocomplete="username" autofocus>

                            
                        </div>

                        <div class="form-group">
                            <label for="nombre_completo">{{ __('Nombre') }}</label>
                            <input id="nombre_completo" value ="{{ (auth::user()->name) }}{{ (' ') }}{{ (auth::user()->apellido) }}" type="text" class="form-control "  readonly=»readonly» name="nombre_completo"  required autocomplete="nombre_completo" autofocus>

                            
                        </div>
                        <div class="form-group">
                            <label for="nombre_reservante">{{ __('Nombre Reservante') }}</label>
                            <input id="nombre_reservante" class="form-control @error('nombre_reservante') is-invalid @enderror" value ="{{ old('cod_lab') }}" type="text"  name="nombre_reservante"  required autocomplete="nombre_reservante" autofocus>
                            @error('nombre_reservante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="cod_lab">{{ __('Codigo Laboratorio') }}</label>
                        
                            <select name="cod_lab" >
                                @foreach($laboratorios as $laboratorio)
                                    <option value="{{ $laboratorio->Codigo_de_laboratorio  }}">{{ $laboratorio->Codigo_de_laboratorio  }}: Capacidad: {{ $laboratorio->Capacidad }}, Facultad: {{ $laboratorio->Facultad }}, Tipo: {{ $laboratorio->Tipo_laboratorio }}</option>
                                @endforeach
                                
                                </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="fecha">{{ __('fecha') }}</label>
                            <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" value="{{ old('fecha') }}" required autocomplete="fecha" autofocus>

                            @error('fecha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="bloque">{{ __('Bloque') }}</label>
                        
                            <select name="bloque" >
                                    <option value="1">1- 08:30 - 09:30</option>
                                    <option value="2">2- 09:35 - 10:35</option> 
                                    <option value="3">3- 10:50 - 11:50</option> 
                                    <option value="4">4- 11:55 - 12:55</option> 
                                    <option value="5">5- 13:10 - 14:10</option> 
                                    <option value="6">6- 14:30 - 15:30</option> 
                                    <option value="7">7- 15:35 - 16:35</option> 
                                    <option value="8">8- 16:50 - 17:50</option>
                                    <option value="9">9- 17:55 - 18:55</option> 
                                    <option value="10">10- 19:10 - 20:10</option> 
                                    <option value="11">11- 20:15 - 21:15</option>  
                                    <option value="12">12- 21:30 - 22:30</option>  
                                </select>

                        </div>


                        <div class="form-group">
                            <label for="cap_res">{{ __('Capacidad a reservar') }}</label>
                            <input id="cap_res" type="integer" class="form-control @error('cap_res') is-invalid @enderror" name="cap_res" value="{{ old('cap_res') }}" required autocomplete="cap_res" autofocus>

                            @error('cap_res')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reservar') }}
                                </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
