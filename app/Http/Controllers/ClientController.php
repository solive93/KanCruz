<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view ('client.index', compact('clients'));
    }

    
    public function create()
    {
        return view ('client.create');
    }

   
    public function store(Request $request)
    {
        Client::create($request->all());
        return redirect (route('client.index'));   
    }

   
    public function show(Client $client)
    {
        return redirect(route('client.show', compact('client')));
;    }

   
    public function edit(Client $client)
    {
        return redirect(route('client.edit', compact('client')));
    }

    
    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return view (route('client.index'))->with('success', 'Datos del cliente modificados satisfactoriamente');

    }

    
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect (route('client.index'))->with('success', 'Cliente eliminado satisfactoriamente');
    }
}
