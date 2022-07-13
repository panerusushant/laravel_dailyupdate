<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\loginPostRequest;

class loginController extends Controller
{
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( loginPostRequest $request)
    {
   
    

       if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'user' ])){
        
         return redirect('/user');
        

       }elseif(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin' ])){
            
         return redirect('/admin');
       
       }else{

        return redirect('/');

       }
    }

   
   
   
}
