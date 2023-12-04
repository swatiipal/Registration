<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index()
    {
        $title = "Register User";
        $url = url('/register');
        $data = compact('title', 'url');
        return view('registrationForm.register');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'city' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        // dd($request->all());
        $register = new Register;
        $register->name = $request['name'];
        $register->dob = $request['dob'];
        $register->gender = $request['gender'];
        $register->address = $request['address'];
        $register->city = $request['city'];
        $register->email = $request['email'];
        $register->password = $request['password'];
        $register->save();
        if ($register->save()) {
            // return "User REGISTERED SUCCESSFULLY...";
            return view('welcome');
        } else {
            return "Invalid Login..";
        }
    }

    public function view()
    {
        $registers = Register::all();
        // dd($registers->toArray());
        $data = compact('registers');
        return view('registrationForm.register-view')->with($data);
    }

    public function delete($id)
    {
        // echo $id;
        // die();
        // Register::find($id)->delete();
        $user = Register::find($id);
        if (!is_null($user)) {
            $user->delete();
        }
        // return redirect()->back();
        return redirect('view');
        // echo "<pre>";
        // print_r($registers);
    }

    public function edit($id)
    {
        // echo $id;
        // die();
        $register = Register::find($id);

        if (!is_null($register)) {
            $url = url('/register/update'). "/" .$id;
            $title = "Update User";
            $data = compact('register','title', 'url');
            return view('registrationForm.register')->with($data);
        } else {
            return redirect('view');
        }
    }
}
