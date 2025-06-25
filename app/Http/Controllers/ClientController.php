<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Display all clients
    public function index()
    {
        $clients = Client::all();  // Retrieve all clients
        return view('admin.clients.index', compact('clients'));
    }

    // Show form to create a new client
    public function create()
    {
        return view('admin.clients.create');
    }

    // Store new client data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo_url' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'project_url' => 'required|url',
            'description' => 'nullable|string',
        ]);

        // Handle file upload
        $logoPath = $request->file('logo_url')->store('clients', 'public');

        // Create new client
        Client::create([
            'name' => $request->name,
            'logo_url' => $logoPath,
            'project_url' => $request->project_url,
            'description' => $request->description,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client created successfully');
    }

    // Show form to edit a client
    public function edit(Client $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    // Update client data
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo_url' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'project_url' => 'required|url',
            'description' => 'nullable|string',
        ]);

        // Handle logo upload if new logo is provided
        if ($request->hasFile('logo_url')) {
            $logoPath = $request->file('logo_url')->store('clients', 'public');
            $client->logo_url = $logoPath;
        }

        // Update the client data
        $client->update([
            'name' => $request->name,
            'project_url' => $request->project_url,
            'description' => $request->description,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client updated successfully');
    }

    // Delete client
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client deleted successfully');
    }
}
