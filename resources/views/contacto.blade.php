@extends('layouts.app')

@section('title','Contacto')

@section('content')
<section id="contacto" class="my-5 py-5">
    <div class="container">
        <h2 class="text-center text-uppercase" style="color: var(--cafe-oscuro);">¡Contáctanos!</h2>
        <p class="text-center mb-4" style="color: var(--verde-oliva);">
            Estamos aquí para ayudarte a disfrutar del mejor café. Contáctanos a través de los siguientes medios:
        </p>

        <div class="row">
            <div class="col-md-6">
                <h4 class="text-uppercase" style="color: var(--ocre-dorado);">Nuestra Dirección</h4>
                <p>
                    <strong>Grano Vivo</strong><br>
                    Calle del Sabor, 123<br>
                    Ciudad, País
                </p>

                <h4 class="text-uppercase" style="color: var(--ocre-dorado);">Teléfono</h4>
                <p>+123 456 7890</p>

                <h4 class="text-uppercase" style="color: var(--ocre-dorado);">Correo Electrónico</h4>
                <p>ventas@granovivo.com</p>

                <h4 class="text-uppercase" style="color: var(--ocre-dorado);">Síguenos</h4>
                <p>
                    <a href="https://www.instagram.com/granovivo" style="color: var(--cafe-oscuro); text-decoration: none;">Instagram</a><br>
                    <a href="https://www.facebook.com/granovivo" style="color: var(--cafe-oscuro); text-decoration: none;">Facebook</a><br>
                    <a href="https://www.twitter.com/granovivo" style="color: var(--cafe-oscuro); text-decoration: none;">Twitter</a>
                </p>
            </div>

            <div class="col-md-6">
                <h4 class="text-uppercase" style="color: var(--ocre-dorado);">Formulario de Contacto</h4>
                <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label" style="color: var(--cafe-oscuro);">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Tu nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: var(--cafe-oscuro);">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Tu correo electrónico" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label" style="color: var(--cafe-oscuro);">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" class="form-control" placeholder="Escribe tu mensaje aquí" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: var(--ocre-dorado); border: none;">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection