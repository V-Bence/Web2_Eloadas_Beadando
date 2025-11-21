<?php

namespace App\Http\Controllers;

use App\Models\Pilota;
use Illuminate\Http\Request;

class PilotaCrudController extends Controller
{
    // LISTA (Read)
    public function index()
    {
        $pilotak = Pilota::orderBy('az', 'asc')->get();

        return view('pilotak.index', compact('pilotak'));
    }

    // ÚJ PILÓTA ŰRLAP (Create form)
    public function create()
    {
        return view('pilotak.create');
    }

    // ÚJ PILÓTA MENTÉSE (Store)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nev'     => 'required|string|max:255',
            'nem'     => 'required|string|max:10',
            'szuldat' => 'required|date',
            'nemzet'  => 'required|string|max:50',
        ]);

        Pilota::create($validated);

        return redirect()->route('pilotak.index')
            ->with('success', 'Pilóta sikeresen létrehozva!');
    }

    // SZERKESZTŐ ŰRLAP (Edit form)
    public function edit(Pilota $pilota)
    {
        return view('pilotak.edit', compact('pilota'));
    }

    // MÓDOSÍTÁS MENTÉSE (Update)
    public function update(Request $request, Pilota $pilota)
    {
        $validated = $request->validate([
            'nev'     => 'required|string|max:255',
            'nem'     => 'required|string|max:10',
            'szuldat' => 'required|date',
            'nemzet'  => 'required|string|max:50',
        ]);

        $pilota->update($validated);

        return redirect()->route('pilotak.index')
            ->with('success', 'Pilóta adatai frissítve!');
    }

    // TÖRLÉS (Delete)
    public function destroy($id)
    {
        $pilota = Pilota::findOrFail($id);
        $pilota->delete();

        return redirect()->route('pilotak.index')->with('success', 'Pilóta sikeresen törölve!');
    }
}
