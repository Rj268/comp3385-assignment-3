<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:clients,email'],
            'telephone' => ['required', ],
            'address' => ['required',],
            'company_logo' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('company_logo'))
        {
            $path = $request->file('company_logo')->store('logos', 'public');
            $validated['company_logo'] =$path;
        }

        Client::create($validated);

        return redirect('/dashboard')->with('message', 'Client created successfully.');
    }
}
