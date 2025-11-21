@extends('layouts.app')

@section('content')
    <a id="back" href="{{ route('pilotak.index') }}">Vissza a listához</a>

    <h1>Pilóta szerkesztése: {{ $pilota->nev }}</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pilotak.update', $pilota->az) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Név:</label>
        <input type="text" name="nev" value="{{ old('nev', $pilota->nev) }}" required>

        <label>Nem:</label>
        <input type="text" name="nem" value="{{ old('nem', $pilota->nem) }}" required>

        <label>Születési dátum:</label>
        <input style="color: black" type="date" name="szuldat" value="{{ old('szuldat', $pilota->szuldat) }}" required>

        <label>Nemzet:</label>
        <input type="text" name="nemzet" value="{{ old('nemzet', $pilota->nemzet) }}" required>

        <button type="submit">Változtatások mentése</button>
    </form>
@endsection