<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registration</title>
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    
    
        <link rel="icon" href="Favicon.png">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    </head>
    <body class="antialiased">
    
        <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Register
                                    
                                </div>
                                <div class="card-body">
                                    <form name="my-form" action="/registration" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="fullname" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="fullname" name="fullname" class="form-control" name="full-name" value="{{ old('fullname') }}">
                                                @error('fullname')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                            <div class="col-md-6">
                                                <input type="text" id="email" name="email" class="form-control" name="email-address" value="{{ old('email') }}">
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="username" class="col-md-4 col-form-label text-md-right">User Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="username" name="username" class="form-control" name="username" value="{{ old('username') }}">
                                                @error('username')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                            <div class="col-md-6">
                                                <input type="text" id="password" name="password" class="form-control">
                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="confirm_password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                            <div class="col-md-6">
                                                <input type="text" id="confirm_password" name="confirm_password" class="form-control">
                                                @error('confirm_password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
        
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                Register
                                                </button>
                                                <a href="/login" class="btn btn-primary" style="">Log in</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
