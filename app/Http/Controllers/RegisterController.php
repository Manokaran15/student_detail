<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = $request->validate([
            'user_name'         => "required|unique:users",
            'name'              => "required",
            'email'             => "required|email|regex:^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$^|unique:users",
            'password'          => "required",
            'confirm_password'  => 'required|same:password',
            'phone_number'      => "required|unique:users",
        ]);
        try {
            $users = User::create([
                                    'user_name'         => $request->user_name,
                                    'name'              => $request->name,
                                    'email'             => $request->email,
                                    'password'          => $request->password,
                                    'confirm_password'  => $request->confirm_password,
                                    'phone_number'      => $request->phone_number
                                ]);
            return view('auth.login');
        } catch(Exception $e) {
            return 'Unable to create USER!!<a href='.URL('register').'>Back to Register !!</a>';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
