@extends('layouts.app')
@section('content')
<h1 id="maintitle">Főoldal</h1>
<br>
<p>
    <h3>Ez a beadandó alkalmazás egy webes rendszer, ahol:</h3>
</p>
<ul>
    <li>Regisztrálni és bejelentkezni lehet felhasználóként.</li>
    <li>Az adatbázis oldalon megjelennek az adatok.</li>
    <li>A diagram oldalon a felhasználó megtekintheti egy adott adattábla adatait bizonyos eloszlások alapján.</li>
    <li>A CRUD oldalon a felhasználó tud rekordokat létrehozni, módosítani, törölni.</li>
    <li>A Kapcsolat oldalon üzenetet lehet küldeni, ami eltárolódik az adatbázisban.</li>
    <li>Az Üzenetek oldalon a beérkezett üzenetek listázhatók.</li>
</ul>
<img id="f1" src="{{ asset('images/F1.jpg') }}" alt="F1 Logo">
@endsection