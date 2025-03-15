@extends('layouts.app')

@section('title', 'Lista de Habitaciones')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Habitaciones</h2>
        <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Volver a Hoteles</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Hotel</th>
                <th>Tipo de Habitación</th>
                <th>Acomodación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->hotel->name }}</td>
                    <td>{{ $room->type }}</td>
                    <td>{{ $room->accommodation }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
