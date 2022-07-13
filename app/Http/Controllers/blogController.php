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

        try{

            $blog = Blog::create([
               
                'user_id' => $request->user_id,
                'title' => $request->title,
                'content' =>$request->content
            ]);
            return redirect()->back()->with('Success', 'Blog successfully added!');

        }catch(\Exception $e){
            return redirect()->back()->with('Error', 'Blog not added!');
        }
        
    }

    
    
    
    
}
