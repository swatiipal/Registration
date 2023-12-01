<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('registrationForm.register');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'city' =>'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        dd($request->all());
    }
}
