<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\RegistrationPostRequest;

use Illuminate\Http\Request;

class registrationController extends Controller
{
    
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
        
        try{

            $user = User::create([
                'username' => $request->username,
                'email' =>$request->email,
                'password' => $request->password,
                'role' => 'user'
            ]);
            return redirect('/admin') ->with('Success', 'User Registered!');
        }catch(\Exception $e){
            return redirect() ->back()->with('Error', 'Try Again!');
        }

    }

   
}
