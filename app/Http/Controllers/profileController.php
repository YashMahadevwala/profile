<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;
use Illuminate\Support\Facades\Hash;
use Prophecy\Promise\ReturnPromise;

class profileController extends Controller
{
    //
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        // return $request;
        $valid = $request->validate([
            'email' => 'required | email | unique:registrations,email',
            'fullname' => 'required | min:4',
            'username' => 'required',
            'password' => 'required | min:4',
            'confirm_password' => 'required | min:4 | same:password',
        ],[
            'confirm_password.same' => 'Password & confirm Password not match.'
        ]);

        if ($valid) {
            $user = new registration;

            $user->fullname = $request->fullname;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password =  Hash::make($request->password);
            $user->token = $request->_token;
            $user->save();

            return redirect('login');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function logincheck(Request $request)
    {
        // return $request;

        $valid = $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:4',
        ]);

        if ($valid) {
            $data = registration::where('email','=',$request->email)->first();
            if (!$data) {
                return back()->with('failEmail','Email Not Found');
            }else{
                if (!Hash::check($request->password, $data->password)) {
                    return back()->with('failPass','Password Not Match');
                }else{
                    $request->session()->put('fullname',$data->fullname);
                    // return $request->session()->get('fullname');
                    $request->session()->put('uid', $data->id);
                    return view('profile',['data'=>$data]);
                }
            }
        }
        // return $data;
    }

    public function profile()
    {
        $data = registration::find(session('uid'));
        return view('profile',['data'=>$data]);
    }

    public function editprofile($id)
    {
        $data = registration::find($id);
        // return redirect('editprofile');
        return view('editprofile',['data'=>$data]);
    }

    public function updateprofile(Request $request)
    {
        // return $request->file('avtar');
        $valid = $request->validate([
            'email' => 'required | email',
            'fullname' => 'required | min:4',
            'username' => 'required',
            'gender' => 'required',
            'mobile' => 'required | max:10',
            'address' => 'required | min:4',
            'education' => 'required | min:4',
            'stream' => 'required | min:4',
            'cur_job' => 'required |min:4',
            'dob' => 'required',
        ]);

        if ($valid) {
            $user = new registration;
            $user = registration::find($request->id);
            
            $user->fullname = $request->fullname;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->gender = $request->gender;
            $user->mobile = $request->mobile;
            $user->address = $request->address;
            $user->education = $request->education;
            $user->stream = $request->stream;
            $user->current_job = $request->cur_job;
            $user->dob = $request->dob;
            $user->token = $request->_token;
            // if($request->avtarname == ''){
            //     $destinationPath = 'images/';
            //     $file = $request->file('avtar');
            //     $user->avtar = $file->getClientOriginalName();
            //     $file->move($destinationPath,$file->getClientOriginalName());
                
            // }if($request->file('avtar') != ''){
            //     $destinationPath = 'images/';
            //     $file = $request->file('avtar');
            //     $user->avtar = $file->getClientOriginalName();
            //     $file->move($destinationPath,$file->getClientOriginalName());
            // }
            $destinationPath = 'images/';
            $file = $request->file('avtar');
            $user->avtar = $file->getClientOriginalName();
            $file->move($destinationPath,$file->getClientOriginalName());
            $user->save();

            return redirect('profile');
        }
    }


    public function logout(Request $request)
    {
        $request->session()->forget('fullname');
        $request->session()->forget('uid');

        return redirect('login');
    }
}
