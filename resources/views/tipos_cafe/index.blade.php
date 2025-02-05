@extends('layouts.app')

@section('title','Tipos de Café')

@section('content')
<section id="tipos-de-cafe" class="my-5 py-5">
    <div class="container">
        <h2 class="text-center text-uppercase" style="color: var(--ocre-dorado);">Tipos de Café</h2>
        <p class="text-center">Descubre nuestros diferentes tipos de café, cada uno con sus propias características y sabor único.</p>

        <div class="row mt-4">
            @foreach ($tiposCafe as $cafe)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title" style="color: var(--cafe-oscuro);">{{ $cafe->nombre }}</h5>
                        <p class="card-text"><strong>Descripción:</strong> {{ $cafe->descripcion }}</p>
                        <p class="card-text"><strong>Regiones:</strong> {{ $cafe->regiones }}</p>
                        <p class="card-text"><strong>Curiosidades:</strong> {{ $cafe->curiosidades }}</p>
                        <p class="card-text"><strong>Precio Aproximado:</strong> {{ $cafe->precio }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection