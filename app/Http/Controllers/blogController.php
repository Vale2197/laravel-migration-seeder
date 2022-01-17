<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class blogController extends Controller
{
    //

    
    public function blogs(){

        $blogs = Blog::paginate(15);

        return view('blogs', compact('blogs'));
    }
}
