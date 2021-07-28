<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}">

    </head>
    <body class="antialiased">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-cente r p-3 py-5"><img class="rounded-circle mt-5" src="https://img.icons8.com/bubbles/100/000000/user.png"><span class="font-weight-bold">{{ $data->fullname }}</span><span class="text-black-50">{{ $data->email }}</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <form action="/editprofile" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Full Name</label><input type="text" name="fullname" class="form-control" placeholder="Enter Full Name" value="{{ $data->fullname }}">
                                <input type="hidden" name="id" class="form-control" placeholder="Enter Full Name" value="{{ $data->id }}">
                                @error('fullname')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Email Address</label><input type="text" readonly name="email" class="form-control" placeholder="Enter Email Address" value="{{ $data->email }}"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Username</label><input type="text" name="username" class="form-control" placeholder="Enter Username" value="{{ $data->username }}">
                                @error('username')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Gender</label><div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked>
                                <label class="form-check-label" for="">
                                  Male
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                                <label class="form-check-label" for="">
                                  Female
                                </label>
                              </div></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" value="{{ $data->mobile }}">
                                @error('mobile')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text" name="address" class="form-control" placeholder="Enter Address" value="{{ $data->address }}">
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12"><label class="labels">Education</label><input type="text" name="education" class="form-control" placeholder="Enter Education" value="{{ $data->education }}">
                                @error('education')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12"><label class="labels">Stream</label><input type="text" name="stream" class="form-control" placeholder="Enter Stream" value="{{ $data->stream }}">
                                @error('stream')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Current Job</label><input type="text" name="cur_job" class="form-control" placeholder="Enter Current Job" value="{{ $data->current_job }}">
                                @error('cur_job')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6"><label class="labels">Date Of Birth</label><input type="date" name="dob" class="form-control" value="{{ $data->dob }}" placeholder="Enter Date Of Birth">
                                @error('dob')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"> <label for="avtar" class="form-label">Upload Your New Avtar</label>
                                <input class="form-control" type="file" id="avtar" name="avtar">
                                @error('avtar')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                            <a class="btn btn-danger profile-button" href="/profile">Cancel</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        </div>
        </div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
</body>
</html>
