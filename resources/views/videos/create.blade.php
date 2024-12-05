<!-- resources/views/videos/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Video</h1>
    <form action="{{ route('videos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="youtube_id">YouTube Video ID</label>
            <input type="text" id="youtube_id" name="youtube_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save Video</button>
    </form>
@endsection
