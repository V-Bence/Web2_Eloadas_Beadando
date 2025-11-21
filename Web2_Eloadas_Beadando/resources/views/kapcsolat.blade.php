@extends('layouts.app')
<div class="kapcsolat-container">
<a id="back" href="{{ route('home') }}">Vissza</a>
<h2>Kapcsolat fül</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('kapcsolat') }}" method="POST">
    @csrf
    <label>Név:</label>
    <input type="text" name="nev" value="{{ old('nev') }}">
    @error('nev') <div class="error">{{ $message }}</div> @enderror

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email') <div class="error">{{ $message }}</div> @enderror

    <label>Üzenet:</label>
    <textarea name="uzenet">{{ old('uzenet') }}</textarea>
    @error('uzenet') <div class="error">{{ $message }}</div> @enderror

    <button type="submit">Küldés</button>
</form>
</div>