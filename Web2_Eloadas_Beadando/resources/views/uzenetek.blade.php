@extends('layouts.app')
<div id="uzenetek-container">
<a id="back" href="{{ route('home') }}">Vissza</a>
<h2>Beérkezett üzenetek</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Név</th>
        <th>Email</th>
        <th>Üzenet</th>
        <th>Küldve</th>
    </tr>
    @foreach($uzenetek as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->nev }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->uzenet }}</td>
            <td>{{ $u->created_at->format('Y-m-d H:i') }}</td>
        </tr>
    @endforeach
</table>
</div>
