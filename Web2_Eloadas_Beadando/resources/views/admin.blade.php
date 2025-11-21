@extends('layouts.app')
<a id="back" href="{{ route('home') }}">Vissza</a>
<h1 class="admin-title">Felhasználók</h1>

<div class="admin-container">
    <table class="admin-table">
        <thead>
            <tr>
                <th>id</th>
                <th>név</th>
                <th>email</th>
                <th>jogosultság</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
                <tr>
                    <td>{{ $u->id }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->role }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>