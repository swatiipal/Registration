<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index() //create
    {
        $title = "Register New User";
        $url = url('/register');
        $data = compact('title', 'url');
        return view('registrationForm.register')->with($data);
    }
    public function store(Request $request)
    {
        // p($request->all());
        // die();
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
    public function forceDelete($id)
    {
        $user = Register::withTrashed()->find($id);
        if (!is_null($user)) {
            $user->forceDelete();
        }
        return redirect('utility');
        
    }
    public function restore($id)
    {
        $user = Register::withTrashed()->find($id);
        // die();
        if (!is_null($user)) {
            $user->restore();
        }
        return redirect('view');
        
    }

    public function edit($id)
    {
        // echo $id;
        // die();
        $register = Register::find($id);

        if (!is_null($register)) {
            $url = url('/register/update'). "/" .$id;
            $title = "Edit User Data";
            $data = compact('register','title', 'url');
            return view('registrationForm.register')->with($data);
        } else {
            return redirect('view');
        }
    }
    public function update($id,Request $request){
        $registers = Register::find($id);
        $registers->name = $request['name'];
        $registers->dob = $request['dob'];
        $registers->gender = $request['gender'];
        $registers->address = $request['address'];
        $registers->city = $request['city'];
        $registers->email = $request['email'];
        $registers->password = $request['password'];
        $registers->save();
        if($registers->save()){
            return redirect('view');
        }
    }

    public function trash(){
        $registers = Register::onlyTrashed()->get();
        $data = compact('registers');
        return view('utility')->with($data);
    }

}
