@extends('layouts.plantilla')

@section('content')
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <b><div class="card-header">{{ __('CONSULTA DE TODOS LOS JUEGOS') }}</div></b>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table col-12">
                        <thread>
                            
                                <tr>
                                    
                                    <td><b>NOMBRE</b></td>
                                    <td><b>EMPRESA</b></td>
                                    <td><b>TIPO</b></td>
                                    <td><b>ACCION</b></td>
                                    
                                </tr>
                            
                    </thread>
                        <tbody>
                            @foreach($juegos as $juegos)
                            
                            <tr>
                                <td>{{$juegos->NOMBRE}}</td>
                                <td>{{$juegos->EMPRESA}}</td>
                                <td>{{$juegos->TIPO}}</td>
                                <td>
                                <a href="{{route('eliminarjuego',$juegos->id)}}" class="btn btn-danger">Borrar</a>  
                                </td>
                                <td>
                                <a href="{{route('muestrajuego',$juegos->id)}}" class="btn btn-warning">Editar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection