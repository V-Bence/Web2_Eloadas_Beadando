<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pilota;

class DiagramController extends Controller
{
    public function index()
    {
        // lekérjük a nemzetiségek darabszámát
        $nemzetek = Pilota::select('nemzet')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('nemzet')
            ->get();

        // elkülönítjük a Chart.js-hez
        $labels = $nemzetek->pluck('nemzet');
        $values = $nemzetek->pluck('count');

        return view('diagram', compact('labels', 'values'));
    }
}