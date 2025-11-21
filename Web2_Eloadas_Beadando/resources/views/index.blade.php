@extends('layouts.app')
{{-- resources/views/index.blade.php --}}
@section('content')
<h1 id="maintitle">Beadandó</h1>

<nav id="mainMenu">
    <a href="{{ route('fooldal') }}">Főoldal</a>
    <a href="{{ route('adatbazis') }}">Adatbázis</a>
    <a href="{{ route('diagram') }}">Diagram</a>
    <a href="{{ route('crud.index') }}">CRUD</a>
</nav>

<div id="userMenu">
    @guest
        <a href="{{ route('login') }}">Bejelentkezés</a>
        <a href="{{ route('register') }}">Regisztráció</a>
    @endguest

    @auth
        <a href="{{ route('uzenetek') }}">Üzenetek</a>
        <a href="{{ route('kapcsolat') }}">Kapcsolat</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Kijelentkezés</button>
        </form>

        @if(auth()->user()->role === 'admin')
           <a href="{{ route('admin.index') }}">Admin</a>
        @endif
    @endauth
</div>
@endsection