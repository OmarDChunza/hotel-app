@extends('layouts.app')

@section('title', 'Editar Hotel')

@section('content')
    <h2>Editar Hotel</h2>

    <form action="{{ route('hotels.update', $hotel) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ $hotel->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text" name="address" class="form-control" value="{{ $hotel->address }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Ciudad</label>
            <input type="text" name="city" class="form-control" value="{{ $hotel->city }}">
        </div>
        <div class="mb-3">
            <label class="form-label">NIT</label>
            <input type="text" name="nit" class="form-control" value="{{ $hotel->nit }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Número de Habitaciones</label>
            <input type="number" name="room_count" class="form-control" value="{{ $hotel->room_count }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Volver</a>
    </form>
@endsection
