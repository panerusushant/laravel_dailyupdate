<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogPostRequest;

class BlogController extends Controller
{
    
    public function create()
    {
        return view('blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogPostRequest $request)
    {

        
        $blog = Blog::create([
               
            'user_id' => $request->user_id,
            'title' => $request->title,
            'content' =>$request->content
        ]);
        if($blog){
            return redirect()->back()->with('Success', 'Blog successfully added!');
        }else{
            return redirect()->back()->with('Error', 'Blog not added!');
        }
        
    }

    
    
    
    
}
