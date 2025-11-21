@extends('layouts.app')

@section('content')
    <a id="back" href="{{ route('home') }}">Vissza</a>

    <h1>Pilóták – CRUD</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pilotak.create') }}" class="btn btn-primary">Új pilóta hozzáadása</a>

    <div class="columns">
    <div class="column-box">
    <div class="scroll-box">
    <table class="crud-table">
        <thead>
            <tr>
                <th>Az</th>
                <th>Név</th>
                <th>Nem</th>
                <th>Születési dátum</th>
                <th>Nemzet</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pilotak as $p)
                <tr>
                    <td>{{ $p->az }}</td>
                    <td>{{ $p->nev }}</td>
                    <td>{{ $p->nem }}</td>
                    <td>{{ $p->szuldat }}</td>
                    <td>{{ $p->nemzet }}</td>
                    <td>
                        <div class="action-buttons">
                            
                            <a href="{{ route('pilotak.edit', $p->az) }}" class="">
                                Szerkesztés
                            </a>

                            <form action="{{ route('pilotak.destroy', $p->az) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn"
                                    onclick="return confirm('Biztosan törlöd?')">
                                    TÖRLÉS
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
     </div>
    </div>
</div>
@endsection