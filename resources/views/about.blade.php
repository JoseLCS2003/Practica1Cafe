@extends('layouts.app')

@section('title', 'Acerca de')

@section('content')
<div>
    <h2>Acerca de Nosotros</h2>
    <p>Somos una empresa dedicada a ofrecer los mejores servicios.</p>
    <a href="{{ url('/') }}" class="btn btn-secondary">Volver al inicio</a>
</div>
@endsection
