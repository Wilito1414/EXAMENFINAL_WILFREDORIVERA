@extends('layouts.plantilla')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDITAR JUEGO') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ingrese Nuevos Datos') }}
                    {{ session('status') }}

                    <form action="{{route('editarjuego', $juegos->id)}}" method="POST">
                        @csrf
                       
                        <label>
                        NOMBRE: <br>
                            <input name="NOMBRE" type="text" value="{{$juegos->NOMBRE}}">
                        </label>
                        <label>
                        EMPRESA: <br>
                            <input name="EMPRESA" type="text" value="{{$juegos->EMPRESA}}">
                        </label>
                        <label>
                        TIPO: <br>
                            <input name="TIPO" type="text" value="{{$juegos->TIPO}}">
                        </label>
                        <button type="submit">Guardar Cambios</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection