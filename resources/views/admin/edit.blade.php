@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Client</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Client Name</label>
            <input type="text" name="name" class="form-control" value="{{ $client->name }}" required>
        </div>
        <div class="form-group">
            <label for="logo_url">Logo</label>
            <input type="file" name="logo_url" class="form-control">
            <img src="{{ asset('storage/' . $client->logo_url) }}" alt="{{ $client->name }}" width="100">
        </div>
        <div class="form-group">
            <label for="project_url">Project URL</label>
            <input type="url" name="project_url" class="form-control" value="{{ $client->project_url }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $client->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Client</button>
    </form>
</div>
@endsection
