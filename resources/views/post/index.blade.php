@extends('layout')
@section('title', 'Posts')
@section('contents')
    <div class="container" style="padding-top: 50px">
        {{-- <div class="list-group">
            @foreach ($posts as $post)
                <a href="#" class="list-group-item list-group-item-action " aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                    </div>
                    <p class="mb-1">{{ Str::words($post->description, 3, '...') }}</p>
                    <small><img src="{{ asset('/uploads/images/' . $post->image) }}" alt="" width="150px"
                            height="150px"></small>
                </a>
            @endforeach

        </div> --}}

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td><img src="{{ asset('/uploads/images/' . $post->image) }}" alt="" width="150px"
                                height="150px"></td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">Edit Post</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete Post</button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
@endsection
