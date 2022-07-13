<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\User;



use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {

        $posts = User::with('blogs')->get();
        
         return view('userDashboard')->with('posts', $posts);
    }

}
