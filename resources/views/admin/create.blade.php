@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Client</h1>
    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Client Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="logo_url">Logo</label>
            <input type="file" name="logo_url" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="project_url">Project URL</label>
            <input type="url" name="project_url" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Client</button>
    </form>
</div>
@endsection
