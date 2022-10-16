@extends('layout')
@section('title', 'Edit Post')
@section('contents')
    <div class="container" style="padding-top: 50px">
        <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="title"
                    value="{{ $post->title }}">
                @error('title')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="description">{{ $post->description }}</textarea>
                @error('description')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                @error('image')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" name="image">
            </div>

            <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" name="status">
                    <option>Select a status</option>
                    <option value="1" @selected($post->status == 1)>Enable</option>
                    <option value="0" @selected($post->status == 0)>Disable</option>
                </select>
                @error('status')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
@endsection
