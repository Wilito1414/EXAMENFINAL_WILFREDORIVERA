@extends('layouts.plantilla')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('REGISTRO DE JUEGOS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('REGISTRO DE NUEVO JUEGO') }}
                    {{ session('status') }}

                    <form action="{{route('guardarjuegos')}}" method="POST">
                        @csrf
                        <label>
                            NOMBRE: <br>
                            <input name="NOMBRE" type="text">
                        </label>
                        <label>
                            EMPRESA: <br>
                            <input name="EMPRESA" type="text">
                        </label>
                        <label>
                            TIPO: <br>
                            <input name="TIPO" type="text">
                        </label>
                        <button type="submit">Guardar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection