@extends('layouts.app')

@section('title', 'Inicio - Café en Grano')

@section('content')
<div class="container">
    <!-- Encabezado con imagen -->
    <div class="text-center py-5">
        <img src="{{ asset('images/Logo.png') }}" width="300px" height="300px" alt="">
        <h1 class="display-4 fw-bold" >Bienvenido a Grano vivo</h1>
        <p class="lead">Café fresco, sostenible y de la mejor calidad directamente a tu taza.</p>
        <a href="#nuestros-cafes" class="btn btn-primary btn-lg">Descubre Nuestros Cafés</a>
    </div>

    <!-- Descripción de la marca -->
    <section class="my-5 text-center">
        <h2 class="text-uppercase" style="color: var(--ocre-dorado);">¿Quiénes Somos?</h2>
        <p>
            Somos una empresa apasionada por el café de alta calidad, comprometida con la sostenibilidad 
            y el comercio justo. Ofrecemos granos seleccionados de las mejores regiones cafetaleras del mundo.
        </p>
    </section>

    <!-- Nuestros Cafés -->
    <section id="nuestros-cafes" class="my-5">
        <h2 class="text-center text-uppercase" style="color: var(--ocre-dorado);">Nuestros Cafés</h2>
        <div class="row mt-4">
            <!-- Ejemplo de café 1 -->
            <div class="col-md-4 text-center">
                <h4 class="mt-3">Café Espresso</h4>
                <p>Café concentrado e intenso con crema en la superficie.</p>
            </div>
            <!-- Ejemplo de café 2 -->
            <div class="col-md-4 text-center">
                <h4 class="mt-3">Café Americano</h4>
                <p>Espresso diluido con agua caliente, más suave.</p>
            </div>
            <!-- Ejemplo de café 3 -->
            <div class="col-md-4 text-center">
                <h4 class="mt-3">Blend Capuchino</h4>
                <p>Equilibrio perfecto de café, leche y espuma.</p>
            </div>
        </div>
    </section>

    <!-- Beneficios del Café -->
    <section class="my-5 py-5 bg-light">
        <div class="container">
            <h2 class="text-center text-uppercase" style="color: var(--verde-oliva);">Beneficios de Nuestro Café</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h5>Alta calidad garantizada</h5>
                    <p>Seleccionamos los mejores granos para ofrecerte un café excepcional.</p>
                </div>
                <div class="col-md-6">
                    <h5>Sostenible y ético</h5>
                    <p>Trabajamos con pequeños productores comprometidos con el medio ambiente.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Llamada a la acción -->
    <section class="text-center my-5">
        <h2 class="mb-3">¿Listo para disfrutar del mejor café?</h2>
        <a href="{{ url('/tipos-cafe') }}" class="btn btn-primary btn-lg">Explora Nuestros Productos</a>
    </section>
</div>
@endsection
