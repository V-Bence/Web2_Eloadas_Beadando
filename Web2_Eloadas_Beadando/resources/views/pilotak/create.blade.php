@extends('layouts.app')

@section('content')
    <a id="back" href="{{ route('pilotak.index') }}">Vissza a listához</a>

    <h1>Új pilóta hozzáadása</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pilotak.store') }}" method="POST">
        @csrf

        <label>Név:</label>
        <input type="text" name="nev" value="{{ old('nev') }}" required>

        <label>Nem:</label>
        <input type="text" name="nem" value="{{ old('nem') }}" required>

        <label>Születési dátum:</label>
        <input style="color: black" type="date" name="szuldat" value="{{ old('szuldat') }}" required>

        <label>Nemzet:</label>
        <input type="text" name="nemzet" value="{{ old('nemzet') }}" required>

        <button type="submit">Mentés</button>
    </form>
@endsection