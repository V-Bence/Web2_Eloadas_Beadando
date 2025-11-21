@extends('layouts.app')

@section('content')

<a id="back" href="{{ route('home') }}">Vissza</a>

<h1>Diagram – Pilóták nemzetiségi megoszlása</h1>

<canvas id="myChart" width="400" height="400"></canvas>

{{-- Chart.js betöltése CDN-ről --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const labels = @json($labels);
    const values = @json($values);

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: values,
                borderWidth: 1
            }]
        }
    });
</script>

@endsection