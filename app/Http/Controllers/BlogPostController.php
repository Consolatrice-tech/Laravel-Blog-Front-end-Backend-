<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index(){

        $blogs = BlogPost:: all();

       //return $blogs->title;
        //return $blogs->title;

     return view('index',compact('blogs'));
        // return $blogs;
    }
    public function show($id)
    {
        //
        $blog = BlogPost::find($id);
        return view('detail',compact('blog'));

    }
}
