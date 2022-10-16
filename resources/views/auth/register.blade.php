<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <title>User Registration</title>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form <a
                                    href="{{ route('user.form') }}"style="float: right; "
                                    class="btn btn-secondary">X</a>
                            </h3>

                            <form method="POST" action="{{ route('user.register') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name" />
                                    @error('name')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control form-control-lg" name="email" />
                                    @error('email')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Age</label>
                                    <input type="number" class="form-control form-control-lg" name="age" />
                                    @error('age')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" name="bio"></textarea>
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

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password" />
                                    @error('password')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Create User" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
