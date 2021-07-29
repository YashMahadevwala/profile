<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="antialiased">

    <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    @if ($data->avtar == '')
                                        <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> 
                                    @else
                                        <img class="rounded-circle mt-5" src="{{url('/images/'.$data->avtar)}}" width="80px" height="90px">
                                    @endif
                                    </div>
                                <h6 class="f-w-600">{{ session()->get('fullname') }}</h6>
                                <p>{{ $data->stream }}</p> <a href="editprofile/{{ $data->id }}"><i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i></a>
                                <div class="m-b-5"><a href="/logout"><i class="fas fa-sign-out-alt"></i></a></div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{ $data->email }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        {{-- <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400">98979989898</h6> --}}
                                        <p class="m-b-10 f-w-600">Username</p>
                                        <h6 class="text-muted f-w-400">{{  $data->username }}</h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Profession</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Current Job</p>
                                        <h6 class="text-muted f-w-400">
                                            @if($data->current_job == '')
                                                Edit Your Details
                                                @else
                                                {{ $data->current_job }}
                                            @endif
                                        </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Education</p>
                                        <h6 class="text-muted f-w-400">@if($data->education == '')
                                            Edit Your Details
                                            @else
                                            {{ $data->education }}
                                        @endif</h6>
                                    </div>
                                </div>

                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Craetor part</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Create Blog</p>
                                        <h6 class="text-muted f-w-400">
                                            <a href="createblog" style="color: #919AA3"><i class="fab fa-blogger-b"></i>
                                            Click To Create</a>
                                        </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Total Blog</p>
                                        <h6 class="text-muted f-w-400">
                                            {{-- <i class="fas fa-th" href=""></i> --}}
                                            @isset($count)
                                            {{ $count }}
                                            @else
                                             {{-- {{ redirect('login') }} --}}
                                             {{-- {{ redirect(Request::url()) }} --}}
                                            @endisset
                                        </h6>
                                    </div>
                                </div>

                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
</body>
</html>
