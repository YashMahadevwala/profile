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
                    // $request->session()->put('uid', $data->id);
                    $request->session()->get('uid');
                    // return $data;
                    return view('profile',['data'=>$data]);
                }
            }
        }
        // return $data;
    }

    public function profile()
    {
        return view('profile');
    }

    public function editprofile($id)
    {
        $data = registration::find($id);
        return view('editprofile',['data'=>$data]);
    }

    public function updateprofile(Request $request)
    {
        // return $request->file('avtar');
        $valid = $request->validate([
            'email' => 'required | email | unique:registrations,email',
            'fullname' => 'required | min:4',
            'username' => 'required',
            'gender' => 'reuired',
            'mobile' => 'reuired | min:10 | max:10',
            'address' => 'reuired | min:4',
            'education' => 'reuired | min:4',
            'stream' => 'reuired | min:4',
            'cur_job' => 'reuired |min:4',
            'dob' => 'reuired',
            'avtar' => 'required'

        ]);

        if ($valid) {
            $user = new registration;

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
            $user->save();

            return redirect('profile');
        }
    }
}
