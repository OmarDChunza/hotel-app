@extends('layouts.app')

@section('title', 'Lista de Hoteles')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Hoteles</h2>
        <a href="{{ route('hotels.create') }}" class="btn btn-primary">Agregar Hotel</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->address }}</td>
                    <td>{{ $hotel->city }}</td>
                    <td>
                        <a href="{{ route('hotels.edit', $hotel) }}" class="btn btn-warning btn-sm">Editar</a>
                        <script>
                            document.querySelectorAll('.delete-form').forEach(form => {
                                form.addEventListener('submit', function (event) {
                                    event.preventDefault(); // Evita la recarga automática por el formulario
                                    if (confirm('¿Seguro que deseas eliminar este hotel?')) {
                                        fetch(this.action, {
                                            method: 'POST',
                                            body: new FormData(this)
                                        }).then(response => {
                                            if (response.ok) {
                                                window.location.reload(); // Recarga la página después de eliminar
                                            }
                                        });
                                    }
                                });
                            });
                            </script>
                        <a href="{{ route('rooms.create', $hotel) }}" class="btn btn-info btn-sm">Agregar Habitación</a>
                        <a href="{{ route('rooms.index') }}" class="btn btn-success btn-sm">Ver Habitaciones</a>
                        <form action="{{ route('hotels.destroy', $hotel) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este hotel?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
