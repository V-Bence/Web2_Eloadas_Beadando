<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pilota;
use App\Models\Gp;
use App\Models\Eredmeny;

class DatabaseController extends Controller
{
    public function index()
    {
        $pilotak = Pilota::all();
        $gp = Gp::all();
        $eredmeny = Eredmeny::all();

        return view('adatbazis', compact('pilotak', 'gp', 'eredmeny'));
    }
}