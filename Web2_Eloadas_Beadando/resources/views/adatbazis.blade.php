@extends('layouts.app')
<a id="back" href="{{ route('home') }}">Vissza</a>

<h1>Adatbázis – Forma-1</h1>

<div class="columns">
    <div class="column-box">
        <h2>PILÓTÁK</h2>
        <div class="scroll-box">
            <table>
                <tr>
                    <th>az</th>
                    <th>név</th>
                    <th>nem</th>
                    <th>szül</th>
                    <th>nemzet</th>
                </tr>
                @foreach($pilotak as $p)
                    <tr>
                        <td>{{ $p->az }}</td>
                        <td>{{ $p->nev }}</td>
                        <td>{{ $p->nem }}</td>
                        <td>{{ $p->szuldat }}</td>
                        <td>{{ $p->nemzet }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

   {{-- NAGYDÍJAK (GP) --}}
    <div class="column-box">
        <h2>NAGYDÍJAK</h2>
        <div class="scroll-box">
            <table>
                <tr>
                    <th>dátum</th>
                    <th>helyszín</th>
                    <th>név</th>
                </tr>
                @foreach($gp as $g)
                    <tr>
                        <td>{{ $g->datum }}</td>
                        <td>{{ $g->helyszin }}</td>
                        <td>{{ $g->nev }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    {{-- EREDMÉNYEK --}}
    <div class="column-box">
        <h2>EREDMÉNYEK</h2>
        <div class="scroll-box">
            <table>
                <tr>
                    <th>dátum</th>
                    <th>pilótaaz</th>
                    <th>helyezés</th>
                    <th>hiba</th>
                    <th>csapat</th>
                    <th>típus</th>
                    <th>motor</th>
                </tr>
                @foreach($eredmeny as $e)
                    <tr>
                        <td>{{ $e->datum }}</td>
                        <td>{{ $e->pilotaaz }}</td>
                        <td>{{ $e->helyezes }}</td>
                        <td>{{ $e->hiba }}</td>
                        <td>{{ $e->csapat }}</td>
                        <td>{{ $e->tipus }}</td>
                        <td>{{ $e->motor }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>