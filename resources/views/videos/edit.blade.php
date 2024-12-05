<!-- resources/views/videos/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Video</h1>
    <form action="{{ route('videos.update', $video->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $video->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control">{{ $video->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="youtube_id">YouTube Video ID</label>
            <input type="text" id="youtube_id" name="youtube_id" class="form-control" value="{{ $video->youtube_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Video</button>
    </form>
@endsection
