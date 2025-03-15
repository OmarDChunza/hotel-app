@extends('layouts.app')

@section('title', 'Agregar Hotel')

@section('content')
    <h2>Agregar Hotel</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('hotels.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Ciudad</label>
            <input type="text" name="city" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">NIT</label>
            <input type="text" name="nit" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Número de Habitaciones</label>
            <input type="number" name="room_count" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Volver</a>
    </form>
@endsection
