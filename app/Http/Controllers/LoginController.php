<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            // 'password' => 'required',
            // 'confirmpassword' => 'required|same:password'
        ]);
        // dd($request->all());
        
        $login = new Login;
        $login->name = $request['name'];
        $login->email = $request['email'];
        $login->password = $request['password'];
        // $login->password = md5($request['password']);
        $login->save();
        if ($login->save()) {
            return "DATA INSERTED SUCCESSFULLY...";
        }else{
            return "Invalid Login..";
        }
        
    }
}
