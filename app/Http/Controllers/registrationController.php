<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\RegistrationPostRequest;

use Illuminate\Http\Request;

class registrationController extends Controller
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
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistrationPostRequest $request)
    {
        

             

        $flight = User::create([
            'username' => $request->username,
            'email' =>$request->email,
            'password' => $request->password,
            'role' => 'user'
        ]);
        return redirect('/register-form');

    
    }

   
}
