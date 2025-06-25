@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manage Clients</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-primary">Create New Client</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Logo</th>
                <th>Project URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td><img src="{{ asset('storage/' . $client->logo_url) }}" alt="{{ $client->name }}" width="50"></td>
                <td><a href="{{ $client->project_url }}" target="_blank">{{ $client->project_url }}</a></td>
                <td>
                    <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
