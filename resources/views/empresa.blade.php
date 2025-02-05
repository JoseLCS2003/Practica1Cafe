@extends('layouts.app')

@section('title','prueba')

@section('content')
<section id="sobre-nosotros" class="my-5 py-5" style="background-color: var(--blanco-roto);">
    <div class="container">
        <h2 class="text-center text-uppercase" style="color: var(--cafe-oscuro);">Sobre Nosotros</h2>
        <p class="text-center mb-4" style="color: var(--verde-oliva);">
            Descubre quiénes somos y por qué somos la mejor opción para los amantes del café.
        </p>

        <div class="row">
            <div class="col-md-6">
                <h3 class="text-uppercase" style="color: var(--ocre-dorado);">Nuestra Historia</h3>
                <p>
                    En <strong>Grano vivo</strong>, somos apasionados del café. Nos dedicamos a seleccionar los mejores granos, 
                    directamente de las fincas cafetaleras, garantizando calidad, frescura y un sabor excepcional en cada taza. 
                    Nuestro compromiso es llevar la esencia del café, desde su origen hasta tu hogar, mientras apoyamos prácticas 
                    sostenibles y justas.
                </p>
            </div>

            <div class="col-md-6">
                <img src="{{ asset('images/Logo_slogan.png')}}" width="300px" alt="Café en granos" class="img-fluid rounded shadow">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <h4 class="text-uppercase" style="color: var(--ocre-dorado);">Misión</h4>
                <p>
                    Proveer café de alta calidad que conecte a nuestros clientes con el auténtico sabor y la tradición cafetalera, 
                    fomentando el comercio justo y la sostenibilidad ambiental.
                </p>
            </div>

            <div class="col-md-4">
                <h4 class="text-uppercase" style="color: var(--ocre-dorado);">Visión</h4>
                <p>
                    Convertirnos en una marca líder en la industria del café, reconocida por nuestra calidad, compromiso social y 
                    respeto por el medio ambiente.
                </p>
            </div>

            <div class="col-md-4">
                <h4 class="text-uppercase" style="color: var(--ocre-dorado);">Valores</h4>
                <ul>
                    <li><strong>Calidad:</strong> Garantizamos granos cuidadosamente seleccionados y un proceso de tostado impecable.</li>
                    <li><strong>Sostenibilidad:</strong> Trabajamos con productores que aplican prácticas amigables con el medio ambiente.</li>
                    <li><strong>Compromiso Social:</strong> Apoyamos a las comunidades cafetaleras mediante comercio justo.</li>
                    <li><strong>Pasión por el Café:</strong> Cada grano cuenta una historia, y queremos compartirla contigo.</li>
                </ul>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col text-center">
                <h4 class="text-uppercase" style="color: var(--ocre-dorado);">¿Por qué elegirnos?</h4>
                <p>
                    Café 100% natural y fresco, relación directa con productores locales, opciones personalizadas según tus 
                    preferencias de sabor y envíos rápidos y seguros a cualquier lugar.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection