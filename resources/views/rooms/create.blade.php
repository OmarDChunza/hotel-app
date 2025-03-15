@extends('layouts.app')

@section('title', 'Agregar Habitación')

@section('content')
    <h2>Agregar Habitación para {{ $hotel->name }}</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rooms.store') }}" method="POST">
        @csrf
        <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">

        <div class="mb-3">
            <label class="form-label">Tipo de Habitación</label>
            <select name="type" id="type" class="form-control">
                <option value="Estándar">Estándar</option>
                <option value="Junior">Junior</option>
                <option value="Suite">Suite</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Acomodación</label>
            <select name="accommodation" id="accommodation" class="form-control">
                <!-- Opciones según tipo de habitación -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('hotels.index') }}" class="btn btn-secondary">Volver</a>
    </form>

    <script>
        document.getElementById('type').addEventListener('change', function () {
            let type = this.value;
            let accommodationSelect = document.getElementById('accommodation');
            let options = {
                'Estándar': ['Sencilla', 'Doble'],
                'Junior': ['Triple', 'Cuádruple'],
                'Suite': ['Sencilla', 'Doble', 'Triple']
            };

            // Limpiar opciones previas
            accommodationSelect.innerHTML = '';

            // Agregar nuevas opciones
            options[type].forEach(option => {
                let opt = document.createElement('option');
                opt.value = option;
                opt.textContent = option;
                accommodationSelect.appendChild(opt);
            });
        });

        // Ejecutar cambio inicial para actuzlizar las opciones
        document.getElementById('type').dispatchEvent(new Event('change'));
    </script>
@endsection
