@extends('layout')
@section('title', 'Edit Profile')
@section('contents')
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Profile</h3>
                            <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name"
                                        value="{{ $user->name }}" />
                                    @error('name')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Age</label>
                                    <input type="number" class="form-control form-control-lg" name="age"
                                        value="{{ $user->age }}" />
                                    @error('age')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="bio">{{ $user->bio }}</textarea>
                                    @error('bio')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                    @error('image')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Update Profile" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
