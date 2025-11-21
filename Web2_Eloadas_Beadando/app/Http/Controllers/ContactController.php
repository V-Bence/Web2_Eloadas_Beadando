<?php

namespace App\Http\Controllers;
use App\Models\Uzenet;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('kapcsolat');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nev'    => 'required|string|max:255',
            'email'  => 'required|email',
            'uzenet' => 'required|string',
        ]);

        Uzenet::create($validated);

        return redirect()->route('kapcsolat')
            ->with('success', 'Üzenet sikeresen elküldve!');
    }
}
